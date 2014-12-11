<html>

<head>
    <link href="css/demo.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <meta name="keywords" content="rebozo birth tool, buy a rebozo, rebozo workshop, doula tool, doula, midwife, midwives, doulas, natural birth, doula rebozo, cloth birth tool, doula bag, free shipping, childbirth, mom" />
    <meta name="description" content="Comfortable & practical birth tool for moms, doulas, and birth partners. 100% bamboo and super soft. Free Shipping" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/demo.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .wrap .section.s5 .contact-container form table tr td input {
            text-align: left;
        }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.smint.js"></script>

    <title>Please try again...</title>

    <body>
        <div class="section s5">
            <div class="inner">
                <a name="contact"><h1>Contact</h1></a>
                <br>
                
            </div>
            <div class="inner">
                <div class="contact-form">
                    <form name="htmlform" method="post" action="html_form_send.php">
                        <table width="516">
                            <tr>
                                <td valign="top">
                                    <label for="first_name">First Name *</label>
                                </td>
                                <td width="298" valign="top">
                                    <input type="text" name="first_name" maxlength="50" size="50">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <label for="last_name">Last Name *</label>
                                </td>
                                <td valign="top">
                                    <input type="text" name="last_name" maxlength="50" size="50">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <label for="email">Email *</label>
                                </td>
                                <td valign="top">
                                    <input type="text" name="email" maxlength="80" size="50">
                                </td>
                            </tr>
                            <tr>
                                <td height="29" valign="top">
                                    <label for="telephone">Phone</label>
                                </td>
                                <td valign="top">
                                    <input type="text" name="telephone" maxlength="30" size="50">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <label for="comments">Comments *</label>
                                </td>
                                <td valign="top">
                                    <textarea name="comments" cols="40" rows="6"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <label for="captcha">CAPTCHA *</label>
                                </td>
                                <td valign="top">
                                    <?php require_once( 'recaptcha-php-1.11/recaptchalib.php'); $publickey="6Ldz5voSAAAAAE-PV62ylugxdrXST44UvPvC-MAo" ; echo recaptcha_get_html($publickey); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:right">
                                    <input name="submit" type="submit" value="Submit">
                                </td>
                            </tr>

                        </table>

                    </form>
                </div>
                <!--contact form float left-->
                <div class="contact-contents">
                    <h2>Oops!</h2>
                    <p>It looks like there's been a problem with your submission. This usually happens when you get the CAPTCHA code wrong. </p>
                    <p>We appreciate your patience. We take feedback and this is a necessary step to protect us from being overwhelmed with spam.</p>
                    
                </div>
            </div>
            <!--contact container-->

        </div>
    </body>
</head>

</html>