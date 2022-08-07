@extends('layouts.user')
@section('content')
<div id="cartpage" class="py-3">
        <div class="card-header">
            <div class="headie">
            <h2 id="headline">My Cart</h2>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-stripped table-hover" id="ticketstable">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Available Stock</th>
                        <th>Quantity</th>
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count=0;?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
          
                </tbody>
            </table>
            <div class="card">
                <div class="card-header">
                    <h2>Order Summary</h2>

                </div>
                <div class="card-body">
                    <h4>Delivery Details</h4>
                    <h6>Please not if you are outside Kenya Contact Us for advice on Purchase</h6>
                    <form>
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <select type='number' class="form-select form-select-sm formquan" onchange="" name="ticketquantity" id="ticketquantity" aria-label=".form-select-sm example">
                                <option value="0" >Select Region</option>
                                <option value="1" >Nairobi</option>
                                <option value="2" >Outside Nairobi</option>
                            </select>
                        </div>
                        <div>
                            <label for="address">Address:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="address">Town:</label>
                            <input type="text" class="form-control">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
@endsection  


