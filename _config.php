<?php
use SilverStripe\Core\Injector\Injector;
use CustomSilvertripeMailer\SmtpMailer;
use SilverStripe\Control\Email\Mailer;

Injector::inst()->registerService(new SmtpMailer(), Mailer::class);
