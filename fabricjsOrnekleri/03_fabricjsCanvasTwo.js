$(".btnList ul li a.bg").on("click",function(){
  var src = $(this).data("id");
    $('.leftContent').css('backgroundImage','url('+src+')');
    console.log($(this).data("denemeAlani"))
});
$("#btnSagDegistir").on("click",function(){
  var src = $(this).data("id");
    $('.rightContent').css('backgroundImage','url('+src+')');
    console.log($(this).data("denemeAlani"))
});

$("#myCanvas").width($(".parent").width());
$("#myCanvas").height($(".parent").height());    



var canvas  = new fabric.Canvas('#myCanvas', {

});

var rect = new fabric.Rect({
  left: 100,
  top: 100,
  width: 100,
  height: 100,
  border: 10,
  fill:'#03a9f4'
});