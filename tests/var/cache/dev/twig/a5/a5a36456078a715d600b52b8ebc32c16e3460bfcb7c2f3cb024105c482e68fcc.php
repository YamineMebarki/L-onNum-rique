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

/* vendor/symfony/serializer/Tests/Fixtures/DummyMessageNumberTwo.php */
class __TwigTemplate_c393ee1df5b202a1351bc9864db24248ad3aa513c5efb9639f58f64aafacc1b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/DummyMessageNumberTwo.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/DummyMessageNumberTwo.php"));

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

use Symfony\\Component\\Serializer\\Annotation\\Groups;

/**
 * @author Samuel Roze <samuel.roze@gmail.com>
 */
class DummyMessageNumberTwo implements DummyMessageInterface
{
    /**
     * @Groups({\"two\"})
     */
    public \$three;

    /**
     * @var DummyMessageNumberOne
     */
    private \$nested;

    public function setNested(DummyMessageNumberOne \$nested)
    {
        \$this->nested = \$nested;
    }

    public function getNested(): DummyMessageNumberOne
    {
        return \$this->nested;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Fixtures/DummyMessageNumberTwo.php";
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

use Symfony\\Component\\Serializer\\Annotation\\Groups;

/**
 * @author Samuel Roze <samuel.roze@gmail.com>
 */
class DummyMessageNumberTwo implements DummyMessageInterface
{
    /**
     * @Groups({\"two\"})
     */
    public \$three;

    /**
     * @var DummyMessageNumberOne
     */
    private \$nested;

    public function setNested(DummyMessageNumberOne \$nested)
    {
        \$this->nested = \$nested;
    }

    public function getNested(): DummyMessageNumberOne
    {
        return \$this->nested;
    }
}
", "vendor/symfony/serializer/Tests/Fixtures/DummyMessageNumberTwo.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Fixtures/DummyMessageNumberTwo.php");
    }
}
