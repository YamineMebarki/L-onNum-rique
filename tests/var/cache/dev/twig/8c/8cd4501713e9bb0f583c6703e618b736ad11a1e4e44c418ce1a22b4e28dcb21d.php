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

/* vendor/symfony/dependency-injection/Tests/Fixtures/xml/services_tsantos.xml */
class __TwigTemplate_559e7e9564312f4a34543af6966c08d578b65e96e2bc89badef2c2787b5adf2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services_tsantos.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services_tsantos.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"tsantos_serializer\" class=\"TSantos\\Serializer\\EventEmitterSerializer\" public=\"true\">
      <argument type=\"service\">
        <service class=\"TSantos\\Serializer\\Encoder\\JsonEncoder\" public=\"false\">
          <tag name=\"tsantos_serializer.encoder\" format=\"json\"/>
        </service>
      </argument>
      <argument type=\"service\">
        <service class=\"TSantos\\Serializer\\NormalizerRegistry\" public=\"false\">
          <call method=\"add\">
            <argument type=\"service\">
              <service class=\"TSantos\\Serializer\\Normalizer\\ObjectNormalizer\" public=\"false\">
                <tag name=\"tsantos_serializer.normalizer\" priority=\"-800\"/>
                <argument type=\"service\">
                  <service class=\"TSantos\\SerializerBundle\\Serializer\\CircularReferenceHandler\" public=\"false\"/>
                </argument>
              </service>
            </argument>
          </call>
          <call method=\"add\">
            <argument type=\"service\">
              <service class=\"TSantos\\Serializer\\Normalizer\\CollectionNormalizer\" public=\"false\">
                <tag name=\"tsantos_serializer.normalizer\" priority=\"-900\"/>
                <call method=\"setSerializer\">
                  <argument type=\"service\" id=\"tsantos_serializer\"/>
                </call>
              </service>
            </argument>
          </call>
          <call method=\"add\">
            <argument type=\"service\">
              <service class=\"TSantos\\Serializer\\Normalizer\\JsonNormalizer\" public=\"false\">
                <tag name=\"tsantos_serializer.normalizer\" priority=\"-1000\"/>
                <call method=\"setSerializer\">
                  <argument type=\"service\" id=\"tsantos_serializer\"/>
                </call>
              </service>
            </argument>
          </call>
        </service>
      </argument>
      <argument type=\"service\">
        <service class=\"TSantos\\Serializer\\EventDispatcher\\EventDispatcher\" public=\"false\">
          <call method=\"addSubscriber\">
            <argument type=\"service\">
              <service class=\"TSantos\\SerializerBundle\\EventListener\\StopwatchListener\" public=\"false\">
                <tag name=\"tsantos_serializer.event_subscriber\"/>
                <argument type=\"service\">
                  <service class=\"Symfony\\Component\\Stopwatch\\Stopwatch\" public=\"false\">
                    <tag name=\"kernel.reset\" method=\"reset\"/>
                    <argument>true</argument>
                  </service>
                </argument>
              </service>
            </argument>
          </call>
        </service>
      </argument>
    </service>
    <service id=\"TSantos\\Serializer\\SerializerInterface\" alias=\"tsantos_serializer\" public=\"true\"/>
  </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services_tsantos.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"tsantos_serializer\" class=\"TSantos\\Serializer\\EventEmitterSerializer\" public=\"true\">
      <argument type=\"service\">
        <service class=\"TSantos\\Serializer\\Encoder\\JsonEncoder\" public=\"false\">
          <tag name=\"tsantos_serializer.encoder\" format=\"json\"/>
        </service>
      </argument>
      <argument type=\"service\">
        <service class=\"TSantos\\Serializer\\NormalizerRegistry\" public=\"false\">
          <call method=\"add\">
            <argument type=\"service\">
              <service class=\"TSantos\\Serializer\\Normalizer\\ObjectNormalizer\" public=\"false\">
                <tag name=\"tsantos_serializer.normalizer\" priority=\"-800\"/>
                <argument type=\"service\">
                  <service class=\"TSantos\\SerializerBundle\\Serializer\\CircularReferenceHandler\" public=\"false\"/>
                </argument>
              </service>
            </argument>
          </call>
          <call method=\"add\">
            <argument type=\"service\">
              <service class=\"TSantos\\Serializer\\Normalizer\\CollectionNormalizer\" public=\"false\">
                <tag name=\"tsantos_serializer.normalizer\" priority=\"-900\"/>
                <call method=\"setSerializer\">
                  <argument type=\"service\" id=\"tsantos_serializer\"/>
                </call>
              </service>
            </argument>
          </call>
          <call method=\"add\">
            <argument type=\"service\">
              <service class=\"TSantos\\Serializer\\Normalizer\\JsonNormalizer\" public=\"false\">
                <tag name=\"tsantos_serializer.normalizer\" priority=\"-1000\"/>
                <call method=\"setSerializer\">
                  <argument type=\"service\" id=\"tsantos_serializer\"/>
                </call>
              </service>
            </argument>
          </call>
        </service>
      </argument>
      <argument type=\"service\">
        <service class=\"TSantos\\Serializer\\EventDispatcher\\EventDispatcher\" public=\"false\">
          <call method=\"addSubscriber\">
            <argument type=\"service\">
              <service class=\"TSantos\\SerializerBundle\\EventListener\\StopwatchListener\" public=\"false\">
                <tag name=\"tsantos_serializer.event_subscriber\"/>
                <argument type=\"service\">
                  <service class=\"Symfony\\Component\\Stopwatch\\Stopwatch\" public=\"false\">
                    <tag name=\"kernel.reset\" method=\"reset\"/>
                    <argument>true</argument>
                  </service>
                </argument>
              </service>
            </argument>
          </call>
        </service>
      </argument>
    </service>
    <service id=\"TSantos\\Serializer\\SerializerInterface\" alias=\"tsantos_serializer\" public=\"true\"/>
  </services>
</container>
", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/services_tsantos.xml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/xml/services_tsantos.xml");
    }
}
