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

/* vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Company.php */
class __TwigTemplate_f6ee4c2bce176864af4a749fc1464990c30bd6c79aeb119ffb73eb4e695512bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\zh_CN;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["companyPrefix"]) || array_key_exists("companyPrefix", $context) ? $context["companyPrefix"] : (function () { throw new RuntimeError('Variable "companyPrefix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$companyPrefix = array(
        '超艺', '和泰', '九方', '鑫博腾飞', '戴硕电子',
        '济南亿次元', '海创', '创联世纪', '凌云', '泰麒麟',
        '彩虹', '兰金电子', '晖来计算机', '天益', '恒聪百汇',
        '菊风公司', '惠派国际公司', '创汇', '思优', '时空盒数字',
        '易动力', '飞海科技', '华泰通安', '盟新', '商软冠联',
        '图龙信息', '易动力', '华远软件', '创亿', '时刻',
        '开发区世创', '明腾', '良诺', '天开', '毕博诚', '快讯',
        '凌颖信息', '黄石金承', '恩悌', '雨林木风计算机',
        '双敏电子', '维旺明', '网新恒天', '数字100', '飞利信',
        '立信电子', '联通时科', '中建创业', '新格林耐特',
        '新宇龙信息', '浙大万朋', 'MBP软件', '昂歌信息',
        '万迅电脑', '方正科技', '联软', '七喜', '南康', '银嘉',
        '巨奥', '佳禾', '国讯', '信诚致远', '浦华众城', '迪摩',
        '太极', '群英', '合联电子', '同兴万点', '襄樊地球村',
        '精芯', '艾提科信', '昊嘉', '鸿睿思博', '四通', '富罳',
        '商软冠联', '诺依曼软件', '东方峻景', '华成育卓', '趋势',
        '维涛', '通际名联'
    );

    protected static \$companySuffix = array('科技', '网络', '信息', '传媒');

    /**
     * @see blog.renren.com/share/223844062/2387611567
     * @var array
     */
    protected static \$catchPhrase = array(
        '燕舞，燕舞，一曲歌来一片情。',
        '康师傅方便面，好吃看得见。',
        '不要太潇洒！',
        '让一亿人先聪明起来。',
        '共创美的前程，共度美的人生。',
        '省优，部优，葛优？',
        '喝孔府宴酒，做天下文章。',
        '健康成就未来。',
        '牙好，胃口就好，身体倍儿棒，吃嘛嘛香。',
        '永远的绿色，永远的秦池。',
        '坐红旗车，走中国路。',
        '要想皮肤好，早晚用大宝。',
        '孔府家酒，叫人想家。',
        '补钙新观念，吸收是要害。',
        '喝汇源果汁，走健康之路。',
        '爱的就是你!',
        '一种可以世袭的古典浪漫',
        '实力创造价值',
        '爱生活，爱拉芳！',
        '人类失去联想，世界将会怎样？',
        '做女人挺好！',
        '世界在你眼中？',
        '今天你有否亿唐？',
        '只溶在口，不溶在手。',
        '三千烦恼丝，健康新开始。',
        '维维豆奶，欢乐开怀。',
        '我们的光彩来自你的风采。',
        '钻石恒久远，一颗永流传。',
        '放我的真心在你的手心。',
        '小身材，大味道。',
        '牛奶香浓，丝般感受。',
        '聆听并不代表沉默，有时安静也是一种力量。',
        '滴滴香浓，意犹未尽。',
        '水晶之恋，一生不变。',
        '中国移动通信，沟通从心开始！',
        '网易，网聚人的力量！',
        '科技以人为本，诺基亚',
        '我们一直在努力！',
        '阳光总在风雨后',
        '男人对西服的要求，就是女人对男人的要求',
        '晚报，不晚报',
        '原来生活可以更美的',
        '明天的明天，你还会送我“水晶之恋”吗？',
        '卫浴出出进进的快感',
        '有家就有联合利华',
        '减脂减肥，其实是一种生活态度',
        '人头马一开，好事自然来。',
        '假如五指一样长，怎能满足用户不同需求？',
        '新飞广告做的好，不好新飞冰箱好',
        '传奇品质，百年张裕',
        '李宁：把出色留给自己',
        '一旦拥有，别无选择',
        '科技让你更轻松',
        '情系中国结，联通四海心',
        '海尔，中国造',
        'SOHU：足迹生活每一天',
        '果冻我要喜之郎',
        '国宝大熊猫，心纯天自高',
        '世界因为不同',
        '放低偏见，你会有出色发现！',
        'Just',
        '创意似金，敬业如牛',
        '不要让男人一手把握',
        '如同情人的手',
        '金窝银窝，不如自己的安乐窝。',
        '没有什么大不了的',
        '时间因我存在',
        '只要有梦想',
        '南方周末',
        '时间改变一切',
        '地球人都知道了',
        '众里寻他千百度，想要几度就几度',
        '您身边的银行，可信赖的银行',
        '三叶钢琴：学琴的孩子不会变坏',
        '柯达：串起生活每一刻',
        '大众甲克虫汽车：想想还是小的好',
        '一直被模拟,从未被超越',
        '幸福生活',
        '朗讯的创造力科技的原动力',
        '事事因你而出色',
        '运动之美，世界共享',
        '鹤舞白沙',
        '想知道“清嘴”的味道吗？',
        '弹指一挥间，世界皆互联',
        '更多选择、更多欢笑',
        '方太，让家的感觉更好',
        '世上仅此一件，今生与你结缘！',
        '白里透红与众不同',
        '没有蛀牙-佳洁士',
        '有线的价值',
        '享受快乐科技',
        '四海一家的解决之道',
        '娃哈哈纯净水：爱你等于爱自己',
        '农民山泉：有点甜',
        '博大精深，西门子',
        '一切尽在把握',
        '声声百思特，遥遥两相知',
        '一呼天下应',
        '让我们做得更好！',
        '暖和亲情，金龙鱼的大家庭。',
        '自然最健康，绿色好心情',
        '支起网络世界',
        '立邦漆：处处放光彩！',
        'fm365:真情互动！',
        '庄重一生，吉祥一生。',
        '人人都为礼品愁，我送北极海狗油。',
        '假如说人生的离合是一场戏，那么百年的好合更是早有安排！',
        '一品黄山天高云淡',
        '上上下下的享受！',
        '我是、我行、我素',
        '让无力者有力，让悲观者前行',
        '金利来—-男人的世界！',
        '百衣百顺',
        '聪明何必绝顶，慧根长留',
        '水往高处流',
        '大石化小，小石化了！',
        '“闲”妻良母',
        '“口服”，“心服”！',
        '盛满青春的秘密！',
        '三十六计走为上',
        '为了她的节日，献上您纯金般的心！',
        '用我们的钓线，你可以在鱼儿发现你之前先找到它',
        '生活就是一场运动，喝下它。',
        '选择维聚阿尔，已经表明你心明眼亮。',
        '佳能，我们看得见你想表达什么。',
        '天天都是春天',
        '假如你不来，广告明星就是他',
        '享受黑夜中偷拍的快感！',
        '彩信发送动人一刻',
        '灵感点亮生活!',
        '聪明演绎，无处不在！',
        '事业我一定争取，对你我从未放弃!',
        '波导手机，手机中的战斗机',
        '鄂尔多斯羊绒衫暖和全世界',
        '洁婷245再大的动作也不要紧',
        '做光明的牛，产光明的奶',
        '假如你的汽车会游泳的话，请照直开，不必刹车。',
        '永远要让驾驶执照比你自己先到期。',
        '请记住，上帝并不是十全十美的，它给汽车预备了备件，而人没有。',
        '小别意酸酸，欢聚心甜甜。',
        '除钞票外，承印一切。',
        '更多欢乐，更多选择',
        '美由你做主',
        '由我天地宽',
        'Sun是太阳，Java是月亮。',
        '不断创新，因为专心',
        '趁早下『斑』，请勿『痘』留。',
        '请不要同刚刚走出本院的女人调情，她或许就是你的外祖母。',
        '创新就是生活',
        '有一个漂亮的地方，万科四季花城',
        '建筑无限生活',
        '臭名远扬，香飘万里',
        '尝尝欢笑，经常麦当劳',
        '深入成就深度',
        '出色湖南，红网了然！',
        '因为网络，地球如村！',
        '一种质感',
        '恒久期盼',
        '繁荣民族文化',
        '不信，死给你看！',
        '天生的，强生的',
        '雪津啤酒，真情的味道！',
        '听世界，打天下',
        '雅芳比女人更了解女人',
        'Sun是太阳，Java是月亮。',
        '中国网通',
        '无线你的无限',
        '家有三洋，冬暖夏凉',
        '倾诉冬日暖语',
        '谁让我心动？',
        '灵活，让篮球场不再是一个平面',
        '别吻我，我怕修。',
        '一呼四应！',
        '无所不包！',
        '当之无愧',
        '以帽取人！',
        '一毛不拔！',
        '自讨苦吃！',
        '成功与科技共辉映',
        '没有最',
    );

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefix);
    }

    public static function companySuffix()
    {
        return parent::companySuffix() . '有限公司';
    }

    public function catchPhrase()
    {
        return static::randomElement(static::\$catchPhrase);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\zh_CN;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{companyPrefix}}{{companySuffix}}'
    );

    protected static \$companyPrefix = array(
        '超艺', '和泰', '九方', '鑫博腾飞', '戴硕电子',
        '济南亿次元', '海创', '创联世纪', '凌云', '泰麒麟',
        '彩虹', '兰金电子', '晖来计算机', '天益', '恒聪百汇',
        '菊风公司', '惠派国际公司', '创汇', '思优', '时空盒数字',
        '易动力', '飞海科技', '华泰通安', '盟新', '商软冠联',
        '图龙信息', '易动力', '华远软件', '创亿', '时刻',
        '开发区世创', '明腾', '良诺', '天开', '毕博诚', '快讯',
        '凌颖信息', '黄石金承', '恩悌', '雨林木风计算机',
        '双敏电子', '维旺明', '网新恒天', '数字100', '飞利信',
        '立信电子', '联通时科', '中建创业', '新格林耐特',
        '新宇龙信息', '浙大万朋', 'MBP软件', '昂歌信息',
        '万迅电脑', '方正科技', '联软', '七喜', '南康', '银嘉',
        '巨奥', '佳禾', '国讯', '信诚致远', '浦华众城', '迪摩',
        '太极', '群英', '合联电子', '同兴万点', '襄樊地球村',
        '精芯', '艾提科信', '昊嘉', '鸿睿思博', '四通', '富罳',
        '商软冠联', '诺依曼软件', '东方峻景', '华成育卓', '趋势',
        '维涛', '通际名联'
    );

    protected static \$companySuffix = array('科技', '网络', '信息', '传媒');

    /**
     * @see blog.renren.com/share/223844062/2387611567
     * @var array
     */
    protected static \$catchPhrase = array(
        '燕舞，燕舞，一曲歌来一片情。',
        '康师傅方便面，好吃看得见。',
        '不要太潇洒！',
        '让一亿人先聪明起来。',
        '共创美的前程，共度美的人生。',
        '省优，部优，葛优？',
        '喝孔府宴酒，做天下文章。',
        '健康成就未来。',
        '牙好，胃口就好，身体倍儿棒，吃嘛嘛香。',
        '永远的绿色，永远的秦池。',
        '坐红旗车，走中国路。',
        '要想皮肤好，早晚用大宝。',
        '孔府家酒，叫人想家。',
        '补钙新观念，吸收是要害。',
        '喝汇源果汁，走健康之路。',
        '爱的就是你!',
        '一种可以世袭的古典浪漫',
        '实力创造价值',
        '爱生活，爱拉芳！',
        '人类失去联想，世界将会怎样？',
        '做女人挺好！',
        '世界在你眼中？',
        '今天你有否亿唐？',
        '只溶在口，不溶在手。',
        '三千烦恼丝，健康新开始。',
        '维维豆奶，欢乐开怀。',
        '我们的光彩来自你的风采。',
        '钻石恒久远，一颗永流传。',
        '放我的真心在你的手心。',
        '小身材，大味道。',
        '牛奶香浓，丝般感受。',
        '聆听并不代表沉默，有时安静也是一种力量。',
        '滴滴香浓，意犹未尽。',
        '水晶之恋，一生不变。',
        '中国移动通信，沟通从心开始！',
        '网易，网聚人的力量！',
        '科技以人为本，诺基亚',
        '我们一直在努力！',
        '阳光总在风雨后',
        '男人对西服的要求，就是女人对男人的要求',
        '晚报，不晚报',
        '原来生活可以更美的',
        '明天的明天，你还会送我“水晶之恋”吗？',
        '卫浴出出进进的快感',
        '有家就有联合利华',
        '减脂减肥，其实是一种生活态度',
        '人头马一开，好事自然来。',
        '假如五指一样长，怎能满足用户不同需求？',
        '新飞广告做的好，不好新飞冰箱好',
        '传奇品质，百年张裕',
        '李宁：把出色留给自己',
        '一旦拥有，别无选择',
        '科技让你更轻松',
        '情系中国结，联通四海心',
        '海尔，中国造',
        'SOHU：足迹生活每一天',
        '果冻我要喜之郎',
        '国宝大熊猫，心纯天自高',
        '世界因为不同',
        '放低偏见，你会有出色发现！',
        'Just',
        '创意似金，敬业如牛',
        '不要让男人一手把握',
        '如同情人的手',
        '金窝银窝，不如自己的安乐窝。',
        '没有什么大不了的',
        '时间因我存在',
        '只要有梦想',
        '南方周末',
        '时间改变一切',
        '地球人都知道了',
        '众里寻他千百度，想要几度就几度',
        '您身边的银行，可信赖的银行',
        '三叶钢琴：学琴的孩子不会变坏',
        '柯达：串起生活每一刻',
        '大众甲克虫汽车：想想还是小的好',
        '一直被模拟,从未被超越',
        '幸福生活',
        '朗讯的创造力科技的原动力',
        '事事因你而出色',
        '运动之美，世界共享',
        '鹤舞白沙',
        '想知道“清嘴”的味道吗？',
        '弹指一挥间，世界皆互联',
        '更多选择、更多欢笑',
        '方太，让家的感觉更好',
        '世上仅此一件，今生与你结缘！',
        '白里透红与众不同',
        '没有蛀牙-佳洁士',
        '有线的价值',
        '享受快乐科技',
        '四海一家的解决之道',
        '娃哈哈纯净水：爱你等于爱自己',
        '农民山泉：有点甜',
        '博大精深，西门子',
        '一切尽在把握',
        '声声百思特，遥遥两相知',
        '一呼天下应',
        '让我们做得更好！',
        '暖和亲情，金龙鱼的大家庭。',
        '自然最健康，绿色好心情',
        '支起网络世界',
        '立邦漆：处处放光彩！',
        'fm365:真情互动！',
        '庄重一生，吉祥一生。',
        '人人都为礼品愁，我送北极海狗油。',
        '假如说人生的离合是一场戏，那么百年的好合更是早有安排！',
        '一品黄山天高云淡',
        '上上下下的享受！',
        '我是、我行、我素',
        '让无力者有力，让悲观者前行',
        '金利来—-男人的世界！',
        '百衣百顺',
        '聪明何必绝顶，慧根长留',
        '水往高处流',
        '大石化小，小石化了！',
        '“闲”妻良母',
        '“口服”，“心服”！',
        '盛满青春的秘密！',
        '三十六计走为上',
        '为了她的节日，献上您纯金般的心！',
        '用我们的钓线，你可以在鱼儿发现你之前先找到它',
        '生活就是一场运动，喝下它。',
        '选择维聚阿尔，已经表明你心明眼亮。',
        '佳能，我们看得见你想表达什么。',
        '天天都是春天',
        '假如你不来，广告明星就是他',
        '享受黑夜中偷拍的快感！',
        '彩信发送动人一刻',
        '灵感点亮生活!',
        '聪明演绎，无处不在！',
        '事业我一定争取，对你我从未放弃!',
        '波导手机，手机中的战斗机',
        '鄂尔多斯羊绒衫暖和全世界',
        '洁婷245再大的动作也不要紧',
        '做光明的牛，产光明的奶',
        '假如你的汽车会游泳的话，请照直开，不必刹车。',
        '永远要让驾驶执照比你自己先到期。',
        '请记住，上帝并不是十全十美的，它给汽车预备了备件，而人没有。',
        '小别意酸酸，欢聚心甜甜。',
        '除钞票外，承印一切。',
        '更多欢乐，更多选择',
        '美由你做主',
        '由我天地宽',
        'Sun是太阳，Java是月亮。',
        '不断创新，因为专心',
        '趁早下『斑』，请勿『痘』留。',
        '请不要同刚刚走出本院的女人调情，她或许就是你的外祖母。',
        '创新就是生活',
        '有一个漂亮的地方，万科四季花城',
        '建筑无限生活',
        '臭名远扬，香飘万里',
        '尝尝欢笑，经常麦当劳',
        '深入成就深度',
        '出色湖南，红网了然！',
        '因为网络，地球如村！',
        '一种质感',
        '恒久期盼',
        '繁荣民族文化',
        '不信，死给你看！',
        '天生的，强生的',
        '雪津啤酒，真情的味道！',
        '听世界，打天下',
        '雅芳比女人更了解女人',
        'Sun是太阳，Java是月亮。',
        '中国网通',
        '无线你的无限',
        '家有三洋，冬暖夏凉',
        '倾诉冬日暖语',
        '谁让我心动？',
        '灵活，让篮球场不再是一个平面',
        '别吻我，我怕修。',
        '一呼四应！',
        '无所不包！',
        '当之无愧',
        '以帽取人！',
        '一毛不拔！',
        '自讨苦吃！',
        '成功与科技共辉映',
        '没有最',
    );

    public static function companyPrefix()
    {
        return static::randomElement(static::\$companyPrefix);
    }

    public static function companySuffix()
    {
        return parent::companySuffix() . '有限公司';
    }

    public function catchPhrase()
    {
        return static::randomElement(static::\$catchPhrase);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Company.php");
    }
}
