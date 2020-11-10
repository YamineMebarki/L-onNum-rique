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

/* vendor/symfony/serializer/Extractor/ObjectPropertyListExtractor.php */
class __TwigTemplate_992eab125fcfe3605a8bab0acac6a4552f3d5ca00966d760035786e5d0e6db76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Extractor/ObjectPropertyListExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Extractor/ObjectPropertyListExtractor.php"));

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

namespace Symfony\\Component\\Serializer\\Extractor;

use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;

/**
 * @author David Maicher <mail@dmaicher.de>
 *
 * @experimental in 4.3
 */
final class ObjectPropertyListExtractor implements ObjectPropertyListExtractorInterface
{
    private \$propertyListExtractor;
    private \$objectClassResolver;

    public function __construct(PropertyListExtractorInterface \$propertyListExtractor, callable \$objectClassResolver = null)
    {
        \$this->propertyListExtractor = \$propertyListExtractor;
        \$this->objectClassResolver = \$objectClassResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$object, array \$context = []): ?array
    {
        \$class = \$this->objectClassResolver ? (\$this->objectClassResolver)(\$object) : \\get_class(\$object);

        return \$this->propertyListExtractor->getProperties(\$class, \$context);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Extractor/ObjectPropertyListExtractor.php";
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

namespace Symfony\\Component\\Serializer\\Extractor;

use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;

/**
 * @author David Maicher <mail@dmaicher.de>
 *
 * @experimental in 4.3
 */
final class ObjectPropertyListExtractor implements ObjectPropertyListExtractorInterface
{
    private \$propertyListExtractor;
    private \$objectClassResolver;

    public function __construct(PropertyListExtractorInterface \$propertyListExtractor, callable \$objectClassResolver = null)
    {
        \$this->propertyListExtractor = \$propertyListExtractor;
        \$this->objectClassResolver = \$objectClassResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$object, array \$context = []): ?array
    {
        \$class = \$this->objectClassResolver ? (\$this->objectClassResolver)(\$object) : \\get_class(\$object);

        return \$this->propertyListExtractor->getProperties(\$class, \$context);
    }
}
", "vendor/symfony/serializer/Extractor/ObjectPropertyListExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Extractor/ObjectPropertyListExtractor.php");
    }
}
