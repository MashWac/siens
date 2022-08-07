@extends('layouts.user')
@section('content')

        <div id="productshome" class="py-4">
            <h2 id="productttitleend">OUR PRODUCTS</h2>
            <hr>
            <div id="filterbar">
                <ul id="filters">
                    <li class="filteropts"><a href="#" >All</a></li>
                    <li class="filteropts"><a href="#" >Supplements</a></li>
                    <li class="filteropts"><a href="#" >BioEnergy</a></li>
                    <li class="filteropts"><a href="#" >BioHerbs</a></li>
                    <li class="filteropts"><ion-icon name="funnel"></ion-icon></li>
                </ul>     
            </div>



            <div class="card-body">
                <div class="row gy-3">
                    @foreach($products as $item)
                        <div class="col">
                            <div class="card productsprofile h-100 " style="width: 15rem; " >
                                <input type="text" id="eventflyer" value="asset('/assets/uploads/events/'.$item->product_image)" hidden >
                                <img src="{{asset('/assets/uploads/products/'.$item->product_image) }}"  class="card-img-top" height="300px"alt="...">
                                <div class="card-body details" style="position: relative; height: 150px; ">
                                    <!-- <input type="text" id="eventnames" value="{{$item->event_name}}" hidden >
                                    <input type="text" id="eventlocation" value="{{$item->location}}" hidden >
                                    <input type="text" id="eventtime" value=" {{$item->event_date}}" hidden>
                                    <input type="text" id="eventdescription" value=" {{$item->event_description}}" hidden>
                                    <input type="text" id="organiser" value=" {{$item->name}}" hidden>
                                    <input type="text" id="eventflyer" value="assets/uploads/events/{{$item->event_flyer}}" hidden> -->

                                    <h5 class="card-title">{{$item->product_name}}</h5>
                                    
                                    <div class="d-grid gap-2 d-md-block" style="position: absolute; bottom: 10%; height: 150px;">
                                        <h6 style="margin-top: 30%;">{{$item->unit_price}} KSH<h6>
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                        <a href="#" class="btn btn-warning "id="btnpurch" style="color:white;"> Purchase</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>

        </div>
@endsection  
