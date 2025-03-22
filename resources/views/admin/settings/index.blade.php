<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Settings') }}
            </h2>
            <a href="{{route('admin.settings.create')}}"
                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                @forelse ($settings as $setting)
                    <div class="item-card flex flex-row justify-between items-center">
                        <div>
                            <strong>{{ $setting->name }}</strong>
                            <p class="text-gray-500">{{ Str::limit($setting->value, 50) }}</p>
                        </div>
                        <div class="flex flex-row items-center gap-x-3">
                            <a href="{{ route('admin.settings.edit', $setting) }}"
                                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.settings.destroy', $setting) }}" method="POST">
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
                    {{ $settings->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>