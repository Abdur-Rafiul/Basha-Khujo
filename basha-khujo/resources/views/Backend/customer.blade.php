@extends('Backend.Layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 p-5 ">
                <table id="dataTable" class="table table-striped table-bordered scroll">
                    <thead>
                    <tr>
                        <th class="th-sm">id</th>
                        <th class="th-sm">User Name</th>
                        <th class="th-sm">User Email</th>
                        <th class="th-sm">Phone</th>


                    </tr>
                    </thead>

                    <tbody class="customer_table">




                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection

@section('script')

    <script type="text/javascript">
        getCustomerData();



        //For Floor Table
        function getCustomerData() {


            axios.get('/getcustomer')
                .then(function(response) {
                    //alert("Robin");

                    if (response.status == 200) {

                        //$('#dataTable').DataTable().destroy();

                        $('.customer_table').empty();



                        var dataJSON = response.data;
                        $.each(dataJSON, function(i, item) {

                            $('<tr>').html(

                                "<td>"+ item['id']+"</td>"+

                                "<td>" + dataJSON[i].user_name + "</td>" +
                                "<td>" + dataJSON[i].user_email+ "</td>"+
                                "<td>" + dataJSON[i].user_phone+ "</td>"


                            ).appendTo('.customer_table');
                        });




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
    </script>

@endsection
