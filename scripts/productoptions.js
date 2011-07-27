var populatedoptions = new Object();

function populateOptions(product_id, from)
{
	var to = from + 1;
	var topopulate = 'productoption_'+to;
	var tolabel = 'productoptionlabel_'+to;
	var fromelement = 'productoption_'+from;
	
	//record this population
	populatedoptions[$(fromelement).name] = $(fromelement).value;
	
	// Reset any other dropdowns after this one
	resetOptions(to);
	
	// Put selected options into a string
	var populatedoptionsstring = '';
	for (i in populatedoptions)
	{
		populatedoptionsstring += i+'|'+populatedoptions[i]+'~';
	}
	
	if ($(topopulate))
	{		
		
				
		// Old Text for the Label
		var oldlabeltext = $(tolabel).innerHTML;
	
		// Get data for the dropdown
		new Ajax.Updater(topopulate, window.siteurl+'/ajax/product_getoptionvalues.php',{
		method:'post',
		parameters: {id: product_id, option: $(topopulate).name, populatedoptions: populatedoptionsstring},
		onLoading:function(){
			$(topopulate).disable();
			$(tolabel).innerHTML = '<img src="/icons/common_loading.gif" /> Please Wait...';
			},
		onComplete:function(){
			$(topopulate).enable();
			$(tolabel).innerHTML = oldlabeltext;
			}});
		
					
	}
	else
	{
		// All options chosen, get the offer details
		new Ajax.Updater('product-option-offer', window.siteurl+'/ajax/product_getofferbyoptions.php',{
		method:'post',
		parameters: {id: product_id, populatedoptions: populatedoptionsstring},
		onLoading:function(){
			$('product-option-offer').innerHTML = '<img src="'+window.siteurl+'/icons/common_loading.gif" /> Please Wait...';
			},
		onComplete:function(){}});
	}
}

function resetOptions(id)
{
	var toreset = 'productoption_'+id;
	if ($(toreset))
	{
		delete populatedoptions[$(toreset).name];
		resetOptions(id+1);
		$(toreset).disable();
	}
}

function showOptionsTable(product_id)
{
	new Ajax.Updater('product-options',window.siteurl+'/ajax/product_getoptiontable.php',{
		method:'post',
		parameters: {id: product_id},
		onLoading:function(){
			$('product-options').innerHTML = '<img src="'+window.siteurl+'/icons/common_loading.gif" /> Please Wait...';
			},
		onComplete:function(){}});
}

function showOptionsForm(product_id)
{
	new Ajax.Updater('product-options',window.siteurl+'/ajax/product_getoptionform.php',{
		method:'post',
		parameters: {id: product_id},
		onLoading:function(){
			$('product-options').innerHTML = '<img src="'+window.siteurl+'/icons/common_loading.gif" /> Please Wait...';
			},
		onComplete:function(){}});
}