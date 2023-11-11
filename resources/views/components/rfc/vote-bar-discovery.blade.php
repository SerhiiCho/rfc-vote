<div
    class="absolute bg-white dark:bg-gray-700 rounded-lg shadow-lg px-4 md:px-6 py-3 text-font text-sm bottom-16 lg:bottom-24 left-0 md:left-10"
    x-data="voteBarDiscovery"
    x-show="showDiscoveryPopup"
>
    <div class="flex gap-4 md:gap-6 items-center justify-center">
        <x-icons.information-circle class="w-6 h-6 animate-ping" />
        <span class="text-[.95rem]">Click the green or red part of the bar to cast your vote!</span>

        <button
            @click="hideDiscoveryPopup()"
            type="button"
            class="px-4 py-2 rounded-md bg-blue-50 dark:bg-black/20 outline outline-2 outline-blue-100 hover:outline-blue-200 dark:outline-white/20 dark:hover:outline-white/50 transition-all min-w-[80px]"
        >
            Got it!
        </button>
    </div>

    {{-- Pointing arrow leading to the bar below --}}
    <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 w-0.5 h-6 bg-white dark:bg-gray-600"></div>

    {{-- Overlay --}}
    <template x-teleport="body">
        <div
            class="fixed inset-0 bg-black/50 z-20"
            x-show="showDiscoveryPopup"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        ></div>
    </template>
</div>
