<?php
  /**
  * This script is a for a birthday party booking form.
  */
  
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  
  // Replace contact@example.com with your real receiving email address
  require('../assets/vendor/php-email-form/php-email-form.php');
  
  $receiving_email_address = 'ltfitperformance@gmail.com';
  
  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  // Form data capturing
  $contact->from_name = $_POST['parent_name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = "Birthday Party Booking Request";
  
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
  'host' => 'example.com',
  'username' => 'example',
  'password' => 'pass',
  'port' => '587'
  );
  */
  
  $contact->add_message($_POST['parent_name'], 'Parent Name');
  $contact->add_message($_POST['email'], 'Email');
  $contact->add_message($_POST['child_name'], 'Child Name');
  $contact->add_message($_POST['party_date'], 'Party Date');
  $contact->add_message($_POST['guests'], 'Number of Guests');
  $contact->add_message($_POST['special_requests'], 'Special Requests', 10);
  
  echo $contact->send();
?>
