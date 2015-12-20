<?php

class TeamMemberExtension extends DataExtension
{
    
    private static $db = array(
        "PersonalTitle" => "Varchar",
        "JobTitle" => "Varchar",
        "Role" => "Varchar",
        "Credentials" => "Varchar",
        "Bio" => "HTMLText",
        "Twitter" => "Varchar(30)",
        "Facebook" => "Varchar(255)",
        "GooglePlus" => "Varchar(255)"
    );
    
    private static $has_one = array(
        "Headshot" => "Image"
    );
    
    private static $has_many = array(
        
    );
    
    public function updateCMSFields(FieldList $fields)
    {
        $fields->insertBefore(TextField::create("PersonalTitle", "Title (Dr., Hon. etc.)"), "FirstName");
        $fields->insertAfter(TextField::create("Credentials"), "Surname");
        $fields->insertAfter(TextField::create("JobTitle", "Job Title"), "Credientials");
        $fields->insertAfter(TextField::create("Role"), "JobTitle");
        $fields->insertAfter(TextField::create("Twitter", "Twitter User Name")->setDescription("Do NOT include the '@'"), "Email");
        $fields->insertAfter(TextField::create("Facebook", "Facebook Page or Profile"), "Twitter");
        $fields->insertAfter(TextField::create("GooglePlus", "Google+ Profile"), "Facebook");
        $fields->insertAfter(UploadField::create("Headshot"), "GooglePlus");
        $fields->insertAfter(HTMLEditorField::create("Bio"), "Headshot");
    }
    
    public function requireDefaultRecords()
    {
        if (!Group::get()->filter(array("Code" => "team-member"))->First()) {
            $group = new Group();
            $group->Title = "Team Member";
            $group->Code = "team-member";
            $group->Sort = 2;
            $group->write();
            $group->flushCache();
            DB::alteration_message('Team Member Group created', 'created');
        }
    
        parent::requireDefaultRecords();
    }
}
