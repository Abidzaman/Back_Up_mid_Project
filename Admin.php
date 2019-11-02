<?php 

session_start();


 ?>
 <html>
<head>
<title>ADMIN</title>
</head>
<body>
<br>
<font size="2" face="Arial Black" >
<table cellspacing="20">
<tr>
<td> <img src="starmax.jpg" align = "left" width="200px" height="100px" /> </td>

<td><a href= "Ticket.php"/><input type=button value='TICKET PRICE'></a></td>
<td><a href= "Ticket.php"/><input type=button value='TICKET SELL'></a></td>
<td><a href= "Showtime.php"/><input type=button value='SHOWTIME'></a></td>
<td></td>
<td></td>
<td><h1>WELCOME  <?php echo $_SESSION['uname']; ?></h1></td>
</tr>
</table>
<br>

<table width=100% bgcolor="#000000" align="center" border="0">
        <tr>
			<td><a href= ""/><input type=button value='ADD EMPLOYEE'></a></td>
			<td><a href= ""/><input type=button value='DELETE EMPLOYEE'></a></td>
			<td><a href= ""/><input type=button value='DELETE COUSTOMER'></a></td>
			<td><a href= ""/><input type=button value='TOTAL SELL'></a></td>
			<td><a href= "Login.php"/><input type=button value='LOG OUT'></a></td>
			<hr>
        </tr>
    </table>
	<h1>Movie List</h1>
	<table cellspacing="30">
	<tr>
	<td>
	<ul>
    <li>MAlificiant 2</li><br><br><br>
    <img src="0.png" align = "left" width="300px" height="300px" />
    </ul>
	</td>
	<td>
	<ul>
    <li>Sonic</li><br><br><br>
    <img src="1.png" align = "left" width="300px" height="300px" />
    </ul>
	</td>
	<td>
	<ul>
    <li>Rabid</li><br><br><br>
    <img src="ii.png" align = "left" width="300px" height="300px" />
    </ul>
	</td>
	</tr>
	<tr>
	<td>
	<ul>
    <li>THe Game shapludu</li><br><br><br>
    <img src="5.png" align = "left" width="300px" height="300px" />
    </ul>
	</td>
	<td>
	<ul>
    <li>Genimi man</li><br><br><br>
    <img src="4.png" align = "left" width="300px" height="300px" />
    </ul>
	</td>
	<td>
	<ul>
    <li>Terminator</li><br><br><br>
    <img src="00.png" align = "left" width="300px" height="300px" />
    </ul>
	</td>
	</tr>
	</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
<div align ="center">
<p align="Center">Show Motion Limited 2015 © All Rights Reserved. | Develop by ABID Limited</p>
</body>
</html>








