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
			<div class="col-sm">
				<form action="{{ route('ValidateRegistry') }}" method="post">
				    @csrf
				        <input type='email' name='username' placeholder="email address"/><br />
				        <input type='password' name='password' placeholder="password"/><br />
				        <input type='password' name='confirmPassword' placeholder="confirm password"/><br />
				        <select name='type'>
				        	<option value="" disabled selected>are you student or tutor?</option>
				            <option value='1'>Student</option>
				            <option value='2'>Tutor</option>
				        </select><br />
				        <input type='submit' value='Register' />
				</form>
			</div>
		</div>
	</div>
</center>



