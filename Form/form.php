<?php include_once 'functions.php'; ?>

<?php 

/**
 * Super Global Variables: Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.
 * 
 * $_REQUEST[] = PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
 * 
 * $_POST[] = PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
 * $_POST is also widely used to pass variables.
 * 
 * $_GET[] = PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
 * $_GET can also collect data sent in the URL.
 * 
 * $_SERVER[] = $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
 * 
 */

?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2 class="mb-5">Bootstrap Form</h2>
            <?php
                $fname = '';
                $lname = '';
                $checked = '';


                if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) { ?>
                    <?php $fname = htmlspecialchars($_REQUEST['fname']); ?>
                    <p>First Name: <?php echo $fname; ?></p>
                <?php } ?> 
            
                <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) { ?>
                    <?php $lname = htmlspecialchars($_REQUEST['lname']); ?>
                    <p>Last Name: <?php echo $lname; ?></p>
                <?php } 

                if(isset($_REQUEST['check']) && !empty($_REQUEST['check']) == 1) {
                    $checked = 'checked';
                }

                // Multiple checkbox
                
                
                // Animals Array
                $animals = ['Cow', 'Goat', 'Lamb', 'Elephant', 'Camel'];
                // var_dump($_REQUEST);
            ?> 

            <form class="align-items-center" method="POST"> <!-- HTTP VERB (GET, POST, PATCH...) -->
                <div class="col-auto mb-3">
                    <label class="form-check-label" for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname; ?>">
                </div>
                <div class="col-auto mb-3">
                    <label class="form-check-label" for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $lname; ?>">
                </div>
                <div class="col-auto mb-3">
                    <input type="checkbox" id="vehicle3" name="check" value="1" <?php echo $checked; ?>>
                    <label for="vehicle3"> I have a boat</label><br>
                </div>

                <div class="col-auto mb-3">
                    <p><b>Select Some Fruits</b> </p>
                    <input type="checkbox" id="fruits_1" name="fruits[]" value="Orange" <?php isChecked('Orange'); ?>>
                    <label for="fruits_1"> Orange</label><br>
                    <input type="checkbox" id="fruits_2" name="fruits[]" value="Apple" <?php isChecked('Apple'); ?>>
                    <label for="fruits_2"> Apple</label><br>
                    <input type="checkbox" id="fruits_3" name="fruits[]" value="Banana" <?php isChecked('Banana'); ?>>
                    <label for="fruits_3"> Banana</label><br>
                    <input type="checkbox" id="fruits_4" name="fruits[]" value="Mango" <?php isChecked('Mango'); ?>>
                    <label for="fruits_4"> Mango</label>
                </div>

                <div class="col-auto mb-3">
                    <p>
                        <?php
                            if(isset($_POST['animal']) && !empty($_POST['animal'])) {
                                printf('You have selected: %s',  filter_input(INPUT_POST, 'animal', FILTER_UNSAFE_RAW));
                            }
                        ?>
                    </p>
                    <label for="animal" class="mb-3"><b>Select Some Animal</b> </label><br>
                    <select name="animal" id="animal" class="form-control animal-select" multiple>
                        <option value="" selected disabled>Select Animals</option>
                        <?php displayAnimals($animals); ?>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>