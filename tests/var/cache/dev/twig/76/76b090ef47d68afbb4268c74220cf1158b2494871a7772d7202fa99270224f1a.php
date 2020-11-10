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

/* vendor/symfony/serializer/Tests/Fixtures/SiblingHolder.php */
class __TwigTemplate_1de09d62afd9939536b05242cb8b791d11b9331e29d4c07d60f29c134a7e1bb9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/SiblingHolder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/SiblingHolder.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Fixtures;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class SiblingHolder
{
    private \$sibling0;
    private \$sibling1;
    private \$sibling2;

    public function __construct()
    {
        \$sibling = new Sibling();

        \$this->sibling0 = \$sibling;
        \$this->sibling1 = \$sibling;
        \$this->sibling2 = \$sibling;
    }

    public function getSibling0()
    {
        return \$this->sibling0;
    }

    public function getSibling1()
    {
        return \$this->sibling1;
    }

    public function getSibling2()
    {
        return \$this->sibling2;
    }
}

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Sibling
{
    public function getCoopTilleuls()
    {
        return 'Les-Tilleuls.coop';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Fixtures/SiblingHolder.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Fixtures;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class SiblingHolder
{
    private \$sibling0;
    private \$sibling1;
    private \$sibling2;

    public function __construct()
    {
        \$sibling = new Sibling();

        \$this->sibling0 = \$sibling;
        \$this->sibling1 = \$sibling;
        \$this->sibling2 = \$sibling;
    }

    public function getSibling0()
    {
        return \$this->sibling0;
    }

    public function getSibling1()
    {
        return \$this->sibling1;
    }

    public function getSibling2()
    {
        return \$this->sibling2;
    }
}

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Sibling
{
    public function getCoopTilleuls()
    {
        return 'Les-Tilleuls.coop';
    }
}
", "vendor/symfony/serializer/Tests/Fixtures/SiblingHolder.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Fixtures/SiblingHolder.php");
    }
}
