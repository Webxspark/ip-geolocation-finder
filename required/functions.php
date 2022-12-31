<?php
/*
    * This source code was submitted by B.Alan Christofer to Codechef development team
    * Distribution of this source code without permission is illegal
    * To claim a valid licence, please contact copyright@webxspark.com for more info
*/

class webxspark
{
    public static function fetchIP()
    {
        //If ip ==> share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //If ip ==> remote address
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
