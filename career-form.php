 <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $applicant_email = $_POST["applicant-email"];
//     $applicant_name = $_POST["applicant-name"];
//     $applicant_city = $_POST["applicant-city"];
//     $applicant_dob = $_POST["applicant-dob"];
//     $applicant_profession = $_POST["applicant-profession"];
//     $applicant_address = $_POST["applicant-address"];
//     $dele_certified = $_POST["dele-certified"];
//     $dele_level = $_POST["dele-level"];
//     $specialized_in_spanish = $_POST["specialized-in-spanish"];
//     $university_name = $_POST["university-name"];
//     $latest_degree = $_POST["latest-degree"];
//     $experience_in_spanish = $_POST["experience-in-spanish"];
//     $work_place = $_POST["work-place"];
//     $time_type = $_POST["time-type"];
//     $where_you_hear = $_POST["where-you-hear"];
    
//       // Validate input (you can add more validation if required)
//       if (empty($applicant_name) || empty($applicant_email) || empty($applicant_city)) {
//         echo "Please fill in all the required fields.";
//         exit;
//     }
    
//     // Set the recipient email address
//     $to = "jitender.work.mediax@gmail.com";
    
//     // Set the email subject
//     $subject = "New Form Submission";
    
//     // Build the email content
//     $email_content =  "Applicant Name : $applicant_name\n
//     Applicant Email : $applicant_email\n
//     Applicant City : $applicant_city\n
//     Applicant DOB : $applicant_dob\n
//     Applicant Profession : $applicant_profession\n
//     Applicant Address : $applicant_address\n
//     ARE YOU DELE CERTIFIED : $dele_certified\n
//     SELECT DELE LEVEL : $dele_level\n
//     DO YOU HAVE ANY SPECIALISATION DEGREE IN SPANISH : $specialized_in_spanish\n
//     NAME OF THE UNIVERSITY : $university_name\n
//     LATEST DEGREE : $latest_degree\n
//     DO YOU HAVE PRIOR EXPERIENCE IN TEACHING SPANISH? : $experience_in_spanish\n
//     ENTER THE NAME OF PREVIOUS WORKPLACE : $work_place\n
//     DO YOU WANT TO JOIN? : $time_type\n
//     From where did you get to know about our institute? : $where_you_hear";
//     // File upload handling
//     $file = $_FILES['aadhar-upload'];
//     $fileName = $file['name'];
//     $fileTmpName = $file['tmp_name'];
//     $fileSize = $file['size'];
//     $fileError = $file['error'];
    
//     // Check if file was uploaded without errors
//     if ($fileError === 0) {
//         // Attach the file to the email
//         $boundary = md5(rand());
//         $headers = "From: " . $_POST['applicant-email'] . "\r\n";
//         $headers .= "MIME-Version: 1.0\r\n";
//         $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
        
//         // Add text data to the message
//         $body = "--$boundary\r\n";
//         $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
//         $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
//         $body .= $email_content . "\r\n";
        
//         // Add attachment
//         $body .= "--$boundary\r\n";
//         $body .= "Content-Type: application/pdf; name=\"$fileName\"\r\n";
//         $body .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
//         $body .= "Content-Transfer-Encoding: base64\r\n";
//         $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
//         $body .= chunk_split(base64_encode(file_get_contents($fileTmpName))) . "\r\n";
//         $body .= "--$boundary--";

//         // Send the email
//         if (mail($to, $subject, $body, $headers)) {
//             header("Location: thankyou.html");
//         } else {
//             echo "Oops! Something went wrong. Please try again later.";
//         }
//     } else {
//         echo "Error uploading file.";
//     }
    
//     // Set the email headers
//     // $headers = "From: $applicant_name <$applicant_email>\r\n";
//     // $headers = "From: $applicant_name <$applicant_email>\r\n";
//     // Set the email headers
//     // $headers = "From: $applicant_name <$applicant_email>\r\n";
//     // $headers .= "Reply-To: $applicant_email\r\n";
//     // $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    
//     // Send the email
//     // if (mail($to, $subject, $email_content, $headers)) {
//     //     // echo "Thank you for contacting us. We'll get back to you shortly.";
//     //     header("Location: thankyou.html");
//     // } else {
//     //     echo "Oops! Something went wrong. Please try again later.";
//     // }
// }
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize form data
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // Validate and sanitize input
    $applicant_email = sanitize_input($_POST["applicant-email"]);
    $applicant_name = sanitize_input($_POST["applicant-name"]);
    $applicant_city = sanitize_input($_POST["applicant-city"]);
    $applicant_dob = sanitize_input($_POST["applicant-dob"]);
    $applicant_profession = sanitize_input($_POST["applicant-profession"]);
    $applicant_address = sanitize_input($_POST["applicant-address"]);
    $dele_certified = isset($_POST["dele-certified"]) ? "Yes" : "No";
    $dele_level = sanitize_input($_POST["dele-level"]);
    $specialized_in_spanish = isset($_POST["specialized-in-spanish"]) ? "Yes" : "No";
    $university_name = sanitize_input($_POST["university-name"]);
    $latest_degree = sanitize_input($_POST["latest-degree"]);
    $experience_in_spanish = isset($_POST["experience-in-spanish"]) ? "Yes" : "No";
    $work_place = sanitize_input($_POST["work-place"]);
    $time_type = sanitize_input($_POST["time-type"]);
    $where_you_hear = sanitize_input($_POST["where-you-hear"]);
    
    // Validate input (you can add more validation if required)
    if (empty($applicant_name) || empty($applicant_email) || empty($applicant_city) || !filter_var($applicant_email, FILTER_VALIDATE_EMAIL)) {
        echo "Please fill in all the required fields with valid data.";
        exit;
    }
    
    // Set the recipient email address
    $to = "jitender.work.mediax@gmail.com";
    
    // Set the email subject
    $subject = "New Career Submission";
    
    // Build the email content
    $email_content =  "Applicant Name: $applicant_name\n
    Applicant Email: $applicant_email\n
    Applicant City: $applicant_city\n
    Applicant DOB: $applicant_dob\n
    Applicant Profession: $applicant_profession\n
    Applicant Address: $applicant_address\n
    ARE YOU DELE CERTIFIED: $dele_certified\n
    SELECT DELE LEVEL: $dele_level\n
    DO YOU HAVE ANY SPECIALIZATION DEGREE IN SPANISH: $specialized_in_spanish\n
    NAME OF THE UNIVERSITY: $university_name\n
    LATEST DEGREE: $latest_degree\n
    DO YOU HAVE PRIOR EXPERIENCE IN TEACHING SPANISH?: $experience_in_spanish\n
    ENTER THE NAME OF PREVIOUS WORKPLACE: $work_place\n
    DO YOU WANT TO JOIN?: $time_type\n
    From where did you get to know about our institute?: $where_you_hear";
    
    // File upload handling
    if (isset($_FILES['aadhar-upload'])) {
        $file = $_FILES['aadhar-upload'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        
        // Check if file was uploaded without errors
        if ($fileError === 0) {
            // Attach the file to the email
            $boundary = md5(rand());
            $headers = "From: $applicant_email\r\n";
            $headers .= "Reply-To: $applicant_email\r\n";
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
header("Location: thankyou.html");
?>
