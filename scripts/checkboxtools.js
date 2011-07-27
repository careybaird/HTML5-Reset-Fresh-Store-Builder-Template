function unCheck(form, group)
{
	form.getInputs('checkbox').each(
		function (elem)
		{
			if (elem.id.indexOf(group) > -1) elem.checked = false;
		}
	);
}



function checkAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = true ;
}

function uncheckAll(field, allfield)
{
	for (i = 0; i < field.length; i++)
	{
		field[i].checked = false ;
	}
	
	allfield.checked = true;
}

function checkForAllTicked(field, allfield)
{
	var checkall = true;
	for (i = 0; i < field.length; i++)
	{
		if (field[i].checked) checkall = false;
	}
	allfield.checked = checkall;
}