<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="border-l-4 border-green-300 flex justify-between m-5">
        <span class="p-4 uppercase font-semibold "> Add doctor </span>

        <div class="flex items-center">
            <a href="{{ route('admin.doctors.index') }}"
                class="p-2 px-4  bg-green-500 text-white cursor-pointer rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                Doctors Index</a>
        </div>
    </div>
    <section class="flex flex-col lg:px-24 p-5 md:justify-center md:items-center" id="appointments">
        <div class="flex justify-center items-center pt-3">
            <h2 class="font-bold text-3xl text-center ">Add a <span class="text-green-400">Doctor</span></h2>
        </div>
        <form class="space-y-2 pt-5 md:w-3/4 xl:w-1/2" method="POST" action="{{ route('admin.doctors.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div>

            </div>
            <label for="doctor_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor
                Name<span class="text-red-500">*</span></label>
            <input type="text" name="doctor_name"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:border border-green-200 focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Doctor Name" />
            @error('doctor_name')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="doctor_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor phone
                number<span class="text-red-500">*</span></label>
            <input type="number" name="doctor_phone"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg border-green-200 focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Phone Number" value="{{ old('doctor_phone') }}" />
            @error('doctor_phone')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="room_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor room
                number<span class="text-red-500">*</span></label>
            <input type="text" name="room_number" placeholder="Room Number"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 border-green-200 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
            @error('room_number')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="speciality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor
                speciality<span class="text-red-500">*</span></label>
            <select type="text" name="speciality"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 border-green-200 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                <option value="{{ old('speciality') }}">{{ old('speciality') }}</option>
                <option value="skin">Skin</option>
                <option value="heart">Heart</option>
                <option value="eye">Eye</option>
                <option value="nose">Nose</option>
            </select>
            @error('speciality')
                <h1 class="text-sm text-left text-red-400">{{ $message }}</h1>
            @enderror


            <label for="doctor_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor
                image<span class="text-red-500">*</span></label>
            <input type="file" name="doctor_image"
                class="shadow-sm pt-4 bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 border-green-200 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light">
            <div class="flex ">
                @error('doctor_image')
                    <h1 class="text-sm text-red-400">{{ $message }}</h1>
                @enderror
            </div>
            <div class="flex justify-center items-center sm:justify-start">


                <button href="#"
                    class="p-2 px-8 mt-1  text-center bg-green-500 text-white cursor-pointer rounded-full border-green-200 hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                    Add Doctor</button>
            </div>
            </div>

{{--
            @if ($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif --}}
        </form>
    </section>



</x-admin-layout>
