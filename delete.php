<?php

require_once 'actions/db_connect.php';
require_once 'navbar2.php';

?>

<h3>Do you really want to delete this event?</h3>

<form action="actions/a_delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <button type="submit">Yes, delete it!</button>
    <a href="home.php"><button type="button">No, go back!</button></a>
</form>

</body>
</html>
