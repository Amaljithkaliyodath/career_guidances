@extends('layout/adminmaster')
@section('content')
<main class="content">
<div class="container-fluid p-0"> 
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Students</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if (session('status'))
   		<div class="alert alert-success" role="alert">
  					{{ session('status') }}
			</div>
   @elseif(session('failed'))
       	<div class="alert alert-danger" role="alert">
  					{{ session('failed') }}
			</div>
   @endif
                <table id="example1" class="table table-hover">
                  <thead>
                  <tr>
                    <th>SI No</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Contact No</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php
                    $i=1;
                    @endphp
                  @foreach($students as  $student)

                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->contact_no}}</td>
                    <td>@if($student->status==0)Pending @elseif($student->status==1) Accepted @else Rejected @endif</td>
                    
                    <td>
                      <button title="Delete student" class="btn btn-danger btn-sm deleteme" data-value="{{$student->id}}"  data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i></button>
                      <button title="change Status" class="btn btn-primary btn-sm updateme" data-value="{{$student->id}}"  data-toggle="modal" data-target="#modal-cstatus"><i class="fa fa-edit"></i></button>
                     <a title="View student" href="{{route('admin.viewmorestudent',"$student->id")}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button>
                      
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
                    <th>Email ID</th>
                    <th>Contact No</th>
                    <th>Status</th>
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
        <div class="modal fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Student</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form method="POST" action="{{route('admin.deletestudent')}}">
          @csrf
        <div class="modal-body">
          <p>Do you want to delete the student?</p>
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
</div>
<div class="modal fade" id="modal-cstatus">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Change Status</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form method="POST" action="{{route('admin.updatestudentstatus')}}">
          @csrf
        <div class="modal-body">
         
          <input type="hidden" name="doupdate" id="doupdate"/>
          <div class="form-group" >
            <label>Select Status</label>
            <select class="form-control" id="clstatus" name="clstatus" required>
              <option value="">select</option>
              <option value="1">Accept</option>
              <option value="2">Reject</option>
            </select>
                    </div>

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