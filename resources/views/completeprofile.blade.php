<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Registration</title>
</head>
<body>
    <form action="{{ route('CompleteRegistration') }}" method="post">
    @csrf
    <input type='email' readonly='readonly' value='{{ $Details->inflexion_username }}' name='email'/><br />
    <input type='hidden' name='id' value='{{ $Details->inflexion_user_id }}'/>
    <input type="text" name='firstName' placeholder='First Name'/><br />
    <input type="text" name='middleName' placeholder='Middle Name' /><br />
    <input type="text" name='lastName'  placeholder='Last Name'/><br />
    <input type="text" name='address'  placeholder='Address'/><br />
    <input type="number" name='contactNumber'  placeholder='Contact Number'/><br />
    <input type="date" name='dateOfBirth' placeholder='Date of Birth' /><br />
    <input type="submit" value="Register Information" />
    </form>
</body>
</html>