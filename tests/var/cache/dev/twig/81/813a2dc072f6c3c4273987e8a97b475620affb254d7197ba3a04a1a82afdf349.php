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

/* vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/localized_routing.yml */
class __TwigTemplate_9a079af5a535fc1e72b202749ee7d51ded894c50e86832a1246104204b5d55ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/localized_routing.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/localized_routing.yml"));

        // line 1
        echo "localized_login_path:
    path:     /{_locale}/login
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::loginAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_check_path:
    path:     /{_locale}/login_check
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::loginCheckAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_default_target_path:
    path:     /{_locale}/profile
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::profileAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_logout_path:
    path:     /{_locale}/logout
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::logoutAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_logout_target_path:
    path:     /{_locale}/
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::homepageAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_secure_path:
    path:     /{_locale}/secure/
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::secureAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/localized_routing.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("localized_login_path:
    path:     /{_locale}/login
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::loginAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_check_path:
    path:     /{_locale}/login_check
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::loginCheckAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_default_target_path:
    path:     /{_locale}/profile
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::profileAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_logout_path:
    path:     /{_locale}/logout
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::logoutAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_logout_target_path:
    path:     /{_locale}/
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::homepageAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }

localized_secure_path:
    path:     /{_locale}/secure/
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LocalizedController::secureAction }
    requirements: { _locale: \"^[a-z]{2}\$\" }
", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/localized_routing.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/localized_routing.yml");
    }
}
