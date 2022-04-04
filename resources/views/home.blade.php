<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Charles Beadle"> 
  <meta name="description" content="Linux System Administration, Web Development, and More">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Charles Beadle's Tech Blog</title>
</head>
<body class="bg-gradient-to-b from-thedeep to-[#000] text-moon min-h-screen flex flex-col justify-between font-mono">
  <!--
     ________  _____    ____  __    ___________ ____  _________    ____  __    __________________________  __
    / ____/ / / /   |  / __ \/ /   / ____/ ___// __ )/ ____/   |  / __ \/ /   / ____/_  __/ ____/ ____/ / / /
   / /   / /_/ / /| | / /_/ / /   / __/  \__ \/ __  / __/ / /| | / / / / /   / __/   / / / __/ / /   / /_/ / 
  / /___/ __  / ___ |/ _, _/ /___/ /___ ___/ / /_/ / /___/ ___ |/ /_/ / /___/ /____ / / / /___/ /___/ __  /  
  \____/_/ /_/_/  |_/_/ |_/_____/_____//____/_____/_____/_/  |_/_____/_____/_____(_)_/ /_____/\____/_/ /_/ 

  -->
  <div>
    <!-- 
    Wrap all content other than the footer, 
    and maintain space between that content and the footer. 
    See body classes. 
    -->
    <main class="mx-auto w-11/12 max-w-screen-2xl xl:w-2/3 pb-10">
      <section class="mt-10 sm:mt-24 mb-10 sm:mb-16 lg:mb-20 xl:mb-24 mx-auto 2xl:mx-0 w-full md:w-3/4 lg:w-3/5 xl:w-3/4 2xl:w-full flex flex-col lg:flex-row"><!-- About me section with socials -->
        <img src="/images/self.jpg" alt="Charles Beadle" class="mb-6 xl:mb-0 mr-0 lg:mr-14 h-auto md:h-24 lg:h-32 2xl:h-44 w-28 lg:w-auto rounded-md grayscale-[.7] transition-all hover:grayscale-[0] duration-1000">
        <div class="mb-5 w-full flex flex-col">
          <h1 class="mb-3 xl:mb-4 2xl:mb-6 text-xl sm:text-2xl 2xl:text-5xl font-bold text-glare">Welcome!</h1>
          <p class="2xl:text-3xl">Hey, I'm Charles. This is my new tech blog. So far, topics include Linux System Administration and Web Development.</p>
        </div>
      </section><!-- /About me section with socials -->
      <div class="flex justify-between">
        <section class="mx-auto 2xl:mx-0 w-full md:w-3/4 lg:w-3/5 xl:w-3/4 2xl:w-3/5"><!-- Posts section -->
          <div class="pt-[5px] mb-6 flex justify-between w-full">
            <h2 class="text-xl sm:text-2xl text-glare font-bold block leading-none">Recent Posts</h2>  
            <a href="/topics" class="hidden md:block px-3 py-2 font-bold text-glare border-2 border-moon rounded leading-none">
              Browse All
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block" fill="currentColor" viewBox="0 0 16 16" role="none">
                <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
              </svg> 
            </a>
          </div>
          <hr class="mb-6">
          <ul>
            @foreach($posts as $post)
              <x-post :post="$post"/>
            @endforeach
          </ul> 
        </section><!-- /Posts section -->
        <aside class="hidden 2xl:flex flex-col w-2/6"><!-- Contact info -->
          <div class="mb-6">
            <h3 class="mb-2 text-glare text-xl font-semibold">Contact Info</h3>
            <p class="mb-2">Email: <a href="mailto:contact@charlesbeadle.tech" class="underline decoration-2">contact@charlesbeadle.tech</a></p>
            <p>You can <a href="/charles-beadle.asc" class="underline decoration-2" download>download my public key</a> and use GPG if you like. Fingerprint: B5AA 6C65 1283 3423 0192 EB38 D80B 8B8B 1F12 8533</p>
          </div>
          <div class="mb-6">
            <h3 class="mb-2 text-glare text-xl font-semibold">RSS Feed</h3>
            <p><a href="/rss" class="underline decoration-2">Subscribe to the RSS feed</a> and get notified about new content.</p>
          </div>
        </aside><!-- /Contact info -->
      </div>
    </main>
  </div>
  <x-footer/>
  
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
