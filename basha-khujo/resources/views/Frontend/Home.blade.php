@extends('Frontend.Layout.app')


@section('content')

<div class="card">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

    </div>
    <div class="card-body" >
        <div class="container py-5" >
            <div class="row  mb-5 p-5" style="height:120; background: linear-gradient(90deg, #f3f3f3 0%, #e5dfe5 100%);">
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



@endsection

@section('script')

<script>

$('.division').on('change', function() {

    let division_id = $(".division option:selected").val();

    //alert(division)

            axios.post('/districts',{

                division_id : division_id,
            })
                .then(function (response) {
                    // handle success
                     let length = response.data.length;
                    if(response.status == 200){

                        //alert(1)
                        $('.district').empty();
                             for(let i = 0; i < length; i++){

                                $('.district').append(
                                    "<option value="+response.data[i].id+">"+response.data[i].name+ "</option>"
                                )

                            }





                }
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);


            })
            })








            $('.district').on('change', function() {

let district_id = $(".district option:selected").val();

//alert(division)

        axios.post('/upazila',{

            district_id : district_id,
        })
            .then(function (response) {
                // handle success
                 let length = response.data.length;
                if(response.status == 200){

                    //alert(1)
                    $('.upazila').empty();
                         for(let i = 0; i < length; i++){

                            $('.upazila').append(
                                "<option value="+response.data[i].id+">"+response.data[i].name+ "</option>"
                            )

                        }





            }
            })
            .catch(function (error) {
                // handle error
                console.log(error);


        })
        })




$('.upazila').on('change', function() {

let upazila_id = $(".upazila option:selected").val();

//alert(division)

        axios.post('/union',{

            upazila_id : upazila_id,
        })
            .then(function (response) {
                // handle success
                 let length = response.data.length;
                if(response.status == 200){

                    //alert(1)
                    $('.union').empty();
                         for(let i = 0; i < length; i++){

                            $('.union').append(
                                "<option value="+response.data[i].id+">"+response.data[i].name+ "</option>"
                            )

                        }





            }
            })
            .catch(function (error) {
                // handle error
                console.log(error);


        })
        })
</script>
@endsection



