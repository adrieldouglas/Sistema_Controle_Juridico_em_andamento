<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="Cache-Control" content="no-store" />
  <link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.css')) }}">
  <link rel="icon" type="image/png" href="{{ url('assets/logotipo/logotipo.png') }}"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <style type="text/css">
    video {
      object-fit: cover;
      width: 100vw;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
    }

  </style>

  <video playsinline autoplay muted loop poster="{{ url('assets/background/image_start.jpg') }}">
  </video>

  <title>{{ $tit_company }}</title>

</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <a href="{{ route('admin.login') }}" class="btn btn-lg bg-danger text-white float-right" style="margin-top: 40%;"><i class="bi bi-box-arrow-right"></i> ACESSAR</a>
      </div>
    </div>
  </div>


  <script src="{{ url(mix('assets/js/jquery.js')) }}"></script>
  <script src="{{ url(mix('assets/js/login.js')) }}"></script>
  <script src="{{ url(mix('assets/js/bundle.js')) }}"></script>

</body>
</html>
