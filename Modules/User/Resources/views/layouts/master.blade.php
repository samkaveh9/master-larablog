<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Registertion | @yield('auth')</title>

       {{-- Laravel Mix - CSS File --}}
       <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>

        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
