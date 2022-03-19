<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Charles Beadle"> 
  <meta name="description" content="Browse My Posts by Topic">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Charles Beadle's Tech Blog | Topics</title>
</head>
<body class="bg-gray-100 text-gray-600 min-h-screen flex flex-col justify-between font-mono">
  <div>
    <x-navbar/>
    <main class="mx-auto w-11/12 max-w-screen-2xl xl:w-2/3 pb-10">
      <nav class="mt-14 sm:mt-24 mb-7 sm:mb-14 h-20 flex justify-center items-center">
        <a href="/topics" class="px-3 sm:px-4 {{ Request::is('topics') ? 'text-gray-500 border-b-2' : 'text-gray-700 border-b' }} hover:text-gray-500 text-md sm:text-xl 2xl:text-2xl font-semibold border-gray-500 hover:border-b-2">All</a>
        <a href="/topics/linux" class="px-3 sm:px-4 {{ Request::is('topics/linux') ? 'text-gray-500 border-b-2' : 'text-gray-700 border-b' }} hover:text-gray-500 text-md sm:text-xl 2xl:text-2xl font-semibold border-gray-500 hover:border-b-2">Linux</a>
        <a href="/topics/web" class="px-3 sm:px-4 {{ Request::is('topics/web') ? 'text-gray-500 border-b-2' : 'text-gray-700 border-b' }} hover:text-gray-500 text-md sm:text-xl 2xl:text-2xl font-semibold border-gray-500 hover:border-b-2">Web</a>
        <a href="/topics/vim" class="px-3 sm:px-4 {{ Request::is('topics/vim') ? 'text-gray-500 border-b-2' : 'text-gray-700 border-b' }} hover:text-gray-500 text-md sm:text-xl 2xl:text-2xl font-semibold border-gray-500 hover:border-b-2">VIM</a>
      </nav>
      <section class="mx-auto w-full md:w-3/4 lg:w-3/5 xl:w-3/4 2xl:w-3/5">
        <ul>
          @foreach($posts as $post)
            <x-post :post="$post"/>
          @endforeach
        </ul> 
      </section>
    </main>
  </div>
  <x-footer/>
  
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
