<?php


use Illuminate\Http\Request;


Route::get('/',"HomeController@index")->name("home");
/*Route::get("/post",function(Request $r,$name = null){
});
*/

Route::namespace('Dash')->group(function (){
    Route::middleware('auth')->group(function(){
        Route::prefix('dash')->group(function (){
            Route::get('/',"DashController@index")->name('dash');
            Route::get('/settings',"DashController@settings")->name('dash.settings');
            Route::post('/settings',"DashController@set")->name('dash.set.up');

            // A bbout Section Routes
            Route::prefix('/about')->group(function (){
                Route::get('/',"DashController@about")->name('dash.about');
                Route::post('/',"DashController@abo")->name('dash.abo.up');
            });

            // Route For Feature sSection in dashboard
            Route::prefix('/features')->group(function (){
                Route::get('/all',"DashController@features")->name('dash.features');
                Route::post('/edit/{id}',"DashController@feate")->name('dash.feat.e');
                Route::get('/edit/{id}',"DashController@featedit")->name('dash.feat.edit');
                Route::get('/add',"DashController@featadd")->name('dash.feat.add');
                Route::post('/add',"DashController@feata")->name('dash.feat.a');
                Route::post('/del/{id}',"DashController@featdel")->name('dash.feat.del');
            });

            Route::prefix('/portfolio')->group(function (){
                Route::get('all',"DashController@work")->name('dash.work');
                Route::post('/edit/{id}',"DashController@worke")->name('dash.work.e');
                Route::get('/edit/{id}',"DashController@workedit")->name('dash.work.edit');
                Route::get('/add',"DashController@workadd")->name('dash.work.add');
                Route::post('/add',"DashController@worka")->name('dash.work.a');
                Route::post('/del/{id}',"DashController@workdel")->name('dash.work.del');
            });
        });
    });
});
Auth::routes();


