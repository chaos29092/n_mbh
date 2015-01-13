<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//page
Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');
Route::get('factory_views', 'PageController@factoryViews');
Route::get('production_equipment', 'PageController@productionEquipment');
Route::get('rd', 'PageController@rd');
Route::get('exchange', 'PageController@exchange');
Route::get('culture', 'PageController@culture');
Route::get('service', 'PageController@service');
Route::get('ok', 'PageController@ok');


Route::get('products/{category}', 'PageController@products');
Route::get('product/small/{model}', 'PageController@productSmall');
Route::get('product/medium/{model}', 'PageController@productMedium');
Route::get('product/big/{model}', 'PageController@productbig');

//contact
Route::post('mailPost', function()
{
    $date = Input::all();

    Mail::send('emails.inquiry', array('subject'=>$date['subject'],'mes'=>$date['mes'],'email'=>$date['email'],'country'=>$date['country'],'phone'=>$date['phone']),function($message){
        $message->to(array('178399731@qq.com'), 'inquiry')->subject('MBH - 英语 - 网站询盘');
    });

    return Redirect::to('ok');
});

