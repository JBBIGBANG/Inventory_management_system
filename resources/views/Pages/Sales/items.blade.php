@extends('layout.TableContent')
@section("ItemView")
    <div class="container-fluid" >
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >

                        <thead style="color:black; background-color: rgb(220, 225, 228)">
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>

                        <tbody style="color: black">
                            <tr>
                                @foreach($items as $key=>$item)
                                    <tr>
                                        <td>{{++$key}} </td>
                                        <td>{{$item->product_name}} </td>
                                        <td>{{$item->quantity}} </td>
                                        <td>{{$item->budget}} </td>
                                        <td>{{$item->budget * $item->quantity}} </td>
                                    </tr>
                                @endforeach
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection







