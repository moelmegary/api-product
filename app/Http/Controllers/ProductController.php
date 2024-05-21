<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

//get list of all products
    public function index()
    {
        $product=DB::table('products')->get();  //query builder
        //$product=Product::all()               <method by eloquent ORM>
        return response()->json([

            'status'=>'success',
            'products'=>$product,

        ], 200);
    }

//get specific product by id
    public function show($id){

        $specificProduct=Product::find($id);   //eloquent ORM

        if (empty($specificProduct)) {

            return response()->json([
                'status'=>'faild',
                'message' => 'donot find product',
            ], 404);

        } else {

            return response()->json([
                'staus' => 'sucsess',
                'product'=> $specificProduct,
            ], 200);

        }
    }

    //Implement validation for creating a new product
        public function addProduct(Request $request) {

            $rules=[

                'Name' => 'required | unique:products,Name',
                'Price'=> 'required | decimal:2',
                'Quantity' => 'required |integer',

            ];

            $validation=Validator::make($request->all(),$rules);

            if($validation->fails()){
                //return validation failed response
                return response()->json([
                    'message' => 'Validation failed',
                    'errors' => $validation->errors()
                ], 422);


            }

            $addProduct = Product::create($request->all());

            // Return success response
            return response()->json([
                'message' => 'Product created successfully',
                'data' => $addProduct
            ], 201);

        }



}
