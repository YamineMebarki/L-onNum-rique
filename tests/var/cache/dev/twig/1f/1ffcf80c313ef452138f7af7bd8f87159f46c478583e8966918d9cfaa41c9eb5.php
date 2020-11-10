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

/* vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/eval_not_self.phpt */
class __TwigTemplate_e2eaa4e072edfd4dbc40dfdfd16c0ddde8e5a27ff27efa47db26c6442fafbb1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/eval_not_self.phpt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/eval_not_self.phpt"));

        // line 1
        echo "--TEST--
Test eval()'d deprecation is not considered as self
--FILE--
<?php

\$k = 'SYMFONY_DEPRECATIONS_HELPER';
putenv(\$k.'='.\$_SERVER[\$k] = \$_ENV[\$k] = 'max[self]=0');
putenv('ANSICON');
putenv('ConEmuANSI');
putenv('TERM');

\$vendor = __DIR__;
while (!file_exists(\$vendor.'/vendor')) {
    \$vendor = dirname(\$vendor);
}
define('PHPUNIT_COMPOSER_INSTALL', \$vendor.'/vendor/autoload.php');
require PHPUNIT_COMPOSER_INSTALL;
require_once __DIR__.'/../../bootstrap.php';
eval(\"@trigger_error('who knows where I come from?', E_USER_DEPRECATED);\");

?>
--EXPECTF--
Other deprecation notices (1)

  1x: who knows where I come from?
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/eval_not_self.phpt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--TEST--
Test eval()'d deprecation is not considered as self
--FILE--
<?php

\$k = 'SYMFONY_DEPRECATIONS_HELPER';
putenv(\$k.'='.\$_SERVER[\$k] = \$_ENV[\$k] = 'max[self]=0');
putenv('ANSICON');
putenv('ConEmuANSI');
putenv('TERM');

\$vendor = __DIR__;
while (!file_exists(\$vendor.'/vendor')) {
    \$vendor = dirname(\$vendor);
}
define('PHPUNIT_COMPOSER_INSTALL', \$vendor.'/vendor/autoload.php');
require PHPUNIT_COMPOSER_INSTALL;
require_once __DIR__.'/../../bootstrap.php';
eval(\"@trigger_error('who knows where I come from?', E_USER_DEPRECATED);\");

?>
--EXPECTF--
Other deprecation notices (1)

  1x: who knows where I come from?
", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/eval_not_self.phpt", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/eval_not_self.phpt");
    }
}
