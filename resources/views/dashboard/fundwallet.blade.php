@extends('dashboard.layout')

@section('content')
<script src="https://checkout.flutterwave.com/v3.js"></script>
<div class="container">
    <h3 class="home-h3 font-weight-bold my-4">Fund Wallet</h3>
    <div class="row ">
        <div class="col-12">
            <div class="card  mt-3">
                <div class="card-header">
                    <h5 class="home-h5 font-weight-bold my-2">Fund Wallet</h3>
                </div>
                <div class="card-body pb-5">
                    <form method="POST" action="">
                        <div class="form-group col-lg-4 p-0">
                            <label class="small mb-1" for="amount">Amount</label>
                            <input class="form-control py-4" id="amount" type="number" name="amount" required placeholder="Enter Amount" />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-primary" type="submit" onClick="event.preventDefault(); Transaction.initiateTransaction();">Pay</button>
                        </div>
                    </form>
                    <br />
                    <!-- <a href="{{route('fundmanual')}}">Click here to deposit money by bank
                    transfer</a>
                <br />
                <a href="{{route('fundcrypto')}}">Click here to deposit money by
                    Bitcoin</a>
                <br /> -->
                    <br />
                    Do you have a complaint regarding a payment ? <a href="">Please click here
                        to contact the admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')


<script>

Transaction = {
    tx_ref: null,
    amount: null,
    initiateTransaction: function (amount) {
        this.amount = $('#amount').val();
        this.generateRefrence();
        return this.tx_ref;
    },
    generateRefrence: function () {
        let amount = this.amount;
        $.ajax({
            type: 'POST',
            url: "{{route('createtransaction')}}",
            data: [{name: 'amount', value: amount }],
            success: (data) => {
                Transaction.tx_ref = data;
                makePayment();
            }
        })
        return Transaction.tx_ref;
    },
    verify: function(data){
        data = JSON.stringify(data);
        console.log(data);
        $.ajax({
            type: 'POST',
            url: "{{route('verifytransaction')}}",
            data: [{name: 'transaction', value: data}],
            success: (data) => {
                if(data == "success"){
                    swal("Good job!", "Transaction has be successfully processed", "success");
                    setTimeout(() => {window.location="{{route('dashboard')}}"}, 2000);
                }else{
                    swal("Something went wrong!", data, 'error').then(() => {
                        window.location="{{route('dashboard')}}";
                    });
                }
            }
        });
    }
}

  function makePayment() {

    let amount = $('#amount').val();
    let email = "{{Auth()->user()->email}}";
    let phone = "{{Auth()->user()->phone}}";
    let name = "{{Auth()->user()->name}}";
    let userId = "{{Auth()->user()->id}}";

    
        FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-27a5bc7111804b3ff216a3ac266176b7-X",
      tx_ref: Transaction.tx_ref,
      amount: amount,
      currency: "NGN",
      country: "NG",
      payment_options: "card, banktransfer, ussd",
      redirect_url: // specified redirect URL
        "",
      meta: {
        consumer_id: userId,
        consumer_mac: "92a3-912ba-1192a",
        amount: amount,
      },
      customer: {
        email: email,
        phone_number: phone,
        name: name,
      },
      callback: function (data) {
        console.log(data);
        Transaction.verify(data);
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "Fund account",
        description: "funding of wallet",
        logo: "https://stakescrypto.com/asset/images/logo-gold.png",
      },
    });
    
  }
</script>
@endsection