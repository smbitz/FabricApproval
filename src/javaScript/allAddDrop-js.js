function CheckData(){
	if(document.AddDrop.id.value == "")
	{
		alert('Please input id data.');
		document.AddDrop.id.focus();
		return false;
	}
	if(document.AddDrop.fullname.value == "")
	{
		alert('Please input fullname data.');
		document.AddDrop.fullname.focus();
		return false;
	}
	document.AddDrop.submit();
}