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

/* vendor/symfony/translation/Tests/Extractor/PhpExtractorTest.php */
class __TwigTemplate_45bf88b204787ee7e19d787fecb4f8aa90547a338835e9870e6a6fc04243ea79 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Extractor/PhpExtractorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Extractor/PhpExtractorTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\Extractor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Extractor\\PhpExtractor;
use Symfony\\Component\\Translation\\MessageCatalogue;

class PhpExtractorTest extends TestCase
{
    /**
     * @dataProvider resourcesProvider
     *
     * @param array|string \$resource
     */
    public function testExtraction(\$resource)
    {
        // Arrange
        \$extractor = new PhpExtractor();
        \$extractor->setPrefix('prefix');
        \$catalogue = new MessageCatalogue('en');

        // Act
        \$extractor->extract(\$resource, \$catalogue);

        \$expectedHeredoc = <<<EOF
heredoc key with whitespace and escaped \\\$\\n sequences
EOF;
        \$expectedNowdoc = <<<'EOF'
nowdoc key with whitespace and nonescaped \\\$\\n sequences
EOF;
        // Assert
        \$expectedCatalogue = [
            'messages' => [
                'single-quoted key' => 'prefixsingle-quoted key',
                'double-quoted key' => 'prefixdouble-quoted key',
                'heredoc key' => 'prefixheredoc key',
                'nowdoc key' => 'prefixnowdoc key',
                \"double-quoted key with whitespace and escaped \\\$\\n\\\" sequences\" => \"prefixdouble-quoted key with whitespace and escaped \\\$\\n\\\" sequences\",
                'single-quoted key with whitespace and nonescaped \\\$\\n\\' sequences' => 'prefixsingle-quoted key with whitespace and nonescaped \\\$\\n\\' sequences',
                'single-quoted key with \"quote mark at the end\"' => 'prefixsingle-quoted key with \"quote mark at the end\"',
                \$expectedHeredoc => 'prefix'.\$expectedHeredoc,
                \$expectedNowdoc => 'prefix'.\$expectedNowdoc,
                '{0} There is no apples|{1} There is one apple|]1,Inf[ There are %count% apples' => 'prefix{0} There is no apples|{1} There is one apple|]1,Inf[ There are %count% apples',
                'concatenated message with heredoc and nowdoc' => 'prefixconcatenated message with heredoc and nowdoc',
                'default domain' => 'prefixdefault domain',
            ],
            'not_messages' => [
                'other-domain-test-no-params-short-array' => 'prefixother-domain-test-no-params-short-array',
                'other-domain-test-no-params-long-array' => 'prefixother-domain-test-no-params-long-array',
                'other-domain-test-params-short-array' => 'prefixother-domain-test-params-short-array',
                'other-domain-test-params-long-array' => 'prefixother-domain-test-params-long-array',
                'other-domain-test-trans-choice-short-array-%count%' => 'prefixother-domain-test-trans-choice-short-array-%count%',
                'other-domain-test-trans-choice-long-array-%count%' => 'prefixother-domain-test-trans-choice-long-array-%count%',
                'typecast' => 'prefixtypecast',
                'msg1' => 'prefixmsg1',
                'msg2' => 'prefixmsg2',
            ],
        ];
        \$actualCatalogue = \$catalogue->all();

        \$this->assertEquals(\$expectedCatalogue, \$actualCatalogue);

        \$filename = str_replace(\\DIRECTORY_SEPARATOR, '/', __DIR__).'/../fixtures/extractor/translation.html.php';
        \$this->assertEquals(['sources' => [\$filename.':2']], \$catalogue->getMetadata('single-quoted key'));
        \$this->assertEquals(['sources' => [\$filename.':43']], \$catalogue->getMetadata('other-domain-test-no-params-short-array', 'not_messages'));
    }

