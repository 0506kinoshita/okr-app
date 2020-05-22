<?php

namespace App\Http\Middleware;

use Closure;
use App\EloquentModel\OKR;

class CheckSecond
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $okrs = OKR::all();
        $okrs3 = OKR::where('class_number', '3')->get();

        foreach($okrs3 as $okr3){
            if($okr3->parent_id == $request->id){
                return redirect('/');
            }
        }
        return $next($request);

    }
}
