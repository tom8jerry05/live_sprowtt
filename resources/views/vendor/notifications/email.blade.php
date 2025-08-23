<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegisterME</title>
</head>
<body style="width:620px; margin:0 auto;">
    <table cellpadding="0" cellspacing="0" border="0" align="center" style="width:620px;border: solid 1px #848181;">
    
        <tr style="width:620px; margin:0; align:center;background-color: #fff;">
            <td style="width:10px;">
            <td style="padding:0px; text-align:center; width:600px;">
                <img src="https://www.sprowtt.com/image/logo.png" width="300" style="margin:0 auto; height:auto; padding:0;" />
            </td>
            <td style="width:10px;">
        </tr>

        <tr style="width:600px; margin:0; align:center; background-color: #fafafa;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">&nbsp;
                
            </td>
            <td style="width:10px;">
        </tr>
              
        <tr style="width:600px; margin:0; align:center; background-color: #fafafa;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #00aad3; margin: 0; padding: 7px 0; margin-left:15px; text-align:center;"> <b>Greetings!</b></p>
            </td>
            <td style="width:10px;">
        </tr>





        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Hello, <br> <br> You are receiving this email because we received a password reset request for your account.</p>
            </td>
            <td style="width:10px;">
        </tr>



        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">


                    {{-- Action Button --}}
                    @isset($actionText)

                    <?php
                        switch ($level) {
                            case 'success':
                            $color = 'green';
                        break;
                        case 'error':
                            $color = 'red';
                        break;
                        default:
                            $color = 'blue';
                        }
                    ?>
                    
                    @component('mail::button', ['url' => $actionUrl, 'color' => $color])
                        {{ $actionText }}
                    @endcomponent
                    @endisset
            </td>
            <td style="width:10px;">
        </tr>
       

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">&nbsp;
                
            </td>
            <td style="width:10px;">
        </tr>

        

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">&nbsp;
                
            </td>
            <td style="width:10px;">
        </tr>
        
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"> Regards, <br> <span style="color:#1B445B; font-weight:600;">SPROWTT</span>
                    <b style="color:#999;">
                    </b> team. </p>
            </td>
            <td style="width:10px;">
        </tr>
        
        <tr style="width:600px; margin:0; align:center; background-color: #fff; border-bottom:solid 1px #e1e1e1;">
            <td style="width:10px; background-color: #fafafa;">
            <td style="width:600px; float:left; text-align:center; background-color: #fafafa;">
            
                <p style="font-size:12px; color:#1f3b8c; font-family:Arial; line-height:21px;"> © 2019 SPROWTT. All rights reserved.</p>
            </td>
            <td style="width:10px; background-color: #fafafa;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fafafa;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">&nbsp;
                
            </td>
            <td style="width:10px;">
        </tr>

    </table>
</body>
</html>



