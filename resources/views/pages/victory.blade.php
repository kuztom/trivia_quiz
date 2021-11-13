<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-3xl mb-4 flex items-center justify-center">
                        <p> "You won! All answers are correct!" </p>
                    </div>
                    <div class="text-center">
                        <p class="mb-4 ">"20/20"<br>

                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                               href="/game/question">
                                Start over</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
