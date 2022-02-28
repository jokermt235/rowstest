<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500,700">
        <link rel="stylesheet" href="{{mix('/css/app.css')}}"/>
        <script src="{{ mix('/js/uikit.min.js') }}"></script>
        <script src="{{ mix('/js/uikit-icons.min.js') }}"></script>
        <title>Тестовое задание</title>
    </head>
    <body>
        <div>
            @yield('content')
        </div>
    </body>
</html>