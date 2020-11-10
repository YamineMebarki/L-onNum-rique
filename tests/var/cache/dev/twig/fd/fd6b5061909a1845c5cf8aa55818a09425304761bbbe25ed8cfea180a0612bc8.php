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

/* vendor/symfony/translation/Tests/PluralizationRulesTest.php */
class __TwigTemplate_4ecf8ffc9487ab06a14ab5afed802bcf33728151cca375e66a6b46f72c737263 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/PluralizationRulesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/PluralizationRulesTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\PluralizationRules;

/**
 * DevLaon should cover all languages mentioned on http://translate.sourceforge.net/wiki/l10n/pluralforms
 * and Plural forms mentioned on http://www.gnu.org/software/gettext/manual/gettext.html#Plural-forms.
 *
 * See also https://developer.mozilla.org/en/Localization_and_Plurals which mentions 15 rules having a maximum of 6 forms.
 * The mozilla code is also interesting to check for.
 *
 * As mentioned by chx http://drupal.org/node/1273968 we can cover all by testing number from 0 to 199
 *
 * The goal to cover all languages is to far fetched so this test case is smaller.
 *
 * @author Clemens Tolboom clemens@build2be.nl
 *
 * @group legacy
 */
class PluralizationRulesTest extends TestCase
{
    /**
     * We test failed langcode here.
     *
     * Todo: The languages mentioned in the data provide need to get fixed somehow within PluralizationRules.
     *
     * @dataProvider failingLangcodes
     */
    public function testFailedLangcodes(\$nplural, \$langCodes)
    {
        \$matrix = \$this->generateTestData(\$langCodes);
        \$this->validateMatrix(\$nplural, \$matrix, false);
    }

    /**
     * @dataProvider successLangcodes
     */
    public function testLangcodes(\$nplural, \$langCodes)
    {
        \$matrix = \$this->generateTestData(\$langCodes);
        \$this->validateMatrix(\$nplural, \$matrix);
    }

    /**
     * This array should contain all currently known langcodes.
     *
     * As it is impossible to have this ever complete we should try as hard as possible to have it almost complete.
     *
     * @return array
     */
    public function successLangcodes()
    {
        return [
            ['1', ['ay', 'bo', 'cgg', 'dz', 'id', 'ja', 'jbo', 'ka', 'kk', 'km', 'ko', 'ky']],
            ['2', ['nl', 'fr', 'en', 'de', 'de_GE', 'hy', 'hy_AM']],
            ['3', ['be', 'bs', 'cs', 'hr']],
            ['4', ['cy', 'mt', 'sl']],
            ['6', ['ar']],
        ];
    }

    /**
     * This array should be at least empty within the near future.
     *
     * This both depends on a complete list trying to add above as understanding
     * the plural rules of the current failing languages.
     *
     * @return array with nplural together with langcodes
     */
    public function failingLangcodes()
    {
        return [
            ['1', ['fa']],
            ['2', ['jbo']],
            ['3', ['cbs']],
            ['4', ['gd', 'kw']],
            ['5', ['ga']],
        ];
    }

