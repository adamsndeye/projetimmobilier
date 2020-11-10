@extends('partial')
@section('content')


<div class="slideshow-container">

 @foreach($produits as $produit)
<div class="mySlides fade">
  
  <img src="{{$produit->image}}" style=" object-fit: cover; margin: auto; height: 500px;width: 100%" class="d-block ">
<div class="text-box" >
         <h1 >Gueyerealslate</h1>  
        <p>Vente et location de luxe</p>
        <a class="btn btn-primary" href="{{route('contacts.create')}}">Contacter nous</a>
       
       </div>  
</div>

@endforeach



</div>
<br>

<div class="container">

<div class="header" id="myHeader">
  <h1>NOS IMMEUBLES</h1>


<!-- Portfolio Gallery Grid -->
 <div class="row ">
          @foreach($immeubles as $immeuble)
            <div class=" col-sm-6 col-md-4 col-lg-4 mt-4 column  ">
      <div class="card card-inverse card-info">
        <a href="{{route('descproduit',$immeuble->id)}}" style="text-decoration: none;">
         <div class="card-block">
    <img class="card-img-top" src="{{$immeuble->image}}"  >
      <h3>{{$immeuble->nom}}</h3>
      </div>
      </a>
    </div>
  </div>
            @endforeach
            
           
            </div>
           


</div>

</div>


<br><br><br><br>
<div class="container">
    <div class="header" id="myHeader">
  <h1>NOS CONSTRUCTIONS</h1>
 
 
</div>

        <div class="row ">
          @foreach($constructions as $construction)
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4  column">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="{{ $construction->image }}">
                    
                    
                </div>
            </div>
            @endforeach
            
           
            </div>
            {{$constructions->links()}}
             </div>
@include('partial_footer')
<script type="text/javascript">
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

</script>



@endsection