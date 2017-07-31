<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head runat="server">
        <meta charset="UTF-8">
    <title>Uygulama Tezgahı</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link href="js/jquery-ui.css" rel="stylesheet"/>
    <script type="text/javascript">


    </script>
    <style>
        div {
            border: 2px solid black;
            font-size: 16px;
            background-color: lightgray;
            width: 400px;
            padding: 5px;
            display: inline-table;
        }

        li {
            font-size: 14px;
        }
    </style>
</head>
<body style="font-family: Arial">
    <form id="form1" runat="server">
        <div class="orneklerJquery">
            Jquery Çalışma Örnekleri
                <ul id="jquery">
                    <li data-value="ornek"><a href="/jqueryExams/01_jqWhatIs.php">01 JQuery Nedir? Ne işe yarar?</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/02_jqDocumentReady.php">02 Document Ready?</a>&nbsp;&nbsp;<a href="/jqueryExams/02_jqDom_window.php">02 Dom ve window load olayı</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/03_cdn_kullanimi.php">03 CDN Kullanımının Avantaj / Dezavantajları</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/04_jqIdSelector.php">04 #id selector</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/05_jqElementSelector.php">05 $element selector</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/06_jqClassSelector.php">06 .class selector</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/jqDrag.php">Draggable Nesne</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/jqdrag_snap.php">Draggable Snap Olayı</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/jqdrop.php">Dropabble Nesne</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/07_jqDateTime.php">Date Time Örneği</a></li>
                    <li data-value="ornek"><a href="/jqueryExams/10_inputExam.php">10 İnput örneği</a></li>
                </ul>
        </div>
        <div class="orneklerJavaScript">
            Javascript Çalışma Örnekleri
                <ul id="javascript">
                    <li data-value="ornek"><a href="41_jsImageGalery.php">Javascriptle Fotoğraf Galerisi</a> </li>
                    <li data-value="ornek"><a href="45_jsMouseEvents.php">Javascript Fare olayları</a> </li>
                </ul>
        </div>
        <div class="orneklerBootstrap">
            Bootstrap Çalışma Örnekleri
                <ul id="bootstrap">
                    <li data-value="ornek"><a href="01_bootstrapDialog.php">Bootstrap diyalog kutusu örneği</a></li>
                    
                </ul>
        </div>
        <div class="orneklerJson">
            Json Çalışma Örnekleri
                <ul id="json">
                    <li data-value="ornek"><a href="01_jsonBasitOrnek.php">Json basit uygulaması</a></li>    
                </ul>
        </div>
        <div class="orneklerFabricjs">
            Fabric Çalışma Örnekleri
                <ul id="fabricjs">
                    <li data-value="ornek"><a href="fabricjsOrnekleri/01_fabricjsCrop.php">Fabric JS Crop Örneği</a></li>
                    <li data-value="ornek"><a href="fabricjsOrnekleri/02_fabricjsCanvas.php">Fabric 2 Canvas Örneği</a></li>
                    <li data-value="ornek"><a href="fabricjsOrnekleri/03_fabricjsCanvasTwo.php">Fabric 2 Canvas Örneği 2</a></li>
                    <li data-value="ornek"><a href="fabricjsOrnekleri/06_animateExample.php">Animate Örneği</a></li>
                </ul>
        </div>
    </form>
</body>
</html>
