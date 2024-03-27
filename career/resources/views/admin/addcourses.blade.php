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
									<h5 class="card-title mb-0">Add Courses</h5>
								</div>
                <form method="POST" action="{{route('admin.addcourses')}}">
                    
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
                                <label class="form-label" for="form3Example8">Course</label>
                  <input type="text"  class="form-control form-control-lg @error('cname') is-invalid @enderror" id="cname" name="cname" required />
                  @error('cname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <label class="form-label " for="form3Example8">Entrance exam</label>
								<select class="form-control @error('exam') is-invalid @enderror" id="exam" name="exam">
                      <option value="">select</option>
                      <option value="NEET">NEET</option>
                      <option value="CAT">CAT</option>
                     
                    </select>
                    @error('exam')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    <label class="form-label" for="form3Example8">University</label>
								<select  class="form-control @error('uni') is-invalid @enderror" id="uni" name="uni">
                      <option value="">select</option>
                      <option value="calicut">calicut</option>
                      <option value="kannur">kannur</option>
                     
                    </select>
                    @error('uni')
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
                <h3 class="card-title">View Courses</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-hover">
                  <thead>
                  <tr>
                    <th>SI No</th>
                    <th>Course</th>
                    <th>Exam</th>
                    <th>University</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $i=1;
                    @endphp
                  @foreach($courses as  $course)

                 
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$course->course_title}}</td>
                    <td>{{$course->entrance_exam}}</td>
                    <td>{{$course->university}}</td>
                    
                    <td>
                      <button title="Delete Course" class="btn btn-danger btn-sm deleteme" data-value="{{$course->id}}"  data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i></button>
                      
                      
                      
                      </td>
                  </tr>
                  @php $i++;
                  @endphp
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>SI No</th>
                    <th>Course</th>
                    <th>Exam</th>
                    <th>University</th>
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
          <h4 class="modal-title">Delete Course</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form method="POST" action="{{route('admin.deletecourse')}}">
          @csrf
        <div class="modal-body">
          <p>Do you want to delete the course?</p>
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