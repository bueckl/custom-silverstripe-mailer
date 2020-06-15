<?php
use SilverStripe\Core\Injector\Injector;
use \SilverStripe\Control\Email\Email;

Injector::inst()->registerService(new SmtpMailer, 'Mailer');
Injector::inst()->create('Email', 'SMTPEmail');
