<?php

class pendingpostalert {
 
 
    public function __construct()
    {
        // Email subscribers whenever a new report is created
        Event::add('ushahidi_action.report_submit', 'notify_admins');
    }
 
 
    public function notify_admins()
    {
        //send email to a list of admins set up in the plugin settings page
        //TODO: write notify admins function
        //function should read email list from pendingpostalert_admin settings and send them a link to pending post editing page
        //source: http://www.brettbrewer.com/content/view/95/45/
        $from = 'report@kifaya.org.il';
        $subject = 'new post pending approval';
        $body = 'Go to Kifaya admin to approve posts';
        $to = array(
          'to'=>array('tailor.vj@gmail.com','Tailor Vijay'),
          'to1'=>array('shakhalevinson@gmail.com','Shakhal Levinson')//,
         //'to2'=>array('address2@somewhere.com','Recipient2 Name'),
         //'cc'=>array('ccaddress@somewhere.com','cc Recipient Name'),
         //'bcc'=>array('bccaddress@somewhere.com','bcc Recipient Name')
        );

        email::send($to,$from,$subject,$body,true);
    }
 
}
 
//instatiation of hook
//new pendingpostalert;

?>
