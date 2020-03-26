<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "<AccessTokenHere>";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "<SecretTokenHere>";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
