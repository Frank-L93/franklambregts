@extends('welcome')

@section('title', 'Resume')

@section('content')
<main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
    <div class="text-2xl font-semibold mx-auto text-yellow-300 text-center">Resume</div>
    <div x-data="{ year: 2023}">

      <div class="relative wrap overflow-hidden p-10">
        <div
          class="border-b-4 absolute border-opacity-20 border-gray-700 w-full"
          style="height: 50%"
        ></div>
        <div class="flex justify-between items-center w-full upper-timeline">
          <div class="order-1 absolute w-1/12"></div>
          <div
            @click="year = 2016"
            class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-12 h-12 hover:bg-gray-500 rounded-full"
          >
            <h1 class="mx-auto font-semibold text-md text-white">
              &lt 2017 </h1>
          </div>
          <div class="order-2 absolute w-1/6"></div>
          <div
            @click="year = 2017"
            class="z-20 flex items-center order-2 bg-gray-800 shadow-xl w-12 h-12 hover:bg-gray-500 rounded-full"
          >
            <h1 class="mx-auto font-semibold text-lg text-white">2017</h1>
          </div>
          <div class="order-3 absolute w-3/12"></div>
          <div
            @click="year = 2018"
            class="z-20 flex items-center order-3 bg-gray-800 shadow-xl w-12 h-12 hover:bg-gray-500 rounded-full"
          >
            <h1 class="mx-auto font-semibold text-lg text-white">2018</h1>
          </div>
          <div class="order-4 absolute w-1/3"></div>
          <div
            @click="year = 2019"
            class="z-20 flex items-center order-4 bg-gray-800 shadow-xl w-12 h-12 hover:bg-gray-500 rounded-full"
          >
            <h1 class="mx-auto font-semibold text-lg text-white">2019</h1>
          </div>
          <div class="order-5 absolute w-5/12"></div>
          <div
            @click="year = 2020"
            class="z-20 flex items-center order-5 bg-gray-800 shadow-xl w-12 h-12 hover:bg-gray-500 rounded-full"
          >
            <h1 class="mx-auto font-semibold text-lg text-white">2020</h1>
          </div>
          <div class="order-6 absolute w-6/12"></div>
          <div
            @click="year = 2021"
            class="z-20 flex items-center order-6 bg-gray-800 shadow-xl w-12 h-12 hover:bg-gray-500 rounded-full"
          >
            <h1 class="mx-auto font-semibold text-lg text-white">2021</h1>
          </div>
          <div class="order-7 absolute w-7/12"></div>
          <div
            @click="year = 2022"
            class="z-20 flex items-center order-7 bg-gray-800 shadow-xl w-12 h-12 hover:bg-gray-500 rounded-full"
          >
            <h1 class="mx-auto font-semibold text-lg text-white">2022</h1>
          </div>
          <div @click="year = 2023"
            class="z-20 flex items-center order-7 bg-gray-800 shadow-xl w-12 h-12 hover:bg-gray-500 rounded-full">
            <h1 class="mx-auto font-semibold text-lg text-white">2023</h1>
          </div>
        </div>
      </div>
      <div x-show="year === 2023" class="relative bg-white dark:bg-gray-700 rounded-lg shadow-xl w-4/12 px-4 py-4 mx-auto">
        <h3 class="mb-3 font-bold text-gray-800 text-xl">2023</h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ol class="list-disc list-inside">
          <li>Working for <a href="https://stedin.net" target="_blank">Stedin</a></li>
          <li>Certified: SAFe 5 Practitioner</li>
          <li>Redesigning and moving SG KiNGs website to Statamic</li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a href="https://depion.nl" target="_blank">S.V. De
              Pion</a></li>
        </ol>
        </p>
      </div>
      <div
        x-show="year === 2022"
        class="relative bg-white dark:bg-gray-700  rounded-lg shadow-xl w-4/12 px-4 py-4 mx-auto"
      >
        <h3 class="mb-3 font-bold text-gray-800 text-xl">2022</h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ol class="list-disc list-inside">
          <li>Working for <a
              href="https://stedin.net"
              target="_blank"
            >Stedin</a></li>
          <li>Certified: HBO Effectief Communiceren en Beïnvloeden (NCOI)</li>
          <li>Launched <a
              href="https://schaakmanger.nl"
              target="_blank"
            >SchaakManager</a></li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a></li>
        </ol>
        </p>
      </div>
      <div
        x-show="year === 2021"
        class="relative bg-white dark:bg-gray-700  rounded-lg shadow-xl w-4/12 px-4 py-4 mx-auto"
      >
        <h3 class="mb-3 font-bold text-gray-800 text-xl">2021</h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ol class="list-disc list-inside">
          <li>Working for <a
              href="https://stedin.net"
              target="_blank"
            >Stedin</a> via <a
              href="https://calco.nl"
              target="_blank"
            >Calco</a> (as of March 13th, directly @ Stedin)</li>
          <li>Certified: </li>
          <li>Started using <a
              href="https://forge.laravel.com"
              target="_blank"
            >Laravel Forge</a> to deploy my personal website.</li>
          <li>Redesigned this website & KeizerPHP to use Tailwind CSS, AlpineJS & Livewire</li>
          <li>Also started on a VueJS / Inertia-version</li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a></li>
          <li>Organised Het Open Online Roosendaals Bekertoernooi</li>
        </ol>
        </p>
      </div>
      <div
        x-show="year === 2020"
        class="relative bg-white dark:bg-gray-700  rounded-lg shadow-xl w-4/12 px-4 py-4 mx-auto"
      >
        <h3 class="mb-3 font-bold text-gray-800 text-xl">2020</h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ol class="list-disc list-inside">
          <li>Working for <a
              href="https://stedin.net"
              target="_blank"
            >Stedin</a> via <a
              href="https://calco.nl"
              target="_blank"
            >Calco</a></li>
          <li>Certified: </li>
          <li>Wrote a Personal Development Plan</li>
          <li>Totally rewrote and published KeizerPHP, with the usage of:
            <ul class="list-decimal list-inside">
              <li>PHP</li>
              <li>Bootstrap</li>
              <li>jQuery</li>
              <li>Laravel</li>
              <li>WebPush</li>
            </ul>
          </li>
          <li>Organised the <i>Brabantse Pupillendag & Snelschaken voor Jeugd</i> (Chess Tournament for children in North-Brabant) (Cancelled due to Corona)</li>
          <li>Published franklambregts.com via a <a
              href="https://digitalocean.com"
              target="_blank"
            >DigitalOcean</a> Druplet</li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a></li>
        </ol>
        </p>
      </div>
      <div
        x-show="year === 2019"
        class="relative bg-white dark:bg-gray-700 rounded-lg shadow-xl w-4/12 px-4 py-4 mx-auto"
      >
        <h3 class="mb-3 font-bold text-gray-800 text-xl">2019</h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ol class="list-disc list-inside">
          <li>Started in February at <a
              href="https://calco.nl"
              target="_blank"
            >Calco</a> & in May I got detached at <a
              href="https://stedin.net"
              target="_blank"
            >Stedin</a> as SAP FI/CO Trainee, without any SAP experience.</li>
          <li>Certified:
            <ul class="list-decimal list-inside">
              <li>Professional Scrum Master 1 (<a
                  href="https://scrum.org"
                  target="_blank"
                >Scrum.org</a>) | March</li>
              <li>SQL (<a
                  href="https://exin.com"
                  target="_blank"
                >EXIN</a>) | March</li>
              <li>Cloud Computing (<a
                  href="https://exin.com"
                  target="_blank"
                >EXIN</a>) | March</li>
              <li>ITIL (<a
                  href="https://axelos.com"
                  target="_blank"
                >Axelos</a>) | April</li>
              <li>SAP Application Associate Financial Accounting (<a
                  href="https://sap.com"
                  target="_blank"
                >SAP</a>) | August</li>
            </ul>
          </li>
          <li>Organised the <i>Brabantse Pupillendag & Snelschaken voor Jeugd</i> (Chess Tournament for children in North-Brabant)</li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a></li>
        </ol>
        </p>
      </div>
      <div
        x-show="year === 2018"
        class="relative bg-white dark:bg-gray-700  rounded-lg shadow-xl w-4/12 px-4 py-4 mx-auto"
      >
        <h3 class="mb-3 font-bold text-gray-800 text-xl">2018</h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ol class="list-disc list-inside">
          <li>Working for <a
              href="https://abab.nl"
              target="_blank"
            >ABAB</a> as Junior Tax Advisor until end of the year</li>
          <li>Certified:
            <ul class="list-decimal list-inside">
              <li>Chess Trainer 2 (<a
                  href="https://schaakbond.nl"
                  target="_blank"
                >KNSB</a>) | May</li>
            </ul>
          </li>
          <li>Organised the <i>Brabantse Pupillendag & Snelschaken voor Jeugd</i> (Chess Tournament for children in North-Brabant)</li>
          <li>Organised the <i>Hutton-toernooi</i> (Chess Tournament between children from the different provinces of the Netherlands)</li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a></li>
        </ol>
        </p>
      </div>
      <div
        x-show="year === 2017"
        class="relative bg-white dark:bg-gray-700  rounded-lg shadow-xl w-4/12 px-4 py-4 mx-auto"
      >
        <h3 class="mb-3 font-bold text-gray-800 text-xl">2017</h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ol class="list-disc list-inside">
          <li>Started in July at <a
              href="https://abab.nl"
              target="_blank"
            >ABAB</a> as Junior Tax Advisor</li>
          <li>Certified:
            <ul class="list-decimal list-inside">
              <li>Chess Trainer 1 (<a
                  href="https://schaakbond.nl"
                  target="_blank"
                >KNSB</a>) | May</li>
            </ul>
          </li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a></li>
        </ol>
        </p>
      </div>
      <div
        x-show="year === 2016"
        class="relative bg-white dark:bg-gray-700 rounded-lg shadow-xl w-4/12 px-4 py-4 mx-auto"
      >
        <h3 class="mb-3 font-bold text-gray-800 text-xl">2016 & before</h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ol>
          <li>Obtained Bachelor's Degree in Fiscal Economics at Erasmus University Rotterdam (2015)</li>
          <li>Graduated from Markland College (VWO, <i>Pre-University Education</i>) (2012)</li>
          <li>Started as Competition Leader (Seniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a> (2015)</li>
          <li>Chess Trainer (Juniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a> (since 2012)</li>
        </ol>
        </p>
      </div>
    </div>
  </main>
  @endsection