<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Profile Creation</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <b>{{ date('Y-m-d H:i:s', strtotime($details['schedule'])) }}</b><br />
    <p>Your Skype ID: <b>{{ $details['skype'] }}</b></p>
    <p>Please be ready 5 mins before the scheduled interview time.
    <p>From Inflexion Global Team</p>
</body>
</html>