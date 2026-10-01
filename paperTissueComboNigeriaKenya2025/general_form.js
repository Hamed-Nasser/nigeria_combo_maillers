
$("#req_form").validate({
	rules: {
		company:{
			required: true
		},
		ename:{
			required: true
		},
		designation:{
			required: true,
		},
		city_id_input:{
			required: true,
		},
		mobile:{
			required: true,
			intlTelNumber: true
		},
		email:{
			required: true,
			email: true
		},
		products_dealing:{
			required: true,
		}
	},
	messages: {
		company:{
			required:"Enter the company name",
		},
		ename:{
			required:"Enter the contact person name",
		},
		designation: {
			required: "Select the designation",
		},
		city_id_input: {
			required: "Select the city",
		},
		mobile: {
			required: "Enter the moblie number",
		},
		email: {
			required: "Enter the email id",
			email:"Enter the valid email id"
		},
		products_dealing:{
			required: "Products dealing in",
		}

	}
});

$.validator.addMethod("intlTelNumber", function(value, element) {
	return this.optional(element) || $(element).intlTelInput("isValidNumber");
}, "Please enter a valid Number");

$(document).ready(function(){
	var telInput = $("#mobile_no");
	// initialise plugin
	telInput.intlTelInput({
	  utilsScript: "https://st.tistatic.com/js/design2019/utils.js",
	  autoPlaceholder: true,
	  autoHideDialCode: false,
	  separateDialCode: true,
	  preferredCountries: ['in', 'us', 'gb'],
	  hiddenInput: "mobile_with_isd",
	  onSelectFlag:null,
	  customPlaceholder: function(selectedCountryPlaceholder) {
		return "Mobile Number e.g. " + selectedCountryPlaceholder;
	  }
	});
});
