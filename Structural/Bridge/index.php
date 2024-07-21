<?php

require_once '__DIR__/../vendor/autoload.php';

use Structural\Bridge\BridgeAppClient;
use Structural\Bridge\Pages\Helper\Product;
use Structural\Bridge\Pages\{
    SimplePage,
    ProductPage
};
use Structural\Bridge\Renderers\{
    HTMLRenderer,
    JsonRenderer
};

$app = new BridgeAppClient();

/**
 * The client code can be executed with any pre-configured combination of the
 * Abstraction+Implementation.
 */
$HTMLRenderer = new HTMLRenderer();
$JSONRenderer = new JsonRenderer();


// Render Simple Page With HTML Renderer
$page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
echo "HTML view of a simple content page:\n";
$app->generatePageView($page);
echo "\n\n";

/**
 * The Abstraction can change the linked Implementation at runtime if needed.
 */
// Render Simple Page With Json Renderer
$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, rendered with the same client code:\n";
$app->generatePageView($page);
echo "\n\n";

/**
 * Render Product Page
 */

$product = new Product("123", "Star Wars, episode1",
    "A long time ago in a galaxy far, far away...",
    "/images/star-wars.jpeg", 39.95);

// Render Product Page With HTML Renderer
$page = new ProductPage($HTMLRenderer, $product);
echo "HTML view of a product page, same client code:\n";
$app->generatePageView($page);
echo "\n\n";

// Render Product Page With Json Renderer
$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, with the same client code:\n";
$app->generatePageView($page);

/**
 * If Want to Add New Page
 * Just New Page inside Pages Folder With His Helper If Needed
 * And Use HTML or Json PageRenderer
 *
 * If Want To Add New Page Renderer ie. XML
 * Just Add New XMLRenderer inside Renderers Folder
 * And Use to Render Pages in XML
 */
