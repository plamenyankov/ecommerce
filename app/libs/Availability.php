<?php

class Availability {
public static  function display($availability){
    if($availability){
        return 'In Stock';
    }
    return 'Out of Stock';
}
    public static  function displayClass($availability){
        if($availability){
            return 'instock';
        }
        return 'outofstock';
    }
} 