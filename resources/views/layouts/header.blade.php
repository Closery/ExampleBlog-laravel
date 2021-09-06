<header class="bg-white dark:bg-gray-800">
    <nav class="bg-white dark:bg-gray-800">
        <div class="container p-6 mx-auto">
            <a class="block text-2xl font-bold text-center text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#">Example Blog</a>
            
            <div class="flex items-center justify-center mt-6 text-gray-600 capitalize dark:text-gray-300">
                <a href="{{ route('homepage') }}" class="{{ (Route::currentRouteName() == 'homepage') ? 'text-gray-800 border-b-2 border-blue-500' : '' }} border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">home</a>
                
                <a href="{{ route('blog') }}" class="{{ (Route::currentRouteName() == 'blog') ? 'text-gray-800 border-b-2 border-blue-500' : '' }} border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">blog</a>

                <div class="flex items-center py-2 -mx-1 md:mx-0">
                    @auth
                        <button type="button" class="flex items-center focus:outline-none ml-10" aria-label="toggle profile dropdown">
                            <h3 class="mx-2 text-sm font-medium text-gray-700 dark:text-gray-200">{{ auth()->user()->name }}</h3>

                            <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                                <img src="https://www.pngarts.com/files/11/Avatar-PNG-Free-Download.png" class="object-cover w-full h-full" alt="avatar">
                            </div>
                        </button>
                        
                        <form action="{{ route('logout') }}" method="POST" class="ml-2">
                            @csrf
                            <button href="{{ route('login') }}" class="block w-1/2 px-3 py-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-blue-600 md:mx-2 md:w-auto">Logout</button>
                        </form>
                    @endauth

                    @guest
                        <a href="{{ route('login') }}" class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-blue-600 md:mx-2 md:w-auto">Login</a>
                        <a href="{{ route('register') }}" class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 md:mx-0 md:w-auto">Register</a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
</header>
