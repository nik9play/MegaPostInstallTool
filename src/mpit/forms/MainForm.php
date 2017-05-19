<?php
namespace mpit\forms;

use std, gui, framework, mpit;


class MainForm extends AbstractForm
{

    /**
     * @event button7.click-Left 
     */
    function doButton7ClickLeft(UXMouseEvent $e = null)
    {    
        Animation::displace($this->panel, 300, +568.0, 0.0);
        $this->buttonBack->enabled = true;
        $this->button5->enabled = true;
    }


    /**
     * @event button8.click-Left 
     */
    function doButton8ClickLeft(UXMouseEvent $e = null)
    {   
        app()->shutdown();
    }

    /**
     * @event button9.click-Left 
     */
    function doButton9ClickLeft(UXMouseEvent $e = null)
    {
        app()->minimizeForm($this->getContextFormName());
    }



    /**
     * @event buttonBack.click-Left 
     */
    function doButtonBackClickLeft(UXMouseEvent $e = null)
    {
        Animation::displace($this->panel, 300, -568.0, 0.0);
        $this->buttonBack->enabled = false;
        $this->button5->enabled = false;
    }

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $e = null)
    {
        
        app()->showForm('add');
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {
        $anal = $this->table->selectedIndex;
        $this->table->items->removeByIndex($anal);
    }

    /**
     * @event button11.click-Left 
     */
    function doButton11ClickLeft(UXMouseEvent $e = null)
    {
        
        app()->showFormAndWait('edit');
    }




}
