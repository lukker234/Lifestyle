console.log("hallo, its me");

var valueCheck;


//Page transition
$(window).mousedown(function(e) {
	
    clearTimeout(this.downTimer);
    this.downTimer = setTimeout(function() {
    	if (valueCheck == 'true') {
	        // alert('mousedown > 2 sec');
	        $( "#scanfinger" ).fadeOut( "slow", function() {});
	        $( "#finger" ).fadeIn( "slow", function() {});
	        $.get('dbCheck.php?setValue=false', function(data){
				console.log(data);
		   	});
        };
    }, 2000); 
}).mouseup(function(e) {
    clearTimeout(this.downTimer); 
});


//Ajax database checkup
function poll(){
   	$.get('dbCheck.php', function(data){
		console.log(data);
		if (data > 0) { valueCheck = 'true'}
		else { valueCheck = 'false'}
   	});
};
setInterval(poll, 5000);