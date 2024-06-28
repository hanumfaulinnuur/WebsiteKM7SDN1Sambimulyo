@extends('layout.master')
@section('title', 'login')
@section('content')

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container"> 
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card bg-light border-secoundery shadow p-3 mb-5 bg-body-tertiary rounded" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/TWH.png') }}" class="img-fluid m-4" width="80px">
                            <h2>SDN 1 Sambimulyo</h2>
                            @if(session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                            @endif
                            @if($errors->any())
                            @foreach($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                            @endif
                        </div>
  
                        <form method="POST" action={{ url('/proses-login') }} >
                            @csrf
                            <div class="col-12">
                              <label for="email" class="form-label">Email</label>
                              <div class="input-group has-validation">
                                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                                  <input type="email" id="email" name="email" class="form-control" required>
                                  <div class="invalid-feedback">Please choose a email addres.</div>
                              </div><br>
                            </div>
  
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control"  required>
                            </div><br>
  
                            <br>
  
                          <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Log In</button>
                          </div>
                                  <div class="text-center mb-1" ><br>
                                  </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

@endsection