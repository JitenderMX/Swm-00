<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $who_are_you = $_POST["who-are-you"];
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email = $_POST["email"];
    $keep_me_anonymous = $_POST["keep-me-anonymous"];
    $mode = $_POST["mode"];
    $institute_location = $_POST["institute-location"];
    $improve_us = $_POST["improve-us"];
    $rating = $_POST["rating"];

    if (isset($_POST["who-are-you"]) && $_POST["who-are-you"] === "Teacher") {
        // Process query form submission
      

        $to = "jitender.work.mediax@gmail.com";
        $subject = "Teacher Feedback Submission";
        $email_content = "I am $query_name\n
        First Name: $first_name\n
        Last Name: $last_name\n
        Email: $email\n
        Keep me anonymous: $keep_me_anonymous\n
        Mode: $mode\n
        Institute Location: $institute_location\n
        How can we improve us?: $improve_us\n
        Rating: $rating\n";
        $headers = "From: $first_name $last_name <$email>\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    } else {
        $process_smooth = $_POST["process-smooth"];
        $next_level = $_POST["next-level"];
        $planning_dele = $_POST["planning-dele"];
        $dele_level = $_POST["dele-level"];
        $recommend = $_POST["recommend"];

        $to = "jitender.work.mediax@gmail.com";
        $subject = "Student Feedback Submission";
        $email_content = "I am $query_name\n
        First Name: $first_name\n
        Last Name: $last_name\n
        Email: $email\n
        Keep me anonymous: $keep_me_anonymous\n
        Mode: $mode\n
        Institute Location: $institute_location\n
        Was the admission process smooth?: $process_smooth\n
        How can we improve us?: $improve_us\n
        Rating: $rating\n
        Will you be continuing your next level with us?: $next_level\n
        Are you planning to give DELE?: $planning_dele\n
        Selected Dele Level?: $dele_level\n
        Will your recommend our spanish courses to other students?: $recommend";
        $headers = "From: $first_name $last_name <$email>\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    }

    if (mail($to, $subject, $email_content, $headers)) {
        header("Location: thankyou.html");
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
