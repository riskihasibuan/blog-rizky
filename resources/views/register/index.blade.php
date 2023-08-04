@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
   <div class="col-md-5">
   <main class="form-registration w-100 m-auto">
       <h1 class="h3 mb-3 fw-normal text-center">Registrasi Form</h1>
 <form>
    <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-bottom" id="name" placeholder="name">
        <label for="name">Name</label>
    </div>
    <div class="form-floating">
        <input type="text" name="username" class="form-control rounded-bottom" id="username" placeholder="username">
        <label for="username">Username</label>
    </div>
    <div class="form-floating">
        <input type="email" name="email" class="form-control rounded-bottom" id="email" placeholder="name@example.com">
        <label for="email">Email</label>
    </div>
    <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
        <label for="password">Password</label>
    </div>
        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Registrasi</button>
</form>
<small class="d-block text-center mt-3">Already registered <a href="{{ url('/login') }}">Login</a></small>
   </main>
 </div>
</div>
@endsection