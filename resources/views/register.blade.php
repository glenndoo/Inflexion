<x-template data='Register' />
<center>
	<div class="container ">
		<div class="row">
			<div class="col-sm">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
			</div>
		</div><div class="row">
			<div class="col-sm">
				@if(isset($Errors))
				    {{ $Errors }}
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<form action="{{ route('ValidateRegistry') }}" method="post">
				    @csrf
				        <input class="form-control" type='email' name='username' placeholder="email address"/><br />
				        <input class="form-control" type='password' name='password' placeholder="password"/><br />
				        <input class="form-control" type='password' name='confirmPassword' placeholder="confirm password"/><br />
				        <select name='type' class="form-control">
				        	<option value="" disabled selected>are you student or tutor?</option>
				            <option value='1'>Student</option>
				            <option value='2'>Tutor</option>
				        </select><br />

				        <button class="btn btn-primary" type='submit' value='Register'>Register</button>
				</form>
			</div>
		</div>
	</div>
</center>



