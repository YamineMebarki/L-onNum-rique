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

/* vendor/symfony/property-access/Tests/Fixtures/NonTraversableArrayObject.php */
class __TwigTemplate_7f56cbef5783a183503123a59a09a6a94b42d0909434ea4ed514f35d08732908 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/NonTraversableArrayObject.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/NonTraversableArrayObject.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

/**
 * This class is a hand written simplified version of PHP native `ArrayObject`
 * class, to show that it behaves differently than the PHP native implementation.
 */
class NonTraversableArrayObject implements \\ArrayAccess, \\Countable, \\Serializable
{
    private \$array;

    public function __construct(array \$array = null)
    {
        \$this->array = \$array ?: [];
    }

    public function offsetExists(\$offset)
    {
        return \\array_key_exists(\$offset, \$this->array);
    }

    public function offsetGet(\$offset)
    {
        return \$this->array[\$offset];
    }

    public function offsetSet(\$offset, \$value)
    {
        if (null === \$offset) {
            \$this->array[] = \$value;
        } else {
            \$this->array[\$offset] = \$value;
        }
    }

    public function offsetUnset(\$offset)
    {
        unset(\$this->array[\$offset]);
    }

    public function count()
    {
        return \\count(\$this->array);
    }

    public function __serialize(): array
    {
        return \$this->array;
    }

    public function serialize()
    {
        return serialize(\$this->__serialize());
    }

    public function __unserialize(array \$data): void
    {
        \$this->array = \$data;
    }

    public function unserialize(\$serialized)
    {
        \$this->__unserialize((array) unserialize((string) \$serialized));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/Fixtures/NonTraversableArrayObject.php";
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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

/**
 * This class is a hand written simplified version of PHP native `ArrayObject`
 * class, to show that it behaves differently than the PHP native implementation.
 */
class NonTraversableArrayObject implements \\ArrayAccess, \\Countable, \\Serializable
{
    private \$array;

    public function __construct(array \$array = null)
    {
        \$this->array = \$array ?: [];
    }

    public function offsetExists(\$offset)
    {
        return \\array_key_exists(\$offset, \$this->array);
    }

    public function offsetGet(\$offset)
    {
        return \$this->array[\$offset];
    }

    public function offsetSet(\$offset, \$value)
    {
        if (null === \$offset) {
            \$this->array[] = \$value;
        } else {
            \$this->array[\$offset] = \$value;
        }
    }

    public function offsetUnset(\$offset)
    {
        unset(\$this->array[\$offset]);
    }

    public function count()
    {
        return \\count(\$this->array);
    }

    public function __serialize(): array
    {
        return \$this->array;
    }

    public function serialize()
    {
        return serialize(\$this->__serialize());
    }

    public function __unserialize(array \$data): void
    {
        \$this->array = \$data;
    }

    public function unserialize(\$serialized)
    {
        \$this->__unserialize((array) unserialize((string) \$serialized));
    }
}
", "vendor/symfony/property-access/Tests/Fixtures/NonTraversableArrayObject.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/Fixtures/NonTraversableArrayObject.php");
    }
}
