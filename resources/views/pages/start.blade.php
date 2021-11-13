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
                        <p> Welcome to Trivia quiz game! </p>
                    </div>
                    <div class="text-center">
                        <p class="mb-4 ">This Trivia game has 20 questions about numbers and each of them has 4 answers.<br>
                            Only one answer is correct.<br>
                            The game ends in case of a wrong answer.<br>
                            Click button to start the quiz.<br>
                            Good luck!</p>
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                           href="/game/question">
                            Start</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
