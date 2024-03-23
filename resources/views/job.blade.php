<x-layout>
    <x-slot:heading>
        Job Details Page for {{$job['title']}}
    </x-slot:heading>
    <h3 class="font-bold text-2xl"> {{$job['title']}} </h3>
    <h4 class="font-semibold text-xl mt-3">Salary:</h4>
    <p>This job will pay you <span class="font-semibold ">${{$job['salary']}}</span> per year.</p>
    <h4 class="font-semibold text-xl mt-3">Job Description:</h4>
    <p class="text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, consequatur
        impedit,
        repellendus amet corporis quisquam doloribus quos facere suscipit, eos voluptatem optio quia quam corrupti est
        expedita cum quibusdam necessitatibus labore esse hic dolorum rerum nesciunt obcaecati. Sapiente consectetur
        ipsum, dolorem possimus modi laboriosam repellendus optio at ex commodi beatae quos ut impedit nostrum minima,
        obcaecati non? Nesciunt delectus dolorum quas cum accusamus provident corporis fugit velit in voluptates hic
        modi voluptatibus ullam, omnis culpa sunt molestiae quaerat, impedit, laudantium similique dignissimos odio?
        Consectetur ut, fuga unde quia nihil doloremque sint explicabo magnam necessitatibus at inventore, sapiente eius
        quo. Laboriosam!</p>


</x-layout>