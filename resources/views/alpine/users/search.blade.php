<x-app-layout>
    <div class="flex justify-center items-center h-full">
        <div x-data="usersData()" x-init="fetchUsers(); $watch('search', () => fetchUsers(search))"
             class="w-1/5 flex flex-col justify-center items-center">
            <div class="w-full flex justify-between items-center gap-5">
                <x-form.input type="text" name="search" id="search" placeholder="Search"
                              x-model.debounce.500ms="search"/>

                <button @click="clearSearch">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </button>
            </div>


            <div x-show="users.length || search" x-cloak
                 class="w-full mt-2 border rounded-md border-gray-500 p-5">
                <template x-if="search && !users.length">
                    <div>
                        There are no users
                    </div>
                </template>

                <template x-for="user in users" :key="user.id">
                    <div class="cursor-pointer p-2 hover:bg-gray-100 rounded-md" x-text="user.email">
                    </div>
                </template>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function usersData() {
                return {
                    users: [],
                    search: '',
                    clearSearch() {
                        this.search = ''
                    },
                    fetchUsers(search) {
                        if (!search) {
                            this.users = [];
                            return;
                        }

                        fetch(`/api/users?search=${search}`)
                            .then((res) => res.json())
                            .then((data) => {
                                this.users = data.users
                            })
                    }
                }
            }
        </script>
    @endpush
</x-app-layout>
