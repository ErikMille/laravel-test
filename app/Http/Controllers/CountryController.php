<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CountryController extends Controller
{
    //
    public function detail()
    {
        $code = isset($_GET['code']) ? $_GET['code'] : 'CZE';


        $query = "
            SELECT *
            FROM `country`
            WHERE `Code` = ?
            LIMIT 1
        ";

        $country = DB::selectOne($query, [$code]);

        $query = "
            SELECT *
            FROM `city`
            WHERE `CountryCode` = ?
        ";

        $cities = DB::select($query, [$code]);

        $query = "
            SELECT *
            FROM `countrylanguage`
            WHERE `CountryCode` = ?
        ";

        $languages = DB::select($query, [$code]);

        $view = view('countries/detail', [
            'country'   => $country,
            'cities'    => $cities,
            'languages' => $languages,
        ]);

        return $view;
    }
}
