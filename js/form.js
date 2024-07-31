function submitForm(){

    // Get form elements
    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone-number").value.trim();
    const address = document.getElementById("address").value.trim();
    const month = document.getElementById("month").value.trim();
    const year = document.getElementById("year").value.trim();
    const details = document.getElementById("details").value.trim();
    const card_number = document.getElementById("card-number").value.trim();

    // Check if any fields are empty
    if (!name || !phone || !address || !month || !year || !details || !card_number ) {
        alert("All fields are required.");
        return; // Stop form submission
    }

    // If all fields are filled, submit the form
    alert("Contact Information Successfully Submitted")
    this.submit();
}