<?php

class Libreta
{
    public function __construct(persona $victim, $description = null){
        $this->victim = $victim;
        $this->description = $description;
    }

    public function GetDescription(){
        return $this->description;
    }

    public function Matar(persona $victim){
        Show("{$victim->GetName()}");
        Show("{$victim->GetLastName()}");
        Show("<p>{$this->GetDescription()}</p>");
    }
}
