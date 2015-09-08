


$(function(){
    $.ajax({
        type: "POST",
        url: "",
        data: { ajax: 1 },
        success: function(data){
            var imagearray = [];
            var arr = $.parseJSON(data);
            for(var i =0; i < arr.length; i++){
                var item = [];
                item.push(arr[i]);
                imagearray.push(item);
            }
            
            var mygallery=new simpleGallery({
                wrapperid: "simplegallery1", //ID of main gallery container,
                dimensions: [745, 280], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
                
                imagearray: imagearray,
               
                autoplay: [true,2500,2], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
                persist: false, //remember last viewed slide and recall within same session?
                fadeduration: 500, //transition duration (milliseconds)
                oninit:function(){ //event that fires when gallery has initialized/ ready to run
                    //Keyword "this": references current gallery instance (ie: try this.navigate("play/pause"))
                },
                onslide:function(curslide, i){ //event that fires after each slide is shown
                    //Keyword "this": references current gallery instance
                    //curslide: returns DOM reference to current slide's DIV (ie: try alert(curslide.innerHTML)
                    //i: integer reflecting current image within collection being shown (0=1st image, 1=2nd etc)
                }
            });
        },
        error: function(xhr){
            console.error(xhr.message);
        }
    });
});