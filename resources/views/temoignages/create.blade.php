
@extends('layouts.app')


@section('content')

       @include('layouts.menu')
<br><br><br>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

			
                                
                                <div class="card col-md-5" style="margin-left: 400px;margin-top: -570px;">
                                    <h3 class="card-header">Fiche Témoignage</h3>
                                    <div class="card-body">
                                        <form method="post" action="{{route('temoignages.store')}}" enctype="multipart/form-data">
                                        	@csrf
                                            <div class="form-group">
                                                <label>Nom complet</label>
                                                 <div class="col-md-8">
                                                <input type="text" name="nom" required class="form-control" id="nom">
                                            </div>
                                            </div>
                                             <div class="form-group">
                                                <label>Profession</label>
                                                 <div class="col-md-8">
                                                <input type="text" name="profession" required class="form-control" id="profession">
                                            </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label>Message</label>
                                                 <div class="col-md-8">
                                                <textarea name="message"  class="form-control" id= "message">
                                                  

                                                </textarea>
                                            </div>
                                               
                                            </div>
                                            <div class="form-group">
                                            
                                              <img  src="/../photos/avatar.png "  height="100px" width="100px"  onclick="triggerClick()" id="profilDisplay"  >
                
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