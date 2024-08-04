@extends('welcome')

@section('title', 'Resume')

@section('content')
<main class="max-w-7xl mx-auto p-6 lg:p-8"><!-- component -->
<div class="text-2xl font-semibold mx-auto text-yellow-300 text-center">Resume</div>
<div class="text-xs mx-auto text-center"><a href="https://www.linkedin.com/in/frank-lambregts-a72017149/" target="_blank"><span class="m-2 bg-white rounded-md px-2 py-1 inline-block text-blue-300">LinkedIn</span></a>
</div>

<ol >
    <li class="border-l-2 odd:border-green-600 even:border-purple-600">
        <div class="md:flex flex-start" id="2024">
          <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
            </svg>
          </div>
          <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
            <div class="flex justify-between mb-4">
              <a href="#2023" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2024</a>
            </div>
            <p class="text-gray-700 mb-6"><ol class="list-disc list-inside">
              <li>Working for <a href="https://stedin.net" target="_blank">Stedin</a></li>
              <li>Certified: ArchiMate 3.2 Foundation</li>
              <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a href="https://depion.nl" target="_blank">S.V. De
                  Pion</a></li>
            <li>Youth Leader @ <a href="https://nbsb.nl" target="_blank">NBSB</a> as of September</li>

            </ol>
              </p>
          </div>
        </div>
      </li>
  <li class="border-l-2 odd:border-green-600 even:border-purple-600">
    <div class="md:flex flex-start" id="2023">
      <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
        </svg>
      </div>
      <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
        <div class="flex justify-between mb-4">
          <a href="#2023" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2023</a>
        </div>
        <p class="text-gray-700 mb-6"><ol class="list-disc list-inside">
          <li>Working for <a href="https://stedin.net" target="_blank">Stedin</a></li>
          <li>Certified: SAFe 5 Practitioner</li>
          <li>Redesigning and moving SG KiNGs website to Statamic</li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a href="https://depion.nl" target="_blank">S.V. De
              Pion</a></li>
              <li>Youth Leader @ <a href="https://nbsb.nl" target="_blank">NBSB</a> as of September</li>
              <li>Moved <a href="interndepion.nl" target="_blank">Intern De Pion</a> to DigitalOcean in just two days and upgraded it to support PHP 8.1 and later</li>
        </ol>
          </p>
      </div>
    </div>
  </li>
  <li class="border-l-2  odd:border-green-600 even:border-purple-600">
    <div class="md:flex flex-start" id="2022">
      <div class="bg-green-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
        </svg>
      </div>
      <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
        <div class="flex justify-between mb-4">
          <a href="#2022" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2022</a>
        </div>
        <p class="text-gray-700 mb-6">
        <ol class="list-disc list-inside">
          <li>Working for <a
              href="https://stedin.net"
              target="_blank"
            >Stedin</a></li>
          <li>Certified: HBO Effectief Communiceren en Beïnvloeden (NCOI)</li>
          <li>Launched <a
              href="https://schaakmanger.nl"
              target="_blank"
            >SchaakManager</a> (Discontinued for now)</li>
          <li>Competition Leader (Seniors) & Chess Trainer (Juniors) @ <a
              href="https://depion.nl"
              target="_blank"
            >S.V. De Pion</a></li>
        </ol>
          </p>
        </div>
    </div>
  </li>
  <li class="border-l-2  odd:border-green-600 even:border-purple-600">
    <div class="md:flex flex-start" id="2021">
      <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
        </svg>
      </div>
      <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
        <div class="flex justify-between mb-4">
          <a href="#2021" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2021</a>
        </div>
        <p class="text-gray-700 mb-6">
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
    </div>
  </li>
  <li class="border-l-2  odd:border-green-600 even:border-purple-600">
    <div class="md:flex flex-start" id="2020">
      <div class="bg-green-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
        </svg>
      </div>
      <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
        <div class="flex justify-between mb-4">
          <a href="#2020" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2020</a>
        </div>
        <p class="text-gray-700 mb-6">
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
    </div>
  </li>
  <li class="border-l-2  odd:border-green-600 even:border-purple-600">
    <div class="md:flex flex-start" id="2019">
      <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
        </svg>
      </div>
      <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
        <div class="flex justify-between mb-4">
          <a href="#2019" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2019</a>
        </div>
        <p class="text-gray-700 mb-6">
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
    </div>
  </li>
  <li class="border-l-2  odd:border-green-600 even:border-purple-600">
    <div class="md:flex flex-start" id="2018">
      <div class="bg-green-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
        </svg>
      </div>
      <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
        <div class="flex justify-between mb-4">
          <a href="#2018" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2018</a>
        </div>
        <p class="text-gray-700 mb-6">
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
    </div>
  </li>
  <li class="border-l-2  odd:border-green-600 even:border-purple-600">
    <div class="md:flex flex-start" id="2017">
      <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
        </svg>
      </div>
      <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
        <div class="flex justify-between mb-4">
          <a href="#2017" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2017</a>
        </div>
        <p class="text-gray-700 mb-6">
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
    </div>
  </li>
  <li class="border-l-2 odd:border-green-600 even:border-purple-600">
    <div class="md:flex flex-start" id="2016">
      <div class="bg-green-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
        </svg>
      </div>
      <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
        <div class="flex justify-between mb-4">
          <a href="#2016" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">2016 and before</a>
        </div>
        <p class="text-gray-700 mb-6">
        <ol class="list-disc list-inside">
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
  </li>
</ol>
</main>
  @endsection
