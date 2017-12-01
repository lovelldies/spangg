<style>
.form-area #email-form label {
  text-align: left;
}
</style>

<div class="form-area">  
  <form id="email-form">
  <input type="hidden" name="sendto" value="know@spangg.com">
  <div class="col-md-12 form-group">
    <label for="name">Name *</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required="true">
  </div>
  <div class="col-md-6 col-sm-6 form-group">
    <label for="email">Email *</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Your email address" required="true">
  </div>
  <div class="col-md-6 col-sm-6 form-group">
    <label for="phone">Phone</label>
    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your phone number">
  </div>
  <div class="col-md-12 form-group">
    <label for="subject">Subject *</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"  required="true">
  </div>
  <div class="col-md-12 form-group">
    <label for="message">Message *</label>
    <textarea class="form-control" rows="4" name="message" id="message" placeholder="Please leave us a message." required="true"></textarea>
  </div>
  <div class="col-md-12">
    <p class="text-muted"><strong>*</strong> Required fields.</p>
  </div>
  <div class="col-md-12 form-group">
    <center>
      <div id="response"></div>
      <input type="submit" value="Submit" class="btn btn-primary btn-lg" />
      <input type="reset" value="Reset" class="btn btn-lg" />
    </center>
  </div>
  </form>
</div>

<script type="text/javascript" src="https://greatphotos.in/remoteemail/remoteemail.js"></script>