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
                                    Nama
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    Brith Date
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    Grade
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    Email
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    Address
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700 bg-gray-800">
                            @foreach ($student as $index => $s)
                                <tr class="hover:bg-gray-700">
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $s->nama }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $s->date_of_birth }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $s->classroom->name}}</td>           
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $s->email }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-200">{{ $s->address }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
