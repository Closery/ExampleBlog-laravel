@extends('layouts.app')

@section('content')

    @if (auth()->user())
        <a href="{{ route('blog.create') }}" class="max-w-2xl mx-auto m-10 flex justify-end">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                Create a New Post
            </button>
        </a>
    @endif

    @forelse ($posts as $post)
        <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 m-10">
            <img class="object-cover w-full h-64" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">

            <div class="p-6">
                <div>
                    <span class="flex text-xs font-medium text-blue-600 uppercase dark:text-blue-400">
                        <div>
                            {{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}
                        </div>

                        <div class="mx-2">−</div>

                        @if (auth()->user())
                            <div class="flex w-20 justify-between">
                                @if (!$post->isLikedBy(auth()->user()))
                                    <form action="{{ route('blog.likePost', $post->id) }}" method="POST">
                                        @csrf
                                        <button>🖤</button>
                                    </form>
                                @else
                                    <form action="{{ route('blog.unlikePost', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button>❤️</button>
                                    </form>
                                @endif                            
                            </div>
                        @endif
                    </span>
                    <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:text-gray-600 hover:underline">
                        {{ $post->title }}
                    </a>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ $post->body }}
                    </p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <img class="object-cover h-10 rounded-full" src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60" alt="Avatar">
                            <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">
                                {{ $post->user->username }}
                            </a>
                        </div>
                        <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 m-10">
            No Blog Posts
        </div>
    @endforelse

    <div class="max-w-2xl mx-auto m-10">
        {{ $posts->links() }}
    </div>
@endsection