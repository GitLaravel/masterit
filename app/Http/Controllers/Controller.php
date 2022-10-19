<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function show(){
        $category = Category::all();
        return view('home', compact('category'));
    }
    function index(){
        return view('form');
    }
    function store(Request $request){
        if ($request->has('title') and $request->has('slug')) {
            dump($request->input('title'));
            dump($request->input('slug'));
    }

    return 'форма успешно отправлена';
    }

    function getFormOrderMaster(Request $request){
        if ($request->has('name') and $request->has('tel') and $request->has('text')) {
            dump($request->input('name'));
            dump($request->input('tel'));
            dump($request->input('text'));
        }
    }
    function getFormOrderCallMe(Request $request){
        if ($request->has('name') and $request->has('tel')) {
            dump($request->input('name'));
            dump($request->input('tel'));
        }
    }
}
