//Aktif bölüm seçilmesi
$( "#myCanvas" ).mousemove(function( event ) {
//myCanvas.addEventListener('mousemove', function() {
  console.log("başladı");
        // var mousePos = getMousePos(canvas, evt);
        // var message = 'Mouse position: ' + mousePos.x + ',' + mousePos.y;
        // writeMessage(canvas, message);
      });

// function writeMessage(canvas, message) {
//         var context = canvas.getContext('2d');
//         context.clearRect(0, 0, canvas.width, canvas.height);
//         context.font = '18pt Calibri';
//         context.fillStyle = 'black';
//         context.fillText(message, 10, 25);
//       }
//       function getMousePos(canvas, evt) {
//         var rect = canvas.getBoundingClientRect();
//         return {
//           x: evt.clientX - rect.left,
//           y: evt.clientY - rect.top
//         };
//       }

      




//Canvas oluşturma bölümü

var canvas= new fabric.Canvas('myCanvas');

canvas.setHeight($(".parent").height());
canvas.setWidth($(".parent").width());
// canvas.bringToFront();

$(".btnList ul li a.bg").on("click",function(){
  var src = $(this).data("id");
    $('.leftContent').css('backgroundImage','url('+src+')');
    $('.leftContent').css('background-size','100% 100%;');
});
$("#btnSagDegistir").on("click",function(){
  src = $(this).data("id");
    $('.rightContent').css('backgroundImage','url('+src+')');
});

//var gorunum=true;

$("#chkSafeArea").change(function(){
  if (chkSafeArea.checked===true) {
    //console.log("işaretli");
       $('.subParent, .centerContent').css('border-color','transparent');
  }
  else{
      $('.subParent, .centerContent').css('border-color','red');
  }});


var rect1 = new fabric.Rect({
  left: 20,
  top: 20,
  width: 100,
  height: 100,
  border: 10,
  fill:"red"
});

var rect2 = new fabric.Rect({
  left: 25,
  top: 25,
  width: 100,
  height: 100,
  border: 10,
  fill:"white"
});

var rect3 = new fabric.Rect({
  left: 30,
  top: 30,
  width: 100,
  height: 100,
  border: 10,
  fill:"blue"
});

var circle=new fabric.Circle({
  left:300,
  top:100,
  radius:50,
    cornerColor:'#673ab7'
    
  });

var text = new fabric.IText('hello !', {
  left: 300,
  top: 300,
  fill:'#e91e63',
  fontFamily: 'comic sans ms',
  sort: 'text',
  lockUniScaling: true,
  perPixelTargetFind: false
});



canvas.add(rect1,rect2,rect3,circle,text);
canvas.renderAll();