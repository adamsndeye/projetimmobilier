@extends('layouts.app')

@section('content')
   @include('layouts.menu')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="container-fluid">
  <div class="row justify-content-right" style="margin-left: 400px;margin-top: -500px;" >
                            <div class=" col-md-9">
                                
                                <div class="card">
                                    <h3 class="card-header">Fiche Produit</h3>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('produits.update',$produit)}}" enctype="multipart/form-data">
                                        	@csrf
                                         @method('PATCH')
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" name="nom" value="{{ old('nom') ?? $produit->nom }}" class="form-control" id="nom">
                                            </div>
                                            <div class="form-group">
                                                <label>Prix</label>
                                                <input type="text" name="prix" value="{{ old('prix') ?? $produit->prix }}" class="form-control" id="prix">
                                            </div>
                                             <div class="form-group">
                                                <label>Adresse</label>
                                                <input type="text" name="adresse" value="{{ old('adresse') ?? $produit->adresse }}" class="form-control" id="adresse">
                                            </div>
                                             <div class="form-group">
                                                <label>Nombre de piece</label>
                                                <input type="number" min="0" name="piece" value="{{ old('piece') ?? $produit->piece }}" class="form-control" id="piece">
                                            </div>
                                             <div class="form-group">
                                                <label>Superficie m2</label>
                                                <input type="number" min="0" value="{{ old('superficie') ?? $produit->superficie }}" name="superficie" class="form-control" id="superficie">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea id="description" cols="20" rows="5" type="text" class="form-control @error('description') is-invalid
                                                  @enderror" name="description" value="{{ old('description') ?? $produit->description }}" required autocomplete="description" 
                                                 autofocus>
                                                </textarea>
                                               
                                            </div>
                                             <div class="form-group">
                                                 <label>Categorie</label>
                                                <select name="categorie_id" class="form-control">
                                                	@foreach($categories as $categorie)
                                                	<option value="{{$categorie->id}}" >{{$categorie->libelle}}</option>
                                                  @endforeach
                                                </select>
                                            </div>
                                             <div class="form-group">
                                            
                                              <img  src="/../photos/avatar.png "  height="100px" width="100px" value="{{ old('image') ?? $produit->image }}"  onclick="triggerClick()" id="profilDisplay"  >
                
    											<input type="file"  name="image" id="profilimage"  onchange="displayImage(this)" style="display: none";  >
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