    public function resourcesProvider()
    {
        \$directory = __DIR__.'/../fixtures/extractor/';
        \$splFiles = [];
        foreach (new \\DirectoryIterator(\$directory) as \$fileInfo) {
            if (\$fileInfo->isDot()) {
                continue;
            }
            if ('translation.html.php' === \$fileInfo->getBasename()) {
                \$phpFile = \$fileInfo->getPathname();
            }
            \$splFiles[] = \$fileInfo->getFileInfo();
        }

        return [
            [\$directory],
            [\$phpFile],
            [glob(\$directory.'*')],
            [\$splFiles],
            [new \\ArrayObject(glob(\$directory.'*'))],
            [new \\ArrayObject(\$splFiles)],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Extractor/PhpExtractorTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\Extractor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Extractor\\PhpExtractor;
use Symfony\\Component\\Translation\\MessageCatalogue;

class PhpExtractorTest extends TestCase
{
    /**
     * @dataProvider resourcesProvider
     *
     * @param array|string \$resource
     */
    public function testExtraction(\$resource)
    {
        // Arrange
        \$extractor = new PhpExtractor();
        \$extractor->setPrefix('prefix');
        \$catalogue = new MessageCatalogue('en');

        // Act
        \$extractor->extract(\$resource, \$catalogue);

        \$expectedHeredoc = <<<EOF
heredoc key with whitespace and escaped \\\$\\n sequences
EOF;
        \$expectedNowdoc = <<<'EOF'
nowdoc key with whitespace and nonescaped \\\$\\n sequences
EOF;
        // Assert
        \$expectedCatalogue = [
            'messages' => [
                'single-quoted key' => 'prefixsingle-quoted key',
                'double-quoted key' => 'prefixdouble-quoted key',
                'heredoc key' => 'prefixheredoc key',
                'nowdoc key' => 'prefixnowdoc key',
                \"double-quoted key with whitespace and escaped \\\$\\n\\\" sequences\" => \"prefixdouble-quoted key with whitespace and escaped \\\$\\n\\\" sequences\",
                'single-quoted key with whitespace and nonescaped \\\$\\n\\' sequences' => 'prefixsingle-quoted key with whitespace and nonescaped \\\$\\n\\' sequences',
                'single-quoted key with \"quote mark at the end\"' => 'prefixsingle-quoted key with \"quote mark at the end\"',
                \$expectedHeredoc => 'prefix'.\$expectedHeredoc,
                \$expectedNowdoc => 'prefix'.\$expectedNowdoc,
                '{0} There is no apples|{1} There is one apple|]1,Inf[ There are %count% apples' => 'prefix{0} There is no apples|{1} There is one apple|]1,Inf[ There are %count% apples',
                'concatenated message with heredoc and nowdoc' => 'prefixconcatenated message with heredoc and nowdoc',
                'default domain' => 'prefixdefault domain',
            ],
            'not_messages' => [
                'other-domain-test-no-params-short-array' => 'prefixother-domain-test-no-params-short-array',
                'other-domain-test-no-params-long-array' => 'prefixother-domain-test-no-params-long-array',
                'other-domain-test-params-short-array' => 'prefixother-domain-test-params-short-array',
                'other-domain-test-params-long-array' => 'prefixother-domain-test-params-long-array',
                'other-domain-test-trans-choice-short-array-%count%' => 'prefixother-domain-test-trans-choice-short-array-%count%',
                'other-domain-test-trans-choice-long-array-%count%' => 'prefixother-domain-test-trans-choice-long-array-%count%',
                'typecast' => 'prefixtypecast',
                'msg1' => 'prefixmsg1',
                'msg2' => 'prefixmsg2',
            ],
        ];
        \$actualCatalogue = \$catalogue->all();

        \$this->assertEquals(\$expectedCatalogue, \$actualCatalogue);

        \$filename = str_replace(\\DIRECTORY_SEPARATOR, '/', __DIR__).'/../fixtures/extractor/translation.html.php';
        \$this->assertEquals(['sources' => [\$filename.':2']], \$catalogue->getMetadata('single-quoted key'));
        \$this->assertEquals(['sources' => [\$filename.':43']], \$catalogue->getMetadata('other-domain-test-no-params-short-array', 'not_messages'));
    }

    public function resourcesProvider()
    {
        \$directory = __DIR__.'/../fixtures/extractor/';
        \$splFiles = [];
        foreach (new \\DirectoryIterator(\$directory) as \$fileInfo) {
            if (\$fileInfo->isDot()) {
                continue;
            }
            if ('translation.html.php' === \$fileInfo->getBasename()) {
                \$phpFile = \$fileInfo->getPathname();
            }
            \$splFiles[] = \$fileInfo->getFileInfo();
        }

        return [
            [\$directory],
            [\$phpFile],
            [glob(\$directory.'*')],
            [\$splFiles],
            [new \\ArrayObject(glob(\$directory.'*'))],
            [new \\ArrayObject(\$splFiles)],
        ];
    }
}
", "vendor/symfony/translation/Tests/Extractor/PhpExtractorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Extractor/PhpExtractorTest.php");
    }
}
