<x-admin.layout>
  <x-slot:judul>{{ $title }}</x-slot:judul>

  <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">

      <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden"
        x-data="{
          openAddModal: false,
          openDeleteModal: false,
          openEditModal: false,
          deleteUrl: '',
          editUrl: '',
          editData: {}
        }"
      >

        <x-admin.menuTable search-route="{{ route('guardians.index') }}" button-label="Add Guardian" on-click="openAddModal = true" />

        <div x-show="openAddModal" x-transition class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
          <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">
            <button @click="openAddModal = false"
              class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">✕</button>

            @include('admin.guardian.create')
          </div>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">nama</th>
                <th class="px-4 py-3">Job</th>
                <th class="px-4 py-3">Phone</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Address</th>
                <th class="px-4 py-3 text-right">Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($guardian as $guardian)
                @php
                  $dropdownId = 'guardian-dropdown-' . $guardian->id;
                  $buttonId = $dropdownId . '-button';
                @endphp

                <tr class="border-b dark:border-gray-700">
                  <td class="px-4 py-3">{{ $loop->iteration }}</td>
                  <td class="px-4 py-3">{{ $guardian->nama }}</td>
                  <td class="px-4 py-3">{{ $guardian->job }}</td>
                  <td class="px-4 py-3">{{ $guardian->phone_number }}</td>
                  <td class="px-4 py-3">{{ $guardian->email }}</td>
                  <td class="px-4 py-3">{{ $guardian->address }}</td>

                  <td class="px-4 py-3 flex items-center justify-end">
                    <button id="{{ $buttonId }}" data-dropdown-toggle="{{ $dropdownId }}"
                      class="inline-flex items-center p-0.5 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-100">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                          d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                      </svg>
                    </button>

                    <div id="{{ $dropdownId }}"
                      class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">

                      <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">

                        <li>
                          <button
                            @click.stop="
                              openEditModal = true;
                              editUrl = '{{ route('guardians.update', $guardian->id) }}';
                              editData = {
                                name: '{{ $guardian->nama }}',
                                job: '{{ $guardian->job }}',
                                phone: '{{ $guardian->phone_number }}',
                                email: '{{ $guardian->email }}',
                                address: '{{ $guardian->address }}'
                              };
                            "
                            class="block w-full text-left py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                            Edit
                          </button>
                        </li>

                      </ul>

                      <div class="py-1">
                        <button type="button" @click.stop="
                                deleteUrl = '{{ route('guardians.destroy', $guardian->id) }}';
                                openDeleteModal = true;
                            "
                          class="block w-full text-left py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                          Delete
                        </button>
                      </div>

                    </div>

                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>
        </div>

        @include('admin.guardian.delete')

        @include('admin.guardian.edit')

      </div>
      
    </div>
  </section>
</x-admin.admin-layout>
