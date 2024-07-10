<x-layout headerTitle='Create Job'>
    <form action="/store" method="POST">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create Job</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="position" class="block text-sm font-medium leading-6 text-gray-900">Position</label>
                        <div class="mt-2 w-full">
                            <input placeholder="Web Developer" type='text' id="position" name="position" rows="3" class="block w-full rounded-md border-0 py-1.5 px-4
                                text-gray-900 shadow-sm ring-1 ring-inset
                                 ring-gray-300 placeholder:text-gray-400
                                 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                 sm:text-sm sm:leading-6" />
                        </div>
                        @error('position')
                        <span class='text-red-500 text-sm font-semibold'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-span-full">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2 w-full">
                            <input placeholder="$50,000" type='text' id="salary" name="salary" rows="3" class="block w-full rounded-md border-0 py-1.5 px-4
                                text-gray-900 shadow-sm ring-1 ring-inset
                                 ring-gray-300 placeholder:text-gray-400
                                 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                 sm:text-sm sm:leading-6" />
                        </div>
                        @error('salary')
                        <span class='text-red-500 text-sm font-semibold'>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2 w-full">
                            <select placeholder="select user" type='text' id="employer" name="employer_id" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 px-4
                                text-gray-900 shadow-sm ring-1 ring-inset
                                 ring-gray-300 placeholder:text-gray-400
                                 focus:ring-2 focus:ring-inset focus:ring-indigo-600
                                 sm:text-sm sm:leading-6">
                                @foreach ($employers as $employer)
                                <option value="{{$employer->id}}">{{ $employer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('employer_id')
                        <span class='text-red-500 text-sm font-semibold'>{{$message}}</span>

                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-layout>