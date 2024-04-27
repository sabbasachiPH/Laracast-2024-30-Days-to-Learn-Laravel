# Day-14

## All You Need to Know About Pagination

> Today, we move on to the topic of pagination. Up until this point, we've been fetching every record from the database. But that's hardly appropriate in most situations. Let's fix that!

### For configuring Bootstrap Pagination

> In laravel default pagination is based on Tailwind CSS. To configure bootstrap first run the following command in terminal.

` php artisan vendor:publish`

-   select laravel pagination.
-   Goto your appservice provider file

` use Illuminate\Pagination\Paginator as Paginator;

    Paginator::useBootstrapFive();

`
