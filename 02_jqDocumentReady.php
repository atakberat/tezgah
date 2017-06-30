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
    
    <!--<script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.js"></script>-->
 
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <link href="js/jquery-ui.css" rel="stylesheet"/>


</head>
<body>
    <script type="text/javascript">
        ///////                           jquery kısım                              ////////////
        $(document).ready(function(){   //sayfa tam yüklendiğinde
        $('#button1').click(function(){ //butona tıklandığında
            alert('jQuery Örneği'); //mesaj kutusu
        });
        });
        ////////////////////////////////////////////////////////////////////////////////////////    
    </script>
    <input type="button" id="button1" value="Sayfa Yüklendiğinde çalışır" />
    
    <input type="button" id="button2" value="Nesne yüklendikten sonra çalışır" /> <!-- button2 nesnesi yüklenmeden jq kodu çalışmaz -->
    
    <script type="text/javascript">
            $('#button2').click(function(){ //butona tıklandığında
            alert('jQuery Örneği'); //mesaj kutusu
        });
    </script>
</body>
</html>
