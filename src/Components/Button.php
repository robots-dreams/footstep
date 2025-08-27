<?php

namespace Footstep\Components;

use Footstep\Enum\ButtonSizeEnum;
use Footstep\Enum\OutlineType;
use Footstep\Enum\TypeEnum;

class Button
{
    public function __construct(
        private readonly TypeEnum $type,
        private readonly string $value,
        private readonly ButtonSizeEnum $size = ButtonSizeEnum::DEFAULT,
        private readonly OutlineType $outline = OutlineType::DEFAULT,
        private readonly bool $disabled = false,
        private readonly string $href = '',
    ) {
    }

    public function __toString()
    {
        $disabled = $this->disabled ? 'disabled' : '';
        $outline = $this->outline !== OutlineType::DEFAULT ? $this->outline->value . '-' : '';
        $class = $outline . $this->type->value . ' ' . $this->size->value;
        if ('' !== $this->href) {
            $href = sprintf(' href="%s"', $this->href);
            $element = 'a';
            $role = ' role="button"';
        } else {
            $href = '';
            $element = 'button';
            $role = '';
        }

        return <<<HTML
<{$element} type="button" class="btn btn-{$class}" {$disabled}{$href}{$role}>{$this->value}</{$element}>
HTML;
    }
}
