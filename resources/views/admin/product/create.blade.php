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
      <form method="post" action="{{ route('product.store') }}">
          <div class="form-group">
              @csrf
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" name="product_name"/>
          </div>
          <div class="form-group">
            <label for="product_cate">Cate</label>
            <select name="product_cate" class="form-control">
              @foreach($cate as $cate)
                <option value="{{ $cate->cate_id }}">{{ $cate->cate_name }}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" name="product_link"/>
        </div>
        <div class="form-group">
          <label for="img">Image</label>
          <input type="text" class="form-control" name="product_img"/>
      </div>
          <button type="submit" class="btn btn-block btn-danger">Create Product</button>
      </form>
  </div>
    </div>
</div>
@endsection