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
                <h3 class="mb-5 text-uppercase">College registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                  <form method="POST" action="{{route('college')}}">
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
                    <div class="form-outline">
                    <label class="form-label" for="form3Example1m">college name</label>  
                  <input type="text" class="form-control form-control-lg @error('cname') is-invalid @enderror" id="cname" name="cname" required/>
                  @error('cname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      
                    </div>
                  </div><br>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="form3Example1n">contact_no</label>
                      <input type="text" class="form-control form-control-lg @error('cphone') is-invalid @enderror" id="cphone" name="cphone" required/>
                      @error('cphone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example97">Email ID</label>
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" />
                     @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                 
                </div>
                <div class="form-outline">
                <label class="form-label" for="form3Example1n">Address</label>
                      <input type="text area" class="form-control form-control-lg @error('cadd') is-invalid @enderror" id="cadd" name="cadd" required/>
                      @error('cadd')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      
                    </div>

                

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  

                  

                  

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select  id="cstate" name="cstate" class="select @error('cstate') is-invalid @enderror">
                      <option value="0">State</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Andrapradesh">Andrapradesh</option>
                      <option value="Delhi">Delhi</option>
                    </select>
                    @error('cstate')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                  </div>
                  <div class="col-md-6 mb-4">

                    <select id="cdis" name="cdis" class="select @error('cdis') is-invalid @enderror">
                      <option value="1">District</option>
                      <option value="Wayanad">Wayanad</option>
                      <option value="Calicut">Calicut</option>
                      <option value="Malappuram">Malappuram</option>
                      <option value="Trivandrum">Trivandrum</option>
                      <option value="Ernakulam">Ernakulam</option>
                      <option value="Kollam">Kollam</option>
                    </select>
                    @error('cdis')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                  </div>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example9">University</label>
                  <input type="text" class="form-control form-control-lg @error('uni') is-invalid @enderror" id="uni" name="uni" required/>
                  @error('uni')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example90">Password</label>
                  <input type="password"  class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" required/>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example99">Re enter password</label>
                  <input type="password" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required/>
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