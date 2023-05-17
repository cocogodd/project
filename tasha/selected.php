<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pcolor{
            border-radius: 5px;
            border: 1px solid black;
            width: 80px;
            height:30px;
            color:black;
            text-align:center;
            margin: 0 10px;
        }
        .pcolor:hover, .selected{
            border-color: #F75813;
            color:#F75813;
        }
    </style>
</head>
<body>
    <div class="pcolor">Green</div>
    <div class="pcolor">Green</div>
    <div class="pcolor">Green</div>
    <div class="pcolor">Green</div>
    <script>
		var button = document.getElementsByClassName("pcolor");
	
		var addSelectClass = function(){
			removeSelectClass();
			this.classList.add('selected');	
		}

		var removeSelectClass = function(){
			for (var i =0; i < button.length; i++) {
				button[i].classList.remove('selected')
			}
		}
		
		for (var i =0; i < button.length; i++) {
			button[i].addEventListener("click",addSelectClass);
		}
</script>
</body>
</html>