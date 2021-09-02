<x-app-layout>
    <div scroll-region="" class="md:flex-1 px-4 py-8 md:p-12 md:overflow-y-auto">
        <div>
            <h1 class="mb-8 font-bold text-3xl">Organizations</h1>
            <div class="mb-6 flex justify-between items-center">
                <div class="flex items-center w-full max-w-md mr-4">
                    <div class="flex w-full bg-white shadow rounded">
                        <button type="button"
                            class="px-4 md:px-6 rounded-l border-r hover:bg-gray-100 focus:border-white focus:ring focus:z-10">
                            <div class="flex items-baseline"><span class="text-gray-700 hidden md:inline">Filter</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 961.243 599.998"
                                    class="w-2 h-2 fill-gray-700 md:ml-2">
                                    <path
                                        d="M239.998 239.999L0 0h961.243L721.246 240c-131.999 132-240.28 240-240.624 239.999-.345-.001-108.625-108.001-240.624-240z">
                                    </path>
                                </svg>
                            </div>
                            <!---->
                        </button>
                        <input autocomplete="off" type="text" name="search" placeholder="Search…"
                            class="relative w-full px-6 py-3 rounded-r focus:ring">
                    </div>
                    <button type="button"
                        class="ml-3 text-sm text-gray-500 hover:text-gray-700 focus:text-indigo-500">Reset</button>
                </div> <a href="/organizations/create"
                    class="bg-indigo-800 text-gray-100 rounded-md px-4 py-2"><span>Create</span> <span
                        class="hidden md:inline">Organization</span></a>
            </div>
            <div class="bg-white rounded-md shadow overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tr class="text-left font-bold">
                        <th class="px-6 pt-6 pb-4">Name</th>
                        <th class="px-6 pt-6 pb-4">City</th>
                        <th colspan="2" class="px-6 pt-6 pb-4">Phone</th>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/organizations/49/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Abernathy, Hill and Harvey
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/49/edit"
                                class="px-6 py-4 flex items-center">
                                Reystad
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/49/edit"
                                class="px-6 py-4 flex items-center">
                                (844) 412-9656
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/organizations/49/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/organizations/67/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Abernathy-Price
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/67/edit"
                                class="px-6 py-4 flex items-center">
                                Savannashire
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/67/edit"
                                class="px-6 py-4 flex items-center">
                                (866) 668-2121
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/organizations/67/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/organizations/28/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Bartell, Reilly and Connelly
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/28/edit"
                                class="px-6 py-4 flex items-center">
                                Beattyport
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/28/edit"
                                class="px-6 py-4 flex items-center">
                                855-390-0526
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/organizations/28/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/organizations/24/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Beer, Stark and Tillman
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/24/edit"
                                class="px-6 py-4 flex items-center">
                                North Margueritechester
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/24/edit"
                                class="px-6 py-4 flex items-center">
                                (877) 920-4752
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/organizations/24/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/organizations/34/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Block, Bruen and Reichert
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/34/edit"
                                class="px-6 py-4 flex items-center">
                                Lake Evelineborough
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/organizations/34/edit"
                                class="px-6 py-4 flex items-center">
                                (888) 779-6424
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/organizations/34/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mt-6">
                <div class="flex flex-wrap -mb-1">
                    <div class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded">« Previous</div><a
                        href="/organizations?page=1"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500 bg-white">1</a><a
                        href="/organizations?page=2"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">2</a><a
                        href="/organizations?page=3"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">3</a><a
                        href="/organizations?page=4"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">4</a><a
                        href="/organizations?page=5"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">5</a><a
                        href="/organizations?page=6"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">6</a><a
                        href="/organizations?page=7"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">7</a><a
                        href="/organizations?page=8"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">8</a><a
                        href="/organizations?page=9"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">9</a><a
                        href="/organizations?page=10"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">10</a><a
                        href="/organizations?page=2"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">Next
                        »</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
