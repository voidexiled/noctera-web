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

/* library/quaramantassin.html.twig */
class __TwigTemplate_73a1fe7889b288f7286ae442d2988022 extends \Twig\Template
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
        // line 1
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=quarapincher\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=quarahydromancer\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Quara Mantassins</h2>  <img src=\"images/library/quaramantassin.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The shrewd Quara Mantassins are often not recognised until it's too late. Like all quara, they have undergone massive modifications of their bodies which have made them an own subspecies. Especially in their native, maritime habitat, they are masters of camouflage and disguise. However, also on land they are known for stealthy sneak attacks. But away from their natural element, the water, they are weaker and easier to defeat.<br/>Usually they serve their race in special operations and they are the ones that target the leaders of their enemies in big battles. With an arsenal of tricks the Quara Mantassin are quite capable on their own. Their love for covert operations gives them their place in the quaran warfare but they are not seen too often in open battles. On the other hand, a Quara Mantassin that you do not see is four times deadlier than a Quara Mantassin that you do see.</p>  <p>Quara Mantassins have 800 hitpoints. They are immune to fire and ice damage. On the other hand, they are weak against earth and energy damage. It takes 480 mana to convince these creatures but they cannot be summoned.</p>  <p>Quara Mantassins yield 400 experience points. They carry gold coins, mantassin tails and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/quaramantassin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/quaramantassin.html.twig", "/var/www/html/system/templates/library/quaramantassin.html.twig");
    }
}
