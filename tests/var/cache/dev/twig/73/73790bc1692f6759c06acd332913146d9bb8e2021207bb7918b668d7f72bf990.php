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

/* vendor/doctrine/orm/bin/doctrine.php */
class __TwigTemplate_be26ce3d40dfbe57226aef3edc920d4f58cf63b5b59565c46f76548404344bfa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/bin/doctrine.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/bin/doctrine.php"));

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

use Symfony\\Component\\Console\\Helper\\HelperSet;
use Doctrine\\ORM\\Tools\\Console\\ConsoleRunner;

\$autoloadFiles = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../autoload.php'
];

foreach (\$autoloadFiles as \$autoloadFile) {
    if (file_exists(\$autoloadFile)) {
        require_once \$autoloadFile;
        break;
    }
}

\$directories = [getcwd(), getcwd() . DIRECTORY_SEPARATOR . 'config'];

\$configFile = null;
foreach (\$directories as \$directory) {
    \$configFile = \$directory . DIRECTORY_SEPARATOR . 'cli-paypal.php';

    if (file_exists(\$configFile)) {
        break;
    }
}

if ( ! file_exists(\$configFile)) {
    ConsoleRunner::printCliConfigTemplate();
    exit(1);
}

if ( ! is_readable(\$configFile)) {
    echo 'Configuration file [' . \$configFile . '] does not have read permission.' . \"\\n\";
    exit(1);
}

\$commands = [];

\$helperSet = require \$configFile;

if ( ! (\$helperSet instanceof HelperSet)) {
    foreach (\$GLOBALS as \$helperSetCandidate) {
        if (\$helperSetCandidate instanceof HelperSet) {
            \$helperSet = \$helperSetCandidate;
            break;
        }
    }
}

ConsoleRunner::run(\$helperSet, \$commands);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/bin/doctrine.php";
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

use Symfony\\Component\\Console\\Helper\\HelperSet;
use Doctrine\\ORM\\Tools\\Console\\ConsoleRunner;

\$autoloadFiles = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../autoload.php'
];

foreach (\$autoloadFiles as \$autoloadFile) {
    if (file_exists(\$autoloadFile)) {
        require_once \$autoloadFile;
        break;
    }
}

\$directories = [getcwd(), getcwd() . DIRECTORY_SEPARATOR . 'config'];

\$configFile = null;
foreach (\$directories as \$directory) {
    \$configFile = \$directory . DIRECTORY_SEPARATOR . 'cli-paypal.php';

    if (file_exists(\$configFile)) {
        break;
    }
}

if ( ! file_exists(\$configFile)) {
    ConsoleRunner::printCliConfigTemplate();
    exit(1);
}

if ( ! is_readable(\$configFile)) {
    echo 'Configuration file [' . \$configFile . '] does not have read permission.' . \"\\n\";
    exit(1);
}

\$commands = [];

\$helperSet = require \$configFile;

if ( ! (\$helperSet instanceof HelperSet)) {
    foreach (\$GLOBALS as \$helperSetCandidate) {
        if (\$helperSetCandidate instanceof HelperSet) {
            \$helperSet = \$helperSetCandidate;
            break;
        }
    }
}

ConsoleRunner::run(\$helperSet, \$commands);
", "vendor/doctrine/orm/bin/doctrine.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/bin/doctrine.php");
    }
}
