<?php

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
use App\Task;
use Illuminate\Http\Request;

// Prikaz svih taskova u bazi
Route::get('/', function () {
    //return view ('tasks');
	$tasks = Task::orderBy('created_at', 'asc')->get();
	
	
	return view('tasks', [ 'tasks' => $tasks]);
});

// Dodavanje novog taska
Route::post('/task', function (Request $request){
	$validator = Validator::make($request->all(),[
		'name'=> 'required|max:255',
	] );
	
	if ($validator->fails()) {
		return redirect('/')->withInput()->withErrors($validator);
	}
	
	// stvaranje Taska
	$task = new Task;
	$task->name = $request->name;
	$task->save();
	
	return redirect('/');
});

//Brisanje postojećeg taska
Route::delete('/task/{id}', function ($id) {
	//kod za brisanje taska
});

//Prikaz određenog taska
Route::get('/task/{id}', function ($id) {
	//kod za prikaz taska
});
