<!-- <?php header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // don't cache ?> -->
<!DOCTYPE html id="page-order">
<html lang="en">
<head>
	<title>50 Shades of They | Pre-Order</title>
	
	<!-- First Party CSS -->
	<link href="/css/screen.less?<?= strtotime("now") ?>" rel="stylesheet/less" type="text/css" media="screen" />
	
	<!-- Third Party CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	
	<!-- Third Party JS -->
	<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.5.0/less.min.js"></script>
  	<script>document.createElement( "picture" );</script>	
	<script src="//cdnjs.cloudflare.com/ajax/libs/picturefill/2.1.0/picturefill.min.js" async></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			var ticket_amount = 18.00;
			$("#qty").change(function (){
		      total = $("#qty").val() * ticket_amount;
		      tax = 0.00;
		      grand_total = total+tax;

		      $("#total").html("$" + parseFloat(total).toFixed(2));
		      $("#tax").html("$" + parseFloat(tax).toFixed(2));
		      $("#grand_total").html("$" + parseFloat(grand_total).toFixed(2));
		    });
		});
	</script>
	
	<style type="text/css">
		#order-form .title {
			font-family: "Oswald";
			margin: 0;
			padding: 3.125em 0 3.125em 0;
			text-align: center;
			color: #FFF;
			background: #4EBAA2;
		}
		#order-form .form-container {
			width: 50%;
			margin: 0 auto;
			padding: 4em 0;
		}
		#contribution fieldset {
			margin-bottom: 16px;
		}
		#contribution input[type="text"] {
			height: 50px;
			width: 100%;
			margin-bottom: 20px;
			padding: 0 10px;
			background: #f5f5f5;
			border: 2px solid #c3c3c3;
			outline: none;
			color: #000;
			box-shadow: none;
			-webkit-appearance: none;
			font-size: 1.2em;
			border-radius: 2px;
		}
		#contribution select {
			height: 50px;
			width: 100%;
			margin-bottom: 20px;
			padding: 0 10px;
			background: #f5f5f5;
			border: 2px solid #c3c3c3;
			outline: none;
			color: #A9A9A9;
			box-shadow: none;
			font-size: 1.2em;
			border-radius: 2px;
		}
		#contribution input[type="radio"] {
			display: inline-block;
			vertical-align: middle;
			margin-right: 1em;
		}
		#payment-information .control-group:nth-child(4) { 
			margin-bottom: 15px;
		}
		#contribution .cc_type_cd_label {
			display: inline-block;
			vertical-align: middle;
			font-size: 1.2em;
			font-weight: 400;
		}
		#qty { width: 50% !important; height: 30px !important; }

		#processbutton {
			font-size: 1.3em !important;
			height: 46px;
			line-height: 48px;
			padding: 0 20px;
			display: inline-block;
			height: 34px;
			padding: 0 12px;
			margin: 10px 0 10px 0;
			color: #fff !important;
			font-size: 0.9em !important;
			line-height: 36px;
			text-align: center;
			text-transform: uppercase;
			letter-spacing: 1px;
			background-color: #9b9a99;
			border: none;
			outline: none;
			border-radius: 2px;
			cursor: pointer;
			text-decoration: none;
			box-shadow: 0 2px 0 #82817f;
			-webkit-font-smoothing: antialiased;
			box-sizing: border-box;
			width: 100%;
			-webkit-appearance: none;
		}
	</style>
