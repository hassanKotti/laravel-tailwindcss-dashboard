@props(['color' => 'dark', 'title' => 'title', 'desc' => 'description', 'link' => '#'])
<a href={{ $link }} class="flex items-center p-4 bg-white rounded-lg shadow-xs cursor-pointer dark:bg-dark-800">
    <div
        class="p-3 mr-4 text-{{ $color }}-500 bg-{{ $color }}-100 rounded-full
        dark:text-{{ $color }}-100 dark:bg-{{ $color }}-500">
        {{ $svg }}
    </div>
    <div>
        <p class="mb-2 text-sm font-medium capitalize text-dark-600 dark:text-dark-400">
            {{ $title }}
        </p>
        <p class="text-lg font-semibold capitalize text-dark-700 dark:text-dark-200">
            {{ $desc }}
        </p>
    </div>
</a>
