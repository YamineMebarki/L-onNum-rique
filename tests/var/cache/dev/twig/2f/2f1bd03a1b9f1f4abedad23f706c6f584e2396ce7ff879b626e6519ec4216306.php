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

/* vendor/symfony/serializer/Tests/Normalizer/ConstraintViolationListNormalizerTest.php */
class __TwigTemplate_dda3d6c321ee3cd72c853a3211093c21090fa0646aebedd8e13e32dc9f573ca2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/ConstraintViolationListNormalizerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/ConstraintViolationListNormalizerTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter;
use Symfony\\Component\\Serializer\\Normalizer\\ConstraintViolationListNormalizer;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\ConstraintViolationList;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ConstraintViolationListNormalizerTest extends TestCase
{
    private \$normalizer;

    protected function setUp(): void
    {
        \$this->normalizer = new ConstraintViolationListNormalizer();
    }

    public function testSupportsNormalization()
    {
        \$this->assertTrue(\$this->normalizer->supportsNormalization(new ConstraintViolationList()));
        \$this->assertFalse(\$this->normalizer->supportsNormalization(new \\stdClass()));
    }

    public function testNormalize()
    {
        \$list = new ConstraintViolationList([
            new ConstraintViolation('a', 'b', ['value' => 'foo'], 'c', 'd', 'e', null, 'f'),
            new ConstraintViolation('1', '2', [], '3', '4', '5', null, '6'),
        ]);

        \$expected = [
            'type' => 'https://symfony.com/errors/validation',
            'title' => 'Validation Failed',
            'detail' => 'd: a
4: 1',
            'violations' => [
                    [
                        'propertyPath' => 'd',
                        'title' => 'a',
                        'type' => 'urn:uuid:f',
                        'parameters' => [
                            'value' => 'foo',
                        ],
                    ],
                    [
                        'propertyPath' => '4',
                        'title' => '1',
                        'type' => 'urn:uuid:6',
                        'parameters' => [],
                    ],
                ],
        ];

        \$this->assertEquals(\$expected, \$this->normalizer->normalize(\$list));
    }

    public function testNormalizeWithNameConverter()
    {
        \$normalizer = new ConstraintViolationListNormalizer([], new CamelCaseToSnakeCaseNameConverter());

        \$list = new ConstraintViolationList([
            new ConstraintViolation('too short', 'a', [], 'c', 'shortDescription', ''),
            new ConstraintViolation('too long', 'b', [], '3', 'product.shortDescription', 'Lorem ipsum dolor sit amet'),
            new ConstraintViolation('error', 'b', [], '3', '', ''),
        ]);

        \$expected = [
            'type' => 'https://symfony.com/errors/validation',
            'title' => 'Validation Failed',
            'detail' => 'short_description: too short
product.short_description: too long
error',
            'violations' => [
                [
                    'propertyPath' => 'short_description',
                    'title' => 'too short',
                    'parameters' => [],
                ],
                [
                    'propertyPath' => 'product.short_description',
                    'title' => 'too long',
                    'parameters' => [],
                ],
                [
                    'propertyPath' => '',
                    'title' => 'error',
                    'parameters' => [],
                ],
            ],
        ];

        \$this->assertEquals(\$expected, \$normalizer->normalize(\$list));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/ConstraintViolationListNormalizerTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter;
use Symfony\\Component\\Serializer\\Normalizer\\ConstraintViolationListNormalizer;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\ConstraintViolationList;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ConstraintViolationListNormalizerTest extends TestCase
{
    private \$normalizer;

    protected function setUp(): void
    {
        \$this->normalizer = new ConstraintViolationListNormalizer();
    }

    public function testSupportsNormalization()
    {
        \$this->assertTrue(\$this->normalizer->supportsNormalization(new ConstraintViolationList()));
        \$this->assertFalse(\$this->normalizer->supportsNormalization(new \\stdClass()));
    }

    public function testNormalize()
    {
        \$list = new ConstraintViolationList([
            new ConstraintViolation('a', 'b', ['value' => 'foo'], 'c', 'd', 'e', null, 'f'),
            new ConstraintViolation('1', '2', [], '3', '4', '5', null, '6'),
        ]);

        \$expected = [
            'type' => 'https://symfony.com/errors/validation',
            'title' => 'Validation Failed',
            'detail' => 'd: a
4: 1',
            'violations' => [
                    [
                        'propertyPath' => 'd',
                        'title' => 'a',
                        'type' => 'urn:uuid:f',
                        'parameters' => [
                            'value' => 'foo',
                        ],
                    ],
                    [
                        'propertyPath' => '4',
                        'title' => '1',
                        'type' => 'urn:uuid:6',
                        'parameters' => [],
                    ],
                ],
        ];

        \$this->assertEquals(\$expected, \$this->normalizer->normalize(\$list));
    }

    public function testNormalizeWithNameConverter()
    {
        \$normalizer = new ConstraintViolationListNormalizer([], new CamelCaseToSnakeCaseNameConverter());

        \$list = new ConstraintViolationList([
            new ConstraintViolation('too short', 'a', [], 'c', 'shortDescription', ''),
            new ConstraintViolation('too long', 'b', [], '3', 'product.shortDescription', 'Lorem ipsum dolor sit amet'),
            new ConstraintViolation('error', 'b', [], '3', '', ''),
        ]);

        \$expected = [
            'type' => 'https://symfony.com/errors/validation',
            'title' => 'Validation Failed',
            'detail' => 'short_description: too short
product.short_description: too long
error',
            'violations' => [
                [
                    'propertyPath' => 'short_description',
                    'title' => 'too short',
                    'parameters' => [],
                ],
                [
                    'propertyPath' => 'product.short_description',
                    'title' => 'too long',
                    'parameters' => [],
                ],
                [
                    'propertyPath' => '',
                    'title' => 'error',
                    'parameters' => [],
                ],
            ],
        ];

        \$this->assertEquals(\$expected, \$normalizer->normalize(\$list));
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/ConstraintViolationListNormalizerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/ConstraintViolationListNormalizerTest.php");
    }
}
