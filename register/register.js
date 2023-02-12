// var person={
//     name:" ",
//     username:" ",
//     email:" ",
//     password:" ",
// 	role:" "
// };
// var nameField = document.getElementById("name");
// var usernameField = document.getElementById("username");
// var emailField = document.getElementById("email");
// var passwordField = document.getElementById("password");
// var roleField = document.getElementById("role");

// function personData(){
//     if(person.name !=""){
//         nameField.innerText=person.name;
//     }
//     if(person.username !=""){
//         usernameField.innerText=person.username;
//     }
// 	if(person.email !=""){
//         emailField.innerText=person.email;
//         }
//     if(person.password !=""){
//         passwordField.innerText=person.password;
//     }
//     if(person.role !=""){
//         roleField.innerText=person.role;
//     }
   
// }
// personData();

// 	let name = prompt("Name");
// 	while(name==null||name==""){
// 		name = prompt("Name");
// 	}
// 	let username = prompt("Username");
// 	while(username==null||username==""){
// 		username = prompt("Username");
// 	}
// 	let email = prompt("Email");
// 	while(email==null||email==""){
// 		email = prompt("Email");
// 	}
// 	let password = prompt("Password");
// 	while(password==null||password==""){
// 		password = prompt("Password");
// 	}

// 	nameField.innerText = name;
// 	usernameField.innerText = username;
// 	emailField.innerText = email;
// 	passwordField.innerText = password;

  function registration()
	{

		var name = document.getElementById('name').value;
		var username = document.getElementById('username').value;
		var email = document.getElementById('email').value;
		var password = document.getElementById('password').value;			
		var role = document.getElementById('role').value;
		
		var password_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(name=='')
		{
			alert('Please enter your name');
		}
		else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
		}
		else if(username=='')
		{
			alert('Please enter the user name.');
		}
		else if(!letters.test(username))
		{
			alert('User name field required only alphabet characters');
		}
		else if(email=='')
		{
			alert('Please enter your user email id');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		else if(password=='')
		{
			alert('Please enter Password');
		}
		else if(!password_expression.test(password))
		{
			alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
		}
		else if(document.getElementById('password').value.length < 6)
		{
			alert ('Password minimum length is 6');
		}
		else if(document.getElementById('password').value.length > 12)
		{
			alert ('Password max length is 12');
		}
		else if(role !='admin' || 'costumer')
		{
			alert('Please select your user role');
		}		
		else
		{				                            
               alert('Thank You for Register');
			   window.location = "3BFitness"; 
		}
	}
	function clearFunc()
	{
		document.getElementById("name").value="";
		document.getElementById("username").value="";
		document.getElementById("email").value="";
		document.getElementById("password").value="";
		document.getElementById("role").value="";
	}