<x-app-layout>

<!-- <div class="rounded-3xl shadow-2xl">
  <div class="p-3 text-center sm:p-12">
    <p class="text-sm font-semibold uppercase tracking-widest text-pink-500">
      Qr Code
    </p>

    <h2 class="mt-6 text-3xl font-bold">
      Thanks for Sharing This Property!
    </h2>

    <div class="mt-8 inline-block visible-print text-center">
        {!! QrCode::size(100)->generate(Request::url()); !!}
        
    </div>
  </div>
</div> -->


<div id="popup" class="hidden fixed inset-0 z-50 overflow-auto bg-gray-500 bg-opacity-75 flex">
  <div class="relative p-8 bg-white w-full max-w-lg m-auto flex-col flex">
    <span class="absolute top-0 right-0 cursor-pointer" onclick="document.getElementById('popup').classList.add('hidden');">
      <i class="fa-solid fa-xmark fa-xl"></i>
    </span>
    <div class="rounded-3xl shadow-2xl">
      <div class="p-3 text-center sm:p-12">
        <p class="text-sm font-semibold uppercase tracking-widest text-teal-500">
          Qr Code
        </p>
        <h2 class="mt-6 text-3xl font-bold">
          Thanks for Sharing This Property!
        </h2>
        <div class="mt-8 inline-block visible-print text-center">
          {!! QrCode::size(100)->generate(Request::url()); !!}
        </div>
        <div class="flex flex-wrap gap-3 justify-center">
            <div>
                <a href="#"> <i class="fa-brands fa-instagram text-teal-500 fa-xl" ></i> </a>
            </div>

            <div>
            <a href="#"><i class="fa-regular fa-envelope  text-teal-500 fa-xl"></i></a>
            </div>

            <div>
            <a href="#"><i class="fa-brands fa-facebook  text-teal-500 fa-xl"></i></a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.min.js" integrity="sha512-U9dKDqsXAE11UA9kZ0XKFyZ2gQCj+3AwZdBMni7yXSvWqLFEj8C1s7wRmWl9iyij8d5zb4wm56j4z/JVEwS77g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<section class="relative md:pb-24 pb-16 mt-20">
            <div class="container-fluid">
                <div class="md:flex mt-4">
                    <div class="lg:w-1/2 md:w-1/2 p-1">
                        <div class="group relative overflow-hidden">
                            <img src="{{ $properties->DisplayImage_Url }}" alt="" class="h-full">
                            <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                <a href="{{ $properties->DisplayImage_Url }}"  data-lightbox="propertyGallery" class=" bg-teal-600 hover:bg-teal-700 text-white rounded-full p-2"><i class="fa-solid fa-camera"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/2 md:w-1/2">
                        <div class="flex">
                        @if ($images->count() > 0)        
                        @foreach ($images->take(2) as $image)
                            <div class="w-1/2 p-1">
                                <div class="group relative overflow-hidden">
                                    <img src="{{ $image->Image_Url }}" alt="" class="w-full h-64 object-cover" >
                                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                        <a href="{{ $image->Image_Url }}"  data-lightbox="propertyGallery" class="btn btn-icon bg-teal-600 hover:bg-teal-700 text-white rounded-full  p-2"><i class="fa-solid fa-camera"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <div class="flex ">
                        @if ($images->count() > 0)        
                        @foreach ($images->reverse()->take(2) as $image)
                            <div class="w-1/2 p-1">
                                <div class="group relative overflow-hidden">
                                    <img src="{{ $image->Image_Url }}" alt="" class="w-full h-64 object-cover">
                                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                        <a href="{{ $image->Image_Url }}" data-lightbox="propertyGallery" class="btn btn-icon bg-teal-600 hover:bg-teal-700 text-white rounded-full p-2"><i class="fa-solid fa-camera"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div><!--end flex-->
            </div><!--end container fluid-->

            <div class="container md:mt-24 mt-16 ">
                <div class="md:flex">
                    <div class="lg:w-2/3 md:w-1/2 md:p-4 px-3">
                        <h4 class="text-2xl font-medium"> {{ $properties->Name}},  {{$location->Street}} {{$location->Town}} {{$location->Parish}}</h4>

                        <ul class="py-6 flex items-center list-none">
                            <li class="flex items-center lg:mr-6 mr-4">
                            <i class="fa-solid fa-minimize text-2xl mr-2 ml-2 text-green-600"></i>
                                <span class="lg:text-xl">{{ $properties->Size}} sqf</span>
                            </li>

                            <li class="flex items-center lg:mr-6 mr-4">
                            <i class="fa-solid fa-bed text-2xl mr-2 ml-2 text-green-600"></i>
                                <span class="lg:text-xl">{{$properties->Number_Bedrooms}} Beds</span>
                            </li>

                            <li class="flex items-center lg:mr-6 mr-4">
                            <i class="fa-solid fa-sink text-2xl mr-2 ml-2  text-green-600"></i>
                                <span class="lg:text-xl">{{$properties->Number_Kitchen}} Kitchen</span>
                            </li>

                            <li class="flex items-center">
                            <i class="fa-solid fa-bath text-2xl mr-2 ml-2  text-green-600"></i>
                                <span class="lg:text-xl">{{$properties->Number_Bathrooms}} Baths</span>
                            </li>

                           
                        </ul>

                        <p class="text-slate-400">{{$properties->Description}}</p>
                    
                        <div class="w-full leading-[0] border-0 mt-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="lg:w-1/3 md:w-1/2 md:p-4 px-3 mt-8 md:mt-0">
                        <div class="sticky top-20">
                            <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700">
                                <div class="p-6">
                                    <h5 class="text-2xl font-medium">Price:</h5>
    
                                    <div class="flex justify-between items-center mt-4">
                                        <span class="text-xl font-medium">$ {{$properties->Price}} {{$properties->Currency}}</span>
    
                                        <span class="bg-green-600/10 text-green-600 text-sm px-2.5 py-0.75 rounded h-6">For Sale</span>
                                    </div>
    
                                    <ul class="list-none mt-4">
                                        <li class="flex justify-between items-center">
                                            <span class="text-slate-400 text-sm">Property Type</span>
                                            <span class="font-medium text-sm"> {{$propertytype->Name}}</span>
                                        </li>
    
                                        <li class="flex justify-between items-center mt-2">
                                            <span class="text-slate-400 text-sm">Favorites</span>
                                            <span class="font-medium text-sm">{{ $properties->Like_Count}}</span>
                                        </li>
                                    </ul>

                                    <div class="mt-4 text-center">
                                    <a href="#"  id="share-link" class="btn bg-transparent hover:bg-teal-600 border border-teal-600 text-teal-600 hover:text-white rounded-md p-2"><i class="fa-solid fa-qrcode mr-2 ml-2 "></i> Share Via QR Code</a> 
                                    
                                </div>
                                </div>
    
                            </div>

                            <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 mt-5">
                                <div class="p-6">
                                    <div class="flex items-start sm:gap-5">
                                        <div class="hidden sm:grid sm:h-40 sm:w-20 sm:shrink-0 sm:place-content-center"
                                        aria-hidden="true">
                                            <div class="flex items-center gap-2">
                                                <img src="{{ $properties->DisplayImage_Url }}" alt="" >
                                            </div>
                                        </div>

                                <div>
                                
                                <h3 class=" text-lg font-medium sm:text-xl">
                                    Agent: {{ $user->name }}
                                </h3>

                                <ul class="list-none mt-4">
                                        <li class="flex justify-between items-center">
                                            <span class="text-slate-400 text-sm"><i class="fa-solid fa-phone"></i> (876) 323-7863</span>
                                        </li>
    
                                        <li class="flex justify-between items-center mt-2">
                                            <span class="text-slate-400 text-sm"><i class="fa-regular fa-envelope"></i>  {{ $user->email }}</span>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <div class="mt-1 text-center">
                                    <a href="contact.html" class="btn bg-transparent hover:bg-teal-600 border border-teal-600 text-teal-600 hover:text-white rounded-md p-2"><i class="fa-regular fa-envelope mr-2 ml-2 "></i> Contact Agent</a> 
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section><!--end section-->

        

        <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });

        var shareLink = document.getElementById('share-link');
        var popup = document.getElementById('popup');
        shareLink.onclick = function(e) {
            e.preventDefault();
            popup.classList.remove('hidden');
        };
        popup.onclick = function(e) {
            if (e.target === popup) {
            popup.classList.add('hidden');
            }
        };
        </script>
        
</x-app-layout>