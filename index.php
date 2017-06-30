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


    </script>
    <style>
        div.ornekler {
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
        <div class="ornekler">
            Çalışma Örnekleri
                <ul id="kaynak">
                    <li data-value="ornek"><a href="01_jqWhatIs.php">01 JQuery Nedir? Ne işe yarar?</a></li>
                    <li data-value="ornek"><a href="02_jqDocumentReady.php">02 Document Ready?</a>&nbsp;&nbsp;<a href="02_jqDom_window.php">02 Dom ve window load olayı</a></li>
                    <li data-value="ornek"><a href="jqdrag.php">Draggable Nesne</a></li>
                    <li data-value="ornek"><a href="jqdrag_snap.php">Draggable Snap Olayı</a></li>
                    <li data-value="ornek"><a href="jqdrop.php">Dropabble Nesne</a></li>
                </ul>
        </div>

    </form>
    <?php
    // put your code here
    ?>
</body>
</html>
