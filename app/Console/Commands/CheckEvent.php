<?php

namespace App\Console\Commands;

use App\Event;
use Illuminate\Console\Command;

class CheckEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Event Daily';

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
     * @return mixed
     */
    public function handle()
    {
        date_default_timezone_set('Asia/Jakarta');

        $now = date('Y-m-d H:i:s');
        $event = Event::where('date','<',$now)->get();
        foreach($event as $e){
            $e->isDone = true;
            $e->save();
        }
        
    }
}
