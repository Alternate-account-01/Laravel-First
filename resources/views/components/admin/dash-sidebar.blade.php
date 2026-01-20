<aside id="drawer-navigation"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav">

    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <form action="#" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817
                            4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                    </svg>
                </div>
                <input type="text" name="search" id="sidebar-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 
                    focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 
                    dark:focus:border-primary-500"
                    placeholder="Search" />
            </div>
        </form>

        <ul class="space-y-2">
            <x-admin.admin-sidelink href="/admin/dashboard" :active="request()->is('admin/dashboard')">Dashboard</x-admin.admin-sidelink>
            <x-admin.admin-sidelink href="/admin/profil" :active="request()->is('admin/profil')">Profile</x-admin.admin-sidelink>
            <x-admin.admin-sidelink href="/admin/kontak" :active="request()->is('admin/kontak')">Contacts</x-admin.admin-sidelink>
           <x-admin.admin-sidelink href="/admin/student" :active="request()->is('admin/student')">Students</x-admin.admin-sidelink>
           <x-admin.admin-sidelink href="/admin/guardians" :active="request()->is('admin/guardians')">Guardians</x-admin.admin-sidelink>
           <x-admin.admin-sidelink href="/admin/classrooms" :active="request()->is('admin/classroom')">Classroom</x-admin.admin-sidelink> 
           <x-admin.admin-sidelink href="/admin/teacher" :active="request()->is('admin/teacher')">Teacher</x-admin.admin-sidelink>
           <x-admin.admin-sidelink href="/admin/subject" :active="request()->is('admin/subject')">Subjects</x-admin.admin-sidelink>
           <x-admin.admin-sidelink href="/admin/login" :active="request()->is('admin/login')">Login</x-admin.admin-sidelink>
      
        </ul>
    </div>
</aside>
