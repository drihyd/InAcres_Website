<?php

date_default_timezone_set("Asia/Kolkata");
require_once('functions.php');

$full_name  = get_field('fullname');
$email      = get_field('email');
$phone      = get_field('phone');
$acres      = get_field('acres');
$form_select = get_field('form_select');
if($form_select=="1")
{
	$acres="Want to buy a farm land: ".$acres;
}
else
{
	$acres="Want to buy a farm land: No";
}

$leadutmsource   = get_field('leadutmsource');
$leadutmmedium   = get_field('leadutmmedium');
$leadutmcampaign = get_field('leadutmcampaign');
$leadutmcontent  = get_field('leadutmcontent');
$leadutmterm     = get_field('leadutmterm');

if($leadutmsource=="")
{
	$leadutmsource="website";
}
else
{
	$leadutmsource=$leadutmsource;
}

if($leadutmmedium=="")
{
	$leadutmmedium ="web";
}
else
{
	$leadutmmedium=$leadutmmedium ;
}

if($leadutmcampaign=="")
{
	$leadutmcampaign  ="organic-farming-with-csa";
}
else
{
	$leadutmcampaign=$leadutmcampaign ;
}

$date 			= date('Y-m-d H:i:s', time());
$post_dump		= $_POST;
$post_dump 		= json_encode($post_dump);
$post_dump 		= $post_dump;
$form_page 		= get_form_page_url();

$type = "In Acres LP | New Enquiry";

$error = 0;
$error_messages = array();
$output = array(
	'error' => TRUE,
	'error_messages' => array(),
	'success' => FALSE,
);

if($full_name == '') {
	$error_messages['fullname'] = "Please enter your Full Name";
	$error = 1;
}

if( ($email == '') OR  ( ! valid_email($email)) ) {
	$error_messages['email'] = "Please enter your Email Address";
	$error = 1;
}

if($phone == '') {
	$error_messages['phone'] = "Please enter your Phone Number";
	$error = 1;
}

if($error == 1) {
	$output['error'] = TRUE;
	$output['error_messages'] = $error_messages;
	$output['success'] = FALSE;
	echo json_encode($output);
	exit();
	//header("companySize:{$form_page}#leadForm");
	//exit();
}

ini_set("log_errors", 1);
$log_name = date('M-d-Y', time());
ini_set("error_log", "./logs/{$log_name}.log");
error_log("\nNew Enquiry | full_name: '{$full_name}', phone: '{$phone}', lead_type: '{$type}', date_captured: '{$date}'\n\n");

$ip = $_SERVER['REMOTE_ADDR'];
$page_url = $form_page;




/******** CURL method for Leadstore *********/ 		
$input_params=array(				
	'firstname'=> $full_name,
	'email'=> $email,
	'phone'=> $phone,
	'city'=> '',
	'message'=>'',
	'udf1'=> $acres,
	'udf2'=> '',
	'udf3'=>'',
	'udf4'=>'',	
	'udf5'=>'',	
	'udf6'=>'',							
	'udf7'=>'',
	'udf8'=>'',
	'udf9'=>'',
	'udf10'=>'',																					
	'ua_ip'=> $ip,
	'ua_device'=> '',
	'ua_query_url'=> $page_url,
	'landing_page_title'=> $type,
	'utm_source'=> $leadutmsource,
	'utm_medium'=> $leadutmmedium,
	'utm_campaign'=> $leadutmcampaign,
	'utm_content'=> $leadutmcontent,
	'utm_term'=> $leadutmterm,
	'ua_city'=>'',
	'ua_country'=>'',
	'form_data'=> $post_dump,
);	
$fields = $input_params;
$postvars = '';
	foreach($fields as $key=>$value) {
		$postvars .= $key . "=" . $value . "&";
	}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://leadstore.in/capture_leads/capture/49");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$postvars);
// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//http_build_query(array('postvar1' => 'value1')));
// receive server response ...

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);  
/****************End CURL CALL**********************/


ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>In Acres</title>
</head>
<body style="font-family:Arial, sans-serif;font-size:13px;color:#000;background: #f4f4f4;line-height:1.5;padding: 30px;">
	<div style="background: #fff;max-width:550px;display: block;margin: 15px auto;padding: 30px;border-bottom: 6px solid #3D722A;">
		<img src="https://imgur.com/uhYSvZQ.jpg" alt="In Acres" title="In Acres" width="140" style="display: block;margin-bottom:9px;">
		
		<h1 style="font-size: 21px;display:block;margin-bottom: 0;">New Enquiry<br></h1>
		<p style="font-size: 15px;font-weight: bold;margin: 0;">Origin: <a href="<?php echo $page_url; ?>"><?php echo $page_url; ?></a></p>
		
		<div style="font-size: 13px;color: #333;display:block;margin: 15px 0 15px;max-width:360px;">
			<p style="font-size: 12px; color: #888;margin: 0 0 6px;"><?php echo date('M d, Y', strtotime($date)); ?></p>
			<p style="margin: 0 0 6px;"><strong>Name: </strong><?php echo ucwords($full_name); ?></p>
			<p style="margin: 0 0 6px;"><strong>Phone: </strong><?php echo $phone; ?></p>
			<p style="margin: 0 0 6px;"><strong>Email: </strong><?php echo $email; ?></p>
		</div>
		
		<p style="margin-bottom: 0px;">Thanks,<br><strong>Admin</strong></p>
	</div>
