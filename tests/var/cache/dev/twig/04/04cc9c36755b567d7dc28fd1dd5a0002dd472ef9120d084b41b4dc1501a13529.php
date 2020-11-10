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

/* vendor/symfony/dom-crawler/Test/Constraint/CrawlerSelectorTextSame.php */
class __TwigTemplate_08ff9e89b658c392355fe455388d11d127004fc27ec0f750411450ec89ccf92d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Test/Constraint/CrawlerSelectorTextSame.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Test/Constraint/CrawlerSelectorTextSame.php"));

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

namespace Symfony\\Component\\DomCrawler\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\DomCrawler\\Crawler;

final class CrawlerSelectorTextSame extends Constraint
{
    private \$selector;
    private \$expectedText;

    public function __construct(string \$selector, string \$expectedText)
    {
        \$this->selector = \$selector;
        \$this->expectedText = \$expectedText;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has a node matching selector \"%s\" with content \"%s\"', \$this->selector, \$this->expectedText);
    }

    /**
     * @param Crawler \$crawler
     *
     * {@inheritdoc}
     */
    protected function matches(\$crawler): bool
    {
        \$crawler = \$crawler->filter(\$this->selector);
        if (!\\count(\$crawler)) {
            return false;
        }

        return \$this->expectedText === trim(\$crawler->text());
    }

    /**
     * @param Crawler \$crawler
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$crawler): string
    {
        return 'the Crawler '.\$this->toString();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Test/Constraint/CrawlerSelectorTextSame.php";
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

namespace Symfony\\Component\\DomCrawler\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\DomCrawler\\Crawler;

final class CrawlerSelectorTextSame extends Constraint
{
    private \$selector;
    private \$expectedText;

    public function __construct(string \$selector, string \$expectedText)
    {
        \$this->selector = \$selector;
        \$this->expectedText = \$expectedText;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has a node matching selector \"%s\" with content \"%s\"', \$this->selector, \$this->expectedText);
    }

    /**
     * @param Crawler \$crawler
     *
     * {@inheritdoc}
     */
    protected function matches(\$crawler): bool
    {
        \$crawler = \$crawler->filter(\$this->selector);
        if (!\\count(\$crawler)) {
            return false;
        }

        return \$this->expectedText === trim(\$crawler->text());
    }

    /**
     * @param Crawler \$crawler
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$crawler): string
    {
        return 'the Crawler '.\$this->toString();
    }
}
", "vendor/symfony/dom-crawler/Test/Constraint/CrawlerSelectorTextSame.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Test/Constraint/CrawlerSelectorTextSame.php");
    }
}
