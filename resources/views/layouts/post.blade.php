<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Charles Beadle"> 
  <meta name="description" content="@yield('description')">
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])  
</head>
<body class="bg-thedeep text-moon min-h-screen flex flex-col justify-between font-mono">
  <div>
    <!-- 
    Wrap all content other than the footer, 
    and maintain space between that content and the footer. 
    See body classes. 
    -->
    <x-navbar/>
    <main class="mx-auto w-11/12 lg:w-[55%] md:w-[69%] xl:w-1/2 max-w-screen-lg pb-10">
      <p class="mb-6 text-xs font-bold text-center text-moon">Published on @yield('published')</p>
      <h1 class="mb-6 text-2xl lg:text-3xl text-glare text-center font-bold">@yield('heading')</h1>
      <p class="mb-6 text-center">@yield('intro')</p>
      <img src="/images/@yield('image')" alt="@yield('alt-text')">
      @yield('content')
    </main>
  </div>
  <x-footer/>
</body>
</html>
