
<header class="container m-auto">
<nav class=" navbar-expand-lg navbar-light bg-light bg-green-500 z-index-20">
    <div class="flex items-center justify-between">
        <div class="w-20">
            <img src="{{ asset('images/logo.png') }}" alt="logo">
        </div>
        <div class="flex gap-4 px-4 ">
            <a href="{{ route('home') }}"class="text-black hover:text-red-500 {{ request()->routeIs('home') ? 'text-red-500 font-bold' : '' }}">Home</a>
            <a href="{{ route('about') }}"class="text-black hover:text-red-500 {{ request()->routeIs('about') ? 'text-red-500 font-bold' : '' }}">About</a>
            <a href="{{ route('blog') }}"class="text-black hover:text-red-500 {{ request()->routeIs('blog') ? 'text-red-500 font-bold' : '' }}">Blog</a>
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="flex text-black hover:text-red-500 {{ request()->routeIs('course_list') ? 'text-red-500 font-bold' : '' }}" type="button">
  Course
  <svg class="w-4 h-4 ms-1.5 -me-0.5 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
</button>
{{-- <a href="{{ route('course_list') }}"class="text-black hover:text-red-500 {{ request()->routeIs('course_list') ? 'text-red-500 font-bold' : '' }}">Course</a> --}}
<a href="{{ route('contact') }}"class="text-black hover:text-red-500 {{ request()->routeIs('contact') ? 'text-red-500 font-bold' : '' }}">Contact</a>

        </div>
    </div>
</nav>



<!-- Dropdown menu -->
</header>
<div id="dropdownHover" class="z-50 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44">
    <ul class="p-2 text-sm text-body font-medium" aria-labelledby="dropdownHoverButton">
      <li>
        <a href="{{ route('course_create') }}" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">add new</a>
      </li>
      <li>
        <a href="{{ route('course_list') }}" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Course List</a>
      </li>
      {{-- <li>
        <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Earnings</a>
      </li>
      <li>
        <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Sign out</a>
      </li> --}}
    </ul>
</div>



