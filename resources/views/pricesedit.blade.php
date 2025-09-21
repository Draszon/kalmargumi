<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Árak és szolgáltatások szerkesztése') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg mb-5">Kategóriák szerkesztése és új hozzáadása:</h3>
                    @foreach ($categories as $category)
                    <div class="flex flex-row">
                        <form action="{{ route('category.edit', $category->id) }}" method="post" class="flex flex-col">
                            @csrf
                            @method('PUT')
                            <input type="text" name="name" class="
                                w-64 px-4 py-2 border border-gray-300 rounded-lg shadow-sm
                                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                transition duration-200" value="{{ $category->name }}" >
                            <button class="
                                w-40 px-5 py-2 mb-5 mt-2 bg-gray-200 text-black hover:text-white 
                                font-medium rounded-lg shadow hover:bg-gray-600 focus:outline-none
                                focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200">Módosít</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg mb-5">Kategóriák szerkesztése és új hozzáadása:</h3>
                    
                    <div class="flex flex-row">
                        <form action="{{ route('category.edit', $category->id) }}" method="post" class="flex flex-col">
                            @foreach ($categories as $category)
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" class="
                                    w-64 px-4 py-2 border border-gray-300 rounded-lg shadow-sm
                                    focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                    transition duration-200" value="{{ $category->name }}" >
                                
                            @endforeach    
                            <button class="
                                    w-40 px-5 py-2 mb-5 mt-2 bg-gray-200 text-black hover:text-white 
                                    font-medium rounded-lg shadow hover:bg-gray-600 focus:outline-none
                                    focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200">Módosít</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
