<?php 
$pageTitle = 'Contact Us | Spangg &mdash; Digital Marketing Agency';
include_once './inc/header.php';
?>

<style>
.contact {
  font-size: 1.8rem;
}
.red {
  color:red;
}
.contact h3 {
  margin-bottom: 35px;
}
hr {
  margin-top: 0;
}
.thin {
  font-weight: 100;
}
</style>

<center>
<div class="container-fluid contact">
  <h2>Get in touch to schedule a meeting at a time that works for you. <br>
  <span class="blue-text">Phone</span> <span class="thin">&middot;</span> <span class="orange-text">Skype</span> <span class="thin">&middot;</span> <span class="blue-text">Google Hangouts</span> <span class="thin">&middot;</span> <span class="orange-text">In Person</span></h2>
</div>

<div class="jumbotron contact" style="margin-bottom:0;">
  <div class="row">
    <div class="col-md-7" style="border-right: 2px solid white; padding-right: 50px;">
      <?php include_once './inc/contact_form.php'; ?>
    </div>
    <div class="col-md-5" style="text-align: left; padding-left: 50px;">
      <address>
        <strong>Spangg Publicity and Media Private Limited</strong> <br>
        D-5, 10-28-4/27, Deepanjali <br>
        Siripuram, Visakhapatnam <br>
        Andhra Pradesh, India - 530003
      </address>

      <!--
      <address>
        <strong>Email:</strong> <a href="mailto:know@spangg.com">know@spangg.com</a>
      </address>
      -->
      
      <address>
        <small>Hyderabad, India</small> <br>
        <strong>Ashok:</strong> <a href="tel:+91 9985989300">+91 9985989300</a> <br>
        <strong>Alex:</strong> <a href="tel:+91 9701856549">+91 9701856549</a>
      </address>

      <address>
        <small>Dublin, Ireland</small> <br>
        <strong>Adarsh:</strong> <a href="tel:+353 830425823">+353 830425823</a>
      </address>

      <a href="https://www.facebook.com/SpanggMedia/" title="Find us on Facebook" target="_blank"><img src="./img/facebook-60px.png" alt="Find us on Facebook"class="img-circle"></a>
    </div>
  </div>
</div>
</center>

<script>
  $(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 300;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
</script>

<?php include_once './inc/footer.php'; ?>