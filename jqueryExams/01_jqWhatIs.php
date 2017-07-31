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
        
        
        ///////         Klasik Javascriptle oluşturulmuş buton tıklama olayı        ////////////
        
        window.onload=function(){ //Sayfa yüklendiğinde  
            if(document.addEventListener){    //olay dinleyicisi oluştur
                document.getElementById('button1').addEventListener('click',clickHandler,false);    //ie 9 ve üzeri güncel  browserlerde çalışır 
        }
                   
            else{
                //break();
                document.getElementById('button1').attachEvent('onclick',clickHandler);     //İe 6-7-8 de de çalışan geriye uyumlu kod
        }
        function clickHandler(){    //tıklamada çalışacak fonksiyon
            alert('Raw Javascript Örneği'); //mesaj kutusu
        }
        ////////////////////////////////////////////////////////////////////////////////////////
        
        
        
        
        ///////         jquery ile oluşturulmuş buton tıklama olayı        ////////////
        
        };
        $(document).ready(function(){
        $('#button2').click(function(){
            alert('jQuery Örneği'); //mesaj kutusu
        })
        });
        ////////////////////////////////////////////////////////////////////////////////////////
        
        
        
        
    </script>
    <input type="button" id="button1" value="Tıkla Beni Klasik JavaScript" />
    <input type="button" id="button2" value="Tıkla Beni Jquery" />
</body>
</html>
