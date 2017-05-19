<?php
namespace mpit\forms;

use std, gui, framework, mpit;


class add extends AbstractForm
{

     public $arr = ['0' => 'cmd',
                    '1' => 'cmd /s start',  
                    '2' => 'Выбрать...',                                                                                                     
                   ];  
     public $arrValue = ['0' => 'Запуск программы',
                         '1' => 'Запуска скрипта',  
                         '2' => 'Установка драйвера',                                                                                                     
                        ]; 

 


    /**
     * @event button8.click-Left 
     */
    function doButton8ClickLeft(UXMouseEvent $e = null)
    {
        
        
        app()->hideForm($this->getContextFormName());
    }

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
        $count = $this->form('MainForm')->table->items->count();
        $nameC = $this->arrValue[$this->radioGroup->selectedIndex] . ' ' . $count;
        $this->form('MainForm')->table->items->add(['type' => $nameC, 'com' => $this->editAlt->text]);
        $com = 'com';
        //$this->ini->set($com, $this->editAlt->text, $nameC);
        //$this->ini->save();
    
        /*$count = $this->form('MainForm')->listView->items->count();
        $this->form('MainForm')->listView->items->add([($this->arrValue[$this->radioGroup->selectedIndex]) . $count, $this->editAlt->text, self::setImage('C:\Users\nik9\Pictures\3kw4jHYk-8c.jpg')]);
        $nameC = $this->arrValue[$this->radioGroup->selectedIndex] . ' ' . $count;
        $com = 'com';
        $this->ini->set($com, $this->editAlt->text, $nameC);
        $this->ini->save();
        */
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {           
                /*
                $this->form('MainForm')->listView->setCellFactory(function(UXListCell $cell, $itemCell) {
                if ($itemCell) {              
                    $titleName = new UXLabel($itemCell[0]);
                    $titleName->style = '-fx-font-weight: bold;'; 
             
                    $titleDescription = new UXLabel($itemCell[1]);
                    $titleDescription->style = '-fx-text-fill: gray;';
             
                    $title  = new UXVBox([$titleName, $titleDescription]);
                    $title->spacing = 0;
               
                    $line = new UXHBox([$itemCell[2], $title]);
                    $line->spacing = 7;
                    $line->padding = 5;
                    $cell->text = null;
                    $cell->graphic = $line;
                }
                });
                */
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        app()->hideForm($this->getContextFormName());
    }
    
    function setImage($img)
    {
        /*   
        $View = new UXImageArea();
        $View->size = [50, 50];
        $View->centered = true;
        $View->proportional = true;
        $View->stretch = true;
        $View->smartStretch = true;
        $View->image = new UXImage($img);  
        return $View;
        */
    } 

}
