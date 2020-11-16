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
                        <ul class="nav nav-tabs bg-cool-gray-200" id="org-tab" role="tablist">
                            <li class="nav-item  basic-tab-content">
                                <a class="nav-link active basic-tab-content" @click="shownexttab('','basic-tab-content')" id="" data-toggle="pill" href="#basic-tab-content" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Basic Details</a>
                            </li>
                            <li class="nav-item location-tab-content">
                                <a class="nav-link location-tab-content" @click="shownexttab('basic-tab-content','location-tab-content')" data-toggle="pill" href="#location-tab-content" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Location Details</a>
                            </li>
                            <li class="nav-item contact-tab-content">
                                <a class="nav-link contact-tab-content" @click="shownexttab('location-tab-content','contact-tab-content')" data-toggle="pill" href="#contact-tab-content" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Contact Details</a>
                            </li>
                            <li class="nav-item school_details-tab-content">
                                <a class="nav-link school_details-tab-content" @click="shownexttab('contact-tab-content','school_details-tab-content')" id="school_details-tab" data-toggle="pill" href="#school_details-tab-content" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">School Details</a>
                            </li>
                            <li class="nav-item structure-tab-content">
                                <a class="nav-link structure-tab-content" @click="shownexttab('school_details-tab-content','structure-tab-content')" data-toggle="pill" href="#structure-tab-content" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Structure Details</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="org-tabContent">
                        <div class="tab-pane fade show active" id="basic-tab-content" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <form>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>School Category:</label>
                                            <select v-model="form.orgtype" @click="remove_err('error_orgcategory')" id="orgcategory" class="form-control select2">
                                                <option value="">-- Select Org Type --</option>
                                                <option value="Private"> Private School </option>
                                                <option value="public"> Public School </option>
                                            </select>
                                            <span class="text-danger" id="error_orgcategory"></span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>School Code:</label>
                                            <select v-model="form.orgcode" @click="remove_err('error_orgcode')" id="orgcode" class="form-control select2">
                                                <option selected>-- Select Org Code --</option>
                                                <option value="028.201.00001"> 028.201.00001 </option>
                                                <option value="028.201.00002">028.201.00002 </option>
                                            </select>
                                            <span class="text-danger" id="error_orgcode"></span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>School Name:
                                                <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="please do not enter 'level' part like 'CPS', 'LSS', 'MSS', 'HSS' ">
                                                    <img src="dist/img/questionMark.jpg" class="" style="width: 18px;">	
                                                </a>  -->
                                                 </label>
                                            <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="Organization Name">
                                            <span class="text-danger" id="error_orgname"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>School Level:</label>
                                            <select v-model="form.orglevel" @click="remove_err('error_orglevel')" id="orglevel" class="form-control select2">
                                                <option selected>-- Select Org Type --</option>
                                                <option value="1"> Higher Secondary School </option>
                                                <option value="2"> Middle Secondary School </option>
                                                <option value="3"> Primary School </option>
                                            </select>
                                            <span class="text-danger" id="error_orglevel"></span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>School Location type:</label>
                                            <select v-model="form.agencycode" @click="remove_err('error_agencycode')" id="agencycode" class="form-control select2">
                                                <option selected>-- Location --</option>
                                                <option value="" label="- Please Select -">- Please Select -</option>
                                                <option value="1" label="Urban Grade 1 [01]">Urban Grade 1 [01]</option>
                                                <option value="2" label="Urban Grade 2 [02]">Urban Grade 2 [02]</option>
                                                <option value="3" label="Semi-Urban [03]">Semi-Urban [03]</option>
                                                <option value="4" label="Semi-Remote [04]">Semi-Remote [04]</option>
                                                <option value="5" label="Remote [05]">Remote [05]</option>
                                                <option value="6" label="Very-Remote [06]">Very-Remote [06]</option>
                                                <option value="7" label="Difficult [07]">Difficult [07]</option>
                                                <option value="9" label="Rural [08]">Rural [08]</option>
                                                <option value="10" label="Semi-Rural [09]">Semi-Rural [09]</option>
                                                <option value="11" label="Urban [10]">Urban [10]</option>
                                                <option value="8" label="Unknown [99]">Unknown [99]</option>
                                            </select>
                                            <span class="text-danger" id="error_agencycode"></span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>School Status:</label>
                                           <select v-model="form.agencycode" @click="remove_err('error_agencycode')" id="agencycode" class="form-control select2">
                                                <option value="" label="- Please Select -">- Please Select -</option>
                                                <option value="1" label="Opened [1]">Opened [1]</option>
                                                <option value="2" label="Closed [2]">Closed [2]</option>
                                                <option value="3" label="Bifurcated [3]">Bifurcated [3]</option>
                                                <option value="4" label="Merged [4]">Merged [4]</option>
                                            </select>
                                            <span class="text-danger" id="error_agencycode"></span>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>Agency Code:</label>
                                            <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="Agency Code">
                                            <span class="text-danger" id="error_orgname"></span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>RCSC Code:</label>
                                            <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="RCSC Code">
                                            <span class="text-danger" id="error_orgname"></span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>MOF Code:</label>
                                            <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="MOF Code">
                                            <span class="text-danger" id="error_orgname"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>Year of Establishment:</label>
                                            <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="Year of establishment">
                                            <span class="text-danger" id="error_orgname"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row fa-pull-right">
                                        <button wire:click.prevent="store()" type="button" class="btn btn-success" @click="shownexttab('basic-tab-content','location-tab-content')">
                                            Save and Next <i class="fa fa-arrow-right"></i> 
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="location-tab-content" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Location Dzongkhag:</label>
                                    <select v-model="form.dzongkhag" @click="remove_err('error_dzongkhag')" @change="getgewogvillage('gewog')" id="dzongkhagId" class="form-control select2">
                                        <option selected>-- Select Dzongkhag --</option>
                                        <option v-for="item in dzongkhagList" :key="item.Dzongkhag_Id" :value="item.Dzongkhag_Id">{{ item.Dzongkhag_Name }}</option>
                                    </select>
                                    <span class="text-danger" id="error_dzongkhag"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Location Gewog:</label>
                                    <select @change="getgewogvillage('village')" @click="remove_err('error_gewog')" id="gewogid" v-model="form.gewog" class="form-control">
                                        <option selected>-- Select Gewog --</option>
                                        <option v-for="item in gewogList" :key="item.Gewog_Id" :value="item.Gewog_Id">{{ item.Gewog_Name }}</option>
                                    </select>
                                    <span class="text-danger" id="error_gewog"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Location Village:</label>
                                    <select v-model="form.village" @click="remove_err('error_village')" class="form-control">
                                        <option selected>-- Select Village --</option>
                                        <option v-for="item in villageList" :key="item.Village_Serial_No" :value="item.Village_Serial_No">{{ item.Village_Name }}</option>
                                    </select>
                                    <span class="text-danger" id="error_village"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Thram Number (less than 15 letters):</label>
                                    <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="Thram Number">
                                    <span class="text-danger" id="error_orgname"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Altitude:</label>
                                    <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="Altitude">
                                    <span class="text-danger" id="error_orgname"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Latitude:</label>
                                    <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="Latitude">
                                    <span class="text-danger" id="error_orgname"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Longitude :</label>
                                    <input type="text" class="form-control" @click="remove_err('error_orgname')" id="exampleInputEmail1" v-model="form.org_name" placeholder="Longitude ">
                                    <span class="text-danger" id="error_orgname"></span>
                                </div>
                            </div>
                            <div class="form-group row fa-pull-right">
                                <button wire:click.prevent="store()" type="button" class="btn btn-primary" @click="showpretab('basic-tab-content')">
                                    <i class="fa fa-arrow-left"></i>  Previous  
                                </button>
                                &nbsp;
                                <button wire:click.prevent="store()" type="button" class="btn btn-success" @click="shownexttab('location-tab-content','contact-tab-content')">
                                    Save and Next <i class="fa fa-arrow-right"></i>  
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="contact-tab-content" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label >Does the school have telephone connection? </label><br>
                                    <input type="radio" name="connecgtion" id="connecgtion" @click="showtelephone('Yes')"> Yes 
                                    <input type="radio" name="connecgtion" id="connecgtion" @click="showtelephone('No')"> No
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display:none" id="telephonesec">
                                    <label >Telephone No (less than 15 letters) </label>
                                    <input type="text" class="form-control" @click="remove_err('error_Telephone')" id="Telephone" v-model="form.org_name" placeholder="Telephone">
                                    <span class="text-danger" id="error_Telephone"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label >Does the school have internet connection? </label><br>
                                    <input type="radio" name="connecgtion" id="connecgtion"> Yes 
                                    <input type="radio" name="connecgtion" id="connecgtion"> No
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="faxsec">
                                    <label >Fax No (less than 15 letters) </label>
                                    <input type="text" class="form-control" @click="remove_err('error_Telephone')" id="Telephone" v-model="form.org_name" placeholder="Fax">
                                    <span class="text-danger" id="error_Telephone"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label >Email:</label>
                                    <input type="text" class="form-control" @click="remove_err('error_email')" placeholder="Email" v-model="form.Email">
                                    <span class="text-danger" id="error_email"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Mobile Number:</label>
                                    <input type="number" class="form-control" @click="remove_err('error_contact')" placeholder="Mobile Numer" v-model="form.Contact">
                                    <span class="text-danger" id="error_contact"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Remarks On Telephone:</label>
                                    <input type="text" class="form-control" @click="remove_err('error_contact')" placeholder="Remarks" v-model="form.Contact">
                                    <span class="text-danger" id="error_contact"></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="school_details-tab-content" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Climate Type:</label>
                                    <select v-model="form.dzongkhag" @click="remove_err('error_dzongkhag')" @change="getgewogvillage('gewog')" id="dzongkhagId" class="form-control select2">
                                        <option value="" label="- Please Select -">- Please Select -</option>
                                        <option value="1" label="Hot Sub-tropical [01]">Hot Sub-tropical [01]</option>
                                        <option value="2" label="Warm Sub-tropical [02]">Warm Sub-tropical [02]</option>
                                        <option value="3" label="Warm Temprate [03]">Warm Temprate [03]</option>
                                        <option value="4" label="Cool Temprate [04]">Cool Temprate [04]</option>
                                        <option value="5" label="Alpine [05]">Alpine [05]</option>
                                        <option value="6" label="Unknown [99]">Unknown [99]</option>
                                    </select>
                                    <span class="text-danger" id="error_dzongkhag"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Road Type:</label>
                                    <select @change="getgewogvillage('village')" @click="remove_err('error_gewog')" id="gewogid" v-model="form.gewog" class="form-control">
                                        <option value="" label="- Please Select -">- Please Select -</option>
                                        <option value="3" label="Farm/Power tiller Road [03]">Farm/Power tiller Road [03]</option>
                                        <option value="2" label="FeederRoad [02]">FeederRoad [02]</option>
                                        <option value="1" label="TarredRoad [01]">TarredRoad [01]</option>
                                        <option value="4" label="Unknown [99]">Unknown [99]</option>
                                    </select>
                                    <span class="text-danger" id="error_gewog"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>Is the school accessible by motor road?:</label><br>
                                    <input type="radio" name="connecgtion" id="connecgtion" @click="showacc('Yes')"> Yes 
                                    <input type="radio" name="connecgtion" id="connecgtion"  @click="showacc('No')"> No
                                </div>
                            </div>
                            <div class="form-group row" style="display:none" id="accessibilitysec">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label >How far is the school from road(days)?:</label>
                                    <input type="text" class="form-control" @click="remove_err('error_email')" v-model="form.Email">
                                    <span class="text-danger" id="error_email"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>How far is the school from road (kilometers)?:</label>
                                    <input type="number" class="form-control" @click="remove_err('error_contact')" v-model="form.Contact">
                                    <span class="text-danger" id="error_contact"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label>how far is the school from road (hours)?:</label>
                                    <input type="text" class="form-control" @click="remove_err('error_contact')" v-model="form.Contact">
                                    <span class="text-danger" id="error_contact"></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="structure-tab-tab-details" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                        </div>
                        </div>
                    </div>
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
            shownexttab(presentClass,nextClass){
                let validated=true;
                if(nextClass=="location-tab-content"){
                    validated=this.validatebasicdetials();
                }
                if(validated){
                    $("." + presentClass).removeClass("active");
                    $("." + presentClass).addClass("disabled");
                    $("." + nextClass).addClass("active");
                    $("." + presentClass + ">a").append("<span class='text-blue'><i class='fa fa-check ml-1'></i></span>");
                    $("#" + presentClass).hide();
                    $("#" + nextClass).show();
                    $('.'+nextClass).addClass("active");
                }
            },
            validatebasicdetials:function(){
                let returntye=true;
                if(this.form.org_name==null){
                    $('#error_orgname').html('Please provide org name');
                    returntye=false;
                } 
                if($('#orgcategory').val()=="" || $('#orgcategory').val()==null){
                    $('#error_orgcategory').html('Please select org category');
                    returntye=false;
                }
                return returntye;
            },
            showpretab:function(){

            },
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
            showtelephone:function(type){
                if(type=="Yes"){
                    $('#telephonesec').show();
                }
                else{
                    $('#telephonesec').hide();
                }
            },
            showacc:function(){
               if(type=="No"){
                    $('#accessibilitysec').show();
                }
                else{
                    $('#accessibilitysec').hide();
                } 
            }
        },
        mounted () {
            this.loaddzongkhag();
            $('#organizationlinksection').addClass('menu-open');
            $('#organizationlink').addClass('nav-link active');
            $('#schoolLink').addClass('active');
        },   
    }
</script>
