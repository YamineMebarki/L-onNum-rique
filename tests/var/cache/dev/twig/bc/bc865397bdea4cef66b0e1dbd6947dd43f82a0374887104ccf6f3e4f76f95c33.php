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

/* vendor/symfony/dom-crawler/Link.php */
class __TwigTemplate_9e6aa0d92cdd4d6657970acba610d327b6fcc0c6222ccde35912f9171473f75a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Link.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Link.php"));

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

namespace Symfony\\Component\\DomCrawler;

/**
 * Link represents an HTML link (an HTML a, area or link tag).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Link extends AbstractUriElement
{
    protected function getRawUri()
    {
        return \$this->node->getAttribute('href');
    }

    protected function setNode(\\DOMElement \$node)
    {
        if ('a' !== \$node->nodeName && 'area' !== \$node->nodeName && 'link' !== \$node->nodeName) {
            throw new \\LogicException(sprintf('Unable to navigate from a \"%s\" tag.', \$node->nodeName));
        }

        \$this->node = \$node;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Link.php";
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

namespace Symfony\\Component\\DomCrawler;

/**
 * Link represents an HTML link (an HTML a, area or link tag).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Link extends AbstractUriElement
{
    protected function getRawUri()
    {
        return \$this->node->getAttribute('href');
    }

    protected function setNode(\\DOMElement \$node)
    {
        if ('a' !== \$node->nodeName && 'area' !== \$node->nodeName && 'link' !== \$node->nodeName) {
            throw new \\LogicException(sprintf('Unable to navigate from a \"%s\" tag.', \$node->nodeName));
        }

        \$this->node = \$node;
    }
}
", "vendor/symfony/dom-crawler/Link.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Link.php");
    }
}
