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

          echo $srno;
          echo "<BR>";
          echo $uname;
          echo "<BR>";
          echo $iname;
          echo $address;
          ?>
          <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Editable Invoice</title>

	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>

		<div id="identity">

            <textarea id="address">M'mart
123 Vidyalankar Street
Wadala, karve link

Phone: (022) 2341-5555</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>

		</div>

		<div style="clear:both"></div>

		<div id="customer">

            <textarea id="customer-title">M'mart
Online Medicine Portal</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">April 4, 1996</textarea></td>
                </tr>


            </table>

		</div>

		<table id="items">

		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>

		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Budecort Respule</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Cipla Respules</textarea></td>
		      <td><textarea class="cost">₹100.00</textarea></td>
		      <td><textarea class="qty">6</textarea></td>
		      <td><span class="price">₹600.00</span></td>
		  </tr>



		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>

		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">₹700.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">₹700.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">₹700.00</textarea></td>
		  </tr>


	</table>

		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Items purchased online using M'mart must be returned online within 10 days of purchase.</textarea>
		</div>

	</div>

</body>

</html>
