        {{-- {/* start appointment */}  --}}
        <section class="flex flex-col lg:px-24 p-5 md:justify-center md:items-center" id="appointments">
            <div class="flex justify-center items-center pt-3">
                <h2 class="font-bold text-3xl text-center ">Make an <span class="text-green-400">Appointment</span></h2>
            </div>

            @if ($errors->any())
                {!! implode(
                    '',
                    $errors->all('
                                <div class="bg-red-100 md:w-3/4 xl:w-1/2 w-full border">
                                <div class=" text-red-500">:message</div>
                            </div>'),
                ) !!}
            @endif
            <form class="space-y-2 pt-5 md:w-3/4 xl:w-1/2" method="POST" action="{{ url('appointments') }}">
                @csrf
                <div class="space-y-2 sm:flex sm:space-x-2 sm:space-y-0">
                    <input type="text" name="full_name"
                        class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:border focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Full name" />

                    <input type="text" name="email"
                        class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Email Address" />
                </div>
                <div class="space-y-2 sm:flex sm:space-x-2 sm:space-y-0">
                    <input type="date" name="date_of_appointment"
                        class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                    <select type="text" name="doctor_name"
                        class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                        @foreach ($doctors as $doctor)
                            <option>--select doctor--</option>
                            <option value="{{ $doctor->doctor_name }}">
                                {{ $doctor->doctor_name }}--speciality--{{ $doctor->speciality }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="text" name="phone_number" placeholder="Phone Number"
                    class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                <textarea type="text" name="message" placeholder="Message to your doctor" rows="3"
                    class="shadow-sm bg-green-50 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500 dark:shadow-sm-light"></textarea>
                <div class="flex justify-center">

                    <button href="#"
                        class="p-2 px-8 mt-1 sm:block text-center bg-green-500 text-white cursor-pointer rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">
                        Make Appointment</button>
                </div>



            </form>
        </section>
        {{-- {{-- {/* end make appointment */} --}}
