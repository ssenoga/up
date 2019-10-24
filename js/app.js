const id = (x) => document.getElementById(x);

// global variables

const error = id("error");

// log in variables
const usernames = id("username");
const passwords = id("password");
const btn = id("submit");

//register variables

const fname = id("fname");
const lname = id("lname");
const rEmail = id("rEmail");
const modal = id("modal");
const chasis = id("chasis");
const plate = id("plate");
const pass = id("pass");
const register = id("register");

try {
	btn.addEventListener("click",function(e){
		const send = fetch(`includes/functions.php?submit=${true}&username=${usernames.value}&password=${passwords.value}`);

		send.then(res=>{
			return res.text();
		})
		.then(data=>{
			// document.querySelector("p").innerHTML = data;
			switch(data){
				case "user":
					window.location = "home.php";
					break;
				case "admin":
					window.location = "admin/home.php";
					break;
				default:
					error.innerText = "Invalid details";
					error.style = "display: block;";
					setTimeout(function(){
						error.style = "display:none";
					},3000);
					break;
			}
		});

		y(usernames,passwords);

		e.preventDefault();
	});
}catch(e){
	// console.log(e);
}


try {
	register.addEventListener("click",function(e){
		const send = fetch(`includes/functions.php?registered=${true}&fname=${fname.value}&lname=${lname.value}&
			email=${rEmail.value}&c_modal=${modal.value}&chasis=${chasis.value}&Nplate=${plate.value}&password=${pass.value}`);

		send.then(res=>{
			return res.text();
		})
		.then(data=>{
			// document.querySelector("p").innerHTML = data;
			switch(data){
				case "sucess":
					console.log("sucessfully registered");
					window.location = "home.php";
					break;
				case "All filleds must be filled":
					console.log("All filleds must be filled");
					// window.location = "admin.php";
					break;
				default:
					console.log("Invalid details");
					break;
			}
		});

		y(fname,lname,rEmail,modal,chasis,plate,password);

		e.preventDefault();
	});
}catch(e){
	// console.log(e);
}

// a function to clear the input fields

const y = function(...x){
    x.map(d=>{
    	d.value = "";
    })
}

