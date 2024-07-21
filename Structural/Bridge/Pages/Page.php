<?php

namespace Structural\Bridge\Pages;

use Structural\Bridge\Renderers\Renderer;

/**
 * The Abstraction.
 */
abstract class Page
{
    /**
     * @var Renderer
     */
    protected $renderer;

    /**
     * The Abstraction is usually initialized with one of the Implementation
     * objects.
     */
    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * changeRenderer
     * The Bridge pattern allows replacing the attached Implementation object
     * dynamically.
     *
     * @param  Renderer $renderer
     * @return void
     */
    public function changeRenderer(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    /**
     * The "view" behavior stays abstract since it can only be provided by
     * Concrete Abstraction classes.
     *
     * @return string
     */
    abstract public function view(): string;
}
