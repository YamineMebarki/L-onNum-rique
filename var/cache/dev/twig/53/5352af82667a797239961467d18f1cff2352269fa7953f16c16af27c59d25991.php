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

/* vendor/symfony/form/Tests/ChoiceList/AbstractChoiceListTest.php */
class __TwigTemplate_e29c681596387ceffbc6bd6f66fbaaebcee21e34409800d83bda45d6e54f0467 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/AbstractChoiceListTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/AbstractChoiceListTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\ChoiceList;

use PHPUnit\\Framework\\TestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractChoiceListTest extends TestCase
{
    /**
     * @var \\Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface
     */
    protected \$list;

    /**
     * @var array
     */
    protected \$choices;

    /**
     * @var array
     */
    protected \$values;

    /**
     * @var array
     */
    protected \$structuredValues;

    /**
     * @var array
     */
    protected \$keys;

    /**
     * @var mixed
     */
    protected \$choice1;

    /**
     * @var mixed
     */
    protected \$choice2;

    /**
     * @var mixed
     */
    protected \$choice3;

    /**
     * @var mixed
     */
    protected \$choice4;

    /**
     * @var string
     */
    protected \$value1;

    /**
     * @var string
     */
    protected \$value2;

    /**
     * @var string
     */
    protected \$value3;

    /**
     * @var string
     */
    protected \$value4;

    /**
     * @var string
     */
    protected \$key1;

    /**
     * @var string
     */
    protected \$key2;

    /**
     * @var string
     */
    protected \$key3;

    /**
     * @var string
     */
    protected \$key4;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->list = \$this->createChoiceList();

        \$choices = \$this->getChoices();

        \$this->values = \$this->getValues();
        \$this->structuredValues = array_combine(array_keys(\$choices), \$this->values);
        \$this->choices = array_combine(\$this->values, \$choices);
        \$this->keys = array_combine(\$this->values, array_keys(\$choices));

        // allow access to the individual entries without relying on their indices
        reset(\$this->choices);
        reset(\$this->values);
        reset(\$this->keys);

        for (\$i = 1; \$i <= 4; ++\$i) {
            \$this->{'choice'.\$i} = current(\$this->choices);
            \$this->{'value'.\$i} = current(\$this->values);
            \$this->{'key'.\$i} = current(\$this->keys);

            next(\$this->choices);
            next(\$this->values);
            next(\$this->keys);
        }
    }

    public function testGetChoices()
    {
        \$this->assertSame(\$this->choices, \$this->list->getChoices());
    }

    public function testGetValues()
    {
        \$this->assertSame(\$this->values, \$this->list->getValues());
    }

    public function testGetStructuredValues()
    {
        \$this->assertSame(\$this->values, \$this->list->getStructuredValues());
    }

    public function testGetOriginalKeys()
    {
        \$this->assertSame(\$this->keys, \$this->list->getOriginalKeys());
    }

    public function testGetChoicesForValues()
    {
        \$values = [\$this->value1, \$this->value2];
        \$this->assertSame([\$this->choice1, \$this->choice2], \$this->list->getChoicesForValues(\$values));
    }

    public function testGetChoicesForValuesPreservesKeys()
    {
        \$values = [5 => \$this->value1, 8 => \$this->value2];
        \$this->assertSame([5 => \$this->choice1, 8 => \$this->choice2], \$this->list->getChoicesForValues(\$values));
    }

    public function testGetChoicesForValuesPreservesOrder()
    {
        \$values = [\$this->value2, \$this->value1];
        \$this->assertSame([\$this->choice2, \$this->choice1], \$this->list->getChoicesForValues(\$values));
    }

    public function testGetChoicesForValuesIgnoresNonExistingValues()
    {
        \$values = [\$this->value1, \$this->value2, 'foobar'];
        \$this->assertSame([\$this->choice1, \$this->choice2], \$this->list->getChoicesForValues(\$values));
    }

    // https://github.com/symfony/symfony/issues/3446
    public function testGetChoicesForValuesEmpty()
    {
        \$this->assertSame([], \$this->list->getChoicesForValues([]));
    }

    public function testGetValuesForChoices()
    {
        \$choices = [\$this->choice1, \$this->choice2];
        \$this->assertSame([\$this->value1, \$this->value2], \$this->list->getValuesForChoices(\$choices));
    }

    public function testGetValuesForChoicesPreservesKeys()
    {
        \$choices = [5 => \$this->choice1, 8 => \$this->choice2];
        \$this->assertSame([5 => \$this->value1, 8 => \$this->value2], \$this->list->getValuesForChoices(\$choices));
    }

    public function testGetValuesForChoicesPreservesOrder()
    {
        \$choices = [\$this->choice2, \$this->choice1];
        \$this->assertSame([\$this->value2, \$this->value1], \$this->list->getValuesForChoices(\$choices));
    }

    public function testGetValuesForChoicesIgnoresNonExistingChoices()
    {
        \$choices = [\$this->choice1, \$this->choice2, 'foobar'];
        \$this->assertSame([\$this->value1, \$this->value2], \$this->list->getValuesForChoices(\$choices));
    }

    public function testGetValuesForChoicesEmpty()
    {
        \$this->assertSame([], \$this->list->getValuesForChoices([]));
    }

    public function testGetChoicesForValuesWithNull()
    {
        \$values = \$this->list->getValuesForChoices([null]);

        \$this->assertNotEmpty(\$this->list->getChoicesForValues(\$values));
    }

    /**
     * @return \\Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface
     */
    abstract protected function createChoiceList();

    abstract protected function getChoices();

    abstract protected function getValues();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/ChoiceList/AbstractChoiceListTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\ChoiceList;

