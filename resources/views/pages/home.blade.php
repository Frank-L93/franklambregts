@extends('welcome')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex bg-blend-color-burn justify-center py-20 my-10 bg-contain bg-no-repeat bg-center" style="background-image: url('frank1.png');">

                </div>
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href='/projects'><div class="scale-100 p-6 bg-red-300 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-100 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img
                class="inline-flex"
                src="icons/code.svg">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Projects</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
Projects I've done</p>
                            </div>


                        </div></a>

                        <a href='/resume'><div class="scale-100 p-6 bg-yellow-300 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-yellow-100 dark:bg-yellow-800/20 flex items-center justify-center rounded-full">
                                   <img
                class="inline-flex"
                src="icons/share-2.svg">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Resume</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    My very interesting resume
                                </p>
                            </div>

                        </div></a>

                        <a href='/chess'><div class="scale-100 p-6 bg-green-300 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-green-100 dark:bg-green-800/20 flex items-center justify-center rounded-full">
                                     <img
                class="inline-flex"
                src="icons/heart.svg">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Chess</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    I love to play chess. Have some fun over here.
                                </p>
                            </div>


                        </div></a>

                        <a href='/deepdives'><div class="scale-100 p-6 bg-blue-300 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-blue-100 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                                    <img
                class="inline-flex"
                src="icons/book.svg">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">DeepDives</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Want to learn a few tricks of me? Sometimes I create a DeepDive into a subject.
                                </p>
                            </div>

                        </div></a>
                        <a href='/about'><div class="scale-100 p-6 bg-purple-300 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-blue-100 dark:bg-blue-800/20 flex items-center justify-center rounded-full">
                                    <img
                class="inline-flex"
                src="icons/user.svg">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">About me</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Want to get to know me? Read it here and follow the blog
                                </p>
                            </div>

                        </div></a>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        <a href="https://www.linkedin.com/in/frank-lambregts-a72017149/" target="_blank"><span class="bg-white rounded-md px-2 py-1 inline-block text-blue-300">LinkedIn</span></a>
                        <a href="https://github.com/Frank-L93" target="_blank"><span class="bg-white rounded-md px-2 py-1 inline-block text-black">GitHub</span></a>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        <span class="inline text-yellow-300 px-1">Coded with 💖 in <a
              href="https://laravel.com"
              target="_blank"
              class="hover:underline"
            >Laravel</a></span><span class="inline text-green-300">Powered ⚡ by <a
              href="https://laravel.com"
              target="_blank"
              class="hover:underline"
            >Volt & Folio</a></span><span class="inline text-purple-300 px-1">Designed 🎨 with <a
              href="https://tailwindcss.com"
              target="_blank"
              class="hover:underline"
            >Tailwind</a></span>

                    </div>
                </div>
            </div>
            @endsection
