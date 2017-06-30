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
    
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link href="js/jquery-ui.css" rel="stylesheet"/>
    <script type="text/javascript">
        var uyari=0;
        $(document).ready(function(){
            $("#kaynak li").draggable({
                helper: 'clone',
                revert:'invalid'
            });
            
            $("#divUlkeler").droppable({
                accept:'li[data-value="ulke"]',
                over: function(event,ui){
                   console.log(uyari++); 
                },
                drop: function(event,ui){
                    $("#ulkeler").append(ui.draggable);     
                }
            });
            $("#divSehirler").droppable({
                accept:'li[data-value="sehir"]',
                over: function(event,ui){
                   console.log(uyari--); 
                },
                drop: function(event,ui){
                    $("#sehirler").append(ui.draggable);
                }
            });
            
        });

    </script>
    <style>
        div.dragOrnegi {
            border: 3px solid black;
            font-size: 25px;
            background-color: lightgray;
            width: 250px;
            padding: 5px;
            display: inline-table;
        }

        li {
            font-size: 20px;
        }
    </style>
</head>
<body style="font-family: Arial">
    <form id="form1" runat="server">
        <div class="dragOrnegi">
            Ülkeler Ve Şehirler
                <ul id="kaynak">
                    <li data-value="ulke">Türkiye</li>
                    <li data-value="ulke">Hindistan</li>
                    <li data-value="ulke">Zimbabwe</li>
                    <li data-value="sehir">Ankara</li>
                    <li data-value="sehir">Delhi</li>
                    <li data-value="sehir">Harare</li>
                </ul>
        </div>

        <div class="dragOrnegi" id="divUlkeler">
            Ülkeler
            <ul id="ulkeler"></ul>
        </div>

        <div class="dragOrnegi" id="divSehirler">
            Şehirler
            <ul id="sehirler"></ul>
        </div>
    </form>
    <?php
    // put your code here
    ?>
</body>
</html>
