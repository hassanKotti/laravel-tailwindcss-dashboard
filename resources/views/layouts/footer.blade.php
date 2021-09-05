<div class="fixed z-20 bottom-0 w-full text-gray-700 dark:text-gray-200 bg-white dark:bg-dark-800">
    <div class="container w-full flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row ">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}" class="flex items-center justify-between">
                <x-application-logo class="w-8 h-8 text-gray-600 dark:text-gray-400 mr-1" />
                <span class="text-md font-semibold text-gray-600 ml-1 uppercase">HK Dashboard</span>
            </a>
        </div>
        <span class="flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">

            <p
                class="mt-4 text-sm text-gray-500 sm:mr-2 sm:pr-4 sm:border-r text-center lg:text-left sm:border-gray-200 sm:mt-0 dark:text-gray-400 dark:border-gray-400">
                © 2021 rights reserved.
                Made with<br class="md:hidden block" /> ❤️ by Hassan Kotti
            </p>
        </span>
        <div class="flex mt-4 lg:mt-0 sm:ml-2 sm:pl-2 sm:mt-0 items-center justify-between">
            <svg viewBox="0 0 20 20" fill="currentColor" class="text-gray-400 w-4 h-4 mr-2">
                <path fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1zm-5 8.274l-.818 2.552c.25.112.526.174.818.174.292 0 .569-.062.818-.174L5 10.274zm10 0l-.818 2.552c.25.112.526.174.818.174.292 0 .569-.062.818-.174L15 10.274z"
                    clip-rule="evenodd"></path>
            </svg>
            <p class="text-sm text-gray-500  dark:text-gray-400">
                MIT License
            </p>
        </div>
    </div>
</div>
