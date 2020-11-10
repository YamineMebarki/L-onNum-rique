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

/* vendor/symfony/console/Tests/Helper/FormatterHelperTest.php */
class __TwigTemplate_66c592b7d970da345ee413c3a87bc3bc4f8d15d44811561c8911ce276eb77307 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/FormatterHelperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/FormatterHelperTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Helper\\FormatterHelper;

class FormatterHelperTest extends TestCase
{
    public function testFormatSection()
    {
        \$formatter = new FormatterHelper();

        \$this->assertEquals(
            '<info>[cli]</info> Some text to display',
            \$formatter->formatSection('cli', 'Some text to display'),
            '::formatSection() formats a message in a section'
        );
    }

    public function testFormatBlock()
    {
        \$formatter = new FormatterHelper();

        \$this->assertEquals(
            '<error> Some text to display </error>',
            \$formatter->formatBlock('Some text to display', 'error'),
            '::formatBlock() formats a message in a block'
        );

        \$this->assertEquals(
            '<error> Some text to display </error>'.\"\\n\".
            '<error> foo bar              </error>',
            \$formatter->formatBlock(['Some text to display', 'foo bar'], 'error'),
            '::formatBlock() formats a message in a block'
        );

        \$this->assertEquals(
            '<error>                        </error>'.\"\\n\".
            '<error>  Some text to display  </error>'.\"\\n\".
            '<error>                        </error>',
            \$formatter->formatBlock('Some text to display', 'error', true),
            '::formatBlock() formats a message in a block'
        );
    }

    public function testFormatBlockWithDiacriticLetters()
    {
        \$formatter = new FormatterHelper();

        \$this->assertEquals(
            '<error>                       </error>'.\"\\n\".
            '<error>  Du texte à afficher  </error>'.\"\\n\".
            '<error>                       </error>',
            \$formatter->formatBlock('Du texte à afficher', 'error', true),
            '::formatBlock() formats a message in a block'
        );
    }

    public function testFormatBlockWithDoubleWidthDiacriticLetters()
    {
        \$formatter = new FormatterHelper();
        \$this->assertEquals(
            '<error>                    </error>'.\"\\n\".
            '<error>  表示するテキスト  </error>'.\"\\n\".
            '<error>                    </error>',
            \$formatter->formatBlock('表示するテキスト', 'error', true),
            '::formatBlock() formats a message in a block'
        );
    }

    public function testFormatBlockLGEscaping()
    {
        \$formatter = new FormatterHelper();

        \$this->assertEquals(
            '<error>                            </error>'.\"\\n\".
            '<error>  \\<info>some info\\</info>  </error>'.\"\\n\".
            '<error>                            </error>',
            \$formatter->formatBlock('<info>some info</info>', 'error', true),
            '::formatBlock() escapes \\'<\\' chars'
        );
    }

    public function testTruncatingWithShorterLengthThanMessageWithSuffix()
    {
        \$formatter = new FormatterHelper();
        \$message = 'testing truncate';

        \$this->assertSame('test...', \$formatter->truncate(\$message, 4));
        \$this->assertSame('testing truncat...', \$formatter->truncate(\$message, 15));
        \$this->assertSame('testing truncate...', \$formatter->truncate(\$message, 16));
        \$this->assertSame('zażółć gęślą...', \$formatter->truncate('zażółć gęślą jaźń', 12));
    }

    public function testTruncatingMessageWithCustomSuffix()
    {
        \$formatter = new FormatterHelper();
        \$message = 'testing truncate';

        \$this->assertSame('test!', \$formatter->truncate(\$message, 4, '!'));
    }

    public function testTruncatingWithLongerLengthThanMessageWithSuffix()
    {
        \$formatter = new FormatterHelper();
        \$message = 'test';

        \$this->assertSame(\$message, \$formatter->truncate(\$message, 10));
    }

