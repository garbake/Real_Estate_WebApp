<x-dashboard-layout>
    
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Dashboard
                    </h2>
                    
                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                            <i class="fa-solid fa-users-viewfinder text-orange-600"></i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Total Agents
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $totalAgents }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                            <i class="fa-solid fa-user-group text-green-600"></i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Total Customers
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $totalCustomers }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                            <i class="fa-solid fa-house text-blue-600"></i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Total Properties
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $totalProperties }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Pending contacts
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    35
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4  sm:mt-0 sm:flex-row sm:items-center justify-end">

                      <label class=" rounded-lg border border-gray-200 bg-white px-5 py-3 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:ring cursor-pointer">
                        <span class="text-sm font-medium">Import Property</span>
                        <i class="fa-solid fa-file-csv"></i>
                      </label>
                    </form>

                        <button class="block rounded-lg bg-teal-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-teal-700 focus:outline-none focus:ring"
                        type="button">
                        Add Property
                        </button>
                    </div>


            <div class="w-full overflow-hidden rounded-lg shadow-xs border">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                    <th class="px-4 py-3">#</th>
                      <th class="px-4 py-3">Property</th>
                      <th class="px-4 py-3">Price</th>
                      <th class="px-4 py-3">Type</th>
                      <th class="px-4 py-3">Date Added</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach($properties as $property)
                    <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-100">
                    <td class="px-4 py-3 text-sm">
                        <b>{{ $loop->iteration }}</b>
                      </td>  
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-t-none"
                              src="{{ $property->DisplayImage_Url}}"
                              alt=""
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">{{$property->Name}}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Agent: paul
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        $ {{$property->Price}} {{$property->Currency}}
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          House
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      {{\Carbon\Carbon::parse($property->created_at)->format('d/m/Y')}}
                      </td>

                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                        <a href="#" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                            <i class="fa-regular fa-eye text-green-500 fa-xl  hover:text-green-600"></i>
                          </a>

                          <a href="{{route('property.edit', $property->id)}}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                            <i class="fa-regular fa-pen-to-square text-blue-500 fa-xl hover:text-blue-600"></i>
                          </a>
                          <!-- <form action="{{ route('property.destroy' , $property->id) }}" method="POST">
                            @csrf
                            @method('DELETE') -->
                            <button @click="openModal" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete" type="submit" >
                              <i class="fa-solid fa-trash-can text-red-500 fa-xl hover:text-red-600"></i>
                            </button>

                     
                            <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="fixed inset-0 z-30 flex bg-black-50  bg-black bg-opacity-5 items-end sm:items-center sm:justify-center">
                              <!-- Modal -->
                              <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal" @keydown.escape="closeModal"
                                class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                                role="dialog"
                                id="modal"
                              >
                                <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
                                <header class="flex justify-end">
                                  <button
                                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                                    aria-label="close"
                                    @click="closeModal"
                                  >
                                    <svg
                                      class="w-4 h-4"
                                      fill="currentColor"
                                      viewBox="0 0 20 20"
                                      role="img"
                                      aria-hidden="true"
                                    >
                                      <path
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                      ></path>
                                    </svg>
                                  </button>
                                </header>
                                <!-- Modal body -->
                                <div class="mt-4 mb-6">
                                  <!-- Modal title -->
                                  <p
                                    class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300"
                                  >
                                    DELETE PROPERTY
                                  </p>
                                  <!-- Modal description -->
                                  <p class="text-sm text-gray-700 dark:text-gray-400">
                                    Are you sure you want to delete this property?
                                  </p>
                                </div>
                                <footer
                                  class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800"
                                >
                                  <a
                                    @click="closeModal"
                                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-black text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                                  >
                                    Cancel
                                  </a>
                                  <form action="{{ route('property.destroy' , $property->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button
                                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-purple" type="submit"
                                  >
                                    Delete
                                  </button>
                                  </form>
                                </footer>
                              </div>
                            </div>

















                          </form>
                        </div>
                      </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            
                
</x-dashboard-layout>
