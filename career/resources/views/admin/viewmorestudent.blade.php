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
									<h5 class="card-title mb-0">student</h5>
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
                  <input type="text"  class="form-control form-control-lg  @error('sname') is-invalid @enderror" id="sname" name="sname" value="{{$students->name}}" required/>
                  @error('sname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">Phone No</label>
                
                  <input type="text" class="form-control form-control-lg @error('sphone') is-invalid @enderror" id="sphone" name="sphone" value="{{$students->contact_no}}" required />
                  @error('sphone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">Email</label>
                  <input type="email" class="form-control form-control-lg @error('smail') is-invalid @enderror" id="smail" name="smail" value="{{$students->email}}" required />
                  @error('smail')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">Qualification</label>
                  <input type="text"  class="form-control form-control-lg @error('squali') is-invalid @enderror" id="squali" name="squali" value="{{$students->Qualification}}" required />
                  @error('squali')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  
                    
                  
                  
                  <a href="{{route('admin.viewstudent')}}" style="margin-top: 15px;" type="submit" class="btn btn-success btn-lg ms-2">back</a>
                	
                	
								</div>
							</div>

						</div>
					</div>
                @endsection