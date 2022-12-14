<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Provider;
use App\ProviderDevice;
use Exception;
use Log;
use Setting;
use App;

use Edujugon\PushNotification\PushNotification;

class SendPushNotification extends Controller
{
	/**
     * New Ride Accepted by a Driver.
     *
     * @return void
     */
    public function RideAccepted($request){

        $user = User::where('id',$request->user_id)->first();
        $language = $user->language;
        App::setLocale($language);
    	return $this->sendPushToUser($request->user_id, trans('api.push.request_accepted'));
    }

    public function ScheduleRideAcceptedUser($request){

       $user = User::where('id',$request->user_id)->first();
       $message="Your ride scheduled successfully. Open upcoming trips to see more details";

    	return $this->sendPushToUserSchedule($user->id,$message);
    }

    public function ScheduleRideAcceptedProvider($request){

        $provider = Provider::where('id',$request->provider_id)->first();
        $message="You accepted upcoming ride. Open upcoming trips to see more details";

    	return $this->sendPushToProviderSchedule($provider->id,$message);
    }

    /**
     * Driver Arrived at your location.
     *
     * @return void
     */
    public function user_schedule($user){
         $user = User::where('id',$user)->first();
         $language = $user->language;
         App::setLocale($language);
        return $this->sendPushToUser($user->id, trans('api.push.schedule_start'));
    }


    /**
     * New Incoming request
     *
     * @return void
     */
    public function provider_schedule($provider){

        $provider = Provider::where('id',$provider)->with('profile')->first();
        if($provider->profile){
            $language = $provider->profile->language;
            App::setLocale($language);
        }

        return $this->sendPushToProvider($provider->id, trans('api.push.schedule_start'));

    }

    /**
     * New Ride Accepted by a Driver.
     *
     * @return void
     */
    public function UserCancellRide($request){

        if(!empty($request->provider_id)){

            $provider = Provider::where('id',$request->provider_id)->with('profile')->first();

            if($provider->profile){
                $language = $provider->profile->language;
                App::setLocale($language);
            }

            return $this->sendPushToProvider($request->provider_id, trans('api.push.user_cancelled'));
        }
        
        return true;    
    }


