<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \PHRETS\Configuration;
use \PHRETS\Session;
use App\Residential;

class retsUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rets:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upate local RETS data';

    private $_config;


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Configuration $config) {

        $this->setConfiguration($config);

        // @todo use service provider or factory
        $rets = new Session($this->_config);

        $connect = $rets->Login();

        $property_classes = ['Residential'];

        Residential::truncate();

        foreach ($property_classes as $pc) {

            $query = "(OnMarketDate=2019-10-20+)";

            $results = $rets->Search('Property', $pc, $query);

            file_put_contents('Property_' . $pc . '.csv', $results->toCSV());

            if (($h = fopen('Property_' . $pc . '.csv', "r")) !== FALSE) {

                $header = fgetcsv($h);

                $collection = [];

                while (($data = fgetcsv($h)) !== FALSE) {

                    foreach ($data as $key => $value) {

                        if (empty($value)) continue;

                        $collection[$header[$key]] = $value;

                    }

                    Residential::insert($collection);

                    // print_r($collection);

                }

                fclose($h);
            }

        }

    }

    private function setConfiguration($config) {

        $this->_config = $config->setLoginUrl(env('RETS_LOGIN_URL'))
                                ->setUsername(env('RETS_USERNAME'))
                                ->setPassword(env('RETS_PASSWORD'))
                                ->setRetsVersion(env('RETS_VERSION'));

    }

}
