<?php
$email = "karthika@example.com";
[$name, $domain] = explode('@', $email);
$masked = substr($name, 0, 2) . str_repeat('*', max(0, strlen($name) - 2));
echo "Masked Email: $masked@$domain<br>";
?>
<?php
$url = "https://www.example.com/article";
if (filter_var($url, FILTER_VALIDATE_URL)) {
    $host = parse_url($url, PHP_URL_HOST);
    echo "Domain: $host<br>";
}
?>
<?php
$comment = "This is a bad and ugly idea!";
$banned = ["bad", "ugly"];
$filtered = str_ireplace($banned, "***", $comment);
echo "Filtered Comment: $filtered<br>";
?>
<?php
$password = "Pass@123";
$has_upper = false;
$has_digit = false;
$has_special = false;

if (strlen($password) >= 8) {
    foreach (str_split($password) as $ch) {
        if (ctype_upper($ch)) $has_upper = true;
        elseif (ctype_digit($ch)) $has_digit = true;
        elseif (!ctype_alnum($ch)) $has_special = true;
    }
}

if ($has_upper && $has_digit && $has_special) {
    echo "Strong Password<br>";
} else {
    echo "Weak Password<br>";
}
?>
<?php
$post = "I love #php and #coding";
preg_match_all('/#\w+/', $post, $matches);
$hashtags = $matches[0];
echo "Hashtags: " . implode(", ", $hashtags) . "<br>";
echo "Count: " . count($hashtags) . "<br>";
?>
