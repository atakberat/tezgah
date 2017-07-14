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
    
        <script>
            $(document).ready(function()
            {
                //$versiyon = jQuery.fn.jquery;
                //console.log($versiyon);

            });
        </script>    
    

</head>
<body>
<div>CDN JQuery kaynağının yerelde depolanması yerine, nette depolanması ve sayfa yuklenirken çağırılması anlamına gelmektdir.</br>
    <ul> Avantajları:
        <li>dosya boyutunu ve karmaşıklığı azaltır.</li>
        <li>sunucuda ki veri transfer yükünü azaltır, jquery dosyası farklı sunucudan çekilir</li>
        <li>yakın lokasyonlarda seçilen cdnlerde sayfa yuklenme hızı artar, yüklenme süresi azalır</li>
        <li>jquery kütüphanesi sayfaya ilk girildiğinde ara bellekleneceği için tekrar yüklenme ihtiyacı duymaz.</li>
        <li>bazı web browserler aynı anda bir sunucudan belli sayıda downloada izin veriyorsa, cdn serverdan pararlel downloadla sayfa hızı arttırılabilir.</li>
    </ul>
    <ul>Dezavantajları:
        <li>Eğer bazı firewallarda cdn serverlar yasaklanmışsa sayfanın çalışması engellenebilir.</li>
    </ul>
    </br>
    <div class="divVersiyonJquery">JQuery Versiyonu: 
        <script>
            document.write(jQuery.fn.jquery);
            //document.write("#versiyon");
        </script>
    </div>
        <div class="divVersiyonJqui">JQuery Ui Versiyonu: 
        <script>
            document.write($.ui.version);
            //document.write("#versiyon");
        </script>
    </div>
    </div>
</body>
</html>
