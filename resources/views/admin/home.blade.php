<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-between rounded-lg bg-green-400 p-4 mx-5 shadow text-2xl text-white">
                <h1 class="font-bold pl-2">Dashboard</h1>
                <div class="space-y-1 h-12">
                    <div class="rounded-lg p-2 bg-red-600"><i class="fa fa-wallet fa-2x fa-inverse h-1"></i></div>
                    <div class="rounded-lg p-2 bg-yellow-400"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                    <div class="rounded-lg p-2 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                </div>
            </div>


            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-green-200 to-green-100 border-2  border-green-600 rounded-lg  p-5">
                        <div class="flex flex-row items-center">
                            <div class="space-y-1 h-12 flex-shrink">
                                <div class="rounded-lg p-2 bg-red-600"><i class="fa fa-wallet fa-2x fa-inverse h-1"></i></div>
                                <div class="rounded-lg p-2 bg-yellow-400"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                <div class="rounded-lg p-2 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">Doctors</h2>
                                <p class="font-bold text-3xl"><span class="text-gray-600"><i
                                            class="fas fa-caret-up">{{$doctors}}</i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-green-200 to-green-100 border-2  border-green-600 rounded-lg  p-5">
                        <div class="flex flex-row items-center">
                            <div class="space-y-1 h-12 flex-shrink">
                                <div class="rounded-lg p-2 bg-red-600"><i class="fa fa-wallet fa-2x fa-inverse h-1"></i></div>
                                <div class="rounded-lg p-2 bg-yellow-400"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                <div class="rounded-lg p-2 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">Appointments</h2>
                                <p class="font-bold text-3xl"><span class="text-gray-600"><i
                                            class="fas fa-caret-up">{{$appointments}}</i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-green-200 to-green-100 border-2  border-green-600 rounded-lg  p-5">
                        <div class="flex flex-row items-center">
                            <div class="space-y-1 h-12 flex-shrink">
                                <div class="rounded-lg p-2 bg-red-600"><i class="fa fa-wallet fa-2x fa-inverse h-1"></i></div>
                                <div class="rounded-lg p-2 bg-yellow-400"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                <div class="rounded-lg p-2 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">News Updates</h2>
                                <p class="font-bold text-3xl"><span class="text-gray-600"><i
                                            class="fas fa-caret-up">{{$news_updates}}</i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-admin-layout>
