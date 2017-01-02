<?php

namespace App\Custom;

class CGAPI
{
	public static function test(){
		return "This is a returned string.";
	}

	public static function createTaskTemplate($description){
	/*
	* Insert a row into choresgreat.tasktemplate
	*
	* @param  (string) $description
	* 
	* @return void
	*/

		if (!Helpers::validateStringLength($description, 0, 1000)){
			throw new Exception("Description length is either too short or too long.");
		}

		$success = DB::insert("
			INSERT INTO TaskTemplate (
				`TemplateID`,
				`RevisionID`,
				`Description`
			)
			SELECT
				IFNULL(MAX(TemplateID),0) + 1
				,1
				,?
			FROM TaskTemplate
		;", [$description]);

		if (!$success){
			throw new Exception("DB query failed.")
		}
	}
}
