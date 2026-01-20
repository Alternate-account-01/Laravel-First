@props(['active' => false])

<li>
  <a {{ $attributes }}
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ $active ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    {{ $slot }}
  </a>
</li>
