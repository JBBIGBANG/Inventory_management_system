@extends('layout.TableContent')
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>
@section('SalesDemoPage')

{{session('msg')}}
<form action="/orders" method="POST">
    @csrf
<!-- Begin Page Content -->
<div class="container-fluid" >

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> --}}


    <!-- DataTales Example -->
    <div class="card shadow mb-4"  style="background-color: rgb(209, 211, 212)">

        <div class="card-header py-3" style="background-color: rgb(209, 211, 212)">
            <h6 class="m-0 font-weight-bold text-primary" style="text-align: center">Sales Memo</h6>
        </div>
        <div class="card-header py-3" style="background-color: rgb(220, 225, 228)">

            <div class="form-group" style="color:  rgb(1, 5, 7); background-color: rgb(220, 225, 228)">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label class="bmd-label-static"><b style="color:black">Customer Name</b></label>
                            <input type="text" name="customer_name" class="form-control" placeholder="Please enter your name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-static"><b style="color:black">Contact</b></label>
                            <input type="text" name="customer_address" class="form-control" placeholder="Please enter your Address">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="background-color: rgb(220, 225, 228)" >
                    <thead style="color:  rgb(1, 5, 7);">
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th><a href="#" class="addRow"><i class="fas fa-plus"></i></a></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td style="border: none"></td>
                            <td style="border: none"></td>
                            <td><b style="color:black">Total</b></td>
                            <td><b class="total" id="total" style="color:  black;"></b> </td>

                        </tr>
                    </tfoot>

                     <tbody>
                        <tr>
                            <td><input type="text" name="product_name[]" class="form-control" required=""></td>
                            <td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>
                            <td><input type="text" name="budget[]" class="form-control budget"></td>
                            <td><input type="text" name="amount[]" class="form-control amount" readonly></td>
                            <td><a href="#" class="btn btn-danger remove"><i class="fas fa-times-circle"></i></a></td>
                        </tr>

                    </tbody>



                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-header py-3" style="background-color: rgb(220, 225, 228)">

            <div class="form-group" style="color:  rgb(1, 5, 7); background-color: rgb(220, 225, 228)">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label class="bmd-label-static"><b style="color:black">Payment</b></label>
                            <input onkeyup="duePayment()" type="text" name="payment" class="form-control"  id="payment"  placeholder="Payment">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-static"><b style="color:black">Due Payment</b></label>
                            <span id="due_payment" class="form-control" ></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="text-align: right">

                       <input type="submit" name="" value="Order" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</form>

<script type="text/javascript">
    $('tbody').delegate('.quantity,.budget','keyup',function(){
        var tr=$(this).parent().parent();
        var quantity=tr.find('.quantity').val();
        var budget=tr.find('.budget').val();
        var amount=(quantity*budget);
        tr.find('.amount').val(amount);
        total();

    });
    function total(){
        var total=0;
        $('.amount').each(function(i,e){
            var amount=$(this).val()-0;
            total +=amount;
        });
        $('.total').html(total+".00 tk");
    }

    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><input type="text" name="product_name[]" class="form-control" required=""></td>'+
        '<td><input type="text" id="quantity" name="quantity[]" class="form-control quantity" required=""></td>'+
        '<td><input type="text" name="budget[]" class="form-control budget"></td>'+
        ' <td><input type="text" name="amount[]" class="form-control amount"></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="fas fa-times-circle"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
            $(this).parent().parent().remove();
        }

    });

     function duePayment()
    {
        var total=0;
        $('.amount').each(function(i,e){
            var amount=$(this).val()-0;
            total +=amount;
        });
        var pay_total = document.getElementById('payment').value;
       if( pay_total > total)
       {
           alert("type correctly")
       }
       else{
        document.getElementById('due_payment').innerText = total - pay_total
       }

    }
</script>

@endsection
