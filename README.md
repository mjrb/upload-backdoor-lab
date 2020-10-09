# PHP upload backdoor example
en axample of getting a backdoor to a website using file upload.

## setup
- install docker
- install docker-compose
- in this directory, run `docker-compose up -d`

## accessing the site
- you should now be able to go to [http://localhost:8080/upload.html](http://localhost:8080/upload.html)
  and see the upload page
- you can go to [http://localhost:8080/uploads/](http://localhost:8080/uploads/) to see
  the uploads folder on the server

## performing the exploit
- go to upload.html and upload backdoor.php
- the upload script is not corectly checking the file types so it will allow this
- you can now run bash commands on the server using this script throught the `cmd` url parameter
- for example if you want to run `ls /` on the server you go to [http://localhost:8080/uploads/backdoor.php?cmd=ls+/](http://localhost:8080/uploads/backdoor.php?cmd=ls+/)
