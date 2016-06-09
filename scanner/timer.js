console.log("hallo");

$(window).mousedown(function(e) {
    clearTimeout(this.downTimer);
    this.downTimer = setTimeout(function() {
        // alert('mousedown > 2 sec');
        $( "#scanfinger" ).fadeOut( "slow", function() {});
        $( "#finger" ).fadeIn( "slow", function() {});
    }, 2000); 
}).mouseup(function(e) {
    clearTimeout(this.downTimer); 
})



