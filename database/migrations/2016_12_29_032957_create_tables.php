<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `TaskTemplate` (
                `TableID` INT NOT NULL AUTO_INCREMENT
                ,`TemplateID` INT NOT NULL
                ,`RevisionID` INT NOT NULL
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`Name` VARCHAR(255)
                ,`Description` VARCHAR(1000)
                ,PRIMARY KEY (`TableID`)
            );
        ");

        DB::statement("
            CREATE TABLE `Task` (
                `ID` INT NOT NULL AUTO_INCREMENT
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`TaskTemplateID` INT NOT NULL
                ,`TaskRevisionED` INT NOT NULL
                ,PRIMARY KEY (`ID`)
            );
        ");
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
}
