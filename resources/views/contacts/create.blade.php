<x-app-layout>
    <div scroll-region="" class="px-4 py-8 md:flex-1 md:p-12 md:overflow-y-auto">
        <div>
            <h1 class="mb-8 text-3xl font-bold">
                <a href="{{ route('contacts') }}" class="text-purple-400 hover:text-purple-600">Contacts</a>
                <span class="font-medium text-purple-400">/</span> Create
            </h1>
            <div class="max-w-full overflow-hidden bg-white rounded-md shadow dark:bg-gray-800">
                <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap p-8 -mb-8 -mr-6">
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="first_name" :value="__('First Name')" />

                            <x-input id="first_name" class="block w-full mt-1" type="text" name="first_name" required
                                autocomplete="current-first-name" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="lastname" :value="__('Last Name')" />

                            <x-input id="last_name" class="block w-full mt-1" type="text" name="last_name" required
                                autocomplete="current-last-name" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block w-full mt-1" type="email" name="email" required
                                autocomplete="current-email" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block w-full mt-1" type="text" name="phone" required
                                autocomplete="current-phone" />
                        </div>

                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="address" :value="__('Address')" />

                            <x-input id="address" class="block w-full mt-1" type="text" name="address" required
                                autocomplete="current-address" />
                        </div>

                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block w-full mt-1" type="text" name="city" required
                                autocomplete="current-city" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="state" :value="__('State')" />

                            <x-input id="state" class="block w-full mt-1" type="text" name="state" required
                                autocomplete="current-state" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="organization" :value="__('Organization')" />
                            <select id="organization_id" name="organization_id"
                                class="block w-full mt-1 rounded-md shadow-sm appearance-none dark:bg-gray-600 dark:border-gray-500border-gray-300 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50'">
                                <option value=""></option>
                                @foreach ($organizations as $organization)
                                    <option value="{{ $organization->id }}">{{ $organization->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="country" :value="__('Country')" />
                            <select id="country_id" name="country_id"
                                class="block w-full mt-1 rounded-md shadow-sm appearance-none dark:bg-gray-600 dark:border-gray-500border-gray-300 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50'">
                                <option value=""></option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="postal_code" :value="__('Postal Code')" />

                            <x-input id="postal_code" class="block w-full mt-1" type="text" name="postal_code" required
                                autocomplete="current-postal_code" />
                        </div>
                    </div>
                    <div class="flex items-center justify-end px-8 py-4 border-t border-gray-100 bg-gray-50">
                        <button
                            class="flex items-center px-3 py-2 text-purple-500 bg-purple-200 rounded-md hover:bg-purple-100"
                            type="submit">
                            Create Contact
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
