<?php

namespace App\Http\Controllers;

use App\EloquentModel\OKR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValiDemoRequest;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $okr = DB::table('_o_k_r')->get();
        $user = Auth::user();
        $param = ['user' => $user];
        return view('home.index',['okrs'=>$okr]);
    }

    public function add(Request $request)
    {
        $id = null;
        return view('home.add',['id'=>$id]);
    }

    public function add_child(Request $request,$id)
    {
        $okr = DB::table('_o_k_r')->get();

        return view('home.add_child',['id'=>$id],['okrs'=>$okr]);
    }

    public function add_child_update(ValiDemoRequest $request)
    {
        $info = new OKR;
        $form = $request->all();
        unset($form['_token']);
        $info->fill($form)->save();

        return redirect('/');
    }

    // add.blade.php
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
        $okr = DB::table('_o_k_r')->get();

        return view('home.edit',['okrs'=>$okr],['id'=>$id]);
    }

    public function update(Request $request)
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
        $okr = DB::table('_o_k_r')->get();
        $user = Auth::user();
        $param = ['user' => $user];
        return view('home.show',['okrs'=>$okr] ,['id'=>$id]);
    }
}
