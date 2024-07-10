<x-layout headerTitle='Create Job'>
    <form action="/store" method="POST">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create Job</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-label for='position' class='block text-sm font-medium leading-6 text-gray-900'>Position
                        </x-label>
                        <x-input placeholder='Web Developer' type='text' id='position' name='position' />
                        <x-form-error name='position' />
                    </x-form-field>

                    <x-form-field>
                        <x-label for='salary' class='block text-sm font-medium leading-6 text-gray-900'>Salary
                        </x-label>
                        <x-input placeholder='$50,000' type='text' id='salary' name='salary' />
                        <x-form-error name='salary' />
                    </x-form-field>
                    <x-form-field>
                        <x-label for="employer_id" class="block text-sm font-medium leading-6 text-gray-900">Salary
                        </x-label>

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
                        <x-form-error name='employer_id' />
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-submit-button>Save</x-submit-button>
        </div>
    </form>

</x-layout>