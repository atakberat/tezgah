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
        $(document).ready(function(){
            //alert($("td").length) //toplam td lerin sayısını dondurur.
            //$("tr").css("background-color","red"); //trlerin arka plannı kırmızı yapar.
            //alert($("table").html());
            /*$("table tr").each(function(){ //her table rowu için dongu şeklinde içindeki kodu çalıştırır.
                alert($(this).html());
            });*/
        //$("span , a , div").css("background-color","yellow"); //span, a ve div nesnelerine cssle arkaplanı sarı yapar.
        //$("div a").css("background-color","yellow"); div içindeki anchor ların arkaplanını sarı yapar.
        $("#table1 tr:even").css("background-color","#FF0033");
        $("#table1 tr:odd").css("background-color","#3399FF");
        $("#table2 tr:even").css("background-color","#FF0033");
        $("#table2 tr:odd").css("background-color","#3399FF");
        });
        ////////////////////////////////////////////////////////////////////////////////////////
        
        
        
        
    </script>
  <table id="table1" border="1">
        <tr>
            <td>C#</td>
            <td>ASP.NET</td>
            <td>SQL Server</td>
        </tr>
        <tr>
            <td>ADO.NET</td>
            <td>jQuery</td>
            <td>JavaScript</td>
        </tr>
        <tr>
            <td>AJAX</td>
            <td>CSS</td>
            <td>HTML</td>
        </tr>
        <tr>
            <td>VB</td>
            <td>Dot NET</td>
            <td>Visual C++</td>
        </tr>
        <tr>
            <td>Oracle</td>
            <td>Java</td>
            <td>J2EE</td>
        </tr>
    </table>
<br />
<br />
   <table id="table2" border="1">
        <tr>
            <td>Mark</td>
            <td>Mary</td>
            <td>Mike</td>
        </tr>
        <tr>
            <td>John</td>
            <td>Jade</td>
            <td>Joy</td>
        </tr>
        <tr>
            <td>Rob</td>
            <td>Roy</td>
            <td>Rachel</td>
        </tr>
        <tr>
            <td>Sam</td>
            <td>Sara</td>
            <td>Smith</td>
        </tr>
        <tr>
            <td>Todd</td>
            <td>Tom</td>
            <td>Theo</td>
        </tr>
    </table>
<br />
<br />
        <div>   
        DIV 1
        <br />
        <a href="http://youtube.com">Youtube</a>
        </div>
        <br /><br />
        <a href="http://google.com">Google</a>
        <br /><br />
        <div>DIV 2</div>
        <br /><br />
        <span>SPAN 1</span>
        <br /><br />
        <div>DIV 3</div>
</body>
</html>
