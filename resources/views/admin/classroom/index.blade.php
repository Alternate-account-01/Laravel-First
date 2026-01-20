<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden"
                x-data="{
                    openAddModal: false,
                    openEditModal: false,
                    openDeleteModal: false,
                    editUrl: '',
                    deleteUrl: '',
                    editData: {}
                }"
            >

                <x-admin.menuTable
                    search-route="{{ route('classroom.index') }}"
                    button-label="Add Classroom"
                    on-click="openAddModal = true"
                />

                <div x-show="openAddModal" x-transition class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">
                        <button @click="openAddModal = false" class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">✕</button>

                        @include('admin.classroom.create')
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Students</th>
                                <th class="px-4 py-3 text-right">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($classrooms as $classroom)
                                @php
                                    $dropdownId = 'dropdown-' . $classroom->id;
                                    $buttonId = $dropdownId . '-button';
                                @endphp

                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3">{{ $classroom->name }}</td>

                                    <td class="px-4 py-3">
                                        @foreach ($classroom->students as $student)
                                            {{ $student->nama }} <br>
                                        @endforeach
                                    </td>

                                    <td class="px-4 py-3 text-right">
                                        <button id="{{ $buttonId }}" data-dropdown-toggle="{{ $dropdownId }}"
                                            class="inline-flex items-center p-0.5 text-gray-500 hover:text-gray-800 dark:text-gray-400">
                                            <svg class="w-5 h-5" fill="currentColor">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>

                                        <div id="{{ $dropdownId }}" class="hidden z-10 w-44 bg-white rounded shadow dark:bg-gray-700">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">

                                                <li>
                                                    <button
                                                        @click.stop="
                                                            openEditModal = true;
                                                            editUrl = '{{ route('classroom.update', $classroom->id) }}';
                                                            editData = { name: '{{ $classroom->name }}' };
                                                        "
                                                        class="w-full text-left block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600"
                                                    >
                                                        Edit
                                                    </button>
                                                </li>

                                            </ul>

                                            {{-- <div class="py-1">
                                                <button
                                                    @click.stop="
                                                        deleteUrl = '{{ route('classroom.destroy', $classroom->id) }}';
                                                        openDeleteModal = true;
                                                    "
                                                    class="w-full text-left block py-2 px-4 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600"
                                                >
                                                    Delete
                                                </button>
                                            </div> --}}
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $classrooms->links() }}
                    </div>
                </div>

                @include('admin.classroom.delete')

                @include('admin.classroom.edit')

            </div>
        </div>
    </section>
</x-admin.layout>
