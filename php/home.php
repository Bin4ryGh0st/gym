<!DOCTYPE html>
<html>
	<head>
		
		<title>Home</title>

		<!-- Bootstrap Files-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- My files -->
		<script src="http://localhost/gym/javascript/home.js"></script>
		<link rel="stylesheet" href="http://localhost/gym/css/home.css">

		<!-- Jquery File -->
		<script type="text/javascript" src="http://localhost/gym/javascript/jquery.js"></script>

	</head>
	<body>
		<div class="container-fluid top_bar">
			<div class="row ">
				<div class="col-md-11">
					<img src="http://localhost/gym/images/logo-magic.png" class="logo">
					<input type="button" value="Products" class="top_bar_buttons" onclick="location.href='http://localhost/gym/php/product_home.php'">
					<input type="button" value="Ask" class="top_bar_buttons" onclick="location.href='http://localhost/gym/php/ask.php'">
					<input type="button" value="Find" class="top_bar_buttons" onclick="location.href='http://localhost/gym/php/find.php'">
					<input type="button" value="Profile" class="top_bar_buttons" onclick="location.href='http://localhost/gym/php/profile.php'">
				</div>
				<div class="col-md-1" onmouseover="show_arrow_things()" onmouseout="show_arrow_things()" id="2" style="height: 500px;">
					<div class="arrow">
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row bottom">

				<!-- Left  section start-->
				<div class="col-md-3 slide_panel_1">

					<!-- Left section of icons or button start-->
					<div class="col-md-3 slide_panel_1_1">
						<div class="chat_panel">
							<img src="http://localhost/gym/images/chat.jpeg" class="chat_logo active panel_button" id="panel_button_1">
						</div>
						<div class="search_panel">
							<img src="http://localhost/gym/images/search.jpeg" class="search_logo panel_button" id="panel_button_2">
						</div>
						<div class="friend_panel">
							<img src="http://localhost/gym/images/user-image.jpg" class="user_logo panel_button" id="panel_button_3">
						</div>
						<div class="community_panel">
							<img src="http://localhost/gym/images/community.jpg" class="community_logo panel_button" id="panel_button_4">
						</div>
					</div>
					<!-- Left section of icons or button close-->


					<!-- Left section of content start-->
					<div class="col-md-9 slide_panel_1_2">
						<div class="row slidepanel_1_2_1 active2" id="panel_button_1_panel">
							<div class="col-md-12">
								<span class="all_converstaions">ALL CONVERSATIONS</span><br>
								<div class="friend_list_template"><span class="friend_name">Friends</span></div>
							</div>
						</div>

						<div class="row slidepanel_1_2_1" id="panel_button_2_panel">
							<div class="col-md-12" id="search_box_for_friends">
								<span class="all_converstaions" style="position: relative; left: 0px;">Search</span><br>
								<input type="text" class="search_box" placeholder=" What are you looking for?" autofocus><br><br><br>
								<span class="all_converstaions" style="position: relative; left: 0px;">Recent Searches</span><br>
								<div class="friend_list_template"><span class="friend_name">Friends</span></div>
							</div>
						</div>
						
						<div class="row slidepanel_1_2_1" id="panel_button_3_panel">
							<div class="col-md-12">
								<span class="all_converstaions">People</span><br>
								<div class="friend_list_template"><span class="friend_name">Friends</span></div>
							</div>
						</div>
						
						<div class="row slidepanel_1_2_1" id="panel_button_4_panel">
							<div class="col-md-12">
								<span class="all_converstaions">Communities</span><br>
								<div class="friend_list_template"><span class="friend_name">Friends</span></div>
							</div>
						</div>
					</div>
					<!-- Left section of content close-->	
				</div>
				<!-- Left section close-->


				<!-- Blog section start-->
				<div class="col-md-7 slide_panel_2" onmouseover="showscrollbar()">
					<div class=template><span class="blog_text">Blogs</span></div>
				</div>
				<!-- Blog section close-->
				

				<!-- Add section start-->
				<div class="col-md-2" >
					<span style="">bathla</span>
					<div class="arrow_things" onmouseover="show_arrow_things()" onmouseout="show_arrow_things()" id="1">
						<input type="button" class="settings" value="Settings" onclick="location.href='http://localhost/gym/php/settings.php'"><br>
						<input type="button" class="logout" value="Logout" onclick="location.href='http://localhost/gym/php/logout.php'">
					</div>
				</div>
				<!-- Add section close-->


			</div>
		</div>
		<script>
			$(function(){
				$("#1").hide();
			});
		</script>
	</body>
</html>
