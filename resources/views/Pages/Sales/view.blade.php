@extends('layout.TableContent')
@section("NameAndIdView")
    <div class="container-fluid" >
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  >

                        <thead style="color:black; background-color: rgb(220, 225, 228)">
                            <tr>
                                <th>SL</th>
                                <th>Customer Name</th>
                                <th>Payment</th>
                                <th>Contact</th>
                            </tr>
                        </thead>

                        <tbody style="color: black">
                            <tr>
                                @foreach($order as $key=>$data)
                                    <tr><td>{{++$key}} </td>
                                        <td>{{$data->customer_name}} </td>
                                        <td>{{$data->payment}} </td>
                                        <td><a href="/items/{{$data->id}}"->{{$data->id}} </a></td>
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
