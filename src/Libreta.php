<?php

class Libreta
{
    public function __construct(persona $victim, $description = null){
        $this->victim = $victim;
        $this->description = $description;
    }

    public function GetDescription(){
        if ($this->description) {
            return $this->description;
        }else{
            Show("<p> Muere de un Ataque al Corazon");
        }
    }

    public function Matar(persona $victim){
        Show("{$victim->GetName()}");
        Show("{$victim->GetLastName()}");
        Show("<p>{$this->GetDescription()}</p>");
    }
}
