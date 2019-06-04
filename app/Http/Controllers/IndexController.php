<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class IndexController extends Controller
{
    public function index()
    {
        // the logic of your page will be here
 
        // as response we will return/include the contents of the file /resources/views/index.php
        return view('index');
    }
}