<?php

class Testimonial extends DataObject
{
    
    private static $db = array(
        "Title" => "Varchar",
        "Contributor" => "Varchar",
        "Content" => "HTMLText"
    );
    
    private static $has_one = array(
        "TestimonialsPage" => "TestimonialsPage"
    );
    
    private static $summary_fields = array(
        "Title",
        "Contributor"
    );
    
    private static $default_sort = '"ID" DESC';
}
