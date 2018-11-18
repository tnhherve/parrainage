

$(function(){
	
   var $popoverInbox = $('#example').popover({
        title: 'TNHervé',
        placement: 'bottom',        
        template: 
        	'<div class="popover-inner">'+
        	'<h3 class="popover-title">Example</h3>'+
        	'<div class="popover-content">'+
        	'<button type="button" class="btn btn-primary">Primary</button>'+
			'<button type="button" class="btn btn-secondary">Secondary</button>'+
        	'</div>',
        html: true,
        container: false,
        animation: true

    });
 
   
 
});