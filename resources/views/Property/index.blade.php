<x-app-layout>


<body class="dark:bg-slate-100 ">
<section class="relative lg:py-24 py-16">
    <div class="container mx-auto px-4" >
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

        @foreach($properties as $property)
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                <img src="{{ $property->DisplayImage_Url}}" alt="" class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">

                <div class="absolute top-4 right-4 ml-4">
                    <a href="javascript:void(0)" class="like-btn bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 p-2"><i class="fa-solid fa-heart fa-lg"></i></a>
                </div>
                </div>
                    <div class="p-6">
                        <div class="pb-6">
                            <a href="{{ route('property.show', $property->id) }}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">{{$property->Name}}, </a>
                        </div>

                            <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center mr-5 ml-4">
                                    <i class="fa-solid fa-minimize text-2xl text-green-600"></i>
                                    <span class="ml-2">{{$property->Size}} sqf</span>
                                </li>

                                <li class="flex items-center mr-5 ml-4">
                                    <i class="fa-solid fa-bed text-2xl  text-green-600"></i>
                                    <span class="ml-2">{{$property->Number_Bathrooms}} Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="fa-solid fa-bath text-2xl  text-green-600"></i>
                                    <span class="ml-2">{{$property->Number_Bathrooms}} Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">${{$property->Price}} {{$property->Currency}}</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content--> 
        @endforeach
            

                    
        </div>
    </div>
</section>
</body>

</x-app-layout>