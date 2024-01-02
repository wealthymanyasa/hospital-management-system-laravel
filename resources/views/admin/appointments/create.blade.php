<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="border-l-4 border-green-300 flex justify-between m-5">
        <span class="p-4 uppercase font-semibold "> Add appointment </span>

        <div class="flex items-center">
            <a href="{{ route('admin.appointments.index') }}"
                class="p-2 px-4  bg-green-500 text-white cursor-pointer rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                appointments Index</a>
        </div>
    </div>
    <section class="flex flex-col lg:px-24 p-5 md:justify-center md:items-center" id="appointments">
        <div class="flex justify-center items-center pt-3">
            <h2 class="font-bold text-3xl text-center ">Add an <span class="text-green-400">appointment</span></h2>
        </div>
        <form class="space-y-2 pt-5 md:w-3/4 xl:w-1/2" method="POST" action="{{ route('admin.appointments.store') }}"
            enctype="multipart/form-data">
            @csrf

            <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Full
                Name<span class="text-red-500">*</span></label>
            <input type="text" name="full_name"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:border border-green-200 focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Client Full Name" />
            @error('full_name')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Phone
                number<span class="text-red-500">*</span></label>
            <input type="number" name="phone_number"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg border-green-200 focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Client Phone Number" value="{{ old('appointment_phone') }}" />
            @error('phone_number')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Email
                Address<span class="text-red-500">*</span></label>
            <input type="email" name="email"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg border-green-200 focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Client Email Address" value="{{ old('email') }}" />
            @error('email')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="date_of_appointment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                of Appointment<span class="text-red-500">*</span></label>
            <input type="date" name="date_of_appointment" placeholder="Room Number"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 border-green-200 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
            @error('date_of_appointment')
                <h1 class="text-sm text-red-400">{{ $message }}</h1>
            @enderror

            <label for="doctor_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Doctor Name<span class="text-red-500">*</span></label>
            <select type="text" name="doctor_name"
                class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 border-green-200 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->doctor_name}}">Dr {{ $doctor->doctor_name }}--speciality--{{$doctor->speciality}}</option>
                @endforeach

            </select>
            @error('doctor_name')
                <h1 class="text-sm text-left text-red-400">{{ $message }}</h1>
            @enderror


            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Message<span class="text-red-500">*</span></label>
            <textarea type="text" name="message" cols="3"
                class="shadow-sm pt-4 bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 border-green-200 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light">Enter Message
            </textarea>
            <div class="flex ">
                @error('message')
                    <h1 class="text-sm text-red-400">{{ $message }}</h1>
                @enderror
            </div>
            <div class="flex justify-center items-center sm:justify-start">


                <button href="#"
                    class="p-2 px-8 mt-1  text-center bg-green-500 text-white cursor-pointer rounded-full border-green-200 hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                    Add appointment</button>
            </div>
            </div>

            {{--
            @if ($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif --}}
        </form>
    </section>



</x-admin-layout>
