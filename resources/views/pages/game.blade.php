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
                    <div class="text-3xl mb-4 flex text-center">
                        <p> {{$question}} </p>
                    </div>
                    <div class="grid grid-cols-2 gap-2 justify-items-center">
                        @foreach($options as $option)
                            <form method="post" action="{{ route('game.check', $option) }}">
                                @csrf
                                <button type="submit" name="option"
                                        class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-40 rounded"
                                        value="{{ $option }}">
                                    {{ $option }}
                                </button>
                            </form>
                        @endforeach
                    </div>
                    <div>
                        <p>{{ session()->get('question_id') }}/20</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
