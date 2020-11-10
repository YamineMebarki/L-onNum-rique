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

/* vendor/twig/twig/drupal_test.sh */
class __TwigTemplate_ca9a1fb58a4410883eb41f58848fc28d19c855f63a7aed4da902309567222664 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/drupal_test.sh"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/drupal_test.sh"));

        // line 1
        echo "#!/bin/bash

set -x
set -e

REPO=`pwd`
cd /tmp
rm -rf drupal-twig-test
composer create-project --no-interaction drupal-composer/drupal-project:8.x-dev drupal-twig-test
cd drupal-twig-test
(cd vendor/twig && rm -rf twig && ln -sf \$REPO twig)
echo '\$config[\"system.logging\"][\"error_level\"] = \"verbose\";' >> web/sites/default/settings.php
composer require drupal/core:8.7.x-dev webflo/drupal-core-require-dev:8.7.x-dev \"egulias/email-validator:^2.0\"
php ./web/core/scripts/drupal install --no-interaction demo_umami > output
perl -p -i -e 's/^([A-Za-z]+)\\: (.+)\$/export DRUPAL_\\1=\\2/' output
source output

wget https://get.symfony.com/cli/installer -O - | bash
export PATH=\"\$HOME/.symfony/bin:\$PATH\"
symfony server:start -d --no-tls
ENDPOINT=`symfony server:status -no-ansi | sed -E 's/^.+ http/http/'`

curl -OLsS https://get.blackfire.io/blackfire-player.phar
chmod +x blackfire-player.phar
cat > drupal-tests.bkf <<EOF
name \"Drupal tests\"

scenario
    name \"homepage\"
    set name \"admin\"
    set pass \"pass\"

    visit url('/')
        expect status_code() == 200
    click link('Articles')
        expect status_code() == 200
    click link('Dairy-free and delicious milk chocolate')
        expect body() matches \"/Dairy\\-free milk chocolate is made in largely the same way as regular chocolate/\"
        expect status_code() == 200
    click link('Log in')
        expect status_code() == 200
    submit button(\"Log in\")
        param name name
        param pass pass
        expect status_code() == 303
    follow
        expect status_code() == 200
    click link('Structure')
        expect status_code() == 200
EOF
./blackfire-player.phar run drupal-tests.bkf --endpoint=\$ENDPOINT --variable name=\$DRUPAL_Username --variable pass=\$DRUPAL_Password
symfony server:stop
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/drupal_test.sh";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/bin/bash

set -x
set -e

REPO=`pwd`
cd /tmp
rm -rf drupal-twig-test
composer create-project --no-interaction drupal-composer/drupal-project:8.x-dev drupal-twig-test
cd drupal-twig-test
(cd vendor/twig && rm -rf twig && ln -sf \$REPO twig)
echo '\$config[\"system.logging\"][\"error_level\"] = \"verbose\";' >> web/sites/default/settings.php
composer require drupal/core:8.7.x-dev webflo/drupal-core-require-dev:8.7.x-dev \"egulias/email-validator:^2.0\"
php ./web/core/scripts/drupal install --no-interaction demo_umami > output
perl -p -i -e 's/^([A-Za-z]+)\\: (.+)\$/export DRUPAL_\\1=\\2/' output
source output

wget https://get.symfony.com/cli/installer -O - | bash
export PATH=\"\$HOME/.symfony/bin:\$PATH\"
symfony server:start -d --no-tls
ENDPOINT=`symfony server:status -no-ansi | sed -E 's/^.+ http/http/'`

curl -OLsS https://get.blackfire.io/blackfire-player.phar
chmod +x blackfire-player.phar
cat > drupal-tests.bkf <<EOF
name \"Drupal tests\"

scenario
    name \"homepage\"
    set name \"admin\"
    set pass \"pass\"

    visit url('/')
        expect status_code() == 200
    click link('Articles')
        expect status_code() == 200
    click link('Dairy-free and delicious milk chocolate')
        expect body() matches \"/Dairy\\-free milk chocolate is made in largely the same way as regular chocolate/\"
        expect status_code() == 200
    click link('Log in')
        expect status_code() == 200
    submit button(\"Log in\")
        param name name
        param pass pass
        expect status_code() == 303
    follow
        expect status_code() == 200
    click link('Structure')
        expect status_code() == 200
EOF
./blackfire-player.phar run drupal-tests.bkf --endpoint=\$ENDPOINT --variable name=\$DRUPAL_Username --variable pass=\$DRUPAL_Password
symfony server:stop
", "vendor/twig/twig/drupal_test.sh", "/var/www/public/DevLaon/templates/vendor/twig/twig/drupal_test.sh");
    }
}
