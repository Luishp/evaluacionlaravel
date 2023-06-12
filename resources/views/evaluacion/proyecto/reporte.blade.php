<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Gob</title>
    <style>
        /** 
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
        @page {
            margin: 0cm 0cm;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 2cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 2cm;
            color: #212121;
        }

        /** Define the header rules **/
        header {
            position: flex;
            margin-top: -1cm;
            color: #212121;
        }

        /** Define the footer rules **/
        footer {
            position: fixed; 
            bottom: 0cm; 
            left: 0cm; 
            right: 0cm;
            height: 1.5cm;
            font-size: 14px;
            text-align: center;
            color: #212121;
            border: 1px solid;
            margin: 2px 1cm;
            margin-bottom: 10px;
            color: #000;
        }

        li{
            font-size: 14px;
            padding-left: 15px;
            padding-bottom: 5px;
        }

        .title{
            font-size: 20px;
            font-family: "Gill Sans", sans-serif;
        }

        .subtitle{
            font-size: 16px;
            text-transform: uppercase;
            text-align: center;
            padding-bottom: 10px;
            font-weight: bold;
        }

        .date{
            font-size: 12px;
        }

        .text{
            font-size: 14px;
        }
        .firma{
            font-size: 14px;
            text-align: center;
        }

        table {
            font-size: x-small;
            margin: 0px 0px;
            padding: 0px;
        }

        span{
            font-size: 13px;
            color: #212121;
        }

        .rotar 
            { 
                -ms-writing-mode: tb-rl; 
                -webkit-writing-mode: vertical-rl; 
                writing-mode: vertical-rl; 
                transform: rotate(-90deg); 
                white-space: nowrap;
                margin-left: -55px; 
                margin-right: -55px;
                margin-top: -30px;
                /*Personalizados*/
                font-size:15px;
                text-decoration:bold;
                color: #212121;
        }

        .dato{
            font-weight: bold;
        }

        .salto{
            page-break-before:always;
        }
    </style>
</head>
<body>
    <header>
        <table width="100%" style="border-collapse: collapse;">
            <tr>
                <td colspan="4" align="center">
                    <span style="font-size: 20px; text-decoration: bold; text-align: center; ">
                        Gobierno de El Salvador
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <span style="font-size: 20px; text-decoration: bold; text-align: center; ">
                        Centro Nacional  de Registros
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <span style="font-size: 20px; text-decoration: bold; text-align: center; ">
                        <?php echo date("d-M-Y");?>
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="4"></td>
            </tr>
        </table>
    </header>

    <footer>
        <table style="border-collapse: collapse; width: 100%; padding-top: 10px">
            <tr valign="m">
                <td style="width: 50%; text-align: center;">San Salvador</td>
                <td style="width: 50%; text-align: center;">2593-5000</td>
            </tr>
            <tr>
                <td style="width: 50%; text-align: center;">Ubicación</td>
                <td style="width: 50%; text-align: center;">Telefono</td>
            </tr>
        </table>
    </footer>

    <main>
        <h1>Proyecto: {{$proyecto->nombreproyecto}}</h1>
        <div>
            <table width="100%" style="border-collapse: collapse;">
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr valign=top>
                    <td style="border: 1px solid #333; text-align: center; height: 60px;">
                        <div style="padding-bottom: 5px;">
                            <span>
                                ID
                            </span>
                        </div>
                        <div style="padding-bottom: 5px;">
                            <span class="dato">
                                {{$proyecto->id}}
                            </span>
                        </div>
                    </td>
                    <td style="border: 1px solid #333; text-align: center; height: 60px;">
                        <div style="padding-bottom: 5px;">
                            <span>
                                Nombre del proyecto
                            </span>
                        </div>
                        <div style="padding-bottom: 5px;">
                            <span class="dato">
                                {{$proyecto->nombreproyecto}}
                            </span>
                        </div>
                    </td>
                    <td style="border: 1px solid #333; text-align: center; height: 60px;">
                        <div style="padding-bottom: 5px;">
                            <span>
                                Fuente de fondos
                            </span>
                        </div>
                        <div style="padding-bottom: 5px;">
                            <span class="dato">
                                {{$proyecto->fuentefondos}}
                            </span>
                        </div>
                    </td>
                    <td style="border: 1px solid #333; text-align: center; height: 60px;">
                        <div style="padding-bottom: 5px;">
                            <span>
                                Monto Planificado
                            </span>
                        </div>
                        <div style="padding-bottom: 5px;">
                            <span class="dato">
                                {{$proyecto->montoplanificado}}
                            </span>
                        </div>
                    </td>
                    <td style="border: 1px solid #333; text-align: center; height: 60px;">
                        <div style="padding-bottom: 5px;">
                            <span>
                                Monto Patroncinado
                            </span>
                        </div>
                        <div style="padding-bottom: 5px;">
                            <span class="dato">
                                {{$proyecto->montopatrocinado}}
                            </span>
                        </div>
                    </td>
                    <td style="border: 1px solid #333; text-align: center; height: 60px;">
                        <div style="padding-bottom: 5px;">
                            <span>
                                Monto Fondos Propios
                            </span>
                        </div>
                        <div style="padding-bottom: 5px;">
                            <span class="dato">
                                {{$proyecto->montofondospropios}}
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
    </main>
    
    
</body>
</html>