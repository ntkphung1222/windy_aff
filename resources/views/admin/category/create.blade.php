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
      <form method="post" action="{{ route('category.store') }}">
          <div class="form-group">
              @csrf
              <label for="cate_name">Category Name</label>
              <input type="text" class="form-control" name="cate_name"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Category</button>
      </form>
  </div>
    </div>
</div>
@endsection