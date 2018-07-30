Sendmail
========

Sendmail is a replacement function mail() in PHP.

Basic usage
-----------

Function sendmail() can be called the same way like built-in function mail().

    sendmail(string $to , string $subject , string $message [, mixed $additional_headers [, string $additional_parameters ]])

So in a legacy project every mail() occurrence can be replaced with sendmail().

    sendmail("john@doe.com","Thank you for registration","Dear John\n\nthank you for your registration...");

Sendmail can also be called with associative array which offers more options.

    sendmail(array(
      "from" => "info@snakeoil.com",
      "from_name" => "Snake Oil",
      // or "from" => "Snake Oil <info@snakeoil.com>",

      "to" => "John Doe <john@doe.com>",
      // "cc" => "",
      // "bcc" => "",

      "subject" => "Thank you for registration",
      "body" => "Dear John\n\nthank you for registration...",

      "attachments" => [
        [
          "body" => file_get_contents("/path/to/file"),
          "filename" => "confirmation.pdf",
          "mime_type" => "application/pdf",
        ],[
          "body" => file_get_contents("/path/to/another/file"),
          "filename" => "id_card.png",
          "mime_type" => "image/png"
        ]
      ],
    ));

To be continued...

Configuration constants
-----------------------

There are several constants that affect the default behavior of Sendmail. Please note that they must be defined before Sendmail is being loaded.

    define("SENDMAIL_DEFAULT_FROM","info@snakeoil.com");
    define("SENDMAIL_DEFAULT_FROM_NAME","Snake Oil");
    define("SENDMAIL_DEFAULT_BODY_CHARSET","UTF-8");
    define("SENDMAIL_DEFAULT_BODY_MIME_TYPE","text/plain");
    define("SENDMAIL_BODY_AUTO_PREFIX","");
    define("SENDMAIL_USE_TESTING_ADDRESS_TO","");
    define("SENDMAIL_DO_NOT_SEND_MAILS",((defined("DEVELOPMENT") && DEVELOPMENT) || (defined("TEST") && TEST)));
    define("SENDMAIL_EMPTY_TO_REPLACE","no.email@snakeoil.com");
    define("SENDMAIL_DEFAULT_TRANSFER_ENCODING","8bit"); // "8bit" or "quoted-printable"
    define("SENDMAIL_MAIL_ADDITIONAL_PARAMETERS","-fbounce@snakeoil.com");
    define("SENDMAIL_BCC_TO","sent.emails@snakeoil.com");

Installation
------------

Just use the Composer:

    composer require atk14/sendmail

License
-------

Sendmail is free software distributed [under the terms of the MIT license](http://www.opensource.org/licenses/mit-license)

[//]: # ( vim: set ts=2 et: )
