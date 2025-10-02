<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        
    }
    public function boot(): void
    {
        $examboard = DB::table('exam_borad')->get();
        view()->share('examboard', $examboard);
       
    }
}
