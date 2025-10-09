<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rólunk rész szerkesztése') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('successAbout'))
                        <p class="text-green-800 font-medium">{{ session('successAbout') }}</p>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-red-500 font-medium text-lg">{{ $error }}</p>
                        @endforeach
                    @endif

                    @foreach ($aboutme as $about)
                        <form action="{{ route('aboutmes.edit', $about->id) }}" method="post" class="flex flex-col">
                            @csrf
                            @method('PUT')

                            <textarea name="about" class="
                                w-64 sm:w-auto  h-60 my-4 px-4 py-2 border border-gray-300 rounded-lg
                                shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 
                                focus:border-blue-500 transition duration-200 resize-none">{{ $about->about }}</textarea>
                            <button type="submit" class="
                                w-40 px-5 py-2 mb-8 bg-gray-200 text-black hover:text-white 
                                font-medium rounded-lg shadow hover:bg-gray-600 focus:outline-none
                                focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200">Módosít</button>
                        </form>
                    @endforeach
                </div>

                <div class="flex flex-wrap gap-5 p-6">
                    @foreach ($aboutPhotos as $aboutPhoto)
                        <form action="{{ route('aboutPhoto.delete', $aboutPhoto->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="w-72">
                                <img src="{{ asset('images/about_photos/' . $aboutPhoto->path) }}" alt="képek rólunk">
                            </div>
                            <button type="submit" class="
                                w-40 px-5 py-2 mt-8 bg-gray-200 text-black hover:text-white 
                                font-medium rounded-lg shadow hover:bg-gray-600 focus:outline-none
                                focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200">Törlés</button>
                        </form>
                    @endforeach
                </div>

                <div class="my-10 p-6">
                    <p class="text-red-500">A szép kinézet megörzése érdekében max 3 képet érdemes feltölteni!</p>
                    <p class="font-bold my-5">Új kép feltöltése</p>
                    <form  action="{{ route('aboutPhoto.store') }}" method="post" class="flex flex-col" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="aboutP">
                        <button type="submit" class="
                            w-40 px-5 py-2 mt-8 bg-gray-200 text-black hover:text-white 
                            font-medium rounded-lg shadow hover:bg-gray-600 focus:outline-none
                            focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200">Feltölt</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
