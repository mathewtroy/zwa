<!-- Snowboarding section starts -->
      
<section class="snowboarding">

    <div class="image">
        <img src="images/snowboarding-img.jpg" alt="">
    </div>

    <div class="content">

        <article>
            <h3>Snowboarding</h3>
            Snowboarding is a recreational and competitive activity that 
            involves descending a snow-covered surface while standing on a 
            snowboard that is almost always attached to a rider's feet. The 
            development of snowboarding was inspired by skateboarding, 
            sledding, surfing, and skiing.
        </article>


        <h4>Our best offers</h4>
        
            <dl>
                <dt>► Sierra Nevada ski station</dt>
                    <dd>
                        Location: Spain.
                        Price: 1500 USD.
                    </dd>

                <dt>► Star Camp in Rosa Khutor</dt>
                    <dd>
                        Location: Russia.
                        Price: 1800 USD.
                    </dd>

            </dl>

            <?php
                if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name']) ): 
            ?>

            <div class="form-container">      
            <form 
            method="POST" 
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
            id="commentForm" >

                <!-- Import paste Sender -->
                <!-- <php @require "comment/paste_sender.php"; ?> -->

                <input type="hidden" name="topic_id" id ="topic_id" value="3"><br>

                <!-- Import check Message -->
                <?php @require "comment/check_message.php"; ?>
                
                <br>
                <button type="submit" class="btn" 
                    name="post_comment">Post Comment</button>

            </form>
            </div>
            <?php endif; ?>


    </div>

    <!-- Paste comment -->
    <!--  -->
    <div class="content">
    <h2>Comments of the Clients</h2>
    <?php

        $sql = "SELECT * FROM comment_form WHERE topic_id=3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        
    ?>

                <!-- Import paste Comment -->
                <?php @require "comment/paste_comments.php"; ?>

    <?php } } ?>
    </div>            
    
    
</section>
<!-- Snowboarding section ends -->