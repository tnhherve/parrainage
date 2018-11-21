

$(function(){
	
   var $popoverInbox = $('#example').popover({
        title: 'TNHervé',
        placement: 'bottom',        
        template: 
        	'<div class="popover-inner">'+
        	'<h5 class="popover-title">TNHervé</h5>'+
        	'<div class="popover-content">'+
        	'<a href="#" type="button" class="btn btn-primary btn-sm">Mon profil</a>'+
			'<a href="#" type="button" class="btn btn-secondary btn-sm">Deconnxion</a>'+
        	'</div>',
        html: true,
        container: false,
        animation: true

    });
 
   
 
});