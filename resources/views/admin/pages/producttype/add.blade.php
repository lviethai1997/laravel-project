@extends('admin.layouts.master')

@section('title')
    add category
@endsection

@section('content')
<form action="{{ route('producttype.store')}}" method="POST">
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                @csrf
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">them loai san pham</h1>
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" placeholder="ten producttype">
                    @if ($errors->has('name'))
                        <div class="aler alert-danger">{{ $errors->first('name')}}</div>
                    @endif
                </div>
                <div class="form-group">
                    {{-- //<label>Selects</label> --}}
                    <select class="form-control" name="idCategory">
                        @foreach ($category as $cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
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
