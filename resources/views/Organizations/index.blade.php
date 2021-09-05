<x-app-layout>
    <div scroll-region="" class="md:flex-1 px-4 py-8 md:p-12 md:overflow-y-auto">
        <div>
            <h1 class="mb-8 font-bold text-3xl">Organizations</h1>
            <div class="mb-6 flex justify-between items-center capitalize">
                <div class="flex items-center capitalize w-full max-w-md mr-4">
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
                        </button>
                        <input autocomplete="off" type="text" name="search" placeholder="Search…"
                            class="relative w-full px-6 py-3 rounded-r focus:ring">
                    </div>
                    <button type="button"
                        class="ml-3 text-sm text-gray-500 hover:text-gray-700 focus:text-indigo-500">Reset</button>
                </div>
                <x-link-button href="{{ route('organizations.create') }}" class="___class_+?11___">
                    Create Organization
                </x-link-button>
            </div>
            <div class="bg-white rounded-md shadow overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tr class="text-left font-bold">
                        <th class="px-6 pt-6 pb-4">Name</th>
                        <th class="px-6 pt-6 pb-4">City</th>
                        <th colspan="2" class="px-6 pt-6 pb-4">Phone</th>
                    </tr>
                    @forelse ($organizations as $organization)
                        <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                            <td class="border-t"><a href="{{ route('organizations.edit', $organization) }}"
                                    class="px-6 py-4 flex items-center capitalize focus:text-indigo-500">
                                    {{ $organization->name }}
                                </a></td>
                            <td class="border-t"><a tabindex="-1"
                                    href="{{ route('organizations.edit', $organization) }}"
                                    class="px-6 py-4 flex items-center capitalize">
                                    {{ $organization->name }}
                                </a></td>
                            <td class="border-t"><a tabindex="-1"
                                    href="{{ route('organizations.edit', $organization) }}"
                                    class="px-6 py-4 flex items-center capitalize">
                                    {{ $organization->phone }}
                                </a></td>
                            <td class="border-t w-px"><a tabindex="-1"
                                    href="{{ route('organizations.edit', $organization) }}"
                                    class="px-4 flex items-center capitalize"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" class="block w-6 h-6 fill-gray-400">
                                        <polygon
                                            points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707">
                                        </polygon>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-gray-200 focus-within:bg-gray-100" disabled>
                            <td class="border-t" colspan="3">
                                <p class="px-6 py-4 flex items-center capitalize justify-center focus:text-indigo-500">
                                    {{ __('No Data To Show') }}
                                </p>
                            </td>
                        </tr>
                    @endforelse
                </table>
            </div>
            <div class="mt-6">
                <div class="livewire-pagination">
                    {{ $organizations->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
