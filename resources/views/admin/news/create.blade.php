<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="border-l-4 border-green-300 flex justify-between m-5">
        <span class="p-4 uppercase font-semibold "> Add News Update </span>

        <div class="flex items-center">
            <a href="{{ route('admin.news-updates.index') }}"
                class="p-2 px-4  bg-green-500 text-white cursor-pointer rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                News Updates</a>
        </div>
    </div>
    <section class="flex flex-col lg:px-24 p-5 md:justify-center md:items-center" id="appointments">
        <div class="flex justify-center items-center pt-3">
            <h2 class="font-bold text-3xl text-center ">Add a <span class="text-green-400">news update</span></h2>
        </div>
        <form class="space-y-2 pt-5 md:w-3/4 xl:w-1/2" method="POST" action="{{ route('admin.news-updates.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div>

            </div>
            <label for="headline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">News
                Headline<span class="text-red-500">*</span></label>
            <input type="text" name="headline"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:border border-green-200 focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="headline" value="{{old('headline')}}"/>
            @error('headline')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author
                <span class="text-red-500">*</span></label>
            <input type="text" name="author"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg border-green-200 focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Author Name" value="{{ old('author') }}" />
            @error('author')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                <span class="text-red-500">*</span></label>
            <input type="date" name="date"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg border-green-200 focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="News Date" value="{{ old('date') }}" />
            @error('date')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">News Details<span class="text-red-500">*</span></label>
            <textarea type="text" name="details" placeholder="details" cols="3"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 border-green-200 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
                {{ old('details')}}
            </textarea>
            @error('details')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror



            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Image<span class="text-red-500">*</span></label>
            <input type="file" name="image"
                class="shadow-sm pt-4 bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 border-green-200 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light">
            <div class="flex ">
                @error('image')
                    <h1 class="text-sm text-red-400">{{ $message }}</h1>
                @enderror
            </div>
            <div class="flex justify-center items-center sm:justify-start">


                <button href="#"
                    class="p-2 px-8 mt-1  text-center bg-green-500 text-white cursor-pointer rounded-full border-green-200 hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                    Add News</button>
            </div>
            </div>


            {{-- @if ($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif --}}
        </form>
    </section>



</x-admin-layout>
