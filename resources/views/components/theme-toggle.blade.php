<div x-data="{ mode: 'light',
            setColorMode: m => {
                if (m === 'dark') {
                    document.documentElement.classList.add('dark')
                    localStorage.setItem('colorMode', 'dark')
                    enabled = false

                } else {
                    document.documentElement.classList.remove('dark')
                    localStorage.setItem('colorMode', 'light')
                    enabled = true
                    console.log(m)
                }
            }
            }" x-init="() => {
            const m = localStorage.getItem('colorMode');
            if (m !== 'dark' && m !== 'light') return;
            mode = m;

            }">
    <button aria-label="Color Mode"
        class="flex items-center justify-center w-10 p-2 m-4 text-gray-800  dark:text-gray-200
              focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500  rounded-lg">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" x-show="mode == 'dark'"
            class=" w-6 h-6 text-yellow-500" @click="mode='light'; setColorMode('light'); console.log(mode)">
            <path
                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.46 4.95l.7.7a1 1 0 001.42-1.4l-.71-.71a1 1 0 00-1.41 1.41zm2.12-10.6a1 1 0 010 1.4l-.71.71a1 1 0 11-1.41-1.41l.7-.7a1 1 0 011.42 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.46a1 1 0 101.42-1.41l-.71-.7a1 1 0 00-1.42 1.4l.71.71zm1.41 8.49l-.7.7a1 1 0 01-1.42-1.4l.71-.71a1 1 0 011.41 1.41zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" x-show="mode == 'light'"
            @click="mode = 'dark'; setColorMode('dark');   console.log(mode)" class=" w-6 h-6 text-gray-400">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>


    </button>
</div>
