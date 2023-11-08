<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}





.container {
		width: 90%;
		margin: 0 auto;
		padding: 20px;
		background-color: #fff;
		border: 1px solid #ddd;
		box-shadow: 0px 0px 10px #ddd;
	}

	.header {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin-bottom: 40px;
	}

	.logo img {
		width: 200px;
		height: 100px;
	}

	.school-info {
		flex: 1;
		margin-left: 40px;
	}

	.school-info h2 {
		margin-top: 0;
		margin-bottom: 10px;
		font-size: 28px;
		font-weight: normal;
		color: #4CAF50;
	}

	.school-info p {
		margin: 0;
		font-size: 16px;
		line-height: 1.5;
		color: #555;
	}

	.result-info {
		margin-bottom: 40px;
	}

	.result-info h3 {
		margin-top: 0;
		margin-bottom: 10px;
		font-size: 24px;
		font-weight: normal;
		color: #555;
	}

	.result-info p {
		margin: 0;
		font-size: 16px;
		line-height: 1.5;
		color: #555;
	}

	table {
		width: 100%;
		border-collapse: collapse;
		margin-bottom: 40px;
	}

	th, td {
		padding: 8px;
		text-align: left;
		border: 1px solid #ddd;
		font-size: 16px;
		color: #555;
	}

	th {
		background-color: #4CAF50;
		color: #fff;
	}

	tr:nth-child(even) {
		background-color: #f2f2f2;
	}

	tr:hover {
		background-color: #ddd;
	}

	.footer {
		font-size: 14px;
		color: #777;
		text-align: center;
	}

	hr {
		border: dashed 2px;
		width: 95%;
		color: #000000;
		margin-bottom: 50px;
	}



</style>
</head>
<body>


<table id="customers">
  <tr>
    <td><h2>
  <?php $image_path = '/upload/easyschool.png'; ?>
  <img src="{{ public_path() . $image_path }}" width="200" height="100">

    </h2></td>
    <td><h2>Eurosia School ERP</h2>
<p>School Address</p>
<p>Phone : 343434343434</p>
<p>Email : support@eurosia.com</p>
<p> <b>Student Result Report </b> </p>

    </td> 
  </tr>
  
   
</table>
 <br> <br>
 <strong>Result of : </strong> {{ $allData['0']['exam']['name'] }} 
 <br> <br>
<table id="customers">
   
  <tr>    
    <td width="50%"> <h4>Year / Session : </h4> {{ $allData['0']['year']['name'] }} </td>
    <td width="50%"> <h4> Class :  </h4>{{ $allData['0']['student_class']['name'] }} </td>
  </tr>

  
   
   
</table>
<br> <br>
  <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>

<hr style="border: dashed 2px; width: 95%; color: #000000; margin-bottom: 50px">

 
 

</body>
</html>