</head>
<body>
	<header id="page-header">
		<nav class="site-navigation">
			<ul class="nav-items">
				<!-- <li class="nav-item">Home</li>
				<li class="nav-item">About Ed Young</li> -->
				<li class="nav-item">Pre-order Your Copy <span>Now</span></li>
			</ul>
		</nav>
	</header>
		
	<?php if (!$_POST): ?>

	<?php 
		$_SESSION['csrf_token'] = md5(uniqid(rand(), TRUE));
	?>
	
	<section id="order-form">
		<h1 class="title">Pre-Order</h1>
		
		<div class="form-container">
			<form name="contribution" action="" method="post" id="contribution" data-ajax="false" class="form-horizontal validate">
				<input type="hidden" value="<?php echo $_SESSION['csrf_token'] ?>" name="csrf_token" />
				<fieldset>
				<legend>Personal Information</legend>

				<!-- Text input-->
				<div class="control-group">
					<div class="controls">
						<input id="firstname" name="firstname" type="text" placeholder="First Name" class="input-large" required="">
					</div>
				</div>

				<!-- Text input-->
				<div class="control-group">
					<div class="controls">
						<input id="lastname" name="lastname" type="text" placeholder="Last Name" class="input-large" required="">
					</div>
				</div>

				<!-- Text input-->
				<div class="control-group">
					<div class="controls">
						<input id="address" name="address" type="text" placeholder="Address" class="input-large" required="">
					</div>
				</div>

				<!-- Text input-->
				<div class="control-group">
					<div class="controls">
						<input id="address2" name="address2" type="text" placeholder="Address 2" class="input-large">
					</div>
				</div>

				<!-- Text input-->
				<div class="control-group">
					<div class="controls">
						<input id="address" name="address" type="text" placeholder="City" class="input-large" required="">

					</div>
				</div>

				<!-- Select Basic -->
				<div class="control-group">
					<div class="controls">
						<select id="state" name="state" class="input-large">
							<option value="" selected="selected">State</option><option value="AK">AK</option><option value="AL">AL</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DC">DC</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option><option value="--">---</option><option value="AP">AP</option><option value="AS">AS</option><option value="FM">FM</option><option value="GU">GU</option><option value="MH">MH</option><option value="MP">MP</option><option value="PR">PR</option><option value="PW">PW</option><option value="VI">VI</option>
						</select>
					</div>
				</div>

				<!-- Text input-->
				<div class="control-group">
					<div class="controls">
						<input id="zip" name="zip" type="text" placeholder="Zip" class="input-large" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="control-group">
					<div class="controls">
						<input id="email" name="email" type="text" placeholder="Email" class="input-large" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="control-group">
					<div class="controls">
						<input id="phone" name="phone" type="text" placeholder="Phone" class="input-large" required="">

					</div>
				</div>

				</fieldset>
			
				<fieldset id="payment-information">	
					<legend>Payment Information</legend>
					
					<div class="control-group">
						<input class="cc_type_cd" id="cc_ax" name="cc_type_cd" value="ax" type="radio">
						<label for="cc_ax" class="cc_type_cd_label" id="cc_label_ax"> <span class="radio">American Express</span></label>
					</div>
					<div class="control-group">
						<input class="cc_type_cd" id="cc_mc" name="cc_type_cd" value="mc" type="radio">
						<label for="cc_mc" class="cc_type_cd_label" id="cc_label_mc"> <span class="radio">MasterCard</span></label>
					</div>
					<div class="control-group">
						<input class="cc_type_cd" id="cc_vs" name="cc_type_cd" value="vs" type="radio" checked>
						<label for="cc_vs" class="cc_type_cd_label" id="cc_label_vs"> <span class="radio">Visa</span></label>
					</div>
					
					<div class="control-group">
						<input id="cc_number" autocomplete="off" name="cc_number" type="text" class="required" placeholder="Card Number">
					</div>

					<!--<span class="fieldlabel"><em>* </em>Expiration</span>-->
					<select id="cc_expir_month" autocomplete="off" name="cc_expir_month" class="required">
						<option value="">Month</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
			
					<select id="cc_expir_year" autocomplete="off" name="cc_expir_year" class="required">
						<option value="">Year</option>
						<?php for($i=date("Y"); $i<=date("Y")+20; $i++): ?>
						<option value="<?=$i?>"><?=$i?></option>
						<? endfor; ?>
					</select>
			
					<!--<p class="fieldlabel"><em>* </em>Required Fields</p>-->
				</fieldset>

				<fieldset>
					<legend>Order Information</legend>
					<table width="100%" style="font-size: 1.2em;">
						<thead>
							<tr>
								<th align="left">Item</th>
								<th><label for="qty" class="fieldlabel">Quantity</span></th>
								<th>Price</th>
								<th align="right">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td id="item-label">50 Shades of They</td>
								<td align="center">
									<dl>
										<dd>
											<select id="qty" autocomplete="off" name="qty" class="required">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
											<!-- <input type="text" class="required qty" name="qty" id="qty" value="1" /> -->
										</dd>
									</dl>
								</td>
								<td align="center" id="price">$18.00</td>
								<td align="right" id="total">$18.00</td>
							</tr>
						</tbody>
						<tfoot>
							<!-- <tr>
							<td colspan="2"></td>
							<th align="right">Tax:</th>
							<td id="tax" align="right">$1.22</td>
							</tr> -->
							<tr>
								<td colspan="2"></td>
								<th align="right">Grand Total:</th>
								<td id="grand_total" align="right">$18.00</td>
							</tr>
						</tfoot>
					</table>
				</fieldset>

				<input id="processbutton" value="Process Order" type="submit" >
				<input id="processbutton" value="Reset" type="reset">
			</form>
		</div>
	</section>
		
	    <?php else: ?>
	      <?php if ($_POST['csrf_token'] == $_SESSION['csrf_token']): ?>
	      <?php

	        // Before using this example, replace the generic values with your merchant ID and password.
	        define( 'MERCHANT_ID', 'fellowship' );
	        define( 'TRANSACTION_KEY', 'dGO2Zicmq868pz0GWeDVQMMBBYWFxYOvjEVY/N78cHfta3zvOFmVMiBfDYSqSLhRhMh+y2M1JLx7lgRlHNRbdlkY4asHkUVHMQ5lsGHzZNefjiODdYur9ZbzZ0x1vKdoziA7oPlY2rbe1nZW77hioT1crDkCBMT6CWlCAij6T72rDRsbmeO/s56mGhpqNIeKHiWvjEVY/N78cHfta3zvOFmVMiBfDYSqSLhRhMh+y2M1JLx7lgRlHNRbdlkY4asHkUVHMQ5lsGHzZNefjiODdYur9ZbzZ0x1vKdoziA7oPlY2rbe1nZW77hioT1crDkCBMT6CWlCAij6T73no8D4lA==' );
	        define( 'WSDL_URL', 'https://ics2ws.ic3.com/commerce/1.x/transactionProcessor/CyberSourceTransaction_1.26.wsdl' );


	        class ExtendedClient extends SoapClient {

	          function __construct($wsdl, $options = null) {
	            parent::__construct($wsdl, $options);
	          }

	          // This section inserts the UsernameToken information in the outgoing SOAP message.
	          function __doRequest($request, $location, $action, $version) {

	            $user = MERCHANT_ID;
	            $password = TRANSACTION_KEY;

	            $soapHeader = "<SOAP-ENV:Header xmlns:SOAP-ENV=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:wsse=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd\"><wsse:Security SOAP-ENV:mustUnderstand=\"1\"><wsse:UsernameToken><wsse:Username>$user</wsse:Username><wsse:Password Type=\"http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText\">$password</wsse:Password></wsse:UsernameToken></wsse:Security></SOAP-ENV:Header>";

	            $requestDOM = new DOMDocument('1.0');
	            $soapHeaderDOM = new DOMDocument('1.0');

	            try {

	              $requestDOM->loadXML($request);
	              $soapHeaderDOM->loadXML($soapHeader);

	              $node = $requestDOM->importNode($soapHeaderDOM->firstChild, true);
	              $requestDOM->firstChild->insertBefore(
	                $node, $requestDOM->firstChild->firstChild);

	              $request = $requestDOM->saveXML();

	              // printf( "Modified Request:\n*$request*\n" );

	            } catch (DOMException $e) {
	              die( 'Error adding UsernameToken: ' . $e->code);
	            }

	            return parent::__doRequest($request, $location, $action, $version);
	          }
	        }

	        try {
	          $soapClient = new ExtendedClient(WSDL_URL, array());

	          /*
	          To see the functions and types that the SOAP extension can automatically
	          generate from the WSDL file, uncomment this section:
	          $functions = $soapClient->__getFunctions();
	          print_r($functions);
	          $types = $soapClient->__getTypes();
	          print_r($types);
	          */

	          $request = new stdClass();

	          $request->merchantID = MERCHANT_ID;

	          // Before using this example, replace the generic value with your own.
	          $request->merchantReferenceCode = "SD_Rangers_2014";

	          // To help us troubleshoot any problems that you may encounter,
	          // please include the following information about your PHP application.
	          $request->clientLibrary = "PHP";
	          $request->clientLibraryVersion = phpversion();
	          $request->clientEnvironment = php_uname();

	          // This section contains a sample transaction request for the authorization
	          // service with complete billing, payment card, and purchase (two items) information.
	          $ccAuthService = new stdClass();
	          $ccAuthService->run = "true";
	          $request->ccAuthService = $ccAuthService;

	          $ccCaptureService = new stdClass();
	          $ccCaptureService->run = "true";
	          $request->ccCaptureService = $ccCaptureService;

			  $ticket_amount = 18.00;
			  if ($_POST['campus'] == "miami" || $_POST['campus'] == "midtown_miami") {
				  $ticket_amount = 15.00;
			  }

	          $billTo = new stdClass();
	          $billTo->firstName = $_POST['firstname'];
	          $billTo->lastName = $_POST['lastname'];
	          $billTo->street1 = $_POST['addr1'];
	          $billTo->street2 = $_POST['addr2'];
	          $billTo->city = $_POST['city'];
	          $billTo->state = $_POST['state_cd'];
	          $billTo->postalCode = $_POST['zip'];
	          $billTo->country = "US";
	          $billTo->email = $_POST['email'];
	          $billTo->tel = $_POST['phone'];
	          $billTo->ipAddress = $_SERVER['REMOTE_ADDR'];
			  $billTo->campus = $_POST['campus'];
	          $request->billTo = $billTo;

	          $card = new stdClass();
	          $card->accountNumber = $_POST['cc_number'];
	          $card->expirationMonth = $_POST['cc_expir_month'];
	          $card->expirationYear = $_POST['cc_expir_year'];
	          $request->card = $card;

	          $purchaseTotals = new stdClass();
	          $purchaseTotals->currency = "USD";
	          $request->purchaseTotals = $purchaseTotals;

	          $item0 = new stdClass();

	          $item0->unitPrice = $ticket_amount;
	          $item0->taxAmount = 0.00;
	          $item0->quantity = $_POST['qty'];

	          $request->item = array($item0);

	          $reply = $soapClient->runTransaction($request);


	          if ($reply->reasonCode == 100):
	      ?>
	      <?php $subtotal = $_POST['qty'] * $ticket_amount; ?>
	      <?php $tax = 0.00; ?>
	      <?php $_SESSION['csrf_token'] = null ?>

	        <h2>Order Confirmation</h2>
	        <p>Thank you for your purchase on <?php echo date('F j, Y g:i a') ?></p>

	        <h3>Contact Information</h3>
	        <table width="100%">
	          <tbody>
	            <tr><th align="left">First Name:</th><td><?php echo $_POST['firstname'] ?></td></tr>
	            <tr><th align="left">Last Name:</th><td><?php echo $_POST['lastname'] ?></td></tr>
	            <tr><th align="left">Address:</th><td><?php echo $_POST['addr1'] ?></td></tr>
	            <tr><th align="left">&nbsp;</th><td><?php echo $_POST['addr2'] ?></td></tr>
	            <tr><th align="left">City:</th><td><?php echo $_POST['city'] ?></td></tr>
	            <tr><th align="left">State:</th><td><?php echo $_POST['state_cd'] ?></td></tr>
	            <tr><th align="left">Zip:</th><td><?php echo $_POST['zip'] ?></td></tr>
				<tr><th align="left">Campus:</th><td><?php echo $_POST['campus'] ?></td></tr>
	          </tbody>
	        </table>

	        <h3>Transaction Details</h3>
	        <table width="100%">
	          <tr><th align="left">Amount:</th><td>$<?php echo money_format('%.2n', $tax+$subtotal) ?></td></tr>
	          <tr><th align="left">Last 4 of CC:</th><td><?php echo substr($_POST['cc_number'],-4,4) ?></td></tr>
	          <tr><th align="left">Reason Code:</th><td><?php echo $reply->reasonCode ?></td></tr>
	          <tr><th align="left">Request ID:</th><td><?php echo $reply->requestID ?></td></tr>
	        </table>

	        <h3>Order Details</h3>
	        <table width="100%">
	          <thead>
	            <tr>
	              <th align="left">Item</th>
	              <th>Quantity</th>
	              <th>Price</th>
	              <th align="right">Total</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td id="item-label">Baseball Tickets</td>
	              <td align="center">
	                <dl>
	                  <dd>
	                    <?php echo $_POST['qty']; ?>
	                  </dd>
	                </dl>
	              </td>
	              <td align="center" id="price">$ <?php echo $ticket_amount ?></td>
	              <td align="right" id="total">$<?php echo money_format('%.2n', $subtotal) ?></td>
	            </tr>
	          </tbody>
	          <tfoot>
	            <tr>
	              <td colspan="2"></td>
	              <th align="right">Tax:</th>
	              <td id="tax" align="right">$<?php echo money_format('%.2n', $tax) ?></td>
	            </tr>
	            <tr>
	              <td colspan="2"></td>
	              <th align="right">Grand Total:</th>
	              <td id="grand_total" align="right">$<?php echo money_format('%.2n', $tax+$subtotal) ?></td>
	            </tr>
	          </tfoot>
	        </table>
			<?php
				$campus_selection = $_POST['campus'];
				$campus_contacts = array(
					"grapevine" => "Christen Files <christen.files@fellowshipchurch.com>",
					"dallas" => "Kris Robinson <kris.robinson@fellowshipchurch.com>",
					"fort_worth" => "Drea Aguilar <drea.aguilar@fellowshipchurch.com>",
					"plano" => "Biranna Thiede <brianna.thiede@fellowshipchurch.com>",
					"keller_southlake" => "Ashley Thomas <ashley.thomas@fellowshipchurch.com>",
					"park_cities" => "Justin Clarke <justin.clarke@fellowshipchurch.com>",
					"miami" => "Megan Sanchez <Megan.sanchez@fellowshipchurch.com>",
					"midtown_miami" => "Megan Sanchez <Megan.sanchez@fellowshipchurch.com>"
				);
			?>

	        <?php
	          $to = $_POST['firstname'] . " " . $_POST['lastname'] . "<" . $_POST['email']. ">";
	          $subject = "Order Confirmation";
	          $message = "Thank you for your purchase on " . date('F j, Y g:i a') . ".\n\n";

	          $message .= "Contact Information\n-----------\n";
	          $message .= "First Name: " .  $_POST['firstname'] . "\n";
	          $message .= "Last Name: " . $_POST['lastname'] ."\n";
	          $message .= "Address:\n";
	          $message .= $_POST['addr1'] ."\n";
	          $message .= $_POST['addr2'] ."\n";
	          $message .= "City: ".$_POST['city']."\n";
	          $message .= "State: ".$_POST['state_cd']."\n";
	          $message .= "Zip: ".$_POST['zip']."\n";
			  $message .= "Campus: ".$_POST['campus']."\n\n";

	          $message .= "Transaction Details\n-------------------\n";
	          $message .= "Amount: $" . money_format('%.2n', $tax + $subtotal) . "\n";
	          $message .= "Last 4 of CC: " . substr($_POST['cc_number'],-4,4) . "\n";
	          $message .= "Reason Code: " . $reply->reasonCode . "\n";
	          $message .= "Request ID: " . $reply->requestID . "\n\n";

	          $message .= "Order Details\n-------------------\n";
	          $message .= $_POST['qty'] . " x Baseball Tickets @ $" . money_format('%.2n', $ticket_amount) . " ea\n\n";

	          $message .= "Subtotal: $" . money_format('%.2n', $subtotal) . "\n";
	          $message .= "Tax: $" . money_format('%.2n', $tax) . "\n";
	          $message .= "Grand Total: $" . money_format('%.2n', $tax + $subtotal);

	          $headers = 'From: webmaster@fellowshipchurch.com' . "\n" .
	            'Reply-To: ' . $campus_contacts[$campus_selection] . "\n" .
	            'Bcc: Justin Clarke <justin.clarke@fellowshipchurch.com> ' . $campus_contacts[$campus_selection] . "\n" .
	            'X-Mailer: PHP/' . phpversion();

	         mail( $to , $subject , $message, $headers ); 	
	        ?>

	      <?php else: ?>

	        <h2>Sorry!</h2>
	        <p>We were unable to process your credit card at this time. For reference we provided a reason code <?php echo $reply->reasonCode ?>. If you'd like to try again please <a href="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" data-ajax="false">click here</a>.</p>

	      <?php endif ?>
	      <?php
	          // To retrieve individual reply fields, follow these examples.
	           // printf( "decision = $reply->decision<br>" );
	           // printf( "reasonCode = $reply->reasonCode<br>" );
	           // printf( "requestID = $reply->requestID<br>" );
	           // printf( "requestToken = $reply->requestToken<br>" );
	           // printf( "ccAuthReply->reasonCode = " . $reply->ccAuthReply->reasonCode . "<br>");
	        } catch (SoapFault $exception) {
	          var_dump(get_class($exception));
	          var_dump($exception);
	        }
	      ?>

	        <?php else: ?>

	          <h2>Sorry!</h2>
	          <p>An error has occurred <a href="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" data-ajax="false">click here</a> to try again.</p>

		<?php endif; ?>
	  <?php endif; ?>
	
</body>
</html>