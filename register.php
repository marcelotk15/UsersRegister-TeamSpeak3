<?php
require_once("libraries/TeamSpeak3/TeamSpeak3.php");

$serverquery_username = "serveradmin"; //Serverquery login username
$serverquery_pass = ""; //Serverquery login password
$serverip = ""; //Teamspeak 3 server IP, only IP not port
$serverquery_port = "10011"; //Serverquery port
$serverport = "9987"; //Teamspeak 3 server port
$serverquery_nickname = "BotRegister"; //Nickname for bot serverquery

$guestgroup = "8"; //ID of guest group
$membergroup = "9"; //ID of member group

//connect serverquery.
$ts3_VirtualServer = TeamSpeak3::factory("serverquery://$serverquery_username:$serverquery_pass@$serverip:$serverquery_port/?server_port=$serverport&nickname=$serverquery_nickname");

//get guest users online. only online.
$arr_ClientList = $ts3_VirtualServer->clientList(array("client_servergroups" => "$guestgroup"));

//give member group for user(s).
foreach($arr_ClientList as $ts3_Client)
{
 $ts3_Client->addServerGroup("$membergroup");
}