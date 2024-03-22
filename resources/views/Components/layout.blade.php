<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <x-nav-link href="/">Home</x-nav-link>
    <x-nav-link href="/about" style="color: green; font-size: 24px">About</x-nav-link>
    <x-nav-link href="/contact">Contact</x-nav-link>
    {{-- Alaternative way for navigation bar --}}
    {{-- <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav> --}}

    {{$slot}}
    {{--
    <?php //echo $slot;?> --}}
</body>

</html>