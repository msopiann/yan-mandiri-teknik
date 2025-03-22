<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Hero Sections') }}
            </h2>
            <a href="{{route('admin.hero_sections.create')}}"
                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                @forelse ($hero_sections as $hero_section)
                    <div class="item-card flex flex-row justify-between items-center">
                        <div class="flex flex-col flex-1">
                            <h3 class="text-lg font-semibold">{{ $hero_section->heading }}</h3>
                            <p class="text-sm text-gray-600">{{ $hero_section->subheading }}</p>
                            <div class="mt-2">
                                <strong class="text-sm">Order:</strong> <span>{{ $hero_section->order }}</span>
                            </div>
                            <div class="flex md:hidden flex-row items-center gap-x-3 mt-2">
                                <a href="{{ route('admin.hero_sections.edit', $hero_section) }}"
                                    class="font-bold py-1 px-2 bg-indigo-700 text-white rounded-full">
                                    Edit
                                </a>
                                <form action="{{ route('admin.hero_sections.destroy', $hero_section) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-bold py-1 px-2 bg-red-700 text-white rounded-full">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center gap-3 mr-4">
                            <!-- Background Image Preview -->
                            <div class="bg-gray-200 rounded-md w-16 h-16 overflow-hidden mb-2">
                                <img src="{{ asset('storage/' . $hero_section->background_image) }}" alt="Background Image"
                                    class="object-cover w-full h-full">
                            </div>

                            <!-- Thumbnail Image Preview -->
                            <div class="bg-gray-200 rounded-md w-16 h-16 overflow-hidden">
                                <img src="{{ asset('storage/' . $hero_section->thumbnail_image) }}" alt="Thumbnail Image"
                                    class="object-cover w-full h-full">
                            </div>
                        </div>
                        <div class="hidden md:flex flex-row items-center gap-x-3">
                            <a href="{{ route('admin.hero_sections.edit', $hero_section) }}"
                                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.hero_sections.destroy', $hero_section) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>Empty Data</p>
                @endforelse

                <div class="mt-4">
                    {{ $hero_sections->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>