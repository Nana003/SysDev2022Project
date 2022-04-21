<?php require APPROOT . '/views/includes/header.php'; ?>

<body>

   
<?php require APPROOT . '/views/includes/nav.php'; ?>

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>Contact <em>Us</em></h1>
            </div>
        </div>
    </div>

    <form class="my-form">
        <div class="container">
          <h1>Get in touch with us!</h1>
          <ul>
            <li>
              <select>
                <option selected disabled>-- Please choose an option --</option>
                <option>Wedding Video</option>
                <option>Business Advertisement</option>
                <option>Music Video</option>      
              </select>
            </li>
            <li>
              <div class="grid grid-2">
                <input type="text" placeholder="Name" required>  
                <input type="text" placeholder="Surname" required>
              </div>
            </li>
            <li>
              <div class="grid grid-2">
                <input type="email" placeholder="Email" required>  
                <input type="tel" placeholder="Phone">
              </div>
            </li>    
            <li>
              <textarea placeholder="Message"></textarea>
            </li>   
            <li>
              <input type="checkbox" id="terms">
              <label for="terms">I confirm that this information is correct</label>
            </li>  
            <li>
              <div class="grid grid-3">
                <div class="required-msg">REQUIRED FIELDS</div>
                <button class="btn-grid" type="submit" disabled>
                  <span class="back">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
                  </span>
                  <span class="front">SUBMIT</span>
                </button>
                <button class="btn-grid" type="reset" disabled>
                  <span class="back">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
                  </span>
                  <span class="front">RESET</span>
                </button> 
              </div>
            </li>    
          </ul>
        </div>
      </form>
      <div class="services">
        <div class="container" href="https://www.facebook.com/login.php">
            <div class="col-md-4 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="<?php echo URLROOT; ?>/img/facebook.png" alt="">
                    </div>
                    <div class="text">
                        <h4>Facebook</h4>
                        <p>Follow us on facebook to see all the updates!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="<?php echo URLROOT; ?>/img/instagram.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Instagram</h4>
                        <p>Follow our Instagram page to view all of our clients</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="<?php echo URLROOT; ?>/img/email.png" alt="">
                    </div>
                    <div class="text">
                        <h4>Email</h4>
                        <p>If you have any questions, feel free to send us an email!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require APPROOT . '/views/includes/footer.php'; ?>