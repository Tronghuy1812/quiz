<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;



class CacheController extends Controller
{
    public function index()
    {
        Cache::put('cache1', now()->format('Y-m-d H:i:s'),10);
        return 'set cache success';
    }

    public function show()
    {
        $data= Cache::get('cache1', function(){
            Cache::put('cache1', now()->format('Y-m-d H:i:s'),10);
            return now()->format('Y-m-d H:i:s');
        });
        dump($data);
    }
}
