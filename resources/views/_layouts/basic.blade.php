<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>LOKERKU</title>



    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="{{asset('assets/css/css-circular-prog-bar.css')}}">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />




    <link rel="stylesheet" href="{{asset('assets/css/css-circular-prog-bar.css')}}">
    @yield('script-top')
  </head>
  <body>
    <div>
      @yield('tubuh')
    </div>
    <script>
      var Laravel = {
        csrfToken: '{{ csrf_token() }}'
      }
    </script>
    <script src="{{mix('js/app.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
    $( function() {
      $("#datepicker").datepicker();
      $('#bidang_id').select2();
      $('#nama_kota').select2();
    } );
    </script>
    <script>
      var nomor = 1;
      
      function tambah(fungsi)
      {
        var form = "";
        nomor++;
        // form = form + "<div id=''>";
        form = form + "<label class='nama_"+nomor+"'>Nama "+fungsi+"</label>";
        form = form + "<input type='text' name='nama[]' class='form-control nama_"+nomor+"' value=''>";
        // form = form + "</div>"

        $('.form-group').append(form);
      }

      function kurang()
      {        
        $('.nama_'+nomor).remove();

        if(nomor != 1){
          nomor--;
        }
      }
    </script>
    @yield('script-bottom')
  </body>
</html>
