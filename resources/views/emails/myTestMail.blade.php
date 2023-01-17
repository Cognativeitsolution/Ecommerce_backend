<!DOCTYPE html>
<html>
<head>
    <title>Email Verification Mail</title>
</head>
<body>
    <h1>Welcome - {{ $user_name }}</h1>
   
    <p>Thank you for registration, Please verify your email with bellow link: </p>
    
    <a href="{{ url('/verify-email/'. $code ) }}">Verify Email</a>

</body>
</html>