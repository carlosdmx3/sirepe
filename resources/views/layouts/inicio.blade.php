<!DOCTYPE html>
<html lang="en">
<head>

    <title>
    @yield('title')
</title>

<link rel="icon" type="image/jpg" href="img/sees.png"/>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&language=en"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>


<!--

-->
@livewireStyles
<style>
    #mapa { height: 500px; }

.fakeimg {
    height: 200px;
    background: #aaa;
}

.guinda{
    color:#802434;
}
.pagination{
    font-size:10px;
}
.page-item , .active{
    color:gray;
}
.letraa{
    font-size:12px;
}

.dorado{
    color:#D4AF37;
}
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
.colorBG{
    background-color: #C5C5C5;
    color: white;
}

.rcorner {
  border-radius: 30px;
}

@media (min-width: 576px) {
    .tx { font-size: 8px; }
    .tx2 { font-size: 8px; }
    .anch {width:20% }
    .anchlog { width:20px; }
}
@media (min-width: 768px) {
    .tx { font-size: 10px; }
    .tx2 { font-size: 8px; }
    .anch { width:20% }
    .anchlog { width:20px; }
}
@media (min-width: 992px) {
    .tx { font-size: 10px; }
    .tx2 { font-size: 10px; }
    .anch { width:20% }
    .anchlog { width:20px; }
}
@media (min-width: 1200px) {
    .tx { font-size: 18px; }
    .tx2 { font-size: 14px; }
    .anch { width:20% }
    .anchlog { width:20px; }
}

img.zoom {
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
}
 
.transition {
    -webkit-transform: scale(1.8); 
    -moz-transform: scale(1.8);
    -o-transform: scale(1.8);
    transform: scale(1.8);
}

.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;
}
.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
    -moz-transform: rotateZ(-2deg);
    -ms-transform: rotateZ(-2deg);
}
</style>

</head>
<body>

@yield('header')

<nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
     @yield('header_img')
     <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <img src="img/log_edomex_inicio.png" class="anch img-fluid" >&nbsp;
            <b style="color:#D4AF37; font-family: Italic; font-size:30px;">  
            <i class="guinda">SEIEM</i> </b>
    </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')
<div class="row" style=" margin-top:150px;">
    <div class="col-sm-1">    </div>
    <div class="col-sm-4  " >
        <br>
        <div class="login-container ">
            <div class="form-box">
                <div class="container-fluid" 
                     style="background-image: url('img/edom.png');">
                    @yield('login')
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="col-sm-6  " >
    </div>

    <div class="col-sm-1">    </div>
</div>



<div class="row" style=" margin-top:50px;">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        @yield('content_principal')
    </div>
    <div class="col-sm-1"></div>
</div>


@yield('footer')
<footer class="main-footer "  style="font-size:10px; margin-top:150px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-7 shadow" style="color:white; background-color:#802434; border: .5px solid white;">
                <div class="flex-right" align="right">
                    <p>
                    <br><b>Gobierno del Estado de México
                    <br>Secretaría de Educación
                    <br>Servicios Educativos Integrados al Estado de México
                    <br>Coordinación Académica y de Operación Educativa
                    <br>Dirección de Educación Superior</b>
                    <br>Departamento de Posgrado e Investigación</b>
                    <br>Catálogo de programas de posgrado de instituciones públicas y particulares para el desarrollo profesional
                    <br> <b>SEIEM  | Copyright &#169; @php echo date('Y') @endphp</b>
                    </p>
                </div>
            </div>

            <div class="col-5 shadow" style="color:white; background-color:#802434; border: .5px solid white;">
                <div class="flex-right">
                <br>
                    <a  href="https://goo.gl/maps/FykCgWiEd7CsyMZq8"
                        target="_blank"
                        style="text-decoration: none; color:white;">
                        <i class="fa fa-map-marker" style="color:white;"></i>&nbsp;
                            Profesor Agripín Garcia Estrada No. 1306<br>
                            Santa Cruz Atzcapotzaltongo. Toluca, México. C.P. 50290
                    </a>
                <br>
                    <a  href="tel:+527222651600" target="_blank"
                        style="text-decoration: none; color:white;">
                        <i class="fa fa-phone"></i>&nbsp;
                        Tel: 01 (722) 279 77 00 Ext. 1505
                    <br>
                    <a  class="tx"
                        href="https://www.facebook.com/SEIedomex/?ref=ts&amp%3Bfref=ts"
                        target="_blank"
                        style="text-decoration: none; color:white;">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  class="tx"
                        href="https://twitter.com/SEIEM_"
                        target="_blank"
                        style="text-decoration: none; color:white;">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                    <br> <b>SEIEM @php echo date('Y') @endphp &#169;</b>
                </div>
            </div>
        </div>
    </div>
</footer>
@livewireScripts
</body>
</html>
<script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>

