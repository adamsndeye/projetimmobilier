<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- CSS only -->
               <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
                 <link rel="stylesheet" type="text/css" href="{{ asset('css/stylecarousel.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- JS, Popper.js, and jQuery -->


        
    </head>
    <body>
        <div class="container">
       <nav class="navbar navbar-light">
        <a class="navbar-brand" href="{{route('welcome')}}">
    <img src="../images/logo.png" width="50" height="50" alt="" loading="lazy">
  </a>
       
<ul class="nav justify-content-end">
 
  <li class="nav-item">
    <a class="nav-link" href="#quisommesnous">Qui sommes nous</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#produits">Produits</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#produitdumois">Produit du mois</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#nosprojets">Nos projets</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#partenaires">Partenaires</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#temoignages">Témoignages</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#contacts">Contact</a>
  </li>
  <li class="nav-item">
    @if (Route::has('login'))
                
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>

                       
                    @endauth
                
            @endif
  </li>
</ul>

</nav>
@yield('content')
</div>
    </body>
    </html>