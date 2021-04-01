
function getRoleDropdownValue(event){
	role = document.getElementById("role").value
	console.log(role)

	// buildingDropdown = document.getElementById("building-dropdown");
	// console.log(buildingDropdown)

	// buildingDropdown.style.displpay = "block"
}

function getSubdivisionDropdownValue(event){
	subdivision = document.getElementById("subdivision").value
	console.log(subdivision)

	buildingDropdownOptions = document.getElementsByClassName("building-dropdown-option");
	console.log(buildingDropdownOptions)

	for (i=0; i<buildingDropdownOptions.length; i++){
		buildingDropdownOptions[i].disabled = true
	}

	buildingDropdown = document.getElementById("building-dropdown");
	// buildingDropdown = document.getElementsByClassName("building-dropdown-list")
	console.log(buildingDropdown)
	console.log(buildingDropdown.style.display)

	buildingDropdown.style.display = "block"

	
	console.log("building-subdivision-"+subdivision)
	buildingDropdown = document.getElementsByClassName("building-subdivision-"+subdivision);
	console.log(buildingDropdown)

	for (i=0; i<buildingDropdown.length; i++){
		buildingDropdown[i].disabled = false
	}

}