    /**
     * We validate only on the plural coverage. Thus the real rules is not tested.
     *
     * @param string \$nplural       Plural expected
     * @param array  \$matrix        Containing langcodes and their plural index values
     * @param bool   \$expectSuccess
     */
    protected function validateMatrix(\$nplural, \$matrix, \$expectSuccess = true)
    {
        foreach (\$matrix as \$langCode => \$data) {
            \$indexes = array_flip(\$data);
            if (\$expectSuccess) {
                \$this->assertEquals(\$nplural, \\count(\$indexes), \"Langcode '\$langCode' has '\$nplural' plural forms.\");
            } else {
                \$this->assertNotEquals((int) \$nplural, \\count(\$indexes), \"Langcode '\$langCode' has '\$nplural' plural forms.\");
            }
        }
    }

    protected function generateTestData(\$langCodes)
    {
        \$matrix = [];
        foreach (\$langCodes as \$langCode) {
            for (\$count = 0; \$count < 200; ++\$count) {
                \$plural = PluralizationRules::get(\$count, \$langCode);
                \$matrix[\$langCode][\$count] = \$plural;
            }
        }

        return \$matrix;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/PluralizationRulesTest.php";
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

namespace Symfony\\Component\\Translation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\PluralizationRules;

/**
 * DevLaon should cover all languages mentioned on http://translate.sourceforge.net/wiki/l10n/pluralforms
 * and Plural forms mentioned on http://www.gnu.org/software/gettext/manual/gettext.html#Plural-forms.
 *
 * See also https://developer.mozilla.org/en/Localization_and_Plurals which mentions 15 rules having a maximum of 6 forms.
 * The mozilla code is also interesting to check for.
 *
 * As mentioned by chx http://drupal.org/node/1273968 we can cover all by testing number from 0 to 199
 *
 * The goal to cover all languages is to far fetched so this test case is smaller.
 *
 * @author Clemens Tolboom clemens@build2be.nl
 *
 * @group legacy
 */
class PluralizationRulesTest extends TestCase
{
    /**
     * We test failed langcode here.
     *
     * Todo: The languages mentioned in the data provide need to get fixed somehow within PluralizationRules.
     *
     * @dataProvider failingLangcodes
     */
    public function testFailedLangcodes(\$nplural, \$langCodes)
    {
        \$matrix = \$this->generateTestData(\$langCodes);
        \$this->validateMatrix(\$nplural, \$matrix, false);
    }

    /**
     * @dataProvider successLangcodes
     */
    public function testLangcodes(\$nplural, \$langCodes)
    {
        \$matrix = \$this->generateTestData(\$langCodes);
        \$this->validateMatrix(\$nplural, \$matrix);
    }

    /**
     * This array should contain all currently known langcodes.
     *
     * As it is impossible to have this ever complete we should try as hard as possible to have it almost complete.
     *
     * @return array
     */
    public function successLangcodes()
    {
        return [
            ['1', ['ay', 'bo', 'cgg', 'dz', 'id', 'ja', 'jbo', 'ka', 'kk', 'km', 'ko', 'ky']],
            ['2', ['nl', 'fr', 'en', 'de', 'de_GE', 'hy', 'hy_AM']],
            ['3', ['be', 'bs', 'cs', 'hr']],
            ['4', ['cy', 'mt', 'sl']],
            ['6', ['ar']],
        ];
    }

    /**
     * This array should be at least empty within the near future.
     *
     * This both depends on a complete list trying to add above as understanding
     * the plural rules of the current failing languages.
     *
     * @return array with nplural together with langcodes
     */
    public function failingLangcodes()
    {
        return [
            ['1', ['fa']],
            ['2', ['jbo']],
            ['3', ['cbs']],
            ['4', ['gd', 'kw']],
            ['5', ['ga']],
        ];
    }

    /**
     * We validate only on the plural coverage. Thus the real rules is not tested.
     *
     * @param string \$nplural       Plural expected
     * @param array  \$matrix        Containing langcodes and their plural index values
     * @param bool   \$expectSuccess
     */
    protected function validateMatrix(\$nplural, \$matrix, \$expectSuccess = true)
    {
        foreach (\$matrix as \$langCode => \$data) {
            \$indexes = array_flip(\$data);
            if (\$expectSuccess) {
                \$this->assertEquals(\$nplural, \\count(\$indexes), \"Langcode '\$langCode' has '\$nplural' plural forms.\");
            } else {
                \$this->assertNotEquals((int) \$nplural, \\count(\$indexes), \"Langcode '\$langCode' has '\$nplural' plural forms.\");
            }
        }
    }

    protected function generateTestData(\$langCodes)
    {
        \$matrix = [];
        foreach (\$langCodes as \$langCode) {
            for (\$count = 0; \$count < 200; ++\$count) {
                \$plural = PluralizationRules::get(\$count, \$langCode);
                \$matrix[\$langCode][\$count] = \$plural;
            }
        }

        return \$matrix;
    }
}
", "vendor/symfony/translation/Tests/PluralizationRulesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/PluralizationRulesTest.php");
    }
}
