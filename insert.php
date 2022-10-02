<!-- php file for validating input and sending it to the database -->

<!DOCTYPE HTML>
<HTML>
<HEAD>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Liza Kim">
  <title>Unit 5: Securely Storing Payment Data</title>
</HEAD>

<BODY>
<?php
$link = new mysqli('sql213.epizy.com', 'epiz_32503928', 'dYNO0vwUw18wISg', 'epiz_32503928_ek796');
if ($link === false) {
    die ("ERROR: Could not connect. " .mysqli_connect_error());
}

$fname = $_REQUEST['fname']; 
$lname =  $_REQUEST['lname'];
$card = $_REQUEST['cardnum'];
$cvv = $_REQUEST['cvv']; 
$edate = $_REQUEST['edate'];
$stname = $_REQUEST['stname'];
$cname = $_REQUEST['cname']; 
$sname = $_REQUEST['sname']; 
$zip = $_REQUEST['zip'];

// help with inserting data into a database from: https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/
$sql = "INSERT INTO payment VALUES ('$fname', '$lname', '$cardnum', '$cvv', '$edate', '$stname', '$cname', '$sname', '$zip')";


/* Sabal's (video 5.1.2) suggested encryption code from:
    https://www.php.net/manual/en/function.openssl-encrypt.php */
/* trouble figuring out how to incorporate this into the program */
$key ='djalfjklhaoi930hnjkdsu90';
$cipher = "aes-128-gcm";
if (in_array($cipher, openssl_get_cipher_methods()))
{
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
    //store $cipher, $iv, and $tag for decryption later
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
    echo $original_plaintext."\n";
}
/* end of encryption code */


/* validating the input */
//name validation code from: https://www.kodingmadesimple.com/2014/04/use-php-preg-match-function-for-form-validation.html
if (!preg_match("/^[a-zA-Z]+$/", $fname))
    {
        return false;
        echo "Please provide a valid name input";
    }
if (!preg_match("/^[a-zA-Z]+$/", $fname))
    {
        return false;
        echo "Please provide a valid last name input";
    }
if (!preg_match("/^[0-9]*$/", $cardnum) || (int)$_POST["cardnum"]>9999999999999999 || (int)$_POST["cardnum"]<1000000000000000)
    {
        return false;
        echo "Please enter a valid card number";
    }
if (!preg_match("/^[0-9]*$/", $ccv) || (int)$_POST["ccv"]>9999999999999999 || (int)$_POST["ccv"]<1000000000000000)
    {
        return false;
        echo "Please enter a valid security code";
    }
/* end of validating the input */
/* I wanted to include more validation conditions, but I was running out of time */


if (mysqli_query($link, $sql)) {
    echo "Thank you for submitting your form.";
} else {
    echo "An error occured. Please try again. " .mysqli_error($link); 
    }

mysqli_close($link); 
?>

</BODY>
<br>
<br>
<A href="unit5_labb.php">Return to the form</A>
</HTML>