<?php
define( 'TEMPLATE_URL', get_template_directory_uri( ) );
define( 'SITE_URL', site_url( ) );

add_theme_support( 'post-thumbnails' );

add_action('wp_ajax_newsletter_mailchimp', 'newsletter_mailchimp');
add_action('wp_ajax_nopriv_newsletter_mailchimp', 'newsletter_mailchimp');
function newsletter_mailchimp()
{
	global $wpdb;

	$email = @$_POST['email'];

	if( !wp_verify_nonce( $_REQUEST['nonce'], 'newsletter_mailchimp' ) )
	{
		echo json_encode(array(
			'status'	=>	'error',
			'msg'		=>	'Page expired. Please reload and try again.',
		));
		exit;
	}

	if( isset( $email ) && !empty( $email ) && is_email( $email ) )
	{
		//API Details
		$apiKey = '7fd91b9038483e345cba867096222eda-us1';
		$listId = '6d4091954e';

        //Create mailchimp API url
        $memberId = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

        //Member info
        $data = array(
            'email_address'=>$email,
            'status' => 'subscribed',
            'merge_fields'  => [
                'FNAME'     => '',
                'LNAME'     => ''
            ]
        );
        $jsonString = json_encode($data);

        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // var_dump($result);

        //Collecting the status
        switch ($httpCode) {
            case 200:
                $msg = 'Thank you for subscribing.';
                break;
            case 214:
                $msg = 'Already Subscribed';
                break;
            default:
                // $msg = 'Oops, please try again.[msg_code='.$httpCode.']';
	                echo json_encode(array(
	                	'status'	=>	'error',
	                	'msg'		=>	'Some error occured',
	                ));
	                exit;
                break;
        }

        // echo $msg;

		echo json_encode(array(
			'status'	=>	'success',
			'msg'		=>	$msg,
		));
		exit;
	}
	else
	{
		echo json_encode(array(
			'status'	=>	'error',
			'msg'		=>	'Invalid Email Address',
		));
		exit;
	}
	exit;
}
