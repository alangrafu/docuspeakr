DocuSPeaKr - OWL Documentation based on LODSPeaKr
author: Alvaro Graves (alvaro@graves.cl)
version: 20120504

Installation
------------

1. In that directory, clone this repository (git clone git://github.com/alangrafu/docuspeakr.git)
2. Move docuspeakr where you will publish your documentation (eg., mv docuspeakr /var/www/docs)
3. In settings.inc.php change `$conf['endpoint']['local']` (your local endpoint), `$lodspk['graph']` (the named graph where your ontology is located in the triple store), `$conf['home']` (the path where docuspeakr is located) and `$conf['basedir']` (the location on the web of your documentation)
4. Give permission to the webserver to write `lodspeakr/cache`, `lodspeakr/meta` and `lodspeakr/meta/db.sqlite`

That's it. you should see your documentation
