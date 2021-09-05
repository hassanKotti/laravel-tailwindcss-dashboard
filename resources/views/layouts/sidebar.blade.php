    <div class="hidden lg:block bg-indigo-800 dark:bg-dark-900 flex-shrink-0 w-56 min-h-screen">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center px-6 py-4 bg-indigo-900 dark:bg-dark-900 h-16">
            <a href="{{ route('dashboard') }}" class="flex items-center justify-between">
                <x-application-logo class="w-8 h-8 text-gray-100 dark:text-gray-100 mr-1" />
                <span class="text-md font-semibold text-gray-100 ml-1 uppercase">HK Dashboard</span>
            </a>
        </div>
        <div class="py-8">

            <x-sidebar-link class="flex items-center group py-3" :active="request()->routeIs('dashboard')"
                :href="route('dashboard')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    class="w-6 h-6 mr-2 text-gray-200 fill-current group-hover:fill-white">
                    <path
                        d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z">
                    </path>
                </svg>
                <div class="text-indigo-300 group-hover:text-white">Dashboard</div>
            </x-sidebar-link>

            <x-sidebar-link class="flex items-center group py-3" :active="request()->routeIs('organizations')"
                :href="route('organizations')">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                    class="w-6 h-6 mr-2 text-gray-200 fill-current group-hover:fill-white">
                    <path fill-rule="evenodd"
                        d="M7 0h86v100H57.108V88.418H42.892V100H7V0zm9 64h11v15H16V64zm57 0h11v15H73V64zm-19 0h11v15H54V64zm-19 0h11v15H35V64zM16 37h11v15H16V37zm57 0h11v15H73V37zm-19 0h11v15H54V37zm-19 0h11v15H35V37zM16 11h11v15H16V11zm57 0h11v15H73V11zm-19 0h11v15H54V11zm-19 0h11v15H35V11z">
                    </path>
                </svg>
                <div class="text-indigo-300 group-hover:text-white">Organizations</div>
            </x-sidebar-link>
            <x-sidebar-link class="flex items-center group py-3" :active="request()->routeIs('contacts')"
                :href="route('contacts')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 mr-2 text-gray-200"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <div class="text-indigo-300 group-hover:text-white">Contacts</div>
            </x-sidebar-link>


            <x-sidebar-link class="flex items-center group py-3" :active="request()->routeIs('reports')"
                :href="route('reports')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 mr-2 text-gray-200"
                    fill="none">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <div class="text-indigo-300 group-hover:text-white">Reports</div>
            </x-sidebar-link>
            <x-sidebar-link class="flex items-center group py-3" :active="request()->routeIs('resources')"
                :href="route('resources')">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-gray-200" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <div class="text-indigo-300 group-hover:text-white">Resources</div>
            </x-sidebar-link>
        </div>
    </div>
