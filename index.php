<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>API Methods Page</title>
	<style>
         * {
             margin: 0;
             padding: 0;
             box-sizing: border-box;
         }

         body {
             font-family: Arial, sans-serif;
             display: flex;
             height: 100vh;
         }

         .container {
             display: flex;
             width: 100%;
         }

         .left {
             width: 30%;
             background-color: #f1f1f1;
             padding: 20px;
             border-right: 1px solid #ccc;
         }

         .left h2 {
             color: #333;
             margin-bottom: 20px;
         }

         .left ul {
             list-style: none;
         }

         .left li {
             padding: 10px;
             background-color: #4CAF50;
             color: white;
             margin-bottom: 10px;
             cursor: pointer;
             text-align: center;
             border-radius: 5px;
         }

         .left li:hover {
             background-color: #45a049;
         }

         .left input {
             width: 100%;
             padding: 10px;
             margin-bottom: 10px;
             border: 1px solid #ccc;
             border-radius: 5px;
         }

         .right {
             width: 70%;
             padding: 20px;
             background-color: #fff;
         }

         .right h2 {
             color: #333;
             margin-bottom: 20px;
         }

         .json-output {
             background-color: #f1f1f1;
             padding: 20px;
             border-radius: 5px;
             height: 80%;
             overflow-y: scroll;
         }

         .error {
             color: red;
             font-size: 12px;
         }
	</style>
    </head>
    <body>
	<div class="container">
	    <div class="left">
		<h2>GREEN-API Methods</h2>

		<!-- IdInstance Field -->
		<input type="text" id="idInstance" placeholder="IdInstance" value="7103894341"/>

		<!-- ApiToken Field -->
		<input type="text" id="apiToken" placeholder="ApiToken" value="85ebf3fb88224447a52899dd473b25ebb02726937cce4785af"/>

		<!-- Button for getSettings -->
		<li onclick="settings()">getSettings</li>

		<!-- Phone Number Field (for sendMessage) -->
		<input type="text" id="phoneNumber" placeholder="Phone Number" value="87711895310"/>
		<div class="error" id="phoneError"></div>

		<!-- Message Field -->
		<input type="text" id="message" placeholder="Message" value="some message"/>

		<!-- Button for sendMessage -->
		<li onclick="message()">sendMessage</li>

		<!-- Phone Number Field (for sendFileByUrl) -->
		<input type="text" id="phoneFileNumber" placeholder="Phone Number" value="87711895310"/>
		<div class="error" id="phoneFileError"></div>

		<!-- URL Field -->
		<input type="text" id="fileUrl" placeholder="File URL" />

		<!-- Button for sendFileByUrl -->
		<li onclick="sendFile()">sendFileByUrl</li>
	    </div>

	    <div class="right">
		<h2>API Response</h2>
		<div class="json-output" id="json-output">
		    <!-- JSON data will be displayed here -->
		</div>
	    </div>
	</div>
	<script src="./js/message.js"></script>
	<script src="./js/settings.js"></script>
	<script src="./js/sendFile.js"></script>
    </body>
</html>
