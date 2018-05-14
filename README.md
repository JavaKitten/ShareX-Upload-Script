ShareX Upload Script

upload.php configuration
--

Change $uploadhost to the same as $redirect (sometimes)
Change $key to whatever you'd like
Change $directory to the directory your web server is located, If using bought hosting (not vps) will most likely be public_html.
Make sure to make a directory named "i"

ShareX configuration
--

Click on destinations, Then destination settings
Scroll down to "Custom Uploaders"


Change name to whatever you'd like

Request Type: POST
Response Type: Response Text
File form name: FileUpload
Request URL: YOURWEBSITE/upload.php?key=YOUR KEY HERE