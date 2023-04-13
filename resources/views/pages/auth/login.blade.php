@extends('layouts.auth.app')

@section('title')
<title>login</title>
@endsection

@section('content')
<div class="section-login">
    <div class="container-fluid mb-5">
      <div class="row-lg d-xl-flex mb-5 centerr">
        <div class="col-lg-12 col-xl-6 col-md-12 d-flex justify-content-end">
          <div class="login"></div>
        </div>  
        <div class="col-lg-12 col-xl-6 col-md-12 borderr">
            <div class="">
                <label for="username" class="form-label mt-3 text-white">Welcome Travelers</label>
                <input type="email" class="form-control"  id="username" aria-describedby="emailHelp" placeholder="Username">
            </div>  
            <div>
                <label for="text" class="form-label"></label>
                <input type="text" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="d-grid gap-2">
                <button class="btn mt-3" type="button" width="100%" style="background-color: #FD7B38;">login</button>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection