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

/* vendor/symfony/form/Tests/Fixtures/TestExtension.php */
class __TwigTemplate_db4d13a4a50a4c1fc56ffea89806e1e6958a915427b4836cbacccda8e15c79f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/TestExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/TestExtension.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Fixtures;

use Symfony\\Component\\Form\\FormExtensionInterface;
use Symfony\\Component\\Form\\FormTypeExtensionInterface;
use Symfony\\Component\\Form\\FormTypeGuesserInterface;
use Symfony\\Component\\Form\\FormTypeInterface;

class TestExtension implements FormExtensionInterface
{
    private \$types = [];

    private \$extensions = [];

    private \$guesser;

    public function __construct(FormTypeGuesserInterface \$guesser)
    {
        \$this->guesser = \$guesser;
    }

    public function addType(FormTypeInterface \$type)
    {
        \$this->types[\\get_class(\$type)] = \$type;
    }

    public function getType(\$name)
    {
        return isset(\$this->types[\$name]) ? \$this->types[\$name] : null;
    }

    public function hasType(\$name)
    {
        return isset(\$this->types[\$name]);
    }

    public function addTypeExtension(FormTypeExtensionInterface \$extension)
    {
        foreach (\$extension::getExtendedTypes() as \$type) {
            if (!isset(\$this->extensions[\$type])) {
                \$this->extensions[\$type] = [];
            }

            \$this->extensions[\$type][] = \$extension;
        }
    }

    public function getTypeExtensions(\$name)
    {
        return isset(\$this->extensions[\$name]) ? \$this->extensions[\$name] : [];
    }

    public function hasTypeExtensions(\$name)
    {
        return isset(\$this->extensions[\$name]);
    }

    public function getTypeGuesser()
    {
        return \$this->guesser;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Fixtures/TestExtension.php";
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

namespace Symfony\\Component\\Form\\Tests\\Fixtures;

use Symfony\\Component\\Form\\FormExtensionInterface;
use Symfony\\Component\\Form\\FormTypeExtensionInterface;
use Symfony\\Component\\Form\\FormTypeGuesserInterface;
use Symfony\\Component\\Form\\FormTypeInterface;

class TestExtension implements FormExtensionInterface
{
    private \$types = [];

    private \$extensions = [];

    private \$guesser;

    public function __construct(FormTypeGuesserInterface \$guesser)
    {
        \$this->guesser = \$guesser;
    }

    public function addType(FormTypeInterface \$type)
    {
        \$this->types[\\get_class(\$type)] = \$type;
    }

    public function getType(\$name)
    {
        return isset(\$this->types[\$name]) ? \$this->types[\$name] : null;
    }

    public function hasType(\$name)
    {
        return isset(\$this->types[\$name]);
    }

    public function addTypeExtension(FormTypeExtensionInterface \$extension)
    {
        foreach (\$extension::getExtendedTypes() as \$type) {
            if (!isset(\$this->extensions[\$type])) {
                \$this->extensions[\$type] = [];
            }

            \$this->extensions[\$type][] = \$extension;
        }
    }

    public function getTypeExtensions(\$name)
    {
        return isset(\$this->extensions[\$name]) ? \$this->extensions[\$name] : [];
    }

    public function hasTypeExtensions(\$name)
    {
        return isset(\$this->extensions[\$name]);
    }

    public function getTypeGuesser()
    {
        return \$this->guesser;
    }
}
", "vendor/symfony/form/Tests/Fixtures/TestExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/TestExtension.php");
    }
}
