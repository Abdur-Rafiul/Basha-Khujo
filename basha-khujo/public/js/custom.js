

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
    let img1 = $('.img1')[0].files[0].name;
    let img2 = $('.img2')[0].files[0]
    let img3 = $('.img3')[0].files[0]
    let img4 = $('.img4')[0].files[0]
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
    let description = $('.description').val();

    alert(description)

})
