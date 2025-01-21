<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyInstruments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-nav></x-nav>
   @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>         
       
   @endif
    
    <div class="min-vh-100">
        
        {{ $slot }}
    </div>

<x-footer></x-footer>

</body>
</html>