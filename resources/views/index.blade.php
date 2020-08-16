@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Actors</h2>

           <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $popularMovie)
                    <div class="actor mt-8">
                        <a href="">
                            <img src="{{'https://image.tmdb.org/t/p/w500/'.$popularMovie['poster_path']}}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg hover:text-gray-300">{{$popularMovie['title']}}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                            	<span><svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"></path></g></svg></span>
                            	<span>{{$popularMovie['vote_average'] * 10 . '%'}} </span>
                            	<span>|</span>
                            	<span>{{ \Carbon\Carbon::parse($popularMovie['release_date'])->format('M d,Y')}}</span>
                            </div>
                        </div>
                         <div class="text-gray-400 text-sm">
							Action,thiller,comedy
                         </div>
                    </div>
                @endforeach
            </div>
        </div> <!-- end popular-actors -->
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
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
        </div>
    </div>
@endsection