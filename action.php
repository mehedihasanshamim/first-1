@@ -0,0 +1,26 @@
<?php
	mysql_connect("localhost","root","") or die("The server is not connected");
	mysql_select_db("online_admission") or die("The Database is not found");
	$q=$_GET['q'];
	$q2=mysql_query("SELECT * from applicare first_name like '%$q%'");
	
if(mysql_num_rows($q2)<=0){
	 	echo "No result Found";
	 	return;
	 	}

	$i=0;
	while($rows=mysql_fetch_array($q2)){
		$i++;
		$data=$rows['first_name'];
		echo $i." "."<a href='http://www.google.com/cse?cref=http%3A%2F%2Fwww.guha.com%2Fcref_cse.xml&q=$data&sa=Search#gsc.tab=0&gsc.q=$data&gsc.page=1'>".$rows['first_name']."</a>"."<br/>";
	
		
// this is first github editing.this is awesome to me and i think that this is also wonderful for all


	}

	echo "<br/><br/>Total Result :".$i;


?>
