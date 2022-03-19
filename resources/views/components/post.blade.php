<li class="mb-10 mx-auto md:ml-0 w-full px-8 py-6 bg-white rounded-lg shadow-md">
  <div class="mb-2 flex items-center justify-between">
    <p class="text-sm font-light text-gray-600">{{ $post->published }}</p>
    <a href="/topics/{{ $post->topic }}" class="hidden sm:block py-1 w-[70px] text-sm text-center font-bold text-gray-100 transition-colors duration-200 bg-gray-700 rounded cursor-pointer hover:bg-gray-600">{{ $post->topic }}</a>
  </div>
  <a href="/posts/{{ $post->slug }}" class="text-md md:text-xl lg:text-2xl font-bold text-gray-700 hover:text-gray-600 underline lg:no-underline lg:hover:underline decoration-2">{{ $post->title }}</a>
  <p class="mt-2 text-md sm:text-md text-gray-600">{{ $post->description }}</p>
</li>