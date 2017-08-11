<?php
class Dolphin_Logorderuseragent_Model_Observer
{
	
	
	public function getOS() 
	{ 

		global $user_agent;
		$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

		$os_platform    =   "Unknown OS Platform";

		$os_array       =   array(
								'/windows nt 6.2/i'     =>  'Windows 8',
								'/windows nt 6.1/i'     =>  'Windows 7',
								'/windows nt 6.0/i'     =>  'Windows Vista',
								'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
								'/windows nt 5.1/i'     =>  'Windows XP',
								'/windows xp/i'         =>  'Windows XP',
								'/windows nt 5.0/i'     =>  'Windows 2000',
								'/windows me/i'         =>  'Windows ME',
								'/win98/i'              =>  'Windows 98',
								'/win95/i'              =>  'Windows 95',
								'/win16/i'              =>  'Windows 3.11',
								'/macintosh|mac os x/i' =>  'Mac OS X',
								'/mac_powerpc/i'        =>  'Mac OS 9',
								'/linux/i'              =>  'Linux',
								'/ubuntu/i'             =>  'Ubuntu',
								'/iphone/i'             =>  'iPhone',
								'/ipod/i'               =>  'iPod',
								'/ipad/i'               =>  'iPad',
								'/android/i'            =>  'Android',
								'/blackberry/i'         =>  'BlackBerry',
								'/webos/i'              =>  'Mobile'
							);

		foreach ($os_array as $regex => $value) 
		{ 
			if (preg_match($regex, $user_agent)) {
				$os_platform    =   $value;
			}
		}   

    	return $os_platform;	
      }

	  public function getBrowser() 
	  {

			global $user_agent;
		    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];

			$browser        =   "Unknown Browser";

			$browser_array  =   array(
									'/msie/i'       =>  'Internet Explorer',
									'/firefox/i'    =>  'Firefox',
									'/safari/i'     =>  'Safari',
									'/chrome/i'     =>  'Chrome',
									'/opera/i'      =>  'Opera',
									'/netscape/i'   =>  'Netscape',
									'/maxthon/i'    =>  'Maxthon',
									'/konqueror/i'  =>  'Konqueror',
									'/mobile/i'     =>  'Handheld Browser'
								);

			foreach ($browser_array as $regex => $value) { 

				if (preg_match($regex, $user_agent)) {
					$browser    =   $value;
				}

			}

			return $browser;

	}
	

	public function logdevice(Varien_Event_Observer $observer)
	{
		//Mage::dispatchEvent('admin_session_user_login_success', array('user'=>$user));
		//$user = $observer->getEvent()->getOrder();
		//$user->doSomething();
		
		$user_os        =   $this->getOS();
		$user_browser   =   $this->getBrowser();
		$device_details =   "<strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."";
		
		$device_details =   "Browser  :".$user_browser."Operating System: ".$user_os." : User Agent :".$_SERVER['HTTP_USER_AGENT'];
		
		$order = $observer->getOrder();
		$incrementId = $order->getIncrementId();
		
		if($incrementId)
		{	
			$order = Mage::getModel('sales/order')->loadByIncrementId($incrementId);
			$order->setDeviceinfo($device_details);		   
			$order->save();
		}	
		
		//echo "<pre>aaa"; print_r($order->getData());
		//exit;
		// print_r($device_details);
		//echo("<br /><br /><br />".$_SERVER['HTTP_USER_AGENT']."");
		
		//Mage::log($device_details , Zend_Log::INFO, 'deviceinfo.log');
		//Mage::log('-----------------------------------------------------------------------', Zend_Log::INFO, 'deviceinfo.log');
		
	}
		 
}
