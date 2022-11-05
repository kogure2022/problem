<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
* contentsコントローラクラス
* 
* @author kogure
* 
*/
class ContentsController extends Controller
{
    public function new()
    {
        return view('contents.new');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:255',
        ]);
        \Contents::insert($request);
        return redirect(route('contentlist'));
    }

    public function getContentList()
    {
        $items = \Contents::get();
        return view('contents.list', [
            'items' => $items
        ]);
    }
}
