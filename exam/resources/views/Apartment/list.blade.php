@extends('admin.layout.master')
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">{{__('message.list_pig')}}</h5>
            <a href="/admin/product/create" class="float-right"><i class="far fa-plus-square"></i>{{__('message.create_new')}}</a>
            <div class="clearfix"></div>
            <div class="row mt-3 mb-3 ml-1">
                <form action="" class="form-inline">
                    <div class="form-group">
                        <label class="mr-3">{{__('message.category')}}</label>
                        <select name="categoryId" class="form-control mr-3">
                            <option value="0">{{__('message.all_category')}}</option>
                            @foreach($categories as $item)
                                <option value="{{$item->id}}" {{$categoryId == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Lọc" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">{{__('message.id')}}</th>
                    <th scope="col" class="w-25">{{__('message.image')}}</th>
                    <th scope="col">{{__('message.name')}}</th>
                    <th scope="col">{{__('message.category')}}</th>
                    <th scope="col">{{__('message.price')}}</th>
                    <th scope="col">{{__('message.action')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products_in_view as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>
                        <div class="card" style="background-image: url('{{$item->image}}'); background-size: cover; width: 77px; height: 60px">
                        </div>
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <a href="/admin/product/edit/{{$item -> id}}">{{__('message.edit')}}</a>
                        <a href="/admin/product/edit/{{$item -> id}}">{{__('message.delete')}}</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row float-right mr-2">
                {{$products_in_view->links()}}
            </div>
        </div>
    </div>
@endsection