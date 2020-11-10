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

/* vendor/symfony/security-bundle/Tests/CacheWarmer/ExpressionCacheWarmerTest.php */
class __TwigTemplate_4bfc5d8c97630d4b96b7ff12c7c2691b5e458ad34709be027da391278be378b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/CacheWarmer/ExpressionCacheWarmerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/CacheWarmer/ExpressionCacheWarmerTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\CacheWarmer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\CacheWarmer\\ExpressionCacheWarmer;
use Symfony\\Component\\ExpressionLanguage\\Expression;
use Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage;

class ExpressionCacheWarmerTest extends TestCase
{
    public function testWarmUp()
    {
        \$expressions = [new Expression('A'), new Expression('B')];

        \$expressionLang = \$this->createMock(ExpressionLanguage::class);
        \$expressionLang->expects(\$this->exactly(2))
            ->method('parse')
            ->withConsecutive(
                [\$expressions[0], ['token', 'user', 'object', 'subject', 'roles', 'request', 'trust_resolver']],
                [\$expressions[1], ['token', 'user', 'object', 'subject', 'roles', 'request', 'trust_resolver']]
            );

        (new ExpressionCacheWarmer(\$expressions, \$expressionLang))->warmUp('');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/CacheWarmer/ExpressionCacheWarmerTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\CacheWarmer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\CacheWarmer\\ExpressionCacheWarmer;
use Symfony\\Component\\ExpressionLanguage\\Expression;
use Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage;

class ExpressionCacheWarmerTest extends TestCase
{
    public function testWarmUp()
    {
        \$expressions = [new Expression('A'), new Expression('B')];

        \$expressionLang = \$this->createMock(ExpressionLanguage::class);
        \$expressionLang->expects(\$this->exactly(2))
            ->method('parse')
            ->withConsecutive(
                [\$expressions[0], ['token', 'user', 'object', 'subject', 'roles', 'request', 'trust_resolver']],
                [\$expressions[1], ['token', 'user', 'object', 'subject', 'roles', 'request', 'trust_resolver']]
            );

        (new ExpressionCacheWarmer(\$expressions, \$expressionLang))->warmUp('');
    }
}
", "vendor/symfony/security-bundle/Tests/CacheWarmer/ExpressionCacheWarmerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/CacheWarmer/ExpressionCacheWarmerTest.php");
    }
}
