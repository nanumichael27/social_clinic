@extends('dashboard.layout')

@section('content')
<div class="container">
    <h3 class="home-h3 font-weight-bold my-4">Bitcoin Payment</h3>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card  mt-3">
                <div class="card-header">
                    <h5 class="home-h5 font-weight-bold my-2">Bitcoin Payment</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <h3>Pay with bitcoin</h3>
                        <small>Get 10% bonus on minimum deposits of $10.</small>
                        <div class="form-group col-lg-4 p-0">
                            <label class="small mb-1" for="inputPassword">Amount($)</label>
                            <input class="form-control py-4" id="inputPassword" placeholder="Amount" type="text" name="amount" required />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-primary" type="submit">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection