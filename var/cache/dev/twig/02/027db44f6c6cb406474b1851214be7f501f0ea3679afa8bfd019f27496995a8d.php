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

/* vendor/symfony/serializer/Tests/Fixtures/MaxDepthDummy.php */
class __TwigTemplate_69a1ad0429d70ac985a8e87f036bb30bf089b9941498101f574a3c3275275f3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/MaxDepthDummy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/MaxDepthDummy.php"));

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

use Symfony\\Component\\Serializer\\Annotation\\MaxDepth;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class MaxDepthDummy
{
    /**
     * @MaxDepth(2)
     */
    public \$foo;

    public \$bar;

    /**
     * @var self
     */
    public \$child;

    /**
     * @MaxDepth(3)
     */
    public function getBar()
    {
        return \$this->bar;
    }

    public function getChild()
    {
        return \$this->child;
    }

    public function getFoo()
    {
        return \$this->foo;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Fixtures/MaxDepthDummy.php";
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

use Symfony\\Component\\Serializer\\Annotation\\MaxDepth;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class MaxDepthDummy
{
    /**
     * @MaxDepth(2)
     */
    public \$foo;

    public \$bar;

    /**
     * @var self
     */
    public \$child;

    /**
     * @MaxDepth(3)
     */
    public function getBar()
    {
        return \$this->bar;
    }

    public function getChild()
    {
        return \$this->child;
    }

    public function getFoo()
    {
        return \$this->foo;
    }
}
", "vendor/symfony/serializer/Tests/Fixtures/MaxDepthDummy.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Fixtures/MaxDepthDummy.php");
    }
}
