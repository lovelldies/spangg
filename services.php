<?php 
$pageTitle = 'Services | Spangg &mdash; Digital Marketing Agency';

include_once './inc/header.php';
?>
<style>
.panel {
  font-size: 1.7rem;
  min-height: 310px;
}
.panel-list li {
  list-style: circle;
}
.panel-title {
  text-align: center;
  margin: 10px 0;
  font-size: 1.8rem;
  font-weight: 400;
  letter-spacing: 0.1rem;
}
.panel-body {
  margin-top: 14px;
}
.panel-info {
  border-color: #3564d333;
}
.services-main {
  margin: 50px 0 0 0;
  padding: 100px 0;
}
.services .panel-info .panel-heading {
  color: #ffffff;
  background-image: none;
  background-color: #2a69ce;
  border-color: #2a69ce;
  text-transform: uppercase;
}
hr {
  margin-top: 0;
}
</style>

<div class="container services">
  <img src="./img/services-banner.png" alt="Services by Spangg!" class="img-responsive">
</div>

<div class="jumbotron services services-main">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Websites</h3>
            </div>
            <div class="panel-body panel-list">
              <ul>
                <li>Website Design</li>
                <li>Website Maintenance</li>
                <li>Search Engine Optimisation (SEO)</li>
                <li>Website Audits</li>
                <li>Microsites</li>
                <li>Payment Gateway Setup</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Content</h3>
            </div>
            <div class="panel-body panel-list">
              <ul>
                <li>Creative Design (Static, GIFs etc)</li>
                <li>Photo Shoots</li>
                <li>Videos and Ad Films</li>
                <li>Copywriting</li>
                <li>Blogging</li>
                <li>Jingles</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Social Media Marketing</h3>
            </div>
            <div class="panel-body panel-list">
              <ul>
                <li>Social Media Strategy</li>
                <li>Social Presence Creation</li>
                <li>Content Curation</li>
                <li>Social Channel Management</li>
                <li>Audience Engagement and Contests</li>
                <li>Social Media Monitoring</li>
                <li>In-Depth Analysis</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Online Advertising</h3>
            </div>
            <div class="panel-body panel-list">
              <ul>
                <li>Online Advertising Strategy</li>
                <li>Social Media Ads</li>
                <li>Display Ads</li>
                <li>Search Engine Marketing (SEM)</li>
                <li>Native Ads</li>
                <li>Remarketing/Retargeting</li>
                <li>Email Marketing</li>
                <li>In-Depth Analysis</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Traditional Content and Ads</h3>
            </div>
            <div class="panel-body panel-list">
              <ul>
                <li>Television and Radio Ads</li>
                <li>Newspaper Ads</li>
                <li>Magazine, Pamphlet, Card and Brochure Design</li>
                <li>Billboard and Hoarding Design</li>
                <li>Misc ATL and BTL Design and Media Planning</li>
                <li>Merchandise Design and Delivery</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Brand</h3>
            </div>
            <div class="panel-body panel-list">
              <ul>
                <li>Marketing Strategy</li>
                <li>Brand Guidelines and Voice</li>
                <li>Logo Design</li>
                <li>Activations (online and offline)</li>
                <li>Stationery and Merchandise Design</li>
                <li>Reputation Management</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once './inc/get_in_touch.php'; ?>
<?php include_once './inc/footer.php'; ?>