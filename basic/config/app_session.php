<?php
// You can copy the ini_set statements from the switch block here
// http://code.cakephp.org/source/branches/1.2/cake/libs/session.php#484
// for case 'php' (around line 484) and modify to your needs.

// Lets assume our config value for Security.level is 'medium'

//Get rid of the referrer check even when Security.level is medium
ini_set('session.referer_check', '');
// or you can use this to restore to previous value
// ini_restore('session.referer_check');

//Cookie lifetime set to 0, so session is destroyed when browser is closed and doesn't persist for days as it does by default when Security.level is 'low' or 'medium'
ini_set('session.cookie_lifetime', 0);

//Now this feels a bit hacky so it would surely be nice to have a config variable for cookie path instead.
//Cookie path is now '/' even if your app is within a sub directory on the domain
$this->path = '/';
ini_set('session.cookie_path', $this->path);

//Comment out/remove this line if you want to keep using the default session cookie name 'PHPSESSID'
//Useful when you want to share session vars with another non-cake app.
ini_set('session.name', Configure::read('Session.cookie'));

//Makes sure PHPSESSID doesn't tag along in all your urls
ini_set('session.use_trans_sid', 0);
