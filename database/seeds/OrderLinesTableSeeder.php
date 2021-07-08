<?php
use App\OrderLine;
use Illuminate\Database\Seeder;

class OrderLinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrderLine::class, 300)->create();
    }
    
}
