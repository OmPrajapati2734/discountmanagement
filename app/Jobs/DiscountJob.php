<?php

namespace App\Jobs;

use App\Models\Discount;
use App\Models\Products;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class DiscountJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */ 

     protected $products; 
    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
       $discounts =[[ 
        'product_id'=>$this->products->id,
        'code' => 'ENDSEASON',
        'percentage' => '10.0',
        'min_amount' => "100",
        'expiry_date' => now()->addMonths(1),
        'status' => 'active'
       ],[
        'product_id'=>$this->products->id,
        'code' => 'BLACKFRIDAY',
        'percentage' => '15.0',
        'min_amount' => '200',
        'expiry_date' => now()->addMonths(2),
        'status' => 'active'
       ],[
        'product_id'=>$this->products->id,
        'code' => 'BLACKFRIDAY',
        'percentage' => '20.0',
        'min_amount' => '500',
        'expiry_date' => now()->addMonths(3),
        'status' => 'active'
       ]];
        
        $dis = DB::table('discounts')->insert($discounts);
       }
    } 
