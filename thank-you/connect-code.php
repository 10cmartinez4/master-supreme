<?php
/* ============================ Logging ================================================= */

ini_set("log_errors", 1);
ini_set("error_log", "/home/baskcom/logs/custom/errors.log");

if (!function_exists('_logError'))
{
	function _logError( $message ) 
	{
		if( is_array( $message ) || is_object( $message ) )
		{
			error_log('ERROR: ' . print_r( $message, true ) );
		} 
		else 
		{
			error_log('ERROR: ' . $message );
		}
	}
}

if (!function_exists('_logDebug'))
{
	function _logDebug( $message ) 
	{
		if( is_array( $message ) || is_object( $message ) )
		{
			error_log('DEBUG: ' . print_r( $message, true ) );
		} else 
		{
			error_log('DEBUG: ' . $message );
		}
	}
}

/* ============================ Error Handling/Redirects ================================================= */

if (!function_exists('_redirectToErrorPage'))
{
	function _redirectToErrorPage( $message = '', $statusCode = 303 ) 
	{
		$json = array("status" => 0, "message" => "An unknown error was encountered. Please notify your advisor.");
		header('Content-type: application/json');
		echo json_encode($json);
		exit();
	}
}

if (!function_exists('_redirectToInvalidConnectCodePage'))
{
	function _redirectToInvalidConnectCodePage( $message = '', $statusCode = 303 ) 
	{
		// Return URL in json response
		$json = array("status" => 0, "message" => "The Connect Code was invalid please re-enter.");
		header('Content-type: application/json');
		echo json_encode($json);
		exit();
	}
}

bask_service::processPostForPluginCalls();

class bask_service
{

	static $clientUrl = 'https://integrationservices.itok.net/IntegrationService.svc/restService/';
	static $clientApiKey = 'uGJym8SjdMwf7!U2';
	
	
	/* ======================================= API/Plugin Calls =============================================== */	
	
	static function processPostForPluginCalls()
	{
		/*if (!isset($_POST))
		{
			return;
		}
		
		// Check which plugin call has been selected (this is specified in a hidden field in the form)
		if (!isset($_POST['advisor_code']))
		{
			return;
		}*/
		
		try
		{
			_logDebug("Connect code: " . $_POST['advisor_code']);
			self::executeProcessConnectCode('Customer/ProcessConnectCode',			
			array('Code' => $_POST['advisor_code']));
		}
		catch (Exception $e)
		{			
			// Catch any general exceptions. Redirect to standard error page.
			_logError($e->getTraceAsString());
			_redirectToErrorPage();
		}
	}
	

	static function executeProcessConnectCode($call, array $values)
	{
		try 
		{
			$resp = self::executeCommonAPIPost($call, $values);

			//Test Code
			//throw new Exception('Test Exception');	

			if ($resp['IsSuccessful'] != 1)
			{
				_logError(self::renderResponseErrors($resp));
				_redirectToInvalidConnectCodePage($resp);
			}
			else 
			{
				// Return URL in json response
				$json = array("status" => 1, "url" => $resp['Url']);
				header('Content-type: application/json');
				echo json_encode($json);
				exit();
			}		
			_logDebug($resp);
		}
		catch (\Guzzle\Http\Exception\BadResponseException $e)
		{
			// Redirect to the specific error page for an invalid code
			_logError($e->getTraceAsString());
			_redirectToInvalidConnectCodePage();
		}		
	}


	static function executeCommonAPIPost($call, array $values)
	{
		try
		{
			// Only worry about setting up guzzle ONLY if we NEED to!
			// Almost all website requests will not need it anyway.
			include_once(dirname(__FILE__) . '/vendor/autoload.php');
			
			// TODO: Make Service Endpoint URL Configurable  
			$client = new \Guzzle\Http\Client(self::$clientUrl);
			$client->setDefaultOption('headers/ACCEPT', 'application/json');

			$req = json_encode($values);

			_logDebug($req);

			$response = $client->post($call)
				->setBody($req, 'application/json')
				->addHeader('UserKey', self::$clientApiKey)
				->send(); // Send and get response...
			
			_logDebug((string)$response->getBody());

			$resp = $response->json();
			_logDebug('JSONified response: ' . $resp);
			return $resp;
		}
		catch (\Guzzle\Http\Exception\BadResponseException $e)
		{
			// For either a 4xx or a 5xx HTTP error response...
			// TODO: Going to log it and redirect to home page soon
			//throw $e;
			_logError((string)$e);
			throw $e;
		}
		
	}	


	static function renderResponseErrors($resp)
	{
		$result = 'Response Errors: ';
		foreach ($resp['Errors'] as $item) 
		{
			$result .= $item['Code'] . " : " . $item['Message'] . "; ";
		}
		return $result;
	}
	


	
	
} // End plugin class
?>


