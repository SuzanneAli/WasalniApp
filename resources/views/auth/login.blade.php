@extends('layouts.app')

@section('content')
<main class="container">
<div class="bg-light p-5 rounded">

 <!--<form class="text-center w-100">-->
  <form action="{{ route('login') }}" method="GET" class="text-center" >
    @csrf
    <h1 class="h3 mb-3 fw-normal">تسجيل الدخول</h1>

    <div class="form-floating">
      <input type="email"  class="form-control @error('email') border border-danger @enderror" id="floatingInput" placeholder="رقم الدخول">
      <label for="floatingInput">رقم الدخول</label>
           @error('email')
                <div class="alert alert-danger" role="alert">
                         {{ $message }}
                </div>                                               
           @enderror
   </div>

    <div class="form-floating">
    <input type="password" class="form-control @error('email') border border-danger @enderror" id="floatingPassword" placeholder="رقم السري">
      <label for="floatingPassword">رقم السري</label>
           @error('password')
              <div class="alert alert-danger" role="alert">
                         {{ $message }}
                </div>  
                @enderror
  

    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> حفظ البيانات
      </label>
    </div>
    <button class="w-50 btn btn-lg btn-primary" type="submit">تسجيل</button>
  </form>
    </div>
</main>
@endsection