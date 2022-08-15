@extends('user.layout.base')

@section('title', 'Wallet ')

@section('content')

<style type="text/css">
    .loading-gif {
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -50px 0px 0px -50px;
    }
</style>

<div class="col-md-9">
    <div class="dash-content">
        <div class="row no-margin">
            <div class="col-md-12">
                <h4 class="page-title">@lang('user.my_wallet')</h4>
            </div>
        </div>
        @include('common.notify')

        <div class="row no-margin">
            <form action="{{url('add/money')}}" method="POST">
            {{ csrf_field() }}
                <div class="col-md-6">
                     
                    <div class="wallet">
                        <h4 class="amount">
                            <span class="price">{{currency(Auth::user()->wallet_balance)}}</span>
                            <span class="txt">@lang('user.in_your_wallet')</span>
                        </h4>
                    </div>                                                               

                </div>
     
                <div class="col-md-6">
                    
                    <h6><strong>@lang('user.add_money')</strong></h6>

                    <div class="input-group full-input">
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount" >
                    </div>

                    
                    <br>
                    <input type="hidden" class="form-control" id="email" name="email" value={{Auth::user()->email}}>
                    <input type="hidden" class="form-control" id="name" name="name" value={{Auth::user()->first_name}}>
                  
                    <button type="button" id="rzp-button1" onclick="call()" class="full-primary-btn fare-btn">@lang('user.add_money')</button> 

                </div>
                </form>
              
                    <div class="loading-gif">
                        <img id="loading-image" src="{{asset('asset/img/ajax-loader.gif')}}" style="display:none;"/>
                    </div>

        </div>

        <div class="manage-doc-section-content border-top">
             <div class="tab-content list-content">
                <div class="list-view pad30 ">
                    <table class="earning-table table table-responsive">
                        <thead>
                            <tr>
                                <th>@lang('provider.sno')</th>
                                <th>@lang('provider.transaction_ref')</th>
                                <th>@lang('provider.transaction_desc')</th>
                                <th>@lang('provider.status')</th>
                                <th>@lang('provider.amount')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($page = ($pagination->currentPage-1)*$pagination->perPage)
                               @foreach($wallet_transation as $index=>$wallet)
                               @php($page++)
                                    <tr>
                                        <td>{{$page}}</td>
                                        <td>{{$wallet->transaction_alias}}</td>
                                        <td>{{$wallet->transaction_desc}}</td>
                                        <td>@if($wallet->type == 'C')  @lang('user.credit') @else @lang('user.debit') @endif</td>
                                        <td>{{currency($wallet->amount)}}
                                        </td>
                                       
                                    </tr>
                                @endforeach  
                        </tbody>

                    </table>
                     {{ $wallet_transation->links() }}
                </div>
             </div>
         </div>

    </div>
</div>

@endsection

@section('scripts')


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>



function call() {

   var amount = $('#amount').val();
   var email = $('#email').val();
   var name = $('#name').val();

    var options = {
    "key": "<?php echo Setting::get('rzp_key'); ?>",
    "amount": amount*100,
    "name": "Merchant Name",
    "description": "Wallet Recharge",
    "image": "{{ Setting::get('site_icon') }}",
    "handler": function (response){

        $.ajax({
            type: "POST",
            url: "{{url('rzp/success')}}",
            data:{ payment_id: response.razorpay_payment_id },           
            dataType: "json",
            beforeSend: function() {
              $("#loading-image").show();
            },
            success: function(data) {
                $("#loading-image").hide();
                swal({
                        title: "Success",
                        text: data.message,
                        type: "success",
                        confirmButtonClass: "btn-success",
                    },
                    function(){
                         window.location.href="{{url('/wallet')}}";
                    });

            }
        });    

    },
    "prefill": {
        "name":name ,
        "email": email
    },
    "notes": {
        "address": ""
    },
    "theme": {
        "color": "#e86609"
    }
};
var rzp1 = new Razorpay(options);
rzp1.open();


   
}




</script>


@endscripts