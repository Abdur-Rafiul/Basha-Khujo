@extends('Backend.Layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 p-5 ">
                <table id="dataTable" class="table table-striped table-bordered scroll">
                    <thead>
                    <tr>
                        <th class="th-sm">id</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>



                    </tr>
                    </thead>

                    <tbody class="user_table">




                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection

@section('script')

    <script type="text/javascript">
        getUserData();



        //For Floor Table
        function getUserData() {


            axios.get('/getuser')
                .then(function(response) {
                    //alert("Robin");

                    if (response.status == 200) {

                        //$('#dataTable').DataTable().destroy();

                        $('.user_table').empty();



                        var dataJSON = response.data;
                        $.each(dataJSON, function(i, item) {

                            $('<tr>').html(

                                "<td>"+ item['id']+"</td>"+

                                "<td>" + dataJSON[i].name + "</td>" +
                                "<td>" + dataJSON[i].email+ "</td>"



                            ).appendTo('.user_table');
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
