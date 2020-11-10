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

/* vendor/symfony/twig-bridge/NodeVisitor/TranslationNodeVisitor.php */
class __TwigTemplate_79d5a555f76c6d3811b259fe8ee2c5a6d31d65cb9314bf546eaa2a742060bf77 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/NodeVisitor/TranslationNodeVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/NodeVisitor/TranslationNodeVisitor.php"));

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

namespace Symfony\\Bridge\\Twig\\NodeVisitor;

use Symfony\\Bridge\\Twig\\Node\\TransNode;
use Twig\\Environment;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Node;
use Twig\\NodeVisitor\\AbstractNodeVisitor;

/**
 * TranslationNodeVisitor extracts translation messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TranslationNodeVisitor extends AbstractNodeVisitor
{
    const UNDEFINED_DOMAIN = '_undefined';

    private \$enabled = false;
    private \$messages = [];

    public function enable()
    {
        \$this->enabled = true;
        \$this->messages = [];
    }

    public function disable()
    {
        \$this->enabled = false;
        \$this->messages = [];
    }

    public function getMessages()
    {
        return \$this->messages;
    }

    /**
     * {@inheritdoc}
     */
    protected function doEnterNode(Node \$node, Environment \$env)
    {
        if (!\$this->enabled) {
            return \$node;
        }

        if (
            \$node instanceof FilterExpression &&
            'trans' === \$node->getNode('filter')->getAttribute('value') &&
            \$node->getNode('node') instanceof ConstantExpression
        ) {
            // extract constant nodes with a trans filter
            \$this->messages[] = [
                \$node->getNode('node')->getAttribute('value'),
                \$this->getReadDomainFromArguments(\$node->getNode('arguments'), 1),
            ];
        } elseif (
            \$node instanceof FilterExpression &&
            'transchoice' === \$node->getNode('filter')->getAttribute('value') &&
            \$node->getNode('node') instanceof ConstantExpression
        ) {
            // extract constant nodes with a trans filter
            \$this->messages[] = [
                \$node->getNode('node')->getAttribute('value'),
                \$this->getReadDomainFromArguments(\$node->getNode('arguments'), 2),
            ];
        } elseif (\$node instanceof TransNode) {
            // extract trans nodes
            \$this->messages[] = [
                \$node->getNode('body')->getAttribute('data'),
                \$node->hasNode('domain') ? \$this->getReadDomainFromNode(\$node->getNode('domain')) : null,
            ];
        }

        return \$node;
    }

    /**
     * {@inheritdoc}
     */
    protected function doLeaveNode(Node \$node, Environment \$env)
    {
        return \$node;
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getPriority()
    {
        return 0;
    }

    private function getReadDomainFromArguments(Node \$arguments, int \$index): ?string
    {
        if (\$arguments->hasNode('domain')) {
            \$argument = \$arguments->getNode('domain');
        } elseif (\$arguments->hasNode(\$index)) {
            \$argument = \$arguments->getNode(\$index);
        } else {
            return null;
        }

        return \$this->getReadDomainFromNode(\$argument);
    }

    private function getReadDomainFromNode(Node \$node): ?string
    {
        if (\$node instanceof ConstantExpression) {
            return \$node->getAttribute('value');
        }

        return self::UNDEFINED_DOMAIN;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/NodeVisitor/TranslationNodeVisitor.php";
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

namespace Symfony\\Bridge\\Twig\\NodeVisitor;

use Symfony\\Bridge\\Twig\\Node\\TransNode;
use Twig\\Environment;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Node;
use Twig\\NodeVisitor\\AbstractNodeVisitor;

/**
 * TranslationNodeVisitor extracts translation messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TranslationNodeVisitor extends AbstractNodeVisitor
{
    const UNDEFINED_DOMAIN = '_undefined';

    private \$enabled = false;
    private \$messages = [];

    public function enable()
    {
        \$this->enabled = true;
        \$this->messages = [];
    }

    public function disable()
    {
        \$this->enabled = false;
        \$this->messages = [];
    }

    public function getMessages()
    {
        return \$this->messages;
    }

    /**
     * {@inheritdoc}
     */
    protected function doEnterNode(Node \$node, Environment \$env)
    {
        if (!\$this->enabled) {
            return \$node;
        }

        if (
            \$node instanceof FilterExpression &&
            'trans' === \$node->getNode('filter')->getAttribute('value') &&
            \$node->getNode('node') instanceof ConstantExpression
        ) {
            // extract constant nodes with a trans filter
            \$this->messages[] = [
                \$node->getNode('node')->getAttribute('value'),
                \$this->getReadDomainFromArguments(\$node->getNode('arguments'), 1),
            ];
        } elseif (
            \$node instanceof FilterExpression &&
            'transchoice' === \$node->getNode('filter')->getAttribute('value') &&
            \$node->getNode('node') instanceof ConstantExpression
        ) {
            // extract constant nodes with a trans filter
            \$this->messages[] = [
                \$node->getNode('node')->getAttribute('value'),
                \$this->getReadDomainFromArguments(\$node->getNode('arguments'), 2),
            ];
        } elseif (\$node instanceof TransNode) {
            // extract trans nodes
            \$this->messages[] = [
                \$node->getNode('body')->getAttribute('data'),
                \$node->hasNode('domain') ? \$this->getReadDomainFromNode(\$node->getNode('domain')) : null,
            ];
        }

        return \$node;
    }

    /**
     * {@inheritdoc}
     */
    protected function doLeaveNode(Node \$node, Environment \$env)
    {
        return \$node;
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getPriority()
    {
        return 0;
    }

    private function getReadDomainFromArguments(Node \$arguments, int \$index): ?string
    {
        if (\$arguments->hasNode('domain')) {
            \$argument = \$arguments->getNode('domain');
        } elseif (\$arguments->hasNode(\$index)) {
            \$argument = \$arguments->getNode(\$index);
        } else {
            return null;
        }

        return \$this->getReadDomainFromNode(\$argument);
    }

    private function getReadDomainFromNode(Node \$node): ?string
    {
        if (\$node instanceof ConstantExpression) {
            return \$node->getAttribute('value');
        }

        return self::UNDEFINED_DOMAIN;
    }
}
", "vendor/symfony/twig-bridge/NodeVisitor/TranslationNodeVisitor.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/NodeVisitor/TranslationNodeVisitor.php");
    }
}
