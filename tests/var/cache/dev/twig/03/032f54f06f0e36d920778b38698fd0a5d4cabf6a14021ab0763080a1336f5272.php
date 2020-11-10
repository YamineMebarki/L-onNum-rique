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

/* vendor/symfony/property-info/Tests/PropertyInfoCacheExtractorTest.php */
class __TwigTemplate_804de256d220e18b30b1f62f793f849567343119513e8172994006740e148060 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/PropertyInfoCacheExtractorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/PropertyInfoCacheExtractorTest.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Tests;

use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\PropertyInfo\\PropertyInfoCacheExtractor;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PropertyInfoCacheExtractorTest extends AbstractPropertyInfoExtractorTest
{
    protected function setUp(): void
    {
        parent::setUp();

        \$this->propertyInfo = new PropertyInfoCacheExtractor(\$this->propertyInfo, new ArrayAdapter());
    }

    public function testGetShortDescription()
    {
        parent::testGetShortDescription();
        parent::testGetShortDescription();
    }

    public function testGetLongDescription()
    {
        parent::testGetLongDescription();
        parent::testGetLongDescription();
    }

    public function testGetTypes()
    {
        parent::testGetTypes();
        parent::testGetTypes();
    }

    public function testIsReadable()
    {
        parent::testIsReadable();
        parent::testIsReadable();
    }

    public function testIsWritable()
    {
        parent::testIsWritable();
        parent::testIsWritable();
    }

    public function testGetProperties()
    {
        parent::testGetProperties();
        parent::testGetProperties();
    }

    public function testIsInitializable()
    {
        parent::testIsInitializable();
        parent::testIsInitializable();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/PropertyInfoCacheExtractorTest.php";
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

namespace Symfony\\Component\\PropertyInfo\\Tests;

use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\PropertyInfo\\PropertyInfoCacheExtractor;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PropertyInfoCacheExtractorTest extends AbstractPropertyInfoExtractorTest
{
    protected function setUp(): void
    {
        parent::setUp();

        \$this->propertyInfo = new PropertyInfoCacheExtractor(\$this->propertyInfo, new ArrayAdapter());
    }

    public function testGetShortDescription()
    {
        parent::testGetShortDescription();
        parent::testGetShortDescription();
    }

    public function testGetLongDescription()
    {
        parent::testGetLongDescription();
        parent::testGetLongDescription();
    }

    public function testGetTypes()
    {
        parent::testGetTypes();
        parent::testGetTypes();
    }

    public function testIsReadable()
    {
        parent::testIsReadable();
        parent::testIsReadable();
    }

    public function testIsWritable()
    {
        parent::testIsWritable();
        parent::testIsWritable();
    }

    public function testGetProperties()
    {
        parent::testGetProperties();
        parent::testGetProperties();
    }

    public function testIsInitializable()
    {
        parent::testIsInitializable();
        parent::testIsInitializable();
    }
}
", "vendor/symfony/property-info/Tests/PropertyInfoCacheExtractorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/PropertyInfoCacheExtractorTest.php");
    }
}
