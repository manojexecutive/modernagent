<?php
error_reporting(E_ALL);
			require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');
				$email = new PHPMailer();
				$email->CharSet = "utf-8";
				$email->isSendmail();
				$email->SMTPAuth= true;
				$email->Username = "info@modernagent24.com";
				$email->Password = "info@123";
				$email->SMTPSecure = "ssl";
				$email->Host = "mail.modernagent24.com";
				$email->Port = "465";
				$email->setFrom('info@modernagent24.com', 'modernagent24');
				$email->AddAddress('ambicadevi95922@gmail.com');

				$email->Subject  =  'asdasdasdas';
				$email->IsHTML(true);
				$email->Body = '<div style="background: #eee;padding: 10px;color: #454444;"><div style="max-width: 650px;    background: #fff;    font-family: sans-serif;    margin: 0 auto;    overflow: hidden;    padding: 0 20px; text-align: center;">		<header><div style="text-align: center;padding: 20px 0;"><img src="http://modernagent24.com/images/logo.png" style="height: 90px;" />					</div>			<div class="header-TEXT">		<h1 style="    margin-bottom: 2px;    margin-top: 2px;    text-transform: uppercase;    font-size: 26px;    font-weight: 700 !important;">turn your 1 rental posting into 100’s</h1>		<span style="    text-transform: uppercase;    font-size: 24px;    font-weight: 300;">of Posted Ads</span>		</div>	</header><div style="display: table;text-align: center;background-image: url(http://modernagent24.com/images/buildingBg.png);background-size: 100%;background-repeat: no-repeat;background-position: bottom center;height: 320px;width: 100%;"><div style="display: table-cell;vertical-align: middle;"><a href="https://360tenx.com/view/landlord_form.php" target="_blank" style="    padding: 6px 15px;font-size: 30px;min-width: 230px;color: #fff;font-weight: bold;border: 1px solid #454444;background: rgba(231,44,45, 0.8); box-shadow: 0 2px 1px rgba(0,0,0,.6) !important;   border-radius: 10px !important;">		Free Rental Advertising		</a><span style="font-size: 20px;    display: block;    margin-top: 10px;font-weight: 400;">by TenX Service at Remax “10”	</span>		</div></div><div style="text-align: center;">					<span style="color: #e72c2d;font-size: 18px;font-weight: 300;">Leverage your time with our advertising method</span>	<div style="font-size: 60px;margin: 10px auto;font-weight: bold;position: relative;    color: #e72c2d;"><img src="http://modernagent24.com/images/after.png" style="top: 0px;position: relative;" />			HOW?	<img src="http://modernagent24.com/images/before.png" style="top: 0px;position: relative;" />	</div>	</div>	<div style="width: 90%;padding: 40px 10px;margin: 20px auto; background-image: url(http://modernagent24.com/images/tokyoBg.jpg); text-align: center;box-shadow: 0 0px 100px rgba(0,0,0,.3);">	<span style="text-align: center;text-transform: uppercase;font-size: 16px;color: #fff;margin-bottom: 7px;font-weight: 400;display: block;">Grow your exposure on these popular site</span><div style="width: 80%; height: 1px; background: #e72c2d; margin: 0 auto; margin-top: 4px;display: block;"></div>	<div style="width: 70%;height: 1px;  background: #e72c2d; margin: 0 auto;  margin-top: 4px;display: block;"></div><br /><div style="    display: table;   width: 100%;  margin-top: 30px;  text-align: center;">	<div style="    display: table-cell; vertical-align: middle;margin: 10px;"><img src="http://modernagent24.com/images/Craigslist.png" style="max-height: 30px;" />	</div><div style="    display: table-cell; vertical-align: middle;margin: 10px;"><img src="http://modernagent24.com/images/zillow-logo.png" style="max-height: 30px;" /></div>	<div style="    display: table-cell; vertical-align: middle;margin: 10px;"><img src="http://modernagent24.com/images/Trulia-Logo.png" style="max-height: 30px;" />	</div>		</div>			<div style="    display: table;   width: 100%;  margin-top: 30px;  text-align: center;">				<div style="    display: table-cell; vertical-align: middle;margin: 10px;"><img src="http://modernagent24.com/images/rent-logo2-copy.png" style="max-height: 30px;" /></div><div style="    display: table-cell; vertical-align: middle;margin: 10px;">	<img src="http://modernagent24.com/images/Hotpads_Logo.png" style="max-height: 30px;" /></div><div style="    display: table-cell; vertical-align: middle;margin: 10px;"><img src="http://modernagent24.com/images/apt_dot_com_logo.png" style="max-height: 30px;" /></div><div style="    display: table-cell; vertical-align: middle;margin: 10px;"><img src="http://modernagent24.com/images/backpage-logo.png" style="max-height: 30px;" />	</div></div></div><br /><div style="font-size: 18px; text-transform: uppercase; width: 60%; font-weight: 300; margin: 30px auto;color: #e72c2d;">		Learn what millions of landlords are already using	</div><div style="text-align: center; margin-right: auto;  margin-left: auto; display: block; float: left; margin-bottom: 20px;display: table; content: \'\';">	<div style="position:relative; min-height:1px;padding-right:15px;padding-left:15px;text-align: center;float: left; margin: auto;width: 25%;display: table; content: \'\';">		<div style="margin-bottom: 10px;"><img src="http://modernagent24.com/images/icon_01.png" style="max-width: 100%;" /></div><span style="font-size: 16px; font-weight: bold; display: block;text-transform: uppercase;">			save time		</span>	</div>	<div style="position:relative; min-height:1px;padding-right:15px;padding-left:15px;text-align: center;float: left; margin: auto;width: 25%;display: table; content: \'\';"><div style="margin-bottom: 10px;"><img src="http://modernagent24.com/images/icon_02.png" /></div>		<span style="font-size: 16px; font-weight: bold; display: block;text-transform: uppercase;">	No broker Commission</span>		</div>		<div style="position:relative; min-height:1px;padding-right:15px;padding-left:15px;text-align: center;float: left; margin: auto;width: 25%;display: table; content: \'\';">	<div style="margin-bottom: 10px;">	<img src="http://modernagent24.com/images/icon_03.png" />	</div>	<span style="font-size: 16px; font-weight: bold; display: block;text-transform: uppercase;">maximize exposure	</span>	</div><div style="position:relative; min-height:1px;padding-right:15px;padding-left:15px;text-align: center;float: left; margin: auto;width: 25%;display: table; content: \'\';">		<div style="margin-bottom: 10px;"><img src="http://modernagent24.com/images/icon_04.png" />		</div>	<span style="font-size: 16px; font-weight: bold; display: block;text-transform: uppercase;">pay nothing</span>		</div>	</div><div style="display: table;content: \'\';    clear: both;"></div>	<br />	<div style="font-size: 28px;  text-transform: uppercase; text-align: center; margin-top: 20px; margin-bottom: 20px;   display: block; width: 100%; font-weight: bold;     color: #e72c2d;">	<img src="http://modernagent24.com/images/after.png" style="max-width: 100%;top: 10px; position: relative;" />	you\'re one step away<img src="http://modernagent24.com/images/before.png" style="max-width: 100%;top: 10px; position: relative;" />		</div>	<div style="display: table;content: \'\';    clear: both;"></div><div style="    font-size: 24px;text-align: center;    margin-top: 20px;    display: block;    width: 80%;    margin: auto;    font-weight: 300;"> From posting to DOZENS of Top Rated </br>listing websites	</div>	<br />	<a href="http://360tenx.com" target="_blank" style="text-decoration: none; line-height: 1.42857143;text-align: center;    vertical-align: middle;display: inline-block; margin-bottom: 0; touch-action: manipulation; cursor: pointer; user-select: none;white-space: nowrap; border-radius: 0 !important;box-shadow: none !important; outline: none !important; padding: 6px 15px; font-size: 30px;min-width: 260px; color: #fff; background: #e72c2d; border: 1px solid #454444;">	Click Here</a><div style="font-size: 18px; text-transform: uppercase; width: 60%; font-weight: 300; margin: 30px auto;color: #e72c2d;">	let our experienced advertisers market your rental for you	</div>	</div><div><div style="    background: #393939; color: #fff; font-size: 12px; text-align: right; font-weight: 300;    max-width: 650px;font-family: sans-serif; margin: 0 auto; overflow: hidden; padding: 0 20px;"><p style="padding: 4px 0;font-style: italic;"><a href="http://rentsmart.io/landlords" target="_blank" style="float: left; text-decoration: none; color: #fff;">Don\'t just rent... Rent Smart</a> All Rights Reserved.	</p></div>	</div></div><p style="font-size: 12px; text-align: center; font-weight: 500; margin: 20px auto;">Each office is independently owned and operated, fair housing and equal opportunity.<br>Contact Robert Sher Leasing Agent at RE/MAX "10", 2429 N Clark St, Chicago, IL 60614<br>Don\'t want <u>free advertising</u>? Click <a href="http://modernagent24.com/dev3/unsubscribe.php" target="_blank" >UNSUBSCRIBE</p></div></div>';

if($email->Send())
{
    echo "Email Successfully sent";
}
else
{
    echo "Error in Sending Mail".$email->ErrorInfo;
}

?>
