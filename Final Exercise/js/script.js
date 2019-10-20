function validate() {
	"use strict";

	var data = [], flag = true;

	data[0] = document.registration.txtUsername.value;

	data[1] = document.registration.txtPassword.value;
	data[2] = document.registration.txtRepeatPassword.value;
	
	data[3] = document.registration.txtFName.value;
	data[4] = document.registration.txtMName.value;
	data[5] = document.registration.txtLName.value;
	
	data[6] = document.registration.dateBirthday.value;
	
	data[7] = document.registration.gender.value;
	
	data[8] = document.registration.civilstatus.value;
	data[9] = document.registration.txtSpouse.value;
	
	data[10] = document.registration.txtContact.value;
	data[11] = document.registration.txtEmail.value;

	if (data[0]  === "") {
		document.registration.txtUsername.style.border = "1px solid red";
		flag = false;
	} else {
		document.registration.txtUsername.style.border = "1px solid #A0B3B0";
	}

	if (data[1]  === "") {
		document.registration.txtPassword.style.border = "1px solid red";
		flag = false;
	} else {
		document.registration.txtPassword.style.border = "1px solid #A0B3B0";
	}

	if (data[2] !== data[1] || data[2] === "") {
		document.registration.txtRepeatPassword.style.border = "1px solid red";
		flag = false;
	} else {
		document.registration.txtRepeatPassword.style.border = "1px solid #A0B3B0";
	}

	// if (data[3]  === "") {
	// 	document.registration.txtFName.style.border = "1px solid red";
	// 	flag = false;
	// } else {
	// 	document.registration.txtFName.style.border = "1px solid #A0B3B0";
	// }

	// if (data[5]  === "") {
	// 	document.registration.txtLName.style.border = "1px solid red";
	// 	flag = false;
	// } else {
	// 	document.registration.txtLName.style.border = "1px solid #A0B3B0";
	// }

	// if (data[6]  === "") {
	// 	document.registration.dateBirthday.style.border = "1px solid red";
	// 	flag = false;
	// } else {
	// 	document.registration.dateBirthday.style.border = "1px solid #A0B3B0";
	// }

	// if (data[8]  === "Married" && data[9] === "") {
	// 	document.registration.txtSpouse.style.border = "1px solid red";
	// 	flag = false;
	// } else {
	// 	document.registration.txtSpouse.style.border = "1px solid #A0B3B0";
	// }

	// if (data[10]  === "") {
	// 	document.registration.txtContact.style.border = "1px solid red";
	// 	flag = false;
	// } else {
	// 	document.registration.txtContact.style.border = "1px solid #A0B3B0";
	// }

	// if (data[11]  === "") {
	// 	document.registration.txtEmail.style.border = "1px solid red";
	// 	flag = false;
	// } else {
	// 	document.registration.txtEmail.style.border = "1px solid #A0B3B0";
	// }

	if (flag === true) {
		alert("wa kasabot code!");
		window.location.href = "../php/addData.php";
		return flag;
	} else {
		// return flag;
		alert("mao jud! wa kasabot code!");
		window.location.href = "../pages/registration.php";
		return flag;
	}
}

function validateUsername() {
	"use strict";

	var data = document.registration.txtUsername.value;
	if (data  === "" || data.length < 7) {
		document.registration.txtUsername.style.border = "1px solid red";
		return false;
	} else {
		document.registration.txtUsername.style.border = "1px solid #A0B3B0";
		return true;
	}
}

function resetUsername() {
	"use strict";

	document.registration.txtUsername.style.border = "1px solid #2196F3";
}

function validatePassword() {
	"use strict";

	var data = document.registration.txtPassword.value;
	if (data  === "") {
		document.registration.txtPassword.style.border = "1px solid red";
		return false;
	} else {
		document.registration.txtPassword.style.border = "1px solid #A0B3B0";
		return true;
	}
}

