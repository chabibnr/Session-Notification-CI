<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/*
* @package CodeIgniter
* @subpackage libraries
* @category library
* @version 1.1
* @author : Chabib Nurozak <chabibdev@gmail.com>
* @link : https://github.com/chabibnr/Session-Notification-CI/blob/master/MY_Session.php
*/
class MY_Session extends CI_Session{
    const MESSAGE_TYPE_INFO = 'info';
    const MESSAGE_TYPE_DANGER = 'danger';
    const MESSAGE_TYPE_PRIMARY = 'primary';
    const MESSAGE_TYPE_SUCCESS = 'success';
    const MESSAGE_TYPE_WARNING = 'warning';
    
    public function set_notification($message, $type='info'){
        $this->set_userdata('ch_notification', array('type' => $type, 'message' => $message));
    }
    
    public function show_notification(){
        $ch_notification = $this->userdata('ch_notification');
        $ch_n = '';
        if(isset($ch_notification['type'])){
            $ch_n = "<div class='alert alert-".$ch_notification['type']."'>".$ch_notification['message']."</div>";
            $this->unset_userdata('ch_notification');
        }
        return $ch_n;
    }
}

/*
 *  End of file : MY_Session.php
 *  File Location : ./application/libraries/MY_Session.php
 */
