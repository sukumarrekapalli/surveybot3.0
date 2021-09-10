<!DOCTYPE html>
<html>
<head>
<?php
  include 'config.php';  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
// Here append the common URL characters. 
$link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
 $ab = $link;
// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI'];
 
$a = $_SERVER['REQUEST_URI'];
 ?>
	<meta charset="UTF-8">
	   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	   
	<link rel="shortcut icon" type="image/ico" href="./kaiwa.ico" />
	    <title>Kaiwa</title>
	   
	<link type="text/css" rel="stylesheet" href="./node_modules/conversational-form/dist/conversational-form.min.css" />
	<script type="text/javascript" id="conversational-form-development" src="./node_modules/conversational-form/dist/conversational-form.min.js" crossorigin></script>
	<style>
		:root {
			--anim-easeOutBack: cubic-bezier(0.175, 0.885, 0.32, 1.275);
			--cf-anim-time: 0.75s;
			--cf-breakpoint-1: 769px;
			--cf-color-green: #1ed97b;
			--cf-font-weight-bold: 400;
			--cf-color-black: #222222;
			--cf-color-black-alpha04: rgba(34, 34, 34, 0.4);
			--cf-color-black-alpha02: rgba(34, 34, 34, 0.2);
			--cf-color-grey: #ebebeb;
			--cf-color-white: white;
		}

		.dark-theme .conversational-form {
			font-family: Helvetica Neue, Helvetica;
			font-style: normal;
		}

		.dark-theme .conversational-form cf-chat scrollable::-webkit-scrollbar {
			width: 0px;
		}

		.dark-theme .conversational-form cf-chat-response {
			padding-top: 0px;
			min-width: 200px;
		}

		@media (min-width: var(--cf-breakpoint-1)) {
			.dark-theme .conversational-form cf-chat-response {
				max-width: 83%;
			}
		}

		.dark-theme .conversational-form cf-chat-response text {
			font-weight: var(--cf-font-weight-bold);
			min-height: 42px;
			font-size: 13px;
		}

		.dark-theme .conversational-form cf-chat-response thumb {
			height: 42px;
			width: 42px;
		}

		.dark-theme .conversational-form cf-chat-response thumb>p {
			background-color: #339fd9;
		}

		.dark-theme .conversational-form cf-chat-response:not(:last-of-type) {
			margin-bottom: 10px;
		}

		.dark-theme .conversational-form cf-chat-response.robot {
			padding-left: 48px;
		}

		.dark-theme .conversational-form cf-chat-response.robot text {
			color: #ffffff;
		}

		.dark-theme .conversational-form cf-chat-response.robot text>p {
			border-radius: 4px 20px 20px 20px;
			background: #339fd9;
		}

		.dark-theme .conversational-form cf-chat-response.robot text>p:not(:only-child):first-child {
			border-radius: 20px 20px 20px 4px;
		}

		.dark-theme .conversational-form cf-chat-response.robot text>p:not(:only-child):last-child {
			border-radius: 4px 20px 20px 20px;
		}

		.dark-theme .conversational-form cf-chat-response.robot thumb {
			background-color: white;
			background-size: 40px 40px;
			background-repeat: no-repeat;
		}

		.dark-theme .conversational-form cf-chat-response.user {
			padding-right: 48px;
		}

		.dark-theme .conversational-form cf-chat-response.user text {
			color: var(--cf-color-white);
		}

		.dark-theme .conversational-form cf-chat-response.user text>p {
			background: #729ab7;
			border-radius: 20px 4px 20px 20px;
		}

		.dark-theme .conversational-form cf-chat-response.user thumb {
			background-color: #ffffff00;
			background-size: 32px 32px;
			background-repeat: no-repeat;
			/*background-position: 11px 12px;*/
		}

		.dark-theme .conversational-form cf-input input,
		.dark-theme .conversational-form cf-input textarea {
			border-radius: 40px;
			min-height: 57px;
			font-size: 14px;
			padding: 19px 60px 19px 30px;
			height: 56px;
			color: var(--cf-color-black);
			font-weight: var(--cf-font-weight-bold);
		}

		@media (min-width: var(--cf-breakpoint-1)) {

			.dark-theme .conversational-form cf-input input,
			.dark-theme .conversational-form cf-input textarea {
				font-size: 16px;
			}
		}

		.dark-theme .conversational-form cf-input input:not(:focus),
		.dark-theme .conversational-form cf-input textarea:not(:focus) {
			box-shadow: 0 0 1px rgba(58, 58, 58, 0.5);
		}

		.dark-theme .conversational-form cf-input-button {
			background: #339fd9;
			height: 60px;
			width: 42px;
			border: none;
		}

		.dark-theme .conversational-form cf-input-button.microphone-interface {
			background: #339fd9;
		}

		.dark-theme .conversational-form cf-input-button .cf-icon-progress {
			background-image: url("data:image/svg+xml;charset=utf-8;base64,PHN2ZyB3aWR0aD0iMThweCIgaGVpZ2h0PSIxOXB4IiB2aWV3Qm94PSIwIDAgMTggMTkiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTM3Mi4wMDAwMDAsIC05NDUuMDAwMDAwKSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjIiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3NTEuMDAwMDAwLCA5MjcuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2MjIuMDAwMDAwLCAxOS4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNOC4xNDAzNTA4OCwyLjEwOTE4MTE0IEw4LjE0MDM1MDg4LDE2LjA4MDkzODUiIGlkPSJMaW5lIiBzdHJva2UtbGluZWNhcD0ic3F1YXJlIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPHBvbHlsaW5lIGlkPSJSZWN0YW5nbGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcuOTkzODAzLCA4LjA2ODc0NSkgcm90YXRlKC0zMTUuMDAwMDAwKSB0cmFuc2xhdGUoLTcuOTkzODAzLCAtOC4wNjg3NDUpICIgcG9pbnRzPSIyLjYyNTkxMzI4IDEzLjQ4Njk1OCAyLjYyNTkxMzI4IDIuNjUwNTMxMjEgMi42MjU5MTMyOCAyLjY1MDUzMTIxIDEzLjM2MTY5MjEgMi42NTA1MzEyMSI+PC9wb2x5bGluZT4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+");
			background-size: 18px 19px;
		}

		.dark-theme .conversational-form cf-input-button.loading:after {
			cf-border: x solid var(--cf-color-green);
		}

		.dark-theme .conversational-form cf-input-button .cf-icon-audio {
			background-image: url("data:image/png;charset=utf-8;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAYAAAGpAGuzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAtlJREFUeNpiUFJSYgDh////M7AwQMB/ZWVlBiYGJADiqACx/N27dxlByu7AZAACiAFqwCeQATA9vDA9KAb8BzGARv8HcRhBHJBpAAHECDIAZjGMAZJA0Y9u1mcg5kEWhJnLC5UEgf1QehFOOwACCFniKBBPBwouQXb8NiC2AuLFyJaDgCc2V+F0Lk4JkGsuYvMHCBhA6QNAQT8QgwUacCBd94DYAYRhUcKAJMkFFPyObDnM199g9gAEELLPMYIGCpYDTYnC5Y1/WHwUic/fjAwEABMDiYBkDaBg2gXErkCcCQom5BCBJQtYLCCH0h8gZgbiJ0Asi6YBFEvnoWxtFiSbQOA2lmAFgQBg0G7EFg/YFIOTKowNEEDYIi4GiKcB8WUgtgYqxvA0MliGFFFWUBsZ8QVrJLp1wNDZRmo8eJCqgZG+SWMQamBBSg64Ms9FYFzwQIu8L0zYkjIasIQmFxA4hqzBD1rEH0ASk4cWI9Oh/GxQ4tMCMq5CBQyB+AKaDY+BWAaI/wI1s4BsuAYqgqGS56F+2gd13n+oYlASZ0EOpXhQJkEy1RFU1UDZd5DzA3Ly3ggNKU6kfM2Inh+YsJR6yIXAf1jmJzviAAIMWxZFBvxAPAeIQ3DIrwHiFKCzP5JjgSe01iIGeAEt2U6qBa+BWIRIC94ALRAlNTOIkBDUIlTLbTTPzqMW0NWCrySY8xVfEXwLiFWRxDSB+AYQdwJxE5EWdEKrTQ0gdR1J/DbIBzPQFM+F0s1AbAvEH/AYDJKzBWayZjS9MDADlpPXAXEgksRbIDYB4gdIYupArAtlg5oSN6EFM8jlCkDmGSAWRlK/HigXhFxUFANxD5oLfkPbJlOhrSFkAArWbCDOAmJWNLkSoOG92MoiUAHfAcRlZCaaLiCuABr+n5jCjhVaXYYCsTMQs6HJ/wLivUC8GoiXAA39TU59gK/9B+snkV3h/CclbJArVrrmZAB+mc1ty+WBKAAAAABJRU5ErkJggg==");
			background-size: 12px 19px;
			mix-blend-mode: difference;
		}

		.dark-theme .conversational-form cf-input-button cf-icon-audio-eq {
			border-color: var(--cf-color-black);
		}

		.dark-theme .conversational-form .cf-button {
			color: var(--cf-color-black);
			border-color: #dddddd;
			transition: opacity var(--cf-anim-time) var(--anim-easeOut),
				border-color var(--cf-anim-time) var(--anim-easeOut),
				color var(--cf-anim-time) var(--anim-easeOut);
			background: none !important;
			font-weight: var(--cf-font-weight-bold);
			line-height: 1.2;
		}

		.dark-theme .conversational-form .cf-button>div {
			padding: 8px 10px;
		}

		.dark-theme .conversational-form .cf-button cf-radio {
			background: var(--cf-color-black-alpha02);
		}

		.dark-theme .conversational-form .cf-button.highlight,
		.dark-theme .conversational-form .cf-button:focus,
		.dark-theme .conversational-form .cf-button:hover,
		.dark-theme .conversational-form .cf-button[checked="checked"],
		.dark-theme .conversational-form .cf-button.selected {
			border-color: #339fd9;
			color: var(--cf-color-black);
		}

		.dark-theme .conversational-form .cf-button.highlight cf-radio,
		.dark-theme .conversational-form .cf-button.highlight cf-radio,
		.dark-theme .conversational-form .cf-button.highlight cf-radio,
		.dark-theme .conversational-form .cf-button:focus cf-radio,
		.dark-theme .conversational-form .cf-button:focus cf-radio,
		.dark-theme .conversational-form .cf-button:focus cf-radio,
		.dark-theme .conversational-form .cf-button:hover cf-radio,
		.dark-theme .conversational-form .cf-button:hover cf-radio,
		.dark-theme .conversational-form .cf-button[checked="checked"] cf-radio,
		.dark-theme .conversational-form .cf-button[checked="checked"] cf-radio,
		.dark-theme .conversational-form .cf-button[checked="checked"] cf-radio,
		.dark-theme .conversational-form .cf-button.selected cf-radio,
		.dark-theme .conversational-form .cf-button.selected cf-radio,
		.dark-theme .conversational-form .cf-button.selected cf-radio {
			background: #339fd9;
		}

		.dark-theme .conversational-form cf-list-button:after {
			background-image: none;
			background: black;
			width: 5px;
			height: 5px;
			border-radius: 50%;
		}

		#cf-context {
			width: 100vw;
			height: 100vh;
		}

		#cf-label {
			height: 10px;
		}

		#form {
			height: 0px;
			overflow: hidden;
		}

		@media only screen and (max-width:600px) {
			.dark-theme .conversational-form .cf-button>div {
				padding: 3px 2px;
			}
		}

	</style>

