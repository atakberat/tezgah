var canvas = new fabric.Canvas('canvas');

//Test objects on the canvas
//Circle
var circle = new fabric.Circle({
  left: 200,
  top: 150,
  radius: 30,
  fill: "#ff0072"
});
circle.hasRotatingPoint = true;

// adding triangle
var triangle = new fabric.Triangle({
  left: 130,
  top: 150,
  strokeWidth: 1,
  width: 70,
  height: 60,
  fill: '#00b4ff',
  selectable: true,
  originX: 'center'
});
triangle.hasRotatingPoint = true;

var bin;
var selectedObject;
fabric.Image.fromURL('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAA1CAIAAABuhDQnAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPPSURBVGhDzZd9U+IwEIfv+3+2Gxln9PAEcYRBURQVkVeFe9rdC2laIFsK+Pzh2Cab/ZF9Sfpr9bMpr+/r6+v5+fn+/v5vyuXl5e8U/uGx2Wwy9Pr6yjQ1KIVZ32w2e3x8xL2oiYHJmGCoS1gw6MPB7e2t+iwF5laVUfqIEcGq1WrqZw9YhKXig75bHzlUiTIfFmRZdbCVHfrIG13yALC4utnMRn2EYM9siwEX22NdrA8b1y8ODY62SCzWd4Sd88GdOs5RoO+gObeJTbkY6qOs1OLoFFZ0Rh95UHkriQfX+UTM6Ot2uzr3RCBApfxnrY+T54SbJyAgOADX+krX7NnZGTeAm5ub8/NzfbUHQS2rPlTruJFOp7NYLGQR+P7+5vHz8/Pl5eX6+lonGfG3UPWV6ykPDw/L5VJWyIPQcjHxe43qM93nBEz8nSvk4+OD6KtBNKys9qKPqtYRC3d3d/P5XFYRptMpBei/ZGXyUg0suEaT6OOarq/toHI8HrPIZDLhWn91dTUajdKVE4g+tz2dasH16kSfte1Rp29vb71e7+LiQt78SeFRtPqQ7ExmVGZG4hphoo8fra+jQRx7A5QqJeySjJoNgs5jueQW8zL6Wq0WqSb2wnA41LG0gbm6YRqKUW+9rSFJVkj0mYxJsqDFs4s0Gh1OISlJcGJdr9cRR3ytvQZJsniiT9/FQeMVSwe+86240WiQjuDKxXozEiuzPupULB00OR3Lgmg/DTA09UKxMsfX10fuE8cguA6izHGnU9PJ5IaO7SITX1N9uPjijx1CXKFXCpDR4MfEO8rUh6n+3a5QFqQUGSbvaYrtdnswGBBThqghioO6Tr0kUCUyM4ZMfzH1Z3IoSEGksFVPT0/6nELcqQz2TB4R7X5JDJn+bD3fAilsJx0xyDYftDKqxnFkzjfs9XUcHPmYiD0QTQ5ZttDtVkC/31fLaNz6iT6wHkFsuRgKoiB/+ML7+7uprYBLPlB91vspLjFxv1J6L3/JRU5kV0C0RlPaCQX3U9bVQSOcEySftBguCpSwvN8H//xUfVDuLl45yFBBKWt9qP4J35d+5cFaH1gvqpXj2p4jow/tJ9zC/OZBRh9Yb0EV4nqyT6gPyn0L74nfU3wK9MGRazmoWZ9ifeSB9YuhNDjKp52jWB9gc4RdxMUWcbBRn3DQXNyUcz479AFlVXnTYcHCas2zWx8QAjpnJSpZhKW2x9QnSp/AAbhnRmLun/0xGPQJOCBvTPdFJmNiVSaY9TmIETlEsHDP55brR/zDIy8ZYkJ8KAspr+84/Gx9q9U/+FfCZwDz5ogAAAAASUVORK5CYII=', function(img) {
  img.set({
    left: 174,
    top: 329,
    selectable: false
  });
  bin = img;
  canvas.add(img, circle, triangle);
});
canvas.on('object:selected', function(evn) {
  selectedObject = evn.target;
})


canvas.on('mouse:move', function(evn) {
console.log("x=  "+evn.e.offsetX);
console.log("y=  "+evn.e.offsetY);
});

canvas.on('mouse:up', function(evn) {
  
  var x = evn.e.offsetX;
  var y = evn.e.offsetY;
  

  if (x > bin.left && x < (bin.left + bin.width) &&
    y > bin.top && y < (bin.top + bin.height)) {
    canvas.remove(selectedObject);
  }
});
