<template>
    <app-layout>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Management </li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <button @click="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 pull-right">Add User</button>
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">No.</th>
                            <th class="px-4 py-2">Full Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Cntact Number</th>
                            <th class="px-4 py-2">Role</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for='row in data'>
                            <td class="border px-4 py-2">{{ row.id }}</td>
                            <td class="border px-4 py-2">{{ row.Full_Name }}</td>
                            <td class="border px-4 py-2">{{ row.Email }}</td>
                            <td class="border px-4 py-2">{{ row.Contact }}</td>
                            <td class="border px-4 py-2">{{ row.Role }}</td>
                            <td class="border px-4 py-2">
                                <button @click="editWindow(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isOpen">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <!-- This element is to trick the browser into centering the modal contents. -->
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <form>
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Full Name:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Full Name" name ="fullname1" v-model="form.Full_Name">
                                <div v-if="$page.errors.Full_Name" class="text-red-500">{{ $page.errors.Full_Name[0] }}</div>
                            </div>
                            <div class="mb-4"> 
                                <label class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Email" v-model="form.Email">
                                <div v-if="$page.errors.Email" class="text-red-500">{{ $page.errors.Email[0] }}</div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Contact Number:</label>
                                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Contact Numer" v-model="form.Contact">
                                <div v-if="$page.errors.Contact" class="text-red-500">{{ $page.errors.Contact[0] }}</div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Role:</label>
                                <select class="w-full py-2 px-3 border shadow-lg" v-model="form.Role">
                                    <option value="">Select Role</option>
                                    <option value="1">System Administration</option>
                                    <option value="2">DB Admin</option>
                                    <option value="3">Users</option>
                                </select>
                                <div v-if="$page.errors.Role" class="text-red-500">{{ $page.errors.Role[0] }}</div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="!editMode" @click="save(form)">
                            Save
                            </button>
                        </span>
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="editMode" @click="update(form)">
                            Update
                            </button>
                        </span>
                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                            
                            <button @click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                            </button>
                        </span>
                        </div>
                        </form>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
        props: ['data', 'errors'],
        data() {
            return {
                editMode: false,
                isOpen: false,
                form: {
                    Full_Name: null,
                    Email: null,
                    Contact: null,
                    Role: null,
                },
            }
        },
        methods: {
            openModal: function () {
                this.isOpen = true;
            },
            closeModal: function () {
                this.isOpen = false;
                this.reset();
                this.editMode=false;
            },
            reset: function () {
                this.form = {
                    Full_Name: null,
                    Email: null,
                    Contact: null,
                    Role: null,
                }
            },
            save: function (data) {
                this.$inertia.post('/saveuser', data)
                this.reset();
                this.closeModal();
                this.editMode = false;
            },
            editWindow(user){
            this.reset();
            this.isOpen = true;
            this.form.fill(user)
            },
        }
    }
</script>
