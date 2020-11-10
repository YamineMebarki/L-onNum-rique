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

/* vendor/symfony/serializer/Annotation/MaxDepth.php */
class __TwigTemplate_d077dec278b5a1aca911aa0f8e191eafd213cddda88fd0c2661eabfb97dc59ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Annotation/MaxDepth.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Annotation/MaxDepth.php"));

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

namespace Symfony\\Component\\Serializer\\Annotation;

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;

/**
 * Annotation class for @MaxDepth().
 *
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\"})
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class MaxDepth
{
    /**
     * @var int
     */
    private \$maxDepth;

    public function __construct(array \$data)
    {
        if (!isset(\$data['value'])) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation \"%s\" should be set.', \\get_class(\$this)));
        }

        if (!\\is_int(\$data['value']) || \$data['value'] <= 0) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation \"%s\" must be a positive integer.', \\get_class(\$this)));
        }

        \$this->maxDepth = \$data['value'];
    }

    public function getMaxDepth()
    {
        return \$this->maxDepth;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Annotation/MaxDepth.php";
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

namespace Symfony\\Component\\Serializer\\Annotation;

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;

/**
 * Annotation class for @MaxDepth().
 *
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\"})
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class MaxDepth
{
    /**
     * @var int
     */
    private \$maxDepth;

    public function __construct(array \$data)
    {
        if (!isset(\$data['value'])) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation \"%s\" should be set.', \\get_class(\$this)));
        }

        if (!\\is_int(\$data['value']) || \$data['value'] <= 0) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation \"%s\" must be a positive integer.', \\get_class(\$this)));
        }

        \$this->maxDepth = \$data['value'];
    }

    public function getMaxDepth()
    {
        return \$this->maxDepth;
    }
}
", "vendor/symfony/serializer/Annotation/MaxDepth.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Annotation/MaxDepth.php");
    }
}
