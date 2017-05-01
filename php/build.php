<?php

require_once __DIR__ . '/templating.php';

$templates = realpath(__DIR__ . '/../pages');
$build = realpath(__DIR__ . '/../build');
$templating = new SF\Templating(array('' => $templates));

// fake
class View { public function extend() {} }
$view = new View();

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($templates));
$files = new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

foreach($iterator as $name => $file) {
  $dir = str_replace($templates, '', $file->getPathInfo()->getRealPath());
  $filename = $file->getFilename();
  $location  = substr($dir . '/' . $filename, 1);

  if (strpos($filename, 'layout') === false && strpos($filename, '.php') !== false) {

    // extract $data var
    $data = array();
    ob_start();
    include_once $templates . '/' . $location;
    ob_get_clean();

    // render
    $html = $templating->render($location, $data);
    $dest = str_replace('.php', '.html', $filename);

    file_put_contents($build . '/' . $dest, $html);
  }
}
