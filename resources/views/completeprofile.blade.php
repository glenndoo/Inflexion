<x-template data='Complete Profile' />
    
<div class="container">
    <div class="row">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </div>
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <center>
            @if(isset($Results))
                You got {{ $Results }}% of the total questions
            @endif
                <form class="needs-validation" action="{{ route('CompleteRegistration') }}" method="post" novalidate>
                    @csrf
                    <h3>Please complete your account information</h3>
                    <input class="form-control" type='hidden' name='id' value='{{ $Details->inflexion_user_id }}'/>
                    <div class="form-group row">
                        <div class="col-sm">
                            <input class="form-control" type='email' readonly='readonly' value='{{ $Details->inflexion_username }}' name='email'required/>
                        </div>
                    </div>
                    
                    <hr/>

                    <div class="form-group row">
                        <div class="col-sm">
                            <input class="form-control" type="text" name='firstName' placeholder='First Name'required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm">
                            <input class="form-control" type="text" name='middleName' placeholder='Middle Name' required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm">
                            <input class="form-control" type="text" name='lastName'  placeholder='Last Name'required/>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group row">
                        <div class="col-sm-3"><input class="form-control" type="text" name='street'  placeholder='street'required/>
                            
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <input class="form-control" type="text" name='city'  placeholder='City'required/>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <input class="form-control" type="text" name='state'  placeholder='State/Province'required/>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <select class="form-control" name='country' required>
                                <option selected disabled>Country</option>
                                @foreach($Countries as $country)
                                <option value='{{ $country }}'>{{ $country }}</option>
                                @endforeach
                            </select>
                               
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            
                        </div>
                        <div class="col-sm-6">
                        <input class="form-control" type="number" name='zipCode'  placeholder='Zip Code'required/>
                        </div>
                    </div>

                    <hr/>

                    <div class="form-group row">
                        <div class="col-sm">
                            <input class="form-control" type="number" name='contactNumber'  placeholder='Contact Number'required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm">
                            <input class="form-control" type="date" value="2011-08-19T13:45:00" id="dateOfBirth" name="dateOfBirth" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        
                    </div>
                    <button class="btn btn-primary" type="submit" value="Register Information">Register Information</button>
                </form>
            </center>
            
        </div>
    </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>