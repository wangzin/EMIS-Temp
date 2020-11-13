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
                    <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Basic Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Infracture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Wash Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">SAP</a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
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
                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam. 
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna. 
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                        </div>
                        </div>
                    </div>
                    <!-- /.card -->
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
