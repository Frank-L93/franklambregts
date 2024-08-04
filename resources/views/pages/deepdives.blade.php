@extends('welcome')

@section('title', 'DeepDives')

@section('content')
<main class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="text-2xl font-semibold mx-auto text-blue-300 text-center">DeepDives</div>
    <div class="grid grid-cols-1 sm:grid-cols-3 mt-16 sm:gap-10">
      <div class="rounded-3xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-white dark:bg-gray-700 dark:bg-ternary-dark">
        <div class="text-center px-4 py-6">
          <p class="text-2xl text-red-500 font-semibold mb-2">
            KiNG
          </p>
          <span class="text-lg">
            <ol class="list-decimal list-inside">
              <li><a
                  href="/SG KiNG WordPress.pdf"
                  target="_blank"
                >WordPress</a></li>
            </ol>
          </span>
        </div>
      </div>
      <div class="rounded-3xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-white dark:bg-gray-700 dark:bg-ternary-dark">
        <div class="text-center px-4 py-6">
          <p class="text-2xl text-red-500 font-semibold mb-2">Monteban</p>

          <span class="text-lg">
            <ol class="list-decimal list-inside">
              <li><a
                  href="/leesmij.docx"
                  target="_blank"
                >Leesmij</a></li>
              <li><a
                  href="/DeepDiveMonteban.pdf"
                  target="_blank"
                >DeepDive Monteban 3 - deel 1</a></li>
              <li><a
                  href="/api.rar"
                  target="_blank"
                >Benodigd bestand 1</a> & <a
                  href="/intern-admin.rar"
                  target="_blank"
                >benodigd bestand 2</a></li>
            </ol>
          </span>
        </div>
      </div>
      <div class="rounded-3xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-white dark:bg-gray-700 dark:bg-ternary-dark">
        <div class="text-center px-4 py-6">
          <p class="text-2xl text-red-500 font-semibold mb-2">Want me to deepdive into something?</p>

          <span class="text-lg">
            <ol class="list-decimal list-inside">
              <li>Send me a request!</li>
              <li>Use web [at] franklambregts.com and I will contact you</li>
            </ol>
          </span>
        </div>
      </div>
</div>


</main>
@endsection
