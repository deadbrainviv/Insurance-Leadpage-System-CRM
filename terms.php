<?php
require("includes/header.php");
?>

        <img id="clouds_img" src="images/funnel-bg-clouds.jpg"/>
        <img id="doctor_img" src="images/funnel-doctor-female-8bt.png"/>


        <form  id="intro_zip_form" class="intro_zip_form" action="step-1.php" enctype="application/x-www-form-urlencoded" method="post">
            <div class="intro_form_header">
                <h2>Health Insurance In 5 Minutes</h2>
                <br/>
            </div>




            <div class="col-md-4 form-group has-feedback intro_form_content">
                <label for="enter_zip_code">My zipcode is</label>
                <input name="enter_zip_code" tabindex="3" type="text" class="form-control" id="enter_zip_code" value="" data-fv-zipcode-country="US" data-fv-zipcode-message="Error"  maxlength="5"><i class="form-control-feedback" data-bv-icon-for="enter_zip_code" style="display: none;"></i>

            </div>


            <div class="intro_form_footer">


                <input type="submit" value="Start Now" class="continue_btn"  disabled/>
            </div>
        </form>
        <div class="terms_container">
            <h1 class="terms">Terms of Service ("Terms")</h1>
            <p >Last updated: April 26, 2016</p>
            <p class="terms">Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the http://www.healthyinsurancequote.com website (the "Service") operated by Healthy Insurance Quote ("us", "we", or "our").</p>
            <p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
            <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>
            <p class="terms"><strong>Links To Other Web Sites</strong></p>
            <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Healthy Insurance Quote.</p>
            <p>Healthy Insurance Quote has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Healthy Insurance Quote shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
            <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
            <p class="terms" ><strong>Termination</strong></p>
            <p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
            <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
            <p class="terms"><strong>Governing Law</strong></p>
            <p>These Terms shall be governed and construed in accordance with the laws of New York, United States, without regard to its conflict of law provisions.</p>
            <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
            <p class="terms"><strong>Changes</strong></p>
            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 60 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
            <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
            <p class="terms"><strong>Contact Us</strong></p>
            <p>If you have any questions about these Terms, please contact us.</p>

        </div>


    <div class="bottom_optin">
        <h2>Affordable Health Plans </h2>
        <form action="step-1.php" method="post" enctype="application/x-www-form-urlencoded">
            <input type="submit" value="Submit" class="footer_submit"/> <input type="text" maxlength="5" placeholder="Enter Zip" name="enter_zip_code" />

        </form>
    </div>
    </section>

<?php
require("includes/footer.php");
?>