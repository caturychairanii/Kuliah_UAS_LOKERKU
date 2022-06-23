<div class="top_container">
  
  <!-- header section strats -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('dashboard')}}">
          <img src="{{asset('assets/images/LogoLokerku_w.png')}}" style="width: 200px" alt="">
          <!-- <span>
            LOKERKU
          </span> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="/"> Home <span class="sr-only">(current)</span></a>
              </li>

                @if(!Auth::check())
                  <li class="nav-item">
                    <a class="nav-link link" href="{{url('login')}}">Masuk</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{url('register')}}">Daftar</a>
                  </li>
                @else

                  @if(Auth::user()->role == 'user')
                  <li class="nav-item ">
                    <a class="nav-link" href="{{url('biodata')}}">Biodata</a>
                  </li>
                  @else

                  <li class="nav-item ">
                    <a class="nav-link" href="{{url('bidang')}}">Bidang</a>
                  </li>

                  <li class="nav-item ">
                    <a class="nav-link" href="{{route('lowongan.index')}}">Lowongan</a>
                  </li>

                  @endif

                  <li class="nav-item ">
                    <a class="nav-link" href="{{url('/logout')}}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Keluar</a>
                  </li>

                  <form id="logout-form" action="{{url('/logout')}}" method="POST" >
                      {{ csrf_field() }}
                  </form>



              

                @endif              

              

             

            </ul>
          </div>
      </nav>
    </div>
  </header>

  <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Connect easily with Lokerku!<br>
          </h3>
          <h1>
            LOKERKU
          </h1>
          <p>
            Website Lokerku merupakan sebuah website ysng diharapkan dapat membantu para pencari pekerja dan penyedia pekerjaan untuk saling terhubung
          </p>
          <div class="hero_btn-continer">

            @if(!Auth::check())
            <a href="/login" class="call_to-btn btn_white-border">
              <span>
                Masuk
              </span>
              <img src="{{asset('assets/images/right-arrow.png')}}" alt="">
            </a>
            @endif

          </div>
        </div>


        <div class="hero_img-container">
          <div>
            <img src="{{asset('assets/images/desain-header.png')}}" alt="" class="img-fluid">
          </div>
        </div>


      </div>
    </section>



</div>
