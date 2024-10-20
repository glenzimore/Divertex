// Get the file input and filename display elements
const fileInput = document.getElementById('attachment');
const fileNameDisplay = document.getElementById('fileName');

// Display the filename when a file is selected
fileInput.addEventListener('change', function() {
    const fileName = fileInput.files[0] ? fileInput.files[0].name : '';
    fileNameDisplay.textContent = fileName;
});

// Handle form submission
const form = document.getElementById('form');
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    // Simulate a successful submission (you can modify this part for actual submission)
    document.getElementById('output').textContent = `Application submitted successfully by ${name} (${email})!`;
    
    // Clear the form fields
    form.reset();
    fileNameDisplay.textContent = ''; // Clear file name display
});
