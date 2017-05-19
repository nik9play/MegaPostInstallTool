<?php
namespace mpit\forms;

use std, gui, framework, mpit;


class edit extends AbstractForm
{

    /**
     * @event radioGroup.action 
     */
    function doRadioGroupAction(UXEvent $e = null)
    {
        $this->labelAlt->text = ($this->arr[$this->radioGroup->selectedIndex]);
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {
        //$count = $this->form('MainForm')->listView->items->count();
        //$this->form('MainForm')->listView->items->replace([($this->arrValue[$this->radioGroup->selectedIndex]) . $count, $this->editAlt->text, self::setImage('C:\Users\nik9\Pictures\3kw4jHYk-8c.jpg')]);
        //$nameC = $this->arrValue[$this->radioGroup->selectedIndex] . ' ' . $count;
        //$com = 'com';
        //$this->ini->set($com, $this->editAlt->text, $nameC);
        //$this->ini->save();
        $curindex = $this->form('MainForm')->table->selectedIndex;
        $this->form('MainForm')->table->items->removeByIndex();
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {
        
        app()->hideForm($this->getContextFormName());
    }

    /**
     * @event button8.click-Left 
     */
    function doButton8ClickLeft(UXMouseEvent $e = null)
    {
        
        
        app()->hideForm($this->getContextFormName());
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {
        $curindex = $this->form('MainForm')->table->selectedIndex;
        //pre($this->form('MainForm')->table->items[2]);
        $arr = $this->form('MainForm')->table->items[$curindex];
        $this->editAlt->text = $arr['com'];
    }

}
