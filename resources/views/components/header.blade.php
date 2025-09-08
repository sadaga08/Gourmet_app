<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test Icônes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Boxicons -->
<link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'></head>
@vite(['resources/css/header.css', 'resources/js/app.js'])
<body>
     <header>
    <div class="container border-bottom py-1">
        <div class="row">
            <div class="col-md-6">
                <ul class="nav d-flex justify-content-start">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-black fw-bold">
                            gourmet <i class='bxl  bx-instagram me-2 fw-semibold'  ></i> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-black fw-bold">
                            gourmet <i class='bxl  bx-youtube me-2 fw-semibold'  ></i> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-black fw-bold">
                            gourmet<i class="bxl bx-tiktok bx-tada me-2 fw-semibold "></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="nav d-flex justify-content-end">
                    <li class="nav-item">
                        <a href="mailto:contact@example.com" class="nav-link text-black fw-bold">
                            <i class="bxl bx-gmail bx-tada  me-2 fw-semibold"></i> gourmet@gmail.com
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tel:+1234567890" class="nav-link text-black fw-bold border-bottom">
                            <i class='bx  bxs-phone fw-bold me-2 fw-semibold'></i>  +221 77 123 45 67
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/GOURMETMINI.png" alt="" class="img-fluid w-50 me-4"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
        <li class="nav-item">
          <a class="nav-link text-black me-5 mb-2" href="/">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-black me-5 mb-2" href="/menu">Menu</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-black me-5 mb-2" href="/commande">reserver une table</a>
        </li>
      </ul>
       <div class="col-md-6 d-flex justify-content-end">
        <a href="{{route('panier')}}" class="text-black me-4">Panier </a> <i class='bx bx-cart' style='color:#050404'></i>
         @if(Auth::check())
         <a href="{{route('dashboard')}}" class="text-black me-4">Dashboard</a>
         <a href="{{route('logout')}}" class="text-black me-4 " onclick="event.preventDefault(); document.getElementById('logout').submit();">
            Déconnexion
         </a>
         <form action="{{route('logout')}}" method="post" class="d-none">
            @csrf
         </form>
         @else
                 <a href="/login" class="text-black me-4"> Profil</a> <i class='bx bx-user'></i>
       @endif
       </div>
    </div>
  </div>
</nav>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
