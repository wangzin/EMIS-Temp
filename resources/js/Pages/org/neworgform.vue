<template>
    <app-layout>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                New Organization Form
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card card-info" id="addForm">
                    <form>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Organization Name:</label>
                                    <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="Organization Name">
                                    <span class="text-danger" id="error_orgname"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Location Dzongkhag:</label>
                                    <select v-model="form.dzongkhag" @click="remove_err('error_dzongkhag')" @change="getgewogvillage('gewog')" id="dzongkhagId" class="form-control select2">
                                        <option selected>-- Select Dzongkhag --</option>
                                        <option v-for="item in dzongkhagList" :key="item.Dzongkhag_Id" :value="item.Dzongkhag_Id">{{ item.Dzongkhag_Name }}</option>
                                    </select>
                                    <span class="text-danger" id="error_dzongkhag"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Location Gewog:</label>
                                    <select @change="getgewogvillage('village')" @click="remove_err('error_gewog')" id="gewogid" v-model="form.gewog" class="form-control">
                                        <option selected>-- Select Gewog --</option>
                                        <option v-for="item in gewogList" :key="item.Gewog_Id" :value="item.Gewog_Id">{{ item.Gewog_Name }}</option>
                                    </select>
                                    <span class="text-danger" id="error_gewog"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Location Village:</label>
                                    <select v-model="form.village" @click="remove_err('error_village')" class="form-control">
                                        <option selected>-- Select Village --</option>
                                        <option v-for="item in villageList" :key="item.Village_Serial_No" :value="item.Village_Serial_No">{{ item.Village_Name }}</option>
                                    </select>
                                    <span class="text-danger" id="error_village"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label >Email:</label>
                                    <input type="text" class="form-control" @click="remove_err('error_email')" placeholder="Email" v-model="form.Email">
                                    <span class="text-danger" id="error_email"></span>
                                </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Contact Number:</label>
                                    <input type="number" class="form-control" @click="remove_err('error_contact')" placeholder="Contact Numer" v-model="form.Contact">
                                    <span class="text-danger" id="error_contact"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <button wire:click.prevent="store()" type="button" class="btn btn-success" @click="save(form)">
                                    Save
                                </button>
                                <button @click="closeModal()" type="button" class="btn btn-default">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
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
                dzongkhagList : {},
                gewogList : {},
                villageList : {},
                form: {
                    org_name: null,
                    dzongkhag: null,
                    gewog: null,
                    village: null,
                    Village: null,
                    Email: null,
                    Contact: null,
                },
            }
        },
        methods: {
            loaddzongkhag(){ 
                axios.get('/getdzongkhag')
                    .then(response => this.dzongkhagList = response.data)
                    .catch(error => console.log(error));
            },
            getgewogvillage(type){                
                if (type == 'gewog'){
                    axios.get('/gewog/'+ $('#dzongkhagId').val())
                    .then(response => this.gewogList = response.data)
                    .catch(errot => console.log(error));
                }
                else{
                    axios.get('/village/'+ $('#gewogid').val())
                    .then(response => this.villageList = response.data)
                    .catch(error => console.log(error));
                }
            },
            
            closeModal: function () {
                this.isShow=false;
                this.reset();
            },
            reset: function () {
                this.form = {
                    org_name: null,
                    dzongkhag: null,
                    gewog: null,
                    village: null,
                    Email: null,
                    Contact: null,
                }
            },
            save: function (data) {
                if(this.validateform()){
                    this.$Progress.start();
                    this.$inertia.post('/organizationIndex', data)
                    this.reset();
                    this.isShow=false;
                    this.$Progress.end();
                }
                
            },
            deleteRow(id) {
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                if (result.value) {
                    //Send Request to server
                    this.$inertia.delete('/organizationIndex/'+id)
                        .then((response)=> {
                            alert(response.text);
                                Swal.fire(
                                'Deleted!',
                                'User deleted successfully',
                                'success'
                                )

                        }).catch(() => {
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            footer: '<a href>Why do I have this issue?</a>'
                            })
                        })
                    }

                })
            },
            validateform: function(){
                let retuentype=true;
                if(this.form.org_name==null){
                    $('#error_orgname').html('Please provide org name');
                    retuentype=false;
                }
                if(this.form.dzongkhag==null){
                    $('#error_dzongkhag').html('Please select dzongkhag');
                    retuentype=false;
                }
                if(this.form.gewog==null){
                    $('#error_gewog').html('Please select gewog');
                    retuentype=false;
                }
                if(this.form.village==null){
                    $('#error_village').html('Please select village');
                    retuentype=false;
                }
                if(this.form.Email==null){
                    $('#error_email').html('Please provide email');
                    retuentype=false;
                }
                if(this.form.Contact==null){
                    $('#error_contact').html('Please provide contact number');
                    retuentype=false;
                }
                if(this.form.Email==null){
                    $('#error_email').html('Please provide email');
                    retuentype=false;
                }
                return retuentype;
            },
            remove_err: function(errorid){
                $('#'+errorid).html('');
            },
        },
        mounted () {
            this.loaddzongkhag();
            $('#organizationlinksection').addClass('menu-open');
            $('#organizationlink').addClass('nav-link active');
            $('#schoolLink').addClass('active');
        },   
    }
</script>
