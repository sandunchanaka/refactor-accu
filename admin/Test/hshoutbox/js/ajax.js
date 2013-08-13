function AJAXRequest( method, url, data, process, async) {
	
    // self = this; creates a pointer to the current function
    // the pointer will be used to create a "closure". A closure
    // allows a subordinate function to contain an object reference to the
    // calling function. We can't just use "this" because in our anonymous
    // function later, "this" will refer to the object that calls the function 
    // during runtime, not the AJAXRequest function that is declaring the function
    // clear as mud, right?
    // Java this ain't
    
    var self = this;

    // check the dom to see if this is IE or not
    if (window.XMLHttpRequest) {
	// Not IE
        self.AJAX = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
	// IE
	    // loops through the various versions of XMLHTTP to ensure we're using the latest
	    var versions = ["Msxml2.XMLHTTP.7.0", "Msxml2.XMLHTTP.6.0", "Msxml2.XMLHTTP.5.0", "Msxml2.XMLHTTP.4.0", "MSXML2.XMLHTTP.3.0", "MSXML2.XMLHTTP",
                        "Microsoft.XMLHTTP"];

            for (var i = 0; i < versions.length ; i++) {
                try {
		    // try to create the object
		    // if it doesn't work, we'll try again
		    // if it does work, we'll save a reference to the proper one to speed up future instantiations
                    self.AJAX = new ActiveXObject(versions[i]);

                    if (self.AJAX) {
                        _ms_XMLHttpRequest_ActiveX = versions[i];
                        break;
                    }
                }
                catch (objException) {
                // trap; try next one
                } ;
            }
    }
    
    // if no callback process is specified, then assign a default which executes the code returned by the server
    if (typeof process == 'undefined' || process == null) {
        process = handleStateChanges;
    }

    self.process = process;

    // if no method specified, then default to POST
    if (!method) {
        method = "POST";
    }

    method = method.toUpperCase();

    if (typeof async == 'undefined' || async == null) {

        async = true;
    }

	self.AJAX.open("POST",url,true);

	self.AJAX.setRequestHeader("Connection", "close");
	self.AJAX.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	self.AJAX.setRequestHeader("Method", "POST " + url + "HTTP/1.1");

	self.AJAX.onreadystatechange = function( ) {

		if (self.AJAX.readyState == 4)
		{
		   if(self.AJAX.status == 200 )
			{		   
				var responseTextAfterAjaxCall = self.AJAX.responseText;
				self.process(self.AJAX);
			}
		}
}

self.AJAX.send(data);	
return self.AJAX;
}
