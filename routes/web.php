<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('home');
});
*/
Route::view('/','home');
Route::view('/contact','contact');
Route::resource('jobs',JobController::class);
/*
Route::controller(JobController::class)->group(function(){
    Route::get('/jobs','index');
    Route::get('jobs/create','create');
    Route::post('/jobs','store');
    Route::get('/jobs/{job}','show');
    Route::get('/jobs/{job}/edit','edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}','delete');
});
*/




//index
//Route::get('/jobs', [JobController::class,'index']);
    //get rows from database according to number
    //$job = Job::with('employer')->Paginate(3);
    //$job = Job::with('employer')->simplePaginate(3);
    //$job = Job::with('employer')->cursorPaginate(3);

//create job
//Route::get('jobs/create',[JobController::class,'create']);

//store job
//Route::post('/jobs',[JobController::class],'store');
    //dd(request()->all());     read all att 
    //dd(request('title'));     read only title attr value from post page
    //validattion

//show job
//Route::get('/jobs/{job}',[JobController::class],'show');  
/*
Route::get('/jobs/{id}', function ($id) {   
    $job = Job::find($id);
    return view('jobs.show',['job' => $job]);
});
*/

//edit job
//Route::get('/jobs/{job}/edit',[JobController::class],'edit');
    //$job = Job::find($id);

//update job
//Route::patch('/jobs/{job}', [JobController::class],'update');  
    //$job = Job::findOrFail($id);
   
    //validate
    //authorized ....(on Hold)
    //update job in database
    //persist
    //redirect to jobs page

    /*   ...same like update
    $job->title = request('title');
    $job->salary = request('salary');
    $job->save();
    */

//delete or destroy job
//Route::delete('/jobs/{job}',[JobController::class],'delete');
    //Job::findOrFail($job)->delete();
    
    //authorized (on hold...)
    //delete job
    //redirect
    
    /* the same
        $job = Job::findOrFail($id);
        $job->delete();
    */
/*
Route::get('/contact', function () {
    return view('contact');
});
*/
