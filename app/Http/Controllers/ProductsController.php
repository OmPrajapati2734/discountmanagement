<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreValidation;
use App\Jobs\DiscountJob;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $products = Products::paginate(5)->withQueryString();
        return view('products',compact('products'));
    } 

    public function allproducts($id){
        $paginate = 8;
        $skip = ($id*$paginate)-$paginate;
        $prevUrl = $nextUrl = '';
        if($skip>0){
            $prevUrl = $id - 1;
        }
        $products = Products::orderBy('id', 'desc')->skip($skip)->take($paginate)->get();
        if($products->count()>0){
            if($products->count()>=$paginate){
                $nextUrl = $id + 1;
            }
            return view('products', compact('products', 'prevUrl', 'nextUrl'));
        }
        return redirect('/products');
    }


    //search 
    public function search($value)
    {   
            $product=DB::table('products')->where('title','LIKE','%'.$value."%")->orWhere('product_title','LIKE','%'.$value."%")->orWhere('type','LIKE','%'.$value."%")->get();
            return Response()->json($product);          
    }

    /**
     * Show the form for creating a new resource.
     */
    public function fetchproduct(Request $request)
    {   
        
        $products = Products::all();
        return response()->json([
            'products'=>$products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreValidation $request)
    {   
            $products = new Products;
            $products = Products::create(
                $request->all(),
            );

            dispatch(new DiscountJob($products));
            return response()->json([
                'status' => 200,
                'message' => 'Product Added successfully'
            ]);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {    
        if($products){
            return response()->json(['status' => 'success', 'data' => $products]);
        }
        else{
        return response()->json(['status' => 'Failed', 'data' => 'no products Found']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Products::where('id',$id)->first();
        
        return response()->json(['Data'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {       
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'product_title' => 'required',
            'type' => 'required',
        ]); 

        if($validator){
            Products::update(['id' => $id], [
                'club_id' => $request->club_id,
                'title' => $request->title,
                'product_title' => $request->product_title,
                'type' => $request->type,
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Product Updated successfully'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products,$id)
    {
        $products = Products::find($id);
        if($products)
        {
            $products->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Product Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Product Found.'
            ]);
        }
    }
}
