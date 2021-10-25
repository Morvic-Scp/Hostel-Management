<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userhostelmodel as userbooking;
use App\Models\populationmodel as populatebooking;

class usercontroller extends Controller
{
    //
    public function store(){
        $inputstore=new userbooking();
        $inputstore->id=request('index_number');
        $inputstore->phone=request('phone');
        $inputstore->course_program=request('program');
        $inputstore->start_date=request('sdate');
        $inputstore->end_date=request('edate');
        $inputstore->guardian_phone=request('phone_guard');
        $inputstore->address=request('address');
        $inputstore->save();

        redirect('/');

    }
    public function index(){
        $popuget=populatebooking::all();
        return view('homepage',['popget'=>$popuget]);
    }
}
