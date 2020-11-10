<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/swiftmailer/swiftmailer/doc/introduction.rst */
class __TwigTemplate_4c1ad5d5f84680580b5e726c1a877599a01f1df2d549aa729fc6b259e8a759cc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/doc/introduction.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/doc/introduction.rst"));

        // line 1
        echo "Introduction
============

Swift Mailer is a for sending e-mails from PHP applications.

System Requirements
-------------------

Swift Mailer requires PHP 7.0 or higher (``proc_*`` functions must be
available).

Swift Mailer does not work when used with function overloading as implemented
by ``mbstring`` when ``mbstring.func_overload`` is set to ``2``.

Installation
------------

The recommended way to install Swiftmailer is via Composer:

.. code-block:: bash

    \$ composer require \"swiftmailer/swiftmailer:^6.0\"

Basic Usage
-----------

Here is the simplest way to send emails with Swift Mailer::

    require_once '/path/to/vendor/autoload.php';

    // Create the Transport
    \$transport = (new Swift_SmtpTransport('smtp.example.org', 25))
      ->setUsername('your username')
      ->setPassword('your password')
    ;

    // Create the Mailer using your created Transport
    \$mailer = new Swift_Mailer(\$transport);

    // Create a message
    \$message = (new Swift_Message('Wonderful Subject'))
      ->setFrom(['john@doe.com' => 'John Doe'])
      ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
      ->setBody('Here is the message itself')
      ;

    // Send the message
    \$result = \$mailer->send(\$message);

You can also use Sendmail as a transport::

    // Sendmail
    \$transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');

Getting Help
------------

For general support, use `Stack Overflow <https://stackoverflow.com>`_.

For bug reports and feature requests, create a new ticket in `GitHub
<https://github.com/swiftmailer/swiftmailer/issues>`_.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/doc/introduction.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

Swift Mailer is a for sending e-mails from PHP applications.

System Requirements
-------------------

Swift Mailer requires PHP 7.0 or higher (``proc_*`` functions must be
available).

Swift Mailer does not work when used with function overloading as implemented
by ``mbstring`` when ``mbstring.func_overload`` is set to ``2``.

Installation
------------

The recommended way to install Swiftmailer is via Composer:

.. code-block:: bash

    \$ composer require \"swiftmailer/swiftmailer:^6.0\"

Basic Usage
-----------

Here is the simplest way to send emails with Swift Mailer::

    require_once '/path/to/vendor/autoload.php';

    // Create the Transport
    \$transport = (new Swift_SmtpTransport('smtp.example.org', 25))
      ->setUsername('your username')
      ->setPassword('your password')
    ;

    // Create the Mailer using your created Transport
    \$mailer = new Swift_Mailer(\$transport);

    // Create a message
    \$message = (new Swift_Message('Wonderful Subject'))
      ->setFrom(['john@doe.com' => 'John Doe'])
      ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
      ->setBody('Here is the message itself')
      ;

    // Send the message
    \$result = \$mailer->send(\$message);

You can also use Sendmail as a transport::

    // Sendmail
    \$transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');

Getting Help
------------

For general support, use `Stack Overflow <https://stackoverflow.com>`_.

For bug reports and feature requests, create a new ticket in `GitHub
<https://github.com/swiftmailer/swiftmailer/issues>`_.
", "vendor/swiftmailer/swiftmailer/doc/introduction.rst", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/doc/introduction.rst");
    }
}
