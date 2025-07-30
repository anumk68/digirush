<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <table bgcolor="#fafafa" style=" width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, 'Lucida Grande', sans-serif;  font-size: 100%; line-height: 1.6;">
        <tr>
            <td></td>
            <td bgcolor="#FFFFFF" style="border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;">
                <div style="padding:20px; max-width:600px; margin:0 auto; display:block;">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <h3 style="font-weight: 200; font-size: 24px; margin: 20px 0 30px 0; color: #333333;">Hi There,</h3>
                                <p style="margin-bottom: 10px; font-weight: normal; font-size:16px; color: #333333;">Someone has made an attempt to contact us. Assist the visitor with their questions. Check out the contact detail below.</p>
                                <h2 style="font-weight: 200; font-size: 20px; margin: 20px 0; color: #333333;">Name: {{$data['name']}} </h2>
                                <h2 style="font-weight: 200; font-size: 20px; margin: 20px 0; color: #333333;">Email: {{$data['email_person']}} </h2>
                                <h2 style="font-weight: 200; font-size: 20px; margin: 20px 0; color: #333333;">Phone: {{$data['phone']}} </h2>
                                <h2 style="font-weight: 200; font-size: 20px; margin: 20px 0; color: #333333;">Service: {{$data['services']}} </h2>
                                <h2 style="font-weight: 200; font-size: 20px; margin: 20px 0; color: #333333;">City: {{$data['city']}} </h2>
                                <p style="text-align: center; display: block; padding-top:20px; font-weight: bold; margin-top:30px; color: #666666; border-top:1px solid #dddddd;">Digirush Solutions</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td></td>
        </tr>
    </table>
</body>
</html>
