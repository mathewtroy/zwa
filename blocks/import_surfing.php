<!-- Surfing section starts -->
      
    <section class="surfing">

        <div class="image">
            <img src="images/surfing-img.jpg" alt="surfing">
        </div>

        <div class="content">

            <article>
                <h3>Surfing</h3>
                Surfing is a surface water sport in which an individual, a surfer, 
                uses a board to ride on the forward section or face, of a moving 
                wave of water, which usually carries the surfer towards the shore. 
                Waves suitable for surfing are primarily found on ocean shores, 
                but can also be found in standing waves in the open ocean, in lakes, 
                in rivers in the form of a tidal bore, or in wave pools.
            </article>

            <h4>Our best offers</h4>
            
                <dl>
                    <dt>► Surfing on the Gold Coast</dt>
                        <dd>
                        Location: Austaralia.
                        Price: 2800 USD.
                        </dd>

                    <dt>► Сatch your wave</dt>
                        <dd>
                            Location: Portugal.
                            Price: 1800 USD.
                        </dd>

                    <dt>► Diamond Head Cliffs</dt>
                        <dd>
                            Location: USA.
                            Price: 2200 USD.                            
                        </dd>

                </dl>

            <?php
                if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name']) ): 
            ?>

            <div class="form-container">       
            <form 
            method="POST" 
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
            id="commentForm">

                <input type="hidden" name="topic_id" id ="topic_id" value="4"><br>

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

                $sql = "SELECT * FROM comment_form WHERE topic_id=4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    
            ?>

                <!-- Import paste Comment -->
                <?php @require "comment/paste_comments.php"; ?>

            <?php } } ?>
        </div>

        
    </section>
<!-- Surfing section ends -->