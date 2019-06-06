<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContinentController extends Controller
{
    //
    public function Europe()
    {
        $query = "
            SELECT *
            FROM `country`
            WHERE `Continent` = ?
            ORDER BY `Name` ASC
        ";

        $countries = DB::select($query, ['Europe']);

        $view = view('continents/europe', [
            'countries' => $countries
        ]);

        return $view;
    }


    
}
