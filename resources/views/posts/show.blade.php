<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>{{ $post->title }}</h1>
                    <p class="mt-3">{{ $post->content }}</p>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-5">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
