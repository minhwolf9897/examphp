@extends('admin.layout.master')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">Thêm mới thông tin lợn</h5>
            <a href="/admin/product/list" class="float-right"><i class="fas fa-list-ul"></i> Danh sách lợn</a>
            <div class="clearfix"></div>
            <form action="/admin/product/store" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="name" class="form-control w-50">
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="number" name="price" class="form-control w-25">
                </div>
                <div class="form-group">
                    <label>Chủng loại</label>
                    <select name="categoryId" class="form-control w-25">
                        @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <input type="text" name="image" class="form-control w-75">
                </div>
                <div>
                    <input type="submit" value="Lưu thông tin" class="btn btn-primary">
                    <input type="reset" value="Làm lại" class="btn btn-dark">
                </div>
            </form>
        </div>
    </div>
@endsection