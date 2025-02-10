<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        if(isset($_GET['keywoard'])){
            $keywoard = $_GET['keywoard'];
            $informations = Information::where('title', 'like', '%'.$keywoard.'%')->get();
        }else{
            $informations = Information::get();
        }
        return view('pages.information.index', [
            'informations' => $informations
        ]);
    }

    public function detail($slug){
        $information = Information::where('slug', $slug)->first();
        $other_informations = Information::whereNotIn('id', [$information->id])->get();
        return view('pages.information.detail', [
            'information' => $information,
            'other_informations' => $other_informations
        ]);
    }
}