function resetPassword() {
	"use strict";

	document.registration.txtPassword.style.border = "1px solid #2196F3";
}

function validateRepeatPassword() {
	"use strict";

	var data = document.registration.txtPassword.value, data2 = document.registration.txtRepeatPassword.value;


	if (data2 !== data || data2 === "") {
		document.registration.txtRepeatPassword.style.border = "1px solid red";
	} else {
		document.registration.txtRepeatPassword.style.border = "1px solid #A0B3B0";
	}
}

function resetRepeatPassword() {
	"use strict";

	document.registration.txtRepeatPassword.style.border = "1px solid #2196F3";
}

function validateFName() {
	"use strict";
	
	var data = document.registration.txtFName.value;
	if (data  === "") {
		document.registration.txtFName.style.border = "1px solid red";
		return false;
	} else {
		document.registration.txtFName.style.border = "1px solid #A0B3B0";
		return true;
	}
}

function resetFName() {
	"use strict";

	document.registration.txtFName.style.border = "1px solid #2196F3";
}

/*function validateMName() {
	"use strict";
	
	var data = document.registration.txtMName.value;
	if (data  === "") {
		document.registration.txtMName.style.border = "1px solid red";
		return false;
	} else {
		document.registration.txtMName.style.border = "1px solid #A0B3B0";
		return true;
	}
}

function resetMName() {
	"use strict";

	document.registration.txtMName.style.border = "1px solid #2196F3";
}*/

function validateLName() {
	"use strict";
	
	var data = document.registration.txtLName.value;
	if (data  === "") {
		document.registration.txtLName.style.border = "1px solid red";
		return false;
	} else {
		document.registration.txtLName.style.border = "1px solid #A0B3B0";
		return true;
	}
}

function resetLName() {
	"use strict";

	document.registration.txtLName.style.border = "1px solid #2196F3";
}

function validateBirthday() {
	"use strict";
	
	var data = document.registration.dateBirthday.value;
	if (data  === "") {
		document.registration.dateBirthday.style.border = "1px solid red";
		return false;
	} else {
		document.registration.dateBirthday.style.border = "1px solid #A0B3B0";
		return true;
	}
}

function resetBirthday() {
	"use strict";

	document.registration.dateBirthday.style.border = "1px solid #2196F3";
}

function validateSpouse() {
	"use strict";
	
	var data = document.registration.txtSpouse.value, civilstatus = document.registration.civilstatus.value;
	if (civilstatus  === "Married" && data === "") {
		document.registration.txtSpouse.style.border = "1px solid red";
		document.registration.txtSpouse.style.display = "block"
		document.registration.txtSpouse.placeholder = "Spouse Name*"
		return false;
	} else {
		document.registration.txtSpouse.style.border = "1px solid #A0B3B0";
		return true;
	}

	if (civilstatus != "Married") {
		document.registration.txtSpouse.style.display = "none"
	}
}

function resetSpouse() {
	"use strict";

	document.registration.txtSpouse.style.border = "1px solid #2196F3";

	if (civilstatus != "Married") {
		document.registration.txtSpouse.style.display = "none"
	}
}

function validateContact() {
	"use strict";
	
	var data = document.registration.txtContact.value;
	if (data  === "") {
		document.registration.txtContact.style.border = "1px solid red";
		return false;
	} else {
		document.registration.txtContact.style.border = "1px solid #A0B3B0";
		return true;
	}
}

function resetContact() {
	"use strict";

	document.registration.txtContact.style.border = "1px solid #2196F3";
}

function validateEmail() {
	"use strict";
	
	var data = document.registration.txtEmail.value;
	if (data  === "") {
		document.registration.txtEmail.style.border = "1px solid red";
		return false;
	} else {
		document.registration.txtEmail.style.border = "1px solid #A0B3B0";
		return true;
	}
}

function resetEmail() {
	"use strict";

	document.registration.txtEmail.style.border = "1px solid #2196F3";
}