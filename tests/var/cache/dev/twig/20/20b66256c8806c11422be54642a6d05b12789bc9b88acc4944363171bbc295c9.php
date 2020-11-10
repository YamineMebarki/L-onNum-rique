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

/* vendor/symfony/validator/Tests/Constraints/RegexTest.php */
class __TwigTemplate_0a3e83d02e589b60cb6c0804532400d976400a97cb711a90e9cb22afae05e9f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/RegexTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/RegexTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\Regex;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RegexTest extends TestCase
{
    public function testConstraintGetDefaultOption()
    {
        \$constraint = new Regex('/^[0-9]+\$/');

        \$this->assertSame('/^[0-9]+\$/', \$constraint->pattern);
    }

    public function provideHtmlPatterns()
    {
        return [
            // HTML5 wraps the pattern in ^(?:pattern)\$
            ['/^[0-9]+\$/', '[0-9]+'],
            ['/[0-9]+\$/', '.*[0-9]+'],
            ['/^[0-9]+/', '[0-9]+.*'],
            ['/[0-9]+/', '.*[0-9]+.*'],
            // We need a smart way to allow matching of patterns that contain
            // ^ and \$ at various sub-clauses of an or-clause
            // .*(pattern).* seems to work correctly
            ['/[0-9]\$|[a-z]+/', '.*([0-9]\$|[a-z]+).*'],
            ['/[0-9]\$|^[a-z]+/', '.*([0-9]\$|^[a-z]+).*'],
            ['/^[0-9]|[a-z]+\$/', '.*(^[0-9]|[a-z]+\$).*'],
            // Unescape escaped delimiters
            ['/^[0-9]+\\/\$/', '[0-9]+/'],
            ['#^[0-9]+\\#\$#', '[0-9]+#'],
            // Cannot be converted
            ['/^[0-9]+\$/i', null],

            // Inverse matches are simple, just wrap in
            // ((?!pattern).)*
            ['/^[0-9]+\$/', '((?!^[0-9]+\$).)*', false],
            ['/[0-9]+\$/', '((?![0-9]+\$).)*', false],
            ['/^[0-9]+/', '((?!^[0-9]+).)*', false],
            ['/[0-9]+/', '((?![0-9]+).)*', false],
            ['/[0-9]\$|[a-z]+/', '((?![0-9]\$|[a-z]+).)*', false],
            ['/[0-9]\$|^[a-z]+/', '((?![0-9]\$|^[a-z]+).)*', false],
            ['/^[0-9]|[a-z]+\$/', '((?!^[0-9]|[a-z]+\$).)*', false],
            ['/^[0-9]+\\/\$/', '((?!^[0-9]+/\$).)*', false],
            ['#^[0-9]+\\#\$#', '((?!^[0-9]+#\$).)*', false],
            ['/^[0-9]+\$/i', null, false],
        ];
    }

    /**
     * @dataProvider provideHtmlPatterns
     */
    public function testGetHtmlPattern(\$pattern, \$htmlPattern, \$match = true)
    {
        \$constraint = new Regex([
            'pattern' => \$pattern,
            'match' => \$match,
        ]);

        \$this->assertSame(\$pattern, \$constraint->pattern);
        \$this->assertSame(\$htmlPattern, \$constraint->getHtmlPattern());
    }

    public function testGetCustomHtmlPattern()
    {
        \$constraint = new Regex([
            'pattern' => '((?![0-9]\$|[a-z]+).)*',
            'htmlPattern' => 'foobar',
        ]);

        \$this->assertSame('((?![0-9]\$|[a-z]+).)*', \$constraint->pattern);
        \$this->assertSame('foobar', \$constraint->getHtmlPattern());
    }

    public function testNormalizerCanBeSet()
    {
        \$regex = new Regex(['pattern' => '/^[0-9]+\$/', 'normalizer' => 'trim']);

        \$this->assertEquals('trim', \$regex->normalizer);
    }

