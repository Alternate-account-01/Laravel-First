<form action="{{ route('guardians.store') }}" method="POST" class="space-y-4">
    @csrf

    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        Add Guardian
    </h3>

    <div class="grid gap-4 sm:grid-cols-1">

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="nama" required class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job</label>
            <input type="text" name="job" required class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
            <input type="text" name="phone_number" required class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" required class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
            <input type="text" name="address" required class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

    </div>

    <div class="flex justify-end">
        <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">
            Save
        </button>
    </div>
</form>
