
@extends('partial')
@section('content')







@if($produitimages)
<div class="slideshow-container">

 @foreach($produitimages as $produitimage)
<div class="mySlides fade">
  
  <img src="{{$produitimage->image}}" style=" object-fit: cover; margin: auto; height: 500px;width: 100%" class="d-block ">
 
</div>

@endforeach


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
@else


@endif

<br><br>
  <div class="container" >
            
<div class="row">
  <div class="col-md-6">
    <img class="card-img-top" src="{{$prod->image}}" style="object-fit: cover;height: 300px;
            width: 100%;">

  </div>
  <div class="col-md-6">
      <div >
                <div class="card-body" >
                    
                    <h4 class="card-title text-muted"><b>{{$prod->nom}}</b></h4>
                    	<p><b>Prix: {{$prod->prix}}FCFA</b></p>
                      <p class="card-text">{{$prod->description}}</p>
                   
                      
                        <p> Nbre de piece : {{$prod->piece}}</p>
                         <p>Superficie: {{$prod->superficie}} m2</p>
                          
                        
                        </div>
                     
                     
                </div>
            </div>
  </div>
  <br>
  <div class="row">
  <div class="col-md-6">
    <br>
<div style="margin-left: 250px;">
    <h4 class="card-title text-muted"><b>{{$prod->nom}}</b></h4>
    <p><b>Prix: {{$prod->prix}}FCFA</b></p>
     <p class="card-text">{{$prod->description}}</p>         
    
</div>
  </div>
  <div class="col-md-6">
      <div >
                <div class="card-body" >
                     <img class="card-img-top" src="{{$prod->image}}" style="object-fit: cover;height: 300px;
            width: 100%;">
                   
                          
                        
                        </div>
                     
                     
                </div>
            </div>
  </div>
</div>

<br>


















<br>


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
// optional
		$('#blogCarousel').carousel({
				interval: 5000
		});

    $(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
</script>

@endsection