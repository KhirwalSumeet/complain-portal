<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
    <meta charset="UTF-8">
    <script src="http://localhost/complain-portal/resources/js/jquery.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>

<script src="http://localhost/complain-portal/resources/js/fblogin.js"></script>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

</body>
</html>