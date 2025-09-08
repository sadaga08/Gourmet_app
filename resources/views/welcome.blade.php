<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Boxicons -->
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'></head>
     @vite(['resources/css/welcome.css', 'resources/js/app.js'])
    <title>welcome</title>
</head>
<body>
    @include('components.header')
    @auth 
    <div class="alert alert-dark text-center border-black-2 mt-4">
        <i class='bx bxs-check-circle'></i>
        <strong>Bienvenue</strong> {{Auth::user()->name}} sur Gourmet Mini, votre plateforme de commande en ligne.
      <h4> <br> <br>profitez de nos différents gourmet </h4>
    </div>
    @endauth
   <div class="container mt-5">
  <div class="row align-items-center">
     @if(Auth::check())
    <div class="container border-& bg bg-success rounded-2 px-2 py-2 text-center">
      <a href="{{route('logout')}}" class="text-black text-center justify-content-center h5 text-decoration-none " onclick="event.preventDefault;document.getElementById('logout').submit();">
      vous êtes avec nous
     </a>
    </div>
     @csrf
     <form action="{{route('logout')}}" method="post" class="d-none">
              <div class="hover-desc mb-2 border-2 bg bg-dark rounded-2 px-2 py-2  text-center "><a href="/login" class="text-white text-decoration-none d-none">Nous rejoindre</a></div>
     </form>
     @endif
  <div class="col-md-6 px-4 py-3">
      <h1>GOURMET-MINI</h1>
      <p>A la commande ou en take-away</p>
      <h3>Nos créations du moment</h3>
      <p class="w-100">
        Delorme Fass Rue, 20 – Avenue Gorge Pompidoux, 12345 Dakar-Plateau<br>
        Lundi au Dimanche : 8h30 - 19h00
      </p>
    </div>
    <!-- Colonne image -->
   <div class="col-md-6 text-center px-3 py-4 ">
  <a href="/menu" class="d-inline-block text-decoration-none">
    <img src="/PizzaHome.jpeg" alt="home images" class="img-fluid rounded-3 w-75 h-auto hover-desc">
  </a>
</div>
  </div>
