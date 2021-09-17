<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="transition duration-500 ease-in-out">

<head>
    <x-head />
    <style>
        pre[class*=language-] {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity));
            position: static;
        }

        pre[class*=language-] {
            overflow: auto;
            position: relative;
            margin: .5em 0;
            padding: 1.25em 1em;
        }

        code[class*=language-],
        pre[class*=language-] {
            text-align: left;
            white-space: pre;
            word-spacing: normal;
            word-break: normal;
            word-wrap: normal;
            color: #c3cee3;
            background: #263238;
            font-family: Roboto Mono, monospace;
            font-size: 1em;
            line-height: 1.5em;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            -webkit-hyphens: none;
            -ms-hyphens: none;
            hyphens: none;
        }

    </style>
</head>

<body class="antialiased leading-normal text-gray-700 bg-white dark:bg-gray-900 dark:text-gray-300 bg-opacity-60">
    <div id="app" x-data="{ t : localStorage.getItem('colorMode') === 'dark'? true:false }">
        <div class="w-full">
            <div class="pt-16">
                <nav
                    class="fixed top-0 z-40 w-full bg-white border-b border-transparent shadow dark:border-gray-800 dark:bg-gray-900">
                    <div class="container flex-1 px-4 mx-auto lg:px-8">
                        <div class="flex items-center justify-between h-16">
                            <div class="flex items-center pr-4 lg:w-1/5">
                                <a href="{{ route('dashboard') }}"
                                    class="flex items-center flex-shrink-0 text-xl font-bold ">
                                    <x-application-logo class="w-8 h-8 mr-1 text-gray-700 dark:text-gray-300"
                                        strok="0.75" linecap="round" />
                                    <span
                                        class="ml-1 font-semibold text-gray-700 uppercase text-md dark:text-gray-300">LaraWind</span>
                                </a>
                            </div>
                            <div class="justify-center flex-1 hidden w-4/6 lg:flex">
                                <div class="relative flex flex-col justify-between w-full">
                                    <div class="relative w-full"><label for="search"
                                            class="sr-only">Search</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                                    class="w-5 h-5 text-gray-500">
                                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </div> <input id="search"
                                                placeholder="Search the docs (Press &quot;/&quot; to focus)"
                                                type="search" autocomplete="off"
                                                x-ref="searchField"
                                                x-model=""
                                                x-on:keydown.window.prevent.slash="$refs.searchField.focus()"
                                                class="block w-full py-2 pl-10 pr-3 leading-5 text-gray-700 placeholder-gray-500 truncate bg-gray-200 border border-transparent rounded-md dark:text-white dark-focus:text-white focus:border-gray-300 dark-focus:border-gray-700 focus:outline-none focus:bg-white dark-focus:bg-gray-900 dark:bg-gray-800">
                                        </div>
                                    </div>
                                    <ul class="absolute top-0 z-10 flex-1 w-full overflow-hidden bg-white border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700"
                                        style="margin-top:37px;display:none">

                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-end pl-8 lg:w-1/5">
                                <div class="flex items-center justify-between">
                                    @auth
                                        <a href="{{ route('dashboard') }}"
                                            class="px-4 font-bold text-md dark:text-gray-500">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="font-bold text-md dark:text-gray-300">Log
                                            in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="ml-4 text-sm font-bold dark:text-gray-300">Register</a>
                                        @endif
                                    @endauth
                                </div>
                                <div class="flex items-center">
                                    <x-theme-toggle />
                                    <a href="https://twitter.com/@larsklopstra" target="_blank"
                                        rel="noopener noreferrer" title="Twitter" name="Twitter"
                                        class="hidden ml-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark-hover:text-blue-500 lg:block"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-5 h-5 feather feather-twitter">
                                            <path
                                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="https://github.com/nebulapackage/nebula-documentation" target="_blank"
                                        rel="noopener noreferrer" title="Github" name="Github"
                                        class="hidden ml-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark-hover:text-blue-500 lg:block">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="w-5 h-5 feather feather-github">
                                            <path
                                                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                            </path>
                                        </svg>
                                    </a>
                                    <button aria-label="Menu"
                                        class="p-2 -mr-2 text-gray-700 rounded-md lg:hidden dark:text-gray-300 focus:outline-none">
                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                            <path d="M4 6h16M4 12h16M4 18h16">

                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <main class="container px-4 mx-auto lg:px-8">
                    <div class="relative flex flex-wrap">
                        <aside
                            class="fixed inset-0 z-30 hidden w-full mt-16 bg-white lg:w-1/5 lg:block lg:relative lg:mt-0 dark:bg-gray-900 lg:bg-transparent lg:dark:bg-transparent">
                            <div class="lg:sticky lg:top-16 overflow-y-auto h-full lg:h-auto lg:max-h-(screen-16)">
                                <ul class="p-4 lg:py-8 lg:pl-0 lg:pr-8">
                                    <li class="mb-4 lg:hidden">
                                        <div class="relative flex flex-col justify-between w-full">
                                            <div class="relative w-full"><label for="search"
                                                    class="sr-only">Search</label>
                                                <div class="relative">
                                                    <div
                                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                                            class="w-5 h-5 text-gray-500">
                                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                                                            </path>
                                                        </svg>
                                                    </div> <input id="search"
                                                        placeholder="Search the docs (Press &quot;/&quot; to focus)"
                                                        type="search" autocomplete="off"
                                                        class="block w-full py-2 pl-10 pr-3 leading-5 text-gray-700 placeholder-gray-500 truncate bg-gray-200 border border-transparent rounded-md dark:text-white dark-focus:text-white focus:border-gray-300 dark-focus:border-gray-700 focus:outline-none focus:bg-white dark-focus:bg-gray-900 dark:bg-gray-800">
                                                </div>
                                            </div>
                                            <ul class="absolute top-0 z-10 flex-1 w-full overflow-hidden bg-white border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700"
                                                style="margin-top:37px;display:none">
                                                <!---->
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mb-4">
                                        <h3
                                            class="mb-2 text-sm font-bold tracking-wider text-gray-500 uppercase lg:text-xs">
                                            Getting started</h3>
                                        <ul>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500 nuxt-link-active">
                                                    Introduction
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/contributing"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Contributing
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/installation"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Installation
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/configuration"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Configuration
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/sponsors"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Sponsors
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="mb-4">
                                        <h3
                                            class="mb-2 text-sm font-bold tracking-wider text-gray-500 uppercase lg:text-xs">
                                            Core concepts</h3>
                                        <ul>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/authorization"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Authorization
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/resources"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Resources
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/filters"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Filters
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/fields" aria-current="page"
                                                    class="flex items-center justify-between px-2 py-1 font-medium text-blue-500 bg-blue-100 rounded hover:text-blue-500 dark:bg-blue-900 nuxt-link-active">
                                                    Fields
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/metrics"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Metrics
                                                </a></li>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/dashboards"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Dashboards
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="mb-4 lg:mb-0">
                                        <h3
                                            class="mb-2 text-sm font-bold tracking-wider text-gray-500 uppercase lg:text-xs">
                                            Guides</h3>
                                        <ul>
                                            <li class="text-gray-700 dark:text-gray-300"><a
                                                    href="https://nebulapackage.com/screencasts"
                                                    class="flex items-center justify-between px-2 py-1 font-medium rounded hover:text-blue-500">
                                                    Screencasts
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="lg:hidden">
                                        <h3
                                            class="mb-2 text-sm font-bold tracking-wider text-gray-500 uppercase lg:text-xs">
                                            More</h3>
                                        <div class="flex items-center ml-2"><a href="https://twitter.com/@larsklopstra"
                                                target="_blank" rel="noopener noreferrer" title="Twitter" name="Twitter"
                                                class="inline-flex mr-4 text-gray-700 dark:text-gray-300 hover:text-blue-500"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="w-5 h-5 feather feather-twitter">
                                                    <path
                                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                    </path>
                                                </svg></a> <a
                                                href="https://github.com/nebulapackage/nebula-documentation"
                                                target="_blank" rel="noopener noreferrer" title="Github" name="Github"
                                                class="inline-flex mr-4 text-gray-700 dark:text-gray-300 hover:text-blue-500"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="w-5 h-5 feather feather-github">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                    </path>
                                                </svg></a>
                                            <!----> <span class="inline-flex"><button aria-label="Color Mode"
                                                    class="transition duration-150 ease-in-out rounded-md hover:text-blue-500 focus:outline-none"><svg
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path
                                                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                                                        </path>
                                                    </svg></button></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <div class="flex flex-wrap-reverse w-full lg:w-4/5">
                            <div
                                class="w-full py-4 lg:pt-8 lg:pb-4 dark:border-gray-800 lg:w-3/4 lg:border-l lg:border-r">
                                <div class="flex pt-4 pb-4 lg:px-8"><a
                                        href="https://github.com/nebulapackage/nebula-documentation/edit/master/content/en/fields.md"
                                        target="_blank" rel="noopener"
                                        class="flex items-center text-sm font-medium text-gray-600 dark:text-gray-400 hover:underline">
                                        Edit this page on GitHub
                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-1">
                                            <path
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="grid grid-cols-2 gap-2 pt-4 border-t lg:px-8 dark:border-gray-800">
                                    <a href="https://nebulapackage.com/filters"
                                        class="flex items-center justify-start font-bold text-blue-500 hover:underline">
                                        <svg fill="currentColor" viewBox="0 0 20 20"
                                            class="flex-shrink-0 w-4 h-4 mr-1">
                                            <path fill-rule="evenodd"
                                                d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="truncate">Filters</span>
                                    </a>
                                    <a href="https://nebulapackage.com/metrics"
                                        class="flex items-center justify-end font-bold text-blue-500 hover:underline">
                                        <span class="truncate">Metrics</span>
                                        <svg fill="currentColor" viewBox="0 0 20 20"
                                            class="flex-shrink-0 w-4 h-4 ml-1">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="relative block w-full lg:w-1/4">
                                <div class="lg:sticky lg:top-16 overflow-y-auto h-full lg:h-auto lg:max-h-(screen-16)">
                                    <nav class="py-4 lg:py-8 lg:pl-8 lg:pr-2">
                                        <h3
                                            class="mb-3 text-sm font-bold tracking-wider text-gray-500 uppercase lg:mb-2 lg:text-xs">
                                            On this page</h3>
                                        <ul class="scrollactive-nav">
                                            <li
                                                class="text-gray-700 border-t border-dashed dark:text-gray-300 dark:border-gray-800 first:border-t-0">
                                                <a href="#registering-a-field"
                                                    class="block py-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Registering
                                                    a field</a>
                                            </li>
                                            <li
                                                class="text-gray-700 border-t border-dashed dark:text-gray-300 dark:border-gray-800 first:border-t-0">
                                                <a href="#available-fields"
                                                    class="block py-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Available
                                                    fields</a>
                                            </li>
                                            <li
                                                class="text-gray-700 border-t border-dashed dark:text-gray-300 dark:border-gray-800 first:border-t-0">
                                                <a href="#input-field"
                                                    class="block py-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Input
                                                    field</a>
                                            </li>
                                            <li
                                                class="text-gray-700 border-t border-dashed dark:text-gray-300 dark:border-gray-800 first:border-t-0">
                                                <a href="#textarea-field"
                                                    class="block py-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Textarea
                                                    field</a>
                                            </li>
                                            <li
                                                class="text-gray-700 border-t border-dashed dark:text-gray-300 dark:border-gray-800 first:border-t-0">
                                                <a href="#boolean-field"
                                                    class="block py-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Boolean
                                                    field</a>
                                            </li>
                                            <li
                                                class="text-gray-700 border-t border-dashed dark:text-gray-300 dark:border-gray-800 first:border-t-0">
                                                <a href="#color-field"
                                                    class="block py-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Color
                                                    field</a>
                                            </li>
                                            <li
                                                class="text-gray-700 border-t border-dashed dark:text-gray-300 dark:border-gray-800 first:border-t-0">
                                                <a href="#date-field"
                                                    class="block py-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Date
                                                    field</a>
                                            </li>
                                            <li
                                                class="text-gray-700 border-t border-dashed dark:text-gray-300 dark:border-gray-800 first:border-t-0">
                                                <a href="#creating-your-own-fields"
                                                    class="block py-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Creating
                                                    your own fields</a>
                                            </li>
                                            <li class="text-gray-700 dark:text-gray-300">
                                                <a href="#cli"
                                                    class="block pb-2 ml-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">CLI</a>
                                            </li>
                                            <li class="text-gray-700 dark:text-gray-300">
                                                <a href="#views"
                                                    class="block pb-2 ml-2 text-sm duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Views</a>
                                            </li>
                                            <li class="text-gray-700 dark:text-gray-300">
                                                <a href="#rendering-the-views"
                                                    class="block pb-2 ml-2 text-sm text-blue-500 duration-300 ease-in-out scrollactive-item transition-padding hover:pl-1">Rendering
                                                    the views</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="relative z-20 w-full h-16 bg-white border-t dark:border-gray-800 dark:bg-gray-900">
                    <div class="container w-full h-full px-4 mx-auto lg:px-8">
                        @include('layouts.footer')
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
