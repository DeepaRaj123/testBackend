@extends('provider.layout.app')

@section('content')
<div class="pro-dashboard-head">
    <div class="container">
        <a href="{{ route('provider.profile.index') }}" class="pro-head-link">@lang('provider.profile.profile')</a>
        <a href="{{ route('provider.documents.index') }}" class="pro-head-link">@lang('provider.profile.manage_documents')</a>
        <a href="{{ route('provider.location.index') }}" class="pro-head-link">@lang('provider.profile.update_location')</a>
        <a href="#" class="pro-head-link active">@lang('provider.profile.wallet_transaction')</a>
       <!--  <a href="{{ route('provider.cards') }}" class="pro-head-link">@lang('provider.card.list')</a> -->
        <a href="{{ route('provider.transfer') }}" class="pro-head-link">@lang('provider.profile.transfer')</a>
       
    </div>
</div>

<div class="pro-dashboard-content gray-bg">
    <div class="container">
        <div class="manage-docs pad30">
            <div class="manage-doc-content">
                <div class="manage-doc-section pad50">
                    <!-- <div class="manage-doc-section-head row no-margin">
                        <h3 class="manage-doc-tit">
                            @lang('provider.profile.wallet_transaction')
                            (@lang('provider.current_balance') : {{currency($wallet_balance)}})
                        </h3>
                    </div> -->
                    @include('common.notify')
                    <div class="row no-margin">
                    <form action="{{url('/provider/add/money')}}" id="add_money" method="POST">
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

                            <select class="form-control" autocomplete="off" name="payment_mode" onchange="card(this.value);">
                              
                              <option value="razorpay">Razorpay</option>
                            
                            
                 
                            </select>
                            <br>
                            
              

                            <br>
              
                            <input type="hidden" name="user_type" value="provider" />
                            <div class="input-group full-input">
                                <input type="number" class="form-control" name="amount"  id="amount" placeholder="Enter Amount">
                            </div>

                            
                         <br>
                             <input type="hidden" class="form-control" id="email" name="email" value={{Auth::user()->email}}>
                            <input type="hidden" class="form-control" id="name" name="name" value={{Auth::user()->first_name}}>
                          
                            <button type="button" id="rzp-button1" onclick="call()" class="full-primary-btn fare-btn">@lang('user.add_money')</button> 

                            <div class="loading-gif">
                                <img id="loading-image" src="{{asset('asset/img/ajax-loader.gif')}}" style="display:none;"/>
                            </div>

                        </div>
                    </form>

                </div>

                   
                     <div class="manage-doc-section-content">
                     <div class="tab-content list-content">
                      <div class="list-view pad30 ">

                            <table class="earning-table table table-responsive">
                                <thead>
                                    <tr>
                                        <th>@lang('provider.sno')</th>
                                        <th>@lang('provider.transaction_ref')</th>
                                        <th>@lang('provider.datetime')</th>
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
                                        <td>{{$wallet->created_at->diffForHumans()}}</td>
                                        <td>{{$wallet->transaction_desc}}</td>
                                        <td>@if($wallet->type == 'C') @lang('provider.credit') @else @lang('provider.debit') @endif</td>
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
        </div>
    </div>

</div>
<style type="text/css">
    .popover{
        max-width: 500px !important;
    }
</style>
@endsection

@section('scripts')



<script>
var request=0; 

    @if(Setting::get('CARD') == 1)
        card('CARD');
    @endif

    function card(value){
        $('#card_id, #braintree').fadeOut(300);
        if(value == 'CARD'){
            $('#card_id').fadeIn(300);
        }else if(value == 'BRAINTREE'){
            $('#braintree').fadeIn(300);
        }
    }

$(document).ready(function(){
    $("[data-toggle=trdetails]").popover({
        html : true,
        content: function() {
          $('[data-toggle=trdetails]').not(this).popover('hide');  
          var content = $(this).attr("data-alias");
          console.log(content);
          return $(content).html();
        },
        
    });   
});  

</script>
<script src="{{asset('asset/js/sweet-alert.js')}}"></script>
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
    "image": "{{ asset('asset/img/site_logo.png') }}",
    "handler": function (response){

        $.ajax({
            type: "POST",
            url: "{{url('provider/rzp/success')}}",
            data:{ payment_id: response.razorpay_payment_id },           
            dataType: "json",
            beforeSend: function() {
              $("#loading-image").show();
            },
            success: function(data) {
              console.log(data.message);
                $("#loading-image").hide();
                swal({
                        title: "Success",
                        text: data.message,
                        type: "success",
                        confirmButtonClass: "btn-success",
                    },
                    function(){
                         window.location.href="{{url('/provider/wallet_transation')}}";
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
@endsection



