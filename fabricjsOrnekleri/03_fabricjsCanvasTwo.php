<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <title>Uygulama Tezgahı</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="../js/fabric.js" type="text/javascript"></script>
    
    <script src="../js/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="../js/jquery-ui.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="genelCss.css">
</head>
<body>
<div class="parent">
    <canvas id="myCanvas"></canvas>
    <!-- <div id="myCanvas"></div> -->
    <div class="subParent"></div>
    <div class="leftContent"></div>
    <div class="centerContent"></div>
    <div class="rightContent"></div>
</div>

<div class="btnList">
    <ul>
        <li><a href="#" class="bg" data-id="../images/sample01.jpg" data-denemeAlani="Birinci buton tıklandı">Bg ekle</a></li><br/>
        <li><a href="#" id="btnSagDegistir" data-id="../images/sample02.jpg" data-denemeAlani="İkinci buton tıklandı">Bg ekle</a></li><br/>
        <li><input type="checkbox" id="chkSafeArea">Güvenli Alanı Gizle</li>
    </ul>
</div>
</body>
<footer>
    <!--                  fabric js çağırma bölümü ve kodlar                 -->
    <script src="03_fabricjsCanvasTwo.js" type="text/javascript"></script>   
</footer>
</html>