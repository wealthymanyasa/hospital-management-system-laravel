<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 p-4 space-y-6">
        <div class="border-l-4 border-green-300 flex justify-between">
            <span class="p-4 uppercase font-semibold "> doctors </span>

            <div class="flex items-center">
                <a href="{{ route('admin.doctors.create') }}"
                    class="p-2 px-4  bg-green-500 text-white cursor-pointer rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                    Add Doctor</a>
            </div>
        </div>
        <div class="relative overflow-x-auto rounded-lg border border-green-300">

            <table id="doctorsTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs  text-gray-700 uppercase  border-b-2 border-green-300 dark:bg-green-700 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            room number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Speciality
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>




                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($doctors as $doctor)
                        <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">


                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $doctor->doctor_name }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $doctor->doctor_phone }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $doctor->room_number }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $doctor->speciality }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                <img src="{{ Storage::url($doctor->doctor_image) }}" class="rounded-lg flex justify-start h-10 w-auto" >
                            </td>





                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex space-x-2">
                                    <a href=" {{ route('admin.doctors.show', 4) }}"
                                        class="px-4 py-2 bg-indigo-500  text-white cursor-pointer rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-indigo-400">View</a>

                                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}"
                                        class="px-4 py-2 bg-green-500  text-white cursor-pointer rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">Edit</a>
                                    <form
                                        class="text-white px-4 py-2 bg-red-500 rounded-full cursor-pointer hover:bg-white hover:text-gray-800 hover:border hover:border-red-400"
                                        method="POST" action="{{ route('admin.doctors.destroy', $doctor->id) }}"
                                        onSubmit="return confirm('Are you sure you want to delete?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        @empty

                            <td scope="row max-w-[200px] " colspan="7"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-green-100 border-b dark:bg-gray-800 dark:border-green-700">
                                </p class="text-center">No doctors payments found</p>
                            </td>



                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

</x-admin-layout>
