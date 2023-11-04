<div class="page-title">
                <p>              
                   Feedback
                </p>
                <h5>Home > feedback ></h5>
      </div>
      <!-- <div class="menu-slider"></div> -->
      <main class="containerPop">
        <div class="wrapper-div">
             <span class="cancel-btn">X</span>
        <h1 class="disclaimer-text">Disclaimer: &ensp; <ion-icon name="warning-outline" class="warning-icon"></ion-icon></h1>
            <p>

                Welcome to ChemEduConnect! The information provided on this website, including course content, materials, and guidance, is intended for educational purposes only. It is not intended to be a substitute for professional advice, consultation, or instruction.
            <p class="pDisplay">
                Every effort is made to keep the website up and running smoothly. However, we take no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.
            </p>
        </div>
      </main>
    </section>
    <!-- section.header-wrapper ends here  -->
    <?php require_once 'code-base/feedback-display.php' ?>
    <section class="feedback" id="feedback">
        <span>---</span>
        <h2>All Feedbacks</h2>
       <div class="feedback-result">
        <?php if(empty($feedback)): ?>
            <p>NO Feedback yet</p>
        <?php endif; ?>
        <?php foreach($feedback as $items): ?>
        <div class="feedback-cols">
            <div class="feedback-text">
                <h5><?php echo $items['body']; ?></h5>  &ensp;
                <em><?php echo 'by '. $items['name']; ?></em> &ensp;
                <a href="mailto:<?php echo $items['email']; ?>?subject=Feedback%20inquiry"> <?php echo $items['email'] ?> </a>
            </div>
            <p><?php echo 'on ' . $items['date'] ?></p>
        </div>
        <?php endforeach; ?>
       </div>
    </section>
