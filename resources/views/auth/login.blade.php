@extends('layouts.app')

@section('content')
    <section class="flex flex-col max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 md:flex-row m-20">
        <div class="md:flex md:items-center md:justify-center md:w-1/2 md:bg-gray-700 md:dark:bg-gray-800">
            <div class="px-6 py-6 md:px-8 md:py-0">
                <h2 class="text-lg font-bold text-gray-700 dark:text-white md:text-gray-100">Welcome to <span class="text-blue-600 dark:text-blue-400 md:text-blue-300">Example Blog</span></h2>
                
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 md:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur obcaecati odio</p>
            </div>
        </div>

        <div class="flex items-center justify-center pb-6 md:py-0 md:w-1/2 m-10">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">    
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email Address</label>
                        <input id="emailAddress" name="email" type="email" value="{{ old('email') }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('email') border-red-500 @enderror">
                    
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                        <input id="password" name="password" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring @error('password') border-red-500 @enderror">
                    
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
    
                <div class="flex justify-end mt-6">
                    <button class="w-full px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Login</button>
                </div>
            </form>
        </div>
    </section>
@endsection