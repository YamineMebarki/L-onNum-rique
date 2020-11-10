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

/* vendor/symfony/expression-language/Node/GetAttrNode.php */
class __TwigTemplate_1c36b2f58c575b723b7b27015a12576d2c5e674da252b8c0c2fa0acbe0fdf241 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/GetAttrNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/GetAttrNode.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Node;

use Symfony\\Component\\ExpressionLanguage\\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class GetAttrNode extends Node
{
    const PROPERTY_CALL = 1;
    const METHOD_CALL = 2;
    const ARRAY_CALL = 3;

    public function __construct(Node \$node, Node \$attribute, ArrayNode \$arguments, int \$type)
    {
        parent::__construct(
            ['node' => \$node, 'attribute' => \$attribute, 'arguments' => \$arguments],
            ['type' => \$type]
        );
    }

    public function compile(Compiler \$compiler)
    {
        switch (\$this->attributes['type']) {
            case self::PROPERTY_CALL:
                \$compiler
                    ->compile(\$this->nodes['node'])
                    ->raw('->')
                    ->raw(\$this->nodes['attribute']->attributes['value'])
                ;
                break;

            case self::METHOD_CALL:
                \$compiler
                    ->compile(\$this->nodes['node'])
                    ->raw('->')
                    ->raw(\$this->nodes['attribute']->attributes['value'])
                    ->raw('(')
                    ->compile(\$this->nodes['arguments'])
                    ->raw(')')
                ;
                break;

            case self::ARRAY_CALL:
                \$compiler
                    ->compile(\$this->nodes['node'])
                    ->raw('[')
                    ->compile(\$this->nodes['attribute'])->raw(']')
                ;
                break;
        }
    }

    public function evaluate(\$functions, \$values)
    {
        switch (\$this->attributes['type']) {
            case self::PROPERTY_CALL:
                \$obj = \$this->nodes['node']->evaluate(\$functions, \$values);
                if (!\\is_object(\$obj)) {
                    throw new \\RuntimeException('Unable to get a property on a non-object.');
                }

                \$property = \$this->nodes['attribute']->attributes['value'];

                return \$obj->\$property;

            case self::METHOD_CALL:
                \$obj = \$this->nodes['node']->evaluate(\$functions, \$values);
                if (!\\is_object(\$obj)) {
                    throw new \\RuntimeException('Unable to get a property on a non-object.');
                }
                if (!\\is_callable(\$toCall = [\$obj, \$this->nodes['attribute']->attributes['value']])) {
                    throw new \\RuntimeException(sprintf('Unable to call method \"%s\" of object \"%s\".', \$this->nodes['attribute']->attributes['value'], \\get_class(\$obj)));
                }

                return \$toCall(...array_values(\$this->nodes['arguments']->evaluate(\$functions, \$values)));

            case self::ARRAY_CALL:
                \$array = \$this->nodes['node']->evaluate(\$functions, \$values);
                if (!\\is_array(\$array) && !\$array instanceof \\ArrayAccess) {
                    throw new \\RuntimeException('Unable to get an item on a non-array.');
                }

                return \$array[\$this->nodes['attribute']->evaluate(\$functions, \$values)];
        }
    }

    public function toArray()
    {
        switch (\$this->attributes['type']) {
            case self::PROPERTY_CALL:
                return [\$this->nodes['node'], '.', \$this->nodes['attribute']];

            case self::METHOD_CALL:
                return [\$this->nodes['node'], '.', \$this->nodes['attribute'], '(', \$this->nodes['arguments'], ')'];

            case self::ARRAY_CALL:
                return [\$this->nodes['node'], '[', \$this->nodes['attribute'], ']'];
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Node/GetAttrNode.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Node;

use Symfony\\Component\\ExpressionLanguage\\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class GetAttrNode extends Node
{
    const PROPERTY_CALL = 1;
    const METHOD_CALL = 2;
    const ARRAY_CALL = 3;

    public function __construct(Node \$node, Node \$attribute, ArrayNode \$arguments, int \$type)
    {
        parent::__construct(
            ['node' => \$node, 'attribute' => \$attribute, 'arguments' => \$arguments],
            ['type' => \$type]
        );
    }

    public function compile(Compiler \$compiler)
    {
        switch (\$this->attributes['type']) {
            case self::PROPERTY_CALL:
                \$compiler
                    ->compile(\$this->nodes['node'])
                    ->raw('->')
                    ->raw(\$this->nodes['attribute']->attributes['value'])
                ;
                break;

            case self::METHOD_CALL:
                \$compiler
                    ->compile(\$this->nodes['node'])
                    ->raw('->')
                    ->raw(\$this->nodes['attribute']->attributes['value'])
                    ->raw('(')
                    ->compile(\$this->nodes['arguments'])
                    ->raw(')')
                ;
                break;

            case self::ARRAY_CALL:
                \$compiler
                    ->compile(\$this->nodes['node'])
                    ->raw('[')
                    ->compile(\$this->nodes['attribute'])->raw(']')
                ;
                break;
        }
    }

    public function evaluate(\$functions, \$values)
    {
        switch (\$this->attributes['type']) {
            case self::PROPERTY_CALL:
                \$obj = \$this->nodes['node']->evaluate(\$functions, \$values);
                if (!\\is_object(\$obj)) {
                    throw new \\RuntimeException('Unable to get a property on a non-object.');
                }

                \$property = \$this->nodes['attribute']->attributes['value'];

                return \$obj->\$property;

            case self::METHOD_CALL:
                \$obj = \$this->nodes['node']->evaluate(\$functions, \$values);
                if (!\\is_object(\$obj)) {
                    throw new \\RuntimeException('Unable to get a property on a non-object.');
                }
                if (!\\is_callable(\$toCall = [\$obj, \$this->nodes['attribute']->attributes['value']])) {
                    throw new \\RuntimeException(sprintf('Unable to call method \"%s\" of object \"%s\".', \$this->nodes['attribute']->attributes['value'], \\get_class(\$obj)));
                }

                return \$toCall(...array_values(\$this->nodes['arguments']->evaluate(\$functions, \$values)));

            case self::ARRAY_CALL:
                \$array = \$this->nodes['node']->evaluate(\$functions, \$values);
                if (!\\is_array(\$array) && !\$array instanceof \\ArrayAccess) {
                    throw new \\RuntimeException('Unable to get an item on a non-array.');
                }

                return \$array[\$this->nodes['attribute']->evaluate(\$functions, \$values)];
        }
    }

    public function toArray()
    {
        switch (\$this->attributes['type']) {
            case self::PROPERTY_CALL:
                return [\$this->nodes['node'], '.', \$this->nodes['attribute']];

            case self::METHOD_CALL:
                return [\$this->nodes['node'], '.', \$this->nodes['attribute'], '(', \$this->nodes['arguments'], ')'];

            case self::ARRAY_CALL:
                return [\$this->nodes['node'], '[', \$this->nodes['attribute'], ']'];
        }
    }
}
", "vendor/symfony/expression-language/Node/GetAttrNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Node/GetAttrNode.php");
    }
}
