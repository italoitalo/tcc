with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Deve escrever um nome de usuario.");
			username.focus();
		}
		if(ok &&fullname.value==""){
			ok=false;
			alert("Deve escrever seu nome completo");
			fullname.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Deve escrever seu email");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Deve escrever sua senha");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Deve escrever sua confirmação de senha");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("As senhas não correspondem");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
