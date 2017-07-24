$(document).ready(function() {
    
    var canvases = {
        canvas1 : new fabric.Canvas('canvas1', {backgroundColor: '#fcaeb2'}),
        canvas2 : new fabric.Canvas('canvas2', {backgroundColor: '#a8e8f4'})
    };
                  
    var text = new fabric.Text('Hello world!', { left: 0,
            top : 0,
            fontSize: 30,
            fontFamily: 'Arial',
            fill: 'black',
            textAlign: 'left',
            hasControls: true,
            lockUniScaling: true,
            borderColor: '#fff',
            cornerColor: '#fff' 
    });
    
    var activeObject, initialCanvas;
    
    canvases.canvas1.add(text);
    
    canvases.canvas1.on('mouse:down', function() {
        if(this.getActiveObject()) {
            activeObject  = $.extend({}, this.getActiveObject());
            initialCanvas = this.lowerCanvasEl.id;
        }
    });
        canvases.canvas2.on('mouse:down', function() {
        if(this.getActiveObject()) {
            activeObject  = $.extend({}, this.getActiveObject());
            initialCanvas = this.lowerCanvasEl.id;
        }
    });
    
    $(document).on('mouseup', function(evt) {
        if(evt.target.localName === 'canvas' && initialCanvas) {
            canvasId = $(evt.target).siblings().attr('id');
            if(canvasId !== initialCanvas) {
                canvases[canvasId].add(activeObject);
                canvases[canvasId].renderAll();
                // these two lines will make the original object snap back to whatever position you define
                canvases[initialCanvas].getActiveObject().setTop(0);
                canvases[initialCanvas].getActiveObject().setLeft(0);
            }
        }
        initialCanvas = '';
        activeObject  = {};                 
    });    
});