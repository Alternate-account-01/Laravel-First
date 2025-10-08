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
                                    Teacher Name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    Subject name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                    Phone Number
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
                            @foreach ($teacher as $teacher)
                             <tr class="hover:bg-gray-700">
                        <td class="px-6 py-4 text-sm text-gray-200">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 text-sm text-gray-200">{{ $teacher["name"] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-200">{{ $teacher->subjects->name }}</td>
                         <td class="px-6 py-4 text-sm text-gray-200">{{ $teacher["phone_number"] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-200">{{ $teacher["email"] }}</td>
                         <td class="px-6 py-4 text-sm text-gray-200">{{ $teacher["address"] }}</td>
                        </tr>

                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
