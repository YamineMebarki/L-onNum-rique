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

/* vendor/symfony/twig-bridge/UndefinedCallableHandler.php */
class __TwigTemplate_e08df67f0f41868f93f1771fee210d323a794793b5d17db99e5c6340f722abce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/UndefinedCallableHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/UndefinedCallableHandler.php"));

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

namespace Symfony\\Bridge\\Twig;

use Symfony\\Bundle\\FullStack;
use Twig\\Error\\SyntaxError;

/**
 * @internal
 */
class UndefinedCallableHandler
{
    private static \$filterComponents = [
        'humanize' => 'form',
        'trans' => 'translation',
        'transchoice' => 'translation',
        'yaml_encode' => 'yaml',
        'yaml_dump' => 'yaml',
    ];

    private static \$functionComponents = [
        'asset' => 'asset',
        'asset_version' => 'asset',
        'dump' => 'debug-bundle',
        'expression' => 'expression-language',
        'form_widget' => 'form',
        'form_errors' => 'form',
        'form_label' => 'form',
        'form_help' => 'form',
        'form_row' => 'form',
        'form_rest' => 'form',
        'form' => 'form',
        'form_start' => 'form',
        'form_end' => 'form',
        'csrf_token' => 'form',
        'logout_url' => 'security-http',
        'logout_path' => 'security-http',
        'is_granted' => 'security-core',
        'link' => 'web-link',
        'preload' => 'web-link',
        'dns_prefetch' => 'web-link',
        'preconnect' => 'web-link',
        'prefetch' => 'web-link',
        'prerender' => 'web-link',
        'workflow_can' => 'workflow',
        'workflow_transitions' => 'workflow',
        'workflow_has_marked_place' => 'workflow',
        'workflow_marked_places' => 'workflow',
    ];

    private static \$fullStackEnable = [
        'form' => 'enable \"framework.form\"',
        'security-core' => 'add the \"SecurityBundle\"',
        'security-http' => 'add the \"SecurityBundle\"',
        'web-link' => 'enable \"framework.web_link\"',
        'workflow' => 'enable \"framework.workflows\"',
    ];

    public static function onUndefinedFilter(\$name)
    {
        if (!isset(self::\$filterComponents[\$name])) {
            return false;
        }

        self::onUndefined(\$name, 'filter', self::\$filterComponents[\$name]);

        return true;
    }

    public static function onUndefinedFunction(\$name)
    {
        if (!isset(self::\$functionComponents[\$name])) {
            return false;
        }

        self::onUndefined(\$name, 'function', self::\$functionComponents[\$name]);

        return true;
    }

    private static function onUndefined(\$name, \$type, \$component)
    {
        if (class_exists(FullStack::class) && isset(self::\$fullStackEnable[\$component])) {
            throw new SyntaxError(sprintf('Did you forget to %s? Unknown %s \"%s\".', self::\$fullStackEnable[\$component], \$type, \$name));
        }

        throw new SyntaxError(sprintf('Did you forget to run \"composer require symfony/%s\"? Unknown %s \"%s\".', \$component, \$type, \$name));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/UndefinedCallableHandler.php";
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

namespace Symfony\\Bridge\\Twig;

use Symfony\\Bundle\\FullStack;
use Twig\\Error\\SyntaxError;

/**
 * @internal
 */
class UndefinedCallableHandler
{
    private static \$filterComponents = [
        'humanize' => 'form',
        'trans' => 'translation',
        'transchoice' => 'translation',
        'yaml_encode' => 'yaml',
        'yaml_dump' => 'yaml',
    ];

    private static \$functionComponents = [
        'asset' => 'asset',
        'asset_version' => 'asset',
        'dump' => 'debug-bundle',
        'expression' => 'expression-language',
        'form_widget' => 'form',
        'form_errors' => 'form',
        'form_label' => 'form',
        'form_help' => 'form',
        'form_row' => 'form',
        'form_rest' => 'form',
        'form' => 'form',
        'form_start' => 'form',
        'form_end' => 'form',
        'csrf_token' => 'form',
        'logout_url' => 'security-http',
        'logout_path' => 'security-http',
        'is_granted' => 'security-core',
        'link' => 'web-link',
        'preload' => 'web-link',
        'dns_prefetch' => 'web-link',
        'preconnect' => 'web-link',
        'prefetch' => 'web-link',
        'prerender' => 'web-link',
        'workflow_can' => 'workflow',
        'workflow_transitions' => 'workflow',
        'workflow_has_marked_place' => 'workflow',
        'workflow_marked_places' => 'workflow',
    ];

    private static \$fullStackEnable = [
        'form' => 'enable \"framework.form\"',
        'security-core' => 'add the \"SecurityBundle\"',
        'security-http' => 'add the \"SecurityBundle\"',
        'web-link' => 'enable \"framework.web_link\"',
        'workflow' => 'enable \"framework.workflows\"',
    ];

    public static function onUndefinedFilter(\$name)
    {
        if (!isset(self::\$filterComponents[\$name])) {
            return false;
        }

        self::onUndefined(\$name, 'filter', self::\$filterComponents[\$name]);

        return true;
    }

    public static function onUndefinedFunction(\$name)
    {
        if (!isset(self::\$functionComponents[\$name])) {
            return false;
        }

        self::onUndefined(\$name, 'function', self::\$functionComponents[\$name]);

        return true;
    }

    private static function onUndefined(\$name, \$type, \$component)
    {
        if (class_exists(FullStack::class) && isset(self::\$fullStackEnable[\$component])) {
            throw new SyntaxError(sprintf('Did you forget to %s? Unknown %s \"%s\".', self::\$fullStackEnable[\$component], \$type, \$name));
        }

        throw new SyntaxError(sprintf('Did you forget to run \"composer require symfony/%s\"? Unknown %s \"%s\".', \$component, \$type, \$name));
    }
}
", "vendor/symfony/twig-bridge/UndefinedCallableHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/UndefinedCallableHandler.php");
    }
}
