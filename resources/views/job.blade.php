<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="front-bold text-lg">{{ $job['title'] }}</h2>
    
    <p>
        this job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>

