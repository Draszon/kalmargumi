<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kezdőlap szerkesztése') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    <h3 class="uppercase font-medium">Galéria szerkesztése</h3>
                    <div>
                        <div class="flex flex-wrap mt-5 gap-4 ">
                            @foreach ($images as $image)
                                <div class="flex-column shadow-lg rounded-md p-2">
                                    <img class=" w-48" src="{{ '/images/galery/' . $image->image }}" alt="{{ $image->image }}">
                                    <p>{{ $image->image }}</p>
                                    <form action="{{ route('image.delete', $image->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="w-6" type="submit">
                                            <img src="{{ asset('images/delete-icon.svg') }}" alt="">
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-5">
                            <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="galery-img" id="galery-img-upload">
                                <p class="mb-4">Max méret: 1MB</p>
                                <button class="bg-gray-200 px-5 py-2 rounded-md" type="submit">Kép feltöltése</button>
                                @error('galery-img')
                                    <p class="text-red-500 font-medium">{{ $message }}</p>
                                @enderror
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
