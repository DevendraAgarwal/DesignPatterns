<?php
namespace Structural\Bridge\Pages;

use Structural\Bridge\Pages\Page;
use Structural\Bridge\Renderers\Renderer;
use Structural\Bridge\Pages\Helper\Product;

/**
 * This Concrete Abstraction represents a more complex page.
 */
class ProductPage extends Page
{
    protected $product;
    
    /**
     * __construct
     *
     * @param  Renderer $renderer
     * @param  Product $product
     * @return void
     */
    public function __construct(Renderer $renderer, Product $product)
    {
        parent::__construct($renderer);
        $this->product = $product;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->product->getTitle()),
            $this->renderer->renderTextBlock($this->product->getDescription()),
            $this->renderer->renderImage($this->product->getImage()),
            $this->renderer->renderLink("/cart/add/" . $this->product->getId(), "Add to cart"),
            $this->renderer->renderFooter()
        ]);
    }
}
