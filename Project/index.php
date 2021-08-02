<?php

require_once 'includes/header.php';

?>

<?php

if (isset($_SESSION['session_id'])) {
    echo "You are Logged In!";
} else {
    echo "Home";
}

?>

<?php

require_once 'includes/footer.php';

?>