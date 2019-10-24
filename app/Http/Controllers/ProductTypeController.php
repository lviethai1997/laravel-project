<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreProductTypeRequest;
use Validator;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producttype = ProductType::paginate(5);
        return view('admin.pages.producttype.list',compact('producttype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status',1)->get();
        return view('admin.pages.producttype.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductTypeRequest $request)
    {
        $data =$request->all();
        $data['slug'] = str_slug($request->name);
        if(Producttype::create($data)){
            return \redirect()->route('producttype.index')->with('thongbao','them thanh cong');
        }else{
            return back()->with('thongbao','Them khong thanh cong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producttype = ProductType::find($id);
        $category = Category::where('status',1)->get();
        return response()->json(['category'=>$category,'producttype'=>$producttype],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|min:6|max:255',
        ],[
            'name.required' => ' Khong duoc bo trong',
            'name.min' =>' Khong duoc it hon 6 ky tu',
            'name.max' => ' khong duoc nhieu hon 255 ky tu',

        ]);
        if($validator->fails()){
            return response()->json(['error' => 'true','message'=> $validator->errors()],200);
        }
        $producttype = ProductType::find($id);
        $data = $request->all();
        $data['slug'] = str_slug($request->name);
       if( $producttype->update($data))
       {
           return \response()->json(['result' =>'da sua thanh xong'.$id],200);
       }else{
        return \response()->json(['result' =>'da sua khong thanh xong'.$id],200);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producttype = ProductType::find($id);
        if($producttype->delete()){
            return \response()->json(['result' =>'da xoa thanh xong'.$id],200);
        }else{
            return \response()->json(['result' =>'da xoa khong thanh xong'.$id],200);
        }
    }
}
