ShareX Upload Script

upload.php configuration
--

Change $uploadhost to the same as $redirect (sometimes) <br />
Change $key to whatever you'd like <br />
Change $directory to the directory your web server is located, If using bought hosting (not vps) will most likely be public_html. <br />
Make sure to make a directory named "i" <br />

ShareX configuration
--

Click on destinations, Then destination settings <br />
Scroll down to "Custom Uploaders" <br />

Name: WHATEVER YOU WANT <br />
Request Type: POST <br />
Response Type: Response Text <br />
File form name: FileUpload <br />
Request URL: YOURWEBSITE/upload.php?key=YOUR KEY HERE <br />