<!-- Skydiving section starts -->
      
<section class="skydiving">

    <div class="image">
        <img src="images/skydiving-img.jpg" alt="skydiving">
    </div>

    <div class="content">

    <article>
            <h3>Skydiving</h3>
            Skydiving is a method of transiting from a high point in the 
            atmosphere to the surface of Earth with the aid of gravity, 
            involving the control of speed during the descent using a parachute 
            or parachutes.<br>

            Ballooning is an adventurous air sport that involves flying a 
            hot-air balloon. Hot-air balloons are known to be used as early as 
            the late 16th century. Ballooning was primarily a recreational 
            activity, but with a steady increase in the number of people taking 
            part, a competitive sport was derived out of it.
        </article>


        <h4>Our best offers</h4>
        
            <dl>
                <dt>► Balloon tours</dt>
                    <dd>
                        Location: Turkey.
                        Price: 2500 USD.
                    </dd>

                <dt>► Paradise skydiving</dt>
                    <dd>
                        Location: UAE.
                        Price: 2500 USD.
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

                <input type="hidden" name="topic_id" id ="topic_id" value="2"><br>

                <!-- Import check Message -->
                <?php @require "comment/check_message.php"; ?>
                
                <br>
                <button type="submit" class="btn" 
                    name="post_comment">Post Comment</button>

            </form>
            </div>       
            <?php endif; ?>


    </div>

    <!-- Paste comment by topic -->
    <div class="content">
    <h2>Comments of the Clients</h2>
    <?php

        $sql = "SELECT * FROM comment_form WHERE topic_id=2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        
    ?>

                <!-- Import paste Comment -->
                <?php @require "comment/paste_comments.php"; ?>

    <?php } } ?>
    </div>            
    
    
</section>
<!-- Skydiving section ends -->