<!DOCTYPE html>
<html>
  <!-- Includes -->
<?php 
 include('includes/include_body.php');
 include('includes/content.php');
 include('includes/include_CSS.php');
 ?>
<!------------------------------------------------------------------------>
  <head>
    <title>Privacy Policy</title>
<!---- CSS Style --------------------------------------------------------->
<?php 
echo $allPages;
echo $employerSetting;
?>
<!------------------------------------------------------------------------>

<!----Header-------------------------------------------------------------->
<?php echo $papHeader;?>
<!------------------------------------------------------------------------>
 </head>
  <body class="privacy-policy-text">
    <h1>Privacy Policy</h1>
    <p>Your privacy is important to us. It is our policy to respect your privacy regarding any information we may collect from you across our website, <a href="sample.php">Job Access</a>, and other sites we own and operate.</p>

    <h2>Information we collect</h2>
    <p>We collect information from you when you fill out a form, subscribe to our newsletter, respond to a survey, or otherwise enter information on our site.</p>

    <h2>How we use your information</h2>
    <p>We may use the information we collect from you to personalize your experience, improve our website, send periodic emails, and administer a contest, promotion, survey or other site feature.</p>

    <h2>Cookies</h2>
    <p>We use cookies to personalize content and ads, to provide social media features and to analyze our traffic. We also share information about your use of our site with our social media, advertising and analytics partners who may combine it with other information that you've provided to them or that they've collected from your use of their services.</p>

    <h2>Third-party disclosure</h2>
    <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide users with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential. We may also release information when its release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property or safety.</p>

    <h2>Changes to this Privacy Policy</h2>
    <p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.</p>

    <h2>Contact Us</h2>
    <p>If you have any questions about this Privacy Policy, please contact us by email at <a href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>.</p>
  </body>
  <script>
  // Get the previous page URL
  const previousPageURL = document.referrer;

  // Set the href attribute of the anchor tag to the previous page URL
  const previousPageLink = document.getElementById('previousPageLink');
  previousPageLink.href = previousPageURL;
</script>
</html>