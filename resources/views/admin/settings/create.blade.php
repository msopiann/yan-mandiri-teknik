<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{error}}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="key" :value="__('Key')" />
                        <x-text-input id="key" class="block mt-1 w-full" type="text" name="key" :value="old('key')"
                            required />
                        <p class="mt-1 text-sm text-gray-500">Must be unique, used to retrieve settings programmatically
                        </p>
                        <x-input-error :messages="$errors->get('key')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="value" :value="__('Value')" />
                        <textarea id="value" name="value" rows="4"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>{{ old('value') }}</textarea>
                        <x-input-error :messages="$errors->get('value')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('admin.settings.index') }}"
                            class="font-bold py-4 px-6 bg-gray-500 text-white rounded-full mr-2">
                            Cancel
                        </a>
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Add New Setting
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>