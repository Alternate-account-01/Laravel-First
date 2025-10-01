<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">

      <!-- Left section -->
      <div class="flex items-center">
        <!-- Logo -->
        <div class="shrink-0">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" 
               alt="Your Company"
               class="h-8 w-8" />
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>
            <x-nav-link href="/kontak" :active="request()->is('kontak')">Contact</x-nav-link>
            <x-nav-link href="/profil" :active="request()->is('profil')">Profile</x-nav-link>
            <x-nav-link href="/student" :active="request()->is('student')">Student</x-nav-link>
            <x-nav-link href="/guardian" :active="request()->is('guardian')">Guardian</x-nav-link>
            <x-nav-link href="/classroom" :active="request()->is('classroom')">Class</x-nav-link>
          </div>
        </div>
      </div>

      <!-- Right section -->
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <!-- Notifications -->
          <button type="button" 
                  class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-none">
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.25 18.75a1.5 1.5 0 01-3 0m6-6v-2.25a6 6 0 10-12 0V12l-1.5 3h15L18 12z" />
            </svg>
          </button>

          <!-- Profile Avatar -->
          <div class="relative ml-3">
            <button type="button" 
                    class="flex rounded-full bg-gray-800 text-sm focus:outline-none"
                    id="user-menu-button">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full"
                   src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRthOboIEZqQK_M80fdnhy_9HgYjwPv71lOIg&s"
                   alt="User avatar">
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="-mr-2 flex md:hidden">
        <button id="mobile-menu-button" type="button"
          class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none">
          <span class="sr-only">Open main menu</span>
          <!-- Menu open icon -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                  d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Menu close icon -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                  d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide -->
  <div class="hidden md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
      <x-nav-link href="/home" :active="request()->is('home*')">Home</x-nav-link>
      <x-nav-link href="/kontak" :active="request()->is('kontak*')">Contact</x-nav-link>
      <x-nav-link href="/profil" :active="request()->is('profil*')">Profile</x-nav-link>
    </div>

    <!-- User info in mobile -->
    <div class="border-t border-gray-700 pt-4 pb-3">
      <div class="flex items-center px-5">
        <div class="shrink-0">
          <img class="h-10 w-10 rounded-full"
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRthOboIEZqQK_M80fdnhy_9HgYjwPv71lOIg&s" 
               alt="User avatar">
        </div>
        <div class="ml-3">
          <div class="text-base font-medium leading-none text-white">Enriko Raina Patasa</div>
          <div class="text-sm font-medium leading-none text-gray-400">enrikoraina@gmail.com</div>
        </div>
      </div>
    </div>
  </div>
</nav>

<script>
  // Toggle mobile menu
  document.getElementById("mobile-menu-button").addEventListener("click", function () {
    const menu = document.getElementById("mobile-menu");
    const icons = this.querySelectorAll("svg");
    menu.classList.toggle("hidden");
    icons[0].classList.toggle("hidden");
    icons[1].classList.toggle("hidden");
  });
</script>
