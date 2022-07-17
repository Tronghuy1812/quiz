<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
class LogController extends Controller
{
    public function index ()
    {
        try {
            // User::get();
            
            $product=[
                [
                    'id'=> 1,
                    'name'=> 'product 1',
                    'price'=> 5000000,
                ],
                [
                    'id'=> 2,
                    'name'=> 'product 2',
                    'price'=> 9000000,
                ],
                [
                    'id'=> 3,
                    'name'=> 'product 3',
                    'price'=> 6000000,
                ],
                [
                    'id'=> 4,
                    'name'=> 'product 4',
                    'price'=> 1000000,
                ],
            ];
            $productCollection= collect($product);
            // $products= $productCollection->where('price','>',1000000);

            foreach($productCollection->chunk(2) as $result)
            {
                dump($result);
            }
            
        } catch (\Exception $e) {
            //throw $th;
            report($e);
        }
        return 'done'; 
    }
}
