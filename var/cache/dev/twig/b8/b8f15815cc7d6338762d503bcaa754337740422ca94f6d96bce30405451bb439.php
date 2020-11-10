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

/* vendor/symfony/serializer/Annotation/SerializedName.php */
class __TwigTemplate_c8889d480677514ef2bb6d08e123c3239aae3f10e05402e71b87afcd2466f2ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Annotation/SerializedName.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Annotation/SerializedName.php"));

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
 * Annotation class for @SerializedName().
 *
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\"})
 *
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
final class SerializedName
{
    /**
     * @var string
     */
    private \$serializedName;

    public function __construct(array \$data)
    {
        if (!isset(\$data['value'])) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation \"%s\" should be set.', \\get_class(\$this)));
        }

        if (!\\is_string(\$data['value']) || empty(\$data['value'])) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation \"%s\" must be a non-empty string.', \\get_class(\$this)));
        }

        \$this->serializedName = \$data['value'];
    }

    public function getSerializedName(): string
    {
        return \$this->serializedName;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Annotation/SerializedName.php";
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
 * Annotation class for @SerializedName().
 *
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\"})
 *
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
final class SerializedName
{
    /**
     * @var string
     */
    private \$serializedName;

    public function __construct(array \$data)
    {
        if (!isset(\$data['value'])) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation \"%s\" should be set.', \\get_class(\$this)));
        }

        if (!\\is_string(\$data['value']) || empty(\$data['value'])) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation \"%s\" must be a non-empty string.', \\get_class(\$this)));
        }

        \$this->serializedName = \$data['value'];
    }

    public function getSerializedName(): string
    {
        return \$this->serializedName;
    }
}
", "vendor/symfony/serializer/Annotation/SerializedName.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Annotation/SerializedName.php");
    }
}
