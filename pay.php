<script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
<body onload="payment()">
<?php

$frmData = array(

     'order_id' => 'OrderId'.rand(),
     'order_amount' => $_POST['orderamount'],
     'order_note' => $_POST['ordernote'],
     'order_currency' => 'INR',

'customer_details' => array(
     'customer_id' => 'customer_'.rand(),
     'customer_name' => $_POST['customername'],
     'customer_phone' => $_POST['cuatomerphone'],
     'customer_email' => $_POST['customeremail']
    
),
'order_meta'=> array(
        'return_url' => 'http://localhost:8000/php_workspace/PHPV3API/v3api/success.php?order_id={order_id}',
        'notify_url' => '',
        'payment_methods' =>'upi,cc,nb' 
)
);

       $url = "https://sandbox.cashfree.com/pg/orders";
      
        $data_string = json_encode($frmData );
       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Accept: application/json',
                'x-api-version: 2025-01-01',
                'Content-Type: application/json',
                'x-client-id: 13764729ed596674a0f96e06f3746731',
                'x-client-secret:1f4ee1fd095fcd3cfa702f0c91389c8adca03b5a'
            )
        );

        $result = curl_exec($ch);
        $returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $resp = json_decode($result, true);
     print_R( $resp);
        $session =  $resp['payment_session_id'];
       

?>
<Body>
<h4>Loading.....</h4>
<span hidden class="order-token">Payment Session Id :</span> <input type="hidden" placeholder="order_token"
    id="paymentSessionId" value="<?php echo"$session"?>" class="inputText">


</Body>

<script>
function payment() {

    const cashfree = Cashfree({
    mode:"sandbox" //or production
});
let checkoutOptions = {
    paymentSessionId: document.getElementById("paymentSessionId").value,
    redirectTarget: "_self" //optional ( _self, _blank, or _top)
}

cashfree.checkout(checkoutOptions)
   
};
</script>
</body>
