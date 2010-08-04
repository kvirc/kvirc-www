function opendoc(doc)
{
	window.open(doc,"_blank");
}

function showAll(id)
{
	var addonStyle = document.getElementById(id).style;
	var linkText = document.getElementById("l" + id);
	var act = (addonStyle.visibility == "visible") ? (1) : (0);

	if(act == 0)
	{
		addonStyle.visibility = "visible";
		addonStyle.display = "block";
	} else {
		addonStyle.visibility = "hidden";
		addonStyle.display = "none";
	}
}
