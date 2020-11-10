@extends('layouts.app')

@section('content')

       @include('layouts.menu')
                     

<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="container-fluid">
  <div class="row justify-content-right" style="margin-left: 400px;margin-top: -500px;" >
        <div class="col-md-9">

  
        <h3  >Produits 
         <a href="{{route('produits.create')}}" class="btn btn-primary">nouveau</a>
          
        </h3>
       
      
    
                                    
       <input class="form-control" style="width: 300px;" id="myInput" type="text" placeholder="Search..">
    <br>
 @foreach($produits as $produit)
<div class="jumbotron jumbotron-fluid">
  <div class="container">

                   
                    <div >
    <button data-target="#myAffichModal" role="button" class="btn btn-primary afficheID" data-id="{{ $produit->id }}"  data-nom="{{ $produit->nom }}"  data-toggle="modal"  >mois</button>
                   
                         <a href="{{ route('produits.show', [$produit->id]) }}" class='btn btn-warning'>show</a>
                        <a href="{{ route('produits.edit', [$produit->id]) }}" class='btn btn-warning'>edit</a>
                         <form action="{{ route('produits.destroy',$produit->id)}}" method="POST" class="d-inline" >
                   @csrf
                   @method('DELETE')
                   
                   <button type="submit " class="btn btn-danger">delete</button>
                   
                   </form>
                       
                       
                        
                       
                       
                    </div>
                    
                
    <p >{{$produit->nom}}  {{$produit->categorie->libelle}}</p>
    <p class="lead">{{$produit->description}}</p>
    <div><img src="{!! $produit->image !!}"  height="150px" width="150px";></div>

  </div>
</div>
  @endforeach
<br>


   

</div>
</div>
</div>

            <div id = "myAffichModal" name="myAffichModal" class = "modal fade" role="dialog">  
  <div class = "modal-dialog" > 
    <div class = "modal-content" > 
      <div class = "modal-header" > 
        <button type = "button" class = "close" data-dismiss="modal">&times;</button>    
        <h4 class = "modal-title" >  </h4> 
      </div>
      <div class = "modal-body" > 
        <form  method="post" action="{{ route('produits.updateproduit')}}">
          @csrf
         
        <input type="text" id="affichID" value="{" name="affichID" >
          <div class="form-group">
                       
          <label>Titre</label><br>
        <input type="text" value="" class="form-control" name="titreannonce" id="titreannonce">
           </div>
           <div class="form-group">
                           
          <label>Description</label> <br>
          <textarea name="descriptionannonce" class="form-control"></textarea>
           </div>
            <div class="form-group">
          <input type="submit" class="btn btn-primary" name="save">
        </div>
        </form>
      </div>

    </div>

  </div>
</div>



<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>






<script>
 $(document).on("click", ".afficheID", function () {
   var id = $(this).data('id');

   $("#affichID").val(id);
   
   $('#myAffichModal').modal('show');
</script>


                                    
                      



@endsection