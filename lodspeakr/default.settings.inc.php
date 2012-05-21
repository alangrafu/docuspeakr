<?

$conf['endpoint']['local'] = 'http://localhost:3031/sparql';
$conf['home'] = '/var/www/docs/lodspeakr/'; #Keep the "lodspeakr/" at the end
$conf['basedir'] = 'http://localhost/documentacion/';
$lodspk['graph'] = 'http://example.org/vocab';


#If you want to add/override a namespace, add it here
$conf['ns']['vocab']   = 'http://example.org/vocab/';

#############################################
### Don't change anything below this line ###
#############################################

$conf['debug'] = false;
$conf['ns']['local']   = $conf['basedir'];
$conf['mirror_external_uris'] = false;
$conf['root'] = 'index';
?>
