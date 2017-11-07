<!DOCTYPE html>
<html>
<head>
    <title>Reply Your Contact</title>
</head>
<body>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family: Arial, Helvetica, sans-serif;font-size: 14px;color:#666;">
        <tr>
            <td style="font-family: Arial, Helvetica, sans-serif;font-size: 14px;color:#666;padding: 20px;">
                <h3>Hello : {{ $name }}</h3>
                <p>Your question is: {{ $question }}</p>
                <p>Reply: {{ $answer }}</p>
                <p><a href="{{ route('home') }}">Click here for more detail</a></p>
                <p>
                    Regards,<br/>
                    DANG KY DU HOC
                </p>
            </td>
        </tr>
    </table>
</body>
</html>