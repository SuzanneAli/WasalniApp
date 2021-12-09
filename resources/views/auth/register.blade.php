@extends('layouts.app')

@section('content')
<main class="container text-center">
 <div class="bg-light d-grid mx-auto p-5 rounded">
     <div>
<h1 class="h3 mb-3 fw-normal p-5 rounded">انشاء حساب وصلني</h1>
<a class="btn btn-outline-primary  p-5 rounded" href="{{ route('registerdriver') }}">سائق</a>
<a class="btn btn-outline-primary  p-5 rounded" href="{{ route('registerpassenger') }}">راكب</a>
</div>
</div>
</main>

@endsection