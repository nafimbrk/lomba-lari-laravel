<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $judul }}</title>
  <link href="{{ asset('bootstrap-5.3.3/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<x-navbar/>
<div class="container">
<div class="container-fluid">
{{ $slot }}
    </div>
    </div>
<script src="{{ asset('bootstrap-5.3.3/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>



