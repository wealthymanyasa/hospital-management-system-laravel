 {{-- {/* start our doctors */}  --}}
 <section class="flex flex-col lg:px-24" id="doctors">
    <div class="flex justify-center items-center">
        <h2 class="font-bold text-3xl">Our <span class="text-green-400">Doctors</span> </h2>
    </div>

    <div class="sm:flex">
        @foreach($doctors as $doctor)

        <div class="w-full md:w-1/2 xl:w-1/3 p-6">

            <div class="rounded-lg shadow-lg">

                <div class="flex flex-row items-center">
                    <img src="{{ Storage::url($doctor->doctor_image) }}" alt="image"

                    class="w-auto h-auto md:h-60 " />
                </div>

                <div class="flex-1 md:text-center p-5">
                    <h2 class="font-bold text-gray-600 text-center sm:text-left">Dr {{$doctor->doctor_name}}</h2>
                    <h2 class="  text-center text-green-400 sm:text-left">{{$doctor->speciality}}</h2>
                </div>

            </div>
        </div>


        @endforeach
    </div>

</section>
{{-- {{-- {/* end our doctors */} --}}
