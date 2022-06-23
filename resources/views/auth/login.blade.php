@include('_layouts.basic')

@include('_layouts.navbar')
  
  <section class="contact_section layout_padding-bottom">
    <div class="container">

      <h2 class="main-heading">
         Login
      </h2>
      <!-- <p class="text-center">
      </p> -->

      
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                @if (count($errors) > 0)
                  <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>
                      @foreach ($errors->all() as $error)
                          {{ $error }}<br>
                      @endforeach
                    </h4>
                  </div>
                @endif

                <form class="form-signin" action="{{route('login')}}" method="post">
                  {{ csrf_field() }}
                  <div>
                    <input type="text" name="email" class="form-control" placeholder="email" required autofocus value="{{old('email')}}">
                  </div>
                  <div>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Masuk
                    </button>
                  </div>
                </form>
                <h6 align="center" class="forget-password mt-3">Lupa Kata Sandi ? <a href="{{url('password/reset')}}" align="right"> Klik di sini</a></h6>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  
