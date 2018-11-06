<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            factory(App\Application::class, 50)->create()->each(function ($p) {
                $p->save();
            });
        }
    }
}
