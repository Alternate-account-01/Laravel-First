<form action="{{ route('teacher.store') }}" method="POST" class="space-y-4">
  @csrf
  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Teacher</h3>

  <div class="grid gap-4">
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
      <input type="text" name="name" required class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
    </div>
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
      <input type="email" name="email" required class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
    </div>
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Pelajaran</label>
      <select name="subject_id" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        @foreach ($subjects as $subject)
          <option value="{{ $subject->id }}">{{ $subject->name }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
      <input type="text" name="phone_number" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
    </div>
    <div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
      <textarea name="address" rows="2" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"></textarea>
    </div>
  </div>

  <div class="flex justify-end space-x-2">
    <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">
      Save
    </button>
  </div>
</form>
