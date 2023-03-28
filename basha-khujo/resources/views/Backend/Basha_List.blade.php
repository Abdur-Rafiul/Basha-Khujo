@extends('Backend.Layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 p-5 ">
                <button id="bashaAdd" class="btn btn-danger my-3">Add New Basha</button>
                <table id="dataTable" class="table table-striped table-bordered scroll">
                    <thead>
                    <tr>
                        <th class="th-sm">id</th>
                        <th class="th-sm">Photo</th>
                        <th class="th-sm">Basha Name</th>
                        <th class="th-sm">Booking Status</th>
                        <th class="th-sm">Customer View</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                    </thead>

                    <tbody class="basha_table">




                    </tbody>
                </table>
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
    {{-- Floor Add End --}}
    {{-- Floor Edit --}}
    <div class="modal fade" id="EditbashaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Basha</h5>
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
                                    <option  data-display="Select Division *" value="">Select Union *</option>

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
                                <label for="validationCustom02" class="form-label mt-4 ">Gas supply</label>

                                <input style="margin-top: 29px" class="gas_supply form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                <label class="" for="">
                                    Ok
                                </label>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label mt-4 ">Lift</label>

                                <input style="margin-top: 29px" class="lift form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="" for="">
                                    Ok
                                </label>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label mt-4 ">Genator</label>

                                <input style="margin-top: 29px" class="generator form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                <label class="" for="">
                                    Ok
                                </label>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label mt-4 ">Security</label>

                                <input style="margin-top: 29px" class="security form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                <label class="" for="">
                                    Ok
                                </label>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label mt-4 ">Parking</label>

                                <input style="margin-top: 29px" class="parking form-check-input " type="checkbox" value="" id="flexCheckDefault">
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
                                <button id="UpdatebashaConfirm" type="button" class="btn btn-primary btn-lg me-0">Save</button>

                            </div>
                        </form>




                    </div>
                </div>


            </div>
        </div>
    </div>
    {{-- Floor Edit End --}}


    <!-- Floor Delete Modal -->
    <div class="modal fade" id="deletebashaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body p-3 text-center">
                    <h5 class="mt-2">Do You Want To Delete?</h5>
                    <h6 class="mt-2 d-none" id="FloorDeleteID"></h6>
                    <h5 class="mt-2 d-none" id="FloorDeleteImg"></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-mdb-dismiss="modal">No</button>
                    <a href="#" type="button" data-id="" id="FloorDeleteConfirmBtn"
                       class="btn btn-sm btn-primary">Yes</a>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')

    <script type="text/javascript">


        getBashaData();



        //For Floor Table
        function getBashaData() {


            axios.get('/getbasha')
                .then(function(response) {
                    //alert("Robin");

                    if (response.status == 200) {

                        //$('#dataTable').DataTable().destroy();

                        $('.basha_table').empty();



                        var dataJSON = response.data;
                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(

                                "<td>"+ item['id']+"</td>"+
                                "<td><img style='width: 90px' data-id=" + item['id'] +
                                " class='imgOnRow' src=" + item['img1'] + "></td>" +
                                "<td>" + dataJSON[i].name + "</td>" +

                                "<td><a class='bashaEditBtn' data-id=" + dataJSON[i].id +
                                " ><i class='fas fa-edit'></i></a></td>" +
                                "<td ><a   class='bashaDeleteBtn' data-img=" + dataJSON[i].img1 +
                                "  data-id=" + dataJSON[i].id + "><i class='fas fa-trash-alt'></i></a></td>"


                            ).appendTo('.basha_table');
                        });

                        $('.bashaEditBtn').click(function() {
                            var id = $(this).data('id');

                            // alert(id);
                            $('#bashaEditID').html(id);

                            getEditbashaId(id);

                            $('#EditbashaModal').modal('show');
                        })


                        $('.bashaDeleteBtn').click(function() {

                            var id = $(this).data('id');
                            var imgLocation = $(this).data('img');




                            $('#bashaDeleteID').html(id);
                            $('#bashaDeleteImg').html(imgLocation);



                            $('#deletebashaModal').modal('show');
                        })


                        $('#dataTable').DataTable({
                            "order": false
                        });
                        $('.dataTables_length').addClass('bs-select');


                    } else {

                    }

                })
                .catch(function(error) {



                });
        }







        //Each Services Details
        function getEditbashaId(EditID) {

            alert(EditID);

            axios.post('/editbasha', {
                id: EditID
            })
                .then(function(response) {


                    if (response.status == 200) {


                        var jsonData = response.data;

                        let bashaName = $('.bashaName').val(jsonData.name);
                        let bashaNo = $('.bashaNo').val(jsonData.no);
                        let woner_no = $('.woner_no').val(jsonData.woner_no);


                        let img1= $('.img1').prop('files');
                        let img2= $('.img2').prop('files');
                        let img3= $('.img3').prop('files');
                        let img4= $('.img4').prop('files');
                        let division = $(".division option:selected").val();
                        let district = $(".district option:selected").val();
                        let upazila = $(".upazila option:selected").val();
                        let union = $(".union select").val(jsonData.union);
                        let basha_type = $(".basha_type option:selected").val(jsonData.basha_type);
                        let bed_room = $(".bed_room option:selected").val(jsonData.bed_room);
                        let wash_room = $(".wash_room option:selected").val(jsonData.wash_room);
                        let kitchen_room = $(".kitchen_room option:selected").val(jsonData.kitchen_room);
                        let barinda_room = $(".barinda_room option:selected").val(jsonData.barinda);
                        let flat_position = $(".flat_position option:selected").val(jsonData.flat_position);
                        let gas_supply = 0;


                        let Current_bill = $('.Current_bill').val(jsonData.current_bill);
                        let gas_bill = $('.gas_bill').val(jsonData.gash_bill);
                        let water_bill = $('.water_bill').val(jsonData.water_bill);
                        let service_charge = $('.service_charge').val(jsonData.service_charge);
                        let sit_charge = $('.sit_charge').val(jsonData.sit_charge);
                        let basha_charge = $('.basha_charge').val(jsonData.flat_charge);
                        let description = $('.description').val(jsonData.description);


                    } else {

                    }

                })
                .catch(function(error) {




                });

        }


        $('#UpdatebashaConfirm').click(function() {

            let bashaName = $('.bashaName').val();
            let bashaNo = $('.bashaNo').val();
            let woner_no = $('.woner_no').val();
            // let img1 = $('.img1')[0].files[0].name;
            // let img2 = $('.img2')[0].files[0].name;
            // let img3 = $('.img3')[0].files[0].name;
            // let img4 = $('.img4')[0].files[0].name;

            let img1= $('.img1').prop('files');
            let img2= $('.img2').prop('files');
            let img3= $('.img3').prop('files');
            let img4= $('.img4').prop('files');
            let division = $(".division option:selected").val();
            let district = $(".district option:selected").val();
            let upazila = $(".upazila option:selected").val();
            let union = $(".union option:selected").val();
            let basha_type = $(".basha_type option:selected").val();
            let bed_room = $(".bed_room option:selected").val();
            let wash_room = $(".wash_room option:selected").val();
            let kitchen_room = $(".kitchen_room option:selected").val();
            let barinda_room = $(".barinda_room option:selected").val();
            let flat_position = $(".flat_position option:selected").val();
            let gas_supply = 0;



            if ($(".gas_supply").is(':checked')){
                gas_supply = 1;
                // alert(gas_supply);
            }



            else {
                // alert("unchecked");
                gas_supply = 0;
                // alert(gas_supply);
            }

            let lift = 0;



            if ($(".lift").is(':checked')){
                lift = 1;
                // alert(gas_supply);
            }



            else {
                // alert("unchecked");
                lift = 0;
                // alert(gas_supply);
            }

            //alert(gas_supply);
            let generator = 0;



            if ($(".generator").is(':checked')){
                generator = 1;
                // alert(gas_supply);
            }



            else {
                // alert("unchecked");
                generator = 0;
                // alert(gas_supply);
            }

            // alert(generator);

            let security = 0;



            if ($(".security").is(':checked')){
                security = 1;
                // alert(gas_supply);
            }



            else {
                // alert("unchecked");
                security = 0;
                // alert(gas_supply);
            }

            // alert(generator);

            let parking = 0;



            if ($(".parking").is(':checked')){
                parking = 1;
                // alert(gas_supply);
            }



            else {
                // alert("unchecked");
                parking = 0;
                // alert(gas_supply);
            }

            // alert(generator);

            let Current_bill = $('.Current_bill').val();
            let gas_bill = $('.gas_bill').val();
            let water_bill = $('.water_bill').val();
            let service_charge = $('.service_charge').val();
            let sit_charge = $('.sit_charge').val();
            let basha_charge = $('.basha_charge').val();
            let description = $('.description').val();

            let MyFormData = new FormData();
            MyFormData.append('FileKey1', img1[0]);
            MyFormData.append('FileKey2', img2[0]);
            MyFormData.append('FileKey3', img3[0]);
            MyFormData.append('FileKey4', img4[0]);



            MyFormData.append('description', description);
            MyFormData.append('sit_charge', sit_charge);
            MyFormData.append('basha_charge', basha_charge);
            MyFormData.append('service_charge', service_charge);
            MyFormData.append('water_bill', water_bill);
            MyFormData.append('gas_bill', gas_bill);
            MyFormData.append('Current_bill', Current_bill);
            MyFormData.append('parking', parking);
            MyFormData.append('security', security);
            MyFormData.append('generator', generator);
            MyFormData.append('lift', lift);
            MyFormData.append('gas_supply', gas_supply);
            MyFormData.append('division', division);
            MyFormData.append('district', district);
            MyFormData.append('upazila', upazila);
            MyFormData.append('union', union);
            MyFormData.append('basha_type', basha_type);
            MyFormData.append('bed_room', bed_room);
            MyFormData.append('wash_room', wash_room);
            MyFormData.append('kitchen_room', kitchen_room);
            MyFormData.append('barinda_room', barinda_room);
            MyFormData.append('flat_position', flat_position);
            MyFormData.append('bashaName', bashaName);
            MyFormData.append('bashaNo', bashaNo);
            MyFormData.append('woner_no', woner_no);


            axios.post('/BashaUpdateConfirmBtn', MyFormData)


                    .then(function(response) {
                        if (response.status == 200) {
                            if (response.data == 1) {
                                alert("Basha Data Successfully Updated")
                                getBashaData();
                                $('#EditbashaModal').modal('hide');
                            } else {
                                alert("Floor Data  Update Failed")
                                getBashaData();
                                $('#EditbashaModal').modal('hide');
                            }


                        } else {
                            alert("Floor Data  Update Failed")
                            getBashaData();
                            $('#EditbashaModal').modal('hide');
                        }
                    }).catch(function(error) {
                    // toastr.warning('Floor Data Update Not Response.', {timeOut: 2000})
                getBashaData();
                    $('#EditbashaModal').modal('hide');
                })

        })

        $('#FloorDeleteConfirmBtn').click(function() {
            var id = $('#FloorDeleteID').html();
            var img = $('#FloorDeleteImg').html();



            axios.post('/FloorDelete', {
                id: id,
                img: img
            })
                .then(function(response) {

                    //alert(response.data);

                    if (response.status == 200) {

                        if (response.data == 1) {
                            //toastr.success('Floor Data Successfully Deleted.', {timeOut: 2000})
                            alert('Floor Data Successfully Deleted')
                            getFloorData();
                            $('#deleteFloorModal').modal('hide');




                        } else {
                            alert('Floor Data Delete Failed')

                            getFloorData();
                        }
                    } else {
                        alert('Floor Data Delete Failed')

                        getFloorData();
                    }



                })
                .catch(function(error) {

                    //toastr.warning('Floor Data Delete Not Response.', {timeOut: 2000})
                    alert('Floor Data Delete Failed')

                    getFloorData();



                });
        })
    </script>
@endsection
