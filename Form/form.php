
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2 class="mb-5">Bootstrap Form</h2>
            <?php if(isset($_POST['fname']) && !empty($_POST['fname'])) { ?>
                <p>First Name: <?php echo $_POST['fname']; ?></p>
            <?php } ?> 
            
            <?php if(isset($_POST['fname']) && !empty($_POST['lname'])) { ?>
                <p>Last Name: <?php echo $_POST['lname']; ?></p>
            <?php } ?> 

            <form class="align-items-center" method="POST"> <!-- HTTP VERB (GET, POST, PATCH...) -->
                <div class="col-auto mb-3">
                    <label class="form-check-label" for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname">
                </div>
                <div class="col-auto mb-3">
                    <label class="form-check-label" for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lname">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>