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
        ///////         jquery ile oluşturulmuş buton tıklama olayı        ////////////
        $(window).load(function(){
            //console.log("gedimi?");
            $("#button1").css("background-color","#5CB3FF");// sadece ilk gördüğü button idsini kullanır
            alert($("#button1").length);
            console.log($("#button1").length);
            $('#button1').click(function(){ //butonu hastag ile id selector olarak seçtik
            alert('jQuery Örneği'); //mesaj kutusu  
        });
        });
        ////////////////////////////////////////////////////////////////////////////////////////
        
        
        
        
    </script>
    <input type="button" id="button1" value="Tıkla Beni" />
    <input type="button" id="button1" value="Tıkla Beni 2." />
</body>
</html>
