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
<body class="bg-gray-100 text-gray-600 min-h-screen flex flex-col justify-between font-mono">
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
    <x-navbar/>
    <main class="mx-auto w-11/12 max-w-screen-2xl xl:w-2/3 pb-10">
      <section class="mt-24 mb-20 md:mb-16 xl:mb-24 mx-auto 2xl:mx-0 w-full md:w-3/4 lg:w-3/5 xl:w-3/4 2xl:w-full flex flex-col lg:flex-row"><!-- About me section with socials -->
        <div class="mb-6 xl:mb-0">
          <div class="mr-0 lg:mr-14 lg:w-36 xl:w-60 w-24 lg:h-36 xl:h-60 h-24 bg-[url('/images/self.jpg')] bg-cover bg-center rounded-md grayscale-[.7] transition-all hover:grayscale-[0] duration-1000" role="none"></div>
        </div>
        <div class="w-full flex flex-col">
          <h1 class="mb-5 xl:mb-6 2xl:mb-10 text-xl xl:text-2xl 2xl:text-5xl font-bold text-gray-700">Hey, I'm Charles. <br>I'm a Systems Engineer from Tampa, Florida.</h1>
          <div class="flex items-center">
            <a href="https://github.com/charlesbeadle" target="_blank" class="mr-6 text-gray-700 hover:text-gray-600" title="Github">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16" aria-label="Github"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
              </svg>
            </a>
            <a href="https://codepen.io/charlesbeadle" target="_blank" class="mr-6 text-gray-700 hover:text-gray-600" title="CodePen">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 512 512" aria-label="CodePen"><path d="M502.285 159.704l-234-156c-7.987-4.915-16.511-4.96-24.571 0l-234 156C3.714 163.703 0 170.847 0 177.989v155.999c0 7.143 3.714 14.286 9.715 18.286l234 156.022c7.987 4.915 16.511 4.96 24.571 0l234-156.022c6-3.999 9.715-11.143 9.715-18.286V177.989c-.001-7.142-3.715-14.286-9.716-18.285zM278 63.131l172.286 114.858-76.857 51.429L278 165.703V63.131zm-44 0v102.572l-95.429 63.715-76.857-51.429L234 63.131zM44 219.132l55.143 36.857L44 292.846v-73.714zm190 229.715L61.714 333.989l76.857-51.429L234 346.275v102.572zm22-140.858l-77.715-52 77.715-52 77.715 52-77.715 52zm22 140.858V346.275l95.429-63.715 76.857 51.429L278 448.847zm190-156.001l-55.143-36.857L468 219.132v73.714z"/></svg>
            </a>
            <a href="#" target="_blank" class="mr-6 text-gray-700 hover:text-gray-600" title="Odysee">
              <svg width="25" height="25" fill="currentColor" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" aria-label="Odysee"><path d="M 774 82C 771 83 769 84 766 86C 727 113 724 166 711 207C 703 252 664 303 613 282C 604 236 596 190 580 145C 564 92 522 37 462 37C 461 37 460 37 459 37C 386 39 307 72 268 137C 229 215 260 303 281 381C 272 415 203 416 172 437C 116 463 62 497 21 543C 14 551 8 560 5 569C 2 546 0 523 0 500C 0 367 53 240 146 146C 240 53 367 0 500 0C 597 0 693 29 774 82C 774 82 774 82 774 82M 466 94C 489 93 513 102 525 122C 546 157 567 202 551 243C 520 288 459 298 408 294C 358 291 343 233 348 192C 351 132 409 93 465 94C 466 94 466 94 466 94C 466 94 466 94 466 94M 492 124C 482 130 489 142 496 153C 501 159 517 152 513 144C 510 137 504 123 496 123C 495 123 493 123 492 124C 492 124 492 124 492 124M 1000 500C 1000 618 958 732 883 822C 867 777 837 739 823 693C 816 639 797 582 753 547C 731 518 663 499 692 453C 745 411 788 359 828 304C 851 261 866 210 862 161C 862 159 862 157 862 155C 950 248 1000 372 1000 500C 1000 500 1000 500 1000 500M 511 191C 510 198 516 204 516 212C 516 220 516 217 515 228C 514 239 533 240 536 231C 538 223 538 215 537 207C 537 199 536 189 529 185C 527 183 524 183 522 183C 517 183 513 186 511 191C 511 191 511 191 511 191M 403 684C 429 725 405 783 356 788C 317 789 265 786 243 827C 221 870 245 931 290 948C 349 976 414 952 471 931C 535 912 564 845 575 784C 593 746 547 658 615 677C 666 696 682 758 689 807C 687 853 702 922 762 913C 770 913 778 912 785 910C 702 968 602 1000 500 1000C 394 1000 290 966 205 903C 119 840 55 751 24 650C 30 657 38 664 47 668C 96 692 139 648 174 620C 214 578 270 563 320 538C 348 587 376 635 403 684C 403 684 403 684 403 684"/></svg>
            </a>
            <a href="mailto:contact@charlesbeadle.tech" class="mr-6 text-gray-700 hover:text-gray-600" title="Mail">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16" aria-label="Mail"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
              </svg>
            </a>
            <a href="/rss" class="text-gray-700 hover:text-gray-600" title="RSS">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16" aria-label="RSS"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm1.5 2.5c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1 0-2zm0 4a6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1 0-2zm.5 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
              </svg>
            </a>
          </div>
        </div>
      </section><!-- /About me section with socials -->
      <div class="flex justify-between">
        <section class="mx-auto 2xl:mx-0 w-full md:w-3/4 lg:w-3/5 xl:w-3/4 2xl:w-3/5"><!-- Posts section -->
          <div class="mb-6 flex justify-between items-center w-full">
            <h2 class="text-2xl text-gray-700 font-bold block">Latest</h2>
            <a href="/topics" class="px-3 py-2 font-bold text-gray-100 transition-colors duration-200 transform bg-gray-700 rounded hover:bg-gray-600 leading-none">
              Topics
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
            <h3 class="mb-2 text-gray-700 text-xl font-semibold">Contact Info</h3>
            <p class="mb-2">Email: <a href="mailto:contact@charlesbeadle.tech" class="underline decoration-2">contact@charlesbeadle.tech</a></p>
            <p>You can <a href="/charles-beadle.asc" class="underline decoration-2" download>download my public key</a> and use GPG if you like. Fingerprint: B5AA 6C65 1283 3423 0192 EB38 D80B 8B8B 1F12 8533</p>
          </div>
          <div class="mb-6">
            <h3 class="mb-2 text-gray-700 text-xl font-semibold">RSS Feed</h3>
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
