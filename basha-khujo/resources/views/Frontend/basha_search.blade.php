<div class="card">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

    </div>
    <div class="card-body" style="background-image:url({{url('photo/body-bg.jpg')}})">
        <div class="container py-5" >
            <button id="bashaAdd" class="basha_add btn-dark btn-rounded p-3">Basha Add</button>
            <div class="row  mb-5 p-5 mt-5" style="height:120; background: linear-gradient(90deg, #000000 0%, #050105 100%);color: white">
                <h1 class="text-center p-4">The easiest way to find a home</h1>
                <div class="col-lg-3">


                        <form action="{{route('basha_search')}}">


                        <select class="division w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="division" id="division">

                            <option data-display="Select Division *" value="">Select Division *</option>
                            @foreach($divisions as $divisions)

                                <option data-display="Select Division *" value="{{$divisions->id}}">{{$divisions->name}}</option>

                            @endforeach

                        </select>



                </div>

                <div class="col-lg-3">
                    <div class="" id="class-div">
                        <select class="district w-100 bb form-control" id="district" name="district">
                            <option data-display="Select District*" value="">Select District *</option>

                        </select>


                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="" id="sectionStudentDiv">
                        <select class="upazila w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="upazila" id="upazila">
                            <option data-display="Select Division *" value="">Select Upazila *</option>

                        </select>

                    </div>
                </div>



                <div class="col-lg-3 " id="select_group_div">
                    <select class="union w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="union" id="union">
                        <option data-display="Select Division *" value="">Select Union *</option>

                    </select>

                </div>





                <div class="col-lg-10">
                </div>
                <div class="col-lg-2">
                    <button  type="submit" class="btn btn-primary mt-1  w-100">Search</button>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>
{{-- //Basha Add Modal --}}
<div  class="modal fade w-100" id="bashaAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Basha</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div style="background-image:url({{url('photo/body-bg.jpg')}})" class="modal-body  text-center">
                <div class="container-fluid">




                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label text-left">Basha name</label>
                            <input type="text" class="form-control bashaName"  id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Basha No</label>
                            <input type="text" class="form-control bashaNo" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Woner Name</label>
                            <input type="text" class="form-control woner_no" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Photo</label>
                            <input type="file" class="form-control img1"  id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Photo</label>
                            <input type="file" class="form-control img2"  id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Photo</label>
                            <input type="file" class="form-control img3"  id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Photo</label>
                            <input type="file" class="form-control img4"  id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Division</label>
                            <select class="division w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name=""  id="">
                                <option data-display="Select Division *" value="">Select Division *</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">District</label>
                            <select class="district w-100 bb form-control" id="district">
                                <option data-display="Select District*" value="">Select District *</option>

                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Upazila</label>
                            <select class="upazila w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="upazila" id="upazila">
                                <option data-display="Select Division *" value="">Select Upazila *</option>

                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Union</label>
                            <select class="union w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="union" id="union">
                                <option data-display="Select Division *" value="">Select Union *</option>

                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Basha Type</label>
                            <select class="basha_type w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="union" id="union">
                                <option data-display="Select Division *" value="Single">Single</option>
                                <option data-display="Select Division *" value="Single">Double</option>
                                <option data-display="Select Division *" value="Single">Sublet</option>
                                <option data-display="Select Division *" value="Single">Flat</option>

                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Bed Room</label>
                            <select class="bed_room w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="union" id="union">
                                <option data-display="Select Division *" value="1">1</option>
                                <option data-display="Select Division *" value="2">2</option>
                                <option data-display="Select Division *" value="3">3</option>
                                <option data-display="Select Division *" value="4">4</option>
                                <option data-display="Select Division *" value="5">5</option>
                                <option data-display="Select Division *" value="6">6</option>
                                <option data-display="Select Division *" value="7">7</option>
                                <option data-display="Select Division *" value="8">8</option>
                                <option data-display="Select Division *" value="9">9</option>
                                <option data-display="Select Division *" value="10">10</option>
                                <option data-display="Select Division *" value="11">11</option>
                                <option data-display="Select Division *" value="12">12</option>
                                <option data-display="Select Division *" value="13">13</option>
                                <option data-display="Select Division *" value="14">14</option>
                                <option data-display="Select Division *" value="15">15</option>
                                <option data-display="Select Division *" value="16">16</option>
                                <option data-display="Select Division *" value="17">17</option>
                                <option data-display="Select Division *" value="18">18</option>
                                <option data-display="Select Division *" value="19">19</option>
                                <option data-display="Select Division *" value="20">20</option>

                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Wash Room</label>
                            <select class="wash_room w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="union" id="union">
                                <option data-display="Select Division *" value="1">1</option>
                                <option data-display="Select Division *" value="2">2</option>
                                <option data-display="Select Division *" value="3">3</option>
                                <option data-display="Select Division *" value="4">4</option>
                                <option data-display="Select Division *" value="5">5</option>
                                <option data-display="Select Division *" value="6">6</option>
                                <option data-display="Select Division *" value="7">7</option>
                                <option data-display="Select Division *" value="8">8</option>
                                <option data-display="Select Division *" value="9">9</option>
                                <option data-display="Select Division *" value="10">10</option>

                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Kitchen Room</label>
                            <select class="kitchen_room w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="union" id="union">
                                <option data-display="Select Division *" value="1">1</option>
                                <option data-display="Select Division *" value="2">2</option>
                                <option data-display="Select Division *" value="3">3</option>
                                <option data-display="Select Division *" value="4">4</option>
                                <option data-display="Select Division *" value="5">5</option>
                                <option data-display="Select Division *" value="6">6</option>


                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Barinda Room</label>
                            <select class="barinda_room w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="union" id="union">
                                <option data-display="Select Division *" value="1">1</option>
                                <option data-display="Select Division *" value="2">2</option>
                                <option data-display="Select Division *" value="3">3</option>
                                <option data-display="Select Division *" value="4">4</option>
                                <option data-display="Select Division *" value="5">5</option>
                                <option data-display="Select Division *" value="6">6</option>


                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Flat Position</label>
                            <select class="flat_position w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="union" id="union">
                                <option data-display="Select Division *" value="1">1 Floor</option>
                                <option data-display="Select Division *" value="2">2 Floor</option>
                                <option data-display="Select Division *" value="3">3 Floor</option>
                                <option data-display="Select Division *" value="4">4 Floor</option>
                                <option data-display="Select Division *" value="5">5 Floor</option>
                                <option data-display="Select Division *" value="6">6 Floor</option>
                                <option data-display="Select Division *" value="6">7 Floor</option>
                                <option data-display="Select Division *" value="6">8 Floor</option>
                                <option data-display="Select Division *" value="6">9 Floor</option>
                                <option data-display="Select Division *" value="6">10 Floor</option>
                                <option data-display="Select Division *" value="6">11 Floor</option>
                                <option data-display="Select Division *" value="6">12 Floor</option>


                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label mt-4">Gas supply</label>

                            <input class="gas_supply form-check-input mt-4" type="checkbox" value="" id="flexCheckDefault">
                            <label class="" for="">
                                Ok
                            </label>

                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label mt-4">Lift</label>

                            <input class="lift form-check-input mt-4" type="checkbox" value="" id="flexCheckDefault">
                            <label class="" for="">
                                Ok
                            </label>

                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label mt-4">Genator</label>

                            <input class="generator form-check-input mt-4" type="checkbox" value="" id="flexCheckDefault">
                            <label class="" for="">
                                Ok
                            </label>

                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label mt-4">Security</label>

                            <input class="security form-check-input mt-4" type="checkbox" value="" id="flexCheckDefault">
                            <label class="" for="">
                                Ok
                            </label>

                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label mt-4">Parking</label>

                            <input style="margin-top: 10px" class="parking form-check-input mt-4" type="checkbox" value="" id="flexCheckDefault">
                            <label class="" for="">
                                Ok
                            </label>

                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label text-left">Current Bill</label>
                            <input type="text" class="Current_bill form-control"  id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label text-left">Gas Bill</label>
                            <input type="text" class="gas_bill form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label text-left">Water Bill</label>
                            <input type="text" class="water_bill form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label text-left">Service Charge</label>
                            <input type="text" class="service_charge form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label text-left">Sit Charge</label>
                            <input type="text" class="sit_charge form-control"  id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label text-left">Basha Charge</label>
                            <input type="text" class="basha_charge form-control"  id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="validationCustom01"  class="form-label text-left">Basha Description</label>

                            <div class="form-group">
                                <textarea  class="form-control description summernote" name="summernote" id="summernote"></textarea>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-12">
                            <button id="bashaConfirm" type="button" class="btn btn-primary btn-lg me-0">Save</button>

                        </div>
                    </form>




                </div>
            </div>


        </div>
    </div>
</div>