use PHPUnit\\Framework\\TestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractChoiceListTest extends TestCase
{
    /**
     * @var \\Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface
     */
    protected \$list;

    /**
     * @var array
     */
    protected \$choices;

    /**
     * @var array
     */
    protected \$values;

    /**
     * @var array
     */
    protected \$structuredValues;

    /**
     * @var array
     */
    protected \$keys;

    /**
     * @var mixed
     */
    protected \$choice1;

    /**
     * @var mixed
     */
    protected \$choice2;

    /**
     * @var mixed
     */
    protected \$choice3;

    /**
     * @var mixed
     */
    protected \$choice4;

    /**
     * @var string
     */
    protected \$value1;

    /**
     * @var string
     */
    protected \$value2;

    /**
     * @var string
     */
    protected \$value3;

    /**
     * @var string
     */
    protected \$value4;

    /**
     * @var string
     */
    protected \$key1;

    /**
     * @var string
     */
    protected \$key2;

    /**
     * @var string
     */
    protected \$key3;

    /**
     * @var string
     */
    protected \$key4;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->list = \$this->createChoiceList();

        \$choices = \$this->getChoices();

        \$this->values = \$this->getValues();
        \$this->structuredValues = array_combine(array_keys(\$choices), \$this->values);
        \$this->choices = array_combine(\$this->values, \$choices);
        \$this->keys = array_combine(\$this->values, array_keys(\$choices));

        // allow access to the individual entries without relying on their indices
        reset(\$this->choices);
        reset(\$this->values);
        reset(\$this->keys);

        for (\$i = 1; \$i <= 4; ++\$i) {
            \$this->{'choice'.\$i} = current(\$this->choices);
            \$this->{'value'.\$i} = current(\$this->values);
            \$this->{'key'.\$i} = current(\$this->keys);

            next(\$this->choices);
            next(\$this->values);
            next(\$this->keys);
        }
    }

    public function testGetChoices()
    {
        \$this->assertSame(\$this->choices, \$this->list->getChoices());
    }

    public function testGetValues()
    {
        \$this->assertSame(\$this->values, \$this->list->getValues());
    }

    public function testGetStructuredValues()
    {
        \$this->assertSame(\$this->values, \$this->list->getStructuredValues());
    }

    public function testGetOriginalKeys()
    {
        \$this->assertSame(\$this->keys, \$this->list->getOriginalKeys());
    }

    public function testGetChoicesForValues()
    {
        \$values = [\$this->value1, \$this->value2];
        \$this->assertSame([\$this->choice1, \$this->choice2], \$this->list->getChoicesForValues(\$values));
    }

    public function testGetChoicesForValuesPreservesKeys()
    {
        \$values = [5 => \$this->value1, 8 => \$this->value2];
        \$this->assertSame([5 => \$this->choice1, 8 => \$this->choice2], \$this->list->getChoicesForValues(\$values));
    }

    public function testGetChoicesForValuesPreservesOrder()
    {
        \$values = [\$this->value2, \$this->value1];
        \$this->assertSame([\$this->choice2, \$this->choice1], \$this->list->getChoicesForValues(\$values));
    }

    public function testGetChoicesForValuesIgnoresNonExistingValues()
    {
        \$values = [\$this->value1, \$this->value2, 'foobar'];
        \$this->assertSame([\$this->choice1, \$this->choice2], \$this->list->getChoicesForValues(\$values));
    }

    // https://github.com/symfony/symfony/issues/3446
    public function testGetChoicesForValuesEmpty()
    {
        \$this->assertSame([], \$this->list->getChoicesForValues([]));
    }

    public function testGetValuesForChoices()
    {
        \$choices = [\$this->choice1, \$this->choice2];
        \$this->assertSame([\$this->value1, \$this->value2], \$this->list->getValuesForChoices(\$choices));
    }

    public function testGetValuesForChoicesPreservesKeys()
    {
        \$choices = [5 => \$this->choice1, 8 => \$this->choice2];
        \$this->assertSame([5 => \$this->value1, 8 => \$this->value2], \$this->list->getValuesForChoices(\$choices));
    }

    public function testGetValuesForChoicesPreservesOrder()
    {
        \$choices = [\$this->choice2, \$this->choice1];
        \$this->assertSame([\$this->value2, \$this->value1], \$this->list->getValuesForChoices(\$choices));
    }

    public function testGetValuesForChoicesIgnoresNonExistingChoices()
    {
        \$choices = [\$this->choice1, \$this->choice2, 'foobar'];
        \$this->assertSame([\$this->value1, \$this->value2], \$this->list->getValuesForChoices(\$choices));
    }

    public function testGetValuesForChoicesEmpty()
    {
        \$this->assertSame([], \$this->list->getValuesForChoices([]));
    }

    public function testGetChoicesForValuesWithNull()
    {
        \$values = \$this->list->getValuesForChoices([null]);

        \$this->assertNotEmpty(\$this->list->getChoicesForValues(\$values));
    }

    /**
     * @return \\Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface
     */
    abstract protected function createChoiceList();

    abstract protected function getChoices();

    abstract protected function getValues();
}
", "vendor/symfony/form/Tests/ChoiceList/AbstractChoiceListTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/ChoiceList/AbstractChoiceListTest.php");
    }
}