</body>
</html>

<?php
$email_message = ob_get_clean();
$subject = 'New Lead - ' . ucwords($type);

require_once('emails_list_testing.php');
//require_once('emails_list_production.php');

send_email($from, $from_name, $to, $to_name, $subject, $email_message, '', $cc_emails, $bcc_emails);

ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if !mso]><!-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | InAcres</title>
    <!--[if (gte mso 9)|(IE)]>
    <style type="text/css">
        table {border-collapse: collapse;}
    </style>
    <![endif]-->
	<style type="text/css">
/* Basics */
		body {
			margin: 0 !important;
			padding: 0;
			background-color: #ffffff;
		}
		table {
			border-spacing: 0;
			font-family: sans-serif;
			color: #333333;
		}
		td {
			padding: 0;
		}
		img {
			border: 0;
		}
		div[style*="margin: 16px 0"] { 
			margin:0 !important;
		}
		.wrapper {
			width: 100%;
			table-layout: fixed;
			-webkit-text-size-adjust: 100%;
			-ms-text-size-adjust: 100%;
		}
		.webkit {
			max-width: 600px;
			margin: 0 auto;
		}
		.outer {
			Margin: 0 auto;
			width: 100%;
			max-width: 600px;
		}
		
		
/* End of Basics */

/* Media Queries */
	
	@media screen and (max-width: 400px) {
	.two-column .column,
		.three-column .column {
			max-width: 100% !important;
		}
		.two-column img {
			max-width: 100% !important;
		}
		.three-column img {
			max-width: 50% !important;
		}
	}
	
	@media screen and (min-width: 401px) and (max-width: 620px) {
	.three-column .column {
			max-width: 33% !important;
		}
		.two-column .column {
			max-width: 50% !important;
		}
	}

/* End of Media Queries
		
/* Mailer Styles */
		
		.full-width-image img {
			width: 100%;
			max-width: 600px;
			height: auto;
		}
		.inner {
			padding: 10px;
		}
		p {
			Margin: 0;
		}
		a {
			color: #ee6a56;
			text-decoration: underline;
		}
		.h1 {
			color:#4F8039;
			font-size: 15px !important;
			font-weight: bold;
			Margin-bottom: 18px;
		}
		.h2 {
			font-size: 18px;
			font-weight: bold;
			Margin-bottom: 12px;
		}
		 
	/* One column layout */
	
		.one-column .contents {
			text-align: left;
		}
		.one-column p {
			font-size: 16px;
			line-height: 135%;
			Margin-bottom: 10px;
		}
	
	/* End of One column layout */	
		
	/* Two column layout */
	
		.two-column {
			text-align: center;
			font-size: 0;
		}
		.two-column .column {
			width: 100%;
			max-width: 300px;
			display: inline-block;
			vertical-align: top;
		}		
		.contents {
			width: 100%;
		}		
		.two-column .contents {
			font-size: 14px;
			text-align: left;
		}
		.two-column img {
			width: 100%;
			max-width: 280px;
			height: auto;
		}
		.two-column .text {
			padding-top: 10px;
		}
		
	/* End of Two column layout */	
		
/* End of Mailer Styles */
		
	</style>
