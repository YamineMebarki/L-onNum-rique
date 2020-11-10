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

/* vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/weak_vendors_on_vendor.phpt */
class __TwigTemplate_35b32c15897458dd6b843c1924661e66dc1965679c1341350e558109cff89f3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/weak_vendors_on_vendor.phpt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/weak_vendors_on_vendor.phpt"));

        // line 1
        echo "--TEST--
Test DeprecationErrorHandler with no self deprecations on vendor deprecation
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
require __DIR__.'/fake_vendor/autoload.php';
require __DIR__.'/fake_vendor/acme/lib/deprecation_riddled.php';

?>
--EXPECTF--
Unsilenced deprecation notices (3)

  2x: unsilenced foo deprecation
    2x in FooTestCase::testLegacyFoo

  1x: unsilenced bar deprecation
    1x in FooTestCase::testNonLegacyBar

Remaining direct deprecation notices (1)

  1x: silenced bar deprecation
    1x in FooTestCase::testNonLegacyBar

Legacy deprecation notices (2)

Other deprecation notices (1)

  1x: root deprecation
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/weak_vendors_on_vendor.phpt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--TEST--
Test DeprecationErrorHandler with no self deprecations on vendor deprecation
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
require __DIR__.'/fake_vendor/autoload.php';
require __DIR__.'/fake_vendor/acme/lib/deprecation_riddled.php';

?>
--EXPECTF--
Unsilenced deprecation notices (3)

  2x: unsilenced foo deprecation
    2x in FooTestCase::testLegacyFoo

  1x: unsilenced bar deprecation
    1x in FooTestCase::testNonLegacyBar

Remaining direct deprecation notices (1)

  1x: silenced bar deprecation
    1x in FooTestCase::testNonLegacyBar

Legacy deprecation notices (2)

Other deprecation notices (1)

  1x: root deprecation
", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/weak_vendors_on_vendor.phpt", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/weak_vendors_on_vendor.phpt");
    }
}
