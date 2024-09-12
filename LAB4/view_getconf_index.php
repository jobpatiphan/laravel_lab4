<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Conflicting Emotions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-2">
    <br>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Summary</h2>
</div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($diaryEntries->isEmpty())
                        <p>No diary entries found.</p>
                    @else
                        <table class="min-w-full table-auto border-collapse border border-gray-200 dark:border-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">ID</th>
                                    <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Date</th>
                                    <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Content</th>
                                    <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Emotion</th>
                                    <th class="px-4 py-2 border border-gray-200 dark:border-gray-700">Intensity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diaryEntries as $entry)
                                    <tr>
                                        <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">{{ $entry->id }}</td>
                                        <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">
                                            {{ \Carbon\Carbon::parse($entry->date)->format('Y-m-d') }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">
                                            {{ $entry->content }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">
                                            {{ $entry->emotion_name }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-200 dark:border-gray-700">
                                            {{ $entry->intensity }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
