<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoreManager extends Controller
{
  public function getTaskIndex(){
  	return view('ChoreManager/TaskIndex');
  }

  public function getJobIndex(){
  	return view('ChoreManager/JobIndex');
  }

  public function getCreateJob(){
  	return view('ChoreManager/CreateJob');
  }
}
