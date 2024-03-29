# Day-10

## Model Factories

-   Eloquent is a ORM(Object Relational Mapper)

> ` php artisan tinker`  
> ` php artisan help make` > ` php artisan make:model Employer -f -m`  
> ` php artisan help  make:factory`  
> ` $table->foreignIdFor(App\Models\Employer::class);`  
> ` php artisan migrate:fresh` 
> ` App\Models\Job::factory(300)->create() `
