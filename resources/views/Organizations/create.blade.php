<x-app-layout>
    <div scroll-region="" class="md:flex-1 px-4 py-8 md:p-12 md:overflow-y-auto">
        <div>
            <h1 class="mb-8 font-bold text-3xl">
                <a href="{{ route('organizations') }}" class="text-indigo-400 hover:text-indigo-600">Organizations</a>
                <span class="text-indigo-400 font-medium">/</span> Create
            </h1>
            <div class="bg-white rounded-md shadow overflow-hidden max-w-full">
                <form action="{{ route('organizations.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required
                                autocomplete="current-name" />
                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" required
                                autocomplete="current-email" />
                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" required
                                autocomplete="current-phone" />
                        </div>

                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="address" :value="__('Address')" />

                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" required
                                autocomplete="current-address" />
                        </div>

                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" required
                                autocomplete="current-city" />
                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="state" :value="__('State')" />

                            <x-input id="state" class="block mt-1 w-full" type="text" name="state" required
                                autocomplete="current-state" />
                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="country" :value="__('Country')" />
                            <select id="country_id" name="country_id"
                                class="appearance-none block mt-1 w-full
                                rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'">
                                <option value=""></option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="pr-6 pb-8 w-full lg:w-1/2">
                            <x-label for="postal_code" :value="__('Postal Code')" />

                            <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" required
                                autocomplete="current-postal_code" />
                        </div>
                    </div>
                    <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-end items-center">
                        <button
                            class="flex items-center bg-indigo-200 px-3 py-2 rounded-md text-indigo-500 hover:bg-indigo-100"
                            type="submit">
                            Create Organization
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
