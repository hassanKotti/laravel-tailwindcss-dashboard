<x-app-layout>
    <div scroll-region="" class="md:flex-1 px-4 py-8 md:p-12 md:overflow-y-auto">
        <div>
            <h1 class="mb-8 font-bold text-3xl">Contacts</h1>
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
                </div>
                <a href="/contacts/create" class="bg-indigo-800 text-gray-100 rounded-md px-4 py-2">
                    <span>Create</span>
                    <span class="hidden md:inline">Contact</span>
                </a>
            </div>
            <div class="bg-white rounded-md shadow overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tr class="text-left font-bold">
                        <th class="px-6 pt-6 pb-4">Name</th>
                        <th class="px-6 pt-6 pb-4">Organization</th>
                        <th class="px-6 pt-6 pb-4">City</th>
                        <th colspan="2" class="px-6 pt-6 pb-4">Phone</th>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/contacts/22/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Stevie Anderson
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/22/edit"
                                class="px-6 py-4 flex items-center">
                                <div>
                                    Kuhn-Morissette
                                </div>
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/22/edit"
                                class="px-6 py-4 flex items-center">
                                East Kaleigh
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/22/edit"
                                class="px-6 py-4 flex items-center">
                                (866) 660-8146
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/contacts/22/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/contacts/57/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Chaim Armstrong
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/57/edit"
                                class="px-6 py-4 flex items-center">
                                <div>
                                    Bartell PLC
                                </div>
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/57/edit"
                                class="px-6 py-4 flex items-center">
                                Port Otis
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/57/edit"
                                class="px-6 py-4 flex items-center">
                                1-877-408-5285
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/contacts/57/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/contacts/87/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                April Aufderhar
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/87/edit"
                                class="px-6 py-4 flex items-center">
                                <div>
                                    Dickinson, Hudson and Johnson
                                </div>
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/87/edit"
                                class="px-6 py-4 flex items-center">
                                New Donna
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/87/edit"
                                class="px-6 py-4 flex items-center">
                                1-866-203-0018
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/contacts/87/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/contacts/50/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Michele Berge
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/50/edit"
                                class="px-6 py-4 flex items-center">
                                <div>
                                    Denesik-Kunde
                                </div>
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/50/edit"
                                class="px-6 py-4 flex items-center">
                                New Guy
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/50/edit"
                                class="px-6 py-4 flex items-center">
                                844.659.2688
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/contacts/50/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                    <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                        <td class="border-t"><a href="/contacts/39/edit"
                                class="px-6 py-4 flex items-center focus:text-indigo-500">
                                Mike Bergstrom
                                <!---->
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/39/edit"
                                class="px-6 py-4 flex items-center">
                                <div>
                                    Aufderhar LLC
                                </div>
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/39/edit"
                                class="px-6 py-4 flex items-center">
                                New Neil
                            </a></td>
                        <td class="border-t"><a tabindex="-1" href="/contacts/39/edit"
                                class="px-6 py-4 flex items-center">
                                (855) 799-7565
                            </a></td>
                        <td class="border-t w-px"><a tabindex="-1" href="/contacts/39/edit"
                                class="px-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                    <polygon
                                        points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                    </polygon>
                                </svg></a></td>
                    </tr>
                </table>
            </div>
            <div class="mt-5">
                <div class="flex flex-wrap -mb-1">
                    <div class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded">« Previous</div><a
                        href="/contacts?page=1"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500 bg-white">1</a><a
                        href="/contacts?page=2"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">2</a><a
                        href="/contacts?page=3"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">3</a><a
                        href="/contacts?page=4"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">4</a><a
                        href="/contacts?page=5"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">5</a><a
                        href="/contacts?page=6"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">6</a><a
                        href="/contacts?page=7"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">7</a><a
                        href="/contacts?page=8"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">8</a><a
                        href="/contacts?page=9"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">9</a><a
                        href="/contacts?page=10"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">10</a><a
                        href="/contacts?page=2"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500">Next
                        »</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
