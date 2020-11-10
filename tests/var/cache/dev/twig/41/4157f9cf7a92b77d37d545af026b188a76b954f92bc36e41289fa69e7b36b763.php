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

/* vendor/symfony/validator/Tests/Resources/TranslationFilesTest.php */
class __TwigTemplate_ff19a273cacff509fc12beb74ce073e365aca17839a9a25a319a2ab019e6bb0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Resources/TranslationFilesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Resources/TranslationFilesTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Resources;

use PHPUnit\\Framework\\TestCase;

class TranslationFilesTest extends TestCase
{
    /**
     * @dataProvider provideTranslationFiles
     */
    public function testTranslationFileIsValid(\$filePath)
    {
        \\PHPUnit\\Util\\XML::loadfile(\$filePath, false, false, true);

        \$this->addToAssertionCount(1);
    }

    public function provideTranslationFiles()
    {
        return array_map(
            function (\$filePath) { return (array) \$filePath; },
            glob(\\dirname(__DIR__, 2).'/Resources/translations/*.xlf')
        );
    }

    public function testNorwegianAlias()
    {
        \$this->assertFileEquals(
            \\dirname(__DIR__, 2).'/Resources/translations/validators.nb.xlf',
            \\dirname(__DIR__, 2).'/Resources/translations/validators.no.xlf',
            'The NO locale should be an alias for the NB variant of the Norwegian language.'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Resources/TranslationFilesTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Resources;

use PHPUnit\\Framework\\TestCase;

class TranslationFilesTest extends TestCase
{
    /**
     * @dataProvider provideTranslationFiles
     */
    public function testTranslationFileIsValid(\$filePath)
    {
        \\PHPUnit\\Util\\XML::loadfile(\$filePath, false, false, true);

        \$this->addToAssertionCount(1);
    }

    public function provideTranslationFiles()
    {
        return array_map(
            function (\$filePath) { return (array) \$filePath; },
            glob(\\dirname(__DIR__, 2).'/Resources/translations/*.xlf')
        );
    }

    public function testNorwegianAlias()
    {
        \$this->assertFileEquals(
            \\dirname(__DIR__, 2).'/Resources/translations/validators.nb.xlf',
            \\dirname(__DIR__, 2).'/Resources/translations/validators.no.xlf',
            'The NO locale should be an alias for the NB variant of the Norwegian language.'
        );
    }
}
", "vendor/symfony/validator/Tests/Resources/TranslationFilesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Resources/TranslationFilesTest.php");
    }
}
