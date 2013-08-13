// JavaScript Document

//Centered Window / Content on Page  
 var centered = new Control.Window($(document.body).down('[href=#centered]'),{  
     className: 'simple_window',  
     closeOnClick: true  
 });  
   
 //Relative Window / Dynamic Content  
 var relative = new Control.Window($(document.body).down('[href=#relative]'),{  
     position: 'relative',  
     className: 'simple_window',  
     closeOnClick: true  
 });  
 relative.container.insert('This content was inserted with JavaScript.');  
   
 //HoverBox  
 var relative = new Control.Window($(document.body).down('[href=#hoverbox]'),{  
     position: 'relative',  
     hover: true,  
     offsetLeft: 75,  
     width: 175,  
     className: 'tooltip'  
 });  
   
 //Relative Window / Content from Ajax  
 var ajax = new Control.Window($(document.body).down('[href=?ajax]'),{  
     className: 'simple_window',  
     closeOnClick: 'container',  
     offsetLeft: 150  
 });  
   
 //styled examples use the window factory for a shared set of behavior  
 var window_factory = function(container,options){  
     var window_header = new Element('div',{  
         className: 'window_header'  
     });  
     var window_title = new Element('div',{  
         className: 'window_title'  
     });  
     var window_close = new Element('div',{  
         className: 'window_close'  
     });  
     var window_contents = new Element('div',{  
         className: 'window_contents'  
     });  
     var w = new Control.Window(container,Object.extend({  
         className: 'window',  
         closeOnClick: window_close,  
         draggable: window_header,  
         insertRemoteContentAt: window_contents,  
         afterOpen: function(){  
             window_title.update(container.readAttribute('title'))  
         }  
     },options || {}));  
     w.container.insert(window_header);  
     window_header.insert(window_title);  
     window_header.insert(window_close);  
     w.container.insert(window_contents);  
     return w;  
 };  
   
 var styled_window_one = window_factory($('styled_window_one'));  
   
 var styled_window_two = window_factory($('styled_window_two'));  
   
 //Modal Window  
 var modal = new Control.Modal($('modal'),{  
     overlayOpacity: 0.75,  
     className: 'modal',  
    fade: true  
});  
   
 //ToolTip  
 var tooltip = new Control.ToolTip($('tooltip'),'Windows can also act as tool tips.',{  
     className: 'tooltip'  
 });  
 