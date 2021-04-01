<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Registration Email</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <p><a href="http://localhost/TutorRegistryVerification?token={{ $details['token'] }}&vry={{ $details['email'] }}&val={{ $details['valid'] }}&&type=2">Verify tutor registration and take qualifying test</a></p>
    <p>From Inflexion Global Team</p>
</body>
</html>