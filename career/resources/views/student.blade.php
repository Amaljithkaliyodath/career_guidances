@extends('layout.master')
@section('content')
<section class="h-100 bg-white">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="img/register.png">
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <form method="POST" action="{{route('student')}}">
                    
                      @csrf
                    @if (session('status'))
   		<div class="alert alert-success" role="alert">
  					{{ session('status') }}
			</div>
   @elseif(session('failed'))
       	<div class="alert alert-danger" role="alert">
  					{{ session('failed') }}
			</div>
   @endif
   
              <div class="form-outline md-4 mb-4">
                <label class="form-label" for="form3Example8">name</label>
                  <input type="text"  class="form-control form-control-lg  @error('sname') is-invalid @enderror" id="sname" name="sname" required/>
                  @error('sname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
                  </div>
                  
                  </div>
                </div>

                

                <div class="form-outline md-4 mb-4">
                <label class="form-label" for="form3Example8">contact_no</label>
                  <input type="text"  class="form-control form-control-lg  @error('sphone') is-invalid @enderror" id="sphone" name="sphone" required/>
                  @error('sphone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example97">Email ID</label>
                  <input type="email"  class="form-control form-control-lg  @error('email') is-invalid @enderror" id="email" name="email" required />
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>

        

                <div class="row">
                  <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example97">Qualification</label>

                    <select id="squali" name="squali" class="form-control  @error('squali') is-invalid @enderror">
                      <option value="">select</option>
                      <option value="plustwo">plustwo</option>
                      <option value="Graduate">Graduate</option>
                      <option value="working professional">working professional</option>
                    </select>
                    @error('squali')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                  </div>
                  
                </div>

                

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example90">password</label>
                  <input type="password"  class="form-control form-control-lg  @error('password') is-invalid @enderror" id="password" name="password" required/>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example90">repeat password</label>
                  <input type="password"  class="form-control form-control-lg  @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required/>
                  @error('password_confirmation')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>

                

                

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-success btn-lg ms-2">Register</button>
                </div>
                login here<a href="http://localhost/career/public/login">   login</a>
</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

