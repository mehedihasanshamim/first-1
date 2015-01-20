<html>
	<head>
		<title>Auto Search By Ajax Technology</title>
	</head>

<script type="text/javascript">
	function search_fun(sitem){
		var xmlhttp;
		if(sitem==""){
			return;
		}

		if(window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
			 xmlhttp.onreadystatechange=function() {
    			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("show").innerHTML=xmlhttp.responseText;
				}
			}
					xmlhttp.open("GET","action.php?q="+sitem,true);
					xmlhttp.send();
		
		}
</script>

	<body>
		<table align="center" style="margin:200px auto;">
			<tr>
				<td style="font-size:65px;text-align:center;font-family:comic sans ms;font-weight:bold;color:#aaa;"><span style="color:firebrick;">G</span>oo<span style="color:#444;">g</span>l<span style="color:#777;">e</span></td>
			</tr>
			<tr>
				<td>

					<!-- Google CSE Search Box Begins  -->
					<!-- Use of this code assumes agreement with the Google Custom Search Terms of Service. -->
					<!-- The terms of service are available at https://www.google.com/cse/docs/tos.html -->
					<form id="cref" action="http://www.google.com/cse">
					  <input type="hidden" name="cref" value="http://www.guha.com/cref_cse.xml" />
					  <input type="text" name="q" size="40" onkeyup="search_fun(this.value)"/>
					  <input type="submit" name="sa" value="Search" />
					</form>
					<script type="text/javascript" src="'/cse'/brand'?form='cref" ></script>
					<!-- Google CSE Search Box Ends -->

				</td>
			</tr>
			<tr>
				<td><hr/></td>
			</tr>
			<tr>
				<td>
					<div id="show"></div>
				</td>
			</tr>
		</table>
	</body>

</html>