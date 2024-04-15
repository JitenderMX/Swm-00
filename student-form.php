<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["have-query"]) && $_POST["have-query"] === "yes") {
        // Process query form submission
        $query_name = $_POST["query-name"];
        $query_number = $_POST["query-number"];
        $query_email = $_POST["query-email"];
        $query_city = $_POST["query-city"];
        $query_message = $_POST["query-message"];

        $to = "info@spanishwithmrityunjay.in";
        $subject = "New Query Form Submission";
        $email_content = "Name: $query_name\nNumber: $query_number\nEmail: $query_email\nCity: $query_city\nQuery: $query_message";
        $headers = "From: $query_name <$query_email>\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
       
        if (mail($to, $subject, $email_content, $headers)) {
            header("Location: thankyou.html");
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

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
        $student_fee_paid = $_POST["fee-paid"];
        $student_enrollment_level = $_POST["student-enrollment-level"];
        $student_where_you_hear = $_POST["where-you-hear-student"];
        
        $to = "info@spanishwithmrityunjay.in";
        $subject = "New Student Form Submission";
        $email_content = "Name: $student_name\nCity: $student_city\nDOB: $student_dob\nProfession: $student_profession\nAddress: $student_address\nHAVE YOU STUDIED SPANISH BEFORE?: $second_q\nSELECT INSTITUTE: $student_institute\nSELECT LEVEL: $student_level\nNumber: $student_number\nEmail: $student_email\nEducation: $student_education\nFee Paid: $student_fee_paid\nStudent Enrollment Level: $student_enrollment_level\nStudent Where You Hear: $student_where_you_hear\nQuery: $student_query";
        $headers = "From: $student_name <$student_email>\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
        // File upload handling
    if (isset($_FILES['aadhar-student-upload'])) {
        $file = $_FILES['aadhar-student-upload'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        
        // Check if file was uploaded without errors
        if ($fileError === 0) {
            // Attach the file to the email
            $boundary = md5(rand());
            $headers = "From: $student_email\r\n";
            $headers .= "Reply-To: $student_email\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
            
            // Add text data to the message
            $body = "--$boundary\r\n";
            $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
            $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
            $body .= $email_content . "\r\n";
            
            // Add attachment
            $body .= "--$boundary\r\n";
            $body .= "Content-Type: application/pdf; name=\"$fileName\"\r\n";
            $body .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
            $body .= chunk_split(base64_encode(file_get_contents($fileTmpName))) . "\r\n";
            $body .= "--$boundary--";

            // Send the email
            if (mail($to, $subject, $body, $headers)) {
                header("Location: thankyou.html");
                exit;
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "No file uploaded.";
    }
    header("Location: thankyou.html");
    }

    
}
?>
