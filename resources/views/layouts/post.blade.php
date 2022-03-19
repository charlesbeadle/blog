<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Charles Beadle"> 
  <meta name="description" content="{{ $post->description }}">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>{{ $post->title }}</title>
</head>
<body class="bg-gray-100 text-gray-600 min-h-screen flex flex-col justify-between font-mono">
  <div>
    <x-navbar/>
    <main class="mx-auto w-11/12 max-w-screen-2xl xl:w-2/3 pb-10">
      {!! $post->body !!}
    </main>
  </div>
  <x-footer/>
  
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
