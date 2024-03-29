# Day-11

## Two Key Eloquent Relationship Types

> For day 11, we'll focus exclusively on two Eloquent relationship types: belongsTo() and hasMany(). As you'll quickly find, these two will take you a very, very long way.

-   `App\Models\Job::factory(300)->create()`
-   Eloquent is a ORM(Object Relational Mapper)
-   ` git push --set-upstream origin class-11`
    > ` php artisan tinker`  
    > ` $job = App\Models\Job::first();  `  
    > ` $job->employer->name; `  
    > ` $employer = App\Models\Employer::first();`  
    > ` php artisan migrate:fresh` > `App\Models\Job::factory(300)->create()`
