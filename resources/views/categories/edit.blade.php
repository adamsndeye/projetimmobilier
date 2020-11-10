@extends('layouts.app')

@section('content')

       @include('layouts.menu')

   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="container-fluid">
  <div class="row justify-content-right" style="margin-left: 400px;margin-top: -500px;" >
                            <div class=" col-md-9">
                                
                                <div class="card" >
                                    <h3 class="card-header">Fiche Categorie</h3>
                                    <div class="card-body">
                                        <form method="post" action="{{route('categories.update',$categorie)}}" >
                                        	@csrf
                                           @method('PATCH')
                                            <div class="form-group">
                                                <label>Libelle</label>
                                                <input type="text" name="libelle" value="{{ old('libelle') ?? $categorie->libelle}}"  class="form-control" id="libelle">
                                            </div>
                                            
                                             <div class="form-group col-sm-12">
                                               <input type="submit" name="submit" class="btn btn-primary" value="valider">
                                                <a  href="{{ route('produits.index') }}" class="btn btn-default">Cancel</a>
                                              </div>

                                        </form>
                                    </div>
                                    
                                </div>
                            </div>

</div>
</div>
  <script src="{{ asset('js/script.js') }}" ></script>



@endsection