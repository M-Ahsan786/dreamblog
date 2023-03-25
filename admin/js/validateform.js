<script type="text/javascript">
	function validateForm() {
  // Get the values of the input fields
  var firstName = document.form["form-control"]["firstName"].value;
  var email = document.form["form-control"]["email"].value;
  var password = document.form["form-control"]["Password"].value;
  var rePassword = document.form["form-control"]["rePassword"].value;

  // Check if all required fields are completed
  if (firstName == "" || email == "" || password == "" || rePassword == "") {
    alert("Please complete all required fields.");
    return false;
  }

  // Check if password and re-entered password match
  if (password != rePassword) {
    alert("Passwords do not match. Please try again.");
    return false;
  }

  // If all checks pass, return true
  return true;
}
</script>