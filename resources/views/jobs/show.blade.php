<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p class="mt-4 mb-4">
        This job pays {{ $job->salary }} per year.
    </p>
    <p>
        <a href="/jobs"><button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</button></a>
        @can('edit', $job)    
            <a href="/jobs/{{ $job->id }}/edit"><button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button></a>
        @endcan
    </p>
</x-layout>