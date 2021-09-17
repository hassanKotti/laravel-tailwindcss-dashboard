<x-app-layout>
    <div class="px-4 py-8 md:flex-1 md:p-12 md:overflow-y-auto">
        <h1 class="mb-8 text-3xl font-bold">Contacts</h1>
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center w-full max-w-md mr-4">
                <div class="flex items-center w-full bg-white rounded shadow dark:bg-gray-700">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger"
                            class="px-4 border-r rounded-l md:px-6 dark:border-gray-400 hover:bg-gray-100 dark:hover:bg-gray-500 focus:border-white focus:ring focus:z-10">
                            <button type="button" class="px-4 md:px-6">
                                <div class="flex items-baseline">
                                    <span class="hidden text-gray-700 dark:text-gray-400 md:inline">Filter</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 961.243 599.998"
                                        class="w-2 h-2 text-gray-700 md:ml-2 dark:text-gray-400" fill="currentColor">
                                        <path
                                            d="M239.998 239.999L0 0h961.243L721.246 240c-131.999 132-240.28 240-240.624 239.999-.345-.001-108.625-108.001-240.624-240z">
                                        </path>
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content"
                            class="absolute right-0 w-56 mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg dark:bg-gray-700 dark:divide-gray-400 ring-1 ring-black ring-opacity-5 focus:outline-none"
                            aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-10" role="menu"
                            tabindex="0">
                            <div class="px-1 py-1 " role="none">
                                <button
                                    class="flex items-center w-full px-2 py-2 text-sm text-gray-900 rounded-md dark:text-gray-400 group"
                                    id="headlessui-menu-item-11" role="menuitem" tabindex="-1"><svg
                                        class="w-5 h-5 mr-2" aria-hidden="true" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 13V16H7L16 7L13 4L4 13Z" fill="#EDE9FE" stroke="#A78BFA"
                                            stroke-width="2">
                                        </path>
                                    </svg>Edit</button><button
                                    class="flex items-center w-full px-2 py-2 text-sm text-gray-900 rounded-md dark:text-gray-400 group"
                                    id="headlessui-menu-item-12" role="menuitem" tabindex="-1"><svg
                                        class="w-5 h-5 mr-2" aria-hidden="true" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 4H12V12H4V4Z" fill="#EDE9FE" stroke="#A78BFA" stroke-width="2">
                                        </path>
                                        <path d="M8 8H16V16H8V8Z" fill="#EDE9FE" stroke="#A78BFA" stroke-width="2">
                                        </path>
                                    </svg>Duplicate
                                </button>
                            </div>
                            <div class="px-1 py-1" role="none">
                                <button
                                    class="flex items-center w-full px-2 py-2 text-sm text-gray-900 rounded-md dark:text-gray-400 group"
                                    id="headlessui-menu-item-13" role="menuitem" tabindex="-1"><svg
                                        class="w-5 h-5 mr-2" aria-hidden="true" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="5" y="8" width="10" height="8" fill="#EDE9FE" stroke="#A78BFA"
                                            stroke-width="2"></rect>
                                        <rect x="4" y="4" width="12" height="4" fill="#EDE9FE" stroke="#A78BFA"
                                            stroke-width="2"></rect>
                                        <path d="M8 12H12" stroke="#A78BFA" stroke-width="2"></path>
                                    </svg>Archive</button><button
                                    class="flex items-center w-full px-2 py-2 text-sm text-gray-900 rounded-md dark:text-gray-400 group"
                                    id="headlessui-menu-item-14" role="menuitem" tabindex="-1"><svg
                                        class="w-5 h-5 mr-2" aria-hidden="true" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 4H16V10" stroke="#A78BFA" stroke-width="2"></path>
                                        <path d="M16 4L8 12" stroke="#A78BFA" stroke-width="2"></path>
                                        <path d="M8 6H4V16H14V12" stroke="#A78BFA" stroke-width="2"></path>
                                    </svg>Move
                                </button>
                            </div>
                            <div class="px-1 py-1" role="none"><button
                                    class="flex items-center w-full px-2 py-2 text-sm text-gray-900 rounded-md dark:text-gray-400 group"
                                    id="headlessui-menu-item-15" role="menuitem" tabindex="-1"><svg
                                        class="w-5 h-5 mr-2 text-violet-400" aria-hidden="true" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="5" y="6" width="10" height="10" fill="#EDE9FE" stroke="#A78BFA"
                                            stroke-width="2"></rect>
                                        <path d="M3 6H17" stroke="#A78BFA" stroke-width="2"></path>
                                        <path d="M8 6V4H12V6" stroke="#A78BFA" stroke-width="2"></path>
                                    </svg>Delete</button>
                            </div>
                        </x-slot>
                    </x-dropdown>
                    <x-input autocomplete="off" type="text" name="search" placeholder="Search…" round="r"
                        class="relative w-full px-6 py-3 rounded-r focus:ring" />
                </div>
                <button type="button"
                    class="ml-3 text-sm text-gray-500 hover:text-gray-700 focus:text-purple-500">Reset</button>
            </div>
            <x-link-button href="{{ route('contacts.create') }}"
                class="">
                Create Contact
            </x-link-button>
        </div>
        <div class="overflow-x-auto bg-white rounded-md shadow dark:bg-gray-800">
                <table class="w-full whitespace-nowrap">
                    <tr class="font-bold text-left">
                        <th class="px-6 pt-6 pb-4">Name</th>
                        <th class="px-6 pt-6 pb-4">Organization</th>
                        <th class="px-6 pt-6 pb-4">City</th>
                        <th colspan="2" class="px-6 pt-6 pb-4">Phone</th>
                    </tr>
                    @forelse ($contacts as $contact)
                        <tr
                            class="hover:bg-gray-100 dark:hover:bg-gray-600 focus-within:bg-gray-100 dark:border-gray-700">
                            <td class="border-t dark:border-gray-700">
                                <a href="{{ route('contacts.edit', $contact) }}"
                                    class="flex items-center px-6 py-4 focus:text-purple-500">
                                    {{ $contact->first_name . ' ' . $contact->last_name }}
                                </a>
                            </td>
                            <td class="border-t dark:border-gray-700">
                                <a tabindex="-1" href="{{ route('contacts.edit', $contact) }}"
                                    class="flex items-center px-6 py-4">
                                    <div>
                                        {{ $contact->organization_id }}
                                    </div>
                                </a>
                            </td>
                            <td class="border-t dark:border-gray-700">
                                <a tabindex="-1" href="{{ route('contacts.edit', $contact) }}"
                                    class="flex items-center px-6 py-4">
                                    {{ $contact->phone }}
                                </a>
                            </td>
                            <td class="border-t dark:border-gray-700">
                                <a tabindex="-1" href="{{ route('contacts.edit', $contact) }}"
                                    class="flex items-center px-6 py-4">
                                    {{ $contact->city }}
                                </a>
                            </td>
                            <td class="w-px border-t dark:border-gray-700">
                                <a tabindex="-1" href="{{ route('contacts.edit', $contact) }}"
                                    class="flex items-center px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        class="block w-6 h-6 text-gray-400 dark:text-gray-400">
                                        <polygon
                                            points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707"
                                            fill="currentColor">
                                        </polygon>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center dark:border-gray-700">
                            <td class="border-t dark:border-gray-700" colspan="4">
                                <p class="flex items-center justify-center px-6 py-4 focus:text-purple-500">
                                    No data to show!
                                </p>
                            </td>
                        </tr>
                    @endforelse
                </table>
        </div>
        <div class="mt-5">
            {{ $contacts->links() }}
        </div>

    </div>
</x-app-layout>
