
  <div class="col-md-12">
    <div class="row">
        <form method="POST" action="{{route ('postadminform')}}">
        @if (session('status'))
   		<div class="alert alert-success" role="alert">
  					{{ session('status') }}
			</div>
   @elseif(session('failed'))
       	<div class="alert alert-danger" role="alert">
  					{{ session('failed') }}
			</div>
   @endif
            @csrf
        <div class="form-group">
            <label>name</label>
            <input class="form-control" type="text" id="aname" name="aname" required/>
</div>
<div class="form-group">
<label>email id</label>
            <input class="form-control" type="email" id="email" name="email" required/>
</div>
<div class="form-group">
<label>password</label>
            <input class="form-control" type="password" id="apassword" name="apassword" required/>
            </div>
<div class="form-group">
<label>confirm password</label>
            <input class="form-control" type="password" id="cpassword" name="cpassword" required/>
</div>
<input type="submit" class="btn-btn-primary" id="sadmin" name="sadmin" value="save"/>
</form>

</div>
</div>
