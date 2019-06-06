<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegionController extends Controller
{
    //
    public function edit(Request $request)
    {
        $messages = [];

        $id = $request->input('id', null);

        if ($id) {
            // this is update
            // select existing data (and cast stdObject to array)
            $region = (array)DB::selectOne("
                SELECT *
                FROM `region`
                WHERE `id` = ?
            ", [$id]);

        } else {
            // this is create
            // prepare empty data
            $region = [
                'id' => null,
                'name' => null,
                'slug' => null
            ];
        }

        // now I have $region array !!

        if ($request->method() == 'POST') {
            // the form was submitted

            // update data from request data
            $region['name'] = $request->input('name', '');
            $region['slug'] = $request->input('slug', '');

            // validation
            $valid = true;

            if (!$region['name']) {
                $messages[] = 'Please fill in the name';
                $valid = false;
            }

            // saving
            if ($valid) {

                // save the data
                if ($id) {

                    DB::update("
                        UPDATE `region`
                        SET `name` = ?,
                            `slug` = ?
                        WHERE `id` = ?
                    ", [
                        $region['name'],
                        $region['slug'],
                        $id
                    ]);

                } else {

                    DB::insert("
                        INSERT
                        INTO `region`
                        (`name`, `slug`)
                        VALUES
                        (?, ?)
                    ", [
                        $region['name'],
                        $region['slug']
                    ]);

                    $id = DB::getPDO()->lastInsertId();
                }

                return redirect('/regions/edit?id='.$id);
            }
        }

        $form = view('regions/form', [
            'region' => $region
        ]);

        return $form;
    }
}
