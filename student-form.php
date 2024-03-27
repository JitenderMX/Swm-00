<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
$student_name = $_POST["student-name"];
$student_city = $_POST["student-city"];
$student_dob = $_POST["student-dob"];
$student_profession = $_POST["student-profession"];
$student_address = $_POST["student-address"];
$second_q = $_POST["second-q"];
$student_institute = $_POST["student-institute"];
$student_level = $_POST["student-level"];
$student_number = $_POST["student-number"];
$student_email = $_POST["student-email"];
$student_education = $_POST["student-education"];
$student_query = $_POST["student-query"];

    
    // // Validate input (you can add more validation if required)
    // if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    //     echo "Please fill in all the fields.";
    //     exit;
    // }
    
    // Set the recipient email address
    $to = "jitender.work.mediax@gmail.com";
    
    // Set the email subject
    $subject = "New Student Form Submission";
    
    // Build the email content
    $email_content = `Name : $student_name \n
    City: $student_city \n
    DOB: $student_dob \n
    Profession: $student_profession \n
    Address: $student_address \n
    HAVE YOU STUDIED SPANISH BEFORE? : $second_q \n
    SELECT INSTITUTE : $student_institute \n
    SELECT LEVEL : $student_level \n
    Number: $student_number \n
    Email : $student_email \n
    Education : $student_education \n
    Query : $student_query`;
    
    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    
    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us. We'll get back to you shortly.";
        header("Location: thankyou.html");

    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}*/
?>
<?php
/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assigning values from $_POST to variables
   

    // Validate input (you can add more validation if required)
    if ($have_query === "yes") {
        $query_name = $_POST["query-name"];
        $query_number = $_POST["query-number"];
        $query_email = $_POST["query-email"];
        $query_message = $_POST["query-message"];

        // Set the recipient email address
        $to = "jitender.work.mediax@gmail.com";

        // Set the email subject
        $subject = "New Student Form Submission";

        // Build the email content
        $email_content = "Name: $query_name\n
        Number: $query_number\n
        Email: $query_email\n
        Query: $query_message";

        // Set the email headers
        $headers = "From: $query_name <$query_email>\r\n";
        // $headers .= "Reply-To: $student_email\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    }else{
        $student_name = $_POST["student-name"];
        $student_city = $_POST["student-city"];
        $student_dob = $_POST["student-dob"];
        $student_profession = $_POST["student-profession"];
        $student_address = $_POST["student-address"];
        $second_q = $_POST["second-q"];
        $student_institute = $_POST["student-institute"];
        $student_level = $_POST["student-level"];
        $student_number = $_POST["student-number"];
        $student_email = $_POST["student-email"];
        $student_education = $_POST["student-education"];
        $student_query = $_POST["student-query"];

        // Set the recipient email address
        $to = "jitender.work.mediax@gmail.com";

        // Set the email subject
        $subject = "New Student Form Submission";

        // Build the email content
        $email_content = "Name: $student_name\n
        City: $student_city\n
        DOB: $student_dob\n
        Profession: $student_profession\n
        Address: $student_address\n
        HAVE YOU STUDIED SPANISH BEFORE?: $second_q\n
        SELECT INSTITUTE: $student_institute\n
        SELECT LEVEL: $student_level\n
        Number: $student_number\n
        Email: $student_email\n
        Education: $student_education\n
        Query: $student_query";

        // Set the email headers
        $headers = "From: $student_name <$student_email>\r\n";
        // $headers .= "Reply-To: $student_email\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    }

    

  

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // echo "Thank you for contacting us. We'll get back to you shortly.";
        header("Location: thankyou.html");
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} */
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["have-query"]) && $_POST["have-query"] === "yes") {
        // Process query form submission
        $query_name = $_POST["query-name"];
        $query_number = $_POST["query-number"];
        $query_email = $_POST["query-email"];
        $query_city = $_POST["query-city"];
        $query_message = $_POST["query-message"];

        $to = "jitender.work.mediax@gmail.com";
        $subject = "New Query Form Submission";
        $email_content = "Name: $query_name\nNumber: $query_number\nEmail: $query_email\City: $query_city\nQuery: $query_message";
        $headers = "From: $query_name <$query_email>\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    } else {
        // Process student form submission
        $student_name = $_POST["student-name"];
        $student_city = $_POST["student-city"];
        $student_dob = $_POST["student-dob"];
        $student_profession = $_POST["student-profession"];
        $student_address = $_POST["student-address"];
        $second_q = $_POST["second-q"];
        $student_institute = $_POST["student-institute"];
        $student_level = $_POST["student-level"];
        $student_number = $_POST["student-number"];
        $student_email = $_POST["student-email"];
        $student_education = $_POST["student-education"];
        $student_query = $_POST["student-query"];

        $to = "jitender.work.mediax@gmail.com";
        $subject = "New Student Form Submission";
        $email_content = "Name: $student_name\nCity: $student_city\nDOB: $student_dob\nProfession: $student_profession\nAddress: $student_address\nHAVE YOU STUDIED SPANISH BEFORE?: $second_q\nSELECT INSTITUTE: $student_institute\nSELECT LEVEL: $student_level\nNumber: $student_number\nEmail: $student_email\nEducation: $student_education\nQuery: $student_query";
        $headers = "From: $student_name <$student_email>\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    }

    if (mail($to, $subject, $email_content, $headers)) {
        header("Location: thankyou.html");
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
