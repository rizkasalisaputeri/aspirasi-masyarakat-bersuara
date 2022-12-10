@extends('layouts.navbarWeb')

@if (session()->has('email') )
<script>
  alert('terserah ya')
  </script>
@endif
@section('content')
</div>
</div>
</div>
</div>
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
<div class="row py-5">
    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-4 text-white animated zoomIn">Login</h1>
    </div>
</div>
</div>
</div>
<main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    @csrf
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid
      @enderror"  id="email" name="email" value="{{ session('email') }}" placeholder="name@example.com" autofocus required>
      <label for="email">Email</label>
      @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid
      @enderror"  name="password" id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>
</main>
@endsection

