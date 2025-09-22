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
                    <h3 class="text-lg mb-5">Kategóriák törlése, szerkesztése és új hozzáadása:</h3>
                    @if (session('successCategoryEdit'))
                        <p class="text-green-800 font-medium">{{ session('successCategoryEdit') }}</p>
                    @endif
                    <div class="flex flex-col mb-5">
                        @if (session('successCategoryDelete'))
                            <p class="text-green-800 font-medium">{{ session('successCategoryDelete') }}</p>
                        @endif

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="text-red-500 font-medium text-lg">{{ $error }}</p>
                            @endforeach
                        @endif

                        <form action="{{ route('destroy.category') }}" method="post" class="flex flex-col mb-5">
                            @csrf
                            @method('DELETE')
                            <h3 class="text-red-500 font-medium">Kategória törlésénél a hozzá tartozó szolgáltatások is törlődnek!</h3>
                            @foreach ($categories as $category)
                                <div class="flex flex-row items-center border-b py-2">
                                    <input type="checkbox" name="deleted_ids[]" value="{{ $category->id }}" class="
                                            rounded-full text-red-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-red-500 mr-3">
                                    <p>{{ $category->name }}</p>
                                    
                                </div>
                            @endforeach
                            <button class="
                                w-40 px-5 py-2 mb-5 mt-2 bg-gray-200 text-black hover:text-white 
                                font-medium rounded-lg shadow hover:bg-red-600 focus:outline-none
                                focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition duration-200">Törlés</button>
                        </form>

                        <form action="{{ route('category.edit') }}" method="post" class="flex flex-col mb-5">
                            @foreach ($categories as $category)
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="categories[{{ $category->id }}][id]" value="{{ $category->id }}">
                                <input type="text" name="categories[{{ $category->id }}][name]" class="
                                    w-64 px-4 py-2 mb-2 border border-gray-300 rounded-lg shadow-sm
                                    focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                    transition duration-200" value="{{ $category->name }}" >
                            @endforeach    
                            <button class="
                                    w-40 px-5 py-2 mb-5 mt-2 bg-gray-200 text-black hover:text-white 
                                    font-medium rounded-lg shadow hover:bg-gray-600 focus:outline-none
                                    focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200">Módosítás</button>
                        </form>

                        <form action="{{ route('category.store') }}" method="post" class="flex flex-col mb-5">
                            @csrf
                            @method('PUT')
                            @if (session('successStoreCat'))
                                <p class="text-green-800 font-medium">{{ session('successStoreCat') }}</p>
                            @endif
                            <p>Új ketegória neve:</p>
                            <input type="text" name="name" class="
                                w-64 px-4 py-2 mb-2 border border-gray-300 rounded-lg shadow-sm
                                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                transition duration-200">
                            <button class="
                                w-40 px-5 py-2 mb-5 mt-2 bg-gray-200 text-black hover:text-white 
                                font-medium rounded-lg shadow hover:bg-gray-600 focus:outline-none
                                focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200">Feltöltés</button>
                        </form>

                        <form action="{{ route('service.store') }}" method="post" class="flex flex-col">
                            @csrf
                            @method('PUT')
                            <p>Új szolgáltatás feltöltése a kiválasztott kategóriához</p>
                                <select name="category_id" class="
                                    w-64 px-4 py-2 mb-2 border border-gray-300 rounded-lg shadow-sm
                                    focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                    transition duration-200">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <p>Új szolgáltatás neve</p>
                                <input type="text" name="name" class="
                                    w-64 px-4 py-2 mb-2 border border-gray-300 rounded-lg shadow-sm
                                    focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                    transition duration-200">
                                <p>Ára</p>
                                <input type="text" name="price" class="
                                    w-64 px-4 py-2 mb-2 border border-gray-300 rounded-lg shadow-sm
                                    focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                    transition duration-200">
                                <p>Mértékegység</p>
                                <input type="text" name="unit" class="
                                    w-64 px-4 py-2 mb-2 border border-gray-300 rounded-lg shadow-sm
                                    focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                    transition duration-200">
                                <button class="
                                    w-40 px-5 py-2 mb-5 mt-2 bg-gray-200 text-black hover:text-white 
                                    font-medium rounded-lg shadow hover:bg-gray-600 focus:outline-none
                                    focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200">Feltöltés</button>                         
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
