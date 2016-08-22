<?php

use App\Customer;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/home', 'HomeController@index');
Route::auth();

Route::group(['middleware' => ['web']],function(){
	Route::resource('customer','CustomersController');
});
Route::get('api/customers', function(Request $request){
	if (isset($request->filter) && $request->filter != ''){
		// dd(Customer::$searchable);
		// $query = Customer::query();

		$fields = Customer::$searchable;
		$term = $request->filter;
		$query = Customer::whereNested(function($query) use ($fields, $term)
        {	
            foreach ($fields as $field)
            {	
                    $query->Orwhere($field, 'like', "%{$term}%");
            }
        })->paginate($request->per_page);

		return response()->json($query);
		// 
	}
	return response()->json(Customer::paginate(10));
});

