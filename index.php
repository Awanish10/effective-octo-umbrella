<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>xhr</title>
</head>
<body>
	<input type="file" id="fileData">

	<input type="button" id="requestDataButton" value="click">
	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

		requestDataButton = document.getElementById('requestDataButton');

		requestDataButton.addEventListener('click',requestFunctionData);
		function requestFunctionData()
		{   
			fileData = document.getElementById('fileData').files[0];
			fileName = fileData.name;
			fileSize = fileData.size;
			console.log(fileSize);
			extestionImg = fileName.split('.').pop();
			imageExtetions = new Array('jpg','png','jpeg','bmp');

			if (imageExtetions.includes(extestionImg) == true ) 
			{
				if(fileSize <2000000)
				{   form_data = new FormData();
                    form_data.append("fileData", fileData);
					console.log('good size');
					$.ajax({
                           url:'back.php',
                           type:'post',
                           data:form_data,
                           contentType: false,
                           cache: false,
                           processData: false,
                          success:function(data)
                          {
                          	console.log(data);
                          	document.getElementById('fileData').value="";
                          }
					});
				}
                else{
                	console.log('Image Size Big');
                }

			}
            else{
            	console.log('This Files Not Image');
            	return false;
            }

		}
		
	</script>
</body>

</html>

457873