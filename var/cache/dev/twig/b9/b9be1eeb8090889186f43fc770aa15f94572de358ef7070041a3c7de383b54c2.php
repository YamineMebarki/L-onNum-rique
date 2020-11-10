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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/handlers_with_channels.yml */
class __TwigTemplate_884c232599d75256962144df1197f1b46844c611ce5162f72c958437001c715d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/handlers_with_channels.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/handlers_with_channels.yml"));

        // line 1
        echo "services:
    security_logger:
        class: Foo
        tags: [{ name: monolog.logger, channel: security }]

    doctrine_logger:
        class: Foo
        tags: [{ name: monolog.logger, channel: doctrine }]

    foo_logger:
        class: Foo
        tags: [{ name: monolog.logger, channel: foo }]

    bar_logger:
        class: Foo
        tags: [{ name: monolog.logger, channel: bar }]

monolog:
    handlers:
        custom:
            type: stream
            path: /tmp/symfony.log
            bubble: false
            level: ERROR
            channels: foo
        main:
            type: group
            members: [nested]
            channels: [\"!foo\", \"!bar\"]
        nested:
            type: stream
        extra:
            type: syslog
            ident: monolog
            facility: user
            level: ALERT
        more:
            type: native_mailer
            to_email: monitoring@example.org
            from_email: webmaster@example.org
            subject: Monolog report
            level: CRITICAL
            channels:
                type: inclusive
                elements:
                    - security
                    - doctrine
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/handlers_with_channels.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("services:
    security_logger:
        class: Foo
        tags: [{ name: monolog.logger, channel: security }]

    doctrine_logger:
        class: Foo
        tags: [{ name: monolog.logger, channel: doctrine }]

    foo_logger:
        class: Foo
        tags: [{ name: monolog.logger, channel: foo }]

    bar_logger:
        class: Foo
        tags: [{ name: monolog.logger, channel: bar }]

monolog:
    handlers:
        custom:
            type: stream
            path: /tmp/symfony.log
            bubble: false
            level: ERROR
            channels: foo
        main:
            type: group
            members: [nested]
            channels: [\"!foo\", \"!bar\"]
        nested:
            type: stream
        extra:
            type: syslog
            ident: monolog
            facility: user
            level: ALERT
        more:
            type: native_mailer
            to_email: monitoring@example.org
            from_email: webmaster@example.org
            subject: Monolog report
            level: CRITICAL
            channels:
                type: inclusive
                elements:
                    - security
                    - doctrine
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/handlers_with_channels.yml", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/yml/handlers_with_channels.yml");
    }
}
