<?php
/**
 * Czech language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Tomas Valenta <t.valenta@sh.cvut.cz>
 */

$lang['menu'] = 'Správa pluginů'; 

// custom language strings for the plugin
$lang['download'] = "Stáhnout a instalovat plugin";
$lang['manage'] = "Seznam instalovaných pluginů";

$lang['btn_info'] = 'info';
$lang['btn_update'] = 'aktualizovat';
$lang['btn_delete'] = 'smazat';
$lang['btn_settings'] = 'nastavení';
$lang['btn_download'] = 'Stáhnout';
$lang['btn_enable'] = 'Uložit';

$lang['url']              = 'URL';

$lang['installed']        = 'Instalován:';
$lang['lastupdate']       = 'Poslední aktualizace:';
$lang['source']           = 'Zdroj:';
$lang['unknown']          = 'neznámý';

// ..ing = header message
// ..ed = success message

$lang['updating']         = 'Aktualizuji ...';
$lang['updated']          = 'Modul %s úspěšně aktualizován';
$lang['updates']          = 'Následjící pluginy byly úspěšně aktualizovány';
$lang['update_none']      = 'Žádné aktualizace nenalezeny.';

$lang['deleting']         = 'Probíhá mazání ...';
$lang['deleted']          = 'Modul %s smazán.';

$lang['downloading']      = 'Stahuji ...';
$lang['downloaded']       = 'Modul %s nainstalován';
$lang['downloads']        = 'Následující pluginy byly úspěšně instalovány:';
$lang['download_none']    = 'Žádné pluginy nebyly nenalezeny, nebo se vyskytla nečekaná chyba.';

// info titles
$lang['plugin']           = 'Modul:';
$lang['components']       = 'Součásti';
$lang['noinfo']           = 'Modul nevrátil žádné informace, může být poškozen nebo špatný.';
$lang['name']             = 'Jméno:';
$lang['date']             = 'Datum:';
$lang['type']             = 'Typ:';
$lang['desc']             = 'Popis:';
$lang['author']           = 'Autor:';
$lang['www']              = 'Web:';
    
// error messages
$lang['error']            = 'Nastala neznámá chyba.';
$lang['error_download']   = 'Nelze stáhnout soubor s pluginem: %s';
$lang['error_badurl']     = 'URL je zřejmě chybná - nelze z ní určit název souboru';
$lang['error_dircreate']  = 'Nelze vytvořit dočasný adresář ke stažení dat';
$lang['error_decompress'] = 'Správce pluginů nemůže rozbalit stažený soubor. '.
                            'Toto může být způsobeno chybou při stahování. Můžete se pokusit stahování opakovat '.
                            'Chyba může být také v kompresním formátu souboru. V tom případě bude nutné stáhnout '.
                            'a nainstalovat plugin ručně.';
$lang['error_copy']       = 'Došlo k chybě při instalaci pluginu <em>%s</em>. Je možné, že na disku není volné '.
                            'místo, nebo mohou být špatně nastavena přístupová práva. Pozor, mohlo dojít '.
                            'k častečné a tudíž chybné instalaci pluginu a tím může být ohrožena stabilita wiki. ';
$lang['error_delete']     = 'Došlo k chybě při pokusu o smazání pluginu <em>%s</em>. '.
                            'Nejspíše je chyba v nastavení přístupových práv k některým souborům či adresářům.';

//Setup VIM: ex: et ts=4 enc=utf-8 :
