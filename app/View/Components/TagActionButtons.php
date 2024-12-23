<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TagActionButtons extends Component
{
    public $tag;

    /**
     * Create a new component instance.
     *
     * @param string $tag
     */
    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tag-action-buttons');
    }
}
