<div class="container-fluid fomu" id="contacts">
    <div class="row" >
    <div class="col-sm-6" >
    </div>
    </div>
<div class="row" style="float: : right;" >
    
    <div class="col-sm-5" >
        <div class="header" id="myHeader">
    <h1>NOUS CONTACTER </h1>
    </div>
  <form method="post" action="{{route('contacts.store')}}">
   @csrf
        <label for="nom">Nom complet</label>
     
     
      <input type="text" name="nom" required class="form-control" id="nom">
     
    
        <label for="lname">Telephone</label>
      
      <input type="number" min="0" required name="telephone" class="form-control" id="piece">
      
    
        <label for="email" >{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
      
       <label>Message</label>
           
         <textarea name="message"  class="form-control" id= "message">
                                                  

        </textarea>
      <br>
      <input type="submit" value="envoyer">
    
  </form>
  </div>
  </div>
</div>


<br><br>
<div class="footer"  style="background-color: #f2f2f2;height: 60px; width: 100%;text-align: center;" >
  <h5 ><b>Gueyereal Estate tout droit reservé 2020</b></h5>

</div>