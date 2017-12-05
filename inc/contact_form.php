<style>
.form-area #email-form label {
  text-align: left;
}
</style>

<div class="form-area">  
  <form id="email-form">
  <input type="hidden" name="sendto" value="know@spangg.com">
  <div class="col-md-12 form-group">
    <input type="text" class="form-control" name="name" id="name" placeholder="* Name" required="true">
  </div>
  <div class="col-md-6 col-sm-6 form-group">
    <input type="email" class="form-control" name="email" id="email" placeholder="* Email" required="true">
  </div>
  <div class="col-md-6 col-sm-6 form-group">
    <input type="tel" class="form-control" name="phone" id="phone" placeholder="* Phone">
  </div>
  <div class="col-md-12 form-group">
    <input type="text" class="form-control" id="subject" name="subject" placeholder="* Subject"  required="true">
  </div>
  <div class="col-md-12 form-group" style="margin-bottom:0;" >
    <textarea class="form-control" rows="4" name="message" id="message" placeholder="* Please leave us a message." required="true"></textarea>
  </div>
  <div class="col-md-12">
    <small class="text-muted"><strong>*</strong> Required fields.</small>
  </div>
  <div class="col-md-12 form-group">
    <center style="padding-top:25px">
      <div id="response"></div>
      <input type="submit" value="Submit" class="btn btn-lg spangg-button-orange" />
      <input type="reset" value="Reset" class="btn btn-lg" />
    </center>
  </div>
  </form>
</div>

<script type="text/javascript" src="https://greatphotos.in/remoteemail/remoteemail.js"></script>