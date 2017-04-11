          <?php
          session_start(); // Starting Session


        $srno= $_SESSION['srno'];



        $dbname = 'm-mart';
        $user = 'root';
        $pass = '';
        $conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to Connect: ".mysql_error());

        $query = "select * from order_details where sr_no=$srno";
        mysql_select_db($dbname);
        $retval = mysql_query($query, $conn) or die("Unable to Retrieve data: ".mysql_error());
        	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
        		$uname=$row['username'];
            $iname=$row['itemname'];
            $address=$row['address'];

          }

  /*        echo $srno;
          echo "<BR>";
          echo $uname;
          echo "<BR>";
          echo $iname;
          echo $address;*/
          ?>
          <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
    	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    	<title>Editable Invoice</title>

    	<link rel='stylesheet' type='text/css' href='css/style.css' />
    	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />

    </head>

    <body>
		
    	<div id="page-wrap">

    		<text id="header"><center>INVOICE</center></text>

    		<div id="identity">
    							<img src="C:\Users\Lenovo\Desktop\EditableInvoice\images\logo.png" alt="logo" style="width:200px;height:160px;">
                <text id="address">M'mart<br>
    							123 Vidyalankar Street<br>
    							Wadala, karve link<br>
    							Phone: (022) 2341-5555</text>
                
    	</div>

    		<div style="clear:both"></div>

    		<div id="customer">

                <text id="customer-title">M'mart<br>
    							Online Medicine Portal</text>

                <table id="meta">
                    <tr>
                        <td class="meta-head">Invoice #</td>
                        <td><text>000123</text></td>
                    </tr>
                    <tr>

                        <td class="meta-head">Date</td>
                        <td><text id="date">April 4, 2017</text></td>
                    </tr>


                </table>

    		</div>

    		<table id="items">

    		  <tr>
    		      <th>Item</th>

    		      <th>Unit Cost</th>
    		      <th>Quantity</th>
    		      <th>Price</th>
    		  </tr>

    		  <tr class="item-row">
    		      <td class="item-name"><div class="delete-wpr"><text><?php echo $iname;?></text></div></td>

    		      <td><text class="cost">₹123.00</text></td>
    		      <td><text class="qty">1</text></td>
    		      <td><span class="price">₹123.00</span></td>
    		  </tr>



    		 	  <tr>
    		      <td colspan="2" class="blank"> </td>
    		      <td colspan="2" class="total-line">Subtotal</td>
    		      <td class="total-value"><div id="subtotal">₹123.00</div></td>
    		  </tr>
    		  <tr>

    		      <td colspan="2" class="blank"> </td>
    		      <td colspan="2" class="total-line">Total</td>
    		      <td class="total-value"><div id="total">₹123.00</div></td>
    		  </tr>
    		  <tr>
    		      <td colspan="2" class="blank"> </td>
    		      <td colspan="2" class="total-line">Amount Paid</td>

    		      <td class="total-value"><text id="paid">₹123.00</text></td>
    		  </tr>


    	</table>

    		<div id="terms">
    		  <h5>Terms</h5>
    		  <text>Items purchased online using M'mart must be returned online within 10 days of purchase.</text>
    		</div>
        <button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>

    	</div>

	
    <form method="get" action="admin.php">
		<button type="submit">Done</button>
	</form>
    </body>

    </html>
