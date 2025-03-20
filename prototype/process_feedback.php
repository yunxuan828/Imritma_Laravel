<?php
// Configuration
$recipient_email = "itadmin@ritmapres.com"; // Change this to your IT support email
$email_subject = "IT Support Feedback Submission";

// Collect form data and sanitize
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$department = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
$feedback = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$suggestions = isset($_POST['suggestions']) ? filter_var($_POST['suggestions'], FILTER_SANITIZE_STRING) : "None provided";

// Validate required fields
if (empty($name) || empty($email) || empty($department) || empty($feedback)) {
    // Redirect back to the form with an error message
    header("Location: index.html?status=error#contact");
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.html?status=invalid_email#contact");
    exit;
}

// Prepare email content
$email_content = "
<html>
<head>
    <title>IT Support Feedback</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        h2 { color: #2c7873; }
        .feedback-item { margin-bottom: 15px; }
        .label { font-weight: bold; }
    </style>
</head>
<body>
    <div class='container'>
        <h2>IT Support Feedback Submission</h2>
        <div class='feedback-item'>
            <span class='label'>Name:</span> $name
        </div>
        <div class='feedback-item'>
            <span class='label'>Email:</span> $email
        </div>
        <div class='feedback-item'>
            <span class='label'>Department:</span> $department
        </div>
        <div class='feedback-item'>
            <span class='label'>Feedback:</span><br>
            " . nl2br($feedback) . "
        </div>
        <div class='feedback-item'>
            <span class='label'>Suggestions for Improvement:</span><br>
            " . nl2br($suggestions) . "
        </div>
    </div>
</body>
</html>
";

// Set email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Send the email
$success = mail($recipient_email, $email_subject, $email_content, $headers);

// Check if mail was sent successfully
if ($success) {
    // Redirect back to the form with a success message
    header("Location: index.html?status=success#contact");
} else {
    // Redirect back to the form with an error message
    header("Location: index.html?status=error#contact");
}
?> 