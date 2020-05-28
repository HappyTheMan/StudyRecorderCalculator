<?php

namespace App\Http\Controllers;
use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function record(){
      $totalHour = 0;
      for ($i=1; $i < 8 ; $i++) {
        $hour = "hour$i";
        $subject = "subject$i";
        $record = Record::find($i);
        $record -> Hour = request() -> $hour;
        $record -> save();
        $totalHour += request() -> $hour;
      }
      $records = Record::all();

      return view('index', ["records" => $records, "totalHour" => $totalHour, "price" => request() -> price]);
    }
    public function index(){
      $records = Record::all();
      return view('index', compact('records'));
    }
}
