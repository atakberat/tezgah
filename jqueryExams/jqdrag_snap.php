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
 
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    
    <link href="../js/jquery-ui.css" rel="stylesheet"/>

    <script type="text/javascript">
        var uyari=0;
        $(document).ready(function(){
            $('.kutu').draggable({
                //axis:'x' //sadece x ekseninde hareket eder
                //axis:'y' //sadece y ekseninde hareket eder
                //containment:'parent'  //çerçeve içinde hareket sınırlaması
                containment:'#containerDiv',  //jquery selectorle çerçeve içinde hareket sınırlaması
                cursor: 'move', //sürüklenme başladığında imlecin şeklini değiştirir.
                opacity:"0.1",  //sürüklemeye başlanan nesneye saydamlık kazandırmak.
                //revert:true     //sürüklenme sona erdiğinde, nesne başangıç noktasına döner, boolen değer alır.
                snap:'#snapDiv', //çizgiye veya nesneya yapıştırma
                snapTolerance:20, //yapışrmak için pixel toleransı
                cancel:'#snapDiv'//, //dargabble özelliğini deaktif eetiğimiz nesne
                //stack:'.kutu' //sürükleme olayı başlayınca nesneyi üste alır
                
            });
            $('.kutu').mousedown(function(){
                var maxZindex =0;
                $(this).siblings('.kutu').each(function(){
                    var currentZindex = Number($(this).css('z-index'));
                    if(currentZindex > maxZindex)
                        maxZindex = currentZindex;
                    else
                        curentZindex = maxZindex;
                    //maxZindex = currentZindex > maxZindex ? curentZindex : maxZindex;  //yemedi
                });
                $(this).css('z-index',maxZindex + 1);
            });
        });

    </script>
    <style>
        .kutu{
            border: 2px solid black;
            
            height: 100px;
            width: 100px;
            color: white;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body style="font-family: Arial">
    <form id="form1" runat="server">
        <div id="redDiv" class="kutu" style="background-color: red"> Kırmızı Kutu
        </div>

        <div id="greeDiv" class="kutu" style="background-color: green"> Yeşil Kutu
        </div>

        <div id="blueDiv" class="kutu" style="background-color: blue"> Mavi Kutu
        </div>

        <div id="brownDiv" class="kutu" style="background-color: brown"> Kahverengi Kutu
        </div>
        
                </br>
                </br>
      
        <div id="snapDiv" style="height: 400px; width: 400px; border: 5px solid black">
        </div> 
    </form>
    <?php
    // put your code here
    ?>
</body>
</html>
