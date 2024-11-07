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

<body class="w-full mx-auto text-black text-sm">
  <div class="bg-white">
    <header class="py-3 px-4 bg-white z-50 relative">
      <div class='w-full mx-auto flex justify-between items-center'>
        <a href="javascript:void(0)">
          <img src="https://i.postimg.cc/cCzFTpTc/rentify-logo-2.png" alt="logo" class='w-32 md:w-40' />
        </a>

        <div id="collapseMenu" class='hidden md:block'>
          <ul class='flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-6 p-4 md:p-0'>
            <li class='max-lg:border-b max-lg:pb-4 px-3 lg:hidden'>
              <a href="javascript:void(0)">
                <!-- <img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-40' /> -->
              </a>

              <ul
                class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-0 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>About</a></li>
                <li class='border-b py-2 '><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-semibold block transition-all'>Contact</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class='flex items-center gap-4'>
          <a href="{{ route('filament.app.auth.login') }}">
            <button class='bg-blue-100 hover:bg-blue-200 text-sm md:text-base rounded-md px-4 py-2 md:px-5 md:py-3'>
              Get started
            </button>
          </a>
        </div>
    </header>

    <div class="min-h-[400px] md:min-h-[560px] bg-blue-100 px-4">
      <div class="w-full mx-auto py-8 md:py-16">
        <div class="grid md:grid-cols-2 gap-6 md:gap-10">
          <div class="text-center md:text-left">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 md:mb-6">Welcome to Rentify</h1>
            <p class="text-sm md:text-base leading-relaxed">
              Rentify is a comprehensive platform that connects landlord and tenants,
              making it easier to find, rent, and manage apartment units.
              we are commited to providing seamless experience for both landlord and tenants,
              ensuring that everyone can find the perfect place to call home.
            </p>
          </div>
          <div class="mt-8 md:mt-0">
            <img src="https://i.postimg.cc/cCzFTpTc/rentify-logo-2.png" alt="Rentify Logo" 
                 class="w-full max-w-[400px] md:max-w-[600px] mx-auto"/>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 mt-16 md:mt-28">
      <div class="w-full mx-auto">
        <div class="grid md:grid-cols-2 gap-8 md:gap-10">
          <div class="w-full h-full">
            <!-- Update the image source here -->
            <img src="https://i.postimg.cc/JzN8gmbb/459311168-1470425000335690-1337247734429533546-n.jpg" alt="Premium Benefits" class="w-full h-full object-cover" />
          </div>
          <div>
            <h2 class="md:text-4xl text-3xl font-semibold mb-6">Simplify Apartment Management with Rentify</h2>
            <p>Rentify is designed for landlords who want an efficient, modern way to manage their properties and assist tenants.
              Created with the needs of Tamondong Apartment in GMA in mind, Rentify streamlines tenant information collection,
              allowing landlords to access essential tenant details, rental agreements, and contact information  
              all from one easy to use online platform.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 mt-16 md:mt-28">
      <div class="w-full mx-auto grid md:grid-cols-2 justify-center items-center gap-10">
        <div>
          <h2 class="md:text-4xl text-3xl font-semibold mb-6">Effortless Communication and Payments</h2>
          <p>With Rentify, landlords can notify tenants of monthly dues, send out important announcements,
            and even track monthly earnings from the dashboard. Tenants benefit from streamlined monthly bill payments and instant access to building updates,
            creating a seamless experience for everyone involved.</p>
        </div>
        <div class="w-full h-full">
          <!-- Update the image source here -->
          <img src="https://i.postimg.cc/v8KGx0Y6/459307121-387859467537207-4357016819024262553-n.jpg" alt="feature" class="w-full h-full object-cover" />
        </div>
      </div>
    </div>

    <div class="mt-28 px-4 sm:px-10 bg-blue-100">
      <div
        class="min-h-[400px] relative h-full max-w-2xl mx-auto flex flex-col justify-center items-center text-center px-6 py-16">
        <h2 class="md:text-4xl text-3xl font-semibold mb-6">Built for the Future of Apartment Management</h2>
        <p>Adaptable and scalable, Rentify is here to meet the evolving needs of landlords and tenants alike.
           Simplify your apartment management process with Rentify and focus on what matters most a well-managed,
            thriving residential community.</p>
      </div>
    </div>

    <div class="mt-16 md:mt-28 px-4">
      <div class="max-w-7xl mx-auto space-y-6">
        <div class="mb-10">
          <h2 class="md:text-4xl text-3xl font-semibold mb-6">Frequently Asked Questions</h2>
          <p>Explore common questions and find answers to help you make the most out of our services. If you don't see
            your question here, feel free to contact us for assistance.</p>
        </div>
        <div class="divide-y" x-data="{ activeIndex: null }">
          <div class="py-4">
            <button @click="activeIndex = activeIndex === 0 ? null : 0" class="w-full text-left font-semibold flex items-center justify-between">
              <span>How do I pay my rent?</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-45': activeIndex === 0 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
            <div x-show="activeIndex === 0" x-collapse>
              <p class="mt-2">Rent can be paid online through our system, by check or money order to the landlord, Details and payment options are available in your dashboard.</p>
            </div>
          </div>
          <div class="py-4">
            <button @click="activeIndex = activeIndex === 1 ? null : 1" class="w-full text-left font-semibold flex items-center justify-between">
              <span>What is the process for maintenance requests?</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-45': activeIndex === 1 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
            <div x-show="activeIndex === 1" x-collapse>
              <p class="mt-2">You can submit maintenance requests online through the system or by calling the landlord. For emergency repairs (e.g., plumbing issues, electrical problems), please contact the emergency maintenance number immediately.</p>
            </div>
          </div>
          <div class="py-4">
            <button @click="activeIndex = activeIndex === 0 ? null : 0" class="w-full text-left font-semibold flex items-center justify-between">
              <span>What is the policy for renewing my lease?</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-45': activeIndex === 0 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
            <div x-show="activeIndex === 0" x-collapse>
              <p class="mt-2">You may also contact the landlord through ,calling or messaging.</p>
            </div>
          </div>
          <div class="py-4">
            <button @click="activeIndex = activeIndex === 0 ? null : 0" class="w-full text-left font-semibold flex items-center justify-between">
              <span>Can i have pets in my apartment?</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-45': activeIndex === 0 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
            <div x-show="activeIndex === 0" x-collapse>
              <p class="mt-2">Yes, we are a pet-friendly community. However, there are certain breed size restrictions.
                Please inform the landlord or contact the landlord for more details. </p>
            </div>
          </div>
          <div class="py-4">
            <button @click="activeIndex = activeIndex === 0 ? null : 0" class="w-full text-left font-semibold flex items-center justify-between">
              <span>how do i report a noise complaint or other disturbances?</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-200" :class="{ 'rotate-45': activeIndex === 0 }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
            <div x-show="activeIndex === 0" x-collapse>
              <p class="mt-2">If you need to terminate your lease early, please contact the landlord as soon as possible. </p>
          <!-- Add more FAQ items following the same pattern -->
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-50 mt-16 md:mt-28">
      <div class="mx-auto grid gap-8 px-4 py-8 md:grid-cols-2 lg:grid-cols-4">
        <div class="max-w-sm">
          <div class="mb-6 flex h-12 items-center space-x-2">
          </div>
        <div class="">
          <div class="mt-4 mb-2 font-medium xl:mb-4">Address</div>
          <div class="text-gray-500">
            Sorsogon Street, <br />
            Barangay Maderan, <br />
            General Mariano Alvarez, Cavite
          </div>
        </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-100">
        <div class="mx-auto flex max-w-screen-xl flex-col gap-y-4 px-4 py-3 text-center text-gray-500 sm:flex-row sm:justify-between sm:text-left">
          <div class="">© 2024 Rentify | All Rights Reserved</div>
          <div class="">

            <span>|</span>
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