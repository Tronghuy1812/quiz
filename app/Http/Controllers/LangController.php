<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use function PHPUnit\Framework\returnSelf;

class LangController extends Controller
{
    public function index(Request $request)
    {
        // echo __('messages.thank');
        // echo trans('messages.thank');
        $lang=strtolower($request->lang);

        App::setLocale($lang);
 
        return view('language');  
    }
}
