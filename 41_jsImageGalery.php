<!-- 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 -->

 <html>
     <head>
     <title>Uygulama Tezgahı</title>
     <style type="text/css">
         .imgStyle{
             height: 100px;
             width: 100px;
             border: 3px solid  grey;           
         }
         
     </style>
 </head>
 <body>
 <img height="540px" width="540px" style="border: 3px solid  grey" src="/images/sample01.jpg" id="anaImg" />
 <br/>
 <div   id="ornekDiv" onclick="resimDegistirme(event)">
 <img class="imgStyle" src="images/sample01.jpg"/>
 <img class="imgStyle" src="images/sample02.jpg"/>
 <img class="imgStyle" src="images/sample03.jpg"/>
 <img class="imgStyle" src="images/sample04.jpg"/>
 <img class="imgStyle" src="images/sample05.jpg"/>
 </div>
 <script type="text/javascript">
      function resimDegistirme(event){

          var images=document.getElementById("ornekDiv").getElementsByTagName("img");
          for (var i=0; i<images.length; i++)
          {
              images[i].onmouseover= function()
              {
                  this.style.cursor="hand";
                  this.style.borderColor="yellow";
//                  this.style.border="10px solid yellow";
              }
              images[i].onmouseout= function()
              {
                  this.style.cursor="pointer";
                  this.style.borderColor="grey";
//                  this.style.border="3px solid";
              }
              
//                      console.log("sayı- "+i);
          }
          
          event = event || window.event;
          var hedefEleman=event.target||event.srcElement;
          if (event.target.src){
//              console.log(images);
                document.getElementById("anaImg").src= hedefEleman.getAttribute("src");
          } else{
                document.getElementById("anaImg").src="images/not_allowed.gif";
              console.log("yok");
//              console.log(images);
          }
      }
 </script>
 </body>
</html>

