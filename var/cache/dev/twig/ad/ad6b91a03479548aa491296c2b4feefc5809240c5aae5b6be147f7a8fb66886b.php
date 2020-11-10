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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateEntitiesCommand.php */
class __TwigTemplate_838eb82b7db370e7da50ddf1cc217b84744cf423117d36368a075c949d0a3513 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateEntitiesCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateEntitiesCommand.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Console\\Command;

use Doctrine\\ORM\\Tools\\Console\\MetadataFilter;
use Doctrine\\ORM\\Tools\\DisconnectedClassMetadataFactory;
use Doctrine\\ORM\\Tools\\EntityGenerator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to generate entity classes and method stubs from your mapping information.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class GenerateEntitiesCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:generate-entities')
             ->setAliases(['orm:generate:entities'])
             ->setDescription('Generate entity classes and method stubs from your mapping information')
             ->addArgument('dest-path', InputArgument::REQUIRED, 'The path to generate your entity classes.')
             ->addOption('filter', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'A string pattern used to match entities that should be processed.')
             ->addOption('generate-annotations', null, InputOption::VALUE_OPTIONAL, 'Flag to define if generator should generate annotation metadata on entities.', false)
             ->addOption('generate-methods', null, InputOption::VALUE_OPTIONAL, 'Flag to define if generator should generate stub methods on entities.', true)
             ->addOption('regenerate-entities', null, InputOption::VALUE_OPTIONAL, 'Flag to define if generator should regenerate entity if it exists.', false)
             ->addOption('update-entities', null, InputOption::VALUE_OPTIONAL, 'Flag to define if generator should only update entity if it exists.', true)
             ->addOption('extend', null, InputOption::VALUE_REQUIRED, 'Defines a base class to be extended by generated entity classes.')
             ->addOption('num-spaces', null, InputOption::VALUE_REQUIRED, 'Defines the number of indentation spaces', 4)
             ->addOption('no-backup', null, InputOption::VALUE_NONE, 'Flag to define if generator should avoid backuping existing entity file if it exists.')
             ->setHelp(<<<EOT
Generate entity classes and method stubs from your mapping information.

If you use the <comment>--update-entities</comment> or <comment>--regenerate-entities</comment> flags your existing
code gets overwritten. The EntityGenerator will only append new code to your
file and will not delete the old code. However this approach may still be prone
to error and we suggest you use code repositories such as GIT or SVN to make
backups of your code.

It makes sense to generate the entity code if you are using entities as Data
Access Objects only and don't put much additional logic on them. If you are
however putting much more logic on the entities you should refrain from using
the entity-generator and code your entities manually.

<error>Important:</error> Even if you specified Inheritance options in your
XML or YAML Mapping files the generator cannot generate the base and
child classes for you correctly, because it doesn't know which
class is supposed to extend which. You have to adjust the entity
code manually for inheritance to work!
EOT
             );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        \$em = \$this->getHelper('em')->getEntityManager();

        \$cmf = new DisconnectedClassMetadataFactory();
        \$cmf->setEntityManager(\$em);
        \$metadatas = \$cmf->getAllMetadata();
        \$metadatas = MetadataFilter::filter(\$metadatas, \$input->getOption('filter'));

        // Process destination directory
        \$destPath = realpath(\$input->getArgument('dest-path'));

        if ( ! file_exists(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Entities destination directory '<info>%s</info>' does not exist.\", \$input->getArgument('dest-path'))
            );
        }

        if ( ! is_writable(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Entities destination directory '<info>%s</info>' does not have write permissions.\", \$destPath)
            );
        }

        if (empty(\$metadatas)) {
            \$ui->success('No Metadata Classes to process.');
            return;
        }

        \$entityGenerator = new EntityGenerator();

        \$entityGenerator->setGenerateAnnotations(\$input->getOption('generate-annotations'));
        \$entityGenerator->setGenerateStubMethods(\$input->getOption('generate-methods'));
        \$entityGenerator->setRegenerateEntityIfExists(\$input->getOption('regenerate-entities'));
        \$entityGenerator->setUpdateEntityIfExists(\$input->getOption('update-entities'));
        \$entityGenerator->setNumSpaces(\$input->getOption('num-spaces'));
        \$entityGenerator->setBackupExisting(!\$input->getOption('no-backup'));

        if ((\$extend = \$input->getOption('extend')) !== null) {
            \$entityGenerator->setClassToExtend(\$extend);
        }

        foreach (\$metadatas as \$metadata) {
            \$ui->text(sprintf('Processing entity \"<info>%s</info>\"', \$metadata->name));
        }

        // Generating Entities
        \$entityGenerator->generate(\$metadatas, \$destPath);

        // Outputting information message
        \$ui->newLine();
        \$ui->success(sprintf('Entity classes generated to \"%s\"', \$destPath));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateEntitiesCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Console\\Command;

