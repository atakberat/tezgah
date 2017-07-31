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
    
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <link href="../js/jquery-ui.css" rel="stylesheet"/>
    <script type="text/javascript">
        var uyari=0;
        $(document).ready(function(){
            $('#draggableDiv').draggable({
                //axis:'x' //sadece x ekseninde hareket eder
                //axis:'y' //sadece y ekseninde hareket eder
                //containment:'parent'  //çerçeve içinde hareket sınırlaması
                containment:'#containerDiv',  //jquery selectorle çerçeve içinde hareket sınırlaması
                cursor: 'move', //sürüklenme başladığında imlecin şeklini değiştirir.
                opacity:"0.3",  //sürüklemeye başlanan nesneye saydamlık kazandırmak.
                revert:true     //sürüklenme sona erdiğinde, nesne başangıç noktasına döner, boolen değer alır.
            });
        });

    </script>
    <style>
        div.kutu{
            border: 1px solid orangered;
            height: 50px;
            width: 50px;
            background-color: lightblue;
            color: orangered;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body style="font-family: Arial">
    <form id="form1" runat="server">
        <div id="containerDiv" style="height: 300px; width: 300px; border: 2px solid orangered"><!-- çerçeve için oluşturulan div -->
            <div class="kutu" id="draggableDiv"> <!-- suruklenen kutucugun divi -->
            Surukleme Olaylı Kutucuk
            </div>
        </div>
        
    </form>
    <?php
    // put your code here
    ?>
</body>
</html>
