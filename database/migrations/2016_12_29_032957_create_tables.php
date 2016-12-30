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
        /*
        |---------------------------------------
        |--- CHORE SCHEMAS ---------------------
        |---------------------------------------
        */

        DB::statement("
            CREATE TABLE `TaskTemplate` (
                `TableID` INT NOT NULL AUTO_INCREMENT
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`TemplateID` INT NOT NULL
                ,`RevisionID` INT NOT NULL
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

        //======================================

                    DB::statement("
                        CREATE TABLE `JobTemplate_TaskTemplate` (
                            `TableID` INT NOT NULL AUTO_INCREMENT
                            ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                            ,`JobTemplateID` INT NOT NULL
                            ,`JobRevisionID` INT NOT NULL
                            ,`TaskTemplateID` INT NOT NULL
                            ,`TaskRevisionID` INT NOT NULL
                            ,PRIMARY KEY (`TableID`)
                        );
                    ");

                    DB::statement("
                        CREATE TABLE `Job_Task` (
                            `TableID` INT NOT NULL AUTO_INCREMENT
                            ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                            ,`JobID` INT NOT NULL
                            ,`TaskID` INT NOT NULL
                            ,PRIMARY KEY (`TableID`)
                        );
                    ");

        //======================================

        DB::statement("
            CREATE TABLE `JobTemplate` (
                `TableID` INT NOT NULL AUTO_INCREMENT
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`TemplateID` INT NOT NULL
                ,`RevisionID` INT NOT NULL
                ,`Name` VARCHAR(255)
                ,PRIMARY KEY (`TableID`)
            );
        ");

        DB::statement("
            CREATE TABLE `Job` (
                `ID` INT NOT NULL AUTO_INCREMENT
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`JobTemplateID` INT NOT NULL
                ,`JobRevisionED` INT NOT NULL
                ,PRIMARY KEY (`ID`)
            );
        ");

        //======================================

                    DB::statement("
                        CREATE TABLE `GroupTemplate_JobTemplate` (
                            `TableID` INT NOT NULL AUTO_INCREMENT
                            ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                            ,`GroupTemplateID` INT NOT NULL
                            ,`GroupRevisionID` INT NOT NULL
                            ,`JobTemplateID` INT NOT NULL
                            ,`JobRevisionID` INT NOT NULL
                            ,PRIMARY KEY (`TableID`)
                        );
                    ");

                    DB::statement("
                        CREATE TABLE `Group_Job` (
                            `TableID` INT NOT NULL AUTO_INCREMENT
                            ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                            ,`GroupID` INT NOT NULL
                            ,`JobID` INT NOT NULL
                            ,PRIMARY KEY (`TableID`)
                        );
                    ");

        //======================================

        DB::statement("
            CREATE TABLE `GroupTemplate` (
                `TableID` INT NOT NULL AUTO_INCREMENT
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`TemplateID` INT NOT NULL
                ,`RevisionID` INT NOT NULL
                ,`Name` VARCHAR(255)
                ,PRIMARY KEY (`TableID`)
            );
        ");

        DB::statement("
            CREATE TABLE `Group` (
                `ID` INT NOT NULL AUTO_INCREMENT
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`GroupTemplateID` INT NOT NULL
                ,`GroupRevisionED` INT NOT NULL
                ,PRIMARY KEY (`ID`)
            );
        ");

        //======================================

                    DB::statement("
                        CREATE TABLE `RotationTemplate_GroupTemplate` (
                            `TableID` INT NOT NULL AUTO_INCREMENT
                            ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                            ,`RotationTemplateID` INT NOT NULL
                            ,`RotationRevisionID` INT NOT NULL
                            ,`GroupTemplateID` INT NOT NULL
                            ,`GroupRevisionID` INT NOT NULL
                            ,PRIMARY KEY (`TableID`)
                        );
                    ");

                    DB::statement("
                        CREATE TABLE `Rotation_Group` (
                            `TableID` INT NOT NULL AUTO_INCREMENT
                            ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                            ,`RotationID` INT NOT NULL
                            ,`GroupID` INT NOT NULL
                            ,PRIMARY KEY (`TableID`)
                        );
                    ");

        //======================================

        DB::statement("
            CREATE TABLE `RotationTemplate` (
                `TableID` INT NOT NULL AUTO_INCREMENT
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`TemplateID` INT NOT NULL
                ,`RevisionID` INT NOT NULL
                ,`Name` VARCHAR(255)
                ,PRIMARY KEY (`TableID`)
            );
        ");

        DB::statement("
            CREATE TABLE `Rotation` (
                `ID` INT NOT NULL AUTO_INCREMENT
                ,`DateCreated` TIMESTAMP  NOT NULL DEFAULT NOW()
                ,`RotationTemplateID` INT NOT NULL
                ,`RotationRevisionED` INT NOT NULL
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
       DB::statement("DROP TABLE `TaskTemplate`;");
       DB::statement("DROP TABLE `Task`;");

                   DB::statement("DROP TABLE `JobTemplate_TaskTemplate`;");
                   DB::statement("DROP TABLE `Job_Task`;");

       DB::statement("DROP TABLE `JobTemplate`;");
       DB::statement("DROP TABLE `Job`;");

                   DB::statement("DROP TABLE `GroupTemplate_JobTemplate`;");
                   DB::statement("DROP TABLE `Group_Job`;");

       DB::statement("DROP TABLE `GroupTemplate`;");
       DB::statement("DROP TABLE `Group`;");

                   DB::statement("DROP TABLE `RotationTemplate_GroupTemplate`;");
                   DB::statement("DROP TABLE `Rotation_Group`;");

       DB::statement("DROP TABLE `RotationTemplate`;");
       DB::statement("DROP TABLE `Rotation`;");

       //======================================
    }
}
