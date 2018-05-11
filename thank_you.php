<?php
session_start();
$regn_no = $_POST['regn_no'];
$location_code = $_POST['location_code'];
$range_name = $_POST['range_name'];
$division = $_POST['division'];
$name = $_POST['name'];
$organisation = $_POST['organisation'];
$strict_address = $_POST['strict_address'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$landline_no = $_POST['landline_no'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$details = $_POST['details'];
$captch = $_POST['captcha_code'];
$Commissionerate = $_POST['Commissionerate'];
if($captch == $_SESSION['captcha_code']){

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Central Excise Commissionerate <info@dgtsazu.in>' . "\r\n";

    $msg = '<table cellspacing="0" cellpadding="0" border="0" style="float: none; width: 800px; overflow: hidden; border-left: 3px solid #FC7059; border-top: 3px solid #FC7059; color: rgb(36, 36, 36);">
        <tbody>
            <tr>
                <td style="padding: 10px; width: 800px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; background-color: #FC7059; color: rgb(255, 255, 255); text-align: left;" colspan="2"><h3 style="font-family: Helvetica,Arial,sans-serif; font-size: 24px; margin: 13px 0px; color: #fff;">E-Helpline Detail</h3></td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Pan Based Registration Number</td>
                <td style="padding: 10px; width: 579px; border-right: 3px solid #FC7059; border-bottom: 3px solid #FC7059;">'.$regn_no.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Location Code</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$location_code.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Range Name</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$range_name.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Division Name</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$division.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Commissionerate Name</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$Commissionerate.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Name</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$name.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Organisation / Unit Name</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$organisation.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Street Address</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$strict_address.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Address (cont.)</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$address.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">City / District</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$city.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Pin Code</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$pincode.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Landline Phone Number</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$landline_no.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Mobile Phone Number</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$mobile_no.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">E-mail</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$email.'</td>
            </tr>
            <tr>
                <td style="width: 200px; padding: 10px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059; text-align: left;">Detail</td>
                <td style="padding: 10px; width: 579px; border-bottom: 3px solid #FC7059; border-right: 3px solid #FC7059;">'.$details.'</td>
            </tr>
        </tbody>
    </table>';

    if(mail( 'dgtsazu@gmail.com', 'E-Helpline', $msg, $headers)){
        echo "1";   
    } else {
        echo "2";
    }
} else {
    echo "0";
}
?>
