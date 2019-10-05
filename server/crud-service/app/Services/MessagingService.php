<?php
/**
 * Created by PhpStorm.
 * User: gauravpunjabi
 * Date: 2/28/19
 * Time: 4:33 PM
 */

namespace App\Services;


use App\Constants\MessageConstants;

class MessagingService
{
    public function sendMessage($phoneNumber, $text) {
        $message = urlencode($text);

        $postData = array(
            'authkey' => MessageConstants::AUTH_KEY,
            'mobiles' => $phoneNumber,
            'message' => $message,
            'sender' => MessageConstants::SENDER_ID,
            'route' => MessageConstants::ROUTE
        );

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => MessageConstants::API_URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
        ));

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        $output = curl_exec($ch);

//Print error if any
        if(curl_errno($ch))
        {
            error_log('error:' . curl_error($ch));
        }

        curl_close($ch);

        error_log($output);
    }
}