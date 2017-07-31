<html>
<head>
    <title></title>
    <script src="../js/jquery-3.2.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        // $('input').each(function () { //sadece input tagı olanlar
        // $(':input').each(function () { //input tagı olmasada input (bilgi girişi) olan her element
        $('input[type="text"]').each(function () { //input tagı olanlar arasında type'ı text olanlar
            console.log($(this).val());
        });
    });
</script>
</head>
<body style="font-family:Arial">
    İsim : <input type="text" value="Berat" />
    <br /><br />
    Soyisim : <input type="text" value="Atak" />
    <br /><br />
    Cinsiyet :
    <input type="radio" name="gender" checked="checked" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br /><br />
    Tecrübeler :
    <input type="checkbox" name="skills" checked="checked"
           value="JavaScript" />JavaScript
    <input type="checkbox" name="skills" checked="checked"
           value="jQuery" />jQuery
    <input type="checkbox" name="skills" value="C#" />C#
    <br /><br />
    Ülke:
    <select>
        <option selected="selected" value="turkiye">Türkiye</option>
        <option value="amerika">Amerika</option>
        <option value="hindistan">Hindistan</option>
        <option value="ingiltere">İngiltere</option>
    </select>
    <br /><br />
    Özet :
    <br />
    <textarea>
Javascript ve frameworklerini öğrenmeye çalışan bir acemiyim.</textarea>
    <br /><br />
    <input type="submit" value="Gönder" />
</body>
</html>