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

/* vendor/symfony/translation/Tests/Catalogue/MergeOperationTest.php */
class __TwigTemplate_967c33335131153c5ee1ab48152931223433a340a441b23ad72fbafe87a02621 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Catalogue/MergeOperationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Catalogue/MergeOperationTest.php"));

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

use Symfony\\Component\\Translation\\Catalogue\\MergeOperation;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\MessageCatalogueInterface;

class MergeOperationTest extends AbstractOperationTest
{
    public function testGetMessagesFromSingleDomain()
    {
        \$operation = \$this->createOperation(
            new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b']]),
            new MessageCatalogue('en', ['messages' => ['a' => 'new_a', 'c' => 'new_c']])
        );

        \$this->assertEquals(
            ['a' => 'old_a', 'b' => 'old_b', 'c' => 'new_c'],
            \$operation->getMessages('messages')
        );

        \$this->assertEquals(
            ['c' => 'new_c'],
            \$operation->getNewMessages('messages')
        );

        \$this->assertEquals(
            [],
            \$operation->getObsoleteMessages('messages')
        );
    }

    public function testGetResultFromSingleDomain()
    {
        \$this->assertEquals(
            new MessageCatalogue('en', [
                'messages' => ['a' => 'old_a', 'b' => 'old_b', 'c' => 'new_c'],
            ]),
            \$this->createOperation(
                new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b']]),
                new MessageCatalogue('en', ['messages' => ['a' => 'new_a', 'c' => 'new_c']])
            )->getResult()
        );
    }

    public function testGetResultFromIntlDomain()
    {
        \$this->assertEquals(
            new MessageCatalogue('en', [
                'messages' => ['a' => 'old_a', 'b' => 'old_b'],
                'messages+intl-icu' => ['d' => 'old_d', 'c' => 'new_c'],
            ]),
            \$this->createOperation(
                new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b'], 'messages+intl-icu' => ['d' => 'old_d']]),
                new MessageCatalogue('en', ['messages+intl-icu' => ['a' => 'new_a', 'c' => 'new_c']])
            )->getResult()
        );
    }

    public function testGetResultWithMetadata()
    {
        \$leftCatalogue = new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b']]);
        \$leftCatalogue->setMetadata('a', 'foo', 'messages');
        \$leftCatalogue->setMetadata('b', 'bar', 'messages');
        \$rightCatalogue = new MessageCatalogue('en', ['messages' => ['b' => 'new_b', 'c' => 'new_c']]);
        \$rightCatalogue->setMetadata('b', 'baz', 'messages');
        \$rightCatalogue->setMetadata('c', 'qux', 'messages');

        \$mergedCatalogue = new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b', 'c' => 'new_c']]);
        \$mergedCatalogue->setMetadata('a', 'foo', 'messages');
        \$mergedCatalogue->setMetadata('b', 'bar', 'messages');
        \$mergedCatalogue->setMetadata('c', 'qux', 'messages');

        \$this->assertEquals(
            \$mergedCatalogue,
            \$this->createOperation(
                \$leftCatalogue,
                \$rightCatalogue
            )->getResult()
        );
    }

    protected function createOperation(MessageCatalogueInterface \$source, MessageCatalogueInterface \$target)
    {
        return new MergeOperation(\$source, \$target);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Catalogue/MergeOperationTest.php";
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

use Symfony\\Component\\Translation\\Catalogue\\MergeOperation;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\MessageCatalogueInterface;

class MergeOperationTest extends AbstractOperationTest
{
    public function testGetMessagesFromSingleDomain()
    {
        \$operation = \$this->createOperation(
            new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b']]),
            new MessageCatalogue('en', ['messages' => ['a' => 'new_a', 'c' => 'new_c']])
        );

        \$this->assertEquals(
            ['a' => 'old_a', 'b' => 'old_b', 'c' => 'new_c'],
            \$operation->getMessages('messages')
        );

        \$this->assertEquals(
            ['c' => 'new_c'],
            \$operation->getNewMessages('messages')
        );

        \$this->assertEquals(
            [],
            \$operation->getObsoleteMessages('messages')
        );
    }

    public function testGetResultFromSingleDomain()
    {
        \$this->assertEquals(
            new MessageCatalogue('en', [
                'messages' => ['a' => 'old_a', 'b' => 'old_b', 'c' => 'new_c'],
            ]),
            \$this->createOperation(
                new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b']]),
                new MessageCatalogue('en', ['messages' => ['a' => 'new_a', 'c' => 'new_c']])
            )->getResult()
        );
    }

    public function testGetResultFromIntlDomain()
    {
        \$this->assertEquals(
            new MessageCatalogue('en', [
                'messages' => ['a' => 'old_a', 'b' => 'old_b'],
                'messages+intl-icu' => ['d' => 'old_d', 'c' => 'new_c'],
            ]),
            \$this->createOperation(
                new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b'], 'messages+intl-icu' => ['d' => 'old_d']]),
                new MessageCatalogue('en', ['messages+intl-icu' => ['a' => 'new_a', 'c' => 'new_c']])
            )->getResult()
        );
    }

    public function testGetResultWithMetadata()
    {
        \$leftCatalogue = new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b']]);
        \$leftCatalogue->setMetadata('a', 'foo', 'messages');
        \$leftCatalogue->setMetadata('b', 'bar', 'messages');
        \$rightCatalogue = new MessageCatalogue('en', ['messages' => ['b' => 'new_b', 'c' => 'new_c']]);
        \$rightCatalogue->setMetadata('b', 'baz', 'messages');
        \$rightCatalogue->setMetadata('c', 'qux', 'messages');

        \$mergedCatalogue = new MessageCatalogue('en', ['messages' => ['a' => 'old_a', 'b' => 'old_b', 'c' => 'new_c']]);
        \$mergedCatalogue->setMetadata('a', 'foo', 'messages');
        \$mergedCatalogue->setMetadata('b', 'bar', 'messages');
        \$mergedCatalogue->setMetadata('c', 'qux', 'messages');

        \$this->assertEquals(
            \$mergedCatalogue,
            \$this->createOperation(
                \$leftCatalogue,
                \$rightCatalogue
            )->getResult()
        );
    }

    protected function createOperation(MessageCatalogueInterface \$source, MessageCatalogueInterface \$target)
    {
        return new MergeOperation(\$source, \$target);
    }
}
", "vendor/symfony/translation/Tests/Catalogue/MergeOperationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Catalogue/MergeOperationTest.php");
    }
}
