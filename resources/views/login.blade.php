<x-template data="Login"/>
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
		</div>
		<div class="row">
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
				<form action="{{ route('LoginUser') }}" method="post">
			    	@csrf
			        <input class="form-control" type='text' name='username' /><br />
			        <input class="form-control" type='password' name='password' /><br />
			        <button class="btn btn-primary" type='submit' value='Login'>Login</button>
			    </form>
			</div>
		</div>
	</div>
</center>