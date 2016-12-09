
$(document).ready(function(){
    $("#btnSubmit").click(function(){
        var btnSubmit = document.getElementById("btnSubmit");
        var btnLoading = document.getElementById("btnLoading");
        btnSubmit.disabled = true;
        btnSubmit.style.display = "none";
        btnLoading.style.display = "inline-block";
        var connectCode = $("#connectCode").val();
        
        $.post("connect-code.php", {advisor_code: connectCode },
        	function(data, status){
        		if(data.status == "0")
        			alert(data.message);
        		else if(data.status == "1")
        			window.location.replace(data.url);
        	        btnSubmit.disabled = false;
        	        btnSubmit.style.display = "inline-block";
        	        btnLoading.style.display = "none";
        	});
    });
});