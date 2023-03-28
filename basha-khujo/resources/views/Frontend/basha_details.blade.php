@extends('Frontend.Layout.app')


@section('content')

   <div class="container mt-5">
       <div class="row">
           <div class="col-md-4">
               <h3 class="active">Another Photo of Home</h3>
               <img class="w-100" src="{{$basha->img1}}" alt="">
               <img class="w-100" src="{{$basha->img2}}" alt="">
               <img class="w-100" src="{{$basha->img3}}" alt="">
               <img class="w-100" src="{{$basha->img3}}" alt="">
           </div>
           <div class="col-md-8">
               <h2 class="text-center">Home Details</h2>
               <div class="card">
                   <div class="card-header">Basha Name : {{$basha->name}}</div>
                   <div class="card-body">
                       <blockquote class="blockquote mb-0">
                           <ul>
                               <li>Owner Name : {{$basha->woner_no}}</li>
                               <li>Basha Type : {{$basha->basha_type}}</li>
                               <li>Bed Room : {{$basha->bed_room}}</li>
                               <li>Wash Room : {{$basha->wash_room}}</li>
                               <li>Kitchen Room : {{$basha->kitchen_room}}</li>
                               <li>Barinda : {{$basha->barinda}}</li>
                               <li>Flat Position : {{$basha->flat_position}}</li>
                               <li>Current Bill : {{$basha->current_bill}} tk</li>
                               <li>Gash Bill : {{$basha->gash_bill}} tk</li>
                               <li>Water Bill : {{$basha->water_bill}} tk</li>
                               <li>Service Charge : {{$basha->service_charge}} tk</li>
                               <li>Sit Charge : {{$basha->sit_charge}} tk</li>
                               <li>Basha Charge : {{$basha->flat_charge}} tk</li>
                               <li>Supply Gas : {{($basha->gash == 1) ? 'OK' : 'NO'}}</li>
                               <li>Lift : {{($basha->lift == 1) ? 'OK' : 'NO'}}</li>
                               <li>Generator: {{($basha->generator == 1) ? 'OK' : 'NO'}}</li>
                               <li>Security : {{($basha->secyrity == 1) ? 'OK' : 'NO'}}</li>
                               <li>Parking : {{($basha->parking == 1) ? 'OK' : 'NO'}}</li>
                               <li>Description : {!!$basha->description!!}</li>
                           </ul>

                           <a href="{{route('booking',$basha->id)}}" class="btn-dark btn p-3"> Booking For The Home</a>
                       </blockquote>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection

@section('script')

    <script>

    </script>
@endsection


