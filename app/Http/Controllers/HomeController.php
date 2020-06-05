<?php

namespace App\Http\Controllers;

use App\EloquentModel\OKR;
use App\EloquentModel\TitleClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValiDemoRequest;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $okrs = OKR::all();
        $user = Auth::user();
        $user_id = Auth::id();
        $param = ['user' => $user];
        return view('home.index',compact('okrs','user_id'));
    }

    public function add(Request $request)
    {
        $id = null;
        $user_id = Auth::id();
        return view('home.add',compact('id','user_id'));
    }

    public function add_child(Request $request,$id)
    {
        $okrs = OKR::all();
        $okrs3 = OKR::where('class_number', '3')->get();
        $user_id = Auth::id();

        return view('home.add_child',compact('okrs','okrs3','id','user_id'));
    }

    public function add_child_update(ValiDemoRequest $request)
    {
        $info = new OKR;
        $form = $request->all();
        unset($form['_token']);
        $info->fill($form)->save();

        return redirect('/');
    }

    public function create(ValiDemoRequest $request)
    {
        $info = new OKR;
        $form = $request->all();
        unset($form['_token']);
        $info->fill($form)->save();

        return redirect('/');
    }

    public function edit(Request $request, $id)
    {
        $okr = OKR::all();

        return view('home.edit',['okrs'=>$okr],['id'=>$id]);
    }

    public function update(ValiDemoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        DB::table('_o_k_r')->where('id',$request->id)->update($form);

        return redirect('/');
    }

    public function delete(Request $request)
    {
        OKR::find($request->id)->delete();
        return redirect('/');
    }

    public function show(Request $request,$id)
    {
        $class = DB::table('class')->get();
        // $class = TitleClass::all();
        $okrs = OKR::orderBy('parent_id','asc')->get();
        $okrs2 = OKR::where('class_number', '2')->get();
        $okrs3 = OKR::where('class_number', '3')->get();
        $user = Auth::user();
        $param = ['user' => $user];
        return view('home.show',compact('okrs','okrs2','okrs3','class','id'));

    }
}
