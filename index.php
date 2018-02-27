<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exchange Calculator</title>

  	<link rel="stylesheet" href="dist/css/bootstrap-select.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="dist/js/bootstrap-select.js"></script>
  	<script src="js/bootstrap.min.js"></script>


  	<link rel="stylesheet" type="text/css" href="dist/css/dropdown.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	
		
		
		</div>
		<div class="container">
			<form class="cov-frm" name="frm" action="calculateResult.php" method="post" onsubmit="return myFunction()" >
				<h1>Exchange rate</h1>
				<label>จำนวนเงินไทย</label><br>
				<input id="innumb" class="form-control" type="number" name="thb" required><br>
				<p class="text-danger" id="demo"></p>
				<label>สกุลเงินที่ต้องการคำนวณ</label><br>
				<select class="selectpicker myselect form-control" id="country" name="changeto">
					<option value="usd" data-icon="usd">ดอลล่าสหรัฐ USD</option>
					<option value="jyp" data-icon="jyp">ญี่ปุ่น JYP</option>
					<option value="krw" data-icon="krw">เกาหลีใต้ KRW</option>
					<option value="gbp" data-icon="gbp">สหราชอาณาจักร GBP</option>
					<option value="eur" data-icon="eur">ยูโรโซน EUR</option>
				</select>
				<br><br><br>
				<button class="btn btn-primary btn-lg btn-block" type="submit">Calculate</button>
			</form>
			
		</div>

</body>
</html>

<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });

	function myFunction() {
	    var x, text;

	    
	    x = document.forms["frm"]["thb"].value;

	   
	    if (x <= 0) {
	        text = "***กรุณาใส่ค่าตัวเลขที่มากกว่า 0";     
	        document.getElementById("demo").innerHTML = text;
	        return false;
	    }    
	}
</script>



