</div><hr>
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col-md-12">
      <label class="fs-1 fw-semibold">Nos catégories</label>
      <hr>
      <div class="row g-4"> 

        <!-- Carte 1 -->
        <div class="col-md-3">
          <div class="card h-100 hover-desc">
           <a href="/menu"><img src="/foodPizza1.jpeg" alt="Pizza 1" class="card-img-top rounded-3"></a>
          <div class="card-body">
              <h5 class="card-title">Pizzas Reins</h5>
              <p class="card-text">Découvrez notre sélection de pizzas artisanales, préparées avec soin.</p>
            </div>
          </div>
        </div>

        <!-- Carte 2 -->
        <div class="col-md-3">
          <div class="card h-100 hover-desc">
            <a href="/menu"><img src="/foodPizza2.jpeg" alt="Pizza 2" class="card-img-top rounded-3"></a>
          <div class="card-body">
              <h5 class="card-title">Pizzas Margarita</h5>
              <p class="card-text">Découvrez notre sélection de pizzas artisanales, préparées avec soin.</p>
            </div>
          </div>
        </div>

        <!-- Carte 3 -->
        <div class="col-md-3">
          <div class="card h-100 hover-desc">
               <a href="/menu"><img src="/foodPizza3.jpeg" alt="" class="card-img-top rounded-3"></a>
          <div class="card-body">
              <h5 class="card-title">Pizzas Fromage</h5>
              <p class="card-text">Découvrez notre sélection de pizzas artisanales, préparées avec soin.</p>
            </div>
          </div>
        </div>

        <!-- Carte 4 -->
        <div class="col-md-3">
          <div class="card h-100 hover-desc">
           <a href="/menu"><img src="/foodPizza4.jpeg" alt="Pizza 4" class="card-img-top rounded-3"></a>
          <div class="card-body">
              <h5 class="card-title">Pizzas Napolitains</h5>
              <p class="card-text">Découvrez notre sélection de pizzas artisanales, préparées avec soin.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- card 1  -->
  <div class="row  mt-3 d-flex flex-wrap justify-content-start">
  <!-- Card 1 -->
  <div class="col-md-3">
    <div class="card h-100 hover-desc">
   <a href="/menu"><img src="/foodburger1.jpeg" alt="" class="card-img-top rounded-3"></a>
    <div class="card-body">
        <h5 class="card-title">Burgers Classiques</h5>
        <p class="card-text">
          Savourez nos burgers classiques, préparés avec des ingrédients frais et de qualité.
        </p>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="col-md-3">
    <div class="card h-100 hover-desc">
     <a href="/menu"><img src="/foodBurger2.jpeg" alt="" class="card-img-top rounded-3"></a>
    <div class="card-body">
        <h5 class="card-title">Burger Complet</h5>
        <p class="card-text">
          Découvrez nos burgers complets, garnis de viande juteuse et de légumes croquants.
        </p>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="col-md-3">
    <div class="card h-100 hover-desc">
    <a href="/menu"><img src="/foodBurger3.jpeg" alt="" class="card-img-top rounded-3"></a>
    <div class="card-body">
        <h5 class="card-title">Burgers Frits</h5>
        <p class="card-text">
          Dégustez nos burgers frits, croustillants à l'extérieur et tendres à l'intérieur.
        </p>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="col-md-3">
    <div class="card h-100 hover-desc">
    <a href="/menu"><img src="/foodBurger4.jpeg" alt="" class="card-img-top rounded-3"></a>
    <div class="card-body">
        <h5 class="card-title">Burgers Végétariens</h5>
        <p class="card-text">
          Savourez nos burgers végétariens, préparés avec des légumes frais et des sauces maison.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-3 g-4">
  <!-- Card 1 -->
  <div class="col-md-3">
    <div class="card h-100 hover-desc">
      <a href="/menu">
        <img src="/foodTacos1.jpeg" alt="" class="card-img-top">
      </a>
      <div class="card-body">
        <h5 class="card-title">Tacos Mexicains</h5>
        <p class="card-text">
          Savourez nos tacos mexicains, croustillants à l'extérieur et tendres à l'intérieur.
        </p>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="col-md-3">
    <div class="card h-100 hover-desc">
      <a href="/menu">
        <img src="/foodTacos2.jpeg" alt="" class="card-img-top">
      </a>
      <div class="card-body">
        <h5 class="card-title">Tacos Simples</h5>
        <p class="card-text">
          Découvrez nos tacos simples, garnis de viande juteuse et de légumes croquants.
        </p>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="col-md-3">
    <div class="card h-100 hover-desc">
      <a href="/menu">
        <img src="/foodTacos3.jpeg" alt="" class="card-img-top">
      </a>
      <div class="card-body">
        <h5 class="card-title">Tacos au Kebab</h5>
        <p class="card-text">
          Découvrez nos tacos Kebab, garnis de viande juteuse et de légumes croquants.
        </p>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="col-md-3">
    <div class="card h-100 hover-desc">
      <a href="/menu">
        <img src="/foodTacos4.jpeg" alt="" class="card-img-top">
      </a>
      <div class="card-body">
        <h5 class="card-title">Tacos Complets</h5>
        <p class="card-text">
          Découvrez nos tacos complets, garnis de viande juteuse et de légumes croquants.
        </p>
      </div>
    </div>
  </div>
</div>
           </div>
       </div>
  </div>
</div>
<div class="container-fluid contact-section d-flex justify-content-center align-items-center text-center min-vh-100 mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12">
      <h1 class="text-white fw-bold mb-4">GOURMET-MINI SHOWROOM</h1>
      <p class="text-white h5 fw-bold mb-4">
        Vous avez la possibilité de réserver une table pour profiter de nos différents Gourmet dans un palace luxueux et moderne.
      </p>
      <a href="/commande" class="btn btn-dark fw-bold px-4 py-3 mt-5">Réservez une table</a>
    </div>
  </div>
</div>
<div class="container-fluid mt-5" id="last-section">
  <div class="row justify-content-center align-items-center px-5 py-5">
    
    <!-- Colonne gauche : Image -->
    <div class="col-md-6 text-start mb-4 mb-md-0">
      <img src="/menuContent.jpg" alt="Plat gourmet" class="img-fluid rounded shadow">
    </div>

    <!-- Colonne droite : Contenu -->
    <div class="col-md-6 text-end custom-hover">
      <h1 class="text-black mb-4 h2">
        Découvrez l'Excellence Culinaire
      </h1>
      <p class="text-black mb-4 p px-md-3">
        Laissez-vous séduire par une sélection raffinée de plats préparés avec passion par nos chefs.
        Des saveurs authentiques, des ingrédients de qualité, et une expérience gastronomique inoubliable vous attendent.
      </p>
      <a href="/menu" 
         class="btn custom-hover-white text-center  text-white bg-black border-2 px-4 py-3 rounded-3 text-decoration-none">
         Voir nos créations gourmandes
      </a>
    </div>

  </div>
</div>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>