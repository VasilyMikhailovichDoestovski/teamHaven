const validator = () =>{
	let users = ['emekaewelike@gmail.com','austinealagi@gmail.com','asamoahojugbanajeffery@gmail.com',
	'ehisedeghoghonsamuel@gmail.com','piusalenkhe@gmail.com','kruzabasi@gmail.com'];
	let passwords = ['jerryNelson', 'Austine Alagi','Vasily Mikhailovich Doestovski','Esorison','Master P','Kruzabasi'];
	let userInputValue = document.getElementById('email');
	let passwordValue = document.getElementById('password')
	const form = document.getElementById('form')

	if(userInputValue.value && passwordValue.value){
		for (let i=0; i <= users.length-1; i++ ){		
			if (userInputValue.value == users[i] && passwordValue.value == passwords[i] ){
				form.setAttribute('action','welcome.php')
				break;
			}
		}
	}else{
		alert('invalid input')
	}	
}
