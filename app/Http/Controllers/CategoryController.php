<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use Validator;
class CategoryController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate();
        return view('admin.pages.category.list',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'status' => $request->status
        ]);
        return \redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return \response()->json($category,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|min:6|max:255'
        ],
        [
            'required' => 'Tên danh mục sản phẩm không được để trống',
            'min' => 'Tên danh mục sản phẩm Không được ít hơn 2 ký tự',
            'max' => 'Tên danh mục sản phẩm Không được nhiều hớn 100 ký tự'
        ]
    );
        if($validator->fails()){
            return response()->json(['error' =>'true','message'=> $validator->errors()],200);
        }
        $category= Category::find($id);
        $category->update(
            [
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'status' => $request->status
            ]
        );
        return response()->json(['success' => 'Cập nhật thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return \response()->json(['success' => 'Xoa thanh cong']);
    }
}
