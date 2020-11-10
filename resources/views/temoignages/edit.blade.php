
@extends('layouts.app')
@section('content')

       @include('layouts.menu')


<br><br><br>

			
                                
                                <div class="card col-md-5" style="margin-left: 400px;margin-top: -570px;">
                                    <h3 class="card-header">Fiche Témoignage</h3>
                                    <div class="card-body">
                                        <form method="post" action="{{route('temoignages.update',$temoignage)}}" enctype="multipart/form-data">
                                        	@csrf
                                         @method('PATCH')
                                            <div class="form-group">
                                                <label>Nom complet</label>
                                                 <div class="col-md-8">
                                                <input type="text" name="nom" value="{{ old('nom') ?? $temoignage->nom}}" required class="form-control" id="nom">
                                            </div>
                                            </div>
                                             <div class="form-group">
                                                <label>Profession</label>
                                                 <div class="col-md-8">
                                                <input type="text" name="profession" value="{{ old('profession') ?? $temoignage->profession}}" required class="form-control" id="profession">
                                            </div>
                                            </div>
                                            
                                            
                                             
                                            <div class="form-group">
                                                <label>Message</label>
                                                 <div class="col-md-8">
                                                <textarea name="message" value="{{ old('message') ?? $temoignage->message}}"  class="form-control" id= "message">
                                                  

                                                </textarea>
                                            </div>
                                               
                                            </div>
                                             <div class="form-group">
                                            
                                              <img  src="/../photos/avatar.png "  height="100px" width="100px" value="{{ old('image') ?? $temoignage->image }}"  onclick="triggerClick()" id="profilDisplay"  >
                
                                                <input type="file"  name="image" id="profilimage"  onchange="displayImage(this)" style="display: none";  >
                                            </div>
                                            
                                             <div class="form-group col-sm-12">
                                               <input type="submit" name="submit" class="btn btn-primary" value="valider">
                                                <a  href="{{ route('temoignages.index') }}" class="btn btn-default">Cancel</a>
                                              </div>

                                        </form>
                                    </div>
                                    
                                </div>
                          






<script src="{{ asset('js/script.js') }}" ></script>


       @endsection