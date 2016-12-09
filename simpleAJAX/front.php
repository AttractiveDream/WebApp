
<html>
  <head>
	<link rel="stylesheet" href="./style.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script> 
	<script src="./response.js"></script>
  </head>
<body>

<input type="text" id="msg" />
<input type="button" id="execute" value="search" />
<p id="result"></p>

<script>
    $('#execute').click(function(){
		$('#result').html('');
        $.ajax({
            type: 'post',
            url: './back.php',
            dataType: 'json',
            data: {'msg':document.getElementById('msg').value},
            success: function( res ){
				var str = '<b>Result</b><br>';
				$.each(res, function(key, val) {
					str += key+' : '+val+'</br>';
				})
				$('#result').html('<p>'+str+'</p>');
        	},
            error:function () {
				$('#result').html('<p> result error </p>');
            }
        });
    })
</script>

</body>
</html>