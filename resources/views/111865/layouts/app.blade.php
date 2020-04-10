<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>API STUDENT SYSTEM</title>
</head>
<body>
    <div id="main">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">Home</a>
                <a class="navbar-brand" href="/">About Us</a>
                <a class="navbar-brand" href="/">111865</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
            </div>
          </nav>
           

          <main class="py-5">
              @include('111865.layouts.notification')
              @yield('content')
          </main>
    </div>
</body>
</html>
