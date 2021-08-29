@extends('layout.master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/Assets/Css/AddProductForm.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <title>Document</title>
</head>
@section('NewSalesMemo')

    <body>
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    {{-- <h3>Add Product</h3> --}}
                    {{-- <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p> --}}
                    <div class="card">
                        <h5 class="text-center mb-4">New Sales Memo</h5>
                        <form class="form-card" action="{{ route('orderproduct') }}"  method="POST">
                            @csrf
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Customer name<span class="text-danger">
                                            *</span></label> <input type="text" id="c_name" name="c_name"
                                        placeholder="Enter your name" onblur="validate(1)">
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Customer Contact<span class="text-danger">
                                            *</span></label> <input type="text" id="c_contact" name="c_contact"
                                        placeholder="Enter Contact" onblur="validate(2)">
                                </div>

                            </div>
                            <div id="product_wrapper_box">

                            </div>

                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">
                                *</span></label>
                                <span class="btn btn-block btn-danger" onclick="handleAddNewProduct()">Add New
                                Product</span>

                            </div>

                                    {{-- <div><td colspan="2"> <input id="textInputField" type="text" name="mytext[]"  class="form-control" aria-label="Default" ></td>
                                    </div> --}}
                            {{-- <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">Total Price<span class="text-danger">
                                            *</span></label> <input type="text" id="t_price" name="t_price" placeholder=""
                                        onblur="validate(6)"> </div> --}}
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Payment<span class="text-danger"> *</span></label>
                                    <input type="text" id="payment" name="payment" placeholder="" onblur="validate(5)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Due Payment<span class="text-danger">
                                            *</span></label> <input type="text" id="due_payment" name="due_payment" placeholder=""
                                        onblur="validate(5)"> </div>

                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit
                                        Order</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var count = 0;

            function handleAddNewProduct(){
                var newElement = document.createElement('div');

                var productRow = `<div class="row justify-content-between text-left">\
                                    <div class="form-group col-sm-6 flex-column d-flex"> \
                                        <label class="form-control-label px-3">Product Name<span class="text-danger"> \
                                                *</span></label>
                                                <input type="text"  name="p_name[]" onchange="handleProductName()" placeholder="" \
                                            > </div> \
                                    <div class="form-group col-sm-6 flex-column d-flex">\
                                     <label class="form-control-label px-3">Price<span class="text-danger"> *</span>\
                                            </label>\
                                        <input type="text"  name="p_price[]" placeholder=""> </div>\
                                    <div class="form-group col-sm-6 flex-column d-flex"> \
                                    <label class="form-control-label px-3">Quantity<span class="text-danger"> *</span></label>\
                                        <input type="text" id=${"quantity"+count} name="quantity[]" placeholder="" > </div>\
                                </div>`;

                var wrapper = document.getElementById("product_wrapper_box");
                newElement.innerHTML = productRow;
                wrapper.appendChild(newElement);
                count++;
            }

        </script>
    @endsection
</body>

</html>
