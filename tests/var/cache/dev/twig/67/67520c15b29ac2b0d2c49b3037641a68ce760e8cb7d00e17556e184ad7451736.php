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

/* vendor/symfony/twig-bridge/Tests/NodeVisitor/TwigNodeProvider.php */
class __TwigTemplate_18e3fe23818eb4093580590e3d293678f0a337e30596db72b17899fe60629d78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TwigNodeProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TwigNodeProvider.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\NodeVisitor;

use Symfony\\Bridge\\Twig\\Node\\TransDefaultDomainNode;
use Symfony\\Bridge\\Twig\\Node\\TransNode;
use Twig\\Node\\BodyNode;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;
use Twig\\Source;

class TwigNodeProvider
{
    public static function getModule(\$content)
    {
        return new ModuleNode(
            new ConstantExpression(\$content, 0),
            null,
            new ArrayExpression([], 0),
            new ArrayExpression([], 0),
            new ArrayExpression([], 0),
            null,
            new Source('', '')
        );
    }

    public static function getTransFilter(\$message, \$domain = null, \$arguments = null)
    {
        if (!\$arguments) {
            \$arguments = \$domain ? [
                new ArrayExpression([], 0),
                new ConstantExpression(\$domain, 0),
            ] : [];
        }

        return new FilterExpression(
            new ConstantExpression(\$message, 0),
            new ConstantExpression('trans', 0),
            new Node(\$arguments),
            0
        );
    }

    public static function getTransChoiceFilter(\$message, \$domain = null, \$arguments = null)
    {
        if (!\$arguments) {
            \$arguments = \$domain ? [
                new ConstantExpression(0, 0),
                new ArrayExpression([], 0),
                new ConstantExpression(\$domain, 0),
            ] : [];
        }

        return new FilterExpression(
            new ConstantExpression(\$message, 0),
            new ConstantExpression('transchoice', 0),
            new Node(\$arguments),
            0
        );
    }

    public static function getTransTag(\$message, \$domain = null)
    {
        return new TransNode(
            new BodyNode([], ['data' => \$message]),
            \$domain ? new ConstantExpression(\$domain, 0) : null
        );
    }

    public static function getTransDefaultDomainTag(\$domain)
    {
        return new TransDefaultDomainNode(
            new ConstantExpression(\$domain, 0)
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/NodeVisitor/TwigNodeProvider.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\NodeVisitor;

use Symfony\\Bridge\\Twig\\Node\\TransDefaultDomainNode;
use Symfony\\Bridge\\Twig\\Node\\TransNode;
use Twig\\Node\\BodyNode;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;
use Twig\\Source;

class TwigNodeProvider
{
    public static function getModule(\$content)
    {
        return new ModuleNode(
            new ConstantExpression(\$content, 0),
            null,
            new ArrayExpression([], 0),
            new ArrayExpression([], 0),
            new ArrayExpression([], 0),
            null,
            new Source('', '')
        );
    }

    public static function getTransFilter(\$message, \$domain = null, \$arguments = null)
    {
        if (!\$arguments) {
            \$arguments = \$domain ? [
                new ArrayExpression([], 0),
                new ConstantExpression(\$domain, 0),
            ] : [];
        }

        return new FilterExpression(
            new ConstantExpression(\$message, 0),
            new ConstantExpression('trans', 0),
            new Node(\$arguments),
            0
        );
    }

    public static function getTransChoiceFilter(\$message, \$domain = null, \$arguments = null)
    {
        if (!\$arguments) {
            \$arguments = \$domain ? [
                new ConstantExpression(0, 0),
                new ArrayExpression([], 0),
                new ConstantExpression(\$domain, 0),
            ] : [];
        }

        return new FilterExpression(
            new ConstantExpression(\$message, 0),
            new ConstantExpression('transchoice', 0),
            new Node(\$arguments),
            0
        );
    }

    public static function getTransTag(\$message, \$domain = null)
    {
        return new TransNode(
            new BodyNode([], ['data' => \$message]),
            \$domain ? new ConstantExpression(\$domain, 0) : null
        );
    }

    public static function getTransDefaultDomainTag(\$domain)
    {
        return new TransDefaultDomainNode(
            new ConstantExpression(\$domain, 0)
        );
    }
}
", "vendor/symfony/twig-bridge/Tests/NodeVisitor/TwigNodeProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/NodeVisitor/TwigNodeProvider.php");
    }
}
