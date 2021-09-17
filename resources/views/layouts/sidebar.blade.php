    <div class="flex-shrink-0 hidden w-56 min-h-screen bg-white border-r lg:block dark:bg-gray-900 dark:border-gray-700">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 h-16 px-6 py-4 bg-white dark:bg-gray-900 dark:border-gray-700">
            <a href="{{ url('/') }}" class="flex items-center justify-between">
                <x-application-logo class="w-8 h-8 mr-1 text-purple-500 dark:text-purple-500" />
                <span class="ml-4 font-semibold text-purple-400 uppercase text-md">LaraWind</span>
            </a>
        </div>
        <div class="py-8">
            <x-sidebar-link :active="request()->routeIs('dashboard')">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 ">
                    <svg class="w-6 h-6 mr-2 text-gray-400" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <div class="text-gray-400 group-hover:text-white">Dashboard</div>
                </a>
            </x-sidebar-link>

            <x-sidebar-link :active="request()->routeIs('organizations')">
                <a class="flex items-center space-x-4 " href="{{ route('organizations') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <div class="text-gray-400 group-hover:text-white">Organizations</div>
                </a>
            </x-sidebar-link>
            <x-sidebar-link :active="request()->routeIs('contacts')">
                <a class="flex items-center space-x-4 " href="{{ route('contacts') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="w-6 h-6 mr-2 text-gray-400" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <div class="text-gray-400 group-hover:text-white">Contacts</div>
                </a>
            </x-sidebar-link>


            <x-sidebar-link :active="request()->routeIs('reports')">
                <a class="flex items-center space-x-4 " href="{{ route('reports') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 mr-2 text-gray-400"
                        fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <div class="text-gray-400 group-hover:text-white">Reports</div>
                </a>
            </x-sidebar-link>
            <x-sidebar-link :active="request()->routeIs('resources')">
                <a class="flex items-center space-x-4 " href="{{ route('resources') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    <div class="text-gray-400 group-hover:text-white">Resources</div>
                </a>
            </x-sidebar-link>
        </div>
    </div>
