<?php

namespace Techenby\FathomTile;

use Livewire\Component;

class FathomTileComponent extends Component
{
    public $position;


    public function mount(string $position)
    {
        $this->position = $position;
    }


    public function render()
    {
        return view('dashboard-skeleton-tile::tile', [
            'myData' => FathomStore::make()->getData(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.fathom.refresh_interval_in_seconds') ?? 60,

        ]);
    }
}
