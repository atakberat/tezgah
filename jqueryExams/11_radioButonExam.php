<html>
<head>
    <title></title>
    <script src="../js/jquery-3.2.1.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#btnSubmit').click(function(){
/*///////////////////////  radio buton kodları ///////////////////////////
                var result = $('input[type="radio"]:checked');
                if (result.length > 0) {
                    $('#divResult').html(result.val()+" - seçildi.")
                }
                else
                {
                    $('#divResult').html("Hiçbir cinisiyet seçildi.")
                }
////////////////////////////////////////////////////////////////////////*/
            });
        });
    </script>



</head>
<body style="font-family:Arial">
<!-- //////////////////////// Radio Butonlar ///////////////////////// -->
<!--     Cinsiyet :
    <input type="radio" name="gender" value="Erkek">Erkek
    <input type="radio" name="gender" value="Kadın">Kadın
    <br /><br />
    <input id="btnSubmit" type="submit" value="Gönder" />
    <br /><br />
    <div id="divResult">
    </div> -->
<!-- //////////////////////////////////////////////////////////////// -->
    Tecrübeler :
    <input type="checkbox" name="skills" value="JavaScript" />JavaScript
    <input type="checkbox" name="skills" value="jQuery" />jQuery
    <input type="checkbox" name="skills" value="C#" />C#
    <input type="checkbox" name="skills" value="VB" />VB
    <br /><br />
    <input id="btnSubmit" type="submit" value="Get Selected Skills" />
    <br /><br />
    <div id="divResult">
    </div>
</body>
</html>