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

/* vendor/symfony/translation/Tests/Catalogue/AbstractOperationTest.php */
class __TwigTemplate_988b3125d2ddb2babac4b49230257e1c975b850d43560b8e77e4d2936cacf757 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Catalogue/AbstractOperationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Catalogue/AbstractOperationTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\Catalogue;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\MessageCatalogueInterface;

abstract class AbstractOperationTest extends TestCase
{
    public function testGetEmptyDomains()
    {
        \$this->assertEquals(
            [],
            \$this->createOperation(
                new MessageCatalogue('en'),
                new MessageCatalogue('en')
            )->getDomains()
        );
    }

    public function testGetMergedDomains()
    {
        \$this->assertEquals(
            ['a', 'b', 'c'],
            \$this->createOperation(
                new MessageCatalogue('en', ['a' => [], 'b' => []]),
                new MessageCatalogue('en', ['b' => [], 'c' => []])
            )->getDomains()
        );
    }

    public function testGetMessagesFromUnknownDomain()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->createOperation(
            new MessageCatalogue('en'),
            new MessageCatalogue('en')
        )->getMessages('domain');
    }

    public function testGetEmptyMessages()
    {
        \$this->assertEquals(
            [],
            \$this->createOperation(
                new MessageCatalogue('en', ['a' => []]),
                new MessageCatalogue('en')
            )->getMessages('a')
        );
    }

    public function testGetEmptyResult()
    {
        \$this->assertEquals(
            new MessageCatalogue('en'),
            \$this->createOperation(
                new MessageCatalogue('en'),
                new MessageCatalogue('en')
            )->getResult()
        );
    }

    abstract protected function createOperation(MessageCatalogueInterface \$source, MessageCatalogueInterface \$target);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Catalogue/AbstractOperationTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\Catalogue;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\MessageCatalogueInterface;

abstract class AbstractOperationTest extends TestCase
{
    public function testGetEmptyDomains()
    {
        \$this->assertEquals(
            [],
            \$this->createOperation(
                new MessageCatalogue('en'),
                new MessageCatalogue('en')
            )->getDomains()
        );
    }

    public function testGetMergedDomains()
    {
        \$this->assertEquals(
            ['a', 'b', 'c'],
            \$this->createOperation(
                new MessageCatalogue('en', ['a' => [], 'b' => []]),
                new MessageCatalogue('en', ['b' => [], 'c' => []])
            )->getDomains()
        );
    }

    public function testGetMessagesFromUnknownDomain()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->createOperation(
            new MessageCatalogue('en'),
            new MessageCatalogue('en')
        )->getMessages('domain');
    }

    public function testGetEmptyMessages()
    {
        \$this->assertEquals(
            [],
            \$this->createOperation(
                new MessageCatalogue('en', ['a' => []]),
                new MessageCatalogue('en')
            )->getMessages('a')
        );
    }

    public function testGetEmptyResult()
    {
        \$this->assertEquals(
            new MessageCatalogue('en'),
            \$this->createOperation(
                new MessageCatalogue('en'),
                new MessageCatalogue('en')
            )->getResult()
        );
    }

    abstract protected function createOperation(MessageCatalogueInterface \$source, MessageCatalogueInterface \$target);
}
", "vendor/symfony/translation/Tests/Catalogue/AbstractOperationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Catalogue/AbstractOperationTest.php");
    }
}
