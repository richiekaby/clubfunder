  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  </head>
  <body>

      @yield('content')

<!--footer-->
  <footer class="bd-footer text-muted w-100 bg-faded" style="padding-top: 40px; background-color: black; color:#fff">
  <div class="container text-center">
    <p>Crowdfunding designed with all the love to help people support and invest on projects</p>
  </div>
</footer>



<!--ends footer-->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script type="text/javascript" src="{{asset('assets/js/jquery-3.1.0.js')}}"></script> 
       <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
    </body>
</html>
