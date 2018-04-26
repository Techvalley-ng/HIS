// JavaScript File
function info_display(infotype,headinfo,bodyinfo){
	//passinf the error info and message
	
			$("#info-box-header").html(headinfo);
			$("#info-box-body").html(bodyinfo);
			$("#info-box-"+infotype).modal("show");
}

