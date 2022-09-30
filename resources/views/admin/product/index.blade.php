@extends('layouts.admin')
@section('content')
 <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List product</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Img</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @if (!empty($product))
                @foreach ($product as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><img width="100px" src="{{ $item->product_img }}" /></td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->cate_name }}</td>
                        <td>
                            <a href="{{ route('product.edit',$item->product_id)}}" type="button" class="btn btn-warning">Sửa</a>
                            <form onclick="return confirm('Do you want to delete it?')" action="{{ route('product.destroy', $item->product_id)}}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Xóa</button>
                              </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr colspan="3">Nothing to show.</tr>
            @endif
                               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection
