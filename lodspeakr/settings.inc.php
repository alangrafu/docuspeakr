<?

$conf['endpoint']['local'] = 'http://localhost:3031/poder/query';
$conf['home'] = '/var/www/documentacion/lodspeakr/';
$conf['basedir'] = 'http://localhost/documentacion/';
$lodspk['graph'] = 'http://poderopedia.com/vocab';




### DOn't change anything below this line

$conf['debug'] = false;

#If you want to add/overrid a namespace, add it here
$conf['ns']['local']   = $conf['basedir'];
$conf['ns']['poder']   = 'http://poderopedia.com/vocab/';
$conf['mirror_external_uris'] = false;
$conf['root'] = 'index';
?>
