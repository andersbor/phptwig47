
<?php
/**
 * Created by PhpStorm.
 * User: EASJ
 * Date: 09/11/2017
 * Time: 08:45
 */

$x = $_REQUEST['x'];
$y = $_REQUEST['y'];

$result = $x + $y;

require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    // 'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('showit.html.twig');
$parametersToTwig = array("result" => $result);
echo $template->render($parametersToTwig);