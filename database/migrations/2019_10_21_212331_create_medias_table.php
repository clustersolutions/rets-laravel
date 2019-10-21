<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mediakey',255)->unique();
            $table->boolean('approved')->nullable();
            $table->string('changedbymemberid', 25)->nullable();
            $table->integer('changedbymemberkeynumeric')->nullable();
            $table->string('classname', 50)->nullable();
            $table->boolean('deletedyn')->nullable();
            $table->integer('filesize')->nullable();
            $table->integer('imageheight')->nullable();
            $table->string('imageof', 50)->nullable();
            $table->integer('imagewidth')->nullable();
            $table->text('longdescription')->nullable();
            $table->text('mediahtml')->nullable();
            $table->dateTime('mediamodificationtimestamp')->nullable();
            $table->text('mediaobjectid')->nullable();
            $table->string('mediatype', 50)->nullable();
            $table->text('mediaurl')->nullable();
            $table->string('memberaor', 75)->nullable();
            $table->dateTime('modificationtimestamp')->nullable();
            $table->string('officemlsid', 30)->nullable();
            $table->integer('order')->nullable();
            $table->string('originatingsystemid', 25)->nullable();
            $table->text('originatingsystemmediakey')->nullable();
            $table->string('resourcename', 50)->nullable();
            $table->text('resourcerecordid')->nullable();
            $table->integer('resourcerecordkeynumeric')->nullable();
            $table->string('shortdescription', 50)->nullable();
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
        Schema::dropIfExists('medias');
    }
}
