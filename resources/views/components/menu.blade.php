<header class="z-30 w-full px-2 py-4 bg-white sm:px-4"><div class="container flex items-center justify-between mx-auto">
    <a
        href="/"
        class="flex text-xl items-center"
      >
        <span class="text-red-600">F</span><span class="text-yellow-500">R</span><span class="text-yellow-200">A</span><span class="text-green-300">N</span><span class="text-blue-200">K</span><span class="text-blue-500">!</span>
      </a>
    <div>
        <ul class="relative hidden space-x-10 md:inline-flex rtl:space-x-reverse">
      
    <li>
          <a href='/projects' class="{{$currentPage == 'projects' ? 'hidden' : 'text-gray-800 hover:text-gray-900 bg-red-600 bg-opacity-50 rounded-xl p-3 hover:bg-opacity-80"
            '}}">Projects <img
                class="inline-flex"
                src="icons/code.svg"
              ></a></li>
    <li><a href='/resume' class="{{$currentPage == 'resume' ? 'hidden' : 'text-gray-800 hover:text-gray-900 bg-yellow-500 bg-opacity-50 rounded-xl p-3 hover:bg-opacity-80'}}">Resume <img
                class="inline-flex"
                src="icons/share-2.svg"
              ></a></li>
   <li> <a href='/chess' class="{{$currentPage == 'chess' ? 'hidden' : 'text-gray-800 hover:text-gray-900 bg-green-300 bg-opacity-50 rounded-xl p-3 hover:bg-opacity-80'}}">Chess <img
                class="inline-flex"
                src="icons/heart.svg"
              ></a></li>
   <li> <a href='/deepdives' class="{{$currentPage == 'deepdives' ? 'hidden' : 'text-gray-800 hover:text-gray-900 bg-blue-500 bg-opacity-50 rounded-xl p-3 hover:bg-opacity-80'}}">DeepDives <img
                class="inline-flex"
                src="icons/book.svg"
              ></a></li>
        </ul>
    </div>
    <div class="flex items-center space-x-5 rtl:space-x-reverse" x-data="{open: false}">

        <div class="inline-flex md:hidden">
          <button
            class="flex-none px-2 btn btn-white btn-sm"
            @click="open = !open"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              class="h-6 w-6 fill-current text-secondary-dark dark:text-ternary-light"
            >
              <path
                x-show="open"
                fill-rule="evenodd"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
                clip-rule="evenodd"
              ></path>
              <path
                x-show="!open"
                fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
              ></path>
            </svg>
            <span class="sr-only">Open Menu</span>
          </button>

        </div>
        <div
          x-show="open" class="absolute top-10 right-0 mr-3 mt-3 justify-center items-center md:hidden"
        >
          <a
            @click="open = !open"
            href="/projects"
            class="block text-gray-800 hover:text-gray-900 bg-red-600 bg-opacity-50 rounded-xl p-3 hover:bg-opacity-80"
          >Projects</a>

          <a
            @click="open = !open"
            href="/resume"
            class="block text-gray-800 hover:text-gray-900 bg-yellow-500 bg-opacity-50 rounded-xl p-3 hover:bg-opacity-80"
          >Resume</a>

          <a
            @click="open = !open"
            href="/chess"
            class="block text-gray-800 hover:text-gray-900 bg-green-300 bg-opacity-50 rounded-xl p-3 hover:bg-opacity-80"
          >Chess</a>

          <a
            @click="open = !open"
            href="/deepdives"
            class="block text-gray-800 hover:text-gray-900 bg-blue-500 bg-opacity-50 rounded-xl p-3 hover:bg-opacity-80"
          > DeepDives </a>

        </div>
      </div>
</div>
</header>