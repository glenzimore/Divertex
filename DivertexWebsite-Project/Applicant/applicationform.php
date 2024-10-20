<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="applicationform.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Divertex</h1>
            <p class="tagline">Join our team and make a difference!</p>
        </div>
        <div class="contact-form" id="applicationForm">
            <h2>Application Form</h2>
            <form id="form">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" placeholder="johndoe@example.com" required>
                </div>
                <div class="form-group">
                    <label for="attachment">Attach File (PDF/DOC):</label>
                    <input type="file" id="attachment" accept=".pdf,.doc,.docx" required>
                    <p id="fileName" class="file-name"></p>
                </div>
                <button type="submit">Submit Application</button>
            </form>
            <div id="output" class="output"></div>
        </div>
    </div>
    <script src="applicationform.js"></script>
</body>
</html>