
<?php
session_start();
$fullNameValue="";
$totalValue2="";
$phoneNumber="";
/*
 * Create a session variable for the mobile number
 */
 $totalValue = $_POST['txtTotal'];
 $_SESSION['txtName'] = $fullNameValue;
 $_SESSION['txtTotal'] = $totalValue2;
 $_SESSION['txtNum']=$phoneNumber;
 
 /*
  * Allocate the mobile session variable to a text box
  */
 
  ?>
 
  <!DOCTYPE html>
  <html>
    <head>
        <title>eBusiness 2</title>
               
    </head>
    <body>
        <div class="form">
                    <style>
                        body{
                            
                            font-family: courier new;
                        }
                        body {
  background-image: url("pic.jpg");
}
body {
  color: white;
}

h1 {
  color: white;
}
               
                    </style>
                
            <form name="Details" method="post" action="Ebus3.php">
                <center>
                                    <h1><b><u>Enter in your details below</u></b></h1>
                                    <hr/>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                                                        <td><input type="text" id="txtName" name="txtName" value="" required="" /></td>
                        </tr>   
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" value="" required /></td>
                        </tr>   
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="" required /></td>
                        </tr>   
                        <tr>
                           
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>   
                    </table>
                </center>
       
            <center>
                       
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue" />
            </center>
            </div>
            </form>
        </body>
    </html>