    public function testInvalidNormalizerThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"string\" given).');
        new Regex(['pattern' => '/^[0-9]+\$/', 'normalizer' => 'Unknown Callable']);
    }

    public function testInvalidNormalizerObjectThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"stdClass\" given).');
        new Regex(['pattern' => '/^[0-9]+\$/', 'normalizer' => new \\stdClass()]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/RegexTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\Regex;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RegexTest extends TestCase
{
    public function testConstraintGetDefaultOption()
    {
        \$constraint = new Regex('/^[0-9]+\$/');

        \$this->assertSame('/^[0-9]+\$/', \$constraint->pattern);
    }

    public function provideHtmlPatterns()
    {
        return [
            // HTML5 wraps the pattern in ^(?:pattern)\$
            ['/^[0-9]+\$/', '[0-9]+'],
            ['/[0-9]+\$/', '.*[0-9]+'],
            ['/^[0-9]+/', '[0-9]+.*'],
            ['/[0-9]+/', '.*[0-9]+.*'],
            // We need a smart way to allow matching of patterns that contain
            // ^ and \$ at various sub-clauses of an or-clause
            // .*(pattern).* seems to work correctly
            ['/[0-9]\$|[a-z]+/', '.*([0-9]\$|[a-z]+).*'],
            ['/[0-9]\$|^[a-z]+/', '.*([0-9]\$|^[a-z]+).*'],
            ['/^[0-9]|[a-z]+\$/', '.*(^[0-9]|[a-z]+\$).*'],
            // Unescape escaped delimiters
            ['/^[0-9]+\\/\$/', '[0-9]+/'],
            ['#^[0-9]+\\#\$#', '[0-9]+#'],
            // Cannot be converted
            ['/^[0-9]+\$/i', null],

            // Inverse matches are simple, just wrap in
            // ((?!pattern).)*
            ['/^[0-9]+\$/', '((?!^[0-9]+\$).)*', false],
            ['/[0-9]+\$/', '((?![0-9]+\$).)*', false],
            ['/^[0-9]+/', '((?!^[0-9]+).)*', false],
            ['/[0-9]+/', '((?![0-9]+).)*', false],
            ['/[0-9]\$|[a-z]+/', '((?![0-9]\$|[a-z]+).)*', false],
            ['/[0-9]\$|^[a-z]+/', '((?![0-9]\$|^[a-z]+).)*', false],
            ['/^[0-9]|[a-z]+\$/', '((?!^[0-9]|[a-z]+\$).)*', false],
            ['/^[0-9]+\\/\$/', '((?!^[0-9]+/\$).)*', false],
            ['#^[0-9]+\\#\$#', '((?!^[0-9]+#\$).)*', false],
            ['/^[0-9]+\$/i', null, false],
        ];
    }

    /**
     * @dataProvider provideHtmlPatterns
     */
    public function testGetHtmlPattern(\$pattern, \$htmlPattern, \$match = true)
    {
        \$constraint = new Regex([
            'pattern' => \$pattern,
            'match' => \$match,
        ]);

        \$this->assertSame(\$pattern, \$constraint->pattern);
        \$this->assertSame(\$htmlPattern, \$constraint->getHtmlPattern());
    }

    public function testGetCustomHtmlPattern()
    {
        \$constraint = new Regex([
            'pattern' => '((?![0-9]\$|[a-z]+).)*',
            'htmlPattern' => 'foobar',
        ]);

        \$this->assertSame('((?![0-9]\$|[a-z]+).)*', \$constraint->pattern);
        \$this->assertSame('foobar', \$constraint->getHtmlPattern());
    }

    public function testNormalizerCanBeSet()
    {
        \$regex = new Regex(['pattern' => '/^[0-9]+\$/', 'normalizer' => 'trim']);

        \$this->assertEquals('trim', \$regex->normalizer);
    }

    public function testInvalidNormalizerThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"string\" given).');
        new Regex(['pattern' => '/^[0-9]+\$/', 'normalizer' => 'Unknown Callable']);
    }

    public function testInvalidNormalizerObjectThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"stdClass\" given).');
        new Regex(['pattern' => '/^[0-9]+\$/', 'normalizer' => new \\stdClass()]);
    }
}
", "vendor/symfony/validator/Tests/Constraints/RegexTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/RegexTest.php");
    }
}
