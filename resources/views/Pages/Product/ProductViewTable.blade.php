@extends('layout.TableContent')
@section('TableContent')

{{session('msg')}}
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> --}}


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Product name</th>
                            <th>Quantity</th>
                            <th>Buying Price</th>
                            <th>Selling Price</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Product name</th>
                            <th>Quantity</th>
                            <th>Buying Price</th>
                            <th>Selling Price</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    @php
                        $value=1;
                    @endphp
                    <tbody>
                        @foreach ($data as $val )

                        <tr>
                            <td>{{ $value}}</td>
                            <td>{{ $val ->supplier_name }}</td>
                            <td>{{ $val ->supplier_contact }}</td>
                            <td>{{ $val ->product_name }}</td>
                            <td>{{ $val ->quantity }}</td>
                            <td>{{ $val ->buying_price }}</td>
                            <td>{{ $val ->selling_price }}</td>
                            <td>{{ $val ->quantity * $val ->buying_price }}</td>
                            <td>
                                <a href="editproduct/{{ $val ->id }}"><i class="fas fa-fw fa-edit"></i></a>
                                <a href="deleteproduct/{{ $val ->id }}"><i class="fas fa-fw fa-trash"></i></a>

                            </td>
                        </tr>
                        @php
                          $value += 1;
                        @endphp
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
