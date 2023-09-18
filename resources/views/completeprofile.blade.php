<x-template data='Complete Profile' />
    
<div class="container fade-load">
    <div class="row">
        <br/>
        <br/>
        <br/>
    </div>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <div class="card shadow">
                <div class="card-header">
                    <ul id="progress">
                    <li class="fa fa-check active">Complete information</li>
                        <li>
                            <i  aria-hidden="true"></i> EXAM:
                            @if(isset($Results))
                                {{ $Results }}%
                            @endif
                        </li>
                        <li>Skype Interview</li>
                    </ul>
                </div>
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('CompleteRegistration') }}" method="post" novalidate>
                        @csrf
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
                            <div class="col-sm">
                                <input class="form-control" type="text" name='middleName' placeholder='Middle Name' required/>
                            </div>
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
                            <div class="col-sm-6">
                            <input class="form-control" type="number" name='zipCode'  placeholder='Zip Code'required/>
                            </div>
                            <div class="col-sm">
                                <input class="form-control" type="number" name='contactNumber'  placeholder='Contact Number'required/>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="dateOfBirth" class="col-sm-2 col-form-label">Date of Birth</label>
                                <div class="col-sm-10">
                                     <input class="form-control" type="date" value="2011-08-19T13:45:00" id="dateOfBirth" name="dateOfBirth" required/>
                                </div>
                        </div>

                        <!--this should only show for tutor login-->
                        <hr/>
                        <!-- @php
                        date_default_timezone_set('Asia/Manila');
                           
                        @endphp
                        <!-- Site time: {{date('F j, Y g:i:a  ')}} (GMT+8)Metro Manila, PH
                        <div class="form-group row">
                            <div class="col-sm">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">Mon</th>
                                          <th scope="col">Tue</th>
                                          <th scope="col">Wed</th>
                                          <th scope="col">Thu</th>
                                          <th scope="col">Fri</th>
                                          <th scope="col">Sat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td><small>9am - 3pm</small></td>
                                          <td><small>9am - 3pm</small></td>
                                          <td><small>9am - 3pm</small></td>
                                          <td><small>9am - 3pm</small></td>
                                          <td><small>9am - 3pm</small></td>
                                          <td><small>9am - 3pm</small></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="interviewSchedule" class="col-sm-3 col-form-label">Interview schedule:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="datetime-local" id="interviewSchedule" name="interviewSchedule" required>
                            </div>
                        </div> --> 
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-sm-3 col-form-label">skype account:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="skype account" name="skypeAccount" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-sm-3 col-form-label">Preferred Interview Schedule:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="date" id="schedule" name="skypeAccount" required>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit" value="Register Information">Register Information</button>
                        </div>
                        
                    </form>
                </div>
            </div>
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