    /**
     * New Ride Accepted by a Driver.
     *
     * @return void
     */
    public function ProviderCancellRide($request){

        $user = User::where('id',$request->user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($request->user_id, trans('api.push.provider_cancelled'));
    }

    /**
     * Driver Arrived at your location.
     *
     * @return void
     */
    public function Arrived($request){

        $user = User::where('id',$request->user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($request->user_id, trans('api.push.arrived'));
    }

    /**
     * Driver Picked You  in your location.
     *
     * @return void
     */
    public function Pickedup($request){
        $user = User::where('id',$request->user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($request->user_id, trans('api.push.pickedup'));
    }

    /**
     * Driver Reached  destination
     *
     * @return void
     */
    public function Dropped($request){

        $user = User::where('id',$request->user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($request->user_id, trans('api.push.dropped').Setting::get('currency').$request->payment->total.' by '.$request->payment_mode);
    }

    /**
     * Your Ride Completed
     *
     * @return void
     */
    public function Complete($request){

        $user = User::where('id',$request->user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($request->user_id, trans('api.push.complete'));
    }

    
     
    /**
     * Rating After Successful Ride
     *
     * @return void
     */
    public function Rate($request){

        $user = User::where('id',$request->user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($request->user_id, trans('api.push.rate'));
    }


    /**
     * Money added to user wallet.
     *
     * @return void
     */
    public function ProviderNotAvailable($user_id){
        $user = User::where('id',$user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($user_id,trans('api.push.provider_not_available'));
    }

    /**
     * New Incoming request
     *
     * @return void
     */
    public function IncomingRequest($provider){

        $provider = Provider::where('id',$provider)->with('profile')->first();
        if($provider->profile){
            $language = $provider->profile->language;
            App::setLocale($language);
        }
        $type = "new_incoming_ride";

        return $this->sendPushToProvider($provider->id, trans('api.push.incoming_request'),$type);

    }
    

    /**
     * Driver Documents verfied.
     *
     * @return void
     */
    public function DocumentsVerfied($provider_id){

        $provider = Provider::where('id',$provider_id)->with('profile')->first();
        if($provider->profile){
            $language = $provider->profile->language;
            App::setLocale($language);
        }

        return $this->sendPushToProvider($provider_id, trans('api.push.document_verfied'));
    }


    /**
     * Money added to user wallet.
     *
     * @return void
     */
    public function WalletMoney($user_id, $money){

        $user = User::where('id',$user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($user_id, $money.' '.trans('api.push.added_money_to_wallet'));
    }


     public function ProviderWalletMoney($user_id, $money){
        
        $provider = Provider::where('id',$user_id)->with('profile')->first();
        if($provider->profile){
            $language = $provider->profile->language;
            App::setLocale($language);
        }
       
        return $this->sendPushToProvider($user_id, $money.' '.trans('api.push.added_money_to_wallet'));
    }

    /**
     * Money charged from user wallet.
     *
     * @return void
     */
    public function ChargedWalletMoney($user_id, $money){

        $user = User::where('id',$user_id)->first();
        $language = $user->language;
        App::setLocale($language);

        return $this->sendPushToUser($user_id, $money.' '.trans('api.push.charged_from_wallet'));
    }

    /**
     * Sending Push to a user Device.
     *
     * @return void
     */
    public function sendPushToUser($user_id, $push_message){

        try{

           

            $user = User::findOrFail($user_id);

\Log::info($user);
            if($user->device_token != ""){

               \Log::info('sending push for user : '. $user->first_name);
                \Log::info($push_message);

                if($user->device_type == 'ios'){
                     if(Setting::get('IOS_USER_ENV')=='development'){
                        $crt_user_path=app_path().'/apns/user/AaltonenUser.pem';
                        $crt_provider_path=app_path().'/apns/provider/AaltonenProvider.pem';
                        $dry_run = true;
                    }
                    else{
                        $crt_user_path=app_path().'/apns/user/AaltonenUser.pem';
                        $crt_provider_path=app_path().'/apns/provider/AaltonenProvider.pem';
                        $dry_run = false;
                    }
                    
                   $push = new PushNotification('apn');

                    $push->setConfig([
                            'certificate' => $crt_user_path,
                            'passPhrase' => env('IOS_USER_PUSH_PASS', 'Appoets123$'),
                            'dry_run' => $dry_run
                        ]);

                   $send=  $push->setMessage([
                            'aps' => [
                                'alert' => [
                                    'body' => $push_message
                                ],
                                'sound' => 'default',
                                'badge' => 1

                            ],
                            'extraPayLoad' => [
                                'custom' => $push_message
                            ]
                        ])
                        ->setDevicesToken($user->device_token)->send();
                        \Log::info('sent');
                    
                    return $send;

                }elseif($user->device_type == 'android'){

                   $push = new PushNotification('fcm');
                   $send=  $push->setMessage(['message'=>$push_message])
                        ->setApiKey(Setting::get('ANDROID_USER_PUSH_KEY'))
                        ->setDevicesToken($user->device_token)->send();
                    
                    return $send;
                       

                }
            }

        } catch(Exception $e){
            return $e;
        }

    }


    /**
     * Sending Push to a user Device.
     *
     * @return void
     */
    public function sendPushToProvider($provider_id, $push_message){

        try{          

            

            $provider = ProviderDevice::where('provider_id',$provider_id)->with('provider')->first();           

            if($provider->token != ""){

                if($provider->type == 'ios'){

                    if(Setting::get('IOS_USER_ENV')=='development'){
                        $crt_user_path=app_path().'/apns/user/AaltonenUser.pem';
                        $crt_provider_path=app_path().'/apns/provider/AaltonenProvider.pem';
                        $dry_run = true;
                    }
                    else{
                        $crt_user_path=app_path().'/apns/user/AaltonenUser.pem';
                        $crt_provider_path=app_path().'/apns/provider/AaltonenProvider.pem';
                        $dry_run = false;
                    }

                   $push = new PushNotification('apn');
                   $push->setConfig([
                            'certificate' => $crt_provider_path,
                            'passPhrase' => env('IOS_PROVIDER_PUSH_PASS', 'Appoets123$'),
                            'dry_run' => $dry_run
                        ]);
                   $send=  $push->setMessage([
                            'aps' => [
                                'alert' => [
                                    'body' => $push_message
                                ],
                                'sound' => 'default',
                                'badge' => 1

                            ],
                            'extraPayLoad' => [
                                'custom' => $push_message
                            ]
                        ])
                        ->setDevicesToken($provider->token)->send();
                
                    
                    return $send;

                }elseif($provider->type == 'android'){
                    
                   $push = new PushNotification('fcm');
                   $send=  $push->setMessage(['message'=>$push_message])
                        ->setApiKey(Setting::get('ANDROID_PROVIDER_PUSH_KEY'))
                        ->setDevicesToken($provider->token)->send();
                    
                    return $send;
                        

                }
            }

        } catch(Exception $e){           
            return $e;
        }

    }
    public function provider_ride_schedule($provider,$message){
        
       
            return $this->sendPushToProvider($provider, $message);
    }

    public function user_schedule_timer($user,$message){
        $user = User::where('id',$user)->first();
        $language = $user->language;
        App::setLocale($language);
       return $this->sendPushToUser($user->id, $message);
   }


   public function sendPushToUserSchedule($user_id, $push_message){

    try{

       

        $user = User::findOrFail($user_id);

\Log::info($user);
        if($user->device_token != ""){

           \Log::info('sending push for user : '. $user->first_name);
            \Log::info($push_message);

            if($user->device_type == 'ios'){
                 if(Setting::get('IOS_USER_ENV')=='development'){
                    $crt_user_path=app_path().'/apns/user/AaltonenUser.pem';
                    $crt_provider_path=app_path().'/apns/provider/AaltonenProvider.pem';
                    $dry_run = true;
                }
                else{
                    $crt_user_path=app_path().'/apns/user/AaltonenUser.pem';
                    $crt_provider_path=app_path().'/apns/provider/AaltonenProvider.pem';
                    $dry_run = false;
                }
                
               $push = new PushNotification('apn');

                $push->setConfig([
                        'certificate' => $crt_user_path,
                        'passPhrase' => env('IOS_USER_PUSH_PASS', 'Appoets123$'),
                        'dry_run' => $dry_run
                    ]);

               $send=  $push->setMessage([
                        'aps' => [
                            'alert' => [
                                'body' => $push_message,
                                'key' =>222,
                                'type'=>'PushToUser'
                            ],
                            'sound' => 'default',
                            'badge' => 1

                        ],
                        'extraPayLoad' => [
                            'custom' => $push_message
                        ],
                         'data' => [
                            'key' =>222,
                            'type'=>'PushToUser',
                        ]
                    ])
                    ->setDevicesToken($user->device_token)->send();
                    \Log::info('sent');
                
                return $send;

            }elseif($user->device_type == 'android'){

               $push = new PushNotification('fcm');
               $send=  $push->setMessage(['message'=>$push_message,'key'=>222,'type'=>'PushToUser'])
                    ->setApiKey(Setting::get('ANDROID_USER_PUSH_KEY'))
                    ->setDevicesToken($user->device_token)->send();
                
                return $send;
                   

            }
        }

    } catch(Exception $e){
        return $e;
    }

}



public function sendPushToProviderSchedule($provider_id, $push_message){

    try{          

        

        $provider = ProviderDevice::where('provider_id',$provider_id)->with('provider')->first();           

        if($provider->token != ""){

            if($provider->type == 'ios'){

                if(Setting::get('IOS_USER_ENV')=='development'){
                    $crt_user_path=app_path().'/apns/user/AaltonenUser.pem';
                    $crt_provider_path=app_path().'/apns/provider/AaltonenProvider.pem';
                    $dry_run = true;
                }
                else{
                    $crt_user_path=app_path().'/apns/user/AaltonenUser.pem';
                    $crt_provider_path=app_path().'/apns/provider/AaltonenProvider.pem';
                    $dry_run = false;
                }

               $push = new PushNotification('apn');
               $push->setConfig([
                        'certificate' => $crt_provider_path,
                        'passPhrase' => env('IOS_PROVIDER_PUSH_PASS', 'Appoets123$'),
                        'dry_run' => $dry_run
                    ]);
               $send=  $push->setMessage([
                        'aps' => [
                            'alert' => [
                                'body' => $push_message,
                                'key' =>111,
                                'type'=>'PushToProvider'
                            ],
                            'sound' => 'default',
                            'badge' => 1

                        ],
                        'extraPayLoad' => [
                            'custom' => $push_message
                        ],

                        'data' => [
                            'key' =>111,
                            'type'=>'PushToProvider',
                        ]
                    ])
                    ->setDevicesToken($provider->token)->send();
            
                
                return $send;

            }elseif($provider->type == 'android'){
                
               $push = new PushNotification('fcm');
               $send=  $push->setMessage(['message'=>$push_message,'key'=>111,'type'=>'PushToProvider'])
                    ->setApiKey(Setting::get('ANDROID_PROVIDER_PUSH_KEY'))
                    ->setDevicesToken($provider->token)->send();
                
                return $send;
                    

            }
        }

    } catch(Exception $e){           
        return $e;
    }

}















}
