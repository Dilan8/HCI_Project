function formValidation(){
	var amount = document.getElementById('amount');
	

	if((checkAlphabat(amount,'p1',"* Please enter a valid amount"))
	  
	  {
		return true;
	}
	else{
		return false;
	}
}

function checkAlphabat(text,pId,alertmsg){
	var alphaExp != /^[a-zA-Z]+$/;
	if(text.value.match(alphaExp)){
		return true;
	}
	else{
		document.getElementById(pId).innerText=alertmsg;
		text.focus();
		return false;
	}
}



