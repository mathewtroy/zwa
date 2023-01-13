<!-- Section Pagination starts -->

<h2 class="dark">Pagination with partners companys information </h2>       
    <table class="pagination">
      
        <tr class="top">
            <td>Index </td>
            <td>Country </td>
            <td>Name </td>
            <td>Contact email </td>
            <td class="bigger">Information </td>
        </tr>

        <?php while($row=mysqli_fetch_assoc($result)) { ?>

        <tr>

            <td> <?php echo $row['emp_id'] ?> </td>
            <td> <?php echo $row['emp_country'] ?> </td>
            <td> <?php echo $row['emp_name'] ?> </td>
            <td> <?php echo $row['emp_email'] ?> </td>
            <td> <?php echo nl2br($row['emp_info']) ?> </td>
            
        </tr>

        <?php } ?>

    </table>


    <?php 

        $pr_query = "SELECT * FROM pagination ";
        $pr_result = mysqli_query($conn,$pr_query);
        $total_record = mysqli_num_rows($pr_result);
      
        $total_page = ceil($total_record/$num_per_page);

        if($page>1) {
            echo "<a href='company.php?page=".($page-1)."' 
            class='btn'>Previous</a>";
        }

      
        for($i=1; $i<$total_page; $i++) {
            echo "<a href='company.php?page=".$i."' 
            class='btn'>$i</a>";
        }

        if($i>$page) {
            echo "<a href='company.php?page=".($page+1)."' 
            class='btn'>Next</a>";
        }

    ?>

<!-- Section Pagination ends -->