<?php

namespace Techenby\FathomTile;

use Illuminate\Console\Command;

class FetchDataFromFathomCommand extends Command
{
    protected $signature = 'dashboard:fetch-data-from-fathom-api';

    protected $description = 'Fetch fathom data for tile';

    public function handle(VeloApi $velo)
    {
        $this->info('Fetching Velo stations...');

        $myData = Http::get($endpoint)->json();

        MyStore::make()->setData($myData);

        $this->info('All done!');
    }
}
