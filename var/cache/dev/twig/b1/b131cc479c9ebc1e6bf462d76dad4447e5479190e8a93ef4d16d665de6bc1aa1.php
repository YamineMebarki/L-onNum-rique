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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php */
class __TwigTemplate_4871549bb7989a9fe0d7dcbad9010d3b3eb1e26639a8044fa1d4d07ef8edfb42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php"));

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

use Doctrine\\Common\\Util\\Debug;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to execute DQL queries in a given EntityManager.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class RunDqlCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:run-dql')
             ->setDescription('Executes arbitrary DQL directly from the command line')
             ->addArgument('dql', InputArgument::REQUIRED, 'The DQL to execute.')
             ->addOption('hydrate', null, InputOption::VALUE_REQUIRED, 'Hydration mode of result set. Should be either: object, array, scalar or single-scalar.', 'object')
             ->addOption('first-result', null, InputOption::VALUE_REQUIRED, 'The first result in the result set.')
             ->addOption('max-result', null, InputOption::VALUE_REQUIRED, 'The maximum number of results in the result set.')
             ->addOption('depth', null, InputOption::VALUE_REQUIRED, 'Dumping depth of Entity graph.', 7)
             ->addOption('show-sql', null, InputOption::VALUE_NONE, 'Dump generated SQL instead of executing query')
             ->setHelp('Executes arbitrary DQL directly from the command line.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        /* @var \$em \\Doctrine\\ORM\\EntityManagerInterface */
        \$em = \$this->getHelper('em')->getEntityManager();

        if ((\$dql = \$input->getArgument('dql')) === null) {
            throw new \\RuntimeException(\"Argument 'dql' is required in order to execute this command correctly.\");
        }

        \$depth = \$input->getOption('depth');

        if ( ! is_numeric(\$depth)) {
            throw new \\LogicException(\"Option 'depth' must contain an integer value\");
        }

        \$hydrationModeName = \$input->getOption('hydrate');
        \$hydrationMode = 'Doctrine\\ORM\\Query::HYDRATE_' . strtoupper(str_replace('-', '_', \$hydrationModeName));

        if ( ! defined(\$hydrationMode)) {
            throw new \\RuntimeException(
                \"Hydration mode '\$hydrationModeName' does not exist. It should be either: object. array, scalar or single-scalar.\"
            );
        }

        \$query = \$em->createQuery(\$dql);

        if ((\$firstResult = \$input->getOption('first-result')) !== null) {
            if ( ! is_numeric(\$firstResult)) {
                throw new \\LogicException(\"Option 'first-result' must contain an integer value\");
            }

            \$query->setFirstResult((int) \$firstResult);
        }

        if ((\$maxResult = \$input->getOption('max-result')) !== null) {
            if ( ! is_numeric(\$maxResult)) {
                throw new \\LogicException(\"Option 'max-result' must contain an integer value\");
            }

            \$query->setMaxResults((int) \$maxResult);
        }

        if (\$input->getOption('show-sql')) {
            \$ui->text(\$query->getSQL());
            return;
        }

        \$resultSet = \$query->execute([], constant(\$hydrationMode));

        \$ui->text(Debug::dump(\$resultSet, \$input->getOption('depth'), true, false));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php";
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

use Doctrine\\Common\\Util\\Debug;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to execute DQL queries in a given EntityManager.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class RunDqlCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:run-dql')
             ->setDescription('Executes arbitrary DQL directly from the command line')
             ->addArgument('dql', InputArgument::REQUIRED, 'The DQL to execute.')
             ->addOption('hydrate', null, InputOption::VALUE_REQUIRED, 'Hydration mode of result set. Should be either: object, array, scalar or single-scalar.', 'object')
             ->addOption('first-result', null, InputOption::VALUE_REQUIRED, 'The first result in the result set.')
             ->addOption('max-result', null, InputOption::VALUE_REQUIRED, 'The maximum number of results in the result set.')
             ->addOption('depth', null, InputOption::VALUE_REQUIRED, 'Dumping depth of Entity graph.', 7)
             ->addOption('show-sql', null, InputOption::VALUE_NONE, 'Dump generated SQL instead of executing query')
             ->setHelp('Executes arbitrary DQL directly from the command line.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        /* @var \$em \\Doctrine\\ORM\\EntityManagerInterface */
        \$em = \$this->getHelper('em')->getEntityManager();

        if ((\$dql = \$input->getArgument('dql')) === null) {
            throw new \\RuntimeException(\"Argument 'dql' is required in order to execute this command correctly.\");
        }

        \$depth = \$input->getOption('depth');

        if ( ! is_numeric(\$depth)) {
            throw new \\LogicException(\"Option 'depth' must contain an integer value\");
        }

        \$hydrationModeName = \$input->getOption('hydrate');
        \$hydrationMode = 'Doctrine\\ORM\\Query::HYDRATE_' . strtoupper(str_replace('-', '_', \$hydrationModeName));

        if ( ! defined(\$hydrationMode)) {
            throw new \\RuntimeException(
                \"Hydration mode '\$hydrationModeName' does not exist. It should be either: object. array, scalar or single-scalar.\"
            );
        }

        \$query = \$em->createQuery(\$dql);

        if ((\$firstResult = \$input->getOption('first-result')) !== null) {
            if ( ! is_numeric(\$firstResult)) {
                throw new \\LogicException(\"Option 'first-result' must contain an integer value\");
            }

            \$query->setFirstResult((int) \$firstResult);
        }

        if ((\$maxResult = \$input->getOption('max-result')) !== null) {
            if ( ! is_numeric(\$maxResult)) {
                throw new \\LogicException(\"Option 'max-result' must contain an integer value\");
            }

            \$query->setMaxResults((int) \$maxResult);
        }

        if (\$input->getOption('show-sql')) {
            \$ui->text(\$query->getSQL());
            return;
        }

        \$resultSet = \$query->execute([], constant(\$hydrationMode));

        \$ui->text(Debug::dump(\$resultSet, \$input->getOption('depth'), true, false));
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php");
    }
}
