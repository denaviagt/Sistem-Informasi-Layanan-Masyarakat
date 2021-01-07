<?php

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(DusunSeeder::class);
        $this->call(CitizenSeeder::class);
        $this->call(AparaturSeeder::class);
        $this->call(VisionSeeder::class);
        $this->call(MissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceProcedureSeeder::class);
        $this->call(ServiceRequirementSeeder::class);
    }
}