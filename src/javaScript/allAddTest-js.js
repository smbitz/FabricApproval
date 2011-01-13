// CallFullName
	   var HttPRequest = false;

	   function CallFullName() {
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
	
		  var url = 'javaScript/FullName.php';
		  var pmeters = "CusName=" + encodeURI( document.getElementById("CusName").value);

			HttPRequest.open('POST',url,true);

			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
			
			
			HttPRequest.onreadystatechange = function()
			{

				if(HttPRequest.readyState == 3)  // Loading Request
				{
					document.getElementById("ChangeFullName").innerHTML = "..";
				}

				if(HttPRequest.readyState == 4) // Return Request
				{
						document.getElementById("ChangeFullName").innerHTML = HttPRequest.responseText;
				}
				
			}

	   }
	   
	   
//  CallSupName
	   var HttPRequest = false;

	   function CallSupFull() {
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
	
		  var url = 'javaScript/SupFull.php';
		  var pmeters = "SupCode=" + encodeURI( document.getElementById("SupCode").value);

			HttPRequest.open('POST',url,true);

			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
			
			
			HttPRequest.onreadystatechange = function()
			{

				if(HttPRequest.readyState == 3)  // Loading Request
				{
					document.getElementById("ChangeSupFull").innerHTML = "..";
				}

				if(HttPRequest.readyState == 4) // Return Request
				{
						document.getElementById("ChangeSupFull").innerHTML = HttPRequest.responseText;
				}
				
			}

	   }
	   
	   
//  CallFabFull
	   var HttPRequest = false;

	   function CallFabFull() {
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
	
		  var url = 'javaScript/FabFull.php';
		  var pmeters = "FabCode=" + encodeURI( document.getElementById("FabCode").value);

			HttPRequest.open('POST',url,true);

			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
			
			
			HttPRequest.onreadystatechange = function()
			{

				if(HttPRequest.readyState == 3)  // Loading Request
				{
					document.getElementById("ChangeFabFull").innerHTML = "..";
				}

				if(HttPRequest.readyState == 4) // Return Request
				{
						document.getElementById("ChangeFabFull").innerHTML = HttPRequest.responseText;
				}
				
			}

	   }
	   
	   
//  CheckData
function CheckData(){
	if(document.NewTest.CusName.value == "")
	{
		alert('Please select Customer Name data.');
		document.NewTest.CusName.focus();
		return false;
	}
	if(document.NewTest.RefNo.value == "")
	{
		alert('Please input RefNo. data.');
		document.NewTest.RefNo.focus();
		return false;
	}
	if(document.NewTest.PoNo.value == "")
	{
		alert('Please input PoNo. data.');
		document.NewTest.PoNo.focus();
		return false;
	}
	if(document.NewTest.CusNo.value == "")
	{
		alert('Please input Customer No. data.');
		document.NewTest.CusNo.focus();
		return false;
	}
	if(document.NewTest.Style.value == "")
	{
		alert('Please input Style data.');
		document.NewTest.Style.focus();
		return false;
	}
	if(document.NewTest.Job.value == "")
	{
		alert('Please input Job data.');
		document.NewTest.Job.focus();
		return false;
	}
	if(document.NewTest.SupCode.value == "")
	{
		alert('Please select Supplier Code data.');
		document.NewTest.SupCode.focus();
		return false;
	}
	if(document.NewTest.FabCode.value == "")
	{
		alert('Please select Fabric Code data.');
		document.NewTest.FabCode.focus();
		return false;
	}
	if(document.NewTest.FabNo.value == "")
	{
		alert('Please input FabNo. data.');
		document.NewTest.FabNo.focus();
		return false;
	}
	if(document.NewTest.Fabcolor.value == "")
	{
		alert('Please input Fabcolor data.');
		document.NewTest.Fabcolor.focus();
		return false;
	}
	if(document.NewTest.BatNo.value == "")
	{
		alert('Please input BatchNo data.');
		document.NewTest.BatNo.focus();
		return false;
	}
	if(document.NewTest.Quantity.value == "")
	{
		alert('Please input Quantity data.');
		document.NewTest.Quantity.focus();
		return false;
	}
	document.NewTest.submit();
}