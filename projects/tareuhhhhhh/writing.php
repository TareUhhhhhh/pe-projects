<?php include('header.php')?>

<?php 
$pageHeading = $pageData["writing"]["title"];
$pageContent = $pageData["writing"]["content"];
include('intro.php')?>

<?php 
$pageHeading = $pageData["about"]["title"];
$pageContent = $pageData["about"]["content"];
include('intro.php')?>

<?php 
$pageHeading = "Hello";
$pageContent = $pageData["writing"]["content"];
include('intro.php')?>

<?php include('footer.php')?>

