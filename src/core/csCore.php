<?php
$baseUrl = 'http://localhost/staph';

//Core OPEN
// Get the current page from the URL query string
$page = isset($_GET['uri']) ? $_GET['uri'] : '';

// Define the directory where your view files are located
$viewsDirectory = 'views/';

// Define a default view file
$defaultView = 'home.php';

// If the page is empty, set it to the default view
if ($page === '' || !file_exists($viewsDirectory . $page .= '.php')) {
    $page = $defaultView;
} else {
    if (pathinfo($page, PATHINFO_EXTENSION) === '') {
        $page .= '.php';
    }
}
//END Core

// Is active class
function isActivePage($pageName) {
    global $page;
    $currentPage = $page;
    if ($currentPage == $pageName) {
        echo 'active';
    } else {
        echo '';
    }
}

// Function to get main URL
function mainUrl($url = '') {
    global $baseUrl;
    echo $baseUrl.$url;
}

//print session data by key
function csUserData($key) {
    if (isset($_SESSION[$key])) {
            echo $_SESSION[$key]; 
        }
    echo '';
}

// Func to get time
function timeString($datetime, $full = false) {
    $now = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $ago = new DateTime($datetime, new DateTimeZone('Asia/Kolkata'));
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

//check if user is logged in
function isUserLoggedIn() {
    if (isset($_SESSION['reg_key'])) {
        return true;
    }else{
        global $baseUrl;
        echo '<script>window.location.href = "'.$baseUrl.'";</script>';
    }
}











?>