use Doctrine\\ORM\\Tools\\Console\\MetadataFilter;
use Doctrine\\ORM\\Tools\\DisconnectedClassMetadataFactory;
use Doctrine\\ORM\\Tools\\EntityGenerator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to generate entity classes and method stubs from your mapping information.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class GenerateEntitiesCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:generate-entities')
             ->setAliases(['orm:generate:entities'])
             ->setDescription('Generate entity classes and method stubs from your mapping information')
             ->addArgument('dest-path', InputArgument::REQUIRED, 'The path to generate your entity classes.')
             ->addOption('filter', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'A string pattern used to match entities that should be processed.')
             ->addOption('generate-annotations', null, InputOption::VALUE_OPTIONAL, 'Flag to define if generator should generate annotation metadata on entities.', false)
             ->addOption('generate-methods', null, InputOption::VALUE_OPTIONAL, 'Flag to define if generator should generate stub methods on entities.', true)
             ->addOption('regenerate-entities', null, InputOption::VALUE_OPTIONAL, 'Flag to define if generator should regenerate entity if it exists.', false)
             ->addOption('update-entities', null, InputOption::VALUE_OPTIONAL, 'Flag to define if generator should only update entity if it exists.', true)
             ->addOption('extend', null, InputOption::VALUE_REQUIRED, 'Defines a base class to be extended by generated entity classes.')
             ->addOption('num-spaces', null, InputOption::VALUE_REQUIRED, 'Defines the number of indentation spaces', 4)
             ->addOption('no-backup', null, InputOption::VALUE_NONE, 'Flag to define if generator should avoid backuping existing entity file if it exists.')
             ->setHelp(<<<EOT
Generate entity classes and method stubs from your mapping information.

If you use the <comment>--update-entities</comment> or <comment>--regenerate-entities</comment> flags your existing
code gets overwritten. The EntityGenerator will only append new code to your
file and will not delete the old code. However this approach may still be prone
to error and we suggest you use code repositories such as GIT or SVN to make
backups of your code.

It makes sense to generate the entity code if you are using entities as Data
Access Objects only and don't put much additional logic on them. If you are
however putting much more logic on the entities you should refrain from using
the entity-generator and code your entities manually.

<error>Important:</error> Even if you specified Inheritance options in your
XML or YAML Mapping files the generator cannot generate the base and
child classes for you correctly, because it doesn't know which
class is supposed to extend which. You have to adjust the entity
code manually for inheritance to work!
EOT
             );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        \$em = \$this->getHelper('em')->getEntityManager();

        \$cmf = new DisconnectedClassMetadataFactory();
        \$cmf->setEntityManager(\$em);
        \$metadatas = \$cmf->getAllMetadata();
        \$metadatas = MetadataFilter::filter(\$metadatas, \$input->getOption('filter'));

        // Process destination directory
        \$destPath = realpath(\$input->getArgument('dest-path'));

        if ( ! file_exists(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Entities destination directory '<info>%s</info>' does not exist.\", \$input->getArgument('dest-path'))
            );
        }

        if ( ! is_writable(\$destPath)) {
            throw new \\InvalidArgumentException(
                sprintf(\"Entities destination directory '<info>%s</info>' does not have write permissions.\", \$destPath)
            );
        }

        if (empty(\$metadatas)) {
            \$ui->success('No Metadata Classes to process.');
            return;
        }

        \$entityGenerator = new EntityGenerator();

        \$entityGenerator->setGenerateAnnotations(\$input->getOption('generate-annotations'));
        \$entityGenerator->setGenerateStubMethods(\$input->getOption('generate-methods'));
        \$entityGenerator->setRegenerateEntityIfExists(\$input->getOption('regenerate-entities'));
        \$entityGenerator->setUpdateEntityIfExists(\$input->getOption('update-entities'));
        \$entityGenerator->setNumSpaces(\$input->getOption('num-spaces'));
        \$entityGenerator->setBackupExisting(!\$input->getOption('no-backup'));

        if ((\$extend = \$input->getOption('extend')) !== null) {
            \$entityGenerator->setClassToExtend(\$extend);
        }

        foreach (\$metadatas as \$metadata) {
            \$ui->text(sprintf('Processing entity \"<info>%s</info>\"', \$metadata->name));
        }

        // Generating Entities
        \$entityGenerator->generate(\$metadatas, \$destPath);

        // Outputting information message
        \$ui->newLine();
        \$ui->success(sprintf('Entity classes generated to \"%s\"', \$destPath));
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateEntitiesCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateEntitiesCommand.php");
    }
}
