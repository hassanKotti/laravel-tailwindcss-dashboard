<x-app-layout>
    <div scroll-region="" class="md:flex-1 px-4 py-8 md:p-12 md:overflow-y-auto">
        <div>
            <h1 class="mb-8 font-bold text-3xl">
                <a href="{{ route('organizations') }}" class="text-indigo-400 hover:text-indigo-600">Organizations</a>
                <span class="text-indigo-400 font-medium">/</span> Edit
            </h1>
            <div class="bg-white rounded-md shadow overflow-hidden max-w-full">
                <form action="{{ route('organizations.update', $organization) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required
                                autocomplete="current-name" value="{{ $organization->name }}" />
                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" required
                                autocomplete="current-email" value="{{ $organization->email }}" />
                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" required
                                autocomplete="current-phone" value="{{ $organization->phone }}" />
                        </div>

                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="address" :value="__('Address')" />

                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" required
                                autocomplete="current-addre" value="{{ $organization->address }}" />
                        </div>

                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" required
                                autocomplete="current-city" value="{{ $organization->city }}" />
                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="state" :value="__('State')" />

                            <x-input id="state" class="block mt-1 w-full" type="text" name="state" required
                                autocomplete="current-state" value="{{ $organization->state }}" />
                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="country" :value="__('Country')" />
                            <select id="country_id" name="country_id"
                                class="appearance-none block mt-1 w-full
                                rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'">
                                <option value=""></option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}"
                                        {{ $organization->country_id == $country->id ? 'selected' : '' }}>
                                        {{ $country->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="postal_code" :value="__('Postal Code')" />

                            <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" required
                                autocomplete="current-posta l_code" value="{{ $organization->postal_code }}" />
                        </div>
                    </div>
                    <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-end items-center space-x-2"
                        x-data="{ open:false}">
                        <a class=" flex items-center bg-gray-200 px-3 py-2 rounded-md text-red-500 hover:bg-red-100 cursor-pointer"
                            @click="open=true" onclick="event.preventDefault();">
                            <svg class="w-6 h-6 text-red-500 " viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17 22H7C5.89543 22 5 21.1046 5 20V7H3V5H7V4C7 2.89543 7.89543 2 9 2H15C16.1046 2 17 2.89543 17 4V5H21V7H19V20C19 21.1046 18.1046 22 17 22ZM7 7V20H17V7H7ZM9 4V5H15V4H9ZM15 18H13V9H15V18ZM11 18H9V9H11V18Z"
                                    fill="currentColor"></path>
                            </svg>
                            <span class="hidden lg:block">Delete Organization</span>
                        </a>
                        <x-modal />
                        <button
                            class="
                            flex items-center bg-green-500 px-3 py-2 rounded-md text-green-100 hover:bg-green-400"
                            type="submit">
                            Edit Organization
                        </button>
                    </div>
                </form>
                <form method="POST" action="{{ route('organizations.destroy', $organization) }}" id="delete-form">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
