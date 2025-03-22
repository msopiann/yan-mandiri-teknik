<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Hero Section') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    <div class="mb-6">
                        @foreach ($errors->all() as $error)
                            <div class="py-3 px-4 mb-2 w-full rounded-3xl bg-red-500 text-white">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.hero_sections.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                        <x-input-label for="heading" :value="__('Heading')" />
                        <x-text-input id="heading" class="block mt-1 w-full" type="text" name="heading"
                            :value="old('heading')" required autofocus />
                        <x-input-error :messages="$errors->get('heading')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="subheading" :value="__('Subheading')" />
                        <x-text-input id="subheading" class="block mt-1 w-full" type="text" name="subheading"
                            :value="old('subheading')" required />
                        <x-input-error :messages="$errors->get('subheading')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="background_image" :value="__('Background Image')" />
                        <input type="file" name="background_image" id="background_image"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 shadow-sm"
                            required accept="image/jpeg,image/png,image/jpg,image/webp" />
                        <p class="text-sm text-gray-500 mt-1">Max size: 2MB. Supported formats: JPEG, PNG, JPG, WEBP</p>
                        <x-input-error :messages="$errors->get('background_image')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="thumbnail_image" :value="__('Thumbnail Image')" />
                        <input type="file" name="thumbnail_image" id="thumbnail_image"
                            class="mt-1 block w-full p-2 border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            required accept="image/jpeg,image/png,image/jpg,image/webp" />
                        <p class="text-sm text-gray-500 mt-1">Max size: 2MB. Supported formats: JPEG, PNG, JPG, WEBP</p>
                        <x-input-error :messages="$errors->get('thumbnail_image')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="background_class" :value="__('Background Class (Optional)')" />
                        <x-text-input id="background_class" class="block mt-1 w-full" type="text"
                            name="background_class" :value="old('background_class')" />
                        <p class="text-sm text-gray-500 mt-1">CSS class for additional styling (empty for default)</p>
                        <x-input-error :messages="$errors->get('background_class')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="button_text" :value="__('Button Text (Optional)')" />
                        <x-text-input id="button_text" class="block mt-1 w-full" type="text" name="button_text"
                            :value="old('button_text')" />
                        <x-input-error :messages="$errors->get('button_text')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="button_link" :value="__('Button Link (Optional)')" />
                        <x-text-input id="button_link" class="block mt-1 w-full" type="text" name="button_link"
                            :value="old('button_link')" />
                        <p class="text-sm text-gray-500 mt-1">URL where the button should link to</p>
                        <x-input-error :messages="$errors->get('button_link')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="order" :value="__('Display Order')" />
                        <x-text-input id="order" class="block mt-1 w-full" type="number" min="1" name="order"
                            :value="old('order', 1)" />
                        <p class="text-sm text-gray-500 mt-1">Lower numbers appear first</p>
                        <x-input-error :messages="$errors->get('order')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('admin.hero_sections.index') }}"
                            class="font-bold py-4 px-6 bg-gray-500 text-white rounded-full mr-2">
                            Cancel
                        </a>
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Add New Hero Section
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>