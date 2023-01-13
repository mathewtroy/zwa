<!-- Tour section starts -->
      
<section class="tour_guide">

    <div class="image">
        <img src="images/tour_guide-img.jpg" alt="tour">
    </div>

    <div class="content">

            <article>
                <h3>Tour group</h3>
                A group tour consists of a group of people who want to have a 
                travel experience with others with a common interest. Group travel 
                is an excellent option as the traveler just has to sign up and 
                everything else is taken care of.
            </article>

            <h4>Our best offers</h4>
            
                <dl>
                    <dt>► The romantic tower</dt>
                        <dd>
                            Location: France.
                            Price: 1350 USD.
                        </dd>

                    <dt>► Explore the gothic castle</dt>
                        <dd>
                            Location: Czech Republic.
                            Price: 1250 USD.
                        </dd>

                    <dt>► Journey behind the falls</dt>
                        <dd>
                            Location: Canada.
                            Price: 1200 USD.
                        </dd>

                </dl>


                <?php
                if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name']) ): 
            ?>

            <div class="form-container">        
            <form 
            method="POST" 
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
            id="commentForm"
            >
                <div class="form-control">        
                <!-- We define unique id for comments with topic -->
                <input type="hidden" name= "topic_id" id = "topic_id" value="5"><br>

                <!-- Import check Message -->
                <?php @require "comment/check_message.php"; ?>

                <br>
                <button type="submit" class="btn" 
                    name="post_comment">Post Comment </button>
                
                </div>
            </form>
            </div>
            <?php endif; ?>


    </div>

    <!-- Paste comment by topic -->
    <div class="content">
    <h2>Comments of the Clients</h2>
    <?php

        $sql = "SELECT * FROM comment_form WHERE topic_id=5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        
    ?>

                <!-- Import paste Comment -->
                <?php @require "comment/paste_comments.php"; ?>

    <?php } } ?>
    </div>            
    
    
</section>
<!-- Tour section ends -->