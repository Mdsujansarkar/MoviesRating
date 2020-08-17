<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public function render()
    {
        $searchReasult = [];
        if( strlen($this->search) >= 2){
            $searchReasult  = Http::withToken(config('services.tmdb.token'))
            ->get('http://api.themoviedb.org/3/search/movie?query=' . $this->search)
            ->json()['results'];
            
        }
        

        return view('livewire.search-dropdown',[
            'searchReasult' => collect($searchReasult)->take(7),
        ]);
    }
}
