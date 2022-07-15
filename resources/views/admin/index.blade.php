<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/> 
    <link rel="stylesheet" href="{{ url(mix('assets/css/reset.css')) }}"/>
    <link rel="stylesheet" href="{{ url(mix('assets/css/boot.css')) }}"/>
    <link rel="stylesheet" href="{{ url(mix('assets/css/login.css')) }}"/>
    <link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.css')) }}">
    <link rel="icon" type="image/png" href="{{ url('assets/logotipo/logotipo.png') }}"/>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">  

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

    <video playsinline autoplay muted loop poster="{{ url('assets/background/login_bg.jpg') }}">
    </video>

    <title>{{  $tit_login }}</title>

</head>
<body style="background-color: #6B767F;">
<div class="ajax_response"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-5">
                <div class="card" style="margin-top: 10%; border-color: blue;">
                    <div class="card-header">Entrar</div>
                    <div class="card-body">                                         
                    <img src="{{ url('assets/logotipo/logotipo.png') }}" class="rounded mx-auto d-block img-fluid" width="130" alt="logotipo">   
                     <h5 class="text-danger font-weight-bold text-center mt-2">Company Adriel Douglas</h5>          
                         <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">                   
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="font-weight-bold"><i class="bi bi-person-heart"></i> E-mail</label>
                                    <input id="email" type="email" class="form-control-lg form-control" name="email" placeholder="E-mail de acesso" style="border-color: orange;">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password" class="font-weight-bold"><i class="bi bi-key-fill"></i> Senha</label>
                                    <input id="password" type="password" class="form-control-lg form-control"
                                    name="password_check" placeholder="Senha de acesso" style="border-color: orange;">
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                               <p class="text-muted">Somos uma empresa responsável por todo tipo de Controle Jurídico para voçê</p>
                              </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button class="btn btn-success btn-lg float-right radius" data-toggle="tooltip" title="Logar Agora">
                                    <i class="bi bi-check2-square"></i> ACESSAR
                                 </button>                                  
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <script src="{{ url(mix('assets/js/jquery.js')) }}"></script> 
 <script src="{{ url(mix('assets/js/login.js')) }}"></script>
 <script src="{{ url(mix('assets/js/bundle.js')) }}"></script> 

 <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>

</body>
</html>
