@extends('layouts.app')

@section('content')

       @include('layouts.menu')
                     

<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="container-fluid">
  <div class="row justify-content-right" style="margin-left: 400px;margin-top: -500px;" >
        <div class="col-md-9">

  
        <h3  >Qui somme nous
        <a href="{{route('propos.create')}}" class="btn btn-primary">nouveau</a>
        </h3>
       
      
    
                                    
       <input class="form-control" style="width: 300px;" id="myInput" type="text" placeholder="Search..">
    <br>
   <div class="table table-responsive">
   <table class="table" >
        <thead>
            <tr>
        <th  scope="col">adresse</th>
         <th  scope="col">email</th>
        <th scope="col">description</th>
        <th scope="col">telephone</th>
        <th scope="col">Image</th>
        
        <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody  id="myTable">
      
        
             @foreach($quisommenouss as $quisommenous)
            
            <tr>
                <td>{{$quisommenous->adresse}}</td>
                <td>{{$quisommenous->email}}</td>
            <td>{{$quisommenous->description}}</td>
             <td>{{$quisommenous->telephone}}</td>
            <td><img src="{!! $quisommenous->image !!}" height="40px" width="80px";></td>
                <td>
                   
                    <div class='btn-group'>
                     
                        
                     
                        <a href="{{ route('propos.edit', [$quisommenous->id]) }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i>edit</a>
                         <form action="{{ route('propos.destroy',$quisommenous->id)}}" method="POST" class="d-inline" >
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