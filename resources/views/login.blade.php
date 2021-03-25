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
			<div class="col-sm">
				<form action="{{ route('LoginUser') }}" method="post">
			    	@csrf
			        <input type='text' name='username' /><br />
			        <input type='password' name='password' /><br />
			        <input type='submit' value='Login' />
			    </form>
			</div>
		</div>
	</div>
</center>