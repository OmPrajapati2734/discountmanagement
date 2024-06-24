<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckDiscountExpiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-discount-expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Discount Expired';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentDate = Carbon::parse(now())->format('Y-m-d'); 
        Discount::where('expiry_date','LIKE',$currentDate.'%')->update(['status'=>'active']);
    }
}
