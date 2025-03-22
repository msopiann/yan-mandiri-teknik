<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="py-3 px-4 mb-4 w-full rounded-3xl bg-red-500 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.services.update', $service) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $service->name)" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description" rows="4"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            required>{{ old('description', $service->description) }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="icon" :value="__('Icon')" />

                        @if($service->icon)
                            <div class="mb-2">
                                <p class="text-sm text-gray-500">Current Icon:</p>
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }} Icon"
                                    class="w-12 h-12 mt-1">
                            </div>
                        @endif

                        <input id="icon" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="file"
                            name="icon" />
                        <p class="mt-1 text-sm text-gray-500">Upload a new icon image file (leave empty to keep current
                            icon)</p>
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="image" :value="__('Image (Optional)')" />

                        @if($service->image)
                            <div class="mb-2">
                                <p class="text-sm text-gray-500">Current Image:</p>
                                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }} Image"
                                    class="w-24 h-auto mt-1">
                            </div>
                        @endif

                        <input id="image" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="file"
                            name="image" />
                        <p class="mt-1 text-sm text-gray-500">Upload a new featured image (leave empty to keep current
                            image)</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="link" :value="__('Service Link (Optional)')" />
                            <x-text-input id="link" class="block mt-1 w-full" type="text" name="link"
                                :value="old('link', $service->link)" />
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="order" :value="__('Display Order')" />
                            <x-text-input id="order" class="block mt-1 w-full" type="number" name="order"
                                :value="old('order', $service->order)" />
                            <p class="mt-1 text-sm text-gray-500">Lower numbers display first</p>
                            <x-input-error :messages="$errors->get('order')" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <x-input-label for="button_text" :value="__('Button Text (Optional)')" />
                            <x-text-input id="button_text" class="block mt-1 w-full" type="text" name="button_text"
                                :value="old('button_text', $service->button_text)" />
                            <x-input-error :messages="$errors->get('button_text')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="button_link" :value="__('Button Link (Optional)')" />
                            <x-text-input id="button_link" class="block mt-1 w-full" type="text" name="button_link"
                                :value="old('button_link', $service->button_link)" />
                            <x-input-error :messages="$errors->get('button_link')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('admin.services.index') }}"
                            class="font-bold py-4 px-6 bg-gray-500 text-white rounded-full mr-2">
                            Cancel
                        </a>
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update Service
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>