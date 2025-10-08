<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-gray-800 shadow-md sm:rounded-lg">
                <div class="p-6">
                    <table class="min-w-full divide-y divide-gray-700">
                        <thead class="bg-gray-900">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    No
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    Subject
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700 bg-gray-800">
                            @foreach ($subject as $index => $g)
                                <tr class="hover:bg-gray-700">
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $g->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $g->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
