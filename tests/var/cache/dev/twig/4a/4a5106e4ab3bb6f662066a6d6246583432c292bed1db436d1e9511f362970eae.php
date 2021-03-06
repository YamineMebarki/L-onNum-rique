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

/* vendor/symfony/security-core/Authorization/ExpressionLanguage.php */
class __TwigTemplate_c016cd7968f8c608948de058be5028e0917dbfbaf30ca39814752113c283515d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/ExpressionLanguage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/ExpressionLanguage.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authorization;

use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage as BaseExpressionLanguage;

if (!class_exists(BaseExpressionLanguage::class)) {
    throw new \\LogicException(sprintf('The \"%s\" class requires the \"ExpressionLanguage\" component. Try running \"composer require symfony/expression-language\".', ExpressionLanguage::class));
} else {
    /**
     * Adds some function to the default ExpressionLanguage.
     *
     * @author Fabien Potencier <fabien@symfony.com>
     *
     * @see ExpressionLanguageProvider
     */
    class ExpressionLanguage extends BaseExpressionLanguage
    {
        /**
         * {@inheritdoc}
         */
        public function __construct(CacheItemPoolInterface \$cache = null, array \$providers = [])
        {
            // prepend the default provider to let users override it easily
            array_unshift(\$providers, new ExpressionLanguageProvider());

            parent::__construct(\$cache, \$providers);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/ExpressionLanguage.php";
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

namespace Symfony\\Component\\Security\\Core\\Authorization;

use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage as BaseExpressionLanguage;

if (!class_exists(BaseExpressionLanguage::class)) {
    throw new \\LogicException(sprintf('The \"%s\" class requires the \"ExpressionLanguage\" component. Try running \"composer require symfony/expression-language\".', ExpressionLanguage::class));
} else {
    /**
     * Adds some function to the default ExpressionLanguage.
     *
     * @author Fabien Potencier <fabien@symfony.com>
     *
     * @see ExpressionLanguageProvider
     */
    class ExpressionLanguage extends BaseExpressionLanguage
    {
        /**
         * {@inheritdoc}
         */
        public function __construct(CacheItemPoolInterface \$cache = null, array \$providers = [])
        {
            // prepend the default provider to let users override it easily
            array_unshift(\$providers, new ExpressionLanguageProvider());

            parent::__construct(\$cache, \$providers);
        }
    }
}
", "vendor/symfony/security-core/Authorization/ExpressionLanguage.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/ExpressionLanguage.php");
    }
}
