<x-layout headerTitle='Create Job'>
    <form action="/register" method="POST">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Register</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-label for='name' class='block text-sm font-medium leading-6 text-gray-900'>Name
                        </x-label>
                        <x-input placeholder='John Doe' type='text' id='name' name='name' />
                        <x-form-error name='name' />
                    </x-form-field>

                    <x-form-field>
                        <x-label for='email' class='block text-sm font-medium leading-6 text-gray-900'>Email
                        </x-label>
                        <x-input placeholder='johnDoe@example.com' type='email' id='email' name='email' />
                        <x-form-error name='email' />
                    </x-form-field>

                    <x-form-field>
                        <x-label for='password' class='block text-sm font-medium leading-6 text-gray-900'>Password
                        </x-label>
                        <x-input placeholder='Enter your password' type='password' id='password' name='password' />
                        <x-form-error name='password' />
                    </x-form-field>

                    <x-form-field>
                        <x-label for='password-confirmation' class='block text-sm font-medium leading-6 text-gray-900'>
                            Confirm Password
                        </x-label>
                        <x-input placeholder='Confirm password' type='password' id='password-confirm'
                            name='password_confirmation' />
                        <x-form-error name='password' />
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