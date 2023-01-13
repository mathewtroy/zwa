<!-- Scubadiving section starts -->
      
<section class="scubadiving">

    <div class="image">
        <img src="images/scubadiving-img.jpg" alt="scubadiving">
    </div>

    <div class="content">

        <article>
            <h3>Scubadiving</h3>
            Scubadiving is a mode of underwater diving whereby divers use 
            breathing equipment that is completely independent of a surface 
            air supply. The name "scuba", an acronym for "Self-Contained 
            Underwater Breathing Apparatus", was coined by Christian Lambertsen 
            in a patent submitted in 1952. Scuba divers carry their own source 
            of breathing gas, usually compressed air, affording them greater 
            independence and movement than surface-supplied divers, and more 
            time underwater than free divers.
        </article>


        <h4>Our best offers</h4>
        
            <dl>
                <dt>► Reef tour for certified divers</dt>
                    <dd>
                        Location: Mexico.
                        Price: 1150 USD.
                    </dd>

                <dt>► Deep in the Caribbean</dt>
                    <dd>
                        Location: USA.
                        Price: 1550 USD.
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

                <input type="hidden" name="topic_id" id ="topic_id" value="1"><br>

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

        $sql = "SELECT * FROM comment_form WHERE topic_id=1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        
    ?>

                <!-- Import paste Comment -->
                <?php @require "comment/paste_comments.php"; ?>

    <?php } } ?>
    </div>            
    
    
</section>
<!-- Scubadiving section ends -->