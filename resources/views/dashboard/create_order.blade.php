@extends('dashboard.layout')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <!-- <div class="col-lg-4">
            <div class="card  mt-5">
                <div class="card-header">
                    <h5 class="home-h5 font-weight-bold my-2">How to create order</h5>
                </div>
                <div class="card-body">
                    <h5 class="home-h5 text-danger">*Important Notice</h5>
                    <br />
                    <a class="" href="https://likes.ng/wallet/fund">Click here to deposit money into
                        your account</a>
                    <br />
                    <br />
                    <a target="_blank" href="images/instagram_likes.png">Click here to see how to
                        order Instagram Likes</a>
                    <br /><br />
                    <a target="_blank" href="images/instagram_followers_2.png">Click here to see how
                        to order Instagram Followers</a>
                    <br /><br />
                    <a target="_blank" href="images/Instagram_comments.png">Click here to see how to
                        order Instagram Comments</a>
                    <br /><br />
                    <p>Please follow each of the above tutorial before placing order</p>
                </div>
            </div>
        </div> -->
        <div class="col-lg-8">
            <div class="card  mt-5">
                <div class="card-header">
                    <h5 class="home-h5 my-2">Create Order</h5>
                    <h6>Note: If you are ordering for Instagram Contest, please <a target="_blank" href="">click here to
                            contact us</a> </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="" id="order_form" >
                        @csrf
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress" >Order Category</label>
                            <select name="order_category" id="order_category" class="form-control">
                                <option value="Instagram Followers">Instagram Followers</option>
                                <option value="Instagram Likes Trial">Instagram Likes (Trial )
                                </option>
                                <option value="Instagram Likes">Instagram Likes</option>
                                <option value="Instagram Comments">Instagram Comments</option>
                                <option value="Instagram Reels Likes">Instagram Reels Likes</option>
                                <option value="Instagram Reels Comments">Instagram Reels Comments
                                </option>
                                <option value="Instagram Views">Instagram Views</option>
                                <option value="Igtv views">Igtv views</option>
                                <option value="Instagram reel views">Instagram reel views</option>
                                <option value="Twitter views">Twitter views</option>
                                <option value="Twitter Likes">Twitter Likes</option>
                                <option value="Twitter Followers">Twitter Followers</option>
                                <option value="Twitter Retweets">Twitter Retweets</option>
                                <option value="Twitter Comments">Twitter Comments</option>
                                <option value="Tiktok Likes">Tiktok Likes</option>
                                <option value="Tiktok Comments">Tiktok Comments</option>
                                <option value="Tiktok Views">Tiktok Views</option>
                                <option value="Instagram Foreign Followers">Instagram Foreign Followers</option>
                                <option value="Instagram Foreign Likes">Instagram Foreign Likes</option>
                                <option value="YouTube Likes">YouTube Likes</option>
                                <option value="Youtube Views">Youtube Views</option>
                            </select>
                        </div>
                        <div id="for_followers">
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword" >Social Media Username
                                    <small>the social media account you want followers
                                        on</small></label>
                                <input class="form-control py-4" id="social_username" placeholder="Social Media Username" type="text" name="social_username" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Social Media Profile
                                    Link <small class="text-danger">for example :
                                        <b>https://instagram.com/your_username/ </b></small></label>
                                <input class="form-control py-4" id="social_profile_link" placeholder="Social Media Profile Link" type="text" name="social_profile_link" />
                            </div>
                        </div>
                        <div id="for_others" style="display: none">
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Post Link <small>enter
                                        link to content that needs promotion</small></label>
                                <input class="form-control py-4" id="link" placeholder="Post Link" type="text" name="link" />
                                <span class="text-danger">Note: Do Not Order More Than Once Per
                                    Post/Link</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Quantity <small>(how many
                                    likes, comments or views)</small></label>
                            <input class="form-control py-4" id="quantity" placeholder="Quantity" type="number" name="quantity" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="">Unit Price(NGN)<small>(how much would one unit cost)</small></label>
                            <input disabled class="form-control py-4" id="unitPrice" placeholder="Unit price" type="number" name="unit" />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-primary" type="submit" id="submit_order_button">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$(function(){
    updateUnitPrice();
})

            $("#order_category").on('change',(function(e) {
                e.preventDefault();

                updateUnitPrice();

                var t = $(this).children("option:selected").val();
                //
                if (t.toLowerCase().indexOf("follow") >= 0) {
                    $('#for_followers').show();
                    $('#for_others').hide();
                }
                else {
                    $('#for_followers').hide();
                    $('#for_others').show();
                    }
                })
            );

            function updateUnitPrice(){
                $.ajax({
                    url: "{{route('getunitprice')}}",
                    type: 'POST',
                    data: [
                        {name: 'category', value: $('#order_category').val()},
                    ],
                    success: function(data){
                        $('#unitPrice').val(data);
                    },
                    error: function(){
                        swal("Oops! Something went wrong!", 'please check your network connection', 'error');
                    }
                });
            }


            $("#order_form").submit(function(event){
                event.preventDefault();
                let data = $(this).serializeArray();
                console.log(data);

                $.ajax({
                    url: "{{route('createorder')}}",
                    type: 'POST',
                    data: data,
                    success: function(data){
                        if(data == 'success'){
                            swal('successful!', 'Order was successful', "success").then(() => {
                                window.location = "{{route('dashboard')}}";
                            });
                        }else{
                            swal('warning!', data, 'warning');
                        }
                    },
                    error: function(){
                        swal("Oops! Something went wrong!", 'please check your network connection', 'error');
                    }
                });
            });
</script>
@endsection