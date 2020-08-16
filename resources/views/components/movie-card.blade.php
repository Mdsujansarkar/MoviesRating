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
    @foreach($popularMovie['genre_ids'] as $gener)
	{{ $genres->get($gener)}} @if (! $loop -> last), @endif
    @endforeach
 </div>
</div>