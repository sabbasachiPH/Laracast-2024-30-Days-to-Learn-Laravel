# Day-12

## Pivot Tables and BelongsToMany Relationships

> The next key Eloquent relationship type to understand is belongsToMany(). You will reach for this type whenever you're working with pivot tables. We'll use the example of jobs and tags to illustrate the basic concept.

-   `git push --set-upstream origin Class-12`

> `php artisan make:model Tag -mf` > `php artisan migrate:rollback && php artisan migrate`

-   To turn on Foreign Key cascade on delete feature on SQLite database creation  
    `PRAGMA foreign_keys = ON`

-   If the foreign key column is different then the convention then explicitly declare the foreign key column name

> -   `return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');`

-   `return $this->belongsToMany(Job::class, relatedPivotKey:'job_listing_key');`
