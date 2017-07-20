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
    <div style="display: inline-flex;margin: auto;">
    <div>
<!--    <h2>Canvas A</h2>-->
    <!--    canvas olusturulmadan kodların cekilmesi manasızdır-->
    <canvas id="a" width="1010" height="500" style="border: 2px solid #003eff;"></canvas><!--yorum -->
    </div>
<!--    <div style="margin-left: 50px;">
    <h2>Canvas B</h2>
    <canvas id="b" width="500" height="500" style="border: 2px solid #003eff;"></canvas>
    </div>-->
    </div>
    <div style="margin: auto;">
        <input type="checkbox" id="chkGizleme"><label id="checkedLabel">Güvenli Alanları Gizle</label> </input>
        <input type="button" id="btnSecmeSol" value="Soldaki Nesneleri Seç"></input>
        <input type="button" id="btnSecmeSag" value="Sağdaki Nesneleri Seç"></input>
        <input type="button" id="btnSecmeTumu" value="Tüm Nesneleri Seç"></input>
    </div>  

</head>
<body>
</body>
<footer>
    <!--                  fabric js çağırma bölümü ve kodlar                 -->
    <script src="02_fabricjsCanvas.js" type="text/javascript"></script>   
</footer>
</html>