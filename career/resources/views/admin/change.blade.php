@extends('layout/adminmaster')
@section('content')
<main class="content">
<div class="container-fluid p-0"> 


<div class="col-xl-6 col-xxl-7">
<div class="card flex-fill">


             

                
</div>
</div>




                <div class="row">
						
						<div class="col-12 col-lg-6">
							

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Change Password</h5>
								</div>
                @if (session('status'))
   		<div class="alert alert-success" role="alert">
  					{{ session('status') }}
			</div>
   @elseif(session('failed'))
       	<div class="alert alert-danger" role="alert">
  					{{ session('failed') }}
			</div>
   @endif
                <form method="POST" action="{{route('admin.updatepassword')}}">
                @csrf
                    
								<div class="card-body">
                                <label class="form-label" for="form3Example8">Current Password</label>
                  <input type="password"  class="form-control form-control-lg @error('cpassword') is-invalid @enderror " id="cpassword" name="cpassword" required/>
                  @error('cpassword')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  
                  <label class="form-label" for="form3Example8">New Password</label>
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror " id="password" name="password" required/>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  
                    <label class="form-label" for="form3Example8">Confirm Password</label>
                  <input type="password" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror " id="password_confirmation" name="password_confirmation" required />
                  @error('password_confirmation')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <button style="margin-top: 15px;" type="submit" class="btn btn-success btn-lg ms-2">Change</button>
                	
								</div>
							</div>

						</div>
					</div>
                    </main>

                @endsection