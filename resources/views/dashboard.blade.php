<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kezdőlap szerkesztése') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    <h3 class="uppercase font-medium mb-5 text-xl">Galéria szerkesztése</h3>
                    <div>
                        <div class="flex flex-wrap gap-4 ">
                            @foreach ($images as $image)
                                <div class="flex-column shadow-lg rounded-md p-2">
                                    <img class=" w-48" src="{{ '/images/galery/' . $image->image }}" alt="{{ $image->image }}">
                                    <p>{{ $image->image }}</p>
                                    <form action="{{ route('image.delete', $image->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="w-6" type="submit">
                                            <img src="{{ asset('images/delete-icon.svg') }}" alt="törlés">
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
                                @if (session('success'))
                                    <p class="text-green-800 font-medium">{{ session('success') }}</p>
                                @endif
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

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    <h3 class="uppercase font-medium mb-5 text-xl">Vélemények szerkesztése</h3>
                    @foreach ($comments as $comment)
                        <div class="py-2">                        
                            <p>{{ $comment->comment }}</p>
                            <p>{{ $comment->author }}</p>
                            <form action="{{ route('comment.delete', $comment->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="w-6" type="submit">
                                    <img src="{{ asset('images/delete-icon.svg') }}" alt="törlés">
                                </button>
                            </form>
                        </div>
                    @endforeach
                    @if (session('comment-delete'))
                        <p class="text-green-800 font-medium">{{ session('comment-delete') }}</p>
                    @endif
                    <div class="w-3xs">
                        <p >Új komment feltöltése:</p>
                        <form class="flex flex-col" action="#" method="post">
                            <label for="comment">Komment</label>
                            <textarea class="w-96" name="comment" id="comment"></textarea>

                            <label for="name">Név</label>
                            <input type="text" name="name" id="name">

                            <button type="submit">Feltölt</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
