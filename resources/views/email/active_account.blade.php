<!DOCTYPE html>
<html>
<head>
    <title>Active account</title>
</head>
<body>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family: Arial, Helvetica, sans-serif;font-size: 14px;color:#666;">
        <tr>
            <td style="font-family: Arial, Helvetica, sans-serif;font-size: 14px;color:#666;padding: 20px;">
                <h4 style="margin: 0;font-weight: 700;font-size: 16px;">Hello!</h4>
                <p>You are receiving this email because you have created new account. Please click button below to active this account</p>
                <div style="text-align: center;">
                    <a href="{{ $url }}" style="color:#fff;text-decoration: none;display: inline-block;line-height: 35px;padding: 0 15px;background-color: #3097D1;">Active Account</a>
                </div>
                <p>If you dit not request a active request, no further action is required.</p>
                <p>
                    Regards,<br/>
                    DANG KY DU HOC
                </p>
                <div style="border-top:1px solid #ddd;padding-top:20px;font-size: 12px;">
                    <p>If you're having trouble clicking the "Active Account" button, copy and paste the URL below into your web browser.</p>
                    <a href="#" style="color:#3097D1;text-decoration: underline;">{{ $url }}</a>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>