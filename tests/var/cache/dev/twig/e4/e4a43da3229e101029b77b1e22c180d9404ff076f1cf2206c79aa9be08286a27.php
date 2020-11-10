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

/* vendor/symfony/var-dumper/Caster/CutStub.php */
class __TwigTemplate_bab761c92bd52b9b189d61a196f33559eb9430762b0704f9922da88d14952ccb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/CutStub.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/CutStub.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Represents the main properties of a PHP variable, pre-casted by a caster.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CutStub extends Stub
{
    public function __construct(\$value)
    {
        \$this->value = \$value;

        switch (\\gettype(\$value)) {
            case 'object':
                \$this->type = self::TYPE_OBJECT;
                \$this->class = \\get_class(\$value);
                \$this->cut = -1;
                break;

            case 'array':
                \$this->type = self::TYPE_ARRAY;
                \$this->class = self::ARRAY_ASSOC;
                \$this->cut = \$this->value = \\count(\$value);
                break;

            case 'resource':
            case 'unknown type':
            case 'resource (closed)':
                \$this->type = self::TYPE_RESOURCE;
                \$this->handle = (int) \$value;
                if ('Unknown' === \$this->class = @get_resource_type(\$value)) {
                    \$this->class = 'Closed';
                }
                \$this->cut = -1;
                break;

            case 'string':
                \$this->type = self::TYPE_STRING;
                \$this->class = preg_match('//u', \$value) ? self::STRING_UTF8 : self::STRING_BINARY;
                \$this->cut = self::STRING_BINARY === \$this->class ? \\strlen(\$value) : mb_strlen(\$value, 'UTF-8');
                \$this->value = '';
                break;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Caster/CutStub.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Represents the main properties of a PHP variable, pre-casted by a caster.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CutStub extends Stub
{
    public function __construct(\$value)
    {
        \$this->value = \$value;

        switch (\\gettype(\$value)) {
            case 'object':
                \$this->type = self::TYPE_OBJECT;
                \$this->class = \\get_class(\$value);
                \$this->cut = -1;
                break;

            case 'array':
                \$this->type = self::TYPE_ARRAY;
                \$this->class = self::ARRAY_ASSOC;
                \$this->cut = \$this->value = \\count(\$value);
                break;

            case 'resource':
            case 'unknown type':
            case 'resource (closed)':
                \$this->type = self::TYPE_RESOURCE;
                \$this->handle = (int) \$value;
                if ('Unknown' === \$this->class = @get_resource_type(\$value)) {
                    \$this->class = 'Closed';
                }
                \$this->cut = -1;
                break;

            case 'string':
                \$this->type = self::TYPE_STRING;
                \$this->class = preg_match('//u', \$value) ? self::STRING_UTF8 : self::STRING_BINARY;
                \$this->cut = self::STRING_BINARY === \$this->class ? \\strlen(\$value) : mb_strlen(\$value, 'UTF-8');
                \$this->value = '';
                break;
        }
    }
}
", "vendor/symfony/var-dumper/Caster/CutStub.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/CutStub.php");
    }
}
