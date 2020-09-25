<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Patym Payment Gateway Integration in PHP</title>
<style>
.bdy{
    background-color:rgb(117, 231, 197);
}
</style>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body class="bdy">
<div class="container" style="padding-top:100px;">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div style="background-color: #000000; color:#fff" class="panel-heading">
                <h3 class="text-center">Paytm Payment Gateway Demo</h3>
            </div>
            <div class="panel-body">
            <form action="pgRedirect.php" method="post">
		<input type="hidden" id="CUST_ID" name="CUST_ID" value="CUST001">
		<input type="hidden" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="Retail">
		<input type="hidden"  id="CHANNEL_ID" name="CHANNEL_ID" value="WEB">
                <div class="form-group">
		
		
                    <input type="hidden" class="form-control" id="ORDER_ID" name="ORDER_ID" size="20" maxlength="20" autocomplete="off" 
 
tabindex="1" value="<?php echo  "ORDER" . rand(10000,99999999)?>">
                </div>
               
				<div class="form-group">
		<label>Name:</label>
                    <input type="text" class="form-control" id="Cust_Name" name="Cust_Name" autocomplete="off" tabindex="5" 
 
placeholder="Enter your name">
                </div>
				<div class="form-group">
				<label>Mobile Number:</label>
                    <input type="text" class="form-control" id="Cust_No" name="Cust_No" autocomplete="off" tabindex="5" 
 
placeholder="Enter your mobile number">
                </div>

                <div class="form-group">
		<label>Amount to Pay:</label>
                    <input type="text" class="form-control" id="TXN_AMOUNT" name="TXN_AMOUNT" autocomplete="off" tabindex="5" placeholder="Enter the amount to donate">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Donate" class="btn btn-success btn-lg" style="background-
 
color:#0000FF; margin-left: 37%;">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
