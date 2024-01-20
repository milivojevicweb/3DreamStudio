<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>
    <style>


    #main{
        width: 100%;
        height: auto;
        background-color: #fff;
    }

    #mailContainer{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        margin-bottom: 10px;
    }

    #mailContainer p{
        margin: 0px !important;
        color: #666666;
    }

    #mailContainer img{
        width: 80px;
        margin-top: 30px !important;
    }

    #mainContent, #mainContent p, #mainContent h1, #mainContent h2{
        color: #000 !important;
    }

    </style>
  </head>
    <body>
        <table id="mailContainer" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td id="mainContent">{!! $content !!}</td>
            </tr>
            <tr>
                <td><img src="https://3dreamstudiosp.000webhostapp.com/images/bigLogo.png" alt="3dream studio"/></td>
            </tr>
            <tr>
                <td><p>3Dream Studio</p></td>
            </tr>
            <tr>
                <td><p>Telefon: +381 61 331 67 27</p></td>
            </tr>
            <tr>
                <td><p>Telefon: +381 66 516 08 91</p></td>
            </tr>
            <tr>
                <td><p>Telefon: +381 60 151 24 17</p></td>
            </tr>
            <tr>
                <td><p>Web: </p></td>
            </tr>
        </table>
    </body>
</html>
