var canvas  = new fabric.Canvas('a', {
	perPixelTargetFind: false,
        backgroundColor: 'transparent',
//        backgroundColor:'#ffe6ff',
//        strokeDashArray: [3,10],
//        stroke:'red'
});
canvas.selection=true;
console.log("Canvas Yüksekliği= "+canvas.height+" pxl");
console.log("Canvas Genişliği= "+canvas.width+" pxl");

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
  left: 500,
  top: 0,
  width: 20,
  height: 502,
  strokeWidth : 1,
  strokeDashArray: [10,2],
  stroke:'red',
  //border: 1//,
  fill:'#e6ffff'//,
});


var sagSinirKutusu= new fabric.Rect({
  selectable:false,
  left: 510,
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

canvas.add(solSinirKutusu,sagSinirKutusu,katlamaCizgisi,rect,text,circle);
canvas.renderAll();
//canvas.add(text);