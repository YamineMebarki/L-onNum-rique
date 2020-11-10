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

/* vendor/symfony/doctrine-bridge/Tests/Form/Type/EntityTypePerformanceTest.php */
class __TwigTemplate_efd69e5f84ad30a921c33e00b61cdb5ee759ccd2fd0350df237dfe950bd885de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/Type/EntityTypePerformanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/Type/EntityTypePerformanceTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form\\Type;

use Doctrine\\ORM\\Tools\\SchemaTool;
use Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmExtension;
use Symfony\\Bridge\\Doctrine\\Test\\DoctrineTestHelper;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleIntIdEntity;
use Symfony\\Component\\Form\\Extension\\Core\\CoreExtension;
use Symfony\\Component\\Form\\Test\\FormPerformanceTestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class EntityTypePerformanceTest extends FormPerformanceTestCase
{
    const ENTITY_CLASS = 'Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleIntIdEntity';

    /**
     * @var \\Doctrine\\ORM\\EntityManager
     */
    private \$em;

    protected static \$supportedFeatureSetVersion = 304;

    protected function getExtensions()
    {
        \$manager = \$this->getMockBuilder('Doctrine\\Common\\Persistence\\ManagerRegistry')->getMock();

        \$manager->expects(\$this->any())
            ->method('getManager')
            ->willReturn(\$this->em);

        \$manager->expects(\$this->any())
            ->method('getManagerForClass')
            ->willReturn(\$this->em);

        return [
            new CoreExtension(),
            new DoctrineOrmExtension(\$manager),
        ];
    }

    protected function setUp(): void
    {
        \$this->em = DoctrineTestHelper::createTestEntityManager();

        parent::setUp();

        \$schemaTool = new SchemaTool(\$this->em);
        \$classes = [
            \$this->em->getClassMetadata(self::ENTITY_CLASS),
        ];

        try {
            \$schemaTool->dropSchema(\$classes);
        } catch (\\Exception \$e) {
        }

        try {
            \$schemaTool->createSchema(\$classes);
        } catch (\\Exception \$e) {
        }

        \$ids = range(1, 300);

        foreach (\$ids as \$id) {
            \$name = 65 + (int) \\chr(\$id % 57);
            \$this->em->persist(new SingleIntIdEntity(\$id, \$name));
        }

        \$this->em->flush();
    }

    /**
     * This test case is realistic in collection forms where each
     * row contains the same entity field.
     *
     * @group benchmark
     */
    public function testCollapsedEntityField()
    {
        \$this->setMaxRunningTime(1);

        for (\$i = 0; \$i < 40; ++\$i) {
            \$form = \$this->factory->create('Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', null, [
                'class' => self::ENTITY_CLASS,
            ]);

            // force loading of the choice list
            \$form->createView();
        }
    }

    /**
     * @group benchmark
     */
    public function testCollapsedEntityFieldWithChoices()
    {
        \$choices = \$this->em->createQuery('SELECT c FROM '.self::ENTITY_CLASS.' c')->getResult();
        \$this->setMaxRunningTime(1);

        for (\$i = 0; \$i < 40; ++\$i) {
            \$form = \$this->factory->create('Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', null, [
                'class' => self::ENTITY_CLASS,
                'choices' => \$choices,
            ]);

            // force loading of the choice list
            \$form->createView();
        }
    }

    /**
     * @group benchmark
     */
    public function testCollapsedEntityFieldWithPreferredChoices()
    {
        \$choices = \$this->em->createQuery('SELECT c FROM '.self::ENTITY_CLASS.' c')->getResult();
        \$this->setMaxRunningTime(1);

        for (\$i = 0; \$i < 40; ++\$i) {
            \$form = \$this->factory->create('Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', null, [
                    'class' => self::ENTITY_CLASS,
                    'preferred_choices' => \$choices,
                ]);

            // force loading of the choice list
            \$form->createView();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Form/Type/EntityTypePerformanceTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form\\Type;

use Doctrine\\ORM\\Tools\\SchemaTool;
use Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmExtension;
use Symfony\\Bridge\\Doctrine\\Test\\DoctrineTestHelper;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleIntIdEntity;
use Symfony\\Component\\Form\\Extension\\Core\\CoreExtension;
use Symfony\\Component\\Form\\Test\\FormPerformanceTestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class EntityTypePerformanceTest extends FormPerformanceTestCase
{
    const ENTITY_CLASS = 'Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleIntIdEntity';

    /**
     * @var \\Doctrine\\ORM\\EntityManager
     */
    private \$em;

    protected static \$supportedFeatureSetVersion = 304;

    protected function getExtensions()
    {
        \$manager = \$this->getMockBuilder('Doctrine\\Common\\Persistence\\ManagerRegistry')->getMock();

        \$manager->expects(\$this->any())
            ->method('getManager')
            ->willReturn(\$this->em);

        \$manager->expects(\$this->any())
            ->method('getManagerForClass')
            ->willReturn(\$this->em);

        return [
            new CoreExtension(),
            new DoctrineOrmExtension(\$manager),
        ];
    }

    protected function setUp(): void
    {
        \$this->em = DoctrineTestHelper::createTestEntityManager();

        parent::setUp();

        \$schemaTool = new SchemaTool(\$this->em);
        \$classes = [
            \$this->em->getClassMetadata(self::ENTITY_CLASS),
        ];

        try {
            \$schemaTool->dropSchema(\$classes);
        } catch (\\Exception \$e) {
        }

        try {
            \$schemaTool->createSchema(\$classes);
        } catch (\\Exception \$e) {
        }

        \$ids = range(1, 300);

        foreach (\$ids as \$id) {
            \$name = 65 + (int) \\chr(\$id % 57);
            \$this->em->persist(new SingleIntIdEntity(\$id, \$name));
        }

        \$this->em->flush();
    }

    /**
     * This test case is realistic in collection forms where each
     * row contains the same entity field.
     *
     * @group benchmark
     */
    public function testCollapsedEntityField()
    {
        \$this->setMaxRunningTime(1);

        for (\$i = 0; \$i < 40; ++\$i) {
            \$form = \$this->factory->create('Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', null, [
                'class' => self::ENTITY_CLASS,
            ]);

            // force loading of the choice list
            \$form->createView();
        }
    }

    /**
     * @group benchmark
     */
    public function testCollapsedEntityFieldWithChoices()
    {
        \$choices = \$this->em->createQuery('SELECT c FROM '.self::ENTITY_CLASS.' c')->getResult();
        \$this->setMaxRunningTime(1);

        for (\$i = 0; \$i < 40; ++\$i) {
            \$form = \$this->factory->create('Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', null, [
                'class' => self::ENTITY_CLASS,
                'choices' => \$choices,
            ]);

            // force loading of the choice list
            \$form->createView();
        }
    }

    /**
     * @group benchmark
     */
    public function testCollapsedEntityFieldWithPreferredChoices()
    {
        \$choices = \$this->em->createQuery('SELECT c FROM '.self::ENTITY_CLASS.' c')->getResult();
        \$this->setMaxRunningTime(1);

        for (\$i = 0; \$i < 40; ++\$i) {
            \$form = \$this->factory->create('Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', null, [
                    'class' => self::ENTITY_CLASS,
                    'preferred_choices' => \$choices,
                ]);

            // force loading of the choice list
            \$form->createView();
        }
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Form/Type/EntityTypePerformanceTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Form/Type/EntityTypePerformanceTest.php");
    }
}
