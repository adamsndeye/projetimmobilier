
@extends('layouts.app')

@section('content')

       @include('layouts.menu')
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="container-fluid">
  <div class="row justify-content-right" style="margin-left: 400px;margin-top: -500px;" >
        <div class="col-md-9">                

<div class="jumbotron jumbotron-fluid">
  <div class="container">

                   
                  
                    
                
    <p >{{$produit->nom}}  {{$produit->categorie->libelle}}</p>
    <p class="lead">{{$produit->description}}</p>
    <div><img src="{!! $produit->image !!}"  width="100%"></div>
    <div>
    	
    <br><br>
     <div class="row">
     	 @foreach($imageproduits as $imageproduit)
  <div class="col-md-3">
    <img src="{!! $imageproduit->image !!}"  style="width:100%;object-fit: cover;height: 120px;" onclick="myFunction(this);">
  </div>
  @endforeach
</div>
    
      
    </div>

  </div>
</div>

</div>
</div>
</div>
@endsection