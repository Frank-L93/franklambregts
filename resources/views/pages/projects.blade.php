@extends('welcome')

@section('title', 'Projects')

@section('content')
<main class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="text-2xl font-semibold mx-auto text-red-300 text-center">Projects</div>
    <div class="grid grid-cols-1 sm:grid-cols-3 mt-16 sm:gap-10">
      <a
        href="https://github.com/Frank-L93/KeizerPHP"
        target="_blank"
        class="rounded-3xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-white dark:bg-gray-700 dark:bg-ternary-dark"
      >
        <div>
          <img
            src="InternDePion.png"
            alt=""
            class="rounded-t-3xl border-none"
          />
        </div>
        <div class="text-center px-4 py-6">
          <p class="text-2xl text-blue-500 font-semibold mb-2">
            KeizerPHP
          </p>
          <span class="text-lg">An open source PHP (Laravel) project that makes it possible to organise a <i>Systeem Keizer</i> Competition for chess clubs. Created in the first place for S.V. De Pion. <br>In 2021 a new version will be launched, which make it possible to use it as a SaaS.
          </span>
        </div>
      </a>
      <a
        href="https://github.com/Frank-L93/hoorbt"
        target="_blank"
        class="rounded-3xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-white dark:bg-gray-700 dark:bg-ternary-dark"
      >
        <div>
          <img
            src=""
            alt=""
            class="rounded-t-3xl border-none"
          />
        </div>
        <div class="text-center px-4 py-6">
          <p class="text-2xl text-blue-500 font-semibold mb-2">
            Schaakladder
          </p>
          <span class="text-lg">An open source PHP (Laravel) project to manage a ladder competition, but also for example a knock-out competition. A bit more flexible than the KeizerPHP. The sourcecode is now only used to organise 'Het Open Online Roosendaals Bekertoernooi'
          </span>
        </div>
      </a>
      <a
        href="/deepdives"
        class="rounded-3xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-white dark:bg-gray-700 dark:bg-ternary-dark"
      >
        <div>
          <img
            src=""
            alt=""
            class="rounded-t-3xl border-none"
          />
        </div>
        <div class="text-center px-4 py-6">
          <p class="text-2xl text-blue-500 font-semibold mb-2">
            DeepDives
          </p>
          <span class="text-lg">I like to help others, so when I have time, I try to write usable deepdives. Not really a project, but I like to highlight it. Feel free to contact me if you have a subject you would like to know more about. Happy to dive into it!</span>
        </div>
    </a>
    </div>
  </main>
@endsection