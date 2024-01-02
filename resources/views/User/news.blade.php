  {{-- {/* start latest news */} --}}
  <section class="flex flex-col lg:px-24 bg-slate-100 p-1 pb-5" id="news">
    <div class="flex justify-center items-center pt-3">
        <h2 class="font-bold text-3xl"> <span class="text-green-400">Latest</span> News</h2>
    </div>
    <div class="sm:flex">
        @foreach($news_updates as $key => $news_update)

        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <div class="rounded-lg border">

                <div class="flex flex-row items-center">
                    <img src="{{ Storage::url($news_update->image) }}" alt=""
                        class="w-auto h-auto md:h-60" />
                </div>

                <div class="flex-1 md:text-center p-5 space-y-2 bg-white">
                    <h2 class="font-bold text-gray-600 text-center sm:text-left">
                        {{$news_update->headline}}
                    </h2>
                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="flex justify-center">
                            <img src="{{ Storage::url($news_update->image) }}" alt=""
                                class="h-6 w-6 rounded-full" />
                            <h1 class="text-gray-400 text-sm pl-2">{{$news_update->author}}</h1>
                        </div>
                        <h2 class="text-center text-sm text-green-400 sm:text-right">{{$news_update->date}}</h2>
                    </div>

                </div>
            </div>
        </div>
       @endforeach

        </div>
        <div class="flex justify-center items-center">
            <button href="#"
                class="p-2 px-8 mt-1 hidden sm:block text-center bg-green-500 text-white cursor-pointer rounded-full hover:bg-white hover:text-gray-800 hover:border hover:border-green-400">

                Read more...</button>
        </div>
    </div>

</section>
{{-- {{-- {/* end latest news */} --}}
