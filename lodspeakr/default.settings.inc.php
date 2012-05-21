<?

$conf['endpoint']['local'] = 'http://alia:3031/poder/query';
$conf['home'] = '/var/www/documentacion/lodspeakr/';
$conf['basedir'] = 'http://alia/documentacion/';
$lodspk['graph'] = 'http://poderopedia.com/vocab';


#If you want to add/override a namespace, add it here
$conf['ns']['vocab']   = 'http://poderopedia.com/vocab/';

#############################################
### Don't change anything below this line ###
#############################################

$conf['debug'] = false;
$conf['ns']['local']   = $conf['basedir'];
$conf['mirror_external_uris'] = false;
$conf['root'] = 'index';
?>
