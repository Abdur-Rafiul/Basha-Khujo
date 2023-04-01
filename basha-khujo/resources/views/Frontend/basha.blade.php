
<div class="container mt-3">
    <div class="row">



            @foreach($bashas as $basha)
            @if(isset($basha))


            @if($basha->status == 1)
                <div class="col-lg-4 col-md-4 col-sm-6" id="basha_section">
                    <div class="card" style="background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e); color: white">
                        <img style="width: 100%; height: 300px" src="{{$basha->img1}}" class="card-img-top" alt="Fissure in Sandstone"/>
                        <div class="card-body">
                            <h5 class="card-title">{{$basha->name}}</h5>
                            <p class="card-text">Basha No : {{$basha->no}}</p>
                            <span class="d-none">
                             {{
                            $division_name = \Devfaysal\BangladeshGeocode\Models\Division::where('id',$basha->division)
                              ->pluck('name')
                         }}
                        </span>
                            <span class="d-none">
                             {{
                            $upazila_name = \Devfaysal\BangladeshGeocode\Models\Upazila::where('id',$basha->upazila)
                              ->pluck('name')
                         }}
                        </span>
                            <span class="d-none">
                             {{
                            $districts_name = \Devfaysal\BangladeshGeocode\Models\District::where('id',$basha->districts)
                              ->pluck('name')
                         }}
                        </span>
                            <span class="d-none">
                             {{
                            $union_name = \Devfaysal\BangladeshGeocode\Models\Union::where('id',$basha->union)
                              ->pluck('name')
                         }}
                        </span>

                            <span class="card-text ">Division: {{$division_name[0]}}</span><br>
                            <span class="card-text ">Upazilla : {{$upazila_name[0]}}</span><br>
                            <span class="card-text">Districts : {{$districts_name[0]}}</span><br>
                            <span class="card-text ">Union : {{$union_name[0]}}</span><br>

                            <a href="#" class="btn btn-danger mt-1">Basha Already Booked</a>
                        </div>
                    </div>
                </div>
            @else

                    <div class="col-lg-4 col-md-4 col-sm-6" id="basha_section">
                 <div class="card" style="background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e); color: white">
{{--                     <th scope="row">{{ $loop->index+1 }}</th>--}}

                     <img style="width: 100%; height: 300px" src="{{$basha->img1}}" class="card-img-top" alt="Fissure in Sandstone"/>
                     <div class="card-body">
                         <span class="text-danger">{{ $basha->created_at->diffForHumans() }} Ago</span>

                         <h5 class="card-title">{{$basha->name}}</h5>
                         <p class="card-text">Basha No : {{$basha->no}}</p>
                         <span class="d-none">
                              {{
                             $division_name = \Devfaysal\BangladeshGeocode\Models\Division::where('id',$basha->division)
                               ->pluck('name')
                          }}
                         </span>
                         <span class="d-none">
                              {{
                             $upazila_name = \Devfaysal\BangladeshGeocode\Models\Upazila::where('id',$basha->upazila)
                               ->pluck('name')
                          }}
                         </span>
                         <span class="d-none">
                              {{
                             $districts_name = \Devfaysal\BangladeshGeocode\Models\District::where('id',$basha->districts)
                               ->pluck('name')
                          }}
                         </span>
                         <span class="d-none">
                              {{
                             $union_name = \Devfaysal\BangladeshGeocode\Models\Union::where('id',$basha->union)
                               ->pluck('name')
                          }}
                         </span>

                         <span class="card-text ">Division: {{$division_name[0]}}</span><br>
                         <span class="card-text ">Upazilla : {{$upazila_name[0]}}</span><br>
                         <span class="card-text">Districts : {{$districts_name[0]}}</span><br>
                         <span class="card-text ">Union : {{$union_name[0]}}</span><br>

                         <a href="{{route('basha_details',$basha->id)}}" class="btn btn-primary mt-1">Click Me</a>
                     </div>
                 </div>
             </div>

            @endif
            @endif
            @endforeach


        <diV class="d-flex justify-content-center mt-1">
            {{ $bashas->links() }}
        </diV>

    </div>
</div>





