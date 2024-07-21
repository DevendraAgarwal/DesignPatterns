<?php

namespace Structural\Composite\FormElements\FieldComposites;

use Structural\Composite\FormElements\FieldComposites\FieldComposite;

/**
 * And so is the form element.
 */
class Form extends FieldComposite
{
    protected $url;
    
    /**
     * __construct
     *
     * @param  string $name
     * @param  string $title
     * @param  string $url
     * @return void
     */
    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    public function render(): string
    {
        $output = parent::render();
        return "<form action=\"{$this->url}\">\n<h3>{$this->title}</h3>\n$output</form>\n";
    }
}
