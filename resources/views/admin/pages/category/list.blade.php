@extends('admin.layouts.master')

@section('title')
    Danh sach danh muc
@endsection

@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>slug</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>slug</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach ($category as $key => $value)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{  $value->name }}</td>
                        <td>{{$value->slug}}</td>
                        <td>
                            @if ($value->status ==1)
                                {{ "Public" }}
                            @else
                                {{"Private"}}
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-primary edit" data-id="{{ $value->id }}" data-toggle="modal" data-target="#edit" type="button"><i class="fas fa-edit" ></i></button>
                            <button class="btn btn-danger delete" data-id="{{ $value->id }}" data-toggle="modal" data-target="#delete" type="button"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Tạo danh mục sản phẩm</h1>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control name" id="exampleInputEmail" placeholder="Tên danh mục sản phẩm">
                                        <span class="error"></span>
                                    </div>
                                    <div class="form-group">
                                            {{-- //<label>Selects</label> --}}
                                            <select class="form-control status" name="status">
                                                <option value="1" class="ht">Hiển thị</option>
                                                <option value="0" class="kht">Không hiển thị</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success update">Save</button>
                    <button type="reset" class="btn btn-primary">Làm Lại</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- delete Modal-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left: 183px;">
                    <button type="button" class="btn btn-success del">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                <div>
            </div>
        </div>
    </div>
@endsection
