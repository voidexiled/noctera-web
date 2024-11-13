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

/* library/seagull.html.twig */
class __TwigTemplate_819ebe13f56be1c527fe82aa7e8862dd extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=serpentspawn\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=seacrest\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Seagulls</h2>  <img src=\"images/library/seagull.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The seagull is a harmless bird that can be found at the coasts of the realms. Although not dangerous, a single low-flying seagull is often seen as a bad omen by sailors. Whereas a flock of seagulls normally announces the proximity of land, they are often referred to as the vultures of the seas. Old sea dogs claim that seagulls actually know when a storm will come and so they gather in anticipation of the feast that will be held with the remains of the storm. The flesh of seagulls is inedible which sailors see as another proof of the ill nature of seagulls. Some claim they are the spies of evil sorcerers or even malignant spirits.</p>  <p>Seagulls have 25 hitpoints. It takes 250 mana to summon or convince these creatures.</p>  <p>Seagulls yield 0 experience points. They carry nothing with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/seagull.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/seagull.html.twig", "/var/www/html/system/templates/library/seagull.html.twig");
    }
}
