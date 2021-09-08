<div class="absolute inset-0 flex items-center justify-center bg-opacity-25 bg-dark-900" x-show="open">
    <div
        class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl dark:bg-dark-700 rounded-2xl ">
        <h3 class="text-lg font-medium leading-6 text-dark-900 dark:text-dark-300" id="headlessui-dialog-title-6">Delete
            Organization
        </h3>
        <div class="mt-2">
            <p class="text-sm text-dark-500 dark:text-dark-400">Your payment has been successfully submitted. We’ve sent
                your an email
                with
                all
                of the details of your order.</p>
        </div>
        <div class="mt-4">
            <button type="button"
                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-red-100 bg-red-500 border border-transparent rounded-md hover:bg-red-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-red-500"
                onclick="event.preventDefault(); document.getElementById('delete-form').submit();" tabindex="0">Delete
            </button>
            <button type="button"
                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-blue-900 bg-blue-100 border-transparent rounded-md bordebg-r dark:bg-blue-500 hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500"
                tabindex="0" @click="open= false">Cancel

            </button>
        </div>
    </div>
</div>
