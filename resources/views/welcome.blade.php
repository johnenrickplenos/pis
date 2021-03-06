<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <title>Laravel</title>
        <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token() ]) !!}
        </script>
    </head>
    <body>
      <div id="app" class=" container-fluid">
        <unit-management ></unit-management>
         <category-management ></category-management>
        <product-management ></product-management>
      </div>
    </body>
    <script type="text/javascript" src="{{elixir('js/app.js')}}"></script>
    <script type="text/javascript" src="{{elixir('js/bootbox.min.js')}}"></script>
</html>
