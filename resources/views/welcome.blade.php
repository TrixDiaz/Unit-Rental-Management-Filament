<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Alpine.js CDN -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <style>
    body {
      font-family: Poppins, sans-serif;
    }
  </style>
</head>

<body class="max-w-[1920px] mx-auto text-black text-sm">
  <div class="bg-white">
    <header class="py-4 px-4 sm:px-10 bg-white z-50 relative">
      <div class='max-w-7xl w-full mx-auto flex flex-wrap items-center gap-4'>
        <a href="javascript:void(0)">
          <!-- <img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-40' /> -->
          Logo
        </a>

        <div id="collapseMenu"
          class='max-lg:hidden lg:!block max-lg:fixed max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0'>
          <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
              <path
                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                data-original="#000000"></path>
              <path
                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                data-original="#000000"></path>
            </svg>
          </button>

          <ul
            class='lg:!flex lg:ml-12 lg:space-x-6 max-lg:space-y-6 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
            <li class='max-lg:border-b max-lg:pb-4 px-3 lg:hidden'>
              <a href="javascript:void(0)">
                <img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-40' />
              </a>
            </li>
            <li class='max-lg:border-b max-lg:py-2 px-3'>
              <a href='javascript:void(0)'
                class='hover:text-blue-600 text-blue-600 block font-semibold transition-all'>Home</a>
            </li>
            <li class='max-lg:border-b max-lg:py-2 px-3 group relative'><a href='javascript:void(0)'
                class='hover:text-blue-600 block font-semibold transition-all'>Pages
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline ml-1.5" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                    clip-rule="evenodd" data-original="#000000" />
                </svg>
              </a>

              <ul
                class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-0 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>About</a></li>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>Contact</a></li>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>Login</a></li>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>Sign
                    up</a></li>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>Blog</a></li>
              </ul>
            </li>
            <li class='max-lg:border-b max-lg:py-2 px-3 group relative'><a href='javascript:void(0)'
                class='hover:text-blue-600 block font-semibold transition-all'>Feature
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline ml-1.5" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                    clip-rule="evenodd" data-original="#000000" />
                </svg>
              </a>

              <ul
                class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-0 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>Foods</a></li>
                <li class='border-b py-2 '>
                  <a href='javascript:void(0)' class='hover:text-blue-600 font-semibold block transition-all'>Sale</a>
                </li>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>Marketing</a></li>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>Investment</a></li>
              </ul>
            </li>
            <li class='max-lg:border-b max-lg:py-2 px-3'><a href='javascript:void(0)'
                class='hover:text-blue-600 block font-semibold transition-all'>Blog</a>
            </li>
            <li class='max-lg:border-b max-lg:py-2 px-3'><a href='javascript:void(0)'
                class='hover:text-blue-600 block font-semibold transition-all'>About</a>
            </li>
          </ul>
        </div>

        <div class='flex ml-auto'>
          <button
            class='bg-blue-100 hover:bg-blue-200 flex items-center transition-all font-semibold rounded-md px-5 py-3'>Get
            started
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
              <path
                d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                data-original="#000000" />
            </svg>
          </button>
          <button id="toggleOpen" class='lg:hidden ml-7'>
            <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
    </header>

    <div class="lg:min-h-[560px] bg-blue-100 px-4 sm:px-10">
      <div class="max-w-7xl w-full mx-auto py-16">
        <div class="grid lg:grid-cols-2 justify-center items-center gap-10">
          <div>
            <h1 class="md:text-5xl text-4xl font-bold mb-6 md:!leading-[55px]">Advance analysis to grow your
              business
            </h1>
            <p class="text-base leading-relaxed">Unlock the potential of your business with advanced analysis tools
              that provide insightful strategies. Our cutting-edge analytics empower you to make informed decisions and
              strategically scale your business.</p>
            <div class="flex flex-wrap gap-y-4 gap-x-8 mt-8">
              <button
                class='bg-black hover:bg-[#222] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4'>Get
                started
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                  viewBox="0 0 492.004 492.004">
                  <path
                    d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                    data-original="#000000" />
                </svg>
              </button>
            </div>
          </div>
          <div class="max-lg:mt-12 h-full">
            <img src="https://readymadeui.com/analtsis.webp" alt="banner img" class="w-full h-full object-cover" />
          </div>
        </div>
      </div>
    </div>

    <div class="mt-28 px-4 sm:px-10">
      <div class="max-w-7xl w-full mx-auto">
        <div class="grid lg:grid-cols-2 items-center gap-10">
          <div class="">
            <h2 class="md:text-4xl text-3xl font-semibold mb-6">A better way to find engaging content</h2>
            <p>Laboris qui Lorem ad tempor ut reprehenderit. Nostrud anim nulla officia ea sit deserunt. Eu eu quis anim
              aute Laboris qui Lorem ad tempor ut reprehenderit. Eu eu quis anim aute.</p>
            <button
              class='bg-black hover:bg-[#222] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8'>Learn
              more
              <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
                <path
                  d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                  data-original="#000000" />
              </svg>
            </button>
          </div>
          <div class="grid sm:grid-cols-2 gap-8">
            <div
              class="text-center bg-white shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] transition-all rounded-xl p-6">
              <svg xmlns="http://www.w3.org/2000/svg"
                class="fill-blue-600 w-12 inline-block bg-blue-100 p-3 rounded-full" viewBox="0 0 32 32">
                <path
                  d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z"
                  data-original="#000000" />
                <path d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z"
                  data-original="#000000" />
              </svg>
              <h3 class="text-base font-semibold mt-6 mb-2">Customization</h3>
              <a href="javascript:void(0);" class="text-blue-600 font-bold inline-block hover:underline">Learn more</a>
            </div>
            <div
              class="text-center bg-white hover:shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] transition-all rounded-xl p-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-12 inline-block bg-blue-100 p-3 rounded-full"
                viewBox="0 0 682.667 682.667">
                <defs>
                  <clipPath id="a" clipPathUnits="userSpaceOnUse">
                    <path d="M0 512h512V0H0Z" data-original="#000000" />
                  </clipPath>
                </defs>
                <g fill="none" class="stroke-blue-600" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" stroke-width="40" clip-path="url(#a)"
                  transform="matrix(1.33 0 0 -1.33 0 682.667)">
                  <path
                    d="M256 492 60 410.623v-98.925C60 183.674 137.469 68.38 256 20c118.53 48.38 196 163.674 196 291.698v98.925z"
                    data-original="#000000" />
                  <path d="M178 271.894 233.894 216 334 316.105" data-original="#000000" />
                </g>
              </svg>
              <h3 class="text-base font-semibold mt-6 mb-2">Security</h3>
              <a href="javascript:void(0);" class="text-blue-600 font-bold inline-block hover:underline">Learn more</a>
            </div>
            <div
              class="text-center bg-white hover:shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] transition-all rounded-xl p-6">
              <svg xmlns="http://www.w3.org/2000/svg"
                class="fill-blue-600 w-12 inline-block bg-blue-100 p-3 rounded-full" viewBox="0 0 512.001 512.001">
                <path
                  d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z"
                  data-original="#000000" />
              </svg>
              <h3 class="text-base font-semibold mt-6 mb-2">Support</h3>
              <a href="javascript:void(0);" class="text-blue-600 font-bold inline-block hover:underline">Learn more</a>
            </div>
            <div
              class="text-center bg-white hover:shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] transition-all rounded-xl p-6">
              <svg xmlns="http://www.w3.org/2000/svg"
                class="fill-blue-600 w-12 inline-block bg-blue-100 p-3 rounded-full" viewBox="0 0 24 24">
                <g fill-rule="evenodd" clip-rule="evenodd">
                  <path
                    d="M17.03 8.97a.75.75 0 0 1 0 1.06l-4.2 4.2a.75.75 0 0 1-1.154-.114l-1.093-1.639L8.03 15.03a.75.75 0 0 1-1.06-1.06l3.2-3.2a.75.75 0 0 1 1.154.114l1.093 1.639L15.97 8.97a.75.75 0 0 1 1.06 0z"
                    data-original="#000000" />
                  <path
                    d="M13.75 9.5a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-1.25H14.5a.75.75 0 0 1-.75-.75z"
                    data-original="#000000" />
                  <path
                    d="M3.095 3.095C4.429 1.76 6.426 1.25 9 1.25h6c2.574 0 4.57.51 5.905 1.845C22.24 4.429 22.75 6.426 22.75 9v6c0 2.574-.51 4.57-1.845 5.905C19.571 22.24 17.574 22.75 15 22.75H9c-2.574 0-4.57-.51-5.905-1.845C1.76 19.571 1.25 17.574 1.25 15V9c0-2.574.51-4.57 1.845-5.905zm1.06 1.06C3.24 5.071 2.75 6.574 2.75 9v6c0 2.426.49 3.93 1.405 4.845.916.915 2.419 1.405 4.845 1.405h6c2.426 0 3.93-.49 4.845-1.405.915-.916 1.405-2.419 1.405-4.845V9c0-2.426-.49-3.93-1.405-4.845C18.929 3.24 17.426 2.75 15 2.75H9c-2.426 0-3.93.49-4.845 1.405z"
                    data-original="#000000" />
                </g>
              </svg>
              <h3 class="text-base font-semibold mt-6 mb-2">Performance</h3>
              <a href="javascript:void(0);" class="text-blue-600 font-bold inline-block hover:underline">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 sm:px-10 mt-28">
      <div class="max-w-7xl w-full mx-auto">
        <div class="grid md:grid-cols-2 items-center gap-10">
          <div class="w-full h-full">
            <img src="https://readymadeui.com/team-image.webp" alt="Premium Benefits"
              class="w-full h-full object-cover" />
          </div>
          <div>
            <h2 class="md:text-4xl text-3xl font-semibold mb-6">Fresh Ideas for your business design</h2>
            <p>Veniam proident aute magna anim excepteur et ex consectetur velit ullamco veniam minim aute
              sit. Elit
              occaecat officia et laboris Lorem minim. Officia do aliqua adipisicing ullamco in. anim excepteur et ex
              consectetur velit ullamco veniam minim aute sit.</p>

            <div class="mt-8">
              <div class="flex items-center">
                <img src="https://readymadeui.com/profile_2.webp" class="w-12 h-12 rounded-full" />
                <div class="ml-4">
                  <h4 class="font-semibold text-base">John Doe</h4>
                </div>
              </div>
              <div class="mt-4">
                <p>Veniam proident aute magna anim excepteur et ex consectetur velit
                  ullamco veniam minim aute sit. Elit occaecat officia et laboris Lorem minim.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 sm:px-10 mt-28">
      <div class="max-w-7xl w-full mx-auto grid md:grid-cols-2 justify-center items-center gap-10">
        <div>
          <h2 class="md:text-4xl text-3xl font-semibold mb-6">100% Secure your data</h2>
          <p>Veniam proident aute magna anim excepteur et ex consectetur velit ullamco veniam minim aute sit. Elit
            occaecat officia et laboris Lorem minim. Officia do aliqua adipisicing ullamco in. consectetur velit ullamco
            veniam minim aute sit.</p>
          <button
            class="bg-black hover:bg-[#222] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8">
            Read more
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
              <path
                d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                data-original="#000000"></path>
            </svg>
          </button>
        </div>
        <div class="w-full h-full">
          <img src="https://readymadeui.com/login-image.webp" alt="feature" class="w-full h-full object-cover" />
        </div>
      </div>
    </div>

    <div class="mt-28 px-4 sm:px-10 bg-blue-100">
      <div
        class="min-h-[400px] relative h-full max-w-2xl mx-auto flex flex-col justify-center items-center text-center px-6 py-16">
        <h2 class="md:text-4xl text-3xl font-semibold mb-6">Your work, everywhere you are</h2>
        <p>Veniam proident aute magna anim excepteur et ex consectetur velit ullamco veniam minim
          aute sit. Elit occaecat officia et laboris Lorem minim. Officia do aliqua adipisicing ullamco in. consectetur
          velit ullamco veniam minim aute sit.</p>
        <button
          class="bg-black hover:bg-[#222] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8">
          Get started
          <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
            <path
              d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
              data-original="#000000"></path>
          </svg>
        </button>
      </div>
    </div>

    <div class="px-4 sm:px-10 mt-28">
      <div class="max-w-7xl mx-auto">
        <div>
          <h2 class="md:text-4xl text-3xl font-bold">Check our latest article</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-16">
          <div class="cursor-pointer rounded overflow-hidden group">
            <div>
              <span class="block text-gray-400 mb-2">10 FEB 2023</span>
              <h3 class="text-xl font-semibold group-hover:text-blue-500 transition-all">A Guide to Igniting
                Your Imagination</h3>
              <div class="mt-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                  nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
            <hr class="my-6" />
            <div class="flex flex-wrap items-center gap-3">
              <img src='https://readymadeui.com/team-1.webp' class="w-9 h-9 rounded-full" />
              <p class="text-xs">BY JOHN DOE</p>
            </div>
          </div>
          <div class="cursor-pointer rounded overflow-hidden group">
            <div>
              <span class="block text-gray-400 mb-2">7 JUN 2023</span>
              <h3 class="text-xl font-semibold group-hover:text-blue-500 transition-all">Hacks to Supercharge
                Your Day</h3>
              <div class="mt-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                  nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
            <hr class="my-6" />
            <div class="flex flex-wrap items-center gap-3">
              <img src='https://readymadeui.com/team-2.webp' class="w-9 h-9 rounded-full" />
              <p class="text-xs">BY MARK ADAIR</p>
            </div>
          </div>
          <div class="cursor-pointer rounded overflow-hidden group">
            <div>
              <span class="block text-gray-400 mb-2">5 OCT 2023</span>
              <h3 class="text-xl font-semibold group-hover:text-blue-500 transition-all">Trends and Predictions
              </h3>
              <div class="mt-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                  nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
            <hr class="my-6" />
            <div class="flex flex-wrap items-center gap-3">
              <img src='https://readymadeui.com/team-3.webp' class="w-9 h-9 rounded-full" />
              <p class="text-xs">BY SIMON KONECKI</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 sm:px-10 mt-28">
      <div class="max-w-7xl w-full mx-auto">
        <div class="grid md:grid-cols-3 gap-4">
          <div class="col-span-2">
            <h2 class="md:text-4xl text-3xl font-semibold mb-6">What our happy client say</h2>
            <p>Veniam proident aute magna anim excepteur et ex consectetur velit ullamco veniam minim aute sit. Elit
              occaecat officia et laboris Lorem minim. Officia do aliqua adipisicing ullamco in.</p>
          </div>
          <div class="flex space-x-4 items-end justify-end">
            <div
              class="bg-white w-10 h-10 grid items-center justify-center rounded-full rotate-90 shrink-0 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-[#333] inline" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                  clip-rule="evenodd" data-original="#000000"></path>
              </svg>
            </div>
            <div
              class="bg-black w-10 h-10 grid items-center justify-center rounded-full -rotate-90 shrink-0 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-[#fff] inline" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                  clip-rule="evenodd" data-original="#000000"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="grid md:grid-cols-3 gap-10 mt-16">
          <div>
            <div class="flex items-center">
              <img src="https://readymadeui.com/team-1.webp" class="w-12 h-12 rounded-full" />
              <div class="ml-4">
                <h4 class="font-semibold">John Doe</h4>
                <p class="mt-1 text-xs text-gray-400">Founder of Rubik</p>
              </div>
            </div>
            <div class="mt-4">
              <p>The service was amazing. I never had to wait that long for my food. The staff was friendly and
                attentive, and the delivery was impressively prompt.</p>
            </div>
            <div class="flex space-x-2 mt-6">
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
            </div>
          </div>
          <div>
            <div class="flex items-center">
              <img src="https://readymadeui.com/team-2.webp" class="w-12 h-12 rounded-full" />
              <div class="ml-4">
                <h4 class="font-semibold">Mark Adair</h4>
                <p class="mt-1 text-xs text-gray-400">Founder of Alpha</p>
              </div>
            </div>
            <div class="mt-4">
              <p>The service was amazing. I never had to wait that long for my food. The staff was friendly and
                attentive, and the delivery was impressively prompt.</p>
            </div>
            <div class="flex space-x-2 mt-6">
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
            </div>
          </div>
          <div>
            <div class="flex items-center">
              <img src="https://readymadeui.com/team-3.webp" class="w-12 h-12 rounded-full" />
              <div class="ml-4">
                <h4 class="font-semibold">Simon Konecki</h4>
                <p class="mt-1 text-xs text-gray-400">Founder of Labar</p>
              </div>
            </div>
            <div class="mt-4">
              <p>The service was amazing. I never had to wait that long for my food. The staff was friendly and
                attentive, and the delivery was impressively prompt.</p>
            </div>
            <div class="flex space-x-2 mt-6">
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-28 px-4 sm:px-10">
      <div class="max-w-7xl mx-auto space-y-6">
        <div class="mb-10">
          <h2 class="md:text-4xl text-3xl font-semibold mb-6">Frequently Asked Questions</h2>
          <p>Explore common questions and find answers to help you make the most out of our services. If you don't see
            your question here, feel free to contact us for assistance.</p>
        </div>
        <div class="divide-y" x-data="{ activeIndex: null }">
          <div class="py-4">
            <button @click="activeIndex = activeIndex === 0 ? null : 0" class="w-full text-left font-semibold flex items-center justify-between">
              <span>Are there any special discounts or promotions available during the event?</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-45': activeIndex === 0 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
            <div x-show="activeIndex === 0" x-collapse>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor auctor arcu, at fermentum dui. Maecenas vestibulum a turpis in lacinia.</p>
            </div>
          </div>
          <div class="py-4">
            <button @click="activeIndex = activeIndex === 1 ? null : 1" class="w-full text-left font-semibold flex items-center justify-between">
              <span>What are the dates and locations for the product launch events?</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-45': activeIndex === 1 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
            <div x-show="activeIndex === 1" x-collapse>
              <p class="mt-2">The product launch events are scheduled for [insert dates] at [insert locations]. Please check our events page for more detailed information.</p>
            </div>
          </div>
          <!-- Add more FAQ items following the same pattern -->
        </div>
      </div>
    </div>
  </div>

  <div class="mt-28 px-4 sm:px-10">
    <div class="max-w-7xl mx-auto bg-gradient-to-r from-teal-700 via-teal-600 to-teal-700 py-16 px-6 relative">
      <div class="max-w-2xl mx-auto text-center">
        <h2 class="md:text-4xl text-3xl font-semibold mb-6 text-white">Subscribe to Our Newsletter</h2>
        <div class="my-6">
          <p class="text-white">Subscribe to our newsletter and stay up to date with the latest news, updates, and
            exclusive offers. Get
            valuable insights. Join our community today!</p>
        </div>
        <div
          class="max-w-2xl left-0 right-0 mx-auto w-full bg-white p-5 flex items-center shadow-lg absolute -bottom-10 rounded-md">
          <input type="email" placeholder="Enter your email"
            class="w-full bg-gray-50 py-3.5 px-4 text-base focus:outline-none" />
          <button
            class="bg-black hover:bg-[#222] text-white flex items-center transition-all font-semibold px-5 py-4">
            Subscribe
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-50">
    <div class="mx-auto grid max-w-screen-xl gap-y-8 gap-x-12 px-4 py-10 md:grid-cols-2 xl:grid-cols-4 xl:px-10">
      <div class="max-w-sm">
        <div class="mb-6 flex h-12 items-center space-x-2">
          <span class="text-2xl font-bold">Bel<span class="text-blue-600">Air</span>.</span>
        </div>
        <div class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad a officia ea expedita!</div>
      </div>
      <div class="">
        <div class="mt-4 mb-2 font-medium xl:mb-4">Address</div>
        <div class="text-gray-500">
          35 Remida Heights, <br />
          45 Street, <br />
          South Caroline, US
        </div>
      </div>
      <div class="">
        <div class="mt-4 mb-2 font-medium xl:mb-4">Links</div>
        <nav aria-label="Footer Navigation" class="text-gray-500">
          <ul class="space-y-3">
            <li><a class="hover:text-blue-600 hover:underline" href="#">Pricing</a></li>
            <li><a class="hover:text-blue-600 hover:underline" href="#">Demo</a></li>
            <li><a class="hover:text-blue-600 hover:underline" href="#">Press</a></li>
            <li><a class="hover:text-blue-600 hover:underline" href="#">Support Hub</a></li>
            <li><a class="hover:text-blue-600 hover:underline" href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="">
        <div class="mt-4 mb-2 font-medium xl:mb-4">Subscribe to our Newsletter</div>
        <div class="flex flex-col">
          <div class="mb-4">
            <input type="email" class="focus:outline mb-2 block h-14 w-full rounded-xl bg-gray-200 px-4 sm:w-80 focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="Enter your email" />
            <button class="block rounded-xl bg-blue-600 px-6 py-3 font-medium text-white">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="mx-auto flex max-w-screen-xl flex-col gap-y-4 px-4 py-3 text-center text-gray-500 sm:flex-row sm:justify-between sm:text-left">
        <div class="">© 2022 BelAir | All Rights Reserved</div>
        <div class="">
          <a class="" href="#">Privacy Policy</a>
          <span>|</span>
          <a class="" href="#">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>


  </div>

  <script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
      if (collapseMenu.style.display === 'block') {
        collapseMenu.style.display = 'none';
      } else {
        collapseMenu.style.display = 'block';
      }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);

    // Add this new code for FAQ functionality
    document.addEventListener('DOMContentLoaded', function() {
      const faqContainer = document.getElementById('faqContainer');

      faqContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('faq-question')) {
          const answer = e.target.nextElementSibling;
          const icon = e.target.querySelector('svg');

          answer.classList.toggle('hidden');
          icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(45deg)';
        }
      });
    });

    // Add this new code for FAQ functionality
    document.addEventListener('DOMContentLoaded', function() {
      const faqContainer = document.getElementById('faqContainer');

      faqContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('faq-question')) {
          const answer = e.target.nextElementSibling;
          const icon = e.target.querySelector('svg');

          answer.classList.toggle('hidden');
          icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(45deg)';
        }
      });
    });
  </script>
</body>

</html>