function opendoc(doc)
{
	window.open(doc,"_blank");
}

function showAll(id)
{
	var itemStyle = document.getElementById(id).style;
	var act = (itemStyle.visibility == "visible") ? (1) : (0);

	if(act == 0)
	{
		itemStyle.visibility = "visible";
		itemStyle.display = "block";
	} else {
		itemStyle.visibility = "hidden";
		itemStyle.display = "none";
	}
}
