//Canvas tanımlama
////////////////////////////////////////
var canvas  = new fabric.Canvas('a', {
	perPixelTargetFind: false,
        backgroundColor: 'transparent'//,
//        backgroundColor:'#ffe6ff',
//        strokeDashArray: [3,10],
//        stroke:'red'
});

canvas.selection = false;
canvas.forEachObject(function(o) {
  o.selectable = false;
});


// kısa sorgulama işlemi
/////////////////////////////////////////
$(document).ready(function(){
// var activeObject = canvas.getActiveObject() ? canvas.getActiveObject() : false;
//console.log("1"=="2" ? "eşit" :"değil");
//for(i=0;i<=5;i++){
    setInterval(function (){
//    console.log("tekrar ediyor");
    var dateWithTime = new Date();
    console.log("Saat Şuan "+dateWithTime.getHours()+" : "+dateWithTime.getMinutes()+" : "+dateWithTime.getSeconds()+"  -  "+dateWithTime.getDay()+" / "+dateWithTime.getMonth()+" / "+dateWithTime.getFullYear());
    },1000);

//}
});
//var dateWithTime = new Date();
//console.log("Saat Şuan :"+dateWithTime.getDate());
//console.log(dateWithTime.getDate());
//yenilemeli saat göstergesi


canvas.selection=true;
//console.log("Canvas Yüksekliği= "+canvas.height+" pxl");
//console.log("Canvas Genişliği= "+canvas.width+" pxl");
/////////////////////////////////////////////////////////////////////
//obje seçme alıştırması
$("#btnSelectLeft").click(function(){
console.log("Sol Seçildi");
canvas.setActiveObject(canvas.item(0));
});
$("#btnSelectRight").click(function(){
console.log("Sağ Seçildi");
canvas.setActiveObject(canvas.item(1));
});

$("#btnDeleteObject").click(function(){
canvas.remove(canvas.getActiveObject());
//renderAll();
});

$("#btnIcerik").click(function(){
  console.log(canvas.getActiveObject().left);
/*console.log(.length);
console.log(canvas.getActiveGroup(getObjects().length));*/
});





$("#btnSelectAll").click(function(){
//console.log("Tümü Seçildi");
//console.log(canvas.getObjects().length) //canvas üzerindedi nesne sayısı
//console.log(canvas.getObjects());
//canvas.setActiveObject(canvas.getObjects());
 
for(var i=0;i>canvas.getObjects().length;i++){
 console.log(i); 
}
canvas.setActiveGroup(new fabric.Group(canvas.getObjects())).renderAll();
//canvas.setActiveObject(canvas.item());
});


/////////////////////////////////////////////////////////////////////
//tıklamayla güvenli alan çizgini kaybetmek
var gorunum=true;
var tutucu=$(".checkedLabel").text();

$("#chkSafeArea").change(function(){
//  console.log(chkGizleme.checked);
  if ("#chkSafeArea".checked===true) {
    //console.log("işaretli");
    //console.log(tutucu);
    $("#checkedLabel").text("Güvenli Alan Çizgileri Gizlendi");
    leftSafeAreaLine.set("stroke","transparent");
    rightSafeAreaLine.set("stroke","transparent");
    canvas.renderAll();
  }
  else{
    $("#checkedLabel").text("Güvenli Alan Çizgileri Gösteriliyor");
    $("#checkedLabel").css({"background-color":"#ff6a2b","color":"white"});
    //$(".checkedLabel
    setTimeout(function(){
    $("#checkedLabel").text("Güvenli Alanları Gizle");
    $("#checkedLabel").css({"background-color":"transparent","color":"black"});
    leftSafeAreaLine.set("stroke","red");
    rightSafeAreaLine.set("stroke","red");
    canvas.renderAll();
    },1000);
    //console.log("işaretsiz");

  }
// /*/*  if (gorunum===true) {
//     gorunum=false;
// /*    leftSafeAreaLine.set("stroke","transparent");
//     rightSafeAreaLine.set("stroke","transparent");*/
//     //katlamaCizgisi.set("stroke","transparent");
//     canvas.renderAll();
//     //console.log(gorunum+" -- gorunum kapatıldı");
//   }
//   else{
//     gorunum=true;
// /*    leftSafeAreaLine.set("stroke","red");
//     rightSafeAreaLine.set("stroke","red");*/
//     //katlamaCizgisi.set("stroke","red");
//     canvas.renderAll();
//     //console.log(gorunum+" -- gorunum açıldı");
//   }*/*/

});

////////////////////////////////////////////////////////////////////

var aktif="left";
canvas.on('mouse:move', function(evn) {
  if(evn.e.offsetX > 0 && evn.e.offsetX <=510){
    //console.log("solda");
aktif="left";
selected();
  }
  else{
   // console.log("sağda");
aktif="right";
selected();
  }

function selected(){
if(aktif==="left"){
  console.log("solda");
}else{
  console.log("sagda");
}}

/*console.log("x=  "+evn.e.offsetX);
console.log("y=  "+evn.e.offsetY);*/
});

function duplicateObj() {
  var obj = canvas.getActiveObject();
  var clone = fabric.util.object.clone(obj);
  clone.set({left: 100,top: 100});
  canvas.add(clone);
}

//sürükleyip kopyalama
//////////////////////////////////////////////////////////////////////
canvas.on('mouse:up', function() {
  
if(aktif==="sag"){
duplicateObj();
//console.log("yazdım");
}

});


// tuşa basınca gerçekleşen foksiyonlar.
/////////////////////////////////////////////////////////////////////


var ctrlDown = false;
var canvasWrapper = document.getElementById('canvasWrapper');
canvasWrapper.tabIndex = 1000;
canvasWrapper.addEventListener('keydown', function(e) {
  console.log(e.keyCode);
//If ctrl is pressed, set ctrlDown to true
if (e.keyCode === 17) ctrlDown = true;

if (ctrlDown && e.keyCode === 86){
  console.log(e.keyCode);
}
if(e.keyCode === 46)
{
  canvas.remove(canvas.getActiveObject());
}
if(e.keyCode === 96)
{
//  alarm();
  console.log(getActiveSelection());

}
});

//deneme fonksiyonu
///////////////////////////////////////////////
function getActiveSelection() {
  var activeObject = canvas.getActiveObject() ? canvas.getActiveObject() : false;
  var activeGroup = canvas.getActiveGroup() ? canvas.getActiveGroup() : false;
  var activeSelection = activeObject || activeGroup || false;

  return activeSelection;

}
function alarm(){
  console.log("Alarm verildi");
}
  

//sol gizli kare ve sınır çizgileri belirleme
//////////////////////////////////////////////
var leftSafeAreaLine= new fabric.Rect({
  selectable:false,
  left: 10,
  top: 10,
  width: 500,
  height: 500,
  strokeDashArray: [50,10],
  evented: false,  ///olaylanması kapatıldı. sanki yokmuş gibi davranılıyor.
  /*strokeLineCap:'round',*/
  stroke:'red',
  fill:'transparent',
  opacity: 1
});

//leftSafeAreaLine.setGradient('fill', {
//  x1: 0,
//  y1: leftSafeAreaLine.height,
//  x2: leftSafeAreaLine.width,
//  y2: leftSafeAreaLine.height,
//  colorStops: {
//    0: "#c2f0f0",
//    1: "transparent"
//  }
//});


/*var katlamaCizgisi = new fabric.Rect({
  selectable:false,
  left: 500,
  top: 10,
  width: 20,
  height: 480,
//  strokeWidth : 1,
strokeDashArray: [50,10],
stroke:'red',
  //border: 1//,
  fill:'#e6ffff'//,
});*/

//sag gizli kare ve sınır çizgileri belirleme
//////////////////////////////////////////////
var rightSafeAreaLine= new fabric.Rect({
  selectable:false,
  left: 520,
  top: 10,
  width: 500,
  height: 500,
  strokeDashArray: [50,10],
  evented: false,  ///olaylanması kapatıldı. sanki yokmuş gibi davranılıyor.
  stroke:'red',
  fill:'transparent',
  opacity: 1
});

//rightSafeAreaLine.setGradient('fill', {
//  x1: 0,
//  y1: rightSafeAreaLine.height,
//  x2: rightSafeAreaLine.width,
//  y2: rightSafeAreaLine.height,
//  colorStops: {
//    0: "transparent",
//    1: "#c2f0f0"
//  }
//});


//test karesi ekleme
//////////////////////////////////////////////
var rect = new fabric.Rect({
  left: 100,
  top: 100,
  width: 100,
  height: 100,
  border: 10,
  fill:'#03a9f4'
});



//test dairesi ekleme
//////////////////////////////////////////////
var circle=new fabric.Circle({
  left:300,
  top:100,
  radius:50,
    cornerColor:'#673ab7'//,
    //scaleY: 0.5
    
  });



//test yazı eklemesi
///////////////////////////////////////////////
var text = new fabric.IText('hello !', {
  left: 300,
  top: 300,
  width: 100,
  height: 100,
  fill:'#e91e63',
  fontFamily: 'comic sans ms',
  sort: 'text',
  lockUniScaling: true,
  perPixelTargetFind: false
});



//////////////////////////////////////////////
//canvas üzerindeki objeyi görmezden gelme
//canvas.item(0).evented = false;

canvas.add(leftSafeAreaLine,rightSafeAreaLine,/*katlamaCizgisi,*/rect,text,circle);
canvas.renderAll();
//canvas.add(text);