# UsersRegister-TeamSpeak3
Script for automatic register user for TeamSpeak3S

This source use TeamSpeak 3 PHP Framework by Planet TeamSpeak. More http://addons.teamspeak.com/directory/addon/result/TeamSpeak-3-PHP-Framework.html

I use this script in my server with ubuntu cron. To this is simple, download the git folder for your ubuntu server and add cron as desired time with this command, changing the location of file register.php.

In my case is:
`*/5 * * * * php /home/ts3server/ts3register/register.php`
The script run every 5 minutes.


Logical that you needs the installed php, if you have not installed: 

`apt-get update`

`apt-get install php5`.


If you don't know about cron read more here: https://help.ubuntu.com/community/CronHowto
