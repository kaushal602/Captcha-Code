<html>
<head>
    <title>Contact us</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/captcha.js"></script>
</head>
<body>

    <div class="container">
        <form id="contact" action="javascript:void(0)" method="post" onsubmit="submit_form()">
            <h3>Contact Form</h3>
            <h4>Contact us for any query</h4>
            <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="text" tabindex="2">
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number (optional)" type="text" tabindex="3">
            </fieldset>
            <fieldset>
                <input placeholder="Your Web Site (optional)" type="text" tabindex="4">
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your message here...." tabindex="5"></textarea>
            </fieldset>
            <fieldset>
                <img src="captcha.php?rand=<?php echo rand(); ?>" id="captchaimg" height="50" width="350">
            </fieldset>
            <fieldset>
                <input placeholder="Captcha" type="text" tabindex="2" id="captcha_code">
                <span class="err captcha-err"></span>
            </fieldset>
            <fieldset>
                Can't read the above code? <a class="ccc" href="javascript:void(0);" onClick="refresh_captcha();">Refresh</a>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit">Submit</button>
            </fieldset>
        </form>

    </div>
    <script>
        function formsubmit(){
            jQuery('.sr').html('');
            jQuery('.er').html('');
            var regn_no = document.getElementById('regn_no').value;
            var location_code = document.getElementById('location_code').value;
            var Commissionerate = document.getElementById('Commissionerate').value;
            var range_name = document.getElementById('range_name').value;
            var division = document.getElementById('division').value;
            var name = document.getElementById('name').value;
            var organisation = document.getElementById('organisation').value;
            var strict_address = document.getElementById('strict_address').value;
            var address = document.getElementById('address').value;
            var city = document.getElementById('city').value;
            var pincode = document.getElementById('pincode').value;
            var landline_no = document.getElementById('landline_no').value;
            var mobile_no = document.getElementById('mobile_no').value;
            var email = document.getElementById('email').value;
            var details = document.getElementById('details').value;
            var captcha_code = document.getElementById('captcha_code').value;

            if((regn_no != '') && (location_code != '') && (division != '') && (name != '') && (organisation != '') && (strict_address != '') && (mobile_no != '') && (email != '') && (details != '') && (captcha_code != '')){
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(re.test(email)){
                    $.ajax({
                        url: "thank_you.php",
                        data: {regn_no:regn_no,location_code:location_code,range_name:range_name,division:division,name:name,organisation:organisation,strict_address:strict_address,address:address,city:city,pincode:pincode,landline_no:landline_no,mobile_no:mobile_no,email:email,details:details,captcha_code:captcha_code,Commissionerate:Commissionerate},
                        type: 'POST',
                        beforeSend: function () {
                           jQuery("#loader-wrapper1").show();
                        },
                        complete: function () {
                           jQuery("#loader-wrapper1").hide();
                        },
                        success: function (response) {
                            if(response==1){
                                jQuery('.sr').html('Email sent Successfully');
                                jQuery("form").trigger("reset");
                            }
                            if(response==0){
                                jQuery('.er').html('Invalid captcha! Please try again.');
                            }
                        }
                    });
                } else {
                    jQuery('.er').html('Enter valid email address');
                }
            } else {
                jQuery('.er').html('Enter required fields');
            }
        }
        
        function refresh_captcha(){
            return document.getElementById("captcha_code").value="",document.getElementById("captcha_code").focus(),document.images['captchaimg'].src = document.images['captchaimg'].src.substring(0,document.images['captchaimg'].src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
    </script>
</body>
</html>