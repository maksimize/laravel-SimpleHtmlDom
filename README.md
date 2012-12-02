laravel-SimpleHtmlDom
=====================

laravel SimpleHtmlDom bundle can be used to get and parse files or webpages, html or xml 

the bundle is using the simplehtmldom libraray
http://simplehtmldom.sourceforge.net/

## Usage ##

### Get single text ###
``$text = SimpleHtmlDom::url('http://laravel.com/')->get('div[class=bundles] h3')->first();``

results

``GRAB SOME BUNDLES``

### Get more than text ###
``$dom = SimpleHtmlDom::url('http://example.com/');``
``$href = $dom->get('div[class=nav] a', 'href')->first();``
``$src = $dom->get('div[class=galary] img', 'src')->first();``