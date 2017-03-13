<?php


namespace SHOW_VAR
{
    function SV($var)
    {
        if(is_array($var))
        {
            show_array($var);
        }
        elseif (is_object($var))
        {
            show_object($var);
        }
    }
    function show_array($var)
    {
        echo '<ul>';
        foreach ($var as $key => $item)
        {
            echo '<li style="padding: 5px; list-style: none">';
            if(is_array($item))
            {
                echo "<strong> [' $key '] </strong> &rArr; ".  gettype($item);
                if(count($item) > 0)
                {
                    show_array($item);
                }
                else echo "<strong> [ ] </strong>";
            }
            else
            {
                echo " <strong> [' $key '] </strong> &rArr; ".  gettype($item)  ." :  <strong> $item </strong>";
            }
            echo '</li>';
        }
        echo '</ul>';
    }
    function show_object($var)
    {
        print_r($var);
    }
}