<script>  
   
		window.onload = function() {
		var conversationalForm = window.cf.ConversationalForm.startTheConversation({
  formEl: document.getElementById("form"),
  context: document.getElementById("cf-context123"),
  	userInterfaceOptions: {
					controlElementsInAnimationDelay: 250,
					robot: {
						robotResponseTime: 0,
						chainedResponseTime: 1200
					},
					user: {
						showThinking: false,
						showThumb: false
					}
				},
  userImage: "./user.png",
  robotImage:
    "./kaiwa3.0.png",
//   submitCallback: function() {
//     alert(
//       "Custom submit callback reached, removing Conversational Form, see markup of this file"
//     );
//   }
});
};

		
    var conversationalForm = window.cf.ConversationalForm.startTheConversation({
  formEl: document.getElementById("form"),
  context: document.getElementById("cf-context"),
  userImage: "./Bot.svg",
  robotImage:
    "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFNTE3OEEyRTk5QTAxMUUyOUExNUJDMTA0NkE4OTA0RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFNTE3OEEyRjk5QTAxMUUyOUExNUJDMTA0NkE4OTA0RCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkU1MTc4QTJDOTlBMDExRTI5QTE1QkMxMDQ2QTg5MDREIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkU1MTc4QTJEOTlBMDExRTI5QTE1QkMxMDQ2QTg5MDREIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+FYrpWAAABrNJREFUeNrkW2ls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",
  submitCallback: function() {
    alert(
      "Custom submit callback reached, removing Conversational Form, see markup of this file"
    );
  }
});
</script>
</head>
<body style="overflow-y: hidden" >
<?php
   
