<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>

<title style="text-align:center">HEARTCHECK </title>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>

<div class="container">
	<h2 style="text-align:center">HEARTCHECK </h2>	
		
		<br>
		<br>
		<div class="collapse navbar-collapse" id="navbar1">
			<table class="center">
				<tr>
					<td>
			<ul class="nav navbar-nav navbar-left" style="font-size:30px">
				<?php if (isset($_SESSION['user_id'])) { ?>
				<li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<li><a href="https://heartcheck1.herokuapp.com/"> Click to redict for HeartCheck</li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
				        </td>
					<td <td rowspan = 4 colspan = 4><img src="giphy.gif" alt="" ></img>
						
				        </td>
			</ul>
			<ul>
		        </ul>
				
			</table>
		</div>
		
		
		
	
</div>	
<?php include('footer.php');?> 
