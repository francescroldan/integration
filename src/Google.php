<?php
namespace integration;
class Google
{
	public function getStatus($username)
	{
		$client = new \Guzzle\Http\Client();
		$res = $client->get("https://google.com");
		return 200;
	}}