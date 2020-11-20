<template>
    <app-layout>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Traning/workshop</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Propose Traning/workshop</li>
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
                                <li class="nav-item  traninitdetails">
                                    <a class="nav-link active traninitdetails" @click="shownexttab('','traninitdetails')" 
                                    id="" data-toggle="pill" href="#traninitdetails" role="tab" aria-controls="traninitdetails-home"
                                    aria-selected="true">Traning/Workshop Details</a>
                                </li>
                                <li class="nav-item  participant">
                                    <a class="nav-link participant" @click="shownexttab('traninitdetails','participant')" 
                                    id="" data-toggle="pill" href="#participant" role="tab" aria-controls="participant-home"
                                    aria-selected="false">Participant Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body mt-xl-n4 pt-0">
                        <div class="tab-content" id="org-tabContent">
                            <div class="tab-pane fade show active" id="traninitdetails" role="tabpanel" aria-labelledby="traninitdetails-home-tab">
                                <form>
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <label>Select Level<span class="text-danger">*</span></label>
                                                <select class="form-control" name="level" id="level" @change="optionval(this)" @click="remove_err('level_err')">
                                                    <option value="">- Please Select -</option>
                                                    <option value="1">Professional Development Program [0001]</option>
                                                    <option value="2">Qualification Upgradation [0002]</option>
                                                </select>
                                                <span class="text-danger" id="level_err"></span>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <label>Select Sub Level/Category<span class="text-danger">*</span></label>
                                                <select class="form-control" name="sublevel"  @click="remove_err('sub_level_err')" id="professional">
                                                    <option value="">- Please Select -</option>
                                                </select>
                                                <span class="text-danger" id="sub_level_err"></span>
                                            </div>
                                        </div>
                                        <span id="professionalsection" style="display:none">
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Type<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="trainingtype" id="trainingtype" @click="remove_err('trainingtype_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="17" label="Conference [0015]">Conference [0015]</option>
                                                        <option value="18" label="Meeting [0016]">Meeting [0016]</option>
                                                        <option value="19" label="Others [0017]">Others [0017]</option>
                                                        <option value="16" label="Seminar [0014]">Seminar [0014]</option>
                                                        <option value="14" label="Training [0012]">Training [0012]</option>
                                                        <option value="15" label="Workshop [0013]">Workshop [0013]</option>
                                                    </select>
                                                    <span class="text-danger" id="trainingtype_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Course Title<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" @click="remove_err('error_coursetitle')" name="coursetitle" id="coursetitle" placeholder="Course Title">
                                                    <span class="text-danger" id="error_coursetitle"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Course Provider<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" @click="remove_err('error_cprovider')" name="cprovider" id="cprovider" placeholder="Course Provider">
                                                    <span class="text-danger" id="error_cprovider"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Institute/Vanue<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" @click="remove_err('error_vanue')" name="vanue" id="vanue" placeholder="Vanue">
                                                    <span class="text-danger" id="error_vanue"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Course Type<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="courseType" id="courseType" @click="remove_err('courseType_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="27" label="Curriculum [0025]">Curriculum [0025]</option>
                                                        <option value="28" label="Non Academic [0026]">Non Academic [0026]</option>
                                                        <option value="26" label="Pedagogy [0024]">Pedagogy [0024]</option>
                                                    </select>
                                                    <span class="text-danger" id="courseType_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Relevancy<span class="text-danger">*</span></label><br>
                                                    <input type="radio" @click="remove_err('error_relevancy')" name="relevancy" id="relevancy">  Yes
                                                    <input type="radio" @click="remove_err('error_relevancy')" name="relevancy" id="relevancy">  No
                                                    <span class="text-danger" id="error_relevancy"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Start Date<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" @click="remove_err('error_sdate')" name="sdate" id="sdate" placeholder="Start Date">
                                                    <span class="text-danger" id="error_sdate"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>End Date<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" @click="remove_err('error_edate')" name="edate" id="edate" placeholder="End Date">
                                                    <span class="text-danger" id="error_edate"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Total Hour<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" @click="remove_err('error_thour')" name="thour" id="thour" placeholder="Total Hours">
                                                    <span class="text-danger" id="error_thour"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Financial Source<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="financialsource" @change="showfinancialsource()" id="financialsource" @click="remove_err('financialsource_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="External" label="External">External</option>
                                                        <option value="RGoB" label="RGoB">RGoB</option>
                                                    </select>
                                                    <span class="text-danger" id="financialsource_err"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group" id="externalsource" style="display:none">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control" name="extrnalsourceoffinance" id="extrnalsourceoffinance" @click="remove_err('extrnalsourceoffinance_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="15" label="ADB [014]">ADB [014]</option>
                                                        <option value="31" label="APCEIU [030]">APCEIU [030]</option>
                                                        <option value="24" label="Australia [023]">Australia [023]</option>
                                                        <option value="22" label="Canada [021]">Canada [021]</option>
                                                        <option value="16" label="Colombo Plan [015]">Colombo Plan [015]</option>
                                                        <option value="19" label="Denmark [018]">Denmark [018]</option>
                                                        <option value="13" label="ESCAP [012]">ESCAP [012]</option>
                                                        <option value="8" label="FAO [007]">FAO [007]</option>
                                                        <option value="28" label="Germany [027]">Germany [027]</option>
                                                        <option value="10" label="ILO [009]">ILO [009]</option>
                                                        <option value="17" label="India [016]">India [016]</option>
                                                        <option value="30" label="ITECH [029]">ITECH [029]</option>
                                                        <option value="23" label="Japan [022]">Japan [022]</option>
                                                        <option value="20" label="Netherlands [019]">Netherlands [019]</option>
                                                        <option value="29" label="Privately funded [028]">Privately funded [028]</option>
                                                        <option value="2" label="RGOB [001]">RGOB [001]</option>
                                                        <option value="3" label="SAARC [002]">SAARC [002]</option>
                                                        <option value="27" label="Sweden [026]">Sweden [026]</option>
                                                        <option value="21" label="Switserland [020]">Switserland [020]</option>
                                                        <option value="18" label="Thailand [017]">Thailand [017]</option>
                                                        <option value="7" label="UNDP [006]">UNDP [006]</option>
                                                        <option value="6" label="UNESCO [005]">UNESCO [005]</option>
                                                        <option value="11" label="UNFPA [010]">UNFPA [010]</option>
                                                        <option value="5" label="UNICEF [004]">UNICEF [004]</option>
                                                        <option value="25" label="United Kingdom [024]">United Kingdom [024]</option>
                                                        <option value="1" label="Unknown [999]">Unknown [999]</option>
                                                        <option value="26" label="USA [025]">USA [025]</option>
                                                        <option value="12" label="WFP [011]">WFP [011]</option>
                                                        <option value="9" label="WHO [008]">WHO [008]</option>
                                                        <option value="4" label="Worldbank [003]">Worldbank [003]</option>
                                                        <option value="14" label="WWF [013]">WWF [013]</option>
                                                    </select>
                                                    <span class="text-danger" id="extrnalsourceoffinance_err"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group" id="internalsource" style="display:none">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control" name="internalfinance" id="internalfinance" @change="showdaongkhagministry()" @click="remove_err('internalfinance_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="1" label="Dzongkhag [0002]">Dzongkhag [0002]</option>
                                                        <option value="2" label="Ministry [0001]">Ministry [0001]</option>
                                                        <option value="3" label="School [0003]">School [0003]</option>
                                                    </select>
                                                    <span class="text-danger" id="internalfinance_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control" name="intersourcetype" id="intersourcetype"  @click="remove_err('intersourcetype_err')">
                                                        <option value="">- Please Select -</option>
                                                    </select>
                                                    <span class="text-danger" id="intersourcetype_err"></span>
                                                </div>
                                            </div>
                                        </span>
                                        <span id="qualificationsection" style="display:none">
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Donor Agency<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="donaragency" id="donaragency" @change="loaddoners()" @click="remove_err('donaragency_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="15" label="ADB [014]">ADB [014]</option>
                                                        <option value="31" label="APCEIU [030]">APCEIU [030]</option>
                                                        <option value="24" label="Australia [023]">Australia [023]</option>
                                                        <option value="22" label="Canada [021]">Canada [021]</option>
                                                        <option value="16" label="Colombo Plan [015]">Colombo Plan [015]</option>
                                                        <option value="19" label="Denmark [018]">Denmark [018]</option>
                                                        <option value="13" label="ESCAP [012]">ESCAP [012]</option>
                                                        <option value="8" label="FAO [007]">FAO [007]</option>
                                                        <option value="28" label="Germany [027]">Germany [027]</option>
                                                        <option value="10" label="ILO [009]">ILO [009]</option>
                                                        <option value="17" label="India [016]">India [016]</option>
                                                        <option value="30" label="ITECH [029]">ITECH [029]</option>
                                                        <option value="23" label="Japan [022]">Japan [022]</option>
                                                        <option value="20" label="Netherlands [019]">Netherlands [019]</option>
                                                        <option value="29" label="Privately funded [028]">Privately funded [028]</option>
                                                        <option value="2" label="RGOB [001]">RGOB [001]</option>
                                                        <option value="3" label="SAARC [002]">SAARC [002]</option>
                                                        <option value="27" label="Sweden [026]">Sweden [026]</option>
                                                        <option value="21" label="Switserland [020]">Switserland [020]</option>
                                                        <option value="18" label="Thailand [017]">Thailand [017]</option>
                                                        <option value="7" label="UNDP [006]">UNDP [006]</option>
                                                        <option value="6" label="UNESCO [005]">UNESCO [005]</option>
                                                        <option value="11" label="UNFPA [010]">UNFPA [010]</option>
                                                        <option value="5" label="UNICEF [004]">UNICEF [004]</option>
                                                        <option value="25" label="United Kingdom [024]">United Kingdom [024]</option>
                                                        <option value="1" label="Unknown [999]">Unknown [999]</option>
                                                        <option value="26" label="USA [025]">USA [025]</option>
                                                        <option value="12" label="WFP [011]">WFP [011]</option>
                                                        <option value="9" label="WHO [008]">WHO [008]</option>
                                                        <option value="4" label="Worldbank [003]">Worldbank [003]</option>
                                                        <option value="14" label="WWF [013]">WWF [013]</option>
                                                    </select>
                                                    <span class="text-danger" id="donaragency_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Project of Donor Agency</label>
                                                    <select class="form-control" name="projectdonaragency" id="projectdonaragency" @click="remove_err('projectdonaragency_err')">
                                                        <option value="">- Please Select -</option>
                                                    </select>
                                                    <span class="text-danger" id="projectdonaragency_err"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Course Type<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="courseTypequalification" id="courseTypequalification" @click="remove_err('courseTypequalification_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="1" label="Information Technology [07]">Information Technology [07]</option>
                                                        <option value="2" label="Commercial [08]">Commercial [08]</option>
                                                        <option value="3" label="Arts [09]">Arts [09]</option>
                                                        <option value="4" label="Fine Arts [10]">Fine Arts [10]</option>
                                                        <option value="5" label="Law [11]">Law [11]</option>
                                                        <option value="6" label="Education [12]">Education [12]</option>
                                                    </select>
                                                    <span class="text-danger" id="courseTypequalification_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Degree<span class="text-danger">*</span></label><br>
                                                    <select class="form-control" name="degree" id="degree" @click="remove_err('degree_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="4">PhD [02]</option>
                                                        <option value="5">Masters [03]</option>
                                                        <option value="6">PG Diploma [04]</option>
                                                        <option value="8">Bachelors [05]</option>
                                                        <option value="9">Diploma [06]</option>
                                                    </select>
                                                    <span class="text-danger" id="degree_err"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Subject 1st (if not mentioned or defined in certificate or personal file, please select Not Applicable)<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="subject1" id="subject1" @click="remove_err('subject1_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="2">Accountancy [001]</option><option value="5">Biology [004]</option><option value="6">Botany [005]</option><option value="7">Chemistry [006]</option><option value="9">Commerce [008]</option><option value="10">Computer Science [009]</option><option value="11">Counseling [010]</option><option value="13">Dzongkha [012]</option><option value="14">Economics [013]</option><option value="16">English [015]</option><option value="17">General [016]</option><option value="18">Geography [017]</option><option value="19">Health &amp; Physical Education [018]</option><option value="125">Hindi [049]</option><option value="20">History [019]</option><option value="66">Information Technology [067]</option><option value="21">Library Science [020]</option><option value="23">Mathematics [022]</option><option value="26">Other [025]</option><option value="27">Physics [026]</option><option value="28">Primary Curriculum Studies [027]</option><option value="72">Primary Education [073]</option><option value="93">Psychology [094]</option><option value="92">Science [093]</option><option value="82">Social Studies [083]</option><option value="32">Special Education [031]</option><option value="1">Undefined [999]</option><option value="38">Youth Counseling [037]</option><option value="40">Zoology [039]</option>
                                                    </select>
                                                    <span class="text-danger" id="subject1_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Subject 2nd (if not mentioned or defined in certificate or personal file, please select Not Applicable)<span class="text-danger">*</span></label><br>
                                                    <select class="form-control" name="subject2" id="subject2" @click="remove_err('subject2_err')">
                                                        <option value="">- Please Select -</option>
                                                       <option value="2">Accountancy [001]</option><option value="5">Biology [004]</option><option value="6">Botany [005]</option><option value="7">Chemistry [006]</option><option value="9">Commerce [008]</option><option value="10">Computer Science [009]</option><option value="11">Counseling [010]</option><option value="13">Dzongkha [012]</option><option value="14">Economics [013]</option><option value="16">English [015]</option><option value="17">General [016]</option><option value="18">Geography [017]</option><option value="19">Health &amp; Physical Education [018]</option><option value="125">Hindi [049]</option><option value="20">History [019]</option><option value="66">Information Technology [067]</option><option value="21">Library Science [020]</option><option value="23">Mathematics [022]</option><option value="26">Other [025]</option><option value="27">Physics [026]</option><option value="28">Primary Curriculum Studies [027]</option><option value="72">Primary Education [073]</option><option value="93">Psychology [094]</option><option value="92">Science [093]</option><option value="82">Social Studies [083]</option><option value="32">Special Education [031]</option><option value="1">Undefined [999]</option><option value="38">Youth Counseling [037]</option><option value="40">Zoology [039]</option>
                                                    </select>
                                                    <span class="text-danger" id="subject2_err"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Country<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="country" id="country" @click="remove_err('country_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="" label="- Please Select -">- Please Select -</option>
                                                        <option value="1" label="AFGHANISTAN [AF]">AFGHANISTAN [AF]</option>
                                                        <option value="2" label="ÅLAND ISLANDS [AX]">ÅLAND ISLANDS [AX]</option>
                                                        <option value="3" label="ALBANIA [AL]">ALBANIA [AL]</option>
                                                        <option value="4" label="ALGERIA [DZ]">ALGERIA [DZ]</option>
                                                        <option value="5" label="AMERICAN SAMOA [AS]">AMERICAN SAMOA [AS]</option>
                                                        <option value="6" label="ANDORRA [AD]">ANDORRA [AD]</option>
                                                        <option value="7" label="ANGOLA [AO]">ANGOLA [AO]</option>
                                                        <option value="8" label="ANGUILLA [AI]">ANGUILLA [AI]</option>
                                                        <option value="9" label="ANTARCTICA [AQ]">ANTARCTICA [AQ]</option>
                                                        <option value="10" label="ANTIGUA AND BARBUDA [AG]">ANTIGUA AND BARBUDA [AG]</option>
                                                        <option value="11" label="ARGENTINA [AR]">ARGENTINA [AR]</option>
                                                        <option value="12" label="ARMENIA [AM]">ARMENIA [AM]</option>
                                                        <option value="13" label="ARUBA [AW]">ARUBA [AW]</option>
                                                        <option value="14" label="AUSTRALIA [AU]">AUSTRALIA [AU]</option>
                                                        <option value="15" label="AUSTRIA [AT]">AUSTRIA [AT]</option>
                                                        <option value="16" label="AZERBAIJAN [AZ]">AZERBAIJAN [AZ]</option>
                                                        <option value="17" label="BAHAMAS [BS]">BAHAMAS [BS]</option>
                                                        <option value="18" label="BAHRAIN [BH]">BAHRAIN [BH]</option>
                                                        <option value="19" label="BANGLADESH [BD]">BANGLADESH [BD]</option>
                                                        <option value="20" label="BARBADOS [BB]">BARBADOS [BB]</option>
                                                        <option value="21" label="BELARUS [BY]">BELARUS [BY]</option>
                                                        <option value="22" label="BELGIUM [BE]">BELGIUM [BE]</option>
                                                        <option value="23" label="BELIZE [BZ]">BELIZE [BZ]</option>
                                                        <option value="24" label="BENIN [BJ]">BENIN [BJ]</option>
                                                        <option value="25" label="BERMUDA [BM]">BERMUDA [BM]</option>
                                                        <option value="26" label="BHUTAN [BT]" selected="selected">BHUTAN [BT]</option>
                                                        <option value="27" label="BOLIVIA [BO]">BOLIVIA [BO]</option>
                                                        <option value="28" label="BOSNIA AND HERZEGOVINA [BA]">BOSNIA AND HERZEGOVINA [BA]</option>
                                                        <option value="29" label="BOTSWANA [BW]">BOTSWANA [BW]</option>
                                                        <option value="30" label="BOUVET ISLAND [BV]">BOUVET ISLAND [BV]</option>
                                                        <option value="31" label="BRAZIL [BR]">BRAZIL [BR]</option>
                                                        <option value="32" label="BRITISH INDIAN OCEAN TERRITORY [IO]">BRITISH INDIAN OCEAN TERRITORY [IO]</option>
                                                        <option value="33" label="BRUNEI DARUSSALAM [BN]">BRUNEI DARUSSALAM [BN]</option>
                                                        <option value="34" label="BULGARIA [BG]">BULGARIA [BG]</option>
                                                        <option value="35" label="BURKINA FASO [BF]">BURKINA FASO [BF]</option>
                                                        <option value="36" label="BURUNDI [BI]">BURUNDI [BI]</option>
                                                        <option value="37" label="CAMBODIA [KH]">CAMBODIA [KH]</option>
                                                        <option value="38" label="CAMEROON [CM]">CAMEROON [CM]</option>
                                                        <option value="39" label="CANADA [CA]">CANADA [CA]</option>
                                                        <option value="40" label="CAPE VERDE [CV]">CAPE VERDE [CV]</option>
                                                        <option value="41" label="CAYMAN ISLANDS [KY]">CAYMAN ISLANDS [KY]</option>
                                                        <option value="42" label="CENTRAL AFRICAN REPUBLIC [CF]">CENTRAL AFRICAN REPUBLIC [CF]</option>
                                                        <option value="43" label="CHAD [TD]">CHAD [TD]</option>
                                                        <option value="44" label="CHILE [CL]">CHILE [CL]</option>
                                                        <option value="45" label="CHINA [CN]">CHINA [CN]</option>
                                                        <option value="46" label="CHRISTMAS ISLAND [CX]">CHRISTMAS ISLAND [CX]</option>
                                                        <option value="47" label="COCOS ISLANDS [CC]">COCOS ISLANDS [CC]</option>
                                                        <option value="48" label="COLOMBIA [CO]">COLOMBIA [CO]</option>
                                                        <option value="49" label="COMOROS [KM]">COMOROS [KM]</option>
                                                        <option value="50" label="CONGO [CG]">CONGO [CG]</option>
                                                        <option value="51" label="CONGO, THE DEMOCRATIC REPUBLIC OF THE [CD]">CONGO, THE DEMOCRATIC REPUBLIC OF THE [CD]</option>
                                                        <option value="52" label="COOK ISLANDS [CK]">COOK ISLANDS [CK]</option>
                                                        <option value="53" label="COSTA RICA [CR]">COSTA RICA [CR]</option>
                                                        <option value="54" label="CÔTE D'IVOIRE [CI]">CÔTE D'IVOIRE [CI]</option>
                                                        <option value="55" label="CROATIA [HR]">CROATIA [HR]</option>
                                                        <option value="56" label="CUBA [CU]">CUBA [CU]</option>
                                                        <option value="57" label="CYPRUS [CY]">CYPRUS [CY]</option>
                                                        <option value="58" label="CZECH REPUBLIC [CZ]">CZECH REPUBLIC [CZ]</option>
                                                        <option value="59" label="DENMARK [DK]">DENMARK [DK]</option>
                                                        <option value="60" label="DJIBOUTI [DJ]">DJIBOUTI [DJ]</option>
                                                        <option value="61" label="DOMINICA [DM]">DOMINICA [DM]</option>
                                                        <option value="62" label="DOMINICAN REPUBLIC [DO]">DOMINICAN REPUBLIC [DO]</option>
                                                        <option value="63" label="ECUADOR [EC]">ECUADOR [EC]</option>
                                                        <option value="64" label="EGYPT [EG]">EGYPT [EG]</option>
                                                        <option value="65" label="EL SALVADOR [SV]">EL SALVADOR [SV]</option>
                                                        <option value="66" label="EQUATORIAL GUINEA [GQ]">EQUATORIAL GUINEA [GQ]</option>
                                                        <option value="67" label="ERITREA [ER]">ERITREA [ER]</option>
                                                        <option value="68" label="ESTONIA [EE]">ESTONIA [EE]</option>
                                                        <option value="69" label="ETHIOPIA [ET]">ETHIOPIA [ET]</option>
                                                        <option value="70" label="FALKLAND ISLANDS [FK]">FALKLAND ISLANDS [FK]</option>
                                                        <option value="71" label="FAROE ISLANDS [FO]">FAROE ISLANDS [FO]</option>
                                                        <option value="72" label="FIJI [FJ]">FIJI [FJ]</option>
                                                        <option value="73" label="FINLAND [FI]">FINLAND [FI]</option>
                                                        <option value="74" label="FRANCE [FR]">FRANCE [FR]</option>
                                                        <option value="75" label="FRENCH GUIANA [GF]">FRENCH GUIANA [GF]</option>
                                                        <option value="76" label="FRENCH POLYNESIA [PF]">FRENCH POLYNESIA [PF]</option>
                                                        <option value="77" label="FRENCH SOUTHERN TERRITORIES [TF]">FRENCH SOUTHERN TERRITORIES [TF]</option>
                                                        <option value="78" label="GABON  [GA]">GABON  [GA]</option>
                                                        <option value="79" label="GAMBIA [GM]">GAMBIA [GM]</option>
                                                        <option value="80" label="GEORGIA [GE]">GEORGIA [GE]</option>
                                                        <option value="81" label="GERMANY [DE]">GERMANY [DE]</option>
                                                        <option value="82" label="GHANA [GH]">GHANA [GH]</option>
                                                        <option value="83" label="GIBRALTAR [GI]">GIBRALTAR [GI]</option>
                                                        <option value="84" label="GREECE [GR]">GREECE [GR]</option>
                                                        <option value="85" label="GREENLAND [GL]">GREENLAND [GL]</option>
                                                        <option value="86" label="GRENADA [GD]">GRENADA [GD]</option>
                                                        <option value="87" label="GUADELOUPE [GP]">GUADELOUPE [GP]</option>
                                                        <option value="88" label="GUAM  [GU]">GUAM  [GU]</option>
                                                        <option value="89" label="GUATEMALA [GT]">GUATEMALA [GT]</option>
                                                        <option value="90" label="GUERNSEY [GG]">GUERNSEY [GG]</option>
                                                        <option value="91" label="GUINEA [GN]">GUINEA [GN]</option>
                                                        <option value="92" label="GUINEA-BISSAU [GW]">GUINEA-BISSAU [GW]</option>
                                                        <option value="93" label="GUYANA [GY]">GUYANA [GY]</option>
                                                        <option value="94" label="HAITI [HT]">HAITI [HT]</option>
                                                        <option value="95" label="HEARD ISLAND AND MCDONALD ISLANDS [HM]">HEARD ISLAND AND MCDONALD ISLANDS [HM]</option>
                                                        <option value="96" label="HOLY SEE [VA]">HOLY SEE [VA]</option>
                                                        <option value="97" label="HONDURAS [HN]">HONDURAS [HN]</option>
                                                        <option value="98" label="HONG KONG [HK]">HONG KONG [HK]</option>
                                                        <option value="99" label="HUNGARY [HU]">HUNGARY [HU]</option>
                                                        <option value="100" label="ICELAND [IS]">ICELAND [IS]</option>
                                                        <option value="101" label="INDIA [IN]">INDIA [IN]</option>
                                                        <option value="102" label="INDONESIA [ID]">INDONESIA [ID]</option>
                                                        <option value="103" label="IRAN, ISLAMIC REPUBLIC OF [IR]">IRAN, ISLAMIC REPUBLIC OF [IR]</option>
                                                        <option value="104" label="IRAQ [IQ]">IRAQ [IQ]</option>
                                                        <option value="105" label="IRELAND [IE]">IRELAND [IE]</option>
                                                        <option value="106" label="ISLE OF MAN  [IM]">ISLE OF MAN  [IM]</option>
                                                        <option value="107" label="ISRAEL [IL]">ISRAEL [IL]</option>
                                                        <option value="108" label="ITALY [IT]">ITALY [IT]</option>
                                                        <option value="109" label="JAMAICA [JM]">JAMAICA [JM]</option>
                                                        <option value="110" label="JAPAN [JP]">JAPAN [JP]</option>
                                                        <option value="111" label="JERSEY [JE]">JERSEY [JE]</option>
                                                        <option value="112" label="JORDAN [JO]">JORDAN [JO]</option>
                                                        <option value="113" label="KAZAKHSTAN [KZ]">KAZAKHSTAN [KZ]</option>
                                                        <option value="114" label="KENYA [KE]">KENYA [KE]</option>
                                                        <option value="115" label="KIRIBATI [KI]">KIRIBATI [KI]</option>
                                                        <option value="116" label="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF [KP]">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF [KP]</option>
                                                        <option value="117" label="KOREA, REPUBLIC OF [KR]">KOREA, REPUBLIC OF [KR]</option>
                                                        <option value="118" label="KUWAIT [KW]">KUWAIT [KW]</option>
                                                        <option value="119" label="KYRGYZSTAN [KG]">KYRGYZSTAN [KG]</option>
                                                        <option value="120" label="LAO PEOPLE'S DEMOCRATIC REPUBLIC  [LA]">LAO PEOPLE'S DEMOCRATIC REPUBLIC  [LA]</option>
                                                        <option value="121" label="LATVIA [LV]">LATVIA [LV]</option>
                                                        <option value="122" label="LEBANON [LB]">LEBANON [LB]</option>
                                                        <option value="123" label="LESOTHO [LS]">LESOTHO [LS]</option>
                                                        <option value="124" label="LIBERIA [LR]">LIBERIA [LR]</option>
                                                        <option value="125" label="LIBYAN ARAB JAMAHIRIYA [LY]">LIBYAN ARAB JAMAHIRIYA [LY]</option>
                                                        <option value="126" label="LIECHTENSTEIN [LI]">LIECHTENSTEIN [LI]</option>
                                                        <option value="127" label="LITHUANIA [LT]">LITHUANIA [LT]</option>
                                                        <option value="128" label="LUXEMBOURG [LU]">LUXEMBOURG [LU]</option>
                                                        <option value="129" label="MACAO [MO]">MACAO [MO]</option>
                                                        <option value="130" label="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF [MK]">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF [MK]</option>
                                                        <option value="131" label="MADAGASCAR [MG]">MADAGASCAR [MG]</option>
                                                        <option value="132" label="MALAWI [MW]">MALAWI [MW]</option>
                                                        <option value="133" label="MALAYSIA [MY]">MALAYSIA [MY]</option>
                                                        <option value="134" label="MALDIVES [MV]">MALDIVES [MV]</option>
                                                        <option value="135" label="MALI [ML]">MALI [ML]</option>
                                                        <option value="136" label="MALTA [MT]">MALTA [MT]</option>
                                                        <option value="137" label="MARSHALL ISLANDS [MH]">MARSHALL ISLANDS [MH]</option>
                                                        <option value="138" label="MARTINIQUE [MQ]">MARTINIQUE [MQ]</option>
                                                        <option value="139" label="MAURITANIA [MR]">MAURITANIA [MR]</option>
                                                        <option value="140" label="MAURITIUS [MU]">MAURITIUS [MU]</option>
                                                        <option value="141" label="MAYOTTE [YT]">MAYOTTE [YT]</option>
                                                        <option value="142" label="MEXICO [MX]">MEXICO [MX]</option>
                                                        <option value="143" label="MICRONESIA, FEDERATED STATES OF [FM]">MICRONESIA, FEDERATED STATES OF [FM]</option>
                                                        <option value="144" label="MOLDOVA, REPUBLIC OF [MD]">MOLDOVA, REPUBLIC OF [MD]</option>
                                                        <option value="145" label="MONACO [MC]">MONACO [MC]</option>
                                                        <option value="146" label="MONGOLIA [MN]">MONGOLIA [MN]</option>
                                                        <option value="147" label="MONTSERRAT [MS]">MONTSERRAT [MS]</option>
                                                        <option value="148" label="MOROCCO [MA]">MOROCCO [MA]</option>
                                                        <option value="149" label="MOZAMBIQUE [MZ]">MOZAMBIQUE [MZ]</option>
                                                        <option value="150" label="MYANMAR [MM]">MYANMAR [MM]</option>
                                                        <option value="151" label="NAMIBIA [NA]">NAMIBIA [NA]</option>
                                                        <option value="152" label="NAURU [NR]">NAURU [NR]</option>
                                                        <option value="153" label="NEPAL [NP]">NEPAL [NP]</option>
                                                        <option value="154" label="NETHERLANDS [NL]">NETHERLANDS [NL]</option>
                                                        <option value="155" label="NETHERLANDS ANTILLES [AN]">NETHERLANDS ANTILLES [AN]</option>
                                                        <option value="156" label="NEW CALEDONIA [NC]">NEW CALEDONIA [NC]</option>
                                                        <option value="157" label="NEW ZEALAND [NZ]">NEW ZEALAND [NZ]</option>
                                                        <option value="158" label="NICARAGUA [NI]">NICARAGUA [NI]</option>
                                                        <option value="159" label="NIGER [NE]">NIGER [NE]</option>
                                                        <option value="160" label="NIGERIA [NG]">NIGERIA [NG]</option>
                                                        <option value="161" label="NIUE [NU]">NIUE [NU]</option>
                                                        <option value="162" label="NORFOLK ISLAND [NF]">NORFOLK ISLAND [NF]</option>
                                                        <option value="163" label="NORTHERN MARIANA ISLANDS [MP]">NORTHERN MARIANA ISLANDS [MP]</option>
                                                        <option value="164" label="NORWAY [NO]">NORWAY [NO]</option>
                                                        <option value="165" label="OMAN [OM]">OMAN [OM]</option>
                                                        <option value="166" label="PAKISTAN [PK]">PAKISTAN [PK]</option>
                                                        <option value="167" label="PALAU [PW]">PALAU [PW]</option>
                                                        <option value="168" label="PALESTINIAN TERRITORY, OCCUPIED [PS]">PALESTINIAN TERRITORY, OCCUPIED [PS]</option>
                                                        <option value="169" label="PANAMA [PA]">PANAMA [PA]</option>
                                                        <option value="170" label="PAPUA NEW GUINEA [PG]">PAPUA NEW GUINEA [PG]</option>
                                                        <option value="171" label="PARAGUAY [PY]">PARAGUAY [PY]</option>
                                                        <option value="172" label="PERU [PE]">PERU [PE]</option>
                                                        <option value="173" label="PHILIPPINES [PH]">PHILIPPINES [PH]</option>
                                                        <option value="174" label="PITCAIRN [PN]">PITCAIRN [PN]</option>
                                                        <option value="175" label="POLAND [PL]">POLAND [PL]</option>
                                                        <option value="176" label="PORTUGAL [PT]">PORTUGAL [PT]</option>
                                                        <option value="177" label="PUERTO RICO [PR]">PUERTO RICO [PR]</option>
                                                        <option value="178" label="QATAR [QA]">QATAR [QA]</option>
                                                        <option value="179" label="RÉUNION [RE]">RÉUNION [RE]</option>
                                                        <option value="180" label="ROMANIA [RO]">ROMANIA [RO]</option>
                                                        <option value="181" label="RUSSIAN FEDERATION [RU]">RUSSIAN FEDERATION [RU]</option>
                                                        <option value="182" label="RWANDA [RW]">RWANDA [RW]</option>
                                                        <option value="183" label="SAINT HELENA  [SH]">SAINT HELENA  [SH]</option>
                                                        <option value="184" label="SAINT KITTS AND NEVIS [KN]">SAINT KITTS AND NEVIS [KN]</option>
                                                        <option value="185" label="SAINT LUCIA [LC]">SAINT LUCIA [LC]</option>
                                                        <option value="186" label="SAINT PIERRE AND MIQUELON [PM]">SAINT PIERRE AND MIQUELON [PM]</option>
                                                        <option value="187" label="SAINT VINCENT AND THE GRENADINES [VC]">SAINT VINCENT AND THE GRENADINES [VC]</option>
                                                        <option value="188" label="SAMOA [WS]">SAMOA [WS]</option>
                                                        <option value="189" label="SAN MARINO [SM]">SAN MARINO [SM]</option>
                                                        <option value="190" label="SAO TOME AND PRINCIPE [ST]">SAO TOME AND PRINCIPE [ST]</option>
                                                        <option value="191" label="SAUDI ARABIA [SA]">SAUDI ARABIA [SA]</option>
                                                        <option value="192" label="SENEGAL [SN]">SENEGAL [SN]</option>
                                                        <option value="193" label="SERBIA AND MONTENEGRO [CS]">SERBIA AND MONTENEGRO [CS]</option>
                                                        <option value="194" label="SEYCHELLES [SC]">SEYCHELLES [SC]</option>
                                                        <option value="195" label="SIERRA LEONE [SL]">SIERRA LEONE [SL]</option>
                                                        <option value="196" label="SINGAPORE [SG]">SINGAPORE [SG]</option>
                                                        <option value="197" label="SLOVAKIA [SK]">SLOVAKIA [SK]</option>
                                                        <option value="198" label="SLOVENIA [SI]">SLOVENIA [SI]</option>
                                                        <option value="199" label="SOLOMON ISLANDS [SB]">SOLOMON ISLANDS [SB]</option>
                                                        <option value="200" label="SOMALIA [SO]">SOMALIA [SO]</option>
                                                        <option value="201" label="SOUTH AFRICA [ZA]">SOUTH AFRICA [ZA]</option>
                                                        <option value="202" label="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS [GS]">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS [GS]</option>
                                                        <option value="203" label="SPAIN [ES]">SPAIN [ES]</option>
                                                        <option value="204" label="SRI LANKA [LK]">SRI LANKA [LK]</option>
                                                        <option value="205" label="SUDAN [SD]">SUDAN [SD]</option>
                                                        <option value="206" label="SURINAME [SR]">SURINAME [SR]</option>
                                                        <option value="207" label="SVALBARD AND JAN MAYEN [SJ]">SVALBARD AND JAN MAYEN [SJ]</option>
                                                        <option value="208" label="SWAZILAND [SZ]">SWAZILAND [SZ]</option>
                                                        <option value="209" label="SWEDEN [SE]">SWEDEN [SE]</option>
                                                        <option value="210" label="SWITZERLAND [CH]">SWITZERLAND [CH]</option>
                                                        <option value="211" label="SYRIAN ARAB REPUBLIC [SY]">SYRIAN ARAB REPUBLIC [SY]</option>
                                                        <option value="212" label="TAIWAN, PROVINCE OF CHINA [TW]">TAIWAN, PROVINCE OF CHINA [TW]</option>
                                                        <option value="213" label="TAJIKISTAN [TJ]">TAJIKISTAN [TJ]</option>
                                                        <option value="214" label="TANZANIA, UNITED REPUBLIC OF [TZ]">TANZANIA, UNITED REPUBLIC OF [TZ]</option>
                                                        <option value="215" label="THAILAND [TH]">THAILAND [TH]</option>
                                                        <option value="216" label="TIMOR-LESTE [TL]">TIMOR-LESTE [TL]</option>
                                                        <option value="217" label="TOGO [TG]">TOGO [TG]</option>
                                                        <option value="218" label="TOKELAU [TK]">TOKELAU [TK]</option>
                                                        <option value="219" label="TONGA [TO]">TONGA [TO]</option>
                                                        <option value="220" label="TRINIDAD AND TOBAGO [TT]">TRINIDAD AND TOBAGO [TT]</option>
                                                        <option value="221" label="TUNISIA [TN]">TUNISIA [TN]</option>
                                                        <option value="222" label="TURKEY [TR]">TURKEY [TR]</option>
                                                        <option value="223" label="TURKMENISTAN [TM]">TURKMENISTAN [TM]</option>
                                                        <option value="224" label="TURKS AND CAICOS ISLANDS [TC]">TURKS AND CAICOS ISLANDS [TC]</option>
                                                        <option value="225" label="TUVALU [TV]">TUVALU [TV]</option>
                                                        <option value="226" label="UGANDA [UG]">UGANDA [UG]</option>
                                                        <option value="227" label="UKRAINE [UA]">UKRAINE [UA]</option>
                                                        <option value="228" label="UNITED ARAB EMIRATES [AE]">UNITED ARAB EMIRATES [AE]</option>
                                                        <option value="229" label="UNITED KINGDOM [GB]">UNITED KINGDOM [GB]</option>
                                                        <option value="230" label="UNITED STATES [US]">UNITED STATES [US]</option>
                                                        <option value="231" label="UNITED STATES MINOR OUTLYING ISLANDS [UM]">UNITED STATES MINOR OUTLYING ISLANDS [UM]</option>
                                                        <option value="244" label="Unknown [**]">Unknown [**]</option>
                                                        <option value="232" label="URUGUAY [UY]">URUGUAY [UY]</option>
                                                        <option value="233" label="UZBEKISTAN [UZ]">UZBEKISTAN [UZ]</option>
                                                        <option value="234" label="VANUATU [VU]">VANUATU [VU]</option>
                                                        <option value="235" label="VENEZUELA [VE]">VENEZUELA [VE]</option>
                                                        <option value="236" label="VIET NAM [VN]">VIET NAM [VN]</option>
                                                        <option value="237" label="VIRGIN ISLANDS, BRITISH [VG]">VIRGIN ISLANDS, BRITISH [VG]</option>
                                                        <option value="238" label="VIRGIN ISLANDS, U.S. [VI]">VIRGIN ISLANDS, U.S. [VI]</option>
                                                        <option value="239" label="WALLIS AND FUTUNA [WF]">WALLIS AND FUTUNA [WF]</option>
                                                        <option value="240" label="WESTERN SAHARA [EH]">WESTERN SAHARA [EH]</option>
                                                        <option value="241" label="YEMEN [YE]">YEMEN [YE]</option>
                                                        <option value="242" label="ZAMBIA [ZM]">ZAMBIA [ZM]</option>
                                                        <option value="243" label="ZIMBABWE [ZW]">ZIMBABWE [ZW]</option>
                                                    </select>
                                                    <span class="text-danger" id="country_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Institute Name<span class="text-danger">*</span></label><br>
                                                    <input type="text" class="form-control" @click="remove_err('institutename_err')" name="institutename" id="institutename">
                                                    <span class="text-danger" id="institutename_err"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Course Name<span class="text-danger">*</span></label><br>
                                                    <input type="text" class="form-control" @click="remove_err('coursename_err')" name="coursename" id="coursename">
                                                    <span class="text-danger" id="coursename_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Thesis Name</label><br>
                                                    <input type="text" class="form-control" @click="remove_err('thesesname_err')" name="thesesname" id="thesesname">
                                                    <span class="text-danger" id="thesesname_err"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Course Mode<span class="text-danger">*</span></label><br>
                                                    <select class="form-control" name="coursemoide" id="coursemoide" @click="remove_err('coursemoide_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="1" label="Mixed Mode" selected="selected">Mixed Mode</option>
                                                        <option value="2" label="Full-Time">Full-Time</option>
                                                        <option value="3" label="Partime">Partime</option>
                                                        <option value="4" label="Distant Education">Distant Education</option>
                                                    </select>
                                                    <span class="text-danger" id="coursemoide_err"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Study Status<span class="text-danger">*</span></label><br>
                                                    <select class="form-control" name="coursemoide" id="coursemoide" @click="remove_err('coursemoide_err')">
                                                        <option value="">- Please Select -</option>
                                                        <option value="4" label="Absconded [4]">Absconded [4]</option>
                                                        <option value="1" label="Completed [1]">Completed [1]</option>
                                                        <option value="2" label="In Complete [2]">In Complete [2]</option>
                                                        <option value="6" label="Sought Political Asylum [6]">Sought Political Asylum [6]</option>
                                                        <option value="7" label="Terminated [7]">Terminated [7]</option>
                                                        <option value="3" label="Undergoing [3]">Undergoing [3]</option>
                                                        <option value="8" label="Unknown [9]">Unknown [9]</option>
                                                        <option value="5" label="Withdrawn [5]">Withdrawn [5]</option>
                                                    </select>
                                                    <span class="text-danger" id="coursemoide_err"></span>
                                                </div>
                                                
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Start Date<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" @click="remove_err('error_sdate')" name="sdate" id="sdate" placeholder="Start Date">
                                                    <span class="text-danger" id="error_sdate"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>End Date<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" @click="remove_err('error_edate')" name="edate" id="edate" placeholder="End Date">
                                                    <span class="text-danger" id="error_edate"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Effective Study Status Date</label>
                                                    <input type="text" class="form-control" @click="remove_err('error_sdate')" name="sdate" id="sdate" placeholder="Start Date">
                                                    <span class="text-danger" id="error_sdate"></span>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label>Remarks</label>
                                                    <textarea class="form-control" name="remarks" id="remarks"></textarea>
                                                    <span class="text-danger" id="error_edate"></span>
                                                </div>
                                            </div>
                                        </span>
                                        <div class="form-group row fa-pull-right">
                                            <!-- <button wire:click.prevent="store()" type="button" class="btn btn-primary" @click="showpretab('basic-tab-content')">
                                                <i class="fa fa-arrow-left"></i>  Previous  
                                            </button>
                                            &nbsp; -->
                                            <button wire:click.prevent="store()" type="button" class="btn btn-success"  @click="shownexttab('traninitdetails','participant')" >
                                                Save and Next <i class="fa fa-arrow-right"></i>  
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="participant" role="tabpanel" aria-labelledby="participant-home-tab">
                                <form>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Please select the participants for this training</label>
                                                <button type="button" class="btn btn-dark fa-pull-right" @click="addparticipant()"><i class="fa fa-plus"></i>Add Participant</button> 
                                            </div>  
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <table id="teacherTableList" class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="px-4 py-2 w-20">No.</th>
                                                            <th class="px-4 py-2">Name</th>
                                                            <th class="px-4 py-2">Gender</th>
                                                            <th class="px-4 py-2">Cntact Number</th>
                                                            <th class="px-4 py-2">Email Address</th>
                                                            <th class="px-4 py-2">Organization</th>
                                                            <th class="px-4 py-2 text-center" colspan="2">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group row fa-pull-right">
                                            <button type="button" class="btn btn-primary" @click="previoustab('traninitdetails','participant')" >
                                                <i class="fa fa-arrow-left"></i>  Previous  
                                            </button> 
                                            &nbsp;
                                            <button wire:click.prevent="store()" type="button" class="btn btn-success"  data-target="#confirmationmodal" @click="shownexttab('participant','finalsubmit')" >
                                                <i class="fa fa-save"></i>  Save and Submit 
                                            </button>
                                        </div>
                                    </div>
                                    <modal name="addparticipantmodal" v-if="openaddmodal">
                                         <div class="v--modal-background-click">
                                            <div class="v--modal-box v--modal vue-dialog">
                                                <div class="dialog-content">
                                                    <div class="dialog-c-title">
                                                        Select participants
                                                        <i class="fa fa-times fa-pull-right"></i>
                                                    </div>
                                                    
                                                    <div class="dialog-c-text">.</div>
                                                </div> 
                                                <div class="vue-dialog-buttons">
                                                    <button type="button" @click="closemodal()" class="vue-dialog-button" style="flex: 1 1 33.3333%;">C💩NCEL</button>
                                                    <button type="button" class="vue-dialog-button" style="flex: 1 1 33.3333%;">LIKE</button>
                                                    <button type="button" class="vue-dialog-button" style="flex: 1 1 33.3333%;">REPOST</button>
                                                </div> 
                                            </div>
                                        </div>
                                    </modal>
                                    <modal name="confirmationModal">
                                       <div class="v--modal-background-click">
                                           <div class="v--modal-top-right">
                                            </div> 
                                            <div class="v--modal-box v--modal vue-dialog" style="top: 57.5px; left: 440px; width: 400px; height: auto;">
                                            <div class="dialog-content">
                                                <div class="dialog-c-title">Buttons example</div>
                                                 <div class="dialog-c-text">You can add an arbitrary number of buttons.</div></div> <div class="vue-dialog-buttons"><button type="button" class="vue-dialog-button" style="flex: 1 1 33.3333%;">C💩NCEL</button><button type="button" class="vue-dialog-button" style="flex: 1 1 33.3333%;">LIKE</button><button type="button" class="vue-dialog-button" style="flex: 1 1 33.3333%;">REPOST</button></div> <!----></div></div>
                                    </modal>
                                    
                                </form>
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
        data() {
            return {
                participantCpount: 0,
                openaddmodal: false,
            }
            
        },
        methods: {
            optionval: function(currval){
                currval=$('#level').val();
                let optionval='<option value="">- Please Select -</option>';
                $('#professionalsection').hide();
                $('#qualificationsection').hide();
                if(currval==1){
                    optionval+='<option value="10">CBIP [0008]</option><option value="11">DBIP [0009]</option>  <option value="13">International Program [0011]</option> <option value="12">NBIP [0010]</option> <option value="9">SBIP [0007]</option>';
                    $('#professionalsection').show();
                }
                else{
                     optionval+='<option value="4">In-service/Ex-Country [4]</option><option value="3">In-service/In-Country [3]</option>';
                     $('#qualificationsection').show();
                }
                $('#professional').html(optionval);
            },  
            remove_err: function(errorid){
                $('#'+errorid).html('');
            },
            showfinancialsource: function(){
                let source=$('#financialsource').val();
                $('#externalsource').hide();
                 $('#internalsource').hide();
                if(source=="External"){
                    $('#externalsource').show();
                }
                if(source=="RGoB"){
                  $('#internalsource').show();
                }
            },
            showdaongkhagministry: function(){
                let intersource=$('#internalfinance').val();
                let optionval='<option value="">- Please Select -</option>';
                if(intersource==15){
                    optionval+='<option value="1">Bumthang</option><option value="2">Chukha</option>  <option value="3">Dagana</option> <option value="4">Gasa</option> <option value="5">Gelephu Thromde</option><option value="6">Haa</option>';
                }
                else if(intersource==24){
                     optionval+='<option value="1">MOE</option></option>';
                }
                 else if(intersource==3){
                     optionval+='<option value="1">Jakar HSS</option><option value="3">Chhumey Central School</option><option value="3">Ura Central School</option><option value="3">Tang Central School</option>';
                }
                $('#intersourcetype').html(optionval);
            },
            loaddoners: function(){
                let intersource=$('#donaragency').val();
                let optionval='<option value="">- Please Select -</option>';
                if(intersource==15){
                    optionval+='<option value="1">ADB</option>';
                }
                else if(intersource==24){
                     optionval+='<option value="1">AUSAid</option></option>';
                }
                else if(intersource==22){
                     optionval+='<option value="1">CIDA HSS</option><option value="3">St Xavier University</option>';
                }
                $('#projectdonaragency').html(optionval);
            },
            previoustab(preClass,presentClass){
                $("." + presentClass).removeClass("active");
                $("." + preClass).addClass("active");
                $("#" + presentClass).hide();
                $("#" + preClass).show();
            },
            shownexttab(presentClass,nextClass){
                if(nextClass=="participant"){
                    $("." + presentClass).removeClass("active");
                    $("." + presentClass).addClass("disabled");
                    $("." + nextClass).addClass("active");
                    $("#" + presentClass).hide();
                    $("#" + nextClass).show();
                }
                if(nextClass=="finalsubmit"){
                    this.$modal.show("confirmationModal", { foo: "bar" });
                    //$("#confirmationmodal").modal('show');
                }
            },
            addparticipant: function(){
               // this.participantCpount++;
               this.openaddmodal= true;
               //this.$modal.show("addparticipantmodal");
            },
            closemodal: function(){
               this.openaddmodal = false;
            },
            
        },
       
        mounted () {
            $('#insetLinksection').addClass('menu-open');
            $('#insetLink').addClass('nav-link active');
            $('#applytraining').addClass('active');
        }, 
    }
</script>
