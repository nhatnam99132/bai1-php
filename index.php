
<?php
//     $a = "123";
//    function test(){
//        global $a;
//        echo "so $a"."abc123";
//    }
//    test();
//    var_dump($_SERVER);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<form action="welcome.php" method="POST">
			 <div class="form-group">
    			<label for="Name">Name</label>
    			<input type="text" class="form-control" name="Name" required>
  			</div>
			 <div class="form-group">
    			<label for="age">Age</label>
    			<input type="number" min="18" class="form-control" name="age" required>
  			</div>
  			<div class="form-group">
   			 <label for="birthdate">Birth date</label>
    		<input type="date" class="form-control" name="birthdate" required>
		 	</div>
             <div class="form-group">
    			<label for="email">Email</label>
    			<input type="email" class="form-control" name="email" required>
  			</div>
              <div class="form-group">
    			<label for="Continent">Continent</label>
    			<select name="Continent" class="form-control" required>
                    <option value="" noSelectionOption="true"> ---Please Select ---</option>
                    <option value="Châu Á">Châu Á</option>
                    <option value="Châu Âu">Châu Âu</option>
                    <option value="Châu Phi">Châu Phi</option>
                </select>
  			</div>
              <div class="form-group" required>
    			<label for="Youcool">You cool?</label>
    			<input type="radio" name="cool" value="yes" required>
                <label for="yes">yes</label>
                <input type="radio"  name="cool" value="no">
                <label for="no">no</label>

  			</div>
              <div class="form-group">
    			<label for="favourite">What 2 colors do you like?</label>
    			<select name="favourite" multiple="multiple" class="form-control" required>
                    <option value="Red">Red</option>
                    <option value="Orange">Orange</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Green">Green</option>
                    
                </select>
  			</div>

              <div class="form-group" required>
    			<label for="Youcool">What do you like? </label>
    			<input type="checkbox" name="like" value="CodeIgntier" required autofocus>
                <label for="CodeIgntier">CodeIgntier</label>
                <input type="checkbox"  name="like" value="Fuel" required>
                <label for="Fuel">Fuel</label>
                <input type="checkbox"  name="like" value="Laravel" required>

                <label for="Laravel">Laravel</label>
                <input type="checkbox"  name="like" value="Kohana" required>

                <label for="Kohana">Kohana</label>
                <input type="checkbox"  name="like" value="Zend" required>

                <label for="Zend">Zend</label>
            
  			</div>

		 	<button type="submit" class="btn btn-primary">Submit	</button>
		  	
		</form>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(function(){

var requiredCheckboxes = $(':checkbox[required]');

requiredCheckboxes.change(function(){

    if(requiredCheckboxes.is(':checked')) {
        requiredCheckboxes.removeAttr('required');
    }

    else {
        requiredCheckboxes.attr('required', 'required');
    }
});

});
    </script>
</body>
</html>