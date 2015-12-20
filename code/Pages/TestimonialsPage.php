<?php

class TestimonialsPage extends Page
{
    
    /**
     * Static vars
     * ----------------------------------*/
    
    

    /**
     * Object vars
     * ----------------------------------*/
    
    
    
    /**
     * Static methods
     * ----------------------------------*/
    
    
    
    /**
     * Data model
     * ----------------------------------*/

    private static $db = array(
        
    );
    

    private static $has_one = array(
        
    );
    
    private static $has_many = array(
        "Testimonials" => "Testimonial"
    );
    
    /**
     * Common methods
     * ----------------------------------*/
    
    public function getCMSFields()
    {
        $fields = parent::getCMSFIelds();
        
        $fields->addFieldToTab("Root.Testimonials",
            GridField::create('Testimonials', 'Testimonials', $this->Testimonials(), GridFieldConfig_RelationEditor::create())
        );
        
        return $fields;
    }
    
    
    /**
     * Accessor methods
     * ----------------------------------*/
    
    
    
    /**
     * Controller actions	
     * ----------------------------------*/
    
    
    
    /**
     * Template accessors
     * ----------------------------------*/
    
    
    
    /**
     * Object methods
     * ----------------------------------*/
}


class TestimonialsPage_Controller extends Page_Controller
{
    
    private static $allowed_actions = array(
    );

    public function init()
    {
        parent::init();
    }
}
