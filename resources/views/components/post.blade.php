<li class="mb-10 mx-auto md:ml-0 w-full px-8 py-6 bg-carbon rounded-lg shadow-md">
  <div class="mb-2 flex items-center justify-between">
    <p class="text-sm font-light text-moon">{{ $post->published }}</p>
    <a href="/topics/{{ $post->topic }}" class="hidden sm:block py-1 w-[70px] text-sm text-center font-bold text-glare rounded border-2 border-moon cursor-pointer">{{ $post->topic }}</a>
  </div>
  <a href="/posts/{{ $post->slug }}" class="text-md md:text-xl lg:text-2xl font-bold text-glare underline lg:no-underline lg:hover:underline decoration-2">{{ $post->title }}</a>
  <p class="mt-2 text-md sm:text-md text-moon">{{ $post->description }}</p>
</li>