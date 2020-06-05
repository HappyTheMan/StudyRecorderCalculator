<?php

namespace App\Http\Controllers;
use App\Record;
use App\subject;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function record(Request $req){
      $totalHour = 0;
      $totalMinute = 0;
        $users = User::find(Auth::user()->id) -> subject;
        $i = 0;
        foreach($users as $user)
        {
            $id = $user -> id;
            $subject = subject::find($id);
            $subject -> hour = request() -> hour[$i];
            $subject -> minute = request() -> min[$i];
            $subject -> save();
            $totalHour += request() -> hour[$i];
            $totalMinute += request() -> min[$i];
            $i++;
        }
        $grandMinute = ($totalHour*60) + $totalMinute;
        $totalHour = $grandMinute / 60;
        $totalMinute = $grandMinute % 60;
    //   for ($i=0; $i < $count-1 ; $i++) {
    //     //   $hour = request() -> hour[$i];
    //     // $record = subject::all()->where('user_id', '2');
    //     // $record -> hour =  $hour;
    //     // $record -> save();
    //     // $totalHour +=  $hour;

    //   }
      $records = User::find(Auth::user()->id) -> subject;

      return view('home', ["records" => $records, "totalHour" => (int)$totalHour, "price" => request() -> price, "totalMinute" => $totalMinute, "grandMinute" => $grandMinute]);
    }
    public function index(){
      $records = User::find(Auth::user()->id) -> subject;
      return view('layouts.app', compact('records'));
    }
    public function create(){
        $subject = new subject;
        $subject -> user_id = request() -> uid;
        $subject -> subject = request() -> subject;
        $subject -> hour =  0;
        $subject -> minute = 0;
        $subject -> save();
        return redirect('/subject');

    }
    public function delete($id)
    {
        $subject = subject::find($id);
        $subject -> delete();
        return redirect('/')-> with('info', 'A Subject Deleted');
    }
    public function update($id)
    {
        $subject = subject::find($id);
        return view('subject',compact('subject'));
    }

    public function realupdate($id)
    {
        $subject = subject::find($id);
        $subject -> subject = request() -> subject;
        $subject -> save();
        return redirect('/') -> with('info','Subject Updated');
    }
}
