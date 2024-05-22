# Day-17

## Always Validate. Never Trust the User.

> About This Episode
> Published Apr 5th, 2024

> So far, we've taken the happy path. But that just won't do in real life. No we must always assume that the user is malicious. For this reason, both client and server-side validation is a must.

###

-   How to make a reusable component tailwind

````
    <a href="/jobs/create"
        class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
        Create Job
    </a>
```
- To convert the above one to a reusable one

```
 <a {{$attributes->merge(['class'=> 'inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300'])}}
 > {{$slot}} </a>

```


```    <x-button href="/jobs/create">Create Job</x-button>
````
