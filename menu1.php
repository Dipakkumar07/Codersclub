<html>
<head>
<style>
body{font-family:vardana;}
table{font-size:14px; }
a{color:#55AAFF;text-decoration:none; }
a:hover{color:#F57E36;}
td.menu{background:#00172F;font-size: 13px; width: 20%;}
table.menu
{
font-size:100%;
position:absolute;
visibility:hidden;
}
</style>
<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible";
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden";
}
</script>
</head>

<body>

<table width="100%">
 <tr bgcolor="black">
 
  <td onmouseover="showmenu('projects')" onmouseout="hidemenu('projects')" width="20%">
   <a href="#">Projects</a><br />
   <table class="menu" id="projects" width="220">
   <tr><td class="menu"><a href="postp1.php">Post Project</a></td></tr>
   <tr><td class="menu"><a href="latestpro1.php">Latest Projects</a></td></tr>
   <tr><td class="menu"><a href="browsepro1.php">Browse Projects</a></td></tr>
   <tr><td class="menu"><a href="search_pro1.php">Search Projects</a></td></tr>
   <tr><td class="menu"><a href="#">Bid on Projects</a></td></tr>
   </table>
  </td>

  <td onmouseover="showmenu('my profile')" onmouseout="hidemenu('my profile')" width="20%">
   <a href="#">My Profile</a><br />
   <table class="menu" id="my profile" width="220">
   <tr><td class="menu"><a href="viewprofile1.php">View Profile</a></td></tr>
   <tr><td class="menu"><a href="updateprofile1.php?u=1&id=<?php echo $row_sel[0];?>">Edit Profile</a></td></tr>
   <tr><td class="menu"><a href="#">My Skills</a></td></tr>
   <tr><td class="menu"><a href="#">My Messages</a></td></tr>
   <tr><td class="menu"><a href="myproject1.php">My Projects</a></td></tr>
   </table>
  </td>
  
  <td onmouseover="showmenu('search')" onmouseout="hidemenu('search')" width="20%">
   <a href="#">Search</a><br />
   <table class="menu" id="search" width="220">
   <tr><td class="menu"><a href="search_ruser1.php">Search Users</a></td></tr>
   <tr><td class="menu"><a href="search_pro1.php">Search Projects</a></td></tr>
   <tr><td class="menu"><a href="search_tech1.php">Search Projects by Tech</a></td></tr>
   <tr><td class="menu"><a href="#">new3</a></td></tr>
   <tr><td class="menu"><a href="#">new4</a></td></tr>
   </table>
  </td>
  
  <td onmouseover="showmenu('help')" onmouseout="hidemenu('help')" width="20%">
   <a href="#">Help</a><br />
   <table class="menu" id="help" width="220">
   <tr><td class="menu"><a href="hwitwrks1.php">How CodersClub Works?</a></td></tr>
   <tr><td class="menu"><a href="#">How to post Projects?</a></td></tr>
   <tr><td class="menu"><a href="#">How to Bid on Projects?</a></td></tr>
   <tr><td class="menu"><a href="about1.php">About Us</a></td></tr>
   <tr><td class="menu"><a href="contact1.php">Contact Us</a></td></tr>
   </table>
  </td>
  
 </tr>
</table>

</body>
</html>
