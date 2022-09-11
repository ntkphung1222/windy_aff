@extends('layouts.admin')
@section('content')
    <form style="padding-left: 5%; padding-right:5%;">
        <div class="mb-3 row">
            <h6 style="margin-top:1%">Add category</h6>
            @if(session('msg'))
            <div class="alert alert-success">{{ session('msg') }}</div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">Data is not valid!</div>
            @endif
          
            {{-- <label for="inputCategoryname" class="col-sm-2 col-form-label">Add category</label> --}}
            <form action="index" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter category name..." name="cate_name">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @error('cate_name')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
            </form>
        </div>
    </form>
    <hr>
    <h5>List categories</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                @foreach ($header as $key => $item)
                    <th scope="col-sm col-md">{{ $item }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @if (!empty($cateList))
                @foreach ($cateList as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->cate_name }}</td>
                        <td><button type="button" class="btn btn-danger">Xóa</button></td>
                    </tr>
                @endforeach
            @else
                <tr colspan="3">Nothing to show.</tr>
            @endif
        </tbody>
    </table>
@endsection
