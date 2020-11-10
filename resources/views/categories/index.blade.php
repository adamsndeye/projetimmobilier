@extends('layouts.app')

@section('content')

       @include('layouts.menu')
                     


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="container-fluid">
  <div class="row justify-content-right" style="margin-left: 400px;margin-top: -500px;" >
        <div class="col-md-9">

  
        <h3  >Liste des Categories
         <a href="{{route('categories.create')}}" class="btn btn-primary">nouveau</a>
        </h3>
       
      
    
                                    
       <input class="form-control" style="width: 300px;" id="myInput" type="text" placeholder="Search..">
    <br>
   <div class="table ">
   <table class="table" >
        <thead>
            <tr>
        <th  scope="col">Libelle</th>
       
        
        <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody  id="myTable">
      
        
            @foreach($categories as $categorie)
            
            <tr>
                <td>{{$categorie->libelle}}</td>
          
         
                <td>
                   
                    <div >
                     
                     
                        <a href="{{ route('categories.edit', [$categorie->id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit"></i>edit</a>
                         <form action="{{ route('categories.destroy',$categorie->id)}}" method="POST" class="d-inline" >
                   @csrf
                   @method('DELETE')
                   
                   <button type="submit " class="btn btn-danger">delete</button>
                   
                   </form>
                       
                        
                       
                       
                    </div>
                    
                </td>
            </tr>
            @endforeach
       
        <div class="row">
          
           <div class="col-12 text-center">
             
             
           </div>

        </div>
        </tbody>
      </table>
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


                                    
                      



@endsection