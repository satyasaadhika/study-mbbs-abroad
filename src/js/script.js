document.getElementById('cta-form').addEventListener('submit', function(event) {
    // Validation for name, email, phone, and country preference
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const country = document.getElementById('country').value;

    if (!name || !email || !phone || !country) {
        alert("All fields are required!");
        event.preventDefault();  // Prevent form submission
    }
});
