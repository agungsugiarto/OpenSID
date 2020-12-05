<?php

use Pusher\Pusher;

require_once APPPATH . 'libraries/CodeIgniter_Logger.php';

class Ci_pusher
{
    /** @var \Pusher\Pusher */
    protected $pusher;

    /**
     * OpenDesa Pusher constructor.
     */
    public function __construct()
    {
        $this->pusher = new Pusher(
            get_instance()->setting->pusher_app_key,
            get_instance()->setting->pusher_app_secret,
            get_instance()->setting->pusher_app_id,
            [
                'cluster' => 'ap1',
                'useTLS'  => true,
            ]
        );

        $this->pusher->setLogger(new CodeIgniter_Logger);
    }

    /**
     * Instance class pusher.
     * 
     * @return \Pusher\Pusher
     */
    public function instance()
    {
        return $this->pusher;
    }
}