@extends('layouts.client')
@section('content')
<section class="vh-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-0 mt-md-0 pb-0">
              <form action="{{ route('user.login') }}">
                @csrf
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <div class="form-outline form-white mb-4">
                <input placeholder="Username" type="text" name="username" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <input placeholder="Password" type="password" name="password" class="form-control form-control-lg" />
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
           
            </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection