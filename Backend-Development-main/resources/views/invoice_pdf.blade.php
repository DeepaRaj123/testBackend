<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%; 

}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
 
</style>
</head>
<body>



<table> 
  <tr>
  <td colspan="2"><h2 style="text-align: center;">Ride Details</h2></td>
  </tr>
  <tr>
   <td>@lang('user.booking_id')</td>
    <td>{{$Payment_pdf->request->booking_id}}</td> 
  </tr>
  <tr>
    <td>@lang('user.driver_name')</td>
    <td>{{$Payment_pdf->request->provider->first_name}}{{$Payment_pdf->request->provider->last_name}}</td> 
  </tr>
  <tr>
   <td>@lang('user.service_number')</td>
    <td>{{$Payment_pdf->request->provider_service->service_number}}</td>
    
  </tr>
  <tr>
    <td>@lang('user.service_model')</td>
        <td>{{$Payment_pdf->request->provider_service->service_model}}</td>
    
  </tr>
  <tr>
    <td>@lang('user.driver_rating')</td>
    <td>
        {{round($Payment_pdf->request->provider->rating)}}
    </td> 
  </tr>
  <tr>
    <td>@lang('user.payment_mode')</td>
    <td>{{$Payment_pdf->request->payment_mode}}</td>
  </tr>
  <tr>
    <td class="big">Company Address</td>
    <td>{{Setting::get('address')}}</td> 
  </tr>
    <tr>
  <td colspan="2"><h2 style="text-align: center;">Invoice</h2></td>
  </tr> 
    <tr>
    <td>@lang('user.ride.distance_travelled')</td>
    <td>{{$Payment_pdf->request->distance}} kms</td> 
    </tr> 
    <tr>
     <td>@lang('user.ride.base_price')</td>
    <td>{{currency($Payment_pdf->fixed)}}</td>
    </tr> 
    <tr>
    <td>@lang('user.ride.distance_price')</td>
    <td>{{currency($Payment_pdf->distance)}}</td>
    </tr> 
    <tr>
    <td>@lang('user.ride.minutes_price')</td>
    <td>{{currency($Payment_pdf->minute)}}</td>
    </tr>
    <tr>
    <td>@lang('user.ride.tax_price')</td>
    <td>{{currency($Payment_pdf->tax)}}</td>
    </tr>
    <tr>
    <td>@lang('user.ride.tips')</td>
    <td>{{currency($Payment_pdf->tips)}}</td>
    </tr>
    @if($Payment_pdf->request->use_wallet) 
    <tr>
        <td>@lang('user.ride.detection_wallet')</td>
        <td>{{currency($Payment_pdf->wallet)}}</td>  
    </tr>
    @endif

    
    @if($Payment_pdf->discount)
        <tr>
        <td>@lang('user.ride.promotion_applied')</td>
        <td>{{currency($Payment_pdf->discount)}}</td>  
        </tr>
    @endif
    @if($Payment_pdf->eta_discount)
       <tr>
        <td>@lang('user.ride.eta_discount')</td>
        <td>{{currency($Payment_pdf->eta_discount)}}</td>  
        </tr>
    @endif
   
    <tr>
    <td class="big">@lang('user.ride.total')</td>
    <td>{{currency($Payment_pdf->total)}}</td> 
    </tr>

    <tr>
    <td class="big">@lang('user.ride.amount_paid')</td>
    <td class="big">{{currency($Payment_pdf->payable)}}</td>
    </tr> 
</table>
 