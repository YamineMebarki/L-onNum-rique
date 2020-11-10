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

/* vendor/symfony/doctrine-bridge/Tests/Form/DoctrineOrmTypeGuesserTest.php */
class __TwigTemplate_87bc4dc7f7d932b0f002e5e4b1f114aa399694de156305ec03076a1ca0a37a2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/DoctrineOrmTypeGuesserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/DoctrineOrmTypeGuesserTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser;
use Symfony\\Component\\Form\\Guess\\Guess;
use Symfony\\Component\\Form\\Guess\\ValueGuess;

class DoctrineOrmTypeGuesserTest extends TestCase
{
    /**
     * @dataProvider requiredProvider
     */
    public function testRequiredGuesser(\$classMetadata, \$expected)
    {
        \$this->assertEquals(\$expected, \$this->getGuesser(\$classMetadata)->guessRequired('TestEntity', 'field'));
    }

    public function requiredProvider()
    {
        \$return = [];

        // Simple field, not nullable
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->fieldMappings['field'] = true;
        \$classMetadata->expects(\$this->once())->method('isNullable')->with('field')->willReturn(false);

        \$return[] = [\$classMetadata, new ValueGuess(true, Guess::HIGH_CONFIDENCE)];

        // Simple field, nullable
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->fieldMappings['field'] = true;
        \$classMetadata->expects(\$this->once())->method('isNullable')->with('field')->willReturn(true);

        \$return[] = [\$classMetadata, new ValueGuess(false, Guess::MEDIUM_CONFIDENCE)];

        // One-to-one, nullable (by default)
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->expects(\$this->once())->method('isAssociationWithSingleJoinColumn')->with('field')->willReturn(true);

        \$mapping = ['joinColumns' => [[]]];
        \$classMetadata->expects(\$this->once())->method('getAssociationMapping')->with('field')->willReturn(\$mapping);

        \$return[] = [\$classMetadata, new ValueGuess(false, Guess::HIGH_CONFIDENCE)];

        // One-to-one, nullable (explicit)
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->expects(\$this->once())->method('isAssociationWithSingleJoinColumn')->with('field')->willReturn(true);

        \$mapping = ['joinColumns' => [['nullable' => true]]];
        \$classMetadata->expects(\$this->once())->method('getAssociationMapping')->with('field')->willReturn(\$mapping);

        \$return[] = [\$classMetadata, new ValueGuess(false, Guess::HIGH_CONFIDENCE)];

        // One-to-one, not nullable
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->expects(\$this->once())->method('isAssociationWithSingleJoinColumn')->with('field')->willReturn(true);

        \$mapping = ['joinColumns' => [['nullable' => false]]];
        \$classMetadata->expects(\$this->once())->method('getAssociationMapping')->with('field')->willReturn(\$mapping);

        \$return[] = [\$classMetadata, new ValueGuess(true, Guess::HIGH_CONFIDENCE)];

        // One-to-many, no clue
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->expects(\$this->once())->method('isAssociationWithSingleJoinColumn')->with('field')->willReturn(false);

        \$return[] = [\$classMetadata, null];

        return \$return;
    }

    private function getGuesser(ClassMetadata \$classMetadata)
    {
        \$em = \$this->getMockBuilder('Doctrine\\Common\\Persistence\\ObjectManager')->getMock();
        \$em->expects(\$this->once())->method('getClassMetaData')->with('TestEntity')->willReturn(\$classMetadata);

        \$registry = \$this->getMockBuilder('Doctrine\\Common\\Persistence\\ManagerRegistry')->getMock();
        \$registry->expects(\$this->once())->method('getManagers')->willReturn([\$em]);

        return new DoctrineOrmTypeGuesser(\$registry);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Form/DoctrineOrmTypeGuesserTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser;
use Symfony\\Component\\Form\\Guess\\Guess;
use Symfony\\Component\\Form\\Guess\\ValueGuess;

class DoctrineOrmTypeGuesserTest extends TestCase
{
    /**
     * @dataProvider requiredProvider
     */
    public function testRequiredGuesser(\$classMetadata, \$expected)
    {
        \$this->assertEquals(\$expected, \$this->getGuesser(\$classMetadata)->guessRequired('TestEntity', 'field'));
    }

    public function requiredProvider()
    {
        \$return = [];

        // Simple field, not nullable
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->fieldMappings['field'] = true;
        \$classMetadata->expects(\$this->once())->method('isNullable')->with('field')->willReturn(false);

        \$return[] = [\$classMetadata, new ValueGuess(true, Guess::HIGH_CONFIDENCE)];

        // Simple field, nullable
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->fieldMappings['field'] = true;
        \$classMetadata->expects(\$this->once())->method('isNullable')->with('field')->willReturn(true);

        \$return[] = [\$classMetadata, new ValueGuess(false, Guess::MEDIUM_CONFIDENCE)];

        // One-to-one, nullable (by default)
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->expects(\$this->once())->method('isAssociationWithSingleJoinColumn')->with('field')->willReturn(true);

        \$mapping = ['joinColumns' => [[]]];
        \$classMetadata->expects(\$this->once())->method('getAssociationMapping')->with('field')->willReturn(\$mapping);

        \$return[] = [\$classMetadata, new ValueGuess(false, Guess::HIGH_CONFIDENCE)];

        // One-to-one, nullable (explicit)
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->expects(\$this->once())->method('isAssociationWithSingleJoinColumn')->with('field')->willReturn(true);

        \$mapping = ['joinColumns' => [['nullable' => true]]];
        \$classMetadata->expects(\$this->once())->method('getAssociationMapping')->with('field')->willReturn(\$mapping);

        \$return[] = [\$classMetadata, new ValueGuess(false, Guess::HIGH_CONFIDENCE)];

        // One-to-one, not nullable
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->expects(\$this->once())->method('isAssociationWithSingleJoinColumn')->with('field')->willReturn(true);

        \$mapping = ['joinColumns' => [['nullable' => false]]];
        \$classMetadata->expects(\$this->once())->method('getAssociationMapping')->with('field')->willReturn(\$mapping);

        \$return[] = [\$classMetadata, new ValueGuess(true, Guess::HIGH_CONFIDENCE)];

        // One-to-many, no clue
        \$classMetadata = \$this->getMockBuilder('Doctrine\\ORM\\Mapping\\ClassMetadata')->disableOriginalConstructor()->getMock();
        \$classMetadata->expects(\$this->once())->method('isAssociationWithSingleJoinColumn')->with('field')->willReturn(false);

        \$return[] = [\$classMetadata, null];

        return \$return;
    }

    private function getGuesser(ClassMetadata \$classMetadata)
    {
        \$em = \$this->getMockBuilder('Doctrine\\Common\\Persistence\\ObjectManager')->getMock();
        \$em->expects(\$this->once())->method('getClassMetaData')->with('TestEntity')->willReturn(\$classMetadata);

        \$registry = \$this->getMockBuilder('Doctrine\\Common\\Persistence\\ManagerRegistry')->getMock();
        \$registry->expects(\$this->once())->method('getManagers')->willReturn([\$em]);

        return new DoctrineOrmTypeGuesser(\$registry);
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Form/DoctrineOrmTypeGuesserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Form/DoctrineOrmTypeGuesserTest.php");
    }
}
