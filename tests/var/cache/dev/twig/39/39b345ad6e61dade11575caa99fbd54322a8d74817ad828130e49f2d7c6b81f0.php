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

/* vendor/symfony/intl/Resources/data/scripts/or.json */
class __TwigTemplate_b9b27cbc60fe83e12f4556dc22ff3f6017ff164edbd2cd8790b2cdeebfd5164d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/or.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/or.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"ଆରବିକ୍\",
        \"Armi\": \"ଇମ୍ପେରିଆଲ୍ ଆରମିକ୍\",
        \"Armn\": \"ଆର୍ମେନୀୟ\",
        \"Avst\": \"ଆବେସ୍ଥାନ୍\",
        \"Bali\": \"ବାଲିନୀଜ୍\",
        \"Batk\": \"ବାଟାକ୍\",
        \"Beng\": \"ବଙ୍ଗାଳୀ\",
        \"Blis\": \"ବ୍ଲିସିମ୍ବଲସ୍\",
        \"Bopo\": \"ବୋପୋମୋଫୋ\",
        \"Brah\": \"ବ୍ରାହ୍ମୀ\",
        \"Brai\": \"ବ୍ରେଲ୍\",
        \"Bugi\": \"ବୁଗାନୀଜ୍\",
        \"Buhd\": \"ବୁହିଦ୍\",
        \"Cakm\": \"ଚକମା\",
        \"Cans\": \"ୟୁନିଫାଏଡ୍ କାନାଡିଆନ୍ ଆବ୍ରୋଜିନାଲ୍ ସିଲାବିକସ୍\",
        \"Cari\": \"କୈରନ୍\",
        \"Cham\": \"ଛମ୍\",
        \"Cher\": \"ଚିରୁକୀ\",
        \"Cirt\": \"ସିର୍ଥ\",
        \"Copt\": \"କପଟିକ୍\",
        \"Cprt\": \"ସିପ୍ରଅଟ୍\",
        \"Cyrl\": \"ସିରିଲିକ୍\",
        \"Cyrs\": \"ଓଲ୍ଡ ଚର୍ଚ୍ଚ ସାଲଭୋନିକ୍ ସିରିଲିକ୍\",
        \"Deva\": \"ଦେବନଗରୀ\",
        \"Dsrt\": \"ଡେସର୍ଟ\",
        \"Egyd\": \"ଇଜିପ୍ଟିଆନ୍ ଡେମୋଟିକ୍\",
        \"Egyh\": \"ଇଜିପ୍ଟିଆନ୍ ହାଇଅରଟିକ୍\",
        \"Egyp\": \"ଇଜିପ୍ଟିଆନ୍ ହାଅରଗ୍ଲିପସ୍\",
        \"Ethi\": \"ଇଥିଓପିକ୍‌\",
        \"Geok\": \"ଜର୍ଜିଆନ୍ ଖୁଟସୁରୀ\",
        \"Geor\": \"ଜର୍ଜିୟ\",
        \"Glag\": \"ଗ୍ଲାଗ୍ଲୋଟିକ୍\",
        \"Goth\": \"ଗୋଥିକ୍\",
        \"Grek\": \"ଗ୍ରୀକ୍\",
        \"Gujr\": \"ଗୁଜୁରାଟୀ\",
        \"Guru\": \"ଗୁରମୁଖୀ\",
        \"Hanb\": \"ବୋପୋମୋଫୋ ସହିତ ହାନ୍‌\",
        \"Hang\": \"ହାଙ୍ଗୁଲ୍\",
        \"Hani\": \"ହାନ୍\",
        \"Hano\": \"ହାନୁନ୍\",
        \"Hans\": \"ସରଳୀକୃତ\",
        \"Hant\": \"ପାରମ୍ପରିକ\",
        \"Hebr\": \"ହିବୃ\",
        \"Hira\": \"ହିରାଗାନା\",
        \"Hmng\": \"ପାହୋ ହୋଙ୍ଗ\",
        \"Hrkt\": \"ଜାପାନୀ ସିଲାବରିଜ୍‌\",
        \"Hung\": \"ପୁରୁଣା ହଙ୍ଗେରିଆନ୍\",
        \"Inds\": \"ସିନ୍ଧୁ\",
        \"Ital\": \"ପୁରୁଣା ଇଟାଲୀ\",
        \"Jamo\": \"ଜାମୋ\",
        \"Java\": \"ଜାଭାନୀଜ୍\",
        \"Jpan\": \"ଜାପାନୀଜ୍\",
        \"Kali\": \"କାୟାହା ଲୀ\",
        \"Kana\": \"କାତାକାନା\",
        \"Khar\": \"ଖାରୋସ୍ଥି\",
        \"Khmr\": \"ଖମେର୍\",
        \"Knda\": \"କନ୍ନଡ଼\",
        \"Kore\": \"କୋରିଆନ୍\",
        \"Kthi\": \"କୈଥି\",
        \"Lana\": \"ଲାନା\",
        \"Laoo\": \"ଲାଓ\",
        \"Latf\": \"ଫ୍ରାକଥୁର୍ ଲାଟିନ୍\",
        \"Latg\": \"ଗାଏଲିକ୍ ଲାଟିନ୍\",
        \"Latn\": \"ଲାଟିନ୍\",
        \"Lepc\": \"ଲେପଚା\",
        \"Limb\": \"ଲିମ୍ବୁ\",
        \"Lina\": \"ଲିନିୟର୍\",
        \"Linb\": \"ଲିନିୟର୍ ବି\",
        \"Lyci\": \"ଲିଶିୟନ୍\",
        \"Lydi\": \"ଲିଡିୟନ୍\",
        \"Mand\": \"ମାନଡେନ୍\",
        \"Mani\": \"ମନଶୀନ୍\",
        \"Maya\": \"ମୟାନ୍ ହାୟରଲଜିକସ୍\",
        \"Mero\": \"ମେରୋଇଟିକ୍\",
        \"Mlym\": \"ମାଲାୟଲମ୍\",
        \"Mong\": \"ମଙ୍ଗୋଲିଆନ୍\",
        \"Moon\": \"ଚନ୍ଦ୍ର\",
        \"Mtei\": \"ମାଏତି ମାୟେକ୍\",
        \"Mymr\": \"ମ୍ୟାନମାର୍\",
        \"Nkoo\": \"ଏନ୍ କୋ\",
        \"Ogam\": \"ଓଘାମା\",
        \"Olck\": \"ଓଲ୍ ଚିକି\",
        \"Orkh\": \"ଓରୋଖନ୍\",
        \"Orya\": \"ଓଡ଼ିଆ\",
        \"Osma\": \"ଓସୋମାନିୟା\",
        \"Perm\": \"ଓଲ୍ଡ ପରମିକ୍\",
        \"Phag\": \"ଫାଗସ୍-ପା\",
        \"Phli\": \"ଇନସ୍କ୍ରୀପସାନଲ୍ ପାହାଲାୱୀ\",
        \"Phlp\": \"ସ୍ଲାଟର୍ ପାହାଲାୱୀ\",
        \"Phlv\": \"ବୁକ୍ ପାହାଲାୱୀ\",
        \"Phnx\": \"ଫେନୋସିଆନ୍\",
        \"Plrd\": \"ପୋଲାର୍ଡ ଫୋନେଟିକ୍\",
        \"Prti\": \"ଇନସ୍କ୍ରୀପସାନଲ୍ ପାର୍ଥିଆନ୍\",
        \"Rjng\": \"ରେଜାଙ୍ଗ\",
        \"Roro\": \"ରୋଙ୍ଗୋରୋଙ୍ଗୋ\",
        \"Runr\": \"ରନିକ୍\",
        \"Samr\": \"ସମୌରିଟନ୍\",
        \"Sara\": \"ସାରାତି\",
        \"Saur\": \"ସୌରାଷ୍ଟ୍ର\",
        \"Sgnw\": \"ସାଙ୍କେତିକ ଲିଖ\",
        \"Shaw\": \"ସାବିୟାନ୍\",
        \"Sinh\": \"ସିଂହଳ\",
        \"Sund\": \"ସୁଦାନୀଜ୍\",
        \"Sylo\": \"ସୀଲିତୋ ନଗରୀ\",
        \"Syrc\": \"ସିରିୟାକ୍\",
        \"Syre\": \"ଏଷ୍ଟ୍ରାଙ୍ଗେଲୋ ସିରିକ୍\",
        \"Syrj\": \"ୱେଷ୍ଟର୍ନ ସିରିକ୍\",
        \"Syrn\": \"ଇଷ୍ଟର୍ନ ସିରିକ୍\",
        \"Tagb\": \"ତଗବାନ୍ୱା\",
        \"Tale\": \"ତାଇ ଲେ\",
        \"Talu\": \"ନୂତନ ତାଇ ଲୁଏ\",
        \"Taml\": \"ତାମିଲ୍\",
        \"Tavt\": \"ତାଇ ଭିଏତ୍\",
        \"Telu\": \"ତେଲୁଗୁ\",
        \"Teng\": \"ତେଙ୍ଗୱାର୍\",
        \"Tfng\": \"ତିଫିଙ୍ଘା\",
        \"Tglg\": \"ଟାଗାଲୋଗ୍\",
        \"Thaa\": \"ଥାନା\",
        \"Thai\": \"ଥାଇ\",
        \"Tibt\": \"ତିବେତାନ୍\",
        \"Ugar\": \"ୟୁଗାରିଟିକ୍\",
        \"Vaii\": \"ୱାଇ\",
        \"Visp\": \"ଭିଜିବଲ୍ ସ୍ପିଚ୍\",
        \"Xpeo\": \"ପୁରୁଣା ଫରାସୀ\",
        \"Xsux\": \"ସୁମେରୋ-ଆକ୍କାଡିଆନ୍ ସୁନିଫର୍ମ\",
        \"Yiii\": \"ୟୀ\",
        \"Zinh\": \"ବଂଶଗତ\",
        \"Zmth\": \"ଗାଣିତିକ ନୋଟେସନ୍\",
        \"Zsye\": \"ଇମୋଜି\",
        \"Zsym\": \"ସଙ୍କେତଗୁଡ଼ିକ\",
        \"Zxxx\": \"ଅଲିଖିତ\",
        \"Zyyy\": \"ସାଧାରଣ\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/or.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"Arab\": \"ଆରବିକ୍\",
        \"Armi\": \"ଇମ୍ପେରିଆଲ୍ ଆରମିକ୍\",
        \"Armn\": \"ଆର୍ମେନୀୟ\",
        \"Avst\": \"ଆବେସ୍ଥାନ୍\",
        \"Bali\": \"ବାଲିନୀଜ୍\",
        \"Batk\": \"ବାଟାକ୍\",
        \"Beng\": \"ବଙ୍ଗାଳୀ\",
        \"Blis\": \"ବ୍ଲିସିମ୍ବଲସ୍\",
        \"Bopo\": \"ବୋପୋମୋଫୋ\",
        \"Brah\": \"ବ୍ରାହ୍ମୀ\",
        \"Brai\": \"ବ୍ରେଲ୍\",
        \"Bugi\": \"ବୁଗାନୀଜ୍\",
        \"Buhd\": \"ବୁହିଦ୍\",
        \"Cakm\": \"ଚକମା\",
        \"Cans\": \"ୟୁନିଫାଏଡ୍ କାନାଡିଆନ୍ ଆବ୍ରୋଜିନାଲ୍ ସିଲାବିକସ୍\",
        \"Cari\": \"କୈରନ୍\",
        \"Cham\": \"ଛମ୍\",
        \"Cher\": \"ଚିରୁକୀ\",
        \"Cirt\": \"ସିର୍ଥ\",
        \"Copt\": \"କପଟିକ୍\",
        \"Cprt\": \"ସିପ୍ରଅଟ୍\",
        \"Cyrl\": \"ସିରିଲିକ୍\",
        \"Cyrs\": \"ଓଲ୍ଡ ଚର୍ଚ୍ଚ ସାଲଭୋନିକ୍ ସିରିଲିକ୍\",
        \"Deva\": \"ଦେବନଗରୀ\",
        \"Dsrt\": \"ଡେସର୍ଟ\",
        \"Egyd\": \"ଇଜିପ୍ଟିଆନ୍ ଡେମୋଟିକ୍\",
        \"Egyh\": \"ଇଜିପ୍ଟିଆନ୍ ହାଇଅରଟିକ୍\",
        \"Egyp\": \"ଇଜିପ୍ଟିଆନ୍ ହାଅରଗ୍ଲିପସ୍\",
        \"Ethi\": \"ଇଥିଓପିକ୍‌\",
        \"Geok\": \"ଜର୍ଜିଆନ୍ ଖୁଟସୁରୀ\",
        \"Geor\": \"ଜର୍ଜିୟ\",
        \"Glag\": \"ଗ୍ଲାଗ୍ଲୋଟିକ୍\",
        \"Goth\": \"ଗୋଥିକ୍\",
        \"Grek\": \"ଗ୍ରୀକ୍\",
        \"Gujr\": \"ଗୁଜୁରାଟୀ\",
        \"Guru\": \"ଗୁରମୁଖୀ\",
        \"Hanb\": \"ବୋପୋମୋଫୋ ସହିତ ହାନ୍‌\",
        \"Hang\": \"ହାଙ୍ଗୁଲ୍\",
        \"Hani\": \"ହାନ୍\",
        \"Hano\": \"ହାନୁନ୍\",
        \"Hans\": \"ସରଳୀକୃତ\",
        \"Hant\": \"ପାରମ୍ପରିକ\",
        \"Hebr\": \"ହିବୃ\",
        \"Hira\": \"ହିରାଗାନା\",
        \"Hmng\": \"ପାହୋ ହୋଙ୍ଗ\",
        \"Hrkt\": \"ଜାପାନୀ ସିଲାବରିଜ୍‌\",
        \"Hung\": \"ପୁରୁଣା ହଙ୍ଗେରିଆନ୍\",
        \"Inds\": \"ସିନ୍ଧୁ\",
        \"Ital\": \"ପୁରୁଣା ଇଟାଲୀ\",
        \"Jamo\": \"ଜାମୋ\",
        \"Java\": \"ଜାଭାନୀଜ୍\",
        \"Jpan\": \"ଜାପାନୀଜ୍\",
        \"Kali\": \"କାୟାହା ଲୀ\",
        \"Kana\": \"କାତାକାନା\",
        \"Khar\": \"ଖାରୋସ୍ଥି\",
        \"Khmr\": \"ଖମେର୍\",
        \"Knda\": \"କନ୍ନଡ଼\",
        \"Kore\": \"କୋରିଆନ୍\",
        \"Kthi\": \"କୈଥି\",
        \"Lana\": \"ଲାନା\",
        \"Laoo\": \"ଲାଓ\",
        \"Latf\": \"ଫ୍ରାକଥୁର୍ ଲାଟିନ୍\",
        \"Latg\": \"ଗାଏଲିକ୍ ଲାଟିନ୍\",
        \"Latn\": \"ଲାଟିନ୍\",
        \"Lepc\": \"ଲେପଚା\",
        \"Limb\": \"ଲିମ୍ବୁ\",
        \"Lina\": \"ଲିନିୟର୍\",
        \"Linb\": \"ଲିନିୟର୍ ବି\",
        \"Lyci\": \"ଲିଶିୟନ୍\",
        \"Lydi\": \"ଲିଡିୟନ୍\",
        \"Mand\": \"ମାନଡେନ୍\",
        \"Mani\": \"ମନଶୀନ୍\",
        \"Maya\": \"ମୟାନ୍ ହାୟରଲଜିକସ୍\",
        \"Mero\": \"ମେରୋଇଟିକ୍\",
        \"Mlym\": \"ମାଲାୟଲମ୍\",
        \"Mong\": \"ମଙ୍ଗୋଲିଆନ୍\",
        \"Moon\": \"ଚନ୍ଦ୍ର\",
        \"Mtei\": \"ମାଏତି ମାୟେକ୍\",
        \"Mymr\": \"ମ୍ୟାନମାର୍\",
        \"Nkoo\": \"ଏନ୍ କୋ\",
        \"Ogam\": \"ଓଘାମା\",
        \"Olck\": \"ଓଲ୍ ଚିକି\",
        \"Orkh\": \"ଓରୋଖନ୍\",
        \"Orya\": \"ଓଡ଼ିଆ\",
        \"Osma\": \"ଓସୋମାନିୟା\",
        \"Perm\": \"ଓଲ୍ଡ ପରମିକ୍\",
        \"Phag\": \"ଫାଗସ୍-ପା\",
        \"Phli\": \"ଇନସ୍କ୍ରୀପସାନଲ୍ ପାହାଲାୱୀ\",
        \"Phlp\": \"ସ୍ଲାଟର୍ ପାହାଲାୱୀ\",
        \"Phlv\": \"ବୁକ୍ ପାହାଲାୱୀ\",
        \"Phnx\": \"ଫେନୋସିଆନ୍\",
        \"Plrd\": \"ପୋଲାର୍ଡ ଫୋନେଟିକ୍\",
        \"Prti\": \"ଇନସ୍କ୍ରୀପସାନଲ୍ ପାର୍ଥିଆନ୍\",
        \"Rjng\": \"ରେଜାଙ୍ଗ\",
        \"Roro\": \"ରୋଙ୍ଗୋରୋଙ୍ଗୋ\",
        \"Runr\": \"ରନିକ୍\",
        \"Samr\": \"ସମୌରିଟନ୍\",
        \"Sara\": \"ସାରାତି\",
        \"Saur\": \"ସୌରାଷ୍ଟ୍ର\",
        \"Sgnw\": \"ସାଙ୍କେତିକ ଲିଖ\",
        \"Shaw\": \"ସାବିୟାନ୍\",
        \"Sinh\": \"ସିଂହଳ\",
        \"Sund\": \"ସୁଦାନୀଜ୍\",
        \"Sylo\": \"ସୀଲିତୋ ନଗରୀ\",
        \"Syrc\": \"ସିରିୟାକ୍\",
        \"Syre\": \"ଏଷ୍ଟ୍ରାଙ୍ଗେଲୋ ସିରିକ୍\",
        \"Syrj\": \"ୱେଷ୍ଟର୍ନ ସିରିକ୍\",
        \"Syrn\": \"ଇଷ୍ଟର୍ନ ସିରିକ୍\",
        \"Tagb\": \"ତଗବାନ୍ୱା\",
        \"Tale\": \"ତାଇ ଲେ\",
        \"Talu\": \"ନୂତନ ତାଇ ଲୁଏ\",
        \"Taml\": \"ତାମିଲ୍\",
        \"Tavt\": \"ତାଇ ଭିଏତ୍\",
        \"Telu\": \"ତେଲୁଗୁ\",
        \"Teng\": \"ତେଙ୍ଗୱାର୍\",
        \"Tfng\": \"ତିଫିଙ୍ଘା\",
        \"Tglg\": \"ଟାଗାଲୋଗ୍\",
        \"Thaa\": \"ଥାନା\",
        \"Thai\": \"ଥାଇ\",
        \"Tibt\": \"ତିବେତାନ୍\",
        \"Ugar\": \"ୟୁଗାରିଟିକ୍\",
        \"Vaii\": \"ୱାଇ\",
        \"Visp\": \"ଭିଜିବଲ୍ ସ୍ପିଚ୍\",
        \"Xpeo\": \"ପୁରୁଣା ଫରାସୀ\",
        \"Xsux\": \"ସୁମେରୋ-ଆକ୍କାଡିଆନ୍ ସୁନିଫର୍ମ\",
        \"Yiii\": \"ୟୀ\",
        \"Zinh\": \"ବଂଶଗତ\",
        \"Zmth\": \"ଗାଣିତିକ ନୋଟେସନ୍\",
        \"Zsye\": \"ଇମୋଜି\",
        \"Zsym\": \"ସଙ୍କେତଗୁଡ଼ିକ\",
        \"Zxxx\": \"ଅଲିଖିତ\",
        \"Zyyy\": \"ସାଧାରଣ\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/or.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/or.json");
    }
}
