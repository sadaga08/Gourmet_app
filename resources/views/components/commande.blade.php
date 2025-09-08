<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Boxicons -->
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'></head>
     @vite(['resources/css/commande.css', 'resources/js/app.js'])
    <title>reservation</title>
</head>
<body>
        @include('components.header')
      <div class="col-md-12" id="command-main-content">
  <h3 class="text-black mx-5 mt-5">
    Les Réservations
  </h3>

  <div class="row d-flex flex-wrap align-items-center justify-content-center px-5 border" >
    <!-- Carte de réservation : Petit-Déjeuner -->
    <div class="col-md-8 mt-5 text-center" id="second-main">
            <img src="/lunch.jpg" alt="" class="img-fluid w-55">
        <label for="" class="text-center h4 mt-3">
        Petit-déjeuner équilibré
        </label>
        <p class="text-center mt-3">
        Profitez d’un petit-déjeuner complet et sain, idéal pour bien démarrer votre journée dans une ambiance conviviale.
        </p>
        <div class="more-learn">
            <a href="#" class="text-black">savoir plus</a>
        </div>
        <div class="hover-reserve   mt-5 text-center border px-2 py-2  bg bg-black">
             <a href="panier" class="text-white text-decoration-none">reservez</a>
        </div>
    </div>
     <!-- Carte de réservation : Petit-Déjeuner -->
    <div class="col-md-8 mt-5 text-center" id="second-main">
            <img src="/dinner.jpg" alt="" class="img-fluid w-55">
        <label for="" class="text-center h4 mt-3">
        Buffet gourmet
        </label>
        <p class="text-center text-center  mt-3 ">
        Découvrez une sélection raffinée de mets savoureux, soigneusement préparés par nos chefs pour satisfaire tous les palais.

        </p>
        <div class="more-learn">
            <a href="#" class="text-black">savoir plus</a>
        </div>
        <div class="hover-reserve  mt-5 text-center b order px-2 py-2 bg bg-black">
             <a href="panier" class="text-white text-decoration-none">reservez</a>
        </div>
    </div>
     <!-- Carte de réservation : Petit-Déjeuner -->
    <div class="col-md-8 mt-5 text-center" id="second-main">
            <img src="/repas.jpg" alt="" class="img-fluid w-55">
        
        <label for="" class="text-center h4 mt-3">
                  Dîner raffiné

        </label>
        <p class="text-center mt-3">
        Terminez votre journée avec un dîner élégant, alliant saveurs authentiques et service de qualité dans un cadre chaleureux.

        </p>
        <div class="more-learn">
            <a href="#" class="text-black">savoir plus</a>
        </div>
        <div class="hover-reserve   mt-5  text-center border px-2 py-2 bg bg-black">
            <a href="panier" class="text-white text-decoration-none">reservez</a>
        </div>
    </div>
  </div>
</div>
        @include('components.footer')

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>