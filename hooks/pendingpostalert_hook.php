<?php

class pendingpostalert {
 
 
    public function __construct()
    {
        // Email subscribers whenever a new report is created
        Event::add('ushahidi_action.report_submit', array($this,'notify_admins') );
    }
 
 
    public function notify_admins()
    {
        //send email to a list of admins set up in the plugin settings page
        //TODO: write notify admins function
        //function should read email list from pendingpostalert_admin settings and send them a link to pending post editing page
        //source: http://www.brettbrewer.com/content/view/95/45/
        $site_email = Kohana::config('settings.site_email');

	// Is this a valid Secret?
	$pendingpostalert = ORM::factory('pendingpostalert_settings')
		->find(1);

	if ($pendingpostalert->loaded)
	{
		$pendingpostalert_emails = $pendingpostalert->pendingpostalert_emails;
		if ($pendingpostalert_emails)
		{ // Editor alert email addresses defined
			//TODO: convert email address array to match mail sending format. 
			$emails = explode(",", $pendingpostalert_emails);
		}
		else
		{ // Editor email addresses undefined - use default address $site_email
			// TODO: convert default mail address to mail sending block and send email notifications.
			$emails = array($site_email);
		}
	}
       
        $to = array();
        
        for($i = 0; $i < count($emails); $i++){
	  
	  $email = $emails[$i];
	  $to['to'.$i] = array($email,'');
        
        }
        
        $from = $site_email;
        $subject = 'New post pending approval';
        $body = 'Go to Ushahidi administration console to approve posts. ' . url::site(). 'admin/reports?status=a';
        //$to = array(
          //'to'=>array('tailor.vj@gmail.com','Tailor Vijay'),
          //'to1'=>array('shakhalevinson@gmail.com','Shakhal Levinson')//,
         //'to2'=>array('address2@somewhere.com','Recipient2 Name'),
         //'cc'=>array('ccaddress@somewhere.com','cc Recipient Name'),
         //'bcc'=>array('bccaddress@somewhere.com','bcc Recipient Name')
       // );

        email::send($to,$from,$subject,$body,true);
    }
 
}
 
//instatiation of hook
new pendingpostalert;

?>
