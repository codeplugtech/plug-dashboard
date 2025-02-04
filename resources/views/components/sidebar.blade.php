<nav x-cloak
     class="fixed left-0 z-20 flex h-svh w-60 shrink-0 flex-col border-r border-slate-300 bg-[#052E34] p-4 transition-transform duration-300 md:w-64 md:translate-x-0 md:relative"
     x-bind:class="showSidebar ? 'translate-x-0' : '-translate-x-60'" aria-label="sidebar navigation">
    <!-- logo  -->
    <a href="#" class="ml-2 w-fit text-2xl font-bold text-white">
        <span class="sr-only">homepage</span>
        TableExtract.ai
    </a>

    <!-- search  -->
    <div class="my-4"></div>

    <!-- sidebar links  -->
    <div class="flex flex-col gap-2 overflow-y-auto pb-6">

        <a href="#"
           class="flex items-center rounded-xl gap-2 px-2 py-1.5 text-sm font-medium text-white underline-offset-2 hover:bg-[#37B7C333] hover:text-gray-100 focus-visible:underline focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0"
                 aria-hidden="true">
                <path
                    d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z"/>
            </svg>
            <span>Dashboard</span>
        </a>

        <a href="#"
           class="flex items-center rounded-xl gap-2 bg-blue-700/10 px-2 py-1.5 text-sm font-medium text-black underline-offset-2 focus-visible:underline focus:outline-none dark:bg-blue-600/10 dark:text-white">
            <svg xmlns="http://www.w3.org/2000/svg viewBox=" 0 0 20 20
            " fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
            <path
                d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z"/>
            </svg>
            <span>Profile</span>
            <span class="sr-only">active</span>
        </a>

        <a href="#"
           class="flex items-center rounded-xl gap-2 px-2 py-1.5 text-sm font-medium text-slate-700 underline-offset-2 hover:bg-blue-700/5 hover:text-black focus-visible:underline focus:outline-none dark:text-slate-300 dark:hover:bg-blue-600/5 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0"
                 aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 0 0 1.33 0l1.713-3.293a.783.783 0 0 1 .642-.413 41.102 41.102 0 0 0 3.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0 0 10 2ZM6.75 6a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 2.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                      clip-rule="evenodd"/>
            </svg>
            <span>Inbox</span>
        </a>

        <a href="#"
           class="flex items-center rounded-xl gap-2 px-2 py-1.5 text-sm font-medium text-slate-700 underline-offset-2 hover:bg-blue-700/5 hover:text-black focus-visible:underline focus:outline-none dark:text-slate-300 dark:hover:bg-blue-600/5 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0"
                 aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M10 2a6 6 0 0 0-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 0 0 .515 1.076 32.91 32.91 0 0 0 3.256.508 3.5 3.5 0 0 0 6.972 0 32.903 32.903 0 0 0 3.256-.508.75.75 0 0 0 .515-1.076A11.448 11.448 0 0 1 16 8a6 6 0 0 0-6-6ZM8.05 14.943a33.54 33.54 0 0 0 3.9 0 2 2 0 0 1-3.9 0Z"
                      clip-rule="evenodd"/>
            </svg>
            <span>Notifications</span>
        </a>

        <a href="#"
           class="flex items-center rounded-xl gap-2 px-2 py-1.5 text-sm font-medium text-slate-700 underline-offset-2 hover:bg-blue-700/5 hover:text-black focus-visible:underline focus:outline-none dark:text-slate-300 dark:hover:bg-blue-600/5 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0"
                 aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M7.84 1.804A1 1 0 0 1 8.82 1h2.36a1 1 0 0 1 .98.804l.331 1.652a6.993 6.993 0 0 1 1.929 1.115l1.598-.54a1 1 0 0 1 1.186.447l1.18 2.044a1 1 0 0 1-.205 1.251l-1.267 1.113a7.047 7.047 0 0 1 0 2.228l1.267 1.113a1 1 0 0 1 .206 1.25l-1.18 2.045a1 1 0 0 1-1.187.447l-1.598-.54a6.993 6.993 0 0 1-1.929 1.115l-.33 1.652a1 1 0 0 1-.98.804H8.82a1 1 0 0 1-.98-.804l-.331-1.652a6.993 6.993 0 0 1-1.929-1.115l-1.598.54a1 1 0 0 1-1.186-.447l-1.18-2.044a1 1 0 0 1 .205-1.251l1.267-1.114a7.05 7.05 0 0 1 0-2.227L1.821 7.773a1 1 0 0 1-.206-1.25l1.18-2.045a1 1 0 0 1 1.187-.447l1.598.54A6.992 6.992 0 0 1 7.51 3.456l.33-1.652ZM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                      clip-rule="evenodd"/>
            </svg>
            <span>Settings</span>
        </a>
    </div>

    <!-- Profile Menu  -->
    <div x-data="{ menuIsOpen: false }" class="mt-auto" x-on:keydown.esc.window="menuIsOpen = false">
        <button type="button"
                class="flex w-full cursor-pointer items-center rounded-xl gap-2 p-2 text-left text-white hover:bg-[#37B7C333] hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#37B7C333]"
                x-bind:class="menuIsOpen ? 'bg-blue-700/10' : ''" aria-haspopup="true"
                x-on:click="menuIsOpen = ! menuIsOpen" x-bind:aria-expanded="menuIsOpen">
            <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-7.webp"
                 class="size-8 object-cover rounded-xl" alt="avatar" aria-hidden="true"/>
            <div class="flex flex-col">
                <span class="text-sm font-bold text-white">Alex Martinez</span>
                <span class="w-32 overflow-hidden text-ellipsis text-xs md:w-36" aria-hidden="true">@alexmartinez</span>
                <span class="sr-only">profile settings</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                 stroke-width="2" class="ml-auto size-4 shrink-0 -rotate-90 md:rotate-0" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
            </svg>
        </button>

        <!-- menu -->
        <div x-cloak x-show="menuIsOpen"
             class="absolute bottom-20 right-6 z-20 -mr-1 w-48 border divide-y divide-slate-300 border-slate-300 bg-white  rounded-xl md:-right-44 md:bottom-4"
             role="menu" x-on:click.outside="menuIsOpen = false" x-on:keydown.down.prevent="$focus.wrap().next()"
             x-on:keydown.up.prevent="$focus.wrap().previous()" x-transition="" x-trap="menuIsOpen">

            <div class="flex flex-col py-1.5">
                <a href="{{route('plug.profile')}}" wire:navigate
                   class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-slate-700 underline-offset-2 hover:bg-blue-700/5 hover:text-black focus-visible:underline focus:outline-none"
                   role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                         class="size-5 shrink-0" aria-hidden="true">
                        <path
                            d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z"/>
                    </svg>
                    <span>Profile</span>
                </a>
            </div>

            <div class="flex flex-col py-1.5">
                <a href="#"
                   class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-slate-700 underline-offset-2 hover:bg-blue-700/5 hover:text-black focus-visible:underline focus:outline-none"
                   role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                         class="size-5 shrink-0" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.84 1.804A1 1 0 0 1 8.82 1h2.36a1 1 0 0 1 .98.804l.331 1.652a6.993 6.993 0 0 1 1.929 1.115l1.598-.54a1 1 0 0 1 1.186.447l1.18 2.044a1 1 0 0 1-.205 1.251l-1.267 1.113a7.047 7.047 0 0 1 0 2.228l1.267 1.113a1 1 0 0 1 .206 1.25l-1.18 2.045a1 1 0 0 1-1.187.447l-1.598-.54a6.993 6.993 0 0 1-1.929 1.115l-.33 1.652a1 1 0 0 1-.98.804H8.82a1 1 0 0 1-.98-.804l-.331-1.652a6.993 6.993 0 0 1-1.929-1.115l-1.598.54a1 1 0 0 1-1.186-.447l-1.18-2.044a1 1 0 0 1 .205-1.251l1.267-1.114a7.05 7.05 0 0 1 0-2.227L1.821 7.773a1 1 0 0 1-.206-1.25l1.18-2.045a1 1 0 0 1 1.187-.447l1.598.54A6.992 6.992 0 0 1 7.51 3.456l.33-1.652ZM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span>Settings</span>
                </a>
                <a href="#"
                   class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-slate-700 underline-offset-2 hover:bg-blue-700/5 hover:text-black focus-visible:underline focus:outline-none"
                   role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                         class="size-5 shrink-0" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span>Payments</span>
                </a>
            </div>

            <div class="flex flex-col py-1.5">
                <a href="#"
                   class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-slate-700 underline-offset-2 hover:bg-blue-700/5 hover:text-black focus-visible:underline focus:outline-none"
                   role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                         class="size-5 shrink-0" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
                              clip-rule="evenodd"/>
                        <path fill-rule="evenodd"
                              d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span>Sign Out</span>
                </a>
            </div>

        </div>
    </div>
</nav>

