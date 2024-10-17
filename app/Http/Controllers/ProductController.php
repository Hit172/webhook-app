<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\git;

class ProductController extends Controller
{
    //
    function store(Request $request) {
    	
        $request->validate([

            'name' => 'required',
            'active' => 'required',
            'description' => 'required',
        ]);

        Product::create($request->all());

        return ["result" => "Product saved successfully!"];
    }

    function gitstore(Request $request) {
    	
        $request->validate([

            'commitId' => 'required',
            'message' => 'required',
        ]);

        git::create($request->all());

        return ["result" => "Git Committed successfully!"];
    }

    function productlist() {
    	return product::all();
    }

    function gitlist() {
    	return git::all();
    }
}
