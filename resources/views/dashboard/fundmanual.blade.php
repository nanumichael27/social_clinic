@extends('dashboard.layout')

@section('content')
<div class="container">
    <h3 class="home-h3 font-weight-bold my-4">Manual Payment</h3>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="home-h5 font-weight-bold my-2">Manual Payment</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="https://likes.ng/create/payment">
                        <input type="hidden" name="_token" value="nNQIx7S0sJIigendgDLkVrOftmwv3DaGacBUm87c">
                        <h5 class="home-h5 font-weight-bold">Pay into the Bank Account below</h3>
                            <div class="form-group col-lg-4 p-0">
                                <label class="small mb-1" for="inputEmailAddress">Bank Name</label>
                                <input class="form-control py-4" id="inputEmailAddress" type="text" disabled required placeholder="AccessBank" />
                            </div>
                            <div class="form-group col-lg-4 p-0">
                                <label class="small mb-1" for="inputPassword">Account Number</label>
                                <input class="form-control py-4" id="inputPassword" disabled type="text" value="1452680703" required />
                            </div>
                            <div class="form-group col-lg-4 p-0">
                                <label class="small mb-1" for="inputPassword">Account Name</label>
                                <input class="form-control py-4" id="inputPassword" disabled type="text" value="Digicrown Ltd" required />
                            </div>
                            <h5 class="home-h5 font-weight-bold my-2">Fill this after payment</h3>
                                <div class="form-group col-lg-4 p-0">
                                    <label class="small mb-1" for="inputPassword">Amount
                                        Paid</label>
                                    <input class="form-control py-4" id="inputPassword" placeholder="Amount Paid" type="text" name="amount" required />
                                </div>
                                <div class="form-group col-lg-4 p-0">
                                    <label class="small mb-1" for="inputPassword">Account Name Money
                                        Was Paid From</label>
                                    <input class="form-control py-4" id="inputPassword" placeholder="Account Name" type="text" name="name" required />
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection