<?php

namespace Structural\Decorator\InputFormats;

use Structural\Decorator\InputFormats\InputFormat;

/**
 * The Concrete Component is a core element of decoration. It contains the
 * original text, as is, without any filtering or formatting.
 */
class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}
