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

/* easycorp/easyadmin-bundle/src/Resources/public/field-slug.7eed3cdc.js */
class __TwigTemplate_888cd08cf054eaac850dca41fcf540ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-slug.7eed3cdc.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-slug.7eed3cdc.js"));

        // line 1
        echo "(()=>{var e={1304:function(e){var t;t=function(){var e=JSON.parse('{\"\$\":\"dollar\",\"%\":\"percent\",\"&\":\"and\",\"<\":\"less\",\">\":\"greater\",\"|\":\"or\",\"¢\":\"cent\",\"£\":\"pound\",\"¤\":\"currency\",\"¥\":\"yen\",\"©\":\"(c)\",\"ª\":\"a\",\"®\":\"(r)\",\"º\":\"o\",\"À\":\"A\",\"Á\":\"A\",\"Â\":\"A\",\"Ã\":\"A\",\"Ä\":\"A\",\"Å\":\"A\",\"Æ\":\"AE\",\"Ç\":\"C\",\"È\":\"E\",\"É\":\"E\",\"Ê\":\"E\",\"Ë\":\"E\",\"Ì\":\"I\",\"Í\":\"I\",\"Î\":\"I\",\"Ï\":\"I\",\"Ð\":\"D\",\"Ñ\":\"N\",\"Ò\":\"O\",\"Ó\":\"O\",\"Ô\":\"O\",\"Õ\":\"O\",\"Ö\":\"O\",\"Ø\":\"O\",\"Ù\":\"U\",\"Ú\":\"U\",\"Û\":\"U\",\"Ü\":\"U\",\"Ý\":\"Y\",\"Þ\":\"TH\",\"ß\":\"ss\",\"à\":\"a\",\"á\":\"a\",\"â\":\"a\",\"ã\":\"a\",\"ä\":\"a\",\"å\":\"a\",\"æ\":\"ae\",\"ç\":\"c\",\"è\":\"e\",\"é\":\"e\",\"ê\":\"e\",\"ë\":\"e\",\"ì\":\"i\",\"í\":\"i\",\"î\":\"i\",\"ï\":\"i\",\"ð\":\"d\",\"ñ\":\"n\",\"ò\":\"o\",\"ó\":\"o\",\"ô\":\"o\",\"õ\":\"o\",\"ö\":\"o\",\"ø\":\"o\",\"ù\":\"u\",\"ú\":\"u\",\"û\":\"u\",\"ü\":\"u\",\"ý\":\"y\",\"þ\":\"th\",\"ÿ\":\"y\",\"Ā\":\"A\",\"ā\":\"a\",\"Ă\":\"A\",\"ă\":\"a\",\"Ą\":\"A\",\"ą\":\"a\",\"Ć\":\"C\",\"ć\":\"c\",\"Č\":\"C\",\"č\":\"c\",\"Ď\":\"D\",\"ď\":\"d\",\"Đ\":\"DJ\",\"đ\":\"dj\",\"Ē\":\"E\",\"ē\":\"e\",\"Ė\":\"E\",\"ė\":\"e\",\"Ę\":\"e\",\"ę\":\"e\",\"Ě\":\"E\",\"ě\":\"e\",\"Ğ\":\"G\",\"ğ\":\"g\",\"Ģ\":\"G\",\"ģ\":\"g\",\"Ĩ\":\"I\",\"ĩ\":\"i\",\"Ī\":\"i\",\"ī\":\"i\",\"Į\":\"I\",\"į\":\"i\",\"İ\":\"I\",\"ı\":\"i\",\"Ķ\":\"k\",\"ķ\":\"k\",\"Ļ\":\"L\",\"ļ\":\"l\",\"Ľ\":\"L\",\"ľ\":\"l\",\"Ł\":\"L\",\"ł\":\"l\",\"Ń\":\"N\",\"ń\":\"n\",\"Ņ\":\"N\",\"ņ\":\"n\",\"Ň\":\"N\",\"ň\":\"n\",\"Ō\":\"O\",\"ō\":\"o\",\"Ő\":\"O\",\"ő\":\"o\",\"Œ\":\"OE\",\"œ\":\"oe\",\"Ŕ\":\"R\",\"ŕ\":\"r\",\"Ř\":\"R\",\"ř\":\"r\",\"Ś\":\"S\",\"ś\":\"s\",\"Ş\":\"S\",\"ş\":\"s\",\"Š\":\"S\",\"š\":\"s\",\"Ţ\":\"T\",\"ţ\":\"t\",\"Ť\":\"T\",\"ť\":\"t\",\"Ũ\":\"U\",\"ũ\":\"u\",\"Ū\":\"u\",\"ū\":\"u\",\"Ů\":\"U\",\"ů\":\"u\",\"Ű\":\"U\",\"ű\":\"u\",\"Ų\":\"U\",\"ų\":\"u\",\"Ŵ\":\"W\",\"ŵ\":\"w\",\"Ŷ\":\"Y\",\"ŷ\":\"y\",\"Ÿ\":\"Y\",\"Ź\":\"Z\",\"ź\":\"z\",\"Ż\":\"Z\",\"ż\":\"z\",\"Ž\":\"Z\",\"ž\":\"z\",\"Ə\":\"E\",\"ƒ\":\"f\",\"Ơ\":\"O\",\"ơ\":\"o\",\"Ư\":\"U\",\"ư\":\"u\",\"ǈ\":\"LJ\",\"ǉ\":\"lj\",\"ǋ\":\"NJ\",\"ǌ\":\"nj\",\"Ș\":\"S\",\"ș\":\"s\",\"Ț\":\"T\",\"ț\":\"t\",\"ə\":\"e\",\"˚\":\"o\",\"Ά\":\"A\",\"Έ\":\"E\",\"Ή\":\"H\",\"Ί\":\"I\",\"Ό\":\"O\",\"Ύ\":\"Y\",\"Ώ\":\"W\",\"ΐ\":\"i\",\"Α\":\"A\",\"Β\":\"B\",\"Γ\":\"G\",\"Δ\":\"D\",\"Ε\":\"E\",\"Ζ\":\"Z\",\"Η\":\"H\",\"Θ\":\"8\",\"Ι\":\"I\",\"Κ\":\"K\",\"Λ\":\"L\",\"Μ\":\"M\",\"Ν\":\"N\",\"Ξ\":\"3\",\"Ο\":\"O\",\"Π\":\"P\",\"Ρ\":\"R\",\"Σ\":\"S\",\"Τ\":\"T\",\"Υ\":\"Y\",\"Φ\":\"F\",\"Χ\":\"X\",\"Ψ\":\"PS\",\"Ω\":\"W\",\"Ϊ\":\"I\",\"Ϋ\":\"Y\",\"ά\":\"a\",\"έ\":\"e\",\"ή\":\"h\",\"ί\":\"i\",\"ΰ\":\"y\",\"α\":\"a\",\"β\":\"b\",\"γ\":\"g\",\"δ\":\"d\",\"ε\":\"e\",\"ζ\":\"z\",\"η\":\"h\",\"θ\":\"8\",\"ι\":\"i\",\"κ\":\"k\",\"λ\":\"l\",\"μ\":\"m\",\"ν\":\"n\",\"ξ\":\"3\",\"ο\":\"o\",\"π\":\"p\",\"ρ\":\"r\",\"ς\":\"s\",\"σ\":\"s\",\"τ\":\"t\",\"υ\":\"y\",\"φ\":\"f\",\"χ\":\"x\",\"ψ\":\"ps\",\"ω\":\"w\",\"ϊ\":\"i\",\"ϋ\":\"y\",\"ό\":\"o\",\"ύ\":\"y\",\"ώ\":\"w\",\"Ё\":\"Yo\",\"Ђ\":\"DJ\",\"Є\":\"Ye\",\"І\":\"I\",\"Ї\":\"Yi\",\"Ј\":\"J\",\"Љ\":\"LJ\",\"Њ\":\"NJ\",\"Ћ\":\"C\",\"Џ\":\"DZ\",\"А\":\"A\",\"Б\":\"B\",\"В\":\"V\",\"Г\":\"G\",\"Д\":\"D\",\"Е\":\"E\",\"Ж\":\"Zh\",\"З\":\"Z\",\"И\":\"I\",\"Й\":\"J\",\"К\":\"K\",\"Л\":\"L\",\"М\":\"M\",\"Н\":\"N\",\"О\":\"O\",\"П\":\"P\",\"Р\":\"R\",\"С\":\"S\",\"Т\":\"T\",\"У\":\"U\",\"Ф\":\"F\",\"Х\":\"H\",\"Ц\":\"C\",\"Ч\":\"Ch\",\"Ш\":\"Sh\",\"Щ\":\"Sh\",\"Ъ\":\"U\",\"Ы\":\"Y\",\"Ь\":\"\",\"Э\":\"E\",\"Ю\":\"Yu\",\"Я\":\"Ya\",\"а\":\"a\",\"б\":\"b\",\"в\":\"v\",\"г\":\"g\",\"д\":\"d\",\"е\":\"e\",\"ж\":\"zh\",\"з\":\"z\",\"и\":\"i\",\"й\":\"j\",\"к\":\"k\",\"л\":\"l\",\"м\":\"m\",\"н\":\"n\",\"о\":\"o\",\"п\":\"p\",\"р\":\"r\",\"с\":\"s\",\"т\":\"t\",\"у\":\"u\",\"ф\":\"f\",\"х\":\"h\",\"ц\":\"c\",\"ч\":\"ch\",\"ш\":\"sh\",\"щ\":\"sh\",\"ъ\":\"u\",\"ы\":\"y\",\"ь\":\"\",\"э\":\"e\",\"ю\":\"yu\",\"я\":\"ya\",\"ё\":\"yo\",\"ђ\":\"dj\",\"є\":\"ye\",\"і\":\"i\",\"ї\":\"yi\",\"ј\":\"j\",\"љ\":\"lj\",\"њ\":\"nj\",\"ћ\":\"c\",\"ѝ\":\"u\",\"џ\":\"dz\",\"Ґ\":\"G\",\"ґ\":\"g\",\"Ғ\":\"GH\",\"ғ\":\"gh\",\"Қ\":\"KH\",\"қ\":\"kh\",\"Ң\":\"NG\",\"ң\":\"ng\",\"Ү\":\"UE\",\"ү\":\"ue\",\"Ұ\":\"U\",\"ұ\":\"u\",\"Һ\":\"H\",\"һ\":\"h\",\"Ә\":\"AE\",\"ә\":\"ae\",\"Ө\":\"OE\",\"ө\":\"oe\",\"Ա\":\"A\",\"Բ\":\"B\",\"Գ\":\"G\",\"Դ\":\"D\",\"Ե\":\"E\",\"Զ\":\"Z\",\"Է\":\"E\\'\",\"Ը\":\"Y\\'\",\"Թ\":\"T\\'\",\"Ժ\":\"JH\",\"Ի\":\"I\",\"Լ\":\"L\",\"Խ\":\"X\",\"Ծ\":\"C\\'\",\"Կ\":\"K\",\"Հ\":\"H\",\"Ձ\":\"D\\'\",\"Ղ\":\"GH\",\"Ճ\":\"TW\",\"Մ\":\"M\",\"Յ\":\"Y\",\"Ն\":\"N\",\"Շ\":\"SH\",\"Չ\":\"CH\",\"Պ\":\"P\",\"Ջ\":\"J\",\"Ռ\":\"R\\'\",\"Ս\":\"S\",\"Վ\":\"V\",\"Տ\":\"T\",\"Ր\":\"R\",\"Ց\":\"C\",\"Փ\":\"P\\'\",\"Ք\":\"Q\\'\",\"Օ\":\"O\\'\\'\",\"Ֆ\":\"F\",\"և\":\"EV\",\"ء\":\"a\",\"آ\":\"aa\",\"أ\":\"a\",\"ؤ\":\"u\",\"إ\":\"i\",\"ئ\":\"e\",\"ا\":\"a\",\"ب\":\"b\",\"ة\":\"h\",\"ت\":\"t\",\"ث\":\"th\",\"ج\":\"j\",\"ح\":\"h\",\"خ\":\"kh\",\"د\":\"d\",\"ذ\":\"th\",\"ر\":\"r\",\"ز\":\"z\",\"س\":\"s\",\"ش\":\"sh\",\"ص\":\"s\",\"ض\":\"dh\",\"ط\":\"t\",\"ظ\":\"z\",\"ع\":\"a\",\"غ\":\"gh\",\"ف\":\"f\",\"ق\":\"q\",\"ك\":\"k\",\"ل\":\"l\",\"م\":\"m\",\"ن\":\"n\",\"ه\":\"h\",\"و\":\"w\",\"ى\":\"a\",\"ي\":\"y\",\"ً\":\"an\",\"ٌ\":\"on\",\"ٍ\":\"en\",\"َ\":\"a\",\"ُ\":\"u\",\"ِ\":\"e\",\"ْ\":\"\",\"٠\":\"0\",\"١\":\"1\",\"٢\":\"2\",\"٣\":\"3\",\"٤\":\"4\",\"٥\":\"5\",\"٦\":\"6\",\"٧\":\"7\",\"٨\":\"8\",\"٩\":\"9\",\"پ\":\"p\",\"چ\":\"ch\",\"ژ\":\"zh\",\"ک\":\"k\",\"گ\":\"g\",\"ی\":\"y\",\"۰\":\"0\",\"۱\":\"1\",\"۲\":\"2\",\"۳\":\"3\",\"۴\":\"4\",\"۵\":\"5\",\"۶\":\"6\",\"۷\":\"7\",\"۸\":\"8\",\"۹\":\"9\",\"฿\":\"baht\",\"ა\":\"a\",\"ბ\":\"b\",\"გ\":\"g\",\"დ\":\"d\",\"ე\":\"e\",\"ვ\":\"v\",\"ზ\":\"z\",\"თ\":\"t\",\"ი\":\"i\",\"კ\":\"k\",\"ლ\":\"l\",\"მ\":\"m\",\"ნ\":\"n\",\"ო\":\"o\",\"პ\":\"p\",\"ჟ\":\"zh\",\"რ\":\"r\",\"ს\":\"s\",\"ტ\":\"t\",\"უ\":\"u\",\"ფ\":\"f\",\"ქ\":\"k\",\"ღ\":\"gh\",\"ყ\":\"q\",\"შ\":\"sh\",\"ჩ\":\"ch\",\"ც\":\"ts\",\"ძ\":\"dz\",\"წ\":\"ts\",\"ჭ\":\"ch\",\"ხ\":\"kh\",\"ჯ\":\"j\",\"ჰ\":\"h\",\"Ṣ\":\"S\",\"ṣ\":\"s\",\"Ẁ\":\"W\",\"ẁ\":\"w\",\"Ẃ\":\"W\",\"ẃ\":\"w\",\"Ẅ\":\"W\",\"ẅ\":\"w\",\"ẞ\":\"SS\",\"Ạ\":\"A\",\"ạ\":\"a\",\"Ả\":\"A\",\"ả\":\"a\",\"Ấ\":\"A\",\"ấ\":\"a\",\"Ầ\":\"A\",\"ầ\":\"a\",\"Ẩ\":\"A\",\"ẩ\":\"a\",\"Ẫ\":\"A\",\"ẫ\":\"a\",\"Ậ\":\"A\",\"ậ\":\"a\",\"Ắ\":\"A\",\"ắ\":\"a\",\"Ằ\":\"A\",\"ằ\":\"a\",\"Ẳ\":\"A\",\"ẳ\":\"a\",\"Ẵ\":\"A\",\"ẵ\":\"a\",\"Ặ\":\"A\",\"ặ\":\"a\",\"Ẹ\":\"E\",\"ẹ\":\"e\",\"Ẻ\":\"E\",\"ẻ\":\"e\",\"Ẽ\":\"E\",\"ẽ\":\"e\",\"Ế\":\"E\",\"ế\":\"e\",\"Ề\":\"E\",\"ề\":\"e\",\"Ể\":\"E\",\"ể\":\"e\",\"Ễ\":\"E\",\"ễ\":\"e\",\"Ệ\":\"E\",\"ệ\":\"e\",\"Ỉ\":\"I\",\"ỉ\":\"i\",\"Ị\":\"I\",\"ị\":\"i\",\"Ọ\":\"O\",\"ọ\":\"o\",\"Ỏ\":\"O\",\"ỏ\":\"o\",\"Ố\":\"O\",\"ố\":\"o\",\"Ồ\":\"O\",\"ồ\":\"o\",\"Ổ\":\"O\",\"ổ\":\"o\",\"Ỗ\":\"O\",\"ỗ\":\"o\",\"Ộ\":\"O\",\"ộ\":\"o\",\"Ớ\":\"O\",\"ớ\":\"o\",\"Ờ\":\"O\",\"ờ\":\"o\",\"Ở\":\"O\",\"ở\":\"o\",\"Ỡ\":\"O\",\"ỡ\":\"o\",\"Ợ\":\"O\",\"ợ\":\"o\",\"Ụ\":\"U\",\"ụ\":\"u\",\"Ủ\":\"U\",\"ủ\":\"u\",\"Ứ\":\"U\",\"ứ\":\"u\",\"Ừ\":\"U\",\"ừ\":\"u\",\"Ử\":\"U\",\"ử\":\"u\",\"Ữ\":\"U\",\"ữ\":\"u\",\"Ự\":\"U\",\"ự\":\"u\",\"Ỳ\":\"Y\",\"ỳ\":\"y\",\"Ỵ\":\"Y\",\"ỵ\":\"y\",\"Ỷ\":\"Y\",\"ỷ\":\"y\",\"Ỹ\":\"Y\",\"ỹ\":\"y\",\"–\":\"-\",\"‘\":\"\\'\",\"’\":\"\\'\",\"“\":\"\\\\\"\",\"”\":\"\\\\\"\",\"„\":\"\\\\\"\",\"†\":\"+\",\"•\":\"*\",\"…\":\"...\",\"₠\":\"ecu\",\"₢\":\"cruzeiro\",\"₣\":\"french franc\",\"₤\":\"lira\",\"₥\":\"mill\",\"₦\":\"naira\",\"₧\":\"peseta\",\"₨\":\"rupee\",\"₩\":\"won\",\"₪\":\"new shequel\",\"₫\":\"dong\",\"€\":\"euro\",\"₭\":\"kip\",\"₮\":\"tugrik\",\"₯\":\"drachma\",\"₰\":\"penny\",\"₱\":\"peso\",\"₲\":\"guarani\",\"₳\":\"austral\",\"₴\":\"hryvnia\",\"₵\":\"cedi\",\"₸\":\"kazakhstani tenge\",\"₹\":\"indian rupee\",\"₺\":\"turkish lira\",\"₽\":\"russian ruble\",\"₿\":\"bitcoin\",\"℠\":\"sm\",\"™\":\"tm\",\"∂\":\"d\",\"∆\":\"delta\",\"∑\":\"sum\",\"∞\":\"infinity\",\"♥\":\"love\",\"元\":\"yuan\",\"円\":\"yen\",\"﷼\":\"rial\",\"ﻵ\":\"laa\",\"ﻷ\":\"laa\",\"ﻹ\":\"lai\",\"ﻻ\":\"la\"}'),t=JSON.parse('{\"bg\":{\"Й\":\"Y\",\"Ц\":\"Ts\",\"Щ\":\"Sht\",\"Ъ\":\"A\",\"Ь\":\"Y\",\"й\":\"y\",\"ц\":\"ts\",\"щ\":\"sht\",\"ъ\":\"a\",\"ь\":\"y\"},\"de\":{\"Ä\":\"AE\",\"ä\":\"ae\",\"Ö\":\"OE\",\"ö\":\"oe\",\"Ü\":\"UE\",\"ü\":\"ue\",\"ß\":\"ss\",\"%\":\"prozent\",\"&\":\"und\",\"|\":\"oder\",\"∑\":\"summe\",\"∞\":\"unendlich\",\"♥\":\"liebe\"},\"es\":{\"%\":\"por ciento\",\"&\":\"y\",\"<\":\"menor que\",\">\":\"mayor que\",\"|\":\"o\",\"¢\":\"centavos\",\"£\":\"libras\",\"¤\":\"moneda\",\"₣\":\"francos\",\"∑\":\"suma\",\"∞\":\"infinito\",\"♥\":\"amor\"},\"fr\":{\"%\":\"pourcent\",\"&\":\"et\",\"<\":\"plus petit\",\">\":\"plus grand\",\"|\":\"ou\",\"¢\":\"centime\",\"£\":\"livre\",\"¤\":\"devise\",\"₣\":\"franc\",\"∑\":\"somme\",\"∞\":\"infini\",\"♥\":\"amour\"},\"pt\":{\"%\":\"porcento\",\"&\":\"e\",\"<\":\"menor\",\">\":\"maior\",\"|\":\"ou\",\"¢\":\"centavo\",\"∑\":\"soma\",\"£\":\"libra\",\"∞\":\"infinito\",\"♥\":\"amor\"},\"uk\":{\"И\":\"Y\",\"и\":\"y\",\"Й\":\"Y\",\"й\":\"y\",\"Ц\":\"Ts\",\"ц\":\"ts\",\"Х\":\"Kh\",\"х\":\"kh\",\"Щ\":\"Shch\",\"щ\":\"shch\",\"Г\":\"H\",\"г\":\"h\"},\"vi\":{\"Đ\":\"D\",\"đ\":\"d\"},\"da\":{\"Ø\":\"OE\",\"ø\":\"oe\",\"Å\":\"AA\",\"å\":\"aa\",\"%\":\"procent\",\"&\":\"og\",\"|\":\"eller\",\"\$\":\"dollar\",\"<\":\"mindre end\",\">\":\"større end\"},\"nb\":{\"&\":\"og\",\"Å\":\"AA\",\"Æ\":\"AE\",\"Ø\":\"OE\",\"å\":\"aa\",\"æ\":\"ae\",\"ø\":\"oe\"},\"it\":{\"&\":\"e\"},\"nl\":{\"&\":\"en\"},\"sv\":{\"&\":\"och\",\"Å\":\"AA\",\"Ä\":\"AE\",\"Ö\":\"OE\",\"å\":\"aa\",\"ä\":\"ae\",\"ö\":\"oe\"}}');function n(n,r){if(\"string\"!=typeof n)throw new Error(\"slugify: string argument expected\");var a=t[(r=\"string\"==typeof r?{replacement:r}:r||{}).locale]||{},o=void 0===r.replacement?\"-\":r.replacement,i=void 0===r.trim||r.trim,u=n.normalize().split(\"\").reduce((function(t,n){var i=a[n]||e[n]||n;return i===o&&(i=\" \"),t+i.replace(r.remove||/[^\\w\\s\$*_+~.()'\"!\\-:@]+/g,\"\")}),\"\");return r.strict&&(u=u.replace(/[^A-Za-z0-9\\s]/g,\"\")),i&&(u=u.trim()),u=u.replace(/\\s+/g,o),r.lower&&(u=u.toLowerCase()),u}return n.extend=function(t){Object.assign(e,t)},n},e.exports=t(),e.exports.default=t()}},t={};function n(r){var a=t[r];if(void 0!==a)return a.exports;var o=t[r]={exports:{}};return e[r].call(o.exports,o,o.exports,n),o.exports}(()=>{function e(e,n){var r=\"undefined\"!=typeof Symbol&&e[Symbol.iterator]||e[\"@@iterator\"];if(!r){if(Array.isArray(e)||(r=function(e,n){if(!e)return;if(\"string\"==typeof e)return t(e,n);var r=Object.prototype.toString.call(e).slice(8,-1);\"Object\"===r&&e.constructor&&(r=e.constructor.name);if(\"Map\"===r||\"Set\"===r)return Array.from(e);if(\"Arguments\"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array\$/.test(r))return t(e,n)}(e))||n&&e&&\"number\"==typeof e.length){r&&(e=r);var a=0,o=function(){};return{s:o,n:function(){return a>=e.length?{done:!0}:{done:!1,value:e[a++]}},e:function(e){throw e},f:o}}throw new TypeError(\"Invalid attempt to iterate non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\")}var i,u=!0,l=!1;return{s:function(){r=r.call(e)},n:function(){var e=r.next();return u=e.done,e},e:function(e){l=!0,i=e},f:function(){try{u||null==r.return||r.return()}finally{if(l)throw i}}}}function t(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var a=n(1304);a.extend({\$:\"\",\"%\":\"\",\"&\":\"\",\"<\":\"\",\">\":\"\",\"|\":\"\",\"¢\":\"\",\"£\":\"\",\"¤\":\"\",\"¥\":\"\",\"₠\":\"\",\"₢\":\"\",\"₣\":\"\",\"₤\":\"\",\"₥\":\"\",\"₦\":\"\",\"₧\":\"\",\"₨\":\"\",\"₩\":\"\",\"₪\":\"\",\"₫\":\"\",\"€\":\"\",\"₭\":\"\",\"₮\":\"\",\"₯\":\"\",\"₰\":\"\",\"₱\":\"\",\"₲\":\"\",\"₳\":\"\",\"₴\":\"\",\"₵\":\"\",\"₸\":\"\",\"₹\":\"\",\"₽\":\"\",\"₿\":\"\",\"∂\":\"\",\"∆\":\"\",\"∑\":\"\",\"∞\":\"\",\"♥\":\"\",元:\"\",円:\"\",\"﷼\":\"\"});var o=function(){\"use strict\";function t(e){!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,t),this.field=e,this.setTargetElement(),this.locked=!0,this.field.setAttribute(\"readonly\",\"readonly\"),\"\"===this.field.value?(this.currentSlug=\"\",this.updateValue(),this.listenTarget()):this.currentSlug=this.field.value,this.appendLockButton()}var n,o,i;return n=t,(o=[{key:\"setTargetElement\",value:function(){var t=JSON.parse(this.field.dataset.target);this.targets=[];var n,r=e(t);try{for(r.s();!(n=r.n()).done;){var a=n.value,o=document.getElementById(a);if(null===o)throw'Wrong target specified for slug widget (\"'.concat(a,'\").');this.targets.push(o)}}catch(e){r.e(e)}finally{r.f()}}},{key:\"appendLockButton\",value:function(){var e=this;this.lockButton=this.field.parentNode.querySelector(\"button\"),this.lockButtonIcon=this.lockButton.querySelector(\"i\"),this.lockButton.addEventListener(\"click\",(function(){if(e.locked){var t=e.field.dataset.confirmText||null;if(null===t)e.unlock();else{var n=decodeURIComponent(JSON.parse('\"'+t.replace(/\\\"/g,'\\\\\"')+'\"'));!0===confirm(n)&&e.unlock()}}else e.lock()}))}},{key:\"unlock\",value:function(){this.locked=!1,this.lockButtonIcon.classList.replace(\"fa-lock\",\"fa-lock-open\"),this.field.removeAttribute(\"readonly\")}},{key:\"lock\",value:function(){this.locked=!0,this.lockButtonIcon.classList.replace(\"fa-lock-open\",\"fa-lock\"),\"\"!==this.currentSlug?this.field.value=this.currentSlug:this.updateValue(),this.field.setAttribute(\"readonly\",\"readonly\")}},{key:\"updateValue\",value:function(){this.field.value=a(this.targets.map((function(e){return e.value})).join(\"-\"),{remove:/[^A-Za-z0-9\\s-]/g,lower:!0,strict:!0})}},{key:\"listenTarget\",value:function(){var t,n=this,r=e(this.targets);try{for(r.s();!(t=r.n()).done;)t.value.addEventListener(\"keyup\",(function(){\"readonly\"===n.field.getAttribute(\"readonly\")&&n.updateValue()}))}catch(e){r.e(e)}finally{r.f()}}}])&&r(n.prototype,o),i&&r(n,i),Object.defineProperty(n,\"prototype\",{writable:!1}),t}();document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll(\"[data-ea-slug-field]\").forEach((function(e){new o(e)}))}))})()})();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/field-slug.7eed3cdc.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(()=>{var e={1304:function(e){var t;t=function(){var e=JSON.parse('{\"\$\":\"dollar\",\"%\":\"percent\",\"&\":\"and\",\"<\":\"less\",\">\":\"greater\",\"|\":\"or\",\"¢\":\"cent\",\"£\":\"pound\",\"¤\":\"currency\",\"¥\":\"yen\",\"©\":\"(c)\",\"ª\":\"a\",\"®\":\"(r)\",\"º\":\"o\",\"À\":\"A\",\"Á\":\"A\",\"Â\":\"A\",\"Ã\":\"A\",\"Ä\":\"A\",\"Å\":\"A\",\"Æ\":\"AE\",\"Ç\":\"C\",\"È\":\"E\",\"É\":\"E\",\"Ê\":\"E\",\"Ë\":\"E\",\"Ì\":\"I\",\"Í\":\"I\",\"Î\":\"I\",\"Ï\":\"I\",\"Ð\":\"D\",\"Ñ\":\"N\",\"Ò\":\"O\",\"Ó\":\"O\",\"Ô\":\"O\",\"Õ\":\"O\",\"Ö\":\"O\",\"Ø\":\"O\",\"Ù\":\"U\",\"Ú\":\"U\",\"Û\":\"U\",\"Ü\":\"U\",\"Ý\":\"Y\",\"Þ\":\"TH\",\"ß\":\"ss\",\"à\":\"a\",\"á\":\"a\",\"â\":\"a\",\"ã\":\"a\",\"ä\":\"a\",\"å\":\"a\",\"æ\":\"ae\",\"ç\":\"c\",\"è\":\"e\",\"é\":\"e\",\"ê\":\"e\",\"ë\":\"e\",\"ì\":\"i\",\"í\":\"i\",\"î\":\"i\",\"ï\":\"i\",\"ð\":\"d\",\"ñ\":\"n\",\"ò\":\"o\",\"ó\":\"o\",\"ô\":\"o\",\"õ\":\"o\",\"ö\":\"o\",\"ø\":\"o\",\"ù\":\"u\",\"ú\":\"u\",\"û\":\"u\",\"ü\":\"u\",\"ý\":\"y\",\"þ\":\"th\",\"ÿ\":\"y\",\"Ā\":\"A\",\"ā\":\"a\",\"Ă\":\"A\",\"ă\":\"a\",\"Ą\":\"A\",\"ą\":\"a\",\"Ć\":\"C\",\"ć\":\"c\",\"Č\":\"C\",\"č\":\"c\",\"Ď\":\"D\",\"ď\":\"d\",\"Đ\":\"DJ\",\"đ\":\"dj\",\"Ē\":\"E\",\"ē\":\"e\",\"Ė\":\"E\",\"ė\":\"e\",\"Ę\":\"e\",\"ę\":\"e\",\"Ě\":\"E\",\"ě\":\"e\",\"Ğ\":\"G\",\"ğ\":\"g\",\"Ģ\":\"G\",\"ģ\":\"g\",\"Ĩ\":\"I\",\"ĩ\":\"i\",\"Ī\":\"i\",\"ī\":\"i\",\"Į\":\"I\",\"į\":\"i\",\"İ\":\"I\",\"ı\":\"i\",\"Ķ\":\"k\",\"ķ\":\"k\",\"Ļ\":\"L\",\"ļ\":\"l\",\"Ľ\":\"L\",\"ľ\":\"l\",\"Ł\":\"L\",\"ł\":\"l\",\"Ń\":\"N\",\"ń\":\"n\",\"Ņ\":\"N\",\"ņ\":\"n\",\"Ň\":\"N\",\"ň\":\"n\",\"Ō\":\"O\",\"ō\":\"o\",\"Ő\":\"O\",\"ő\":\"o\",\"Œ\":\"OE\",\"œ\":\"oe\",\"Ŕ\":\"R\",\"ŕ\":\"r\",\"Ř\":\"R\",\"ř\":\"r\",\"Ś\":\"S\",\"ś\":\"s\",\"Ş\":\"S\",\"ş\":\"s\",\"Š\":\"S\",\"š\":\"s\",\"Ţ\":\"T\",\"ţ\":\"t\",\"Ť\":\"T\",\"ť\":\"t\",\"Ũ\":\"U\",\"ũ\":\"u\",\"Ū\":\"u\",\"ū\":\"u\",\"Ů\":\"U\",\"ů\":\"u\",\"Ű\":\"U\",\"ű\":\"u\",\"Ų\":\"U\",\"ų\":\"u\",\"Ŵ\":\"W\",\"ŵ\":\"w\",\"Ŷ\":\"Y\",\"ŷ\":\"y\",\"Ÿ\":\"Y\",\"Ź\":\"Z\",\"ź\":\"z\",\"Ż\":\"Z\",\"ż\":\"z\",\"Ž\":\"Z\",\"ž\":\"z\",\"Ə\":\"E\",\"ƒ\":\"f\",\"Ơ\":\"O\",\"ơ\":\"o\",\"Ư\":\"U\",\"ư\":\"u\",\"ǈ\":\"LJ\",\"ǉ\":\"lj\",\"ǋ\":\"NJ\",\"ǌ\":\"nj\",\"Ș\":\"S\",\"ș\":\"s\",\"Ț\":\"T\",\"ț\":\"t\",\"ə\":\"e\",\"˚\":\"o\",\"Ά\":\"A\",\"Έ\":\"E\",\"Ή\":\"H\",\"Ί\":\"I\",\"Ό\":\"O\",\"Ύ\":\"Y\",\"Ώ\":\"W\",\"ΐ\":\"i\",\"Α\":\"A\",\"Β\":\"B\",\"Γ\":\"G\",\"Δ\":\"D\",\"Ε\":\"E\",\"Ζ\":\"Z\",\"Η\":\"H\",\"Θ\":\"8\",\"Ι\":\"I\",\"Κ\":\"K\",\"Λ\":\"L\",\"Μ\":\"M\",\"Ν\":\"N\",\"Ξ\":\"3\",\"Ο\":\"O\",\"Π\":\"P\",\"Ρ\":\"R\",\"Σ\":\"S\",\"Τ\":\"T\",\"Υ\":\"Y\",\"Φ\":\"F\",\"Χ\":\"X\",\"Ψ\":\"PS\",\"Ω\":\"W\",\"Ϊ\":\"I\",\"Ϋ\":\"Y\",\"ά\":\"a\",\"έ\":\"e\",\"ή\":\"h\",\"ί\":\"i\",\"ΰ\":\"y\",\"α\":\"a\",\"β\":\"b\",\"γ\":\"g\",\"δ\":\"d\",\"ε\":\"e\",\"ζ\":\"z\",\"η\":\"h\",\"θ\":\"8\",\"ι\":\"i\",\"κ\":\"k\",\"λ\":\"l\",\"μ\":\"m\",\"ν\":\"n\",\"ξ\":\"3\",\"ο\":\"o\",\"π\":\"p\",\"ρ\":\"r\",\"ς\":\"s\",\"σ\":\"s\",\"τ\":\"t\",\"υ\":\"y\",\"φ\":\"f\",\"χ\":\"x\",\"ψ\":\"ps\",\"ω\":\"w\",\"ϊ\":\"i\",\"ϋ\":\"y\",\"ό\":\"o\",\"ύ\":\"y\",\"ώ\":\"w\",\"Ё\":\"Yo\",\"Ђ\":\"DJ\",\"Є\":\"Ye\",\"І\":\"I\",\"Ї\":\"Yi\",\"Ј\":\"J\",\"Љ\":\"LJ\",\"Њ\":\"NJ\",\"Ћ\":\"C\",\"Џ\":\"DZ\",\"А\":\"A\",\"Б\":\"B\",\"В\":\"V\",\"Г\":\"G\",\"Д\":\"D\",\"Е\":\"E\",\"Ж\":\"Zh\",\"З\":\"Z\",\"И\":\"I\",\"Й\":\"J\",\"К\":\"K\",\"Л\":\"L\",\"М\":\"M\",\"Н\":\"N\",\"О\":\"O\",\"П\":\"P\",\"Р\":\"R\",\"С\":\"S\",\"Т\":\"T\",\"У\":\"U\",\"Ф\":\"F\",\"Х\":\"H\",\"Ц\":\"C\",\"Ч\":\"Ch\",\"Ш\":\"Sh\",\"Щ\":\"Sh\",\"Ъ\":\"U\",\"Ы\":\"Y\",\"Ь\":\"\",\"Э\":\"E\",\"Ю\":\"Yu\",\"Я\":\"Ya\",\"а\":\"a\",\"б\":\"b\",\"в\":\"v\",\"г\":\"g\",\"д\":\"d\",\"е\":\"e\",\"ж\":\"zh\",\"з\":\"z\",\"и\":\"i\",\"й\":\"j\",\"к\":\"k\",\"л\":\"l\",\"м\":\"m\",\"н\":\"n\",\"о\":\"o\",\"п\":\"p\",\"р\":\"r\",\"с\":\"s\",\"т\":\"t\",\"у\":\"u\",\"ф\":\"f\",\"х\":\"h\",\"ц\":\"c\",\"ч\":\"ch\",\"ш\":\"sh\",\"щ\":\"sh\",\"ъ\":\"u\",\"ы\":\"y\",\"ь\":\"\",\"э\":\"e\",\"ю\":\"yu\",\"я\":\"ya\",\"ё\":\"yo\",\"ђ\":\"dj\",\"є\":\"ye\",\"і\":\"i\",\"ї\":\"yi\",\"ј\":\"j\",\"љ\":\"lj\",\"њ\":\"nj\",\"ћ\":\"c\",\"ѝ\":\"u\",\"џ\":\"dz\",\"Ґ\":\"G\",\"ґ\":\"g\",\"Ғ\":\"GH\",\"ғ\":\"gh\",\"Қ\":\"KH\",\"қ\":\"kh\",\"Ң\":\"NG\",\"ң\":\"ng\",\"Ү\":\"UE\",\"ү\":\"ue\",\"Ұ\":\"U\",\"ұ\":\"u\",\"Һ\":\"H\",\"һ\":\"h\",\"Ә\":\"AE\",\"ә\":\"ae\",\"Ө\":\"OE\",\"ө\":\"oe\",\"Ա\":\"A\",\"Բ\":\"B\",\"Գ\":\"G\",\"Դ\":\"D\",\"Ե\":\"E\",\"Զ\":\"Z\",\"Է\":\"E\\'\",\"Ը\":\"Y\\'\",\"Թ\":\"T\\'\",\"Ժ\":\"JH\",\"Ի\":\"I\",\"Լ\":\"L\",\"Խ\":\"X\",\"Ծ\":\"C\\'\",\"Կ\":\"K\",\"Հ\":\"H\",\"Ձ\":\"D\\'\",\"Ղ\":\"GH\",\"Ճ\":\"TW\",\"Մ\":\"M\",\"Յ\":\"Y\",\"Ն\":\"N\",\"Շ\":\"SH\",\"Չ\":\"CH\",\"Պ\":\"P\",\"Ջ\":\"J\",\"Ռ\":\"R\\'\",\"Ս\":\"S\",\"Վ\":\"V\",\"Տ\":\"T\",\"Ր\":\"R\",\"Ց\":\"C\",\"Փ\":\"P\\'\",\"Ք\":\"Q\\'\",\"Օ\":\"O\\'\\'\",\"Ֆ\":\"F\",\"և\":\"EV\",\"ء\":\"a\",\"آ\":\"aa\",\"أ\":\"a\",\"ؤ\":\"u\",\"إ\":\"i\",\"ئ\":\"e\",\"ا\":\"a\",\"ب\":\"b\",\"ة\":\"h\",\"ت\":\"t\",\"ث\":\"th\",\"ج\":\"j\",\"ح\":\"h\",\"خ\":\"kh\",\"د\":\"d\",\"ذ\":\"th\",\"ر\":\"r\",\"ز\":\"z\",\"س\":\"s\",\"ش\":\"sh\",\"ص\":\"s\",\"ض\":\"dh\",\"ط\":\"t\",\"ظ\":\"z\",\"ع\":\"a\",\"غ\":\"gh\",\"ف\":\"f\",\"ق\":\"q\",\"ك\":\"k\",\"ل\":\"l\",\"م\":\"m\",\"ن\":\"n\",\"ه\":\"h\",\"و\":\"w\",\"ى\":\"a\",\"ي\":\"y\",\"ً\":\"an\",\"ٌ\":\"on\",\"ٍ\":\"en\",\"َ\":\"a\",\"ُ\":\"u\",\"ِ\":\"e\",\"ْ\":\"\",\"٠\":\"0\",\"١\":\"1\",\"٢\":\"2\",\"٣\":\"3\",\"٤\":\"4\",\"٥\":\"5\",\"٦\":\"6\",\"٧\":\"7\",\"٨\":\"8\",\"٩\":\"9\",\"پ\":\"p\",\"چ\":\"ch\",\"ژ\":\"zh\",\"ک\":\"k\",\"گ\":\"g\",\"ی\":\"y\",\"۰\":\"0\",\"۱\":\"1\",\"۲\":\"2\",\"۳\":\"3\",\"۴\":\"4\",\"۵\":\"5\",\"۶\":\"6\",\"۷\":\"7\",\"۸\":\"8\",\"۹\":\"9\",\"฿\":\"baht\",\"ა\":\"a\",\"ბ\":\"b\",\"გ\":\"g\",\"დ\":\"d\",\"ე\":\"e\",\"ვ\":\"v\",\"ზ\":\"z\",\"თ\":\"t\",\"ი\":\"i\",\"კ\":\"k\",\"ლ\":\"l\",\"მ\":\"m\",\"ნ\":\"n\",\"ო\":\"o\",\"პ\":\"p\",\"ჟ\":\"zh\",\"რ\":\"r\",\"ს\":\"s\",\"ტ\":\"t\",\"უ\":\"u\",\"ფ\":\"f\",\"ქ\":\"k\",\"ღ\":\"gh\",\"ყ\":\"q\",\"შ\":\"sh\",\"ჩ\":\"ch\",\"ც\":\"ts\",\"ძ\":\"dz\",\"წ\":\"ts\",\"ჭ\":\"ch\",\"ხ\":\"kh\",\"ჯ\":\"j\",\"ჰ\":\"h\",\"Ṣ\":\"S\",\"ṣ\":\"s\",\"Ẁ\":\"W\",\"ẁ\":\"w\",\"Ẃ\":\"W\",\"ẃ\":\"w\",\"Ẅ\":\"W\",\"ẅ\":\"w\",\"ẞ\":\"SS\",\"Ạ\":\"A\",\"ạ\":\"a\",\"Ả\":\"A\",\"ả\":\"a\",\"Ấ\":\"A\",\"ấ\":\"a\",\"Ầ\":\"A\",\"ầ\":\"a\",\"Ẩ\":\"A\",\"ẩ\":\"a\",\"Ẫ\":\"A\",\"ẫ\":\"a\",\"Ậ\":\"A\",\"ậ\":\"a\",\"Ắ\":\"A\",\"ắ\":\"a\",\"Ằ\":\"A\",\"ằ\":\"a\",\"Ẳ\":\"A\",\"ẳ\":\"a\",\"Ẵ\":\"A\",\"ẵ\":\"a\",\"Ặ\":\"A\",\"ặ\":\"a\",\"Ẹ\":\"E\",\"ẹ\":\"e\",\"Ẻ\":\"E\",\"ẻ\":\"e\",\"Ẽ\":\"E\",\"ẽ\":\"e\",\"Ế\":\"E\",\"ế\":\"e\",\"Ề\":\"E\",\"ề\":\"e\",\"Ể\":\"E\",\"ể\":\"e\",\"Ễ\":\"E\",\"ễ\":\"e\",\"Ệ\":\"E\",\"ệ\":\"e\",\"Ỉ\":\"I\",\"ỉ\":\"i\",\"Ị\":\"I\",\"ị\":\"i\",\"Ọ\":\"O\",\"ọ\":\"o\",\"Ỏ\":\"O\",\"ỏ\":\"o\",\"Ố\":\"O\",\"ố\":\"o\",\"Ồ\":\"O\",\"ồ\":\"o\",\"Ổ\":\"O\",\"ổ\":\"o\",\"Ỗ\":\"O\",\"ỗ\":\"o\",\"Ộ\":\"O\",\"ộ\":\"o\",\"Ớ\":\"O\",\"ớ\":\"o\",\"Ờ\":\"O\",\"ờ\":\"o\",\"Ở\":\"O\",\"ở\":\"o\",\"Ỡ\":\"O\",\"ỡ\":\"o\",\"Ợ\":\"O\",\"ợ\":\"o\",\"Ụ\":\"U\",\"ụ\":\"u\",\"Ủ\":\"U\",\"ủ\":\"u\",\"Ứ\":\"U\",\"ứ\":\"u\",\"Ừ\":\"U\",\"ừ\":\"u\",\"Ử\":\"U\",\"ử\":\"u\",\"Ữ\":\"U\",\"ữ\":\"u\",\"Ự\":\"U\",\"ự\":\"u\",\"Ỳ\":\"Y\",\"ỳ\":\"y\",\"Ỵ\":\"Y\",\"ỵ\":\"y\",\"Ỷ\":\"Y\",\"ỷ\":\"y\",\"Ỹ\":\"Y\",\"ỹ\":\"y\",\"–\":\"-\",\"‘\":\"\\'\",\"’\":\"\\'\",\"“\":\"\\\\\"\",\"”\":\"\\\\\"\",\"„\":\"\\\\\"\",\"†\":\"+\",\"•\":\"*\",\"…\":\"...\",\"₠\":\"ecu\",\"₢\":\"cruzeiro\",\"₣\":\"french franc\",\"₤\":\"lira\",\"₥\":\"mill\",\"₦\":\"naira\",\"₧\":\"peseta\",\"₨\":\"rupee\",\"₩\":\"won\",\"₪\":\"new shequel\",\"₫\":\"dong\",\"€\":\"euro\",\"₭\":\"kip\",\"₮\":\"tugrik\",\"₯\":\"drachma\",\"₰\":\"penny\",\"₱\":\"peso\",\"₲\":\"guarani\",\"₳\":\"austral\",\"₴\":\"hryvnia\",\"₵\":\"cedi\",\"₸\":\"kazakhstani tenge\",\"₹\":\"indian rupee\",\"₺\":\"turkish lira\",\"₽\":\"russian ruble\",\"₿\":\"bitcoin\",\"℠\":\"sm\",\"™\":\"tm\",\"∂\":\"d\",\"∆\":\"delta\",\"∑\":\"sum\",\"∞\":\"infinity\",\"♥\":\"love\",\"元\":\"yuan\",\"円\":\"yen\",\"﷼\":\"rial\",\"ﻵ\":\"laa\",\"ﻷ\":\"laa\",\"ﻹ\":\"lai\",\"ﻻ\":\"la\"}'),t=JSON.parse('{\"bg\":{\"Й\":\"Y\",\"Ц\":\"Ts\",\"Щ\":\"Sht\",\"Ъ\":\"A\",\"Ь\":\"Y\",\"й\":\"y\",\"ц\":\"ts\",\"щ\":\"sht\",\"ъ\":\"a\",\"ь\":\"y\"},\"de\":{\"Ä\":\"AE\",\"ä\":\"ae\",\"Ö\":\"OE\",\"ö\":\"oe\",\"Ü\":\"UE\",\"ü\":\"ue\",\"ß\":\"ss\",\"%\":\"prozent\",\"&\":\"und\",\"|\":\"oder\",\"∑\":\"summe\",\"∞\":\"unendlich\",\"♥\":\"liebe\"},\"es\":{\"%\":\"por ciento\",\"&\":\"y\",\"<\":\"menor que\",\">\":\"mayor que\",\"|\":\"o\",\"¢\":\"centavos\",\"£\":\"libras\",\"¤\":\"moneda\",\"₣\":\"francos\",\"∑\":\"suma\",\"∞\":\"infinito\",\"♥\":\"amor\"},\"fr\":{\"%\":\"pourcent\",\"&\":\"et\",\"<\":\"plus petit\",\">\":\"plus grand\",\"|\":\"ou\",\"¢\":\"centime\",\"£\":\"livre\",\"¤\":\"devise\",\"₣\":\"franc\",\"∑\":\"somme\",\"∞\":\"infini\",\"♥\":\"amour\"},\"pt\":{\"%\":\"porcento\",\"&\":\"e\",\"<\":\"menor\",\">\":\"maior\",\"|\":\"ou\",\"¢\":\"centavo\",\"∑\":\"soma\",\"£\":\"libra\",\"∞\":\"infinito\",\"♥\":\"amor\"},\"uk\":{\"И\":\"Y\",\"и\":\"y\",\"Й\":\"Y\",\"й\":\"y\",\"Ц\":\"Ts\",\"ц\":\"ts\",\"Х\":\"Kh\",\"х\":\"kh\",\"Щ\":\"Shch\",\"щ\":\"shch\",\"Г\":\"H\",\"г\":\"h\"},\"vi\":{\"Đ\":\"D\",\"đ\":\"d\"},\"da\":{\"Ø\":\"OE\",\"ø\":\"oe\",\"Å\":\"AA\",\"å\":\"aa\",\"%\":\"procent\",\"&\":\"og\",\"|\":\"eller\",\"\$\":\"dollar\",\"<\":\"mindre end\",\">\":\"større end\"},\"nb\":{\"&\":\"og\",\"Å\":\"AA\",\"Æ\":\"AE\",\"Ø\":\"OE\",\"å\":\"aa\",\"æ\":\"ae\",\"ø\":\"oe\"},\"it\":{\"&\":\"e\"},\"nl\":{\"&\":\"en\"},\"sv\":{\"&\":\"och\",\"Å\":\"AA\",\"Ä\":\"AE\",\"Ö\":\"OE\",\"å\":\"aa\",\"ä\":\"ae\",\"ö\":\"oe\"}}');function n(n,r){if(\"string\"!=typeof n)throw new Error(\"slugify: string argument expected\");var a=t[(r=\"string\"==typeof r?{replacement:r}:r||{}).locale]||{},o=void 0===r.replacement?\"-\":r.replacement,i=void 0===r.trim||r.trim,u=n.normalize().split(\"\").reduce((function(t,n){var i=a[n]||e[n]||n;return i===o&&(i=\" \"),t+i.replace(r.remove||/[^\\w\\s\$*_+~.()'\"!\\-:@]+/g,\"\")}),\"\");return r.strict&&(u=u.replace(/[^A-Za-z0-9\\s]/g,\"\")),i&&(u=u.trim()),u=u.replace(/\\s+/g,o),r.lower&&(u=u.toLowerCase()),u}return n.extend=function(t){Object.assign(e,t)},n},e.exports=t(),e.exports.default=t()}},t={};function n(r){var a=t[r];if(void 0!==a)return a.exports;var o=t[r]={exports:{}};return e[r].call(o.exports,o,o.exports,n),o.exports}(()=>{function e(e,n){var r=\"undefined\"!=typeof Symbol&&e[Symbol.iterator]||e[\"@@iterator\"];if(!r){if(Array.isArray(e)||(r=function(e,n){if(!e)return;if(\"string\"==typeof e)return t(e,n);var r=Object.prototype.toString.call(e).slice(8,-1);\"Object\"===r&&e.constructor&&(r=e.constructor.name);if(\"Map\"===r||\"Set\"===r)return Array.from(e);if(\"Arguments\"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array\$/.test(r))return t(e,n)}(e))||n&&e&&\"number\"==typeof e.length){r&&(e=r);var a=0,o=function(){};return{s:o,n:function(){return a>=e.length?{done:!0}:{done:!1,value:e[a++]}},e:function(e){throw e},f:o}}throw new TypeError(\"Invalid attempt to iterate non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\")}var i,u=!0,l=!1;return{s:function(){r=r.call(e)},n:function(){var e=r.next();return u=e.done,e},e:function(e){l=!0,i=e},f:function(){try{u||null==r.return||r.return()}finally{if(l)throw i}}}}function t(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var a=n(1304);a.extend({\$:\"\",\"%\":\"\",\"&\":\"\",\"<\":\"\",\">\":\"\",\"|\":\"\",\"¢\":\"\",\"£\":\"\",\"¤\":\"\",\"¥\":\"\",\"₠\":\"\",\"₢\":\"\",\"₣\":\"\",\"₤\":\"\",\"₥\":\"\",\"₦\":\"\",\"₧\":\"\",\"₨\":\"\",\"₩\":\"\",\"₪\":\"\",\"₫\":\"\",\"€\":\"\",\"₭\":\"\",\"₮\":\"\",\"₯\":\"\",\"₰\":\"\",\"₱\":\"\",\"₲\":\"\",\"₳\":\"\",\"₴\":\"\",\"₵\":\"\",\"₸\":\"\",\"₹\":\"\",\"₽\":\"\",\"₿\":\"\",\"∂\":\"\",\"∆\":\"\",\"∑\":\"\",\"∞\":\"\",\"♥\":\"\",元:\"\",円:\"\",\"﷼\":\"\"});var o=function(){\"use strict\";function t(e){!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,t),this.field=e,this.setTargetElement(),this.locked=!0,this.field.setAttribute(\"readonly\",\"readonly\"),\"\"===this.field.value?(this.currentSlug=\"\",this.updateValue(),this.listenTarget()):this.currentSlug=this.field.value,this.appendLockButton()}var n,o,i;return n=t,(o=[{key:\"setTargetElement\",value:function(){var t=JSON.parse(this.field.dataset.target);this.targets=[];var n,r=e(t);try{for(r.s();!(n=r.n()).done;){var a=n.value,o=document.getElementById(a);if(null===o)throw'Wrong target specified for slug widget (\"'.concat(a,'\").');this.targets.push(o)}}catch(e){r.e(e)}finally{r.f()}}},{key:\"appendLockButton\",value:function(){var e=this;this.lockButton=this.field.parentNode.querySelector(\"button\"),this.lockButtonIcon=this.lockButton.querySelector(\"i\"),this.lockButton.addEventListener(\"click\",(function(){if(e.locked){var t=e.field.dataset.confirmText||null;if(null===t)e.unlock();else{var n=decodeURIComponent(JSON.parse('\"'+t.replace(/\\\"/g,'\\\\\"')+'\"'));!0===confirm(n)&&e.unlock()}}else e.lock()}))}},{key:\"unlock\",value:function(){this.locked=!1,this.lockButtonIcon.classList.replace(\"fa-lock\",\"fa-lock-open\"),this.field.removeAttribute(\"readonly\")}},{key:\"lock\",value:function(){this.locked=!0,this.lockButtonIcon.classList.replace(\"fa-lock-open\",\"fa-lock\"),\"\"!==this.currentSlug?this.field.value=this.currentSlug:this.updateValue(),this.field.setAttribute(\"readonly\",\"readonly\")}},{key:\"updateValue\",value:function(){this.field.value=a(this.targets.map((function(e){return e.value})).join(\"-\"),{remove:/[^A-Za-z0-9\\s-]/g,lower:!0,strict:!0})}},{key:\"listenTarget\",value:function(){var t,n=this,r=e(this.targets);try{for(r.s();!(t=r.n()).done;)t.value.addEventListener(\"keyup\",(function(){\"readonly\"===n.field.getAttribute(\"readonly\")&&n.updateValue()}))}catch(e){r.e(e)}finally{r.f()}}}])&&r(n.prototype,o),i&&r(n,i),Object.defineProperty(n,\"prototype\",{writable:!1}),t}();document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll(\"[data-ea-slug-field]\").forEach((function(e){new o(e)}))}))})()})();", "easycorp/easyadmin-bundle/src/Resources/public/field-slug.7eed3cdc.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\field-slug.7eed3cdc.js");
    }
}