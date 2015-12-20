<?php

class HomePage extends Page implements HiddenClass
{

    private static $db = array(
        
    );

    private static $has_many = array(
        
    );

    /**
     * Change the home page to HomePage type
     */
    
    public function requireDefaultRecords()
    {
        if (!SiteTree::get_by_link("home")) {
            $homepage = new HomePage();
            $$homepage->Title = "Home";
            $homepage->URLSegment = "home";
            $homepage->Sort = 1;
            $homepage->write();
            $homepage->publish('Stage', 'Live');
            $homepage->flushCache();
            DB::alteration_message('Home Page created', 'created');
        } else {
            $homepage = SiteTree::get_by_link("home");
            if ($homepage->ClassName != "HomePage") {
                $homepage = $homepage->newClassInstance("HomePage");
                $homepage->write();
                $homepage->publish('Stage', 'Live');
                $homepage->flushCache();
                DB::alteration_message('Home changed to HomePage', 'changed');
            }
        }
    
        parent::requireDefaultRecords();
    }
}

class HomePage_Controller extends Page_Controller
{
    public function init()
    {
        parent::init();
    }
    
    public function FeaturedPost()
    {
        return $post = BlogPost::get()->filter(array("IsFeatured" => 1))->sort("Date", "ASC")->First() ? $post : false;
    }
    
    
    public function LatestPost()
    {
        return $post = BlogPost::get()->sort("PublishDate", "ASC")->First() ? $post : false;
    }
    
    public function GetTestimonial()
    {
        return $testimonial = Testimonial::get()->sort("Created", "DESC")->First() ? $testimonial : false;
    }
}
