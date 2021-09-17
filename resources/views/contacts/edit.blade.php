<x-app-layout>
    <div scroll-region="" class="px-4 py-8 md:flex-1 md:p-12 md:overflow-y-auto">
        <div>
            <h1 class="mb-8 text-3xl font-bold">
                <a href="{{ route('contacts') }}" class="text-purple-400 hover:text-purple-600">Contacts</a>
                <span class="font-medium text-purple-400">/</span> Edit
            </h1>
            <div class="max-w-full overflow-hidden bg-white rounded-md shadow dark:bg-gray-800">
                <form action="{{ route('contacts.update', $contact) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap p-8 -mb-8 -mr-6">
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="first_name" :value="__('First Name')" />

                            <x-input id="first_name" class="block w-full mt-1" type="text" name="first_name" required
                                autocomplete="current-first-name" value="{{ $contact->first_name }}" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="lastname" :value="__('Last Name')" />

                            <x-input id="last_name" class="block w-full mt-1" type="text" name="last_name" required
                                autocomplete="current-last-name" value="{{ $contact->last_name }}" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block w-full mt-1" type="email" name="email" required
                                autocomplete="current-email" value="{{ $contact->email }}" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block w-full mt-1" type="text" name="phone" required
                                autocomplete="current-phone" value="{{ $contact->phone }}" />
                        </div>

                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="address" :value="__('Address')" />

                            <x-input id="address" class="block w-full mt-1" type="text" name="address" required
                                autocomplete="current-addre" value="{{ $contact->address }}" />
                        </div>

                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block w-full mt-1" type="text" name="city" required
                                autocomplete="current-city" value="{{ $contact->city }}" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="state" :value="__('State')" />

                            <x-input id="state" class="block w-full mt-1" type="text" name="state" required
                                autocomplete="current-state" value="{{ $contact->state }}" />
                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="organization" :value="__('Organization')" />
                            <select id="organization_id" name="organization_id"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm appearance-none dark:bg-gray-600 dark:border-gray-500 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50'">
                                <option value=""></option>
                                @foreach ($organizations as $organization)
                                    <option value="{{ $organization->id }}"
                                        {{ $contact->organization_id == $organization->id ? 'selected' : '' }}>
                                        {{ $organization->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="country" :value="__('Country')" />
                            <select id="country_id" name="country_id"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm appearance-none dark:bg-gray-600 dark:border-gray-500 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50'">
                                <option value=""></option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}"
                                        {{ $contact->country_id == $country->id ? 'selected' : '' }}>
                                        {{ $country->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="w-full pb-8 pr-6 lg:w-1/2">
                            <x-label for="postal_code" :value="__('Postal Code')" />

                            <x-input id="postal_code" class="block w-full mt-1" type="text" name="postal_code" required
                                autocomplete="current-posta l_code" value="{{ $contact->postal_code }}" />
                        </div>
                    </div>
                    <div class="flex items-center justify-end px-8 py-4 space-x-2 border-t border-gray-100 bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
                        x-data="{ open:false}">
                        <a class="flex items-center px-3 py-2 text-red-500 bg-gray-200 rounded-md cursor-pointer dark:bg-gray-700 dark:hover:bg-red-400 hover:bg-red-100"
                            @click="open=true" onclick="event.preventDefault();">
                            <svg class="w-6 h-6 text-red-500 " viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17 22H7C5.89543 22 5 21.1046 5 20V7H3V5H7V4C7 2.89543 7.89543 2 9 2H15C16.1046 2 17 2.89543 17 4V5H21V7H19V20C19 21.1046 18.1046 22 17 22ZM7 7V20H17V7H7ZM9 4V5H15V4H9ZM15 18H13V9H15V18ZM11 18H9V9H11V18Z"
                                    fill="currentColor"></path>
                            </svg>
                            <span class="hidden lg:block">Delete Contact</span>
                        </a>
                        <x-modal />
                        <button
                            class="flex items-center px-3 py-2 text-green-100 bg-green-500 rounded-md hover:bg-green-400"
                            type="submit">
                            Edit Contact
                        </button>
                    </div>
                </form>
                <form method="POST" action="{{ route('contacts.destroy', $contact) }}" id="delete-form">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
