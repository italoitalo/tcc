with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Deve escrever um nome de usuario");
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Deve escrever sua senha");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
