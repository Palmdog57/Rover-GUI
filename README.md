# Rover - Tom Cheesecake Palmers Final Year Project! 

Software development of a SIEM built with accessibility and ease of use in mind!
The entire GUI exists within a plugin located in the '/wp-content/plugins/rover-gui' directory

# How it works
	1. Rsyslog is configured to forward logs to a server located at 127.0.0.1:27017
	2. Rsyslog is configured to send all incoming logs to a mongoDB database called 'syslog'
	3. Socket.IO is configured via Node.JS to connect to MongoDB and broadcast via port 8080
	4. A Javascript file located in /public/js is configured with jQuery to filter incoming JSON data and add to a table located within /public/rover-public-display.php [LOG ACTIVITY]
	5. The Javascript file checks incoming JSON data and adds data to another table in /public/rover-public-display.php based on rules specified in an array [OFFENSES]
	6. Node.JS is configured to run a constant tcpdump command to a PCAP file. The PCAP file is converted to JSON using tshark and added to another MongoDB database called 'netstat'
	7. The Javascript file checks incoming JSON data and adds to a third table in /public/rover-public/display.php based on rules specified in an array [NETWORK ACTIVITY]
	8. Other stuff will be added as I fid time. Enjoy


# Requirements
$apt-get install mongodb-server npm
$npm install node
&npm install socket.io

# Special Thanks
A thousand thanks to my mum and dad, Liza, Gregg and of course; Nate, Tanya & Chris
Without whom this project would not exist

Peace!
