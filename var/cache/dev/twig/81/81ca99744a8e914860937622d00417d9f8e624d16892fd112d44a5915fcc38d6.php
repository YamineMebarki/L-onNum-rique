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

/* var/cache/dev/ContainerRWJYAMq/getSecurity_Validator_UserPasswordService.php */
class __TwigTemplate_58b013991dd4de2e07a936122115fd0688cbd62dff135c6f1d6d893510949dc4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getSecurity_Validator_UserPasswordService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getSecurity_Validator_UserPasswordService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.validator.user_password' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php';

return \$this->privates['security.validator.user_password'] = new \\Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator((\$this->services['security.token_storage'] ?? (\$this->services['security.token_storage'] = new \\Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage())), (\$this->privates['security.encoder_factory.generic'] ?? \$this->load('getSecurity_EncoderFactory_GenericService.php')));
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerRWJYAMq/getSecurity_Validator_UserPasswordService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.validator.user_password' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php';

return \$this->privates['security.validator.user_password'] = new \\Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator((\$this->services['security.token_storage'] ?? (\$this->services['security.token_storage'] = new \\Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage())), (\$this->privates['security.encoder_factory.generic'] ?? \$this->load('getSecurity_EncoderFactory_GenericService.php')));
", "var/cache/dev/ContainerRWJYAMq/getSecurity_Validator_UserPasswordService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerRWJYAMq/getSecurity_Validator_UserPasswordService.php");
    }
}
