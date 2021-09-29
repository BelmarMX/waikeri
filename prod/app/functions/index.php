<?
function assets($path)
{
	/* common paths */
	$assets = $_ENV['MIX_MODE'] == 'development'
		? $_ENV['MIX_LOCALHOST']
		: $_ENV['MIX_PUBLIC_DOMAIN']
	;

	if( substr($assets, -1) == '/'  )
	{
		$assets = substr($assets, 0, -1);
	}

	if( substr($path, 0, 1) == '/'  )
	{
		$l = strlen($path);
		$path = substr($path, 1, $l);
	}
	if( substr($path, -1) == '/' )
	{
		$path = substr($path, 0, -1);
	}

	return $assets.'/'.$path;
}

function url_contains($url_trace)
{
	$request = $_SERVER['REQUEST_URI'];
	if( strpos($request, $url_trace) )
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}