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
    ) {
    }

    public function __toString()
    {
        $disabled = $this->disabled ? 'disabled' : '';
        $outline = $this->outline !== OutlineType::DEFAULT ? $this->outline->value . '-' : '';

        return <<<HTML
<button type="button" class="btn btn-{$outline}{$this->type->value} {$this->size->value}" {$disabled}>{$this->value}</button>
HTML;
    }
}
