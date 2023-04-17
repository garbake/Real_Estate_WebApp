<x-app-layout>

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
                                <a href="{{ $properties->DisplayImage_Url }}"  data-lightbox="propertyGallery" class=" bg-green-600 hover:bg-green-700 text-white rounded-full p-2"><i class="fa-solid fa-camera"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/2 md:w-1/2">
                        <div class="flex">
                              
                            
                            <div class="w-1/2 p-1">
                                <div class="group relative overflow-hidden">
                                    <img src="{{ $properties->DisplayImage_Url }}" alt="">
                                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                        <a href="{{ asset('assets/house.jpg') }}"  data-lightbox="propertyGallery" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full  p-2"><i class="fa-solid fa-camera"></i></a>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="w-1/2 p-1">
                                <div class="group relative overflow-hidden">
                                    <img src="{{ $properties->DisplayImage_Url }}" alt="">
                                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                        <a href="{{ asset('assets/house.jpg') }}" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full p-2"><i class="fa-solid fa-camera"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex ">
                            <div class="w-1/2 p-1">
                                <div class="group relative overflow-hidden">
                                    <img src="{{ $properties->DisplayImage_Url }}" alt="">
                                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                        <a href="{{ asset('assets/house.jpg') }}" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full p-2"><i class="fa-solid fa-camera"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="w-1/2 p-1">
                                <div class="group relative overflow-hidden">
                                    <img src="{{ $properties->DisplayImage_Url }}" alt="">
                                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                        <a href="{{ asset('assets/house.jpg') }}" class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full  p-2"><i class="fa-solid fa-camera"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end flex-->
            </div><!--end container fluid-->

            <div class="container md:mt-24 mt-16 ">
                <div class="md:flex">
                    <div class="lg:w-2/3 md:w-1/2 md:p-4 px-3">
                        <h4 class="text-2xl font-medium">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</h4>

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
                        <p class="text-slate-400 mt-4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <p class="text-slate-400 mt-4">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                    
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
                                            <span class="text-slate-400 text-sm">Days on Hously</span>
                                            <span class="font-medium text-sm">124 Days</span>
                                        </li>
    
                                        <li class="flex justify-between items-center mt-2">
                                            <span class="text-slate-400 text-sm">Price per sq ft</span>
                                            <span class="font-medium text-sm">$ 186</span>
                                        </li>
    
                                        <li class="flex justify-between items-center mt-2">
                                            <span class="text-slate-400 text-sm">Monthly Payment (estimate)</span>
                                            <span class="font-medium text-sm">$ 1497/Monthly</span>
                                        </li>
                                    </ul>
                                </div>
    
                            </div>

                            <div class="mt-12 text-center">
                                <h3 class="mb-6 text-xl leading-normal font-medium text-black dark:text-white">Have Question ? Get in touch!</h3>

                                <div class="mt-6">
                                    <a href="contact.html" class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md p-2"><i class="fa-regular fa-envelope mr-2 ml-2 "></i> Contact Agent</a> 
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
        })
        </script>
        
</x-app-layout>