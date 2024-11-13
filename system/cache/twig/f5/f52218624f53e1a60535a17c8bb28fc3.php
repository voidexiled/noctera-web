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

/* library/deeplingwarrior.html.twig */
class __TwigTemplate_4dc91c8dcf91c277f4da0ff2098f2d85 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=deeplingworker\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=deeplingspellsinger\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Deepling Warriors</h2>  <img src=\"images/library/deeplingwarrior.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The Deepling Warriors of the Njey are born with the fire of both suns in their hearts. Fierce and fearful creatures, prepared to squash all enemies of Qjell, they emerged from the depths. An event not so long ago drew their attention to the surface. Currently, they gather somewhere beneath the island of Quirefang.</p>  <p>Deepling Warriors have 1600 hitpoints. They are immune to fire and ice damage. Moreover, they are strong against death damage. On the other hand, they are weak against earth and energy damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p>  <p>Deepling Warriors yield 1500 experience points. They carry deepling filets, deepling ridges, deepling warts, deeptags, gold coins, great health potions, great mana potions and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/deeplingwarrior.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/deeplingwarrior.html.twig", "/var/www/html/system/templates/library/deeplingwarrior.html.twig");
    }
}
