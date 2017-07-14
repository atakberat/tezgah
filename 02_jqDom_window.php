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
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <!--<script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.js"></script>-->
 
    <!--<script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    
    <script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>-->
    
    <link href="js/jquery-ui.css" rel="stylesheet"/>
    <script type="text/javascript">
        
        ///////                           jquery kısım                              ////////////
        $(window).load(function(){   //sayfa tam yüklendiğinde
            //alert('Window Loaded'); //mesaj kutusu
            console.log("geldi");
            $("#div1").html("Yukseklik: " + $("#img1").height() + " piksel </br>"+"Genislik: " + $('#img1').width() + " piksel");
        });
        $(document).ready(function(){   //sayfa tam yüklendiğinde
            //alert('Dom Ready'); //mesaj kutusu
        });
        ////////////////////////////////////////////////////////////////////////////////////////    
        
    </script>
</head>
<body>
<div id="div1"></div>
<img id="img1" src="images/120x70.gif" alt=""/>
</body>
</html>
