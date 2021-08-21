<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
 lang="en">

<head>
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        #outlook a {
            padding: 0;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0;
            mso-table-rspace: 0;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <style type="text/css">
        @media only screen and (max-width: 480px) {
            @-ms-viewport {
                width: 320px;
            }

            @viewport {
                width: 320px;
            }
        }
    </style>
    <style type="text/css">
        @media only screen and (min-width: 480px) {
        }
    </style>
</head>

<body style="background: #FFFFFF;">
<div class="mj-container" style="background-color:#FFFFFF;">
    <table role="presentation" cellpadding="0" cellspacing="0"
           style="vertical-align:top;  border: 1px solid #111; margin: 5px; padding: 5px;"
           width="100%" border="1">

        <thead>
        <tr>
            <th> Name</th>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <th> Email</th>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <th>Subject</th>
            <td>{{$subject}}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td> {!! $information !!}</td>
        </tr>


        </thead>
    </table>

</div>
</body>

</html>
