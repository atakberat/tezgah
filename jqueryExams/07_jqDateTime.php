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
    
    <link href="../js/jquery-ui.css" rel="stylesheet"/>

        <script type="text/javascript">
        ///////         jquery ile oluşturulmuş date ve time örneği       ////////////
        var container = $("#timeStamp").text();
        //var dateTime=new Date();
        $(document).ready(function(){
            setInterval(function(){
                var dateTime=new Date();
                container =dateTime.getHours() + ":" + dateTime.getMinutes() + ":" + dateTime.getSeconds();
                $("#timeStamp").text("Saat:"+container);
            },1000);
        });
        //////////////////////////////////////////////////////////////////////////////
        </script>

</head>
<body>
    <label id="timeStamp">Saat: </label>
</body>
</html>
