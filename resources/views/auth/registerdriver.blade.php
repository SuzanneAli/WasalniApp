@extends('layouts.app')

@section('content')
<main class="container text-center">
  <div class="bg-light d-grid mx-auto p-5 rounded">
   <form>
     <h1 class="h3 mb-3 fw-normal p-5 rounded">انشاء حساب سائق وصلني</h1>
     <div class="form-row  p-1 rounded">
        <label  class="col-sm-4" for="name">:الاسم</label>
        <input  class="col-sm-8" type="text"  class="form-control " name="name" >
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="phone">رقم الموبايل </label>
        <input  class="col-sm-8" type="number"  class="form-control " name="phone" >
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="email">البريد الالكتروني </label>
        <input  class="col-sm-8" type="text"  class="form-control " name="email" >
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="name">الموقع</label>
        <input  class="col-sm-8" type="text"  class="form-control " name="name" >
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="password">الرقم السري </label>
        <input  class="col-sm-8" type="password"  class="form-control " name="password" >
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="password-confirmation">اعادة الرقم السري </label>
        <input  class="col-sm-8" type="password"  class="form-control " name="password-confirmation" >
    </div> 
    <div class="form-row p-1 rounded">
       <button class="w-50 btn btn-lg btn-primary" type="submit">تسجيل</button>
    </div>
  </form>
</div>
</main>

@endsection