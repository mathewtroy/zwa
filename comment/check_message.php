<!--    Import check Review with PHP  -->

    <label for="message">Comment message</label>
        <p class="inform">Write your comment (English language), min.5, max.200 
            characters</p>
        <textarea 
            name="message" 
            rows="8" 
            cols="30"
            minlength="5" 
            maxlength="200" 
            placeholder="Write a comment* (Required)" 
            id="message"><?= htmlspecialchars($message); ?></textarea><br>

            <?php
                if (isset($validateReviewMin) && $validateReviewMin == false) {
                    echo '<span class="error">Comment must be at least 5 
                    characters! </span>';
                }

                if (isset($validateReviewMax) && $validateReviewMax == false) {
                    echo '<span class="error">Comment must be no more than 
                    200 characters! </span>';
                }

                if (isset($validateReviewPattern) && $validateReviewPattern == false) {
                    echo '<span class="error">Comment must contain valid 
                    characters without special symbols! </span>';
                }    
            ?>
                
        <span class="error"></span>
        
        <input type="hidden" name="token" value="<?=$_SESSION['token'];?>" >


<!-- End check Review with PHP -->
