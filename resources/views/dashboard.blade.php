<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    @if (auth()->user()->role_id == 1)
                        <h1 class="text-2xl text-violet-800">Received Messages</h1>
                        <div class="rounded-xl mt-5 border p-5 shadow-md w-9/12 bg-white">
                            <div class="flex w-full items-center justify-between border-b pb-3">
                                <div class="flex items-center space-x-3">
                                    <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                    </div>
                                    <div class="text-lg font-bold text-slate-700">Joe Smith</div>
                                </div>
                                <div class="flex items-center space-x-8">
                                    <button
                                        class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">id: 5</button>
                                    <div class="text-xs text-neutral-500">2023.03.20 10:24</div>
                                </div>
                            </div>

                            <div class="mt-4 mb-6">
                                <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus
                                    neque?</div>
                                <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum urna.
                                    Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi sed
                                    gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum
                                    consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat nec.
                                    Curabitur eget feugiat massa</div>
                            </div>

                            <div>
                                <span class="text-indigo-700">manager@company.uz</span>
                            </div>
                        </div>
                    @else
                        You are client
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
