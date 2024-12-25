<?php
namespace VanguardLTE\Http\Controllers\Api\IpointAPI;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NV10IpointController extends \VanguardLTE\Http\Controllers\Api\ApiController
{
    
    public static $key = 'Q^22se7PfYydSM3z5QYvcDW7';
    private static $iv = '';

    public function setTester(Request $request){
        Storage::append('tester.txt', base64_decode($request->input('enc_request')));
        $arrData = self::toArr(base64_decode($request->input('enc_request')));
        return self::DataHandler($arrData);
    }
    
    private static function DataHandler($arrData){
        if($arrData['action'] == 'getlic'){
            $licdata = self::encryptRJ256(self::$key, self::$iv, 'Q^22se7PfYydSM3z5QYvcDW7');
            return response()->json(['data' => ['licdata' => $licdata, 'success' => true]], 200);
        }else if($arrData['action'] == 'login'){
            $user = \Auth::getProvider()->retrieveByCredentials(['username' => $arrData['username'], 'password' => $arrData['userpass']]);
            return response()->json(['data' => [
                'player_userhash' => $user->id,
                'player_name' => $user->username,
                'player_id' => $user->id,
                ], 'success' => true], 200);
        }else if($arrData['action'] == 'testlogin'){
            $user = \Auth::getProvider()->retrieveByCredentials(['username' => $arrData['username'], 'password' => $arrData['userpass']]);
            if($user){
                return response()->json(['data' => [
                'player_userhash' => $user->id,
                'player_name' => $user->username,
                'login' => 'true',
                'player_id' => $user->id,
                ], 'success' => true], 200);
            }
        }
        else if($arrData['action'] == 'depositusb'){
            $user = \VanguardLTE\User::lockForUpdate()->find($arrData['userhash']);
            $payeer = \VanguardLTE\User::lockForUpdate()->find($user->parent_id);
            
            $result = $user->addBalance('add', $arrData['amount'] / 100, $payeer);
            event(new \VanguardLTE\Events\User\MoneyIn($user, $arrData['amount'] / 100));
            return response()->json(['data' => [
                'player_userhash' => $user->id,
                'player_name' => $user->username,
                'login' => 'true',
                'player_id' => 150,
                ], 'success' => true], 200);
        }
    }

    private static function toArr($data){
        $data = explode('}', $data);
        $data = substr($data[0],1);
        $data = str_replace('"', '', $data);
        $data = explode(',', $data);
        $arrData = [];
        foreach($data as $item){
            $tmp = explode(':', $item);
            $arrData[$tmp[0]] = $tmp[1];
        }
        return $arrData;
    }

}