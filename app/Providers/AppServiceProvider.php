<?php

namespace App\Providers;
use App\Models\Setting;
use Illuminate\Pagination\paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
//ET configuration variables at runtime:
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::share('title','Our blog');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        /*View::share('key', 'value');
        Schema::defaultStringLength(191);
        $company=DB::table('company')->where('id',1)->first();
        config(['yourconfig.company' => $company]);*/

       /* view()->composer('*',function($view){
            $view->with('user',Auth::user());
            $view->with('social',Social::all());
        });
        protected $Caregiver_Id=1;
       view()->share('Caregiver_Id', $Caregiver_Id);*/

      // paginator::useBootstrap();
       //$websiteSetting = Setting::first();
       // view::share('appSetting',$websiteSetting);


    }

}
//USE:config('yourconfig.company');
