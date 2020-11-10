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

/* vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Resources/config/routing.yml */
class __TwigTemplate_0e4f5d34819539ef9721ecbebdfbcd2c7a69cff52bb663f4ff18640efa66a121 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Resources/config/routing.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Resources/config/routing.yml"));

        // line 1
        echo "session_welcome:
    path:     /session
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::welcomeAction }

session_cacheable:
    path:     /cacheable
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::cacheableAction }

session_welcome_name:
    path:     /session/{name}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::welcomeAction }

session_logout:
    path:     /session_logout
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::logoutAction }

session_setflash:
    path:     /session_setflash/{message}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::setFlashAction }

session_showflash:
    path:     /session_showflash
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::showFlashAction }

profiler:
    path:     /profiler
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\ProfilerController::indexAction }

subrequest_index:
    path:     /subrequest/{_locale}.{_format}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SubRequestController::indexAction, _format: html }
    schemes:  [https]

subrequest_fragment_error:
    path:     /subrequest/fragment/error/{_locale}.{_format}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SubRequestController::fragmentErrorAction, _format: html }
    schemes:  [http]

subrequest_fragment:
    path:     /subrequest/fragment/{_locale}.{_format}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SubRequestController::fragmentAction, _format: html }
    schemes:  [http]

fragment_home:
    path:     /fragment_home
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\FragmentController::indexAction, _format: txt }

fragment_inlined:
    path:     /fragment_inlined
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\FragmentController::inlinedAction }

array_controller:
    path:     /array_controller
    defaults: { _controller: [ArrayController, someAction] }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Resources/config/routing.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("session_welcome:
    path:     /session
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::welcomeAction }

session_cacheable:
    path:     /cacheable
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::cacheableAction }

session_welcome_name:
    path:     /session/{name}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::welcomeAction }

session_logout:
    path:     /session_logout
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::logoutAction }

session_setflash:
    path:     /session_setflash/{message}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::setFlashAction }

session_showflash:
    path:     /session_showflash
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SessionController::showFlashAction }

profiler:
    path:     /profiler
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\ProfilerController::indexAction }

subrequest_index:
    path:     /subrequest/{_locale}.{_format}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SubRequestController::indexAction, _format: html }
    schemes:  [https]

subrequest_fragment_error:
    path:     /subrequest/fragment/error/{_locale}.{_format}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SubRequestController::fragmentErrorAction, _format: html }
    schemes:  [http]

subrequest_fragment:
    path:     /subrequest/fragment/{_locale}.{_format}
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\SubRequestController::fragmentAction, _format: html }
    schemes:  [http]

fragment_home:
    path:     /fragment_home
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\FragmentController::indexAction, _format: txt }

fragment_inlined:
    path:     /fragment_inlined
    defaults: { _controller: Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\FragmentController::inlinedAction }

array_controller:
    path:     /array_controller
    defaults: { _controller: [ArrayController, someAction] }
", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Resources/config/routing.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/Resources/config/routing.yml");
    }
}
