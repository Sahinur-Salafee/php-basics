
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2 class="mb-5">Bootstrap Form</h2>
            <?php
                $fname = '';
                $lname = '';

             if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) { ?>
                <?php $fname = htmlspecialchars($_REQUEST['fname']); ?>
                <p>First Name: <?php echo $fname; ?></p>
            <?php } ?> 
            
            <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) { ?>
                <?php $lname = htmlspecialchars($_REQUEST['lname']); ?>
                <p>Last Name: <?php echo $lname; ?></p>
            <?php } ?> 

            <form class="align-items-center" method="REQUEST"> <!-- HTTP VERB (GET, POST, PATCH...) -->
                <div class="col-auto mb-3">
                    <label class="form-check-label" for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname; ?>">
                </div>
                <div class="col-auto mb-3">
                    <label class="form-check-label" for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $lname; ?>">
                </div>
                <div class="col-auto mb-3">
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> I have a boat</label><br>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>