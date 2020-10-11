<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
    return view('Index.index');
});
Route::get('/dasboart', function () { 

    $client = new Client();
    $response = $client->request('GET', 'https://api.zang.io/v2/Accounts/AC777c3e3240bc618f926a4337ac0d7138/Calls.json',['auth'=>['AC777c3e3240bc618f926a4337ac0d7138','cc2dddd07971460db6d900443021bc15']]);
    $statusCode = $response->getStatusCode();
    $body = json_decode($response->getBody()->getContents());

    return view('Admin.index',compact('body'));

    // return view('Admin.index');

});


Route::get('/login', function () { 
    return view('Admin.pages.examples.login');
});
Route::get('/register', function () { 
    return view('Admin.pages.examples.register');
});


Route::get('/charjs', function () { 
    return view('Admin.pages.charts.chartjs');
});
Route::get('/flot', function () { 
    return view('Admin.pages.charts.flot');
});
Route::get('/inline', function () { 
    return view('Admin.pages..charts.inline');
});


Route::get('/simple', function () { 
    return view('Admin.pages.tables.simple');
});


Route::get('/calendar', function () { 
    return view('Admin.pages.calendar');
});
Route::get('/gallery', function () { 
    return view('Admin.pages.gallery');
});


Route::get('/inbox', function () { 
    return view('Admin.pages.mailbox.mailbox');
});
Route::get('/compose', function () { 
    return view('Admin.pages.mailbox.compose');
});
Route::get('/read', function () { 
    return view('Admin.pages.mailbox.read-mail');
});


Route::get('/call', function () {
    return view('Admin.pages.call');
});
Route::get('/vcall', function () { 
    return view('Admin.pages.vcall');
});
