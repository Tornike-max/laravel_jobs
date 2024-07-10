<x-layout headerTitle="Jobs Listing">
    <div class="space-y-2 w-full">

        @foreach ($jobs as $job)
        <div class="text-md font-semibold">{{$job->employer->name}}</div>
        <a class="block border-2 border-gray-200 rounded-md p-4" href="/jobs/{{$job->id}}">
            <strong>{{ $job->position }}:</strong> Pays {{$job->salary}} per year.
        </a>
        @endforeach
    </div>

    <div class="my-4">{{ $jobs->links() }}</div>

</x-layout>