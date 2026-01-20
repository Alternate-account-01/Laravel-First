<div
    x-show="openEditModal"
    x-transition
    class="fixed inset-0 flex items-center justify-center bg-black/50 z-50"
>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">

        <button @click="openEditModal = false"
            class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">
            ✕
        </button>

        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
            Edit Teacher
        </h3>

        <form :action="editUrl" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="name" x-model="editData.name" required
                    class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" x-model="editData.email" required
                    class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Pelajaran</label>
                <select name="subject_id" x-model="editData.subject_id"
                    class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telepon</label>
                <input type="text" name="phone_number" x-model="editData.phone_number"
                    class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <textarea name="address" x-model="editData.address" rows="3"
                    class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">Update</button>
            </div>

        </form>
    </div>
</div>
