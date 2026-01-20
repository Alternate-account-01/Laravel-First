<form action="{{ route('subject.store') }}" method="POST" class="space-y-4">
    @csrf

    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Subject</h3>

    <div>
        <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Subject Name</label>
        <input type="text" name="name" required
               class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
    </div>

    <div>
        <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea name="description" rows="2"
                  class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"></textarea>
    </div>

    <div class="flex justify-end space-x-2">
        <button type="button"
                @click="openAddModal = false"
                class="px-4 py-2 border rounded-md text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
            cancel
        </button>

        <button type="submit"
                class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">
            yess
        </button>
    </div>
</form>