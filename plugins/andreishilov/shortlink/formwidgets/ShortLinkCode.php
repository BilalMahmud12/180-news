<?php namespace AndreiShilov\ShortLink\Formwidgets;


use Backend\Classes\FormWidgetBase;

class ShortLinkCode extends FormWidgetBase
{
    public function widgetDetails()
    {
        return [
            'name' => 'andreishilov.shortlink::lang.formwidgets.shortlinkcode.name',
            'description' => 'andreishilov.shortlink::lang.formwidgets.shortlinkcode.description'
        ];
    }

    public function render()
    {
        return $this->makePartial('widget', ['field' => $this->formField]);
    }

    public function loadAssets()
    {
        $this->addCss($this->getAssetPath('css/widget.css'));
        $this->addJs($this->getAssetPath('js/widget.js'));
    }
}