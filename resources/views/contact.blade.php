@extends('client.layout')

@section('content')
    <!--Contact area Start -->
    <div class="container" id="contact">
        <div class="row contact-form">
            <div class="col-md-7">
                <div class="row">
                   <div class="col-md-12">
                        <div class="area-title text-center">
							<h2>Contact</h2>
						</div>
                       <br>
                   </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="read-more" type="submit">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 contact_details">
                <div class="contact-address">
                    <i class="fa fa-map fa-2x"></i>
                    <h5>Location</h5>
                    <p> You will always find us anywhere <br>
                </div>
                <div class="contact-address">
                    <i class="fa fa-phone fa-2x"></i>
                    <h5>Contact Number</h5>
                    <p>+234600000000 </p>
                </div>
                <div class="contact-address">
                    <i class="fa fa-globe fa-2x"></i>
                    <h5>Online</h5>
                    <p>Web: https://socilaclinic.ng </p>
                    <p>Email: support@socilaclinic.ng </p>
                </div>
            </div>
        </div>
    </div>
    <!--CONTACT AREA END-->
@endsection