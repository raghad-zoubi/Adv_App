<?php

namespace App\Exports;

use App\Models\Product;
class ProductsExport implements FormArray
{

    public function array():array
    {
        $list=[];
        $products=Product::all();
        foreach ($products as $product){
            $list[]=[$product->title,$product->description,$product->user_id,$product->user->name];
        }
        return $list;
    }
}
