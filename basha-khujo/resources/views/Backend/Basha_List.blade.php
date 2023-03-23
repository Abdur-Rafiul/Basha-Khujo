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
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                    </thead>

                    <tbody class="floor_table">




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
                                    <label for="validationCustom01" class="form-label text-left">Basha Description</label>
                                    <textarea  class="description w-100" name="" id="" cols="30" rows="10"></textarea>
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
    <div class="modal fade" id="EditFloorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Floor</h5>
                    <h5 class="d-none" id="FloorUpdateID"></h5>

                </div>
                <div class="modal-body  text-center">
                    <div class="container">
                        <h6 class="d-none" id="FloorEditID"></h6>

                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <input id="FloorEditImg" type="file" id="" class="form-control mb-3"
                                           placeholder="Floor Photo">
                                    <input id="FloorEditName" type="text" id="" class="form-control mb-3"
                                           placeholder="Floor Name">
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-mdb-dismiss="modal">Cancel</button>
                    <button id="FloorEditUpdateConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Floor Edit End --}}


    <!-- Floor Delete Modal -->
    <div class="modal fade" id="deleteFloorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        getFloorData();



        //For Floor Table
        function getFloorData() {


            axios.get('/getFloorDataAdmin')
                .then(function(response) {
                    //alert("Robin");

                    if (response.status == 200) {

                        //$('#dataTable').DataTable().destroy();

                        $('.floor_table').empty();



                        var dataJSON = response.data;
                        $.each(dataJSON, function(i, item) {
                            $('<tr>').html(

                                "<td><img style='width: 90px' data-id=" + item['id'] +
                                " class='imgOnRow' src=" + item['floor_img'] + "></td>" +
                                "<td>" + dataJSON[i].floor_name + "</td>" +

                                "<td><a class='floorEditBtn' data-id=" + dataJSON[i].id +
                                " ><i class='fas fa-edit'></i></a></td>" +
                                "<td ><a   class='floorDeleteBtn' data-img=" + dataJSON[i].floor_img +
                                "  data-id=" + dataJSON[i].id + "><i class='fas fa-trash-alt'></i></a></td>"


                            ).appendTo('.floor_table');
                        });

                        $('.floorEditBtn').click(function() {
                            var id = $(this).data('id');

                            // alert(id);
                            $('#FloorEditID').html(id);

                            getEditFloorId(id);

                            $('#EditFloorModal').modal('show');
                        })


                        $('.floorDeleteBtn').click(function() {

                            var id = $(this).data('id');
                            var imgLocation = $(this).data('img');




                            $('#FloorDeleteID').html(id);
                            $('#FloorDeleteImg').html(imgLocation);



                            $('#deleteFloorModal').modal('show');
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


        $('#bashaAdd').click(function() {

            $('#bashaAddModal').modal('show');

        })

        $('#FloorAddConfirmBtn').click(function() {



            var FloorName = $('#FloorName').val();

            var MyFile = $('#FloorImg').prop('files')
            var MyFormData = new FormData();
            MyFormData.append('FileKey', MyFile[0]);
            MyFormData.append('FloorName', FloorName);

            if (FloorName.length == 0) {

                //toastr.error('Floor Name is Empty !');
                alert("Floor Name is Empty !")
            } else {
                axios.post('/floorAdd', MyFormData)


                    .then(function(response) {
                        console.log(response)
                        if (response.status == 200) {

                            if (response.data == 1) {
                                alert("Floor Data is Successfully Added !")
                                getFloorData();
                                $('#addFloorModal').modal('hide');
                            } else {
                                alert("Floor Data Failed !")
                                getFloorData();
                                $('#addFloorModal').modal('hide');
                            }
                            //toastr.success(' alert("Floor Name is Empty !").', {timeOut: 2000})


                        } else {
                            alert("Floor Data Failed !")
                            getFloorData();
                            $('#addFloorModal').modal('hide');

                        }
                    }).catch(function(error) {
                    // toastr.warning('Floor Data Not Response.', {timeOut: 2000})
                    alert("Floor Data Not Response!")
                    getFloorData();
                    $('#addFloorModal').modal('hide');
                })
            }

        })





        //Each Services Details
        function getEditFloorId(EditID) {

            axios.post('/FloorEdit', {
                id: EditID
            })
                .then(function(response) {


                    if (response.status == 200) {


                        var jsonData = response.data;

                        $('#FloorEditName').val(jsonData[0].floor_name);
                        //alert(name);
                        // $('#CourseDesUpdateId').val(jsonData[0].course_des);


                    } else {

                    }

                })
                .catch(function(error) {




                });

        }


        $('#FloorEditUpdateConfirmBtn').click(function() {
            var FloorName = $('#FloorEditName').val();
            var id = $('#FloorEditID').html();
            var MyFile = $('#FloorEditImg').prop('files')
            var MyFormData = new FormData();
            MyFormData.append('FileKey', MyFile[0]);
            MyFormData.append('FloorName', FloorName);
            MyFormData.append('id', id);

            if (FloorName.length == 0) {

                toastr.error('Floor Name is Empty !');

            } else {


                axios.post('/FloorEditUpdateConfirmBtn', MyFormData)


                    .then(function(response) {
                        if (response.status == 200) {
                            if (response.data == 1) {
                                alert("Floor Data Successfully Updated")
                                getFloorData();
                                $('#EditFloorModal').modal('hide');
                            } else {
                                alert("Floor Data  Update Failed")
                                getFloorData();
                                $('#EditFloorModal').modal('hide');
                            }


                        } else {
                            alert("Floor Data  Update Failed")
                            getFloorData();
                            $('#EditFloorModal').modal('hide');
                        }
                    }).catch(function(error) {
                    // toastr.warning('Floor Data Update Not Response.', {timeOut: 2000})
                    getFloorData();
                    $('#EditFloorModal').modal('hide');
                })
            }
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
