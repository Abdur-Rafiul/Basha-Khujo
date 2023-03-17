
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
