[![Build Status](https://travis-ci.org/whackashoe/domainbase.svg?branch=master)](https://travis-ci.org/whackashoe/domainbase.svg?branch=master)

domainbase
===

Get the base domain of a url in php.

Getting the actual domain from a url can suck, there are multiple edgecases and it isn't built into php. 

With domainbase, just pass it a url like this:

~~~

$dbase = new DomainBase();
$dbase->basename("http://images.google.co.uk/somecrap?here=adasdasd");
//this will return "google"

~~~

easy!

Installation
===

`require: "whackashoe/domainbase": "dev-master"`

License
===
MIT license (for u lovely lawyery programmer types)



Pull requests appreciated; if you have any questions please open an issue, thanks.
