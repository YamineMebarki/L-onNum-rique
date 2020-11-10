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

/* vendor/symfony/phpunit-bridge/bootstrap.php */
class __TwigTemplate_676f073f1732e61c1261c4920f6250be534706e54943c14cff6b996c9afa4a41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/bootstrap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/bootstrap.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\\Common\\Annotations\\AnnotationRegistry;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler;

// Detect if we need to serialize deprecations to a file.
if (\$file = getenv('SYMFONY_DEPRECATIONS_SERIALIZE')) {
    DeprecationErrorHandler::collectDeprecations(\$file);

    return;
}

// Detect if we're loaded by an actual run of phpunit
if (!defined('PHPUNIT_COMPOSER_INSTALL') && !class_exists('PHPUnit_TextUI_Command', false) && !class_exists('PHPUnit\\TextUI\\Command', false)) {
    return;
}

// Enforce a consistent locale
setlocale(LC_ALL, 'C');

if (!class_exists('Doctrine\\Common\\Annotations\\AnnotationRegistry', false) && class_exists('Doctrine\\Common\\Annotations\\AnnotationRegistry')) {
    if (method_exists('Doctrine\\Common\\Annotations\\AnnotationRegistry', 'registerUniqueLoader')) {
        AnnotationRegistry::registerUniqueLoader('class_exists');
    } else {
        AnnotationRegistry::registerLoader('class_exists');
    }
}

if ('disabled' !== getenv('SYMFONY_DEPRECATIONS_HELPER')) {
    DeprecationErrorHandler::register(getenv('SYMFONY_DEPRECATIONS_HELPER'));
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/bootstrap.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\\Common\\Annotations\\AnnotationRegistry;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler;

// Detect if we need to serialize deprecations to a file.
if (\$file = getenv('SYMFONY_DEPRECATIONS_SERIALIZE')) {
    DeprecationErrorHandler::collectDeprecations(\$file);

    return;
}

// Detect if we're loaded by an actual run of phpunit
if (!defined('PHPUNIT_COMPOSER_INSTALL') && !class_exists('PHPUnit_TextUI_Command', false) && !class_exists('PHPUnit\\TextUI\\Command', false)) {
    return;
}

// Enforce a consistent locale
setlocale(LC_ALL, 'C');

if (!class_exists('Doctrine\\Common\\Annotations\\AnnotationRegistry', false) && class_exists('Doctrine\\Common\\Annotations\\AnnotationRegistry')) {
    if (method_exists('Doctrine\\Common\\Annotations\\AnnotationRegistry', 'registerUniqueLoader')) {
        AnnotationRegistry::registerUniqueLoader('class_exists');
    } else {
        AnnotationRegistry::registerLoader('class_exists');
    }
}

if ('disabled' !== getenv('SYMFONY_DEPRECATIONS_HELPER')) {
    DeprecationErrorHandler::register(getenv('SYMFONY_DEPRECATIONS_HELPER'));
}
", "vendor/symfony/phpunit-bridge/bootstrap.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/bootstrap.php");
    }
}
