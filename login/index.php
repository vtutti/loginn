<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>
<style>
.button5 {
  background-color:#FFB6C1; 
  border-color: black;
  border-radius: 5px;  
  color: black; 
  font-family: Bahnschrift Light;
  font-size: 18px;

}

.button5:hover {
  background-color: #FFBCD9;
  color: white;
}

  
  a.black
  {
    color: black;
}</style>
<div class="hero-body">
      <div class="container">
        <center>
		</br>
	      </br>
          <img src="logo-text.png" alt="HeartCheck"  width="1190vh" height="190vh">
	      </center>
      </div>
    </div>
<button class="button button5"  style="float: left;"> <a href="logout.php" class="black">Log out</a></button>
<title style="text-align:center"> </title>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>

<div class="container">
	<h2 style="text-align:center"> </h2>	
		
		<br>
		<br>
		<div class="collapse navbar-collapse" id="navbar1">
			<table class="center">
				<tr>
					<td>
			<ul class="nav navbar-nav navbar-left" style="font-size:30px">
				<?php if (isset($_SESSION['user_id'])) { ?>
				<li><p class="navbar-text"><strong>Welcome!  <?php echo $_SESSION['user_name']; ?></strong></p></li>
				
				<li><a href="https://heartcheck1.herokuapp.com/"> Click to redirect for HeartCheck</li>
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
