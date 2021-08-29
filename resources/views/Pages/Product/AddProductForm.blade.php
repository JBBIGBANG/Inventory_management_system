@extends('layout.master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="Assets/Css/AddProductForm.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <title>Document</title>
</head>
@section('AddProductForm')

    <body>
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    {{-- <h3>Add Product</h3> --}}
                    {{-- <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p> --}}
                    <div class="card">
                        <h5 class="text-center mb-4">Add Product</h5>
                        {{-- onsubmit="event.preventDefault()" --}}
                        <form class="form-card"  action="{{ route('addproduct') }}" method="post" >
                            @csrf
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3">Supplier name<span class="text-danger">
                                            *</span></label> <input type="text" id="name" name="name"
                                        placeholder="Enter your name" onblur="validate(1)" required>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Supplier Contact<span class="text-danger">
                                            *</span></label> <input type="text" id="lname" name="contact"
                                        placeholder="Enter Contact" onblur="validate(2)" required>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Product Name<span class="text-danger">
                                            *</span></label> <input type="text" id="email" name="p_name" placeholder=""
                                        onblur="validate(3)" required> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Quantity<span class="text-danger"> *</span></label>
                                    <input type="text" id="quan" name="quantity"  placeholder="" onblur="validate(4)"
                                    onkeyup="mult()" required>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Buying price<span class="text-danger">
                                            *</span></label> <input onkeyup="mult()" type="text" id="b_price" name="b_price" placeholder=""
                                        onblur="validate(5)"  required> </div>

                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Selling Price<span class="text-danger">
                                            *</span></label> <input type="text" id="job" name="s_price" placeholder=""
                                        onblur="validate(5)" required> </div>

                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">Total Price<span class="text-danger">
                                            *</span></label>
                                        <span id="price">
                                            </span> </div>
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
            function mult()
            {
                document.getElementById('price').innerText = (document.getElementById('quan').value * document.getElementById('b_price').value).toFixed(2);
            }

        </script>
        <script>
            function validate(val) {
                v1 = document.getElementById("fname");
                v2 = document.getElementById("lname");
                v3 = document.getElementById("email");
                v4 = document.getElementById("mob");
                v5 = document.getElementById("job");
                v6 = document.getElementById("ans");

                flag1 = true;
                flag2 = true;
                flag3 = true;
                flag4 = true;
                flag5 = true;
                flag6 = true;

                if (val >= 1 || val == 0) {
                    if (v1.value == "") {
                        v1.style.borderColor = "red";
                        flag1 = false;
                    } else {
                        v1.style.borderColor = "green";
                        flag1 = true;
                    }
                }

                if (val >= 2 || val == 0) {
                    if (v2.value == "") {
                        v2.style.borderColor = "red";
                        flag2 = false;
                    } else {
                        v2.style.borderColor = "green";
                        flag2 = true;
                    }
                }
                if (val >= 3 || val == 0) {
                    if (v3.value == "") {
                        v3.style.borderColor = "red";
                        flag3 = false;
                    } else {
                        v3.style.borderColor = "green";
                        flag3 = true;
                    }
                }
                if (val >= 4 || val == 0) {
                    if (v4.value == "") {
                        v4.style.borderColor = "red";
                        flag4 = false;
                    } else {
                        v4.style.borderColor = "green";
                        flag4 = true;
                    }
                }
                if (val >= 5 || val == 0) {
                    if (v5.value == "") {
                        v5.style.borderColor = "red";
                        flag5 = false;
                    } else {
                        v5.style.borderColor = "green";
                        flag5 = true;
                    }
                }
                if (val >= 6 || val == 0) {
                    if (v6.value == "") {
                        v6.style.borderColor = "red";
                        flag6 = false;
                    } else {
                        v6.style.borderColor = "green";
                        flag6 = true;
                    }
                }

                flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

                return flag;
            }
        </script>
    @endsection
</body>

</html>
