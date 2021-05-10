<div class="card card-primary card-outline">
    <div wire:loading.flex wire:loading.class="overlay"><i class="fas fa-2x fa-sync-alt fa-spin"></i></div>
    <div class="card-body box-profile">
        <div class="text-center">
            <i class="{{$order->generateFaLogo()}}" style="font-size: 60px;"></i>
        </div>
        <h3 class="profile-username text-center">Order placed</h3>
        <h6 class="profile-username text-center">{{$order->created_at->diffForHumans()}}</h6>
        
        <p class="text-muted text-center">{{$message}}</p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <strong>User's name</strong>
                <b></b> <a class="float-right">{{$order->user->name}}</a>
            </li>
            <li class="list-group-item">
                <strong>User's Balance</strong>
                <b></b> <a class="float-right">₦{{$order->user->balance}}</a>
            </li>
            <li class="list-group-item">
                <strong>Unit price:</strong>
                <b></b> <a class="float-right">₦{{$order->getUnitPrice()}}</a>
            </li>
            <li class="list-group-item">
                <strong>Quantity</strong>
                <b></b> <a class="float-right">{{$order->quantity}}</a>
            </li>
            <li class="list-group-item">
                <strong>Status</strong>
                <b></b> <a class="float-right">{{$order->status}}</a>
            </li>
            <li class="list-group-item">
                <strong>
                    Category:</strong>
                <b></b> <a class="float-right">{{$order->category}}</a>
            </li>
            @if($order->forFollowers())
            <li class="list-group-item">
                <strong>
                    Profile link:</strong>
                <b></b> <a class="btn btn-primary float-right" href="{{$order->profile_link}}" target="_blank">{{$order->profile_link}}</a>
            </li>
            <li class="list-group-item">
                <strong>
                    Social media Username:</strong>
                <b></b> <a class="float-right"> {{$order->username}}</a>
            </li>
            @else
            <li class="list-group-item">
                <strong>
                    Post link:</strong>
                <b></b> <a class="btn btn-primary float-right" href="{{$order->link}}" target="_blank">{{$order->link}}</a>
            </li>
            @endif
        </ul>


        @if($postState)
        <div class="col-sm-12">
            <h6>Reward(₦)</h6>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">₦</span>
                </div>
                <input type="number" class="form-control" min="200" placeholder="User's reward(₦)" wire:model="reward">
            </div>
        </div>
        <div class="col-sm-12">
            <h6>Maximum</h6>
            <div class="input-group">
                <input type="number" class="form-control" min="200" placeholder="number of times job can be done" wire:model="maximum">
            </div>
        </div>
        <div class="form-group">
            <label>User level</label>
            <select required name="level" wire:model='level' id="level" class="form-control select2bs4" style="width: 100%;">
                <!-- <option value="{{config('enums.levels.basic')}}">Basic</option> -->
                <option value="1">Basic</option>
                <option value="2">Top Level</option>
            </select>
        </div>
        @endif


        @if($postState)
        <button class="btn btn-danger btn-rounded" wire:click='togglePostState'>Cancel</button>
        <button class="btn btn-primary btn-rounded" wire:click='postJob'>Send Now</button>
        @else
        <button class="btn btn-primary btn-rounded" wire:click='togglePostState'>Post To Data2Income</button>
        @endif
        <a href="{{route('admin.user', $order->user->id)}}" class="float-right btn btn-primary btn-rounded">View User</a>
    </div>
    <!-- /.card-body -->

</div>