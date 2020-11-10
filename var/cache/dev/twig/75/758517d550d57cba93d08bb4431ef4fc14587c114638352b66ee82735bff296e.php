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

/* vendor/symfony/form/Tests/ChoiceList/Loader/CallbackChoiceLoaderTest.php */
class __TwigTemplate_4ba81a71eebb4cfb09b9a8feea75b7f689d020de2e3f4147d446ce3b0f3afe04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/Loader/CallbackChoiceLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/Loader/CallbackChoiceLoaderTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\ChoiceList\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ChoiceList\\LazyChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\CallbackChoiceLoader;

/**
 * @author Jules Pietri <jules@heahprod.com>
 */
class CallbackChoiceLoaderTest extends TestCase
{
    /**
     * @var \\Symfony\\Component\\Form\\ChoiceList\\Loader\\CallbackChoiceLoader
     */
    private static \$loader;

    /**
     * @var callable
     */
    private static \$value;

    /**
     * @var array
     */
    private static \$choices;

    /**
     * @var string[]
     */
    private static \$choiceValues;

    /**
     * @var \\Symfony\\Component\\Form\\ChoiceList\\LazyChoiceList
     */
    private static \$lazyChoiceList;

    public static function setUpBeforeClass(): void
    {
        self::\$loader = new CallbackChoiceLoader(function () {
            return self::\$choices;
        });
        self::\$value = function (\$choice) {
            return isset(\$choice->value) ? \$choice->value : null;
        };
        self::\$choices = [
            (object) ['value' => 'choice_one'],
            (object) ['value' => 'choice_two'],
        ];
        self::\$choiceValues = ['choice_one', 'choice_two'];
        self::\$lazyChoiceList = new LazyChoiceList(self::\$loader, self::\$value);
    }

    public function testLoadChoiceList()
    {
        \$this->assertInstanceOf('\\Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface', self::\$loader->loadChoiceList(self::\$value));
    }

    public function testLoadChoiceListOnlyOnce()
    {
        \$loadedChoiceList = self::\$loader->loadChoiceList(self::\$value);

        \$this->assertSame(\$loadedChoiceList, self::\$loader->loadChoiceList(self::\$value));
    }

    public function testLoadChoicesForValuesLoadsChoiceListOnFirstCall()
    {
        \$this->assertSame(
            self::\$loader->loadChoicesForValues(self::\$choiceValues, self::\$value),
            self::\$lazyChoiceList->getChoicesForValues(self::\$choiceValues),
            'Choice list should not be reloaded.'
        );
    }

    public function testLoadValuesForChoicesLoadsChoiceListOnFirstCall()
    {
        \$this->assertSame(
            self::\$loader->loadValuesForChoices(self::\$choices, self::\$value),
            self::\$lazyChoiceList->getValuesForChoices(self::\$choices),
            'Choice list should not be reloaded.'
        );
    }

    public static function tearDownAfterClass(): void
    {
        self::\$loader = null;
        self::\$value = null;
        self::\$choices = [];
        self::\$choiceValues = [];
        self::\$lazyChoiceList = null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/ChoiceList/Loader/CallbackChoiceLoaderTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\ChoiceList\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ChoiceList\\LazyChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\CallbackChoiceLoader;

/**
 * @author Jules Pietri <jules@heahprod.com>
 */
class CallbackChoiceLoaderTest extends TestCase
{
    /**
     * @var \\Symfony\\Component\\Form\\ChoiceList\\Loader\\CallbackChoiceLoader
     */
    private static \$loader;

    /**
     * @var callable
     */
    private static \$value;

    /**
     * @var array
     */
    private static \$choices;

    /**
     * @var string[]
     */
    private static \$choiceValues;

    /**
     * @var \\Symfony\\Component\\Form\\ChoiceList\\LazyChoiceList
     */
    private static \$lazyChoiceList;

    public static function setUpBeforeClass(): void
    {
        self::\$loader = new CallbackChoiceLoader(function () {
            return self::\$choices;
        });
        self::\$value = function (\$choice) {
            return isset(\$choice->value) ? \$choice->value : null;
        };
        self::\$choices = [
            (object) ['value' => 'choice_one'],
            (object) ['value' => 'choice_two'],
        ];
        self::\$choiceValues = ['choice_one', 'choice_two'];
        self::\$lazyChoiceList = new LazyChoiceList(self::\$loader, self::\$value);
    }

    public function testLoadChoiceList()
    {
        \$this->assertInstanceOf('\\Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface', self::\$loader->loadChoiceList(self::\$value));
    }

    public function testLoadChoiceListOnlyOnce()
    {
        \$loadedChoiceList = self::\$loader->loadChoiceList(self::\$value);

        \$this->assertSame(\$loadedChoiceList, self::\$loader->loadChoiceList(self::\$value));
    }

    public function testLoadChoicesForValuesLoadsChoiceListOnFirstCall()
    {
        \$this->assertSame(
            self::\$loader->loadChoicesForValues(self::\$choiceValues, self::\$value),
            self::\$lazyChoiceList->getChoicesForValues(self::\$choiceValues),
            'Choice list should not be reloaded.'
        );
    }

    public function testLoadValuesForChoicesLoadsChoiceListOnFirstCall()
    {
        \$this->assertSame(
            self::\$loader->loadValuesForChoices(self::\$choices, self::\$value),
            self::\$lazyChoiceList->getValuesForChoices(self::\$choices),
            'Choice list should not be reloaded.'
        );
    }

    public static function tearDownAfterClass(): void
    {
        self::\$loader = null;
        self::\$value = null;
        self::\$choices = [];
        self::\$choiceValues = [];
        self::\$lazyChoiceList = null;
    }
}
", "vendor/symfony/form/Tests/ChoiceList/Loader/CallbackChoiceLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/ChoiceList/Loader/CallbackChoiceLoaderTest.php");
    }
}
