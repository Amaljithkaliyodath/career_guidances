
  
 @extends('layout.master')
@section('content')  
<section class="h-100 bg-white">
  <div class="container py-5 h-100">
  <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Destination</h4>
			<p>search your destination here</p>
            
            <form action="" method="post">
			<select class="form-control">
                      <option value="1">search</option>
                      <option value="2">doctor</option>
                      <option value="3">teacher</option>
                      <option value="4">engineer</option>
                    </select>
					<input type="submit" value="Search">
            </form>
          </div>
</div>
</section>

  @endsection