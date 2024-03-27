@extends('layout/adminmaster')
@section('content')
<main class="content">
<div class="container-fluid p-0"> 

  <div class="row">
						
		<div class="col-12 col-lg-6">
							

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Add Instructor</h5>
								</div>
                <form method="POST" action="{{route('admin.addinstructor')}}" enctype="multipart/form-data">
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
                  <input type="text" class="form-control form-control-lg  @error('iname') is-invalid @enderror" id="iname" name="iname"/>
                  @error('iname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <label class="form-label" for="form3Example8">email</label>
                  <input type="email" class="form-control form-control-lg  @error('imail') is-invalid @enderror" id="imail" name="imail"/>
                  @error('imail')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <label class="form-label" for="form3Example8">phone</label>
                  <input type="text" class="form-control form-control-lg  @error('iphone') is-invalid @enderror" id="iphone" name="iphone"/>
                  @error('iphone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <label class="form-label" for="form3Example8">Profession</label>
                  <input type="text" class="form-control form-control-lg  @error('iquali') is-invalid @enderror" id="iquali" name="iquali"/>
                  @error('iquali')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      
                  
                    <label class="form-label" for="form3Example8">Description</label>
                  <input type="text area"  class="form-control form-control-lg  @error('idis') is-invalid @enderror" id="idis" name="idis" />
                  @error('idis')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <label class="form-label" for="form3Example8">upload photo</label>
                  <input type="file" class="form-control form-control-lg  @error('file') is-invalid @enderror" id="file" name="file"/>
                  @error('file')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  
                  <button style="margin-top: 15px;" type="submit" class="btn btn-success btn-lg ms-2">save</button>
                	
								</div>
                   </form>
							</div>

						</div>
					</div>




                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Instructor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-hover">
                  <thead>
                  <tr>
                    <th>SI No</th>
                    <th>Name</th>
                    <th>Profession</th>
                    <th>photo</th>
                    <th>Description</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @php
                    $i=1;
                    @endphp
                  @foreach($instructors  as  $instructor)

                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$instructor->name}}</td>
                    <td>{{$instructor->qualification}}</td>
                    <td><img height="100px" width="100px" src="{{asset('photos/'.$instructor->photo)}}"/></td>
                    <td>{{$instructor->description}}</td>
                    
                    <td>
                      <button title="Delete instructor" class="btn btn-danger btn-sm deleteme" data-value="{{$instructor->id}}"  data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i></button>
                      
                      
                      </td>
                  </tr>
                  @php $i++;
                  @endphp
                  @endforeach
                </tbody>
                  <tfoot>
                  <tr>
                  <th>SI No</th>
                    <th>Name</th>
                    <th>Profession</th>
                    <th>photo</th>
                    <th>Description</th>
                    <th>Action</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


                </div>
                <div class="modal fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Instructor</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form method="POST" action="{{route('admin.deleteinstructor')}}">
          @csrf
        <div class="modal-body">
          <p>Do you want to delete the instructor?</p>
          <input type="hidden" name="dodelete" id="dodelete"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
          <button type="submit" id="pdelete" name="pdelete" class="btn btn-danger">Yes</button>
        </div>
          </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  
          
</main>
      @endsection
