<x-template data='Register' />
<form action="{{ route('ValidateRegistry') }}" method="post">
    @csrf
        <input type='email' name='username' /><br />
        <input type='password' name='password' /><br />
        <select name='type'>
            <option value='1'>Student</option>
            <option value='2'>Tutor</option>
        </select><br />
        <input type='submit' value='Register' />
</form>

