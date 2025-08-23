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

        @if( $mail == 'adminProject' )
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br>A new member candidate applied for project in sprowtt lanuch pad.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Candidate Account details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Email :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Phone.No :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_phone }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Address :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_address }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Country :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_country }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier State :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_state }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier City :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_city }},
            </td>
            <td style="width:10px;">
        </tr>
        @elseif( $mail == 'ContactUs' )

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br>A contact enquiry registered in sprowtt lanuch pad.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Contact details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Person Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Message:
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px;letter-spacing: 0.5px;">{{ $messages }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Time :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $time }},
            </td>
            <td style="width:10px;">
        </tr>

        @elseif( $mail == 'adminInternship')

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br>A new Internship candidate registered in sprowtt lanuch pad.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Candidate Account details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Email :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Phone.No :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_phone }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Address :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_address }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Country :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_country }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier State :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_state }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier City :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_city }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">User Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Password :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $password }},
            </td>
            <td style="width:10px;">
        </tr>

        @elseif($mail == 'applierInternship')

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear {{ $person_name }}, <br> <br>This email includes your account details,so please keep it safe!</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Account details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">User Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Password :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $password }},
            </td>
            <td style="width:10px;">
        </tr>

        @elseif($mail == 'adminJudge')
        
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br>A new judge candidate registered in sprowtt lanuch pad.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Candidate Account details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Email :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Phone.No :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_phone }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Address :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_address }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Country :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_country }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier State :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_state }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier City :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_city }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applied Project :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_project }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">User Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Password :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $password }},
            </td>
            <td style="width:10px;">
        </tr>

        @elseif($mail == 'applierJudge')

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear {{ $person_name }}, <br> <br>This email includes your account details,so please keep it safe!</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Account details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">User Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Password :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $password }},
            </td>
            <td style="width:10px;">
        </tr>
		
		 @elseif($mail == 'adminAmbassador')
        
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br>A new judge candidate registered in sprowtt lanuch pad.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Candidate Account details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Email :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Phone.No :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_phone }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Address :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_address }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Country :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_country }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier State :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_state }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier City :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_city }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">User Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Password :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $password }},
            </td>
            <td style="width:10px;">
        </tr>

        @elseif($mail == 'applierAmbassador')

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear {{ $person_name }}, <br> <br>This email includes your account details,so please keep it safe!</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Account details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">User Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Password :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $password }},
            </td>
            <td style="width:10px;">
        </tr>

        @elseif($mail == 'User')

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear {{ $person_name }}, <br> <br>This email includes your account details,so please keep it safe!</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Account details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">User Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Password :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $password }},
            </td>
            <td style="width:10px;">
        </tr>

        @elseif($mail == 'Inventors')

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br> This person {{ $person_name }} will submmitted the inventors details.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Inventors details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Email :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Phone Number:
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_number }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">LinkedIn URL: 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"> {{ $linkedin }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">About LAB:
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px;letter-spacing: 0.5px;">{{ $about_lab }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Specific Inventions:
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $specific_invitation }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">TRL: 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $trl }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Appropriate Amount: 
            </td>
            <td style="width:400px; float:right;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0;  font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $appropriate_amount }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Entrepreneur:
            </td>
            <td style="width:400px; float:right;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $entrepreneur }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dates in washington D.C.:
            </td>
            <td style="width:400px; float:right;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $dates }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Hearing about sprowtt: 
            </td>
            <td style="width:400px; float:right;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">sprowtt: {{ $hear_about }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Suggestion: 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $suggestion }},
            </td>
            <td style="width:10px;"></td>
        </tr>

        @elseif($mail == 'Newtech')
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br> This person {{ $person_name }} will submmitted the Technology details.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Technology details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Email :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Europe Residential : 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"> {{ $resident_europe }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Affilated :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px;letter-spacing: 0.5px;">{{ $affilated_status }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Innovation Title :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $innovation_title }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Innovation Description : 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $innovation_describe }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Clinical Benefits :
            </td>
            <td style="width:400px; float:right;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0;  font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $clinical_benefits }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Fits Category :
            </td>
            <td style="width:400px; float:right;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $category }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Current Market Offer :
            </td>
            <td style="width:400px; float:right;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $market_offer }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Development Status : 
            </td>
            <td style="width:400px; float:right;">
                <p style="font-family:Arial; color: #515151; margin: 0px; padding:0px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"> <ul style="padding: 8px 0px 0px 0px;margin:0px;">@foreach ($development_status as $development)
                    <li> {{ $development}} </li> @endforeach </ul> </p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Regulatory clearance country: 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $regulatory_clearance }},
            </td>
            <td style="width:10px;"></td>
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px;">Intellectual property status : 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $intellectual_property }},
            </td>
            <td style="width:10px;"></td>
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"> Invention publicly status : 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $disclosed_status }},
            </td>
            <td style="width:10px;"></td>
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Business objectives : 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 0px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><ul style="padding: 8px 0px 0px 0px;margin:0px;">@foreach ($business_objectives as $objectives)
                    <li> {{ $objectives}} </li> @endforeach </ul> 
            </td>
            <td style="width:10px;"></td>
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Additional Information: 
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $additional_information }},
            </td>
            <td style="width:10px;"></td>
        </tr>
        @elseif($mail == 'questionResp')

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear viewer, <br> <br>Your response to the asked question is below</p>
            </td>
            <td style="width:10px;">
        </tr>

        

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Your Question :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $question }},
            </td>
            <td style="width:10px;">
        </tr>

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Our Answer :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $responce }},
            </td>
            <td style="width:10px;">
        </tr>

        @elseif($mail == 'askQuestion')
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br>New question received about the project by viewer</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Question :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $question }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Project :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $project_name }},
            </td>
            <td style="width:10px;">
        </tr>
        @elseif( $mail == 'adminEventApp')
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br>A new candidate registered for event in sprowtt lanuch pad.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Candidate details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Email :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $person_email }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Phone.No :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_phone }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Address :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_address }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier Country :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_country }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier State :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_state }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier City :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_city }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier City :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $applier_city }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier interested event days :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $event_days }} Days,
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Applier registerd project :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $project }},
            </td>
            <td style="width:10px;">
        </tr>
        @elseif( $mail == 'adminSponsorship')
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear Admin, <br> <br>A new sponsor registered for project in sprowtt lanuch pad.</p>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;"><u>Sponsor details:<u>
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Company Name :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $company_name }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Contact Person :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $contact_person }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Contact Number :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $contactnumber }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Contact Mail :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $contactemail }},
            </td>
            <td style="width:10px;">
        </tr>
        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:200px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Sponsor project :
            </td>
            <td style="width:400px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{{ $project }},
            </td>
            <td style="width:10px;">
        </tr>
        @elseif( $mail == 'applierSponsorship')

        <tr style="width:600px; margin:0; align:center; background-color: #fff;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">
                <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">Dear {{ $contact_person }}, <br> <br>Thank you for sponsor to {{ $project }} technology.we will reach you as soon as.</p>
            </td>
            <td style="width:10px;">
        </tr>

        @elseif( $mail == 'backendNewsletter')

            <tr style="width:600px; margin:0; align:center; background-color: #fff;">
                <td style="width:10px;">
                <td style="width:600px; float:left;">
                    <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{!! $content !!}</p>
                </td>
                <td style="width:10px;">
            </tr>

        @elseif( $mail == 'backendNewsletterModel')

            <tr style="width:600px; margin:0; align:center; background-color: #fff;">
                <td style="width:10px;">
                <td style="width:600px; float:left;">
                    <p style="font-family:Arial; color: #515151; margin: 0; padding: 7px 0; margin-left:15px; font-size: 14px; line-height: 21px; letter-spacing: 0.5px;">{!! $content !!}</p>
                </td>
                <td style="width:10px;">
            </tr>

        @endif   
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

        @if( $mail == 'backendNewsletterModel')

            <tr style="width:600px; margin:0; align:center; background-color: #fff; border-bottom:solid 1px #e1e1e1;">
                <td style="width:10px; background-color: #fafafa;">
                <td style="width:600px; float:left; text-align:center; background-color: #fafafa;">
                    <p style="font-size:12px; color:#1f3b8c; font-family:Arial; line-height:21px;">
                        <a href="{{{$url}}}" target="_blank">Unsubscribe</a>
                    </p>
                </td>
                <td style="width:10px; background-color: #fafafa;">
            </tr>

        @endif

        <tr style="width:600px; margin:0; align:center; background-color: #fafafa;">
            <td style="width:10px;">
            <td style="width:600px; float:left;">&nbsp;</td>
            <td style="width:10px;">
        </tr>
    </table>
</body>
</html>