    public function testTruncatingWithNegativeLength()
    {
        \$formatter = new FormatterHelper();
        \$message = 'testing truncate';

        \$this->assertSame('testing tru...', \$formatter->truncate(\$message, -5));
        \$this->assertSame('...', \$formatter->truncate(\$message, -100));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Helper/FormatterHelperTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Helper\\FormatterHelper;

class FormatterHelperTest extends TestCase
{
    public function testFormatSection()
    {
        \$formatter = new FormatterHelper();

        \$this->assertEquals(
            '<info>[cli]</info> Some text to display',
            \$formatter->formatSection('cli', 'Some text to display'),
            '::formatSection() formats a message in a section'
        );
    }

    public function testFormatBlock()
    {
        \$formatter = new FormatterHelper();

        \$this->assertEquals(
            '<error> Some text to display </error>',
            \$formatter->formatBlock('Some text to display', 'error'),
            '::formatBlock() formats a message in a block'
        );

        \$this->assertEquals(
            '<error> Some text to display </error>'.\"\\n\".
            '<error> foo bar              </error>',
            \$formatter->formatBlock(['Some text to display', 'foo bar'], 'error'),
            '::formatBlock() formats a message in a block'
        );

        \$this->assertEquals(
            '<error>                        </error>'.\"\\n\".
            '<error>  Some text to display  </error>'.\"\\n\".
            '<error>                        </error>',
            \$formatter->formatBlock('Some text to display', 'error', true),
            '::formatBlock() formats a message in a block'
        );
    }

    public function testFormatBlockWithDiacriticLetters()
    {
        \$formatter = new FormatterHelper();

        \$this->assertEquals(
            '<error>                       </error>'.\"\\n\".
            '<error>  Du texte à afficher  </error>'.\"\\n\".
            '<error>                       </error>',
            \$formatter->formatBlock('Du texte à afficher', 'error', true),
            '::formatBlock() formats a message in a block'
        );
    }

    public function testFormatBlockWithDoubleWidthDiacriticLetters()
    {
        \$formatter = new FormatterHelper();
        \$this->assertEquals(
            '<error>                    </error>'.\"\\n\".
            '<error>  表示するテキスト  </error>'.\"\\n\".
            '<error>                    </error>',
            \$formatter->formatBlock('表示するテキスト', 'error', true),
            '::formatBlock() formats a message in a block'
        );
    }

    public function testFormatBlockLGEscaping()
    {
        \$formatter = new FormatterHelper();

        \$this->assertEquals(
            '<error>                            </error>'.\"\\n\".
            '<error>  \\<info>some info\\</info>  </error>'.\"\\n\".
            '<error>                            </error>',
            \$formatter->formatBlock('<info>some info</info>', 'error', true),
            '::formatBlock() escapes \\'<\\' chars'
        );
    }

    public function testTruncatingWithShorterLengthThanMessageWithSuffix()
    {
        \$formatter = new FormatterHelper();
        \$message = 'testing truncate';

        \$this->assertSame('test...', \$formatter->truncate(\$message, 4));
        \$this->assertSame('testing truncat...', \$formatter->truncate(\$message, 15));
        \$this->assertSame('testing truncate...', \$formatter->truncate(\$message, 16));
        \$this->assertSame('zażółć gęślą...', \$formatter->truncate('zażółć gęślą jaźń', 12));
    }

    public function testTruncatingMessageWithCustomSuffix()
    {
        \$formatter = new FormatterHelper();
        \$message = 'testing truncate';

        \$this->assertSame('test!', \$formatter->truncate(\$message, 4, '!'));
    }

    public function testTruncatingWithLongerLengthThanMessageWithSuffix()
    {
        \$formatter = new FormatterHelper();
        \$message = 'test';

        \$this->assertSame(\$message, \$formatter->truncate(\$message, 10));
    }

    public function testTruncatingWithNegativeLength()
    {
        \$formatter = new FormatterHelper();
        \$message = 'testing truncate';

        \$this->assertSame('testing tru...', \$formatter->truncate(\$message, -5));
        \$this->assertSame('...', \$formatter->truncate(\$message, -100));
    }
}
", "vendor/symfony/console/Tests/Helper/FormatterHelperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Helper/FormatterHelperTest.php");
    }
}
