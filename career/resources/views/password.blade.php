@extends('layout/adminmaster')
@section('content')

<div class="main-body"> 


             <div class="page-wrapper">
            <div class="page-body">
            <div class="row">
            <div class="col-md-6">
            <div class="card">
            <div class="card-header">
           
									<h5 class="card-title mb-0">Change Password</h5>
								</div>
                <form method="POST" action="{{route('admin.updatepassword')}}">
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
						
								<div class="card-body">
                


             

                
</div>

<div class="form-outline mb-4">
                <label class="form-label" for="form3Example90">Current password</label>
                  <input type="password" class="form-control form-control-lg  @error('cpassword') is-invalid @enderror " id="cpassword" name="cpassword" />
                  @error('cpassword')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example90">New password</label>
                  <input type="password"  class="form-control form-control-lg @error('npassword') is-invalid @enderror " id="npassword" name="npassword"  />
                  @error('npassword')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example90">Confirm password</label>
                  <input type="password"  class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror " id="password_confirmation" name="password_confirmation"   />
                  @error('password_confirmation')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
                <div class="form-group form-default">
                <button  class="btn btn-success waves-effect waves-light" type="submit">Change</button>
</div>


</main>
                @endsection