$survey = explode("/",$link);
    $surveycode = end($survey);

    $abc="select * from survey_table where survey_link = '".$surveycode."' limit 1";

$result = mysqli_query($dbconnect,$abc);


$num=mysqli_num_rows($result);

if($num==1){
    
   echo $surveycode;


?>

<form id="form" class="form-group" method="post" action="./kaiwa.php" cf-form ...>
<?php
$surveycode = "abc";
$query ="select Project_id from survey_table where Survey_link = '".$surveycode."'";


$project_query = mysqli_query($dbconnect,$query);
$row = $project_query->fetch_array();
$project_id= $row[0];


$query2 ="SELECT question_list FROM projects_table WHERE id = '".$project_id."' ";

$question_query = mysqli_query($dbconnect,$query2);
$row2 = $question_query->fetch_array();

$question_list= $row2[0];



$questions_arr = explode(",",$question_list);
$n = count($questions_arr);
for($i=0;$i<$n;$i++){


	$query3= "select Questions from questions_table where id = '".$questions_arr[$i]."'";
	$questionsresult = mysqli_query($dbconnect,$query3);
	$qarray = $questionsresult->fetch_array();
	$final_question = $qarray[0];

   echo $final_question;


}
?>
  <cf-robot-message cf-questions="Hi! I am Kaiwa"></cf-robot-message>
<button type="submit"  value="Submit">Submit</button>
</form>
<?php



}
    ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</body>
</html>