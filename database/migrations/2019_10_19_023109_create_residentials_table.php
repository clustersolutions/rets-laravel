<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentialsTable extends Migration
{

    protected $primaryKey = 'listingkeynumeric';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residentials', function (Blueprint $table) {
            $table->integer('listingkeynumeric');
            $table->text('accessibilityfeatures');
            $table->text('additionalparcelsdescription');
            $table->boolean('additionalparcelsyn');
            $table->char('adnumber', 15);
            $table->text('appliances');
            $table->boolean('appliancesyn');
            $table->text('architecturalstyle');
            $table->char('assessments', 68);
            $table->boolean('assessmentsyn');
            $table->text('associationamenities');
            $table->decimal('associationfee',14,2);
            $table->decimal('associationfee2',14,2);
            $table->char('associationfee2frequency', 25);
            $table->char('associationfeefrequency', 25);
            $table->char('associationmanagementname', 50);
            $table->char('associationmanagementname2', 50);
            $table->char('associationname', 50);
            $table->char('associationname2', 50);
            $table->boolean('associationyn');
            $table->boolean('attachedgarageyn');
            $table->text('basement');
            $table->integer('bathroomsfull');
            $table->integer('bathroomsfullandthreequarter');
            $table->integer('bathroomshalf');
            $table->integer('bathroomsonequarter');
            $table->integer('bathroomsthreequarter');
            $table->integer('bathroomstotalinteger');
            $table->integer('bedroomstotal');
            $table->decimal('belowgradefinishedarea',14,2);
            $table->char('belowgradefinishedareaunits', 25);
            $table->char('buildermodel', 50);
            $table->char('buildername', 50);
            $table->char('buyeragentaor', 50);
            $table->integer('buyeragentbrokerkeynumeric');
            $table->char('buyeragentbrokermlsid', 25);
            $table->char('buyeragentfirstname', 50);
            $table->integer('buyeragentkeynumeric');
            $table->char('buyeragentlastname', 50);
            $table->integer('buyeragentmainofficekeynumeric');
            $table->char('buyeragentmainofficemlsid', 25);
            $table->char('buyeragentmlsid', 25);
            $table->char('buyeragentstatelicense', 50);
            $table->char('buyerofficeaor', 50);
            $table->integer('buyerofficekeynumeric');
            $table->char('buyerofficemlsid', 25);
            $table->text('buyerofficename');
            $table->char('buyerofficestatelicense', 50);
            $table->char('buyerteamemail', 80);
            $table->text('buyerteamkey');
            $table->integer('buyerteamkeynumeric');
            $table->char('buyerteamname', 50);
            $table->char('buyerteampreferredphone', 16);
            $table->date('cancellationdate');
            $table->decimal('carportspaces',14,2);
            $table->boolean('certified433ayn');
            $table->char('city', 50);
            $table->date('closedate');
            $table->decimal('closeprice',14,2);
            $table->char('cobuyeragentaor', 50);
            $table->integer('cobuyeragentbrokerkeynumeric');
            $table->char('cobuyeragentbrokermlsid', 25);
            $table->char('cobuyeragentfirstname', 50);
            $table->integer('cobuyeragentkeynumeric');
            $table->char('cobuyeragentlastname', 50);
            $table->integer('cobuyeragentmainofficekeynumeric');
            $table->char('cobuyeragentmlsid', 25);
            $table->char('cobuyeragentstatelicense', 50);
            $table->char('cobuyerofficeaor', 50);
            $table->integer('cobuyerofficekeynumeric');
            $table->char('cobuyerofficemlsid', 25);
            $table->text('cobuyerofficename');
            $table->char('cobuyerofficestatelicense', 50);
            $table->char('cobuyerteamemail', 80);
            $table->text('cobuyerteamkey');
            $table->integer('cobuyerteamkeynumeric');
            $table->char('cobuyerteamname', 50);
            $table->char('cobuyerteampreferredphone', 16);
            $table->char('colistagentaor', 50);
            $table->char('colistagentfirstname', 50);
            $table->integer('colistagentkeynumeric');
            $table->char('colistagentlastname', 50);
            $table->char('colistagentmlsid', 25);
            $table->char('colistagentstatelicense', 50);
            $table->char('colistofficeaor', 50);
            $table->char('colistofficefax', 16);
            $table->integer('colistofficekeynumeric');
            $table->char('colistofficemlsid', 25);
            $table->text('colistofficename');
            $table->char('colistofficephone', 16);
            $table->char('colistofficestatelicense', 50);
            $table->char('colistteamemail', 80);
            $table->text('colistteamkey');
            $table->integer('colistteamkeynumeric');
            $table->char('colistteamname', 50);
            $table->char('colistteampreferredphone', 16);
            $table->char('commoninterest', 25);
            $table->text('commonwalls');
            $table->text('communityfeatures');
            $table->text('constructionmaterials');
            $table->text('cooling');
            $table->boolean('coolingyn');
            $table->char('country', 2);
            $table->char('countyorparish', 50);
            $table->integer('cumulativedaysonmarket');
            $table->integer('daysonmarket');
            $table->boolean('deletedyn');
            $table->char('directionfaces', 25);
            $table->text('directions');
            $table->char('documentnumber', 50);
            $table->char('doh1', 25);
            $table->char('doh2', 25);
            $table->char('doh3', 25);
            $table->text('doorfeatures');
            $table->text('eatingarea');
            $table->text('electric');
            $table->char('elementaryschool', 50);
            $table->char('elementaryschool2', 50);
            $table->char('elementaryschoolother', 50);
            $table->integer('elevation');
            $table->integer('entrylevel');
            $table->char('entrylocation', 50);
            $table->text('exclusions');
            $table->text('exteriorfeatures');
            $table->boolean('fenceyn');
            $table->text('fencing');
            $table->text('fireplacefeatures');
            $table->boolean('fireplaceyn');
            $table->text('flooring');
            $table->text('foundationdetails');
            $table->decimal('garagespaces',14,2);
            $table->text('greenenergyefficient');
            $table->text('greenenergygeneration');
            $table->text('greenindoorairquality');
            $table->text('greenlocation');
            $table->text('greensustainability');
            $table->text('greenwaterconservation');
            $table->text('heating');
            $table->boolean('heatingyn');
            $table->char('highschool', 50);
            $table->char('highschool2', 50);
            $table->char('highschooldistrict', 50);
            $table->text('inclusions');
            $table->text('interiorfeatures');
            $table->boolean('internetaddressdisplayyn');
            $table->boolean('internetautomatedvaluationdisplayyn');
            $table->boolean('internetconsumercommentyn');
            $table->boolean('internetentirelistingdisplayyn');
            $table->decimal('landleaseamount',14,2);
            $table->char('landleaseamountfrequency', 25);
            $table->boolean('landleaseyn');
            $table->decimal('latitude',12,8);
            $table->text('laundryfeatures');
            $table->boolean('laundryyn');
            $table->boolean('leaseconsideredyn');
            $table->text('levels');
            $table->char('license1', 25);
            $table->char('license2', 25);
            $table->char('license3', 25);
            $table->char('listagentaor', 50);
            $table->char('listagentfirstname', 50);
            $table->integer('listagentkeynumeric');
            $table->char('listagentlastname', 50);
            $table->char('listagentmlsid', 25);
            $table->char('listagentstatelicense', 50);
            $table->date('listingcontractdate');
            $table->text('listingid');
            $table->integer('listofficekeynumeric');
            $table->char('listofficemlsid', 25);
            $table->text('listofficename');
            $table->char('listofficestatelicense', 50);
            $table->decimal('listprice',14,2);
            $table->decimal('listpricelow',14,2);
            $table->decimal('livingarea',14,2);
            $table->char('livingareasource', 50);
            $table->char('livingareaunits', 25);
            $table->text('lockboxtype');
            $table->text('lockboxversion');
            $table->decimal('longitude',12,8);
            $table->char('lotdimensionssource', 50);
            $table->text('lotfeatures');
            $table->decimal('lotsizeacres',16,4);
            $table->decimal('lotsizearea',16,4);
            $table->text('lotsizedimensions');
            $table->char('lotsizesource', 50);
            $table->decimal('lotsizesquarefeet',14,2);
            $table->char('lotsizeunits', 25);
            $table->integer('mainlevelbathrooms');
            $table->integer('mainlevelbedrooms');
            $table->text('majorchangetype');
            $table->char('make', 50);
            $table->char('middleorjuniorschool', 50);
            $table->char('middleorjuniorschool2', 50);
            $table->char('middleorjuniorschoolother', 50);
            $table->char('mlsareamajor', 50);
            $table->dateTime('modificationtimestamp');
            $table->boolean('newconstructionyn');
            $table->integer('numberofunitsincommunity');
            $table->integer('numberofunitstotal');
            $table->integer('numberremotes');
            $table->dateTime('offmarkettimestamp');
            $table->date('onmarketdate');
            $table->dateTime('onmarkettimestamp');
            $table->dateTime('originalentrytimestamp');
            $table->decimal('originallistprice',14,2);
            $table->char('originatingsystemid', 25);
            $table->text('originatingsystemkey');
            $table->dateTime('originatingsystemmodificationtimestamp');
            $table->text('otherstructures');
            $table->char('parcelnumber', 50);
            $table->text('parkingfeatures');
            $table->decimal('parkingtotal',14,2);
            $table->boolean('parkingyn');
            $table->text('patioandporchfeatures');
            $table->boolean('patioyn');
            $table->dateTime('photoschangetimestamp');
            $table->integer('photoscount');
            $table->char('points', 4);
            $table->text('poolfeatures');
            $table->boolean('poolprivateyn');
            $table->char('postalcode', 10);
            $table->char('postalcodeplus4', 4);
            $table->decimal('previouslistprice',14,2);
            $table->char('previousstandardstatus', 25);
            $table->decimal('pricepersquarefoot',6,2);
            $table->char('probateauthority', 50);
            $table->boolean('propertyattachedyn');
            $table->text('propertycondition');
            $table->char('propertysubtype', 50);
            $table->text('publicremarks');
            $table->date('purchasecontractdate');
            $table->text('roadfrontagetype');
            $table->text('roadsurfacetype');
            $table->text('roof');
            $table->text('roombathroomfeatures');
            $table->text('roomkitchenfeatures');
            $table->text('roomtype');
            $table->char('rvparkingdimensions', 50);
            $table->text('securityfeatures');
            $table->boolean('seniorcommunityyn');
            $table->char('serialu', 25);
            $table->char('serialx', 25);
            $table->char('serialxx', 25);
            $table->text('sewer');
            $table->text('spafeatures');
            $table->boolean('spayn');
            $table->text('speciallistingconditions');
            $table->boolean('sprinklersyn');
            $table->char('standardstatus', 25);
            $table->char('stateorprovince', 2);
            $table->dateTime('statuschangetimestamp');
            $table->integer('storiestotal');
            $table->char('streetdirprefix', 15);
            $table->char('streetdirsuffix', 15);
            $table->char('streetname', 50);
            $table->char('streetnumber', 25);
            $table->integer('streetnumbernumeric');
            $table->char('streetsuffix', 25);
            $table->char('streetsuffixmodifier', 25);
            $table->char('subdivisionname', 50);
            $table->char('subdivisionnameother', 50);
            $table->char('taxcensustract', 25);
            $table->char('taxlot', 25);
            $table->char('taxmodel', 1);
            $table->char('taxtract', 25);
            $table->char('taxtractnumber', 6);
            $table->char('tractsubareacode', 4);
            $table->decimal('uncoveredspaces',14,2);
            $table->char('unitnumber', 25);
            $table->text('universalpropertyid');
            $table->text('utilities');
            $table->text('view');
            $table->boolean('viewyn');
            $table->text('virtualtoururlbranded');
            $table->text('virtualtoururlunbranded');
            $table->text('virtualtoururlunbranded2');
            $table->integer('walkscore');
            $table->text('waterfrontfeatures');
            $table->text('watersource');
            $table->integer('welldepth');
            $table->decimal('wellgallonsperminute',6,2);
            $table->decimal('wellpumphorsepower',6,2);
            $table->boolean('wellreportyn');
            $table->text('windowfeatures');
            $table->integer('yearbuilt');
            $table->char('yearbuiltsource', 60);
            $table->char('zoning', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residentials');
    }
}
