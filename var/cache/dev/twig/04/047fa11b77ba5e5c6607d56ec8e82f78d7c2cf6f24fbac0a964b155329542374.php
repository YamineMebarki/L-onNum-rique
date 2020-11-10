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

/* vendor/symfony/finder/Tests/Iterator/MultiplePcreFilterIteratorTest.php */
class __TwigTemplate_1340d1f534da85976d65ee9af81796792e7566d318c2f0215743d4ca589b860e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/MultiplePcreFilterIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/MultiplePcreFilterIteratorTest.php"));

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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Iterator\\MultiplePcreFilterIterator;

class MultiplePcreFilterIteratorTest extends TestCase
{
    /**
     * @dataProvider getIsRegexFixtures
     */
    public function testIsRegex(\$string, \$isRegex, \$message)
    {
        \$testIterator = new TestMultiplePcreFilterIterator();
        \$this->assertEquals(\$isRegex, \$testIterator->isRegex(\$string), \$message);
    }

    public function getIsRegexFixtures()
    {
        return [
            ['foo', false, 'string'],
            [' foo ', false, '\" \" is not a valid delimiter'],
            ['\\\\foo\\\\', false, '\"\\\\\" is not a valid delimiter'],
            ['afooa', false, '\"a\" is not a valid delimiter'],
            ['//', false, 'the pattern should contain at least 1 character'],
            ['/a/', true, 'valid regex'],
            ['/foo/', true, 'valid regex'],
            ['/foo/i', true, 'valid regex with a single modifier'],
            ['/foo/imsxu', true, 'valid regex with multiple modifiers'],
            ['#foo#', true, '\"#\" is a valid delimiter'],
            ['{foo}', true, '\"{,}\" is a valid delimiter pair'],
            ['[foo]', true, '\"[,]\" is a valid delimiter pair'],
            ['(foo)', true, '\"(,)\" is a valid delimiter pair'],
            ['<foo>', true, '\"<,>\" is a valid delimiter pair'],
            ['*foo.*', false, '\"*\" is not considered as a valid delimiter'],
            ['?foo.?', false, '\"?\" is not considered as a valid delimiter'],
        ];
    }
}

class TestMultiplePcreFilterIterator extends MultiplePcreFilterIterator
{
    public function __construct()
    {
    }

    public function accept()
    {
        throw new \\BadFunctionCallException('Not implemented');
    }

    public function isRegex(\$str)
    {
        return parent::isRegex(\$str);
    }

    public function toRegex(\$str)
    {
        throw new \\BadFunctionCallException('Not implemented');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/MultiplePcreFilterIteratorTest.php";
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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Iterator\\MultiplePcreFilterIterator;

class MultiplePcreFilterIteratorTest extends TestCase
{
    /**
     * @dataProvider getIsRegexFixtures
     */
    public function testIsRegex(\$string, \$isRegex, \$message)
    {
        \$testIterator = new TestMultiplePcreFilterIterator();
        \$this->assertEquals(\$isRegex, \$testIterator->isRegex(\$string), \$message);
    }

    public function getIsRegexFixtures()
    {
        return [
            ['foo', false, 'string'],
            [' foo ', false, '\" \" is not a valid delimiter'],
            ['\\\\foo\\\\', false, '\"\\\\\" is not a valid delimiter'],
            ['afooa', false, '\"a\" is not a valid delimiter'],
            ['//', false, 'the pattern should contain at least 1 character'],
            ['/a/', true, 'valid regex'],
            ['/foo/', true, 'valid regex'],
            ['/foo/i', true, 'valid regex with a single modifier'],
            ['/foo/imsxu', true, 'valid regex with multiple modifiers'],
            ['#foo#', true, '\"#\" is a valid delimiter'],
            ['{foo}', true, '\"{,}\" is a valid delimiter pair'],
            ['[foo]', true, '\"[,]\" is a valid delimiter pair'],
            ['(foo)', true, '\"(,)\" is a valid delimiter pair'],
            ['<foo>', true, '\"<,>\" is a valid delimiter pair'],
            ['*foo.*', false, '\"*\" is not considered as a valid delimiter'],
            ['?foo.?', false, '\"?\" is not considered as a valid delimiter'],
        ];
    }
}

class TestMultiplePcreFilterIterator extends MultiplePcreFilterIterator
{
    public function __construct()
    {
    }

    public function accept()
    {
        throw new \\BadFunctionCallException('Not implemented');
    }

    public function isRegex(\$str)
    {
        return parent::isRegex(\$str);
    }

    public function toRegex(\$str)
    {
        throw new \\BadFunctionCallException('Not implemented');
    }
}
", "vendor/symfony/finder/Tests/Iterator/MultiplePcreFilterIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/MultiplePcreFilterIteratorTest.php");
    }
}
