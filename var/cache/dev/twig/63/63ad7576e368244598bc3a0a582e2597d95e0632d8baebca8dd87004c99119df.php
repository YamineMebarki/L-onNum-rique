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

/* vendor/swiftmailer/swiftmailer/doc/japanese.rst */
class __TwigTemplate_641006be664159f2c02fe78fc1403a344c7323dec218ede990e2a08e3902d44b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/doc/japanese.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/doc/japanese.rst"));

        // line 1
        echo "Using Swift Mailer for Japanese Emails
======================================

To send emails in Japanese, you need to tweak the default configuration.

Call the ``Swift::init()`` method with the following code as early as possible
in your code::

    Swift::init(function () {
        Swift_DependencyContainer::getInstance()
            ->register('mime.qpheaderencoder')
            ->asAliasOf('mime.base64headerencoder');

        Swift_Preferences::getInstance()->setCharset('iso-2022-jp');
    });

    /* rest of code goes here */

That's all!
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/doc/japanese.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Using Swift Mailer for Japanese Emails
======================================

To send emails in Japanese, you need to tweak the default configuration.

Call the ``Swift::init()`` method with the following code as early as possible
in your code::

    Swift::init(function () {
        Swift_DependencyContainer::getInstance()
            ->register('mime.qpheaderencoder')
            ->asAliasOf('mime.base64headerencoder');

        Swift_Preferences::getInstance()->setCharset('iso-2022-jp');
    });

    /* rest of code goes here */

That's all!
", "vendor/swiftmailer/swiftmailer/doc/japanese.rst", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/doc/japanese.rst");
    }
}
