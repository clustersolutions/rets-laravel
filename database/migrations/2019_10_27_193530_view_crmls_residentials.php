<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewCrmlsResidentials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());

        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

    private function createView(): string
    {
        return <<<SQL
CREATE VIEW crmls_residentials AS
    SELECT 
        roof,
        cooling,
        architecturalstyle AS style,
        livingarea AS area,
        bathroomsfull AS bathsfull,
        bathroomshalf AS bathshalf,
        storiestotal AS stories,
        fireplaceyn AS fireplaces,
        flooring,
        heating,
        bathroomstotalinteger AS bathrooms,
        foundationdetails AS foundation,
        laundryfeatures,
        '' AS occupantname,
        '' AS ownername,
        lotfeatures AS lotdescription,
        poolprivateyn AS pool,
        propertysubtype AS subtype,
        bedroomstotal AS bedrooms,
        interiorfeatures,
        lotsizedimensions AS lotsize,
        livingareasource AS areasource,
        '' AS maintenanceexpense,
        '' AS additionalrooms,
        exteriorfeatures,
        watersource AS water,
        view,
        lotsizearea,
        subdivisionname AS subdivision,
        constructionmaterials AS construction,
        parkingfeatures AS parking,
        lotsizeunits AS lotsizeareaunits,
        roomtype AS type,
        garagespaces,
        bathroomsthreequarter AS bathsthreequarter,
        accessibilityfeatures AS accessibility,
        lotsizeacres AS acres,
        majorchangetype AS occupanttype,
        propertysubtype AS subtypetext,
        yearbuilt
    FROM
    residentials;
SQL;
    }

    private function dropView(): string
    {
        return <<<SQL
DROP VIEW IF EXISTS `crmls_residentials`;
SQL;
    }
}
