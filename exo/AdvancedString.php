<?php

namespace exo;

class AdvancedString
{
    // propritétés
    private $internalString;

    //constructeur
    function __construct($internalString)
    {
        $this->internalString = $internalString;
    }

    //méthodes 

    function bold()
    {
        echo "<b>$this->internalString</b>";
    }
    function italic()
    {
        echo "<i>$this->internalString</i>";
    }
    function underline()
    {
        echo "<u>$this->internalString</u>";
    }
    function upperCase()
    {
        echo "<p>" . strtoupper($this->internalString) . "<p>";
    }
}
