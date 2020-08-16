@extends('layouts.main')
@section('content')
<div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{asset("image/parasite.jpg")}}" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">Insepta</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span class="ml-1">vote</span>
                    <span class="mx-2">|</span>
                    <span>Lorem ipsum</span>
                    <span class="mx-2">|</span>
                    <span>ipsum dolor sit amet</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam obcaecati et! Autem molestiae illum harum culpa, fugiat quo magnam suscipit voluptatibus amet, quod earum inventore mollitia. Eos error saepe corrupti incidunt perferendis cum provident consequatur adipisci! Fugiat fuga pariatur laboriosam quibusdam impedit earum molestias eaque illum atque natus excepturi suscipit, quae distinctio hic velit odio numquam praesentium quasi, incidunt harum. Asperiores sed aliquam mollitia voluptate quae quo laboriosam dicta alias voluptatibus sunt at minus porro, fugit optio maiores officia, consequuntur dolores. Reprehenderit officiis velit officia nostrum ad unde quos accusantium fuga natus. Aut eos minus reiciendis cupiditate, officia. Consectetur.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                      
                            <div class="mr-8">
                                <div>ipsum dolor sit amet</div>
                                <div class="text-sm text-gray-400">ipsum dolor sit amet</div>
                            </div>
                            <div class="mr-8">
                                <div>ipsum dolor sit amet</div>
                                <div class="text-sm text-gray-400">ipsum dolor sit amet</div>
                            </div>

                      
                    </div>
                </div>
                 <div class="mt-12">
                    <button class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                  </div>
                 
            </div>
        </div>
    </div> <!-- end movie-info -->
     <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>

           <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                
                    <div class="actor mt-8">
                        <a href="">
                            <img src="{{asset("image/parasite.jpg")}}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg hover:text-gray-300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                            	<span><svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg></span>
                            	<span>85%</span>
                            	<span>|</span>
                            	<span>Feb 20, 2020</span>
                            </div>
                        </div>
                         <div class="text-gray-400 text-sm">
							Action,thiller,comedy
                         </div>
                    </div>
                     <div class="actor mt-8">
                        <a href="">
                            <img src="{{asset("image/parasite.jpg")}}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg hover:text-gray-300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                            	<span><svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg></span>
                            	<span>85%</span>
                            	<span>|</span>
                            	<span>Feb 20, 2020</span>
                            </div>
                        </div>
                         <div class="text-gray-400 text-sm">
							Action,thiller,comedy
                         </div>
                    </div>
                    <div class="actor mt-8">
                        <a href="">
                            <img src="{{asset("image/parasite.jpg")}}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg hover:text-gray-300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                            	<span><svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg></span>
                            	<span>85%</span>
                            	<span>|</span>
                            	<span>Feb 20, 2020</span>
                            </div>
                        </div>
                         <div class="text-gray-400 text-sm">
							Action,thiller,comedy
                         </div>
                    </div>
                    <div class="actor mt-8">
                        <a href="">
                            <img src="{{asset("image/parasite.jpg")}}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg hover:text-gray-300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                            	<span><svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg></span>
                            	<span>85%</span>
                            	<span>|</span>
                            	<span>Feb 20, 2020</span>
                            </div>
                        </div>
                         <div class="text-gray-400 text-sm">
							Action,thiller,comedy
                         </div>
                    </div>
                    <div class="actor mt-8">
                        <a href="">
                            <img src="{{asset("image/parasite.jpg")}}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg hover:text-gray-300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                            	<span><svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg></span>
                            	<span>85%</span>
                            	<span>|</span>
                            	<span>Feb 20, 2020</span>
                            </div>
                        </div>
                         <div class="text-gray-400 text-sm">
							Action,thiller,comedy
                         </div>
                    </div>
            </div>
        </div> <!-- end popular-actors -->    
    @endsection

    

 