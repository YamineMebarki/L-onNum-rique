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

/* vendor/symfony/flex/tests/Configurator/DockerfileConfiguratorTest.php */
class __TwigTemplate_c58049064ecd8f70c7e5328429679d867dba1613a6703add94a802cef8eb94ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/DockerfileConfiguratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/DockerfileConfiguratorTest.php"));

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

namespace Symfony\\Flex\\Configurator;

use Composer\\Composer;
use Composer\\IO\\IOInterface;
use Composer\\Package\\Package;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class DockerfileConfiguratorTest extends TestCase
{
    public function setUp()
    {
        @mkdir(FLEX_TEST_DIR);
    }

    protected function tearDown()
    {
        @unlink(FLEX_TEST_DIR.'/Dockerfile');
    }

    public function testConfigure()
    {
        \$originalContent = <<<'EOF'
FROM php:7.1-fpm-alpine

RUN apk add --no-cache --virtual .persistent-deps \\
\t\tgit \\
\t\ticu-libs \\
\t\tmake \\
\t\tzlib

ENV APCU_VERSION 5.1.8

RUN set -xe \\
\t&& apk add --no-cache --virtual .build-deps \\
\t\t\$PHPIZE_DEPS \\
\t\ticu-dev \\
\t\tzlib-dev \\
\t&& docker-php-ext-install \\
\t\tintl \\
\t\tzip \\
\t&& pecl install \\
\t\tapcu-\${APCU_VERSION} \\
\t&& docker-php-ext-enable --ini-name 20-apcu.ini apcu \\
\t&& docker-php-ext-enable --ini-name 05-opcache.ini opcache \\
\t&& apk del .build-deps

###> recipes ###
###< recipes ##

COPY docker/app/php.ini /usr/local/etc/php/php.ini

COPY docker/app/install-composer.sh /usr/local/bin/docker-app-install-composer
RUN chmod +x /usr/local/bin/docker-app-install-composer

RUN set -xe \\
\t&& docker-app-install-composer \\
\t&& mv composer.phar /usr/local/bin/composer

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer global require \"hirak/prestissimo:^0.3\" --prefer-dist --no-progress --no-suggest --optimize-autoloader --classmap-authoritative \\
\t&& composer clear-cache

WORKDIR /srv/app

COPY . .
# Cleanup unneeded files
RUN rm -Rf docker/

# Download the Symfony skeleton
ENV SKELETON_COMPOSER_JSON https://raw.githubusercontent.com/symfony/skeleton/v3.3.2/composer.json
RUN [ -f composer.json ] || php -r \"copy('\$SKELETON_COMPOSER_JSON', 'composer.json');\"

RUN mkdir -p var/cache var/log var/sessions \\
    && composer install --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader --classmap-authoritative --no-interaction \\
\t&& composer clear-cache \\
# Permissions hack because setfacl does not work on Mac and Windows
\t&& chown -R www-data var

COPY docker/app/docker-entrypoint.sh /usr/local/bin/docker-app-entrypoint
RUN chmod +x /usr/local/bin/docker-app-entrypoint

ENTRYPOINT [\"docker-app-entrypoint\"]
CMD [\"php-fpm\"]

EOF;

        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$recipe->method('getName')->willReturn('doctrine/doctrine-bundle');

        \$config = FLEX_TEST_DIR.'/Dockerfile';
        file_put_contents(\$config, \$originalContent);

        \$package = new Package('dummy/dummy', '1.0.0', '1.0.0');
        \$package->setExtra(['symfony' => ['docker' => true]]);

        \$composer = \$this->getMockBuilder(Composer::class)->getMock();
        \$composer->method('getPackage')->willReturn(\$package);

        \$configurator = new DockerfileConfigurator(
            \$composer,
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['RUN docker-php-ext-install pdo_mysql'], \$lock);
        \$this->assertEquals(<<<'EOF'
FROM php:7.1-fpm-alpine

RUN apk add --no-cache --virtual .persistent-deps \\
\t\tgit \\
\t\ticu-libs \\
\t\tmake \\
\t\tzlib

ENV APCU_VERSION 5.1.8

RUN set -xe \\
\t&& apk add --no-cache --virtual .build-deps \\
\t\t\$PHPIZE_DEPS \\
\t\ticu-dev \\
\t\tzlib-dev \\
\t&& docker-php-ext-install \\
\t\tintl \\
\t\tzip \\
\t&& pecl install \\
\t\tapcu-\${APCU_VERSION} \\
\t&& docker-php-ext-enable --ini-name 20-apcu.ini apcu \\
\t&& docker-php-ext-enable --ini-name 05-opcache.ini opcache \\
\t&& apk del .build-deps

###> recipes ###
###> doctrine/doctrine-bundle ###
RUN docker-php-ext-install pdo_mysql
###< doctrine/doctrine-bundle ###
###< recipes ##

COPY docker/app/php.ini /usr/local/etc/php/php.ini

COPY docker/app/install-composer.sh /usr/local/bin/docker-app-install-composer
RUN chmod +x /usr/local/bin/docker-app-install-composer

RUN set -xe \\
\t&& docker-app-install-composer \\
\t&& mv composer.phar /usr/local/bin/composer

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer global require \"hirak/prestissimo:^0.3\" --prefer-dist --no-progress --no-suggest --optimize-autoloader --classmap-authoritative \\
\t&& composer clear-cache

WORKDIR /srv/app

COPY . .
# Cleanup unneeded files
RUN rm -Rf docker/

# Download the Symfony skeleton
ENV SKELETON_COMPOSER_JSON https://raw.githubusercontent.com/symfony/skeleton/v3.3.2/composer.json
RUN [ -f composer.json ] || php -r \"copy('\$SKELETON_COMPOSER_JSON', 'composer.json');\"

RUN mkdir -p var/cache var/log var/sessions \\
    && composer install --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader --classmap-authoritative --no-interaction \\
\t&& composer clear-cache \\
# Permissions hack because setfacl does not work on Mac and Windows
\t&& chown -R www-data var

COPY docker/app/docker-entrypoint.sh /usr/local/bin/docker-app-entrypoint
RUN chmod +x /usr/local/bin/docker-app-entrypoint

ENTRYPOINT [\"docker-app-entrypoint\"]
CMD [\"php-fpm\"]

EOF
            , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, [], \$lock);
        \$this->assertEquals(\$originalContent, file_get_contents(\$config));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/tests/Configurator/DockerfileConfiguratorTest.php";
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

namespace Symfony\\Flex\\Configurator;

use Composer\\Composer;
use Composer\\IO\\IOInterface;
use Composer\\Package\\Package;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class DockerfileConfiguratorTest extends TestCase
{
    public function setUp()
    {
        @mkdir(FLEX_TEST_DIR);
    }

    protected function tearDown()
    {
        @unlink(FLEX_TEST_DIR.'/Dockerfile');
    }

    public function testConfigure()
    {
        \$originalContent = <<<'EOF'
FROM php:7.1-fpm-alpine

RUN apk add --no-cache --virtual .persistent-deps \\
\t\tgit \\
\t\ticu-libs \\
\t\tmake \\
\t\tzlib

ENV APCU_VERSION 5.1.8

RUN set -xe \\
\t&& apk add --no-cache --virtual .build-deps \\
\t\t\$PHPIZE_DEPS \\
\t\ticu-dev \\
\t\tzlib-dev \\
\t&& docker-php-ext-install \\
\t\tintl \\
\t\tzip \\
\t&& pecl install \\
\t\tapcu-\${APCU_VERSION} \\
\t&& docker-php-ext-enable --ini-name 20-apcu.ini apcu \\
\t&& docker-php-ext-enable --ini-name 05-opcache.ini opcache \\
\t&& apk del .build-deps

###> recipes ###
###< recipes ##

COPY docker/app/php.ini /usr/local/etc/php/php.ini

COPY docker/app/install-composer.sh /usr/local/bin/docker-app-install-composer
RUN chmod +x /usr/local/bin/docker-app-install-composer

RUN set -xe \\
\t&& docker-app-install-composer \\
\t&& mv composer.phar /usr/local/bin/composer

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer global require \"hirak/prestissimo:^0.3\" --prefer-dist --no-progress --no-suggest --optimize-autoloader --classmap-authoritative \\
\t&& composer clear-cache

WORKDIR /srv/app

COPY . .
# Cleanup unneeded files
RUN rm -Rf docker/

# Download the Symfony skeleton
ENV SKELETON_COMPOSER_JSON https://raw.githubusercontent.com/symfony/skeleton/v3.3.2/composer.json
RUN [ -f composer.json ] || php -r \"copy('\$SKELETON_COMPOSER_JSON', 'composer.json');\"

RUN mkdir -p var/cache var/log var/sessions \\
    && composer install --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader --classmap-authoritative --no-interaction \\
\t&& composer clear-cache \\
# Permissions hack because setfacl does not work on Mac and Windows
\t&& chown -R www-data var

COPY docker/app/docker-entrypoint.sh /usr/local/bin/docker-app-entrypoint
RUN chmod +x /usr/local/bin/docker-app-entrypoint

ENTRYPOINT [\"docker-app-entrypoint\"]
CMD [\"php-fpm\"]

EOF;

        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$recipe->method('getName')->willReturn('doctrine/doctrine-bundle');

        \$config = FLEX_TEST_DIR.'/Dockerfile';
        file_put_contents(\$config, \$originalContent);

        \$package = new Package('dummy/dummy', '1.0.0', '1.0.0');
        \$package->setExtra(['symfony' => ['docker' => true]]);

        \$composer = \$this->getMockBuilder(Composer::class)->getMock();
        \$composer->method('getPackage')->willReturn(\$package);

        \$configurator = new DockerfileConfigurator(
            \$composer,
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['RUN docker-php-ext-install pdo_mysql'], \$lock);
        \$this->assertEquals(<<<'EOF'
FROM php:7.1-fpm-alpine

RUN apk add --no-cache --virtual .persistent-deps \\
\t\tgit \\
\t\ticu-libs \\
\t\tmake \\
\t\tzlib

ENV APCU_VERSION 5.1.8

RUN set -xe \\
\t&& apk add --no-cache --virtual .build-deps \\
\t\t\$PHPIZE_DEPS \\
\t\ticu-dev \\
\t\tzlib-dev \\
\t&& docker-php-ext-install \\
\t\tintl \\
\t\tzip \\
\t&& pecl install \\
\t\tapcu-\${APCU_VERSION} \\
\t&& docker-php-ext-enable --ini-name 20-apcu.ini apcu \\
\t&& docker-php-ext-enable --ini-name 05-opcache.ini opcache \\
\t&& apk del .build-deps

###> recipes ###
###> doctrine/doctrine-bundle ###
RUN docker-php-ext-install pdo_mysql
###< doctrine/doctrine-bundle ###
###< recipes ##

COPY docker/app/php.ini /usr/local/etc/php/php.ini

COPY docker/app/install-composer.sh /usr/local/bin/docker-app-install-composer
RUN chmod +x /usr/local/bin/docker-app-install-composer

RUN set -xe \\
\t&& docker-app-install-composer \\
\t&& mv composer.phar /usr/local/bin/composer

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer global require \"hirak/prestissimo:^0.3\" --prefer-dist --no-progress --no-suggest --optimize-autoloader --classmap-authoritative \\
\t&& composer clear-cache

WORKDIR /srv/app

COPY . .
# Cleanup unneeded files
RUN rm -Rf docker/

# Download the Symfony skeleton
ENV SKELETON_COMPOSER_JSON https://raw.githubusercontent.com/symfony/skeleton/v3.3.2/composer.json
RUN [ -f composer.json ] || php -r \"copy('\$SKELETON_COMPOSER_JSON', 'composer.json');\"

RUN mkdir -p var/cache var/log var/sessions \\
    && composer install --prefer-dist --no-dev --no-progress --no-suggest --optimize-autoloader --classmap-authoritative --no-interaction \\
\t&& composer clear-cache \\
# Permissions hack because setfacl does not work on Mac and Windows
\t&& chown -R www-data var

COPY docker/app/docker-entrypoint.sh /usr/local/bin/docker-app-entrypoint
RUN chmod +x /usr/local/bin/docker-app-entrypoint

ENTRYPOINT [\"docker-app-entrypoint\"]
CMD [\"php-fpm\"]

EOF
            , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, [], \$lock);
        \$this->assertEquals(\$originalContent, file_get_contents(\$config));
    }
}
", "vendor/symfony/flex/tests/Configurator/DockerfileConfiguratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/Configurator/DockerfileConfiguratorTest.php");
    }
}
