<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
   public $popularMovies;
   public $genres;
   public $nowPlayingMovies;

    public function __construct($popularMovies, $genres, $nowPlayingMovies)
    {
        $this->popularMovies = $popularMovies;
        $this->genres = $genres;
        $this->nowPlayingMovies = $nowPlayingMovies;
    }

    public function popularMovies()
    {
        return collect($this->popularMovies)->map(function($popularMovie){
            return collect($popularMovie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$popularMovie['poster_path'],
                'vote_average' => $popularMovie['vote_average'] * 10 . '%',
                'release_date'=> Carbon::parse($popularMovie['release_date'])->format('M d,Y')
            ]);
        });
        
    }
    public function genres()
    {
        return $this->genres;
    }
    public function nowPlayingMovies()
    {
        return collect($this->nowPlayingMovies)->map(function ($nowPlayingMovie) {
            return collect($nowPlayingMovie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $nowPlayingMovie['poster_path'],
                'vote_average' => $nowPlayingMovie['vote_average'] * 10 . '%',
                'release_date' => Carbon::parse($nowPlayingMovie['release_date'])->format('M d,Y')
            ]);
        });
        
    }
}
