<div class="card">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

    </div>
    <div class="card-body" style="background-image:url({{url('photo/body-bg.jpg')}})">
        <div class="container py-5" >
            <div class="row  mb-5 p-5 mt-5" style="height:120; background: linear-gradient(90deg, #000000 0%, #050105 100%);color: white">
                <h1 class="text-center p-4">The easiest way to find a home</h1>
                <div class="col-lg-3">
                    <div class="">

                        <select class="division w-100 bb form-control{{ $errors->has('session') ? ' is-invalid' : '' }}" name="division" id="division">

                            <option data-display="Select Division *" value="">Select Division *</option>
                            @foreach($divisions as $divisions)

                                <option data-display="Select Division *" value="{{$divisions->id}}">{{$divisions->name}}</option>

                            @endforeach

                        </select>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="" id="class-div">
                        <select class="district w-100 bb form-control" id="district">
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
                    <button type="button" class="btn btn-primary mt-1  w-100">Search</button>
                </div>

            </div>

        </div>
    </div>
</div>
