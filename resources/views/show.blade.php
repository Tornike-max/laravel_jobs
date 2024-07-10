<x-layout headerTitle="{{ $job->position }}">

    <p>This is the <strong>{{ $job['position'] }}</strong> position and salary is <strong>{{ $job['salary'] }}</strong>
    </p>

    <div class="my-4 flex items-center gap-4">
        <form method="POST" action="/destroy/{{$job->id}}">
            @csrf
            @method('delete')
            <button type="submit"
                class="py-2 px-4 font-semibold cursor-pointer rounded-lg border-2 shadow-md bg-none hover:text-slate-100 hover:bg-red-500 duration-150 transition-all">
                Delete
            </button>
        </form>
        <a href="/edit/{{$job->id}}"
            class="py-2 px-4 font-semibold cursor-pointer rounded-lg border-2 shadow-md bg-none hover:text-slate-100 hover:bg-slate-900 duration-150 transition-all">
            Edit
        </a>
    </div>
</x-layout>