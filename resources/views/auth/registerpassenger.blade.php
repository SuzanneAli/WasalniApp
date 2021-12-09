@extends('layouts.app')

@section('content')
<main class="container text-center">
   <div class="bg-light mx-auto p-5 rounded">
   <form class ="d-grid gap-2 col-6" method="POST" action="{{route('registerpassenger')}}"> 
   @csrf
    <h1 class="h3 mb-3 fw-normal p-2 rounded">انشاء حساب راكب وصلني</h1>
    <div class="form-row  p-1 rounded">
        <label  class="col-sm-4" for="name">:الاسم</label>
        <input type="text" name="name" id="name"      class="col-sm-8 @error('name') border border-danger @enderror" value="{{ old('name') }}" required>
           @error('name')
                <div class="text-danger">
                         {{ $message}}
                </div>                                               
           @enderror
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="phone">رقم الموبايل </label>
        <input type="text" name="phone" id ="phone"     class="col-sm-8 @error('phone') border border-danger @enderror" value="{{ old('phone') }}" required>
            @error('phone')
               <div class="text-danger">
                         {{ $message}}
                </div>                                           
           @enderror
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="email">البريد الالكتروني </label>
        <input type="text"   name="email"  id="email"    class="col-sm-8 @error('email') border border-danger @enderror" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger">
                         {{ $message}}
                </div>                                              
           @enderror
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="address">الموقع</label>
        <input type="text" name="address" id="address"    class="col-sm-8 @error('address') border border-danger @enderror"  value="{{ old('address') }}" required >
        @error('address')
                <div class="text-danger">
                         {{ $message}}
                </div>                                                
           @enderror
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="password">الرقم السري </label>
        <input  type="password" name="password" id="password"   class="col-sm-8 @error('password') border border-danger @enderror"  value="" required>
            @error('password')
                <div class="text-danger">
                         {{ $message}}
                </div>                                                
           @enderror
    </div>
    <div class="form-row p-1 rounded">
        <label  class="col-sm-4" for="password-confirmation">اعادة الرقم السري </label>
        <input   type="password" id="password-confirmation" name="password-confirmation" class="col-sm-8 @error('password-confirmation') border border-danger @enderror" value="" required>
           @error('password-confirmation')
                <div class="text-danger">
                         {{ $message}}
                </div>                                                 
           @enderror
    </div> 
    <div class="form-row p-1 rounded">
       <button class="w-50 btn btn-lg btn-primary" type="submit">تسجيل</button>
    </div>
  </form>
 </div>
</main>

@endsection