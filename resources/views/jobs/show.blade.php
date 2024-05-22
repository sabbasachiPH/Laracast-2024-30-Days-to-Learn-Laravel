<x-layout>
    <x-slot:heading>
        Job Details Page for {{$job['title']}}
    </x-slot:heading>
    <h3 class="font-bold text-2xl"> {{$job->title}}</h3>
    <h4 class="font-semibold text-xl mt-3">Salary:</h4>
    <p>This job will pay you <span class="font-semibold ">${{$job->salary}}</span> per year.</p>
    <h4 class="font-semibold text-xl mt-3">Job Description:</h4>
    <p class="text-justify ">Lorem ipsum dolor cessitatibus at inventore, sapiente eius quo. Laboriosam!</p>

    <x-button href="/jobs/{{$job->id}}/edit"> Edit Job</x-button>


</x-layout>