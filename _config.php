<?php
use SilverStripe\Core\Injector\Injector;
use \SilverStripe\Control\Email\Email;

Injector::inst()->registerService(new \CustomSilvertripeMailer\SmtpMailer(), 'Mailer');
Injector::inst()->create(Email::class, 'SMTPEmail');