</head>
<body>
    <center class="wrapper">
        <div class="webkit">
            <!--[if (gte mso 9)|(IE)]>
			<table width="600" align="center">
				<tr>
					<td>
					<![endif]-->
					<table class="outer" align="center">
					<!---FULL WIDTH COLUMN LAYOUT-->
						<tr>
							<td class="full-width-image" bgcolor="#E2DACC" style="background-image: url('https://imgur.com/N2HK4eZ.jpg')">
								<img src="https://imgur.com/50qu2bp.jpg" width="600" alt="" />
							</td>
						</tr>
						<tr>
							<td class="one-column">
								<table width="100%">
									<tr>
										<td class="inner contents" style="text-align:center;background-image: url('https://imgur.com/N2HK4eZ.jpg')" bgcolor="#E2DACC">
											<p class="h1">We are extremely glad for having taken your time to fill out our form.</p>
											<br/>
											<p>Farming is not only a profession but also a lifestyle in our Indian tradition. There are many people living and working in urban areas who have an urge to connect to Mother Nature through farming – we, at InAcres, would like to offer them an opportunity to do just that. </p>
											<br/>
											<p class="h1">InAcres carefully scrutinized at least 100 farms for connectivity and sustainable water resources in the last 3 years before finalizing this ideal piece of land.</p>
											<br/>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td class="one-column">
								<table width="100%">
									<tr>
										<td class="inner contents">
											<p>&nbsp;</p>
											 <p style="background: #4F8039;color:#fff;display:inline-block;padding:10px 15px;font-family: georgia;"><i><b>Below are the details of the Bhuthpur Project</b></i></p>
											<table border=0 cellspacing="10" cellpadding="25" style="font-family: georgia;font-style: italic;border-collapse:collapse;">
												<tr>
													<td><img src="https://imgur.com/cXCR2gL.png"/></td>
													<td>A pleasant 1 ½ hour drive from the ORR Shamshabad Exit</td>
												</tr>

												<tr>
													<td><img src="https://imgur.com/cXCR2gL.png"/></td>
													<td>The farm is well connected with BT Road and is completely fenced.</td>
												</tr>
												<tr height="10"></tr>
												<tr>
													<td><img src="https://imgur.com/cXCR2gL.png"/></td>
													<td>Karivena Reservoir Project which is currently under construction is visible from the site, hence recharging groundwater in the farmland.</td>
												</tr>
												<tr height="10"></tr>
												<tr>
													<td><img src="https://imgur.com/cXCR2gL.png"/></td>
													<td>The project currently has 4 functioning borewells, a 1 crore litre capacity water storage tank, a canal that passes through the farm with 6-8 months water supply and drip irrigation system for the entire farm.</td>
												</tr>
												<tr height="10"></tr>
												<tr>
													<td><img src="https://imgur.com/cXCR2gL.png"/></td>
													<td>The Farm has 7-year-old mango plantation which is already in production.</td>
												</tr>
												<tr height="10"></tr>
												<tr>
													<td><img src="https://imgur.com/cXCR2gL.png"/></td>
													<td>The entire farm is organically grown and will soon get an organic certification.</td>
												</tr>
												<tr height="10"></tr>
												<tr>
													<td><img src="https://imgur.com/cXCR2gL.png"/></td>
													<td>Sandalwood plantation is in the process, which will yield attractive returns in the next 10-15 years.</td>
												</tr>
											</table>	
											<p>&nbsp;</p>
											<p class="h1">Let’s join hands to protect Mother Earth for our future generations.</p> 
											<br/>
											<p><b>Thanks,<br/>InAcres</b></p>	
											<br/>
											<a href="tel:075693 74013" style="color:#fff;text-decoration:none;background:green;padding:10px 12px;"><b>Call:</b> 075693 74013</a>	
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td class="one-column">
								<table width="100%">
									<tr>
										<td class="inner contents">
											<img src="https://imgur.com/15tStgZ.png" align="right" width="200" style="margin-bottom:-10px;"/>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td class="one-column">
								<table width="100%">
									<tr>
										<td class="inner contents" style="text-align:center;padding-bottom:0px;font-size:12px;background-image: url('https://imgur.com/N2HK4eZ.jpg')" bgcolor="#E2DACC">
											<br/>
											<div style="float:left;"><a href="http://inacres.com/l/organic-farming-with-csa/privacy.html" style="color:#313131;text-decoration: none;">Privacy Policy</a> | <a href="http://inacres.com/l/organic-farming-with-csa/terms.html" style="color:#313131;text-decoration: none;">Terms & Conditions</a></div>
											<span style="float:right;">&copy; 2019 InAcres</span>
											<br/><br/>
										</td>
									</tr>
								</table>
							</td>
						</tr>

					</table>
					<!--[if (gte mso 9)|(IE)]>
					</td>
				</tr>
			</table>
			<![endif]-->
        </div>
    </center>
</body>
</html>


<?php
$email_message = ob_get_clean();
$subject = 'New Lead - ' . ucwords($type);

require_once('emails_list_testing.php');
//require_once('emails_list_production.php');

send_email($from, $from_name, $email, ucwords($full_name), 'Congratulations ! You are about to become an organic farmer', $email_message, '', NULL, NULL);

//mysql_close();
//$success_message['success_message'] = "Thank you! Your registration was successfull.";
//header("companySize:thankyou.html");

$output['error'] = FALSE;
$output['error_messages'] = array();
$output['success'] = TRUE;
$output['success_message'] = "Thank you for your interest.<br>We will get in touch with you soon.";
echo json_encode($output);
exit();
?>
