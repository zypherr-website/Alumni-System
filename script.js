// CALCULATOR
let h2 = document.querySelector("h2");

let add=()=>{
	let num1 = document.querySelector(".num1").value;
	let num2 = document.querySelector(".num2").value;

	num1 = Number(num1);
	num2 = Number(num2);

	let ans = num1 + num2;
	h2.textContent = `= ${ans}`;

	alert(ans);
}

let subtract=()=>{
	let num1 = document.querySelector(".num1").value;
	let num2 = document.querySelector(".num2").value;

	num1 = Number(num1);
	num2 = Number(num2);

	let ans = num1 - num2;
	h2.textContent = `= ${ans}`;

	alert(ans);
}

let multiply=()=>{
	let num1 = document.querySelector(".num1").value;
	let num2 = document.querySelector(".num2").value;

	num1 = Number(num1);
	num2 = Number(num2);

	let ans = num1 * num2;
	h2.textContent = `= ${ans}`;

	alert(ans);
}

let divide=()=>{
	let num1 = document.querySelector(".num1").value;
	let num2 = document.querySelector(".num2").value;

	num1 = Number(num1);
	num2 = Number(num2);

	if(num2 === 0){
		alert("cannot be divided by 0")
	}
	else{
		let ans = (num1 / num2).toFixed(2);
		
		h2.textContent = `= ${ans}`;

		alert(ans);
	}
}

// TO-DO LIST
function addTask() {
    let taskInput = document.getElementById("task");
    let taskList = document.getElementById("taskList");

    if (taskInput.value !== "") {
        let listItem = document.createElement("li");
        listItem.textContent = taskInput.value;
        taskList.appendChild(listItem);
        taskInput.value = ""; // Clear input field
    }
}

