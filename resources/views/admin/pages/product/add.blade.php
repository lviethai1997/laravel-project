@extends('admin.layouts.master')

@section('title')
    add product
@endsection

@section('content')
<form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                @csrf
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">san pham</h1>
                </div>
                <div class="form-group">
                        <input type="text" name="name" class="form-control" id="exampleInputEmail" placeholder="ten product">
                        @if ($errors->has('name'))
                            <div class="aler alert-danger">{{ $errors->first('name')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                            <input type="number" name="quantity" min="1" class="form-control" id="exampleInputEmail" placeholder="Quantity">
                            @if ($errors->has('quantity'))
                                <div class="aler alert-danger">{{ $errors->first('quantity')}}</div>
                            @endif
                    </div>
                    <div class="form-group">
                            <input type="number" name="price" min="1" class="form-control" id="exampleInputEmail" placeholder="Price">
                            @if ($errors->has('price'))
                                <div class="aler alert-danger">{{ $errors->first('price')}}</div>
                            @endif
                    </div>
                    <div class="form-group">
                            <input type="number" name="promotional"  value="0" class="form-control" id="exampleInputEmail" placeholder="promotional">
                            @if ($errors->has('promotional'))
                                <div class="aler alert-danger">{{ $errors->first('promotional')}}</div>
                            @endif
                        </div>
                    <div class="form-group">
                            <textarea class="form-control" name="description" id="demo" cols="5" rows="5"></textarea>
                            @if ($errors->has('description'))
                                <div class="aler alert-danger">{{ $errors->first('description')}}</div>
                            @endif
                    </div>
                    <div class="form-group">
                            <input type="file" name="image" class="form-control" id="exampleInputEmail">
                            @if ($errors->has('image'))
                                <div class="aler alert-danger">{{ $errors->first('image')}}</div>
                            @endif
                        </div>
                    <div class="form-group">
                        {{-- //<label>Selects</label> --}}
                        <select class="form-control cateProduct" name="idCategory">
                            @foreach ($category as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            {{-- //<label>Selects</label> --}}
                            <select class="form-control proTypeProduct" name="idProductType">
                                @foreach ($producttype as $protype)
                                <option value="{{$protype->id}}">{{$protype->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group">
                        {{-- //<label>Selects</label> --}}
                        <select class="form-control" name="status">
                            <option value="1">Hiển thị</option>
                            <option value="0">Không hiển thị</option>
                        </select>
                    </div>
                    <button type="submit" name="submit">Xác nhận</button>
            </div>
        </div>
    </div>
</form>
@endsection
