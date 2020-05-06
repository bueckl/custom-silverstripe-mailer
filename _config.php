<?php

Email::set_mailer(new SmtpMailer);
SS_Object::useCustomClass('Email', 'SMTPEmail');
