<?php

namespace Structural\Bridge\Renderers;

/**
 * The Implementation declares a set of "real", "under-the-hood", "platform"
 * methods.
 *
 * In this case, the Implementation lists rendering methods that can be used to
 * compose any web page. Different Abstractions may use different methods of the
 * Implementation.
 */
interface Renderer
{    
    /**
     * renderTitle
     *
     * @param  mixed $title
     * @return string
     */
    public function renderTitle(string $title): string;
    
    /**
     * renderTextBlock
     *
     * @param  mixed $text
     * @return string
     */
    public function renderTextBlock(string $text): string;
    
    /**
     * renderImage
     *
     * @param  mixed $url
     * @return string
     */
    public function renderImage(string $url): string;
    
    /**
     * renderLink
     *
     * @param  mixed $url
     * @param  mixed $title
     * @return string
     */
    public function renderLink(string $url, string $title): string;
    
    /**
     * renderHeader
     *
     * @return string
     */
    public function renderHeader(): string;
    
    /**
     * renderFooter
     *
     * @return string
     */
    public function renderFooter(): string;
    
    /**
     * renderParts
     *
     * @param  mixed $parts
     * @return string
     */
    public function renderParts(array $parts): string;
}
