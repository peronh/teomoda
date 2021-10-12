
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title></title>
    <meta name="viewport" content="width=device-width" />
    <style type="text/css">
        @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
            body[yahoo] .buttonwrapper { background-color: transparent !important; }
            body[yahoo] .button { padding: 0 !important; }
            body[yahoo] .button a { background-color: #69b899; padding: 15px 25px !important; }
        }

        @media only screen and (min-device-width: 601px) {
            .content { width: 600px !important; }
            .col387 { width: 387px !important; }
        }
    </style>
</head>
<body bgcolor="#eaebed" style="margin: 0; padding: 0;" yahoo="fix">

<table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content">
                <tr>
                    <td style="padding: 5px;"> </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#fff" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
                        <img src="{{URL::to('/')}}/assets/TeoModa_t.png" alt="Everest" style="width: 140px;"><br />
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#E95075" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
                        @if ($subject)
                            {{ $subject }}
                        @endif
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff" style="padding: 10px; color: #555555; font-family: Arial, sans-serif; font-size: 16px; line-height: 30px;">
                        Inquiry from: {{ $name }}
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff" style="padding: 10px; color: #555555; font-family: Arial, sans-serif; font-size: 16px; line-height: 30px;">
                        Email: {{ $email }}
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff" style="padding: 10px; color: #555555; font-family: Arial, sans-serif; font-size: 16px; line-height: 30px;">
                        Message: {{ $comment }}
                    </td>
                </tr>

                <tr>
                    <td align="center" bgcolor="#E95075" style="padding: 15px 10px 15px 10px; color: #ffffff; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
                        &copy; <?php echo date('Y') . ' '; ?><a href="https://teomoda.com" style="color: #ffffff;">Teomoda</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
