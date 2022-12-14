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
                <div class="row gy-3 "> 
                    @foreach($data['products'] as $item)
                        <div class="col">
                            <div class="card productsprofile h-100 " style="width: 18rem; " >
                                <img src="{{asset('/assets/uploads/products/'.$item->product_image) }}"  class="card-img-top" height="300px"alt="...">
                                <div class="card-body details" style="position: relative; height: 150px; ">

                                    <h5 class="card-title">{{$item->product_name}}</h5>
                                    
                                    <div class="d-grid gap-2 d-md-block" style="position: absolute; bottom: 10%; height: 150px;">
                                        <h6 class="text-center pricetext"style="margin-top: 30%;">{{$item->unit_price}} KSH<h6>
                                        <a href="{{url('viewproduct/'.$item->product_id)}}" class="btn btn-warning "id="btnpurch" style="color:white;"> View Product</a>
                                        <a href="{{url('addtocart/'.$item->product_id)}}" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        @endforeach
                </div>

            </div>

        </div>
        <div class="text-center d-flex justify-content-center">
                {{ $data['products']->links() }}
        </div>
@endsection  
