


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        
    </head>
    <body>

<br>  
@include('layouts.menuwelcome')
      <div class="jumbottron">
       <div class="content" >
         <h1 >Gueyerealslate</h1>  
        <p>Vente et location de luxe</p>
        <a class="btn btn-primary" href="{{route('contacts.create')}}">Contacter nous</a>
       
       </div>   


      </div> 

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            

        </div>
        <div class="col-md-3">
            

        </div>
        <div class="col-md-3">
            

        </div>
        <div class="col-md-3">
            

        </div>

    </div>


</div>

<br><br><br>
<div class="container" style="background-color: #f2f2f2;height: 400px;" id="nosprojets">
    <div class="header" id="myHeader">
  <h1>NOS PROJETS</h1>
 
 
</div>

        <div class="row ">
          @foreach($constructions as $construction)
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4  column">
                <div class="card card-inverse card-info">
                  <a href="{{route('descproduit',$construction->id)}}">
                    <img class="card-img-top" src="{{ $construction->image }}">
                    </a>
                    
                </div>
            </div>
            @endforeach
            
           
            </div>
            {{$constructions->links()}}
             </div>
            <br><br>
<div class="container">
  
<div class="row">
  <div>
    
  </div>
  <div class="col-md-4" style="margin-left: 300px; ">
    
  <p id="rcorners5" style="text-align: center;padding-top: 40px;font-size: 30px;">25</p>
  <p style="font-size: 30px;">Année d'expérience</p>
                         
  </div>
  <div class="col-md-4">
    
    <p id="rcorners6" style="text-align: center;padding-top: 39px;font-size: 30px;">48</p>
     <p style="font-size: 30px;"> Immeubles construits</p>
  </div>

</div>
</div>

           
<br><br><br>
<div class="container" style="background-color: #f2f2f2;height: 300px;" id="quisommesnous">
      @foreach($quisommenous as $quisommenou)
  <div class="row ">
        <div class="col-sm"> </div>
        
        <div class="col-md-5 text-center flex-column">
            
            <img src="{{ $quisommenou->image}}" style="object-fit: cover;height: 28 0px;
            width: 100%;">
            
           
            </div>
       
       
        <div class="col-md-6">
            <div >
                <div class="card-body" >
                    
                    <h4 class="card-title text-muted">QUI SOMMES NOUS</h4>
                    <p class="card-text">{{$quisommenou->description}}</p>
                     <a class="btn btn-primary" href="{{route('contacts.create')}}">Contacter nous</a>
                </div>
            </div>
        </div>

     </div>
      @endforeach
     </div>
     <br><br><br><br>















<br><br><br><br>

<div class="main" id="produits">

<div class="header" id="myHeader">
  <h1>NOS PRODUITS</h1>
<div id="myBtnContainer">
  <button class="btn btn-primary btn active" onclick="filterSelection('all')"> Show all</button>
   @foreach($categories as $categorie)
  <button class="btn btn-primary btn" onclick="filterSelection('{{$categorie->libelle}}')"> {{$categorie->libelle}}</button>
  @endforeach
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  @foreach($produits as $produit)
  <div class=" col-sm-6 col-md-4 col-lg-4 mt-4 column {{$produit->categorie->libelle}} ">
      <div class="card card-inverse card-info">
        <a href="{{route('descproduit',$produit->id)}}" style="text-decoration: none;">
         <div class="card-block">
    <img class="card-img-top" src="{{$produit->image}}"  >
      <h3>{{$produit->nom}}</h3>
      </div>
      </a>
    </div>
  </div>


  @endforeach

</div>


<a style="margin-left: 500px; text-decoration: none;"  href="{{route('listeproduits')}}">Voir Plus...</a>
</div>
{{$produits->links()}}
</div>
<br><br><br><br><br>
  <div class="container" id="produitdumois">
        <div class="header" id="myHeader">
  <h1>PRODUIT DU MOIS</h1>
 
</div>       
<div class="row">
  <div class="col-md-6">
    <img class="card-img-top" src="{{$produitmois->image}}" style="object-fit: cover;height: 380px;
            width: 100%;">

  </div>
  <div class="col-md-6">
      <div >
                <div class="card-body" >
                    
                    <h4 class="card-title text-muted"><b>{{$produitmois->nom}}</b></h4>

                      <p class="card-text">{{$produitmois->description}}</p>
                   
                      
                        <p id="rcorners2" style="padding-top: 45px;">{{$produitmois->piece}}pieces</p>
                         <p id="rcorners3" style="padding-top: 45px;">{{$produitmois->superficie}} m2</p>
                          <p id="rcorners4" style="padding-top: 45px;">{{$produitmois->prix}}FCFA</p>
                        
                        </div>
                     
                     <a class="btn btn-primary" href="{{route('descproduit',$produitmois->id)}}">Voir plus...</a>
                </div>
            </div>
  </div>
</div>


 </div>

<br>  <br>  
<div class="header" id="myHeader">
  <h1>Nos Partenaires</h1>
</div>
<div class="slideshow-container" style="background-color: #f2f2f2;height: 300px;" id="partenaires">

 @foreach($partenaires as $partenaire)
<div class="mySlides fade">
  
  <img src="{{$partenaire->logo}}" style="height: 300px;width: 500px; object-fit: cover; margin: auto;" class="d-block ">
  <div class="text"><b>{{$partenaire->nom}}</b></div>
</div>
@endforeach


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


            <br><br><br><br><br>
 

<div class="container" id="temoignages">
<div class="header" id="myHeader">
  <h1>Temoignages</h1>
  <h3>Ce que dise les clients</h3>
</div>
<div class="container"  style="background-color: blue;height: 300px;color: white;width:50%;">

      
<!-- Slideshow container -->
<br><br>
<div class="slideshow-container">
 @foreach($temoignages as $temoignage)
<div class="mySlides fade">
 <div class="description">
   <p>{{$temoignage->message}}</p>

 </div>
  
  <div class="text">{{$temoignage->nom}} {{$temoignage->profession}}</div>
</div>
 @endforeach


</div>
<br>
<br><br><br><br><br><br><br><br><br><br><br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<br>


</div>
 </div>

@if(session()->has('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
 {{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


@include('partial_footer')

        
      

     <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}






</script>


    </body>
</html>