    <?php   
/*    if (!isset($_POST['save']) || $_POST['save'] != 'contact') { 
        header('Location: contact-form.php'); exit; 
    } */
    if(isset($_POST['save'] || $_POST['save'] == 'contact')){
    $name = $_POST['name']; 
    $email_address = $_POST['email']; 
    $subject=$_POST['subject'];
    $message = $_POST['contact_message']; 
    }   
    // write the email content 
/*    $email_content = "Name: $name\n"; 
    $email_content .= "Email Address: $email\n"; 
    $email_content .= "Message:\n\n$message"; */
         
    // send the email 
    mail ("eng.sameh11@gmail.com", $subject, $message); 
    //use Ajax to empty the fields and print a success message.
    ?>  