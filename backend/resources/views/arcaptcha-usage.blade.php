<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcaptcha Usage</title>

    @arcaptchaScript
</head>
<body>
    <form method="POST" action="/submit">
    @csrf

    @arcaptchaWidget
    <input type="submit">
</form>
</body>
</html>
