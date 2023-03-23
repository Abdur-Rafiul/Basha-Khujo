

axios.get('/division',{


})
    .then(function (response) {
        // handle success
        let length = response.data.length;

        //alert(length)
        if(response.status == 200){

            //alert(1)
            $('.division').empty();
            for(let i = 0; i < length; i++){

                $('.division').append(
                    "<option value="+response.data[i].id+">"+response.data[i].name+ "</option>"
                )

            }





        }
    })
    .catch(function (error) {
        // handle error
        console.log(error);


    })



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

alert(1)
$('.basha_list').click(function (){

})


$('#bashaConfirm').click(function (){


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

    console.log(MyFormData)

    axios.post('/bashaAdd', MyFormData)


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

})

getFloorData();



//For Floor Table
function getFloorData() {


    axios.get('/getBashaAdmin')
        .then(function(response) {
            //alert("Robin");

            if (response.status == 200) {

                //$('#dataTable').DataTable().destroy();

                $('.basha_table').empty();



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


                    ).appendTo('.basha_table');
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
