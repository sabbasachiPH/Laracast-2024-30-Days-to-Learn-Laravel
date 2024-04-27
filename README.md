# Day-15

## Understanding Database Seeders

> What happens when we refresh our migrations, and then lose all of our records within the database? Do we have to manually run all of those factories again? Absolutely not. Instead, we can read for database seeders.

###

-   Import Job Model in JobSeeder file
    `use App\Models\Job;`

-   Generate data in jobseeder

` Job::factory(200)->create();`

-   Call JobSeeder from Database seeder

    `   $this->call(JobSeeder::class);`  
     `   php artisan migrate:fresh --seed`
