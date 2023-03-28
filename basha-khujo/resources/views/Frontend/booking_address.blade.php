@extends('Frontend.Layout.app')


@section('content')

<div class="container" >
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card mt-5">
                <h5 class="card-header">Please Fill-Up This Form</h5>
                <div class="card-body">
                    <div class="card-text">
                        <h5>Basha Name : {{$basha->name}}</h5>
                        <h5>Basha NO : {{$basha->no}}</h5>
                        <h5>Owner Name : {{$basha->woner_no}}</h5>
                    </div>
                    <form action="{{route('payment',$basha->id)}}" >

                    <label for="">Please Enter Your Full Name</label>
                    <input class="form-control" name="name" value=""  type="text" required>

                    <label for="">Please Enter Your Phone Number</label>
                    <input class="form-control" name="phone" value=""  type="text" required>

                    <label for="">Please Enter Your  Email</label>
                    <input class="form-control" name="email" value=""  type="email" required>

                    <button type="submit" class="btn btn-primary mt-2">Conform Booking</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


@endsection

@section('script')

    <script>

    </script>
@endsection


