<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use MarkSitko\LaravelUnsplash\UnsplashFacade as Unsplash;

class UnsplashRandomPhotoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unsplash:random';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get random photo from unsplash';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $randomPhoto = Unsplash::randomPhoto()
                        ->orientation('landscape')
                        ->term('photography')
                        ->term('travel')
                        ->store(null, 'full');
    }
}
