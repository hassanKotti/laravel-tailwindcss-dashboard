<div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0 bg-dark-100 dark:bg-dark-900">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md dark:bg-dark-700 sm:rounded-lg">
        {{ $slot }}
    </div>
    <div class="absolute inset-x-0  bottom-4">
        {{ $footer }}
    </div>
</div>
