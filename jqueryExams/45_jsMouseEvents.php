<!-- 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 -->

 <html>
     <head>
     <title>Uygulama Tezgahı</title>
      <script>
          var alan="txtArea1";
     function logEvent(event){
         event = event || window.event;
//       console.log(event);
         if(event.type=="mousemove"){
             alan="txtArea2";
//               console.log(event);
         }else{
             alan="txtArea1";
         }
         document.getElementById(alan).value += event.type + "\r\n";
     }
     function clearText(){
         document.getElementById("txtArea1").value = "";
         document.getElementById("txtArea2").value = "";
     }
     </script>
     
 </head>
 <body>
 <input type="button"   value="Tek, Çift veya Sağ Tıklama" 
        onmousedown="logEvent(event)"
        onmouseup="logEvent(event)"
        onclick="logEvent(event)"
        onmouseover="logEvent(event)"
        onmouseout="logEvent(event)"
        ondblclick="logEvent(event)"
        oncontextmenu="logEvent(event)"
        onmousemove="logEvent(event)"
        />
 <input type="button"   value="Temizle" onclick="clearText()"/>
 <br/><br/>
 <textarea id="txtArea1"    rows="10"   cols="20"></textarea>
 <textarea id="txtArea2"    rows="10"   cols="20"></textarea>
 </body>
</html>

