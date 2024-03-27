@extends('layout/adminmaster')
@section('content')
<main class="content">
<div class="container-fluid p-0"> 

  <div class="row">
						
		<div class="col-12 col-lg-6">
							

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Add Jobs</h5>
								</div>
                <form method="POST" action="{{route('admin.addjob')}}">
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
                                <label class="form-label" for="form3Example8">Job</label>
                  <input type="text" class="form-control form-control-lg  @error('jname') is-invalid @enderror" id="jname" name="jname"/>
                  @error('jname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label" for="form3Example8">Course</label>
								<select class="form-control   @error('jcourse') is-invalid @enderror " id="jcourse" name="jcourse">
                      <option value="">select</option>
                      <option value="plustwo">plustwo</option>
                      <option value="college graduate">college graduate</option>
                      @error('jcourse')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                     
                    </select>
                    <label class="form-label" for="form3Example8">Description</label>
                  <input type="text area"  class="form-control form-control-lg  @error('jdis') is-invalid @enderror" id="jdis" name="jdis" />
                  @error('jdis')
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
                <h3 class="card-title">View Jobs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-hover">
                  <thead>
                  <tr>
                    <th>SI No</th>
                    <th>Job</th>
                    <th>Qualification</th>
                    <th>Description</th>
                    <th>Action</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                  @php
                    $i=1;
                    @endphp
                  @foreach($jobs as  $job)

                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$job->name}}</td>
                    <td>{{$job->qualification}}</td>
                    <td>{{$job->description}}</td>
                    
                    <td>
                      <button title="Delete job" class="btn btn-danger btn-sm deleteme" data-value="{{$job->id}}"  data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i></button>
                      <a title="View Course" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button>
                      
                      
                      </td>
                  </tr>
                  @php $i++;
                  @endphp
                  @endforeach
                </tbody>
                  <tfoot>
                  <tr>
                  <th>SI No</th>
                    <th>Job</th>
                    <th>Qualification</th>
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
          <h4 class="modal-title">Delete Job</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form method="POST" action="{{route('admin.deletejob')}}">
          @csrf
        <div class="modal-body">
          <p>Do you want to delete the job?</p>
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
