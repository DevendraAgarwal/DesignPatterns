<?php

namespace Structural\Decorator;

use Structural\Decorator\InputFormats\InputFormat;

/**
 * The client code might be a part of a real website, which renders user-
 * generated content. Since it works with formatters through the Component
 * interface, it doesn't care whether it gets a simple component object or a
 * decorated one.
 */
class DecoratorAppClient
{

  private $multipleNewLine = "\n\n\n";

  public function displayCommentAsAWebsite(InputFormat $format, string $text)
  {
    echo $format->formatText($text);
  }

  public function displayNewLines()
  {
    echo $this->multipleNewLine;
  }
}
