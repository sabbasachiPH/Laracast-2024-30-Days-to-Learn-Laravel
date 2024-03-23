<x-layout>
    <x-slot:heading>
        Job Listing Page
    </x-slot:heading>
    <h1 class="text-3xl">Wellcome to our Job Page. All available jobs are listed below.</h1>

    <table class="table-auto w-1/2 ">
        <thead>
            <tr>
                <th class="border-solid  border-2 border-black">sl</th>
                <th class="border-solid  border-2 border-black">Job Title</th>
                <th class="border-solid  border-2 border-black">Salary</th>
                <th class="border-solid  border-2 border-black">Details</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($jobs as $job)

            <tr>
                <td class="border-solid  border-2 border-black">{{$job['id']}}</td>
                <td class="border-solid  border-2 border-black">{{$job['title']}}</td>
                <td class="border-solid  border-2 border-black text-end">{{$job['salary']}}</td>
                <td class="border-solid  border-2 border-black text-center">
                    <a href="/job/{{$job['id']}}"
                        class="border-solid border-2 border-sky-500 bg-sky-500 px-5 text-white">See Details
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</x-layout>