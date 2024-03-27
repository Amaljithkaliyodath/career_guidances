<!-- Pills navs -->
@extends('layout.master')
@section('content')
<main style="margin-top:10%" id="main">

<section id="contact" class="contact">
      

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            
            <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="img/login.png"
        style="height: 200px;" alt="Phone image">
      </div>

          

          </div>

          <div class="col-lg-8 mt-5 " style="height: 200px;">

          <form method="POST" action="{{route('postlogin')}}">
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
            <div class="row">

</div>
            <div class="row">
                <div class="col-md-8 form-group" >
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email" required />
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
</div>
<div class="row">
                <div class="col-md-8 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Your password" required/>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>
              
</div>
             
              <div class="text-center"><button type="submit" class="btn btn-success">login</button></div>
              
              Register as a student<a href="http://localhost/career/public/student">click here</a><br><br>
              Register as a college<a href="http://localhost/career/public/registration">click here</a>
            </form>

          </div>

        </div>

      </div>
    </section>
</main>
@endsection

<!-- Pills content -->