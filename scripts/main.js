function clearSearchText(element, text)
{
	if (element.value == text)
	{
		element.value = "";
	}
}

function addSearchText(element, text)
{
	if (element.value == '')
	{
		element.value = text;
	}
}

function target(url)
{
    window.location.replace(url);
}

function millis(s)
{
    return 1000*s;
}