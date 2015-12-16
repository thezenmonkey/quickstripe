# Quickstripe - SilverStripe Quick Start Module
A simple module to add a few base page types and DataObjects to the default SilverStripe install to speed up development of basic sites.

## Requirements
* SilverStripe 3.2

## Feature Overview
* Home Page class
* Contact Us Page class
* Simple Contact Form
** including basic Spam Protection (Timestamp and Honey Pot field)
* Team Member DataExtension for Member Class
** Adds Fields for Member Title (Mr., Ms., Dr., etc.), Job Title, Role, Bio, Headshot and Social Media Profiles
* Team Page class
* Testimonials Page
* Testimonial DataObject
* Custom Site Config to Store Basic Contact Details for the Site

## Installation
Install via composer `composer require thezenmonkey/quickstripe`

Add the optional Team Member Extension to your member class in your main config.ml

```
SiteConfig
  extensions:
    - 'QuickStartSiteConfig'
```

Run `dev/build`

## Usage
After installing the module will create or convert the following:
* URLSegment = home _to HomePage_
* URLSegment = contact-us _to ContactUsPage_
* URLSegment = about-us _to AboutUsPage_


## To Do
* Add Thank You Page Redirection on Contact Form