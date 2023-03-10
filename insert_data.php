<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="stylesheet.css" rel="stylesheet">
        <style>
            td{
                text-align: center;
                padding: 10px;
            }

            th{
                height: 50px;
                padding: 20px;
            }

            table{
                width:80%;
                font-size:40px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                align:center;
                border: 2px solid purple;
            }
            
            th, td{
                border-bottom: 1px solid #000000;
            }

            #no_border{
                border: 0px;
            }

            #row_hover:hover {background-color: #4B0150;
            color:white;}

            .center {
                margin-left: auto;
                margin-right: auto;
            }

            body{
                background-image: url("https://img.freepik.com/premium-photo/old-parchment-paper-texture-background-vintage-wallpaper_118047-11703.jpg?w=2000");

                background-attachment:fixed;
                background-repeat: no-repeat;
                background-size:100%;
            }

            #head{
                font-size:120px;
                position: relative;
                top:125px;
                left:8%;
                text-shadow: 0 0 10px #4B0150;
            }

            #logo{
                position: relative;
                top:20px;
                left:38%;
                height:250px;
                width:450px;
                align:center;
            }

            #table_1{  
                    text-align:left;
            }

            .btn_logout{
                font-size:20px;
                position: fixed;
                top: 15px;
                right: 20px;
                display: inline-block;
            }

        </style>
    </head>
</html>

	
	<p id="head"> Hogwarts School of Witchcraft and Wizardry</p><br><br>
	<img id="logo" class="center" src="https://logolook.net/wp-content/uploads/2021/11/Hogwarts-Logo.png" height="150px" width="250px"></img>

    <br><br><br><br>
	
	<table id="table_1" style="text-align:left; font-size:50px" border="3px">
	    <tr id= "row_hover">
	        <td id="no_border">NAME - Harry Potter</td>
	        <td id="no_border">YEAR - 1</td>
	    </tr>
	    <tr id= "row_hover">
	        <td id="no_border">UID - S12020</td>
	        <td id="no_border">HOUSE - Gryffindor</td>
	    </tr>
	</table>

    <br><br><br>
	
	<table id="table_2" cellspacing="10" cellpadding="10">
	<thead>
	    <tr id= "row_hover">
	        <th>No.</th>
            <th>Subjects</th>
            <th>Marks Obtained</th>
            <th>Total</th>
	    </tr>
	</thead>
	<tbody>
	<tr id= "row_hover">
	    <td>1.</td>
	    <td>Astronomy</td>
	    <td>70</td>
	    <td>100</td>
	</tr>
	<tr id= "row_hover">
	    <td>2.</td>
	    <td>Charms</td>
	    <td>95</td>
	    <td>100</td>
	</tr>
	<tr id= "row_hover">
	    <td>3.</td>
	    <td>Defence Against the Dark Arts</td>
	    <td>85</td>
	    <td>100</td>
	</tr>
	<tr id= "row_hover">
	    <td>4.</td>
	    <td>Herbology</td>
	    <td>70</td>
	    <td>100</td>
	</tr>
	<tr id= "row_hover">
	    <td>5.</td>
	    <td>History of Magic</td>
	    <td>60</td>
	    <td>100</td>
	</tr>
	<tr id= "row_hover">
	    <td>6.</td>
	    <td>Potions</td>
	    <td>70</td>
	    <td>100</td>
	</tr>
	<tr id= "row_hover">
	    <td>7.</td>
	    <td>Transfiguration</td>
	    <td>90</td>
	    <td>100</td>
	</tr>
    <tr id= "row_hover">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr id= "row_hover">
        <td colspan="2">Percentage</td>
        <td>Marks obtained</td>
        <td>Total Marks</td>
    </tr>
	<tr id= "row_hover">
		<td colspan="2">90</td>
		<td>620</td>
		<td>700</td>
	</tbody>
	</table>

    <form method="post" action="insert_data.php">
    <button type="submit" class="btn_logout" name="btn_logout" id="btn_logout" decoration="none" style="font-size:20px;" > LOGOUT </button>
</form>
	<?php

if(isset($_POST['btn_logout']))
{
    header("location: index.php");
}
?>