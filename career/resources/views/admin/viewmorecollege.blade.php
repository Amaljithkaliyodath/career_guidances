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
						<h5 class="card-title mb-0">college</h5>
						</div>
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
                  <label class="form-label" for="form3Example8">Name</label>
                  <input type="text" id="form3Example8" class="form-control form-control-lg @error('cname') is-invalid @enderror" id="cname" name="cname" value="{{$colleges->name}}" required/>
                  @error('cname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">University</label>
                  <input type="text" id="form3Example8" class="form-control form-control-lg @error('uni') is-invalid @enderror" id="uni" name="uni" value="{{$colleges->university}}" required />
                  @error('uni')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">Phone No</label>
                
                  <input type="text" id="form3Example8" class="form-control form-control-lg @error('cphone') is-invalid @enderror" id="cphone" name="cphone" value="{{$colleges->contact_no}}" required  />
                  @error('cphone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">District</label>
                  <input type="text" id="form3Example8" class="form-control form-control-lg @error('dis') is-invalid @enderror" id="dis" name="dis" value="{{$colleges->district}}" required  />
                  @error('dis')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">Email</label>
                  <input type="email" id="form3Example8" class="form-control form-control-lg @error('cmail') is-invalid @enderror" id="cmail" name="cmail" value="{{$colleges->email}}" required />
                  @error('cmail')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    <label class="form-label" for="form3Example8">State</label>
                  <input type="text " id="form3Example8" class="form-control form-control-lg @error('cstate') is-invalid @enderror" id="cstate" name="cstate" value="{{$colleges->state}}" required />
                  @error('cstate')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">Address</label>
                  <input type="text area" id="form3Example8" class="form-control form-control-lg @error('cadd') is-invalid @enderror" id="cadd" name="cadd" value="{{$colleges->address}}" required />
                  @error('cadd')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                 
                      <a href="{{route('admin.viewcollege')}}" style="margin-top: 15px;" type="submit" class="btn btn-success btn-lg ms-2">back</a>
                	
                	
								</div>
							</div>

						</div>
					</div>
                @endsection