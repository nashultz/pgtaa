<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Predator Gaming Tech & Audio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="antialiased">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=545134083905943&autoLogAppEvents=1" nonce="kYlwHhRj"></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
      <div id="g_id_onload"
         data-client_id="955520724542-fg3sqiispfq0tuk44d2coih65uncjmih.apps.googleusercontent.com"
         data-login_uri="https://localhost/login"
         data-auto_prompt="false">
      </div>
      
    @include('layouts.navigation')
    @section('body-content')

    @show
    @include('layouts.footer')
    

</body>
</html>