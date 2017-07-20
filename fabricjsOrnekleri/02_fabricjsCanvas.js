var canvas  = new fabric.Canvas('a', {
	perPixelTargetFind: false,
        backgroundColor: 'transparent'//,
//        backgroundColor:'#ffe6ff',
//        strokeDashArray: [3,10],
//        stroke:'red'
});
/////////////////////////////////////////////////////////////////////
//canvas üzerindeki objeyi görmezden gelme
//canvas.item(0).evented = false;

canvas.selection=true;
//console.log("Canvas Yüksekliği= "+canvas.height+" pxl");
//console.log("Canvas Genişliği= "+canvas.width+" pxl");
/////////////////////////////////////////////////////////////////////
//obje seçme alıştırması
$("#btnSecmeSol").click(function(){
console.log("Sol Seçildi");
canvas.setActiveObject(canvas.item(0));
});
$("#btnSecmeSag").click(function(){
console.log("Sağ Seçildi");
canvas.setActiveObject(canvas.item(1));
});
$("#btnSecmeTumu").click(function(){
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

$("#chkGizleme").change(function(){
//  console.log(chkGizleme.checked);
  if (chkGizleme.checked===true) {
    //console.log("işaretli");
    //console.log(tutucu);
    $("#checkedLabel").text("Güvenli Alan Çizgileri Gizlendi");
  }
  else{
    $("#checkedLabel").text("Güvenli Alan Çizgileri Gösteriliyor");
    $("#checkedLabel").css({"background-color":"#ff6a2b","color":"white"});
    //$(".checkedLabel
    setTimeout(function(){
    $("#checkedLabel").text("Güvenli Alanları Gizle");
    $("#checkedLabel").css({"background-color":"transparent","color":"black"});
    },1000);
    //console.log("işaretsiz");

  }
  if (gorunum===true) {
    gorunum=false;
    solSinirKutusu.set("stroke","transparent");
    sagSinirKutusu.set("stroke","transparent");
    katlamaCizgisi.set("stroke","transparent");
    canvas.renderAll();
    //console.log(gorunum+" -- gorunum kapatıldı");
  }
  else{
    gorunum=true;
    solSinirKutusu.set("stroke","red");
    sagSinirKutusu.set("stroke","red");
    katlamaCizgisi.set("stroke","red");
    canvas.renderAll();
    //console.log(gorunum+" -- gorunum açıldı");
  }

});
///////////////////////////////////////////////////////////////////


var solSinirKutusu= new fabric.Rect({
  selectable:false,
  left: 10,
  top: 10,
  width: 490,
  height: 480,
  strokeDashArray: [50,10],
  stroke:'red',
  fill:'transparent',
  opacity: 1
});

//solSinirKutusu.setGradient('fill', {
//  x1: 0,
//  y1: solSinirKutusu.height,
//  x2: solSinirKutusu.width,
//  y2: solSinirKutusu.height,
//  colorStops: {
//    0: "#c2f0f0",
//    1: "transparent"
//  }
//});


var katlamaCizgisi = new fabric.Rect({
  selectable:false,
  left: 520,
  top: 10,
  width: 20,
  height: 480,
//  strokeWidth : 1,
strokeDashArray: [50,10],
stroke:'red',
  //border: 1//,
  fill:'#e6ffff'//,
});


var sagSinirKutusu= new fabric.Rect({
  selectable:false,
  left: 530,
  top: 10,
  width: 490,
  height: 480,
  strokeDashArray: [50,10],
  stroke:'red',
  fill:'transparent',
  opacity: 1
});

//sagSinirKutusu.setGradient('fill', {
//  x1: 0,
//  y1: sagSinirKutusu.height,
//  x2: sagSinirKutusu.width,
//  y2: sagSinirKutusu.height,
//  colorStops: {
//    0: "transparent",
//    1: "#c2f0f0"
//  }
//});

var rect = new fabric.Rect({
  left: 100,
  top: 100,
  width: 100,
  height: 100,
  border: 10,
  fill:'#03a9f4'
});


var circle=new fabric.Circle({
  left:300,
  top:100,
  radius:50,
    cornerColor:'#673ab7'//,
    //scaleY: 0.5
    
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

canvas.add(solSinirKutusu,sagSinirKutusu,katlamaCizgisi,rect,text,circle);
canvas.renderAll();
//canvas.add(text);