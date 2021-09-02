<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CensusRecord;
use App\Models\Record;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function addRecAdmin()
    {
        return view('admin/AddRecAdmin');
    }

    public function viewCensusAdmin()
    {
        $data = Record::all()->where('record_status','verified');
        $census = CensusRecord::all();
        $records = [];
        foreach($data as $value){
            foreach($census as $value2){
                if($value2->record_id == $value->id){
                    array_push($records,$value2);
                }
            }
        }

        return view('admin/viewCensusAdmin')->with('records',$records);
    }

    public function unverifiedCensusAdmin()
    {
        $data = Record::all()->where('record_status','unverified');
        $census = CensusRecord::all();
        $records = [];
        foreach($data as $value){
            foreach($census as $value2){
                if($value2->record_id == $value->id){
                    array_push($records,$value2);
                }
            }
        }
        return view('admin/unverifiedCensusAdmin')->with('records',$records);
    }

    public function show()
    {
        $records = User::all();
        return view('admin/users')->with('records',$records);
    }

    public function censusRecord()
    {
        return redirect('census-view');
    }

}
