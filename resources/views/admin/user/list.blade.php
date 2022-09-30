@extends('layouts.admin')
@section('content')
<form style="padding-left: 5%; padding-right:5%;">
  <div class="mb-3 row">
    <h5 style="margin-top:1%">Add product</h5>
      <div class="mb-3">
        <label for="" class="form-label">Product name</label>
        <input class="form-control" name="" type="text" placeholder="Enter product name..." aria-label="">
        <select style="margin-top: 1%" name="pay">
          <option value="" selected="selected">--Choose category--</option>
          <option value="cod" >Thanh toán tại nhà</option>
          <option value="banking">Thanh toán qua Thẻ tín dụng</option>
      </select><br>
        <label for="" class="form-label">Product Link</label>
        <input class="form-control" type="text" placeholder="Enter product link..." aria-label="">
        <label for="formFile" class="form-label">Choose image</label>
        <input class="form-control" type="file" id="formFile">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </div>
</form>
<hr>
<h5>List products</h5>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td style="width: 10%"><button type="button" class="btn btn-danger">Xóa</button></td>
      </tr>
    </tbody>
  </table>
@endsection
