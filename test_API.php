<?
// SETTINGS
	
	// API url and key
	$key = "9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08";
	$locations[]  = "https://api.smartbod.energy/?key=".$key;

	//	Login (currently not required)
	$username = '';
	$password = '';

// LOAD data

	$context = stream_context_create(array(
		'http' => array(
			'method'=> "GET"
			// ,'header'  => "Authorization: Basic " . base64_encode("$username:$password")
		)
	));
	

//loop for each location
foreach ($locations as $key => $url) {
	
	$response = file_get_contents($url, false, $context);
	$data = json_decode($response,true);
}
?>
<pre>
	<? var_dump($data); ?>
</pre>
