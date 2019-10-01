<?php
/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}
/**
 * Displays site url provided in conig.
 */
function site_url()
{
    echo config('site_url');
}
/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}
/**
 * Website navigation.
 */
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    foreach ($nav_items as $uri => $name) {
        $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }
    echo trim($nav_menu, $sep);
}
/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    echo ucwords(str_replace('-', ' ', $page));
}
/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.php';
    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.php';
    }
    //echo file_get_contents($path);
    //require config('content_path'). '/'. $page.'.php';
    require config('config_path'). $path;
}
function getComicImage(){
$url = 'https://xkcd.com/info.0.json';
/**dont change
*/
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt_array($handle,
array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true
)
);
$output = curl_exec($handle);
$response = json_decode($output, true);
curl_close($handle);
/*dont change
*/
echo $response["img"];
}

function imageRand(){
$rNum = rand(1,2208);
$url = 'https://xkcd.com/'. $rNum.'/info.0.json';
/**dont change
*/
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt_array($handle,
array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true
)
);
$output = curl_exec($handle);
$response = json_decode($output, true);
curl_close($handle);
/*dont change
*/
echo $response["img"];
//echo $url;
}

function getComicURL(){
$randNum = rand(1,2208);
$url = 'https://xkcd.com/'. $randNum. '/info.0.json';
echo $url;
}

/**Function for getting the comic title and date */
function getComicTitle(){
$url = 'https://xkcd.com/info.0.json';
/**dont change
*/
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt_array($handle,
array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true
)
);
$output = curl_exec($handle);
$response = json_decode($output, true);
curl_close($handle);
/*dont change
*/
echo '<h1>' . $response["title"] . '</h1>';
echo '<br>';
echo '<h4>' . $response["month"] . '/' . $response["day"] . '/'. $response["year"] . '</h4>';
}

/**Function for getting the comic title and date for random comic for random comic */
function getComicTitleRand(){
$randNum = rand(1,2208);
$url = 'https://xkcd.com/'. $randNum. '/'.'info.0.json';
/**dont change
*/
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt_array($handle,
array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true
)
);
$output = curl_exec($handle);
$response = json_decode($output, true);
curl_close($handle);
/*dont change
*/
echo '<h1>' . $response["title"] . '</h1>';
echo '<br>';
echo '<h4>' . $response["month"] . '/' . $response["day"] . '/'. $response["year"] . '</h4>';
}
/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}
?>