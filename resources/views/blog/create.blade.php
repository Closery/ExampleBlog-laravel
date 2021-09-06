@extends('layouts.app')

@section('content')
    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 m-20">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Create a New Post</h2>
        
        <form action="{{ route('blog.create') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="title">Title</label>
                    <input id="title" name="title" type="text" value="{{ old('title') }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('title') border-red-500 @enderror">
                    
                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="body">Content</label>
                    <textarea name="body" id="body" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('body') border-red-500 @enderror">{{ old('body') }}</textarea>
                    
                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Post</button>
            </div>
        </form>
    </section>
@endsection