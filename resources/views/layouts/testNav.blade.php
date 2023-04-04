
<nav aria-label="Site Header" class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="md:flex md:items-center md:gap-12">
        <a class="block text-teal-600" href="/">
          <span class="sr-only">Home</span>
          <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </a>
      </div>

      <div class="hidden md:block">
        <nav aria-label="Site Nav">
          <ul  id="nav-items"  class="  flex items-center gap-6 text-sm">
            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75"
                href="/"
              >
                About
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75"
                href="/"
              >
                Careers
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75"
                href="/"
              >
                History
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75"
                href="/"
              >
                Services
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75"
                href="/"
              >
                Projects
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75"
                href="/"
              >
                Blog
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="flex items-center gap-4">
      @if (Auth::check())

      <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>


  <div class="sm:flex sm:gap-4">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow">
        {{ __('Logout') }}
      </button>
    </form>
  </div>
@else
  <div class="sm:flex sm:gap-4">
    <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="{{ route('login') }}">
      {{ __('Login') }}
    </a>

    <div class="hidden sm:flex">
      <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" href="{{ route('register') }}">
        {{ __('Register') }}
      </a>
    </div>
  </div>
@endif

  <div class="block md:hidden">
      <button
        class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16"
          />
          </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>

<script>
  const navItems = document.getElementById("nav-items");
  const hamburgerButton = document.querySelector(".block.md\\:hidden button");

  hamburgerButton.addEventListener("click", () => {
    navItems.classList.toggle("hidden");
  });
</script>
