var lastMessage;
var t;

function chatReturn(responseObject) {
	var response = eval("("+responseObject.responseText+")");
	if(response.status=='OK') {
		if(response.result.length>0) {
			lastMessage = response.result[0].id;
		}
		for(i=response.result.length-1;i>=0;i--) {
			var div = document.createElement('div');
			div.style.display = 'block';
			div.innerHTML = '<b>'+response.result[i].author+'&gt;</b>&nbsp;'+response.result[i].message;
			document.getElementById('sb_chatLog').appendChild(div);
		}
	}
	t=setTimeout("getMessages()",2000);
}

function sbInit() {
	AJAXRequest("POST",way,"action=init",chatReturn,true);
}

function getMessages() {
	AJAXRequest("POST",way,"start="+lastMessage,chatReturn,true);
}

function sendReturn(responseObject) {
	var response = eval("("+responseObject.responseText+")");
	if(response.status=='SENT') {
		document.getElementById('sb_msg').value='';
		clearTimeout(t);
		getMessages();
	} else {
		document.getElementById('sb_warning').innerHTML = '<img src='+war+' alt="[warning]" />&nbsp;Please, try to resend your message.';
	}
}

function sendMessage() {
	var nickname = document.getElementById('sb_nick').value;
	var message = document.getElementById('sb_msg').value;
	document.getElementById('sb_warning').innerHTML = "&nbsp;";
	if(nickname==''||message=='') {
		document.getElementById('sb_warning').innerHTML = '<img src='+war+' alt="[warning]" />&nbsp;Please, enter nickname and message.';
	} else {
		AJAXRequest("POST",way,"action=send&nick="+nickname+"&msg="+message,sendReturn,true);
	}
}
