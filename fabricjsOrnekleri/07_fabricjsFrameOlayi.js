(function () {

    var canvas = window._canvas = new fabric.Canvas('c', {
        selection: false
    });

    var lowerCircle = new fabric.Circle({
        left: 240,
        top: 200,
        strokeWidth: 10,
        radius: 20,
        fill: 'red',
        stroke: 'red'
    });

    var lowerCircle2 = new fabric.Circle({
        left: 240,
        top: 800,
        strokeWidth: 10,
        radius: 20,
        fill: 'red',
        stroke: 'red'
    });

    var lowerCircle3 = new fabric.Circle({
        left: 640,
        top: 200,
        strokeWidth: 10,
        radius: 20,
        fill: 'red',
        stroke: 'red'
    });

    canvas.add(lowerCircle, lowerCircle2, lowerCircle3);

    canvas.renderAll();

    $('#up').click(function () {
        $('#viewPort')[0].scrollTop -= 100;
    });

    $('#down').click(function () {
        $('#viewPort')[0].scrollTop += 100;
    });

    $('#left').click(function () {
        $('#viewPort')[0].scrollLeft -= 50;
    });

    $('#right').click(function () {
        $('#viewPort')[0].scrollLeft += 50;
    });
    
    $('#calcOffset').click(function () {
       canvas.calcOffset();
       window.console && console.log(canvas._offset);
    });

})();