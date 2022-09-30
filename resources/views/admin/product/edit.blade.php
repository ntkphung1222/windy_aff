@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add new Category</h6>
    </div>
    <div class="card-body">
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('product.update', $product->product_id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}"/>
          </div>
          <div class="form-group">
            <label for="cate">Cate</label>
            <select name="product_cate" class="form-control">
              @foreach($cates as $cate)
                <option @selected($cate->cate_id == $product->product_cate) value="{{ $cate->cate_id }}">{{ $cate->cate_name }}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="product_link">Link</label>
            <input type="text" class="form-control" name="product_link" value="{{ $product->product_link }}"/>
        </div>
        <div class="form-group">
          <label for="product_img">Image</label>
          <input type="text" class="form-control" name="product_img" value="{{ $product->product_img }}"/>
      </div>
          <button type="submit" class="btn btn-block btn-danger">Update Product</button>
      </form>
  </div>
</div>
@endsection