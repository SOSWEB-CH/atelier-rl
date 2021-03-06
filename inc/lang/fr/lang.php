<?php
/**
 * french language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sébastien Bauer <sebastien.bauer@advalvas.be>
 * @author     Antoine Fixary <antoine.fixary@freesbee.fr>
 * @author     cumulus <pta-n56@myamail.com>
 * @author     Gwenn Gueguen <contact@demisel.net>
 * @author     Guy Brand <gb@isis.u-strasbg.fr>
 * @author     Fabien Chabreuil <fabien@integralpersonality.com>
 * @author     Stéphane Chamberland <stephane.chamberland@ec.gc.ca>
 */
$lang['encoding']   = 'utf-8';
$lang['direction']  = 'ltr';

$lang['btn_edit']   = 'Éditer cette page';
$lang['btn_source'] = 'Afficher le texte source';
$lang['btn_show']   = 'Afficher la page';
$lang['btn_create'] = 'Créer cette page';
$lang['btn_search'] = 'Rechercher';
$lang['btn_save']   = 'Sauver';
$lang['btn_preview']= 'Aperçu';
$lang['btn_top']    = 'Haut de page';
$lang['btn_newer']  = '<< plus récent';
$lang['btn_older']  = 'moins récent >>';
$lang['btn_revs']   = 'Anciennes révisions';
$lang['btn_recent'] = 'Derniers changements';
$lang['btn_upload'] = 'Envoyer';
$lang['btn_cancel'] = 'Annuler';
$lang['btn_index']  = 'Index';
$lang['btn_secedit']= 'Éditer';
$lang['btn_login']  = 'Connexion';
$lang['btn_logout'] = 'Déconnexion';
$lang['btn_admin']  = 'Admin';
$lang['btn_update'] = 'Mise à jour';
$lang['btn_delete'] = 'Effacer';
$lang['btn_back']   = 'Retour';
$lang['btn_backlink']    = 'Liens vers cette page';
$lang['btn_backtomedia'] = 'Retour à la sélection du ficher média';
$lang['btn_subscribe']   = 'Notifier les modifications';
$lang['btn_unsubscribe'] = 'Ne pas notifier les modifications';
$lang['btn_profile']    = 'Mettre à jour le profil';
$lang['btn_reset']     = 'Réinitialiser';
$lang['btn_resendpwd'] = 'Envoyer le mot de passe';
$lang['btn_draft']    = 'Éditer brouillon';
$lang['btn_recover']  = 'Récupérer brouillon';
$lang['btn_draftdel'] = 'Effacer brouillon';

$lang['loggedinas'] = 'Connecté en tant que';
$lang['user']       = 'Utilisateur';
$lang['pass']       = 'Mot de passe';
$lang['newpass']    = 'Nouveau mot de passe';
$lang['oldpass']    = 'Mot de passe actuel';
$lang['passchk']    = 'Répéter nouveau mot de passe';
$lang['remember']   = 'Mémoriser';
$lang['fullname']   = 'Nom complet';
$lang['email']      = 'Adresse de courriel';
$lang['register']   = 'S\'enregistrer';
$lang['profile']    = 'Profil utilisateur';
$lang['badlogin']   = 'L\'utilisateur ou le mot de passe est incorrect.';
$lang['minoredit']  = 'Mineur';
$lang['draftdate']  = 'Brouillon auto-enregistré le'; // full dformat date will be added

$lang['regmissing'] = 'Désolé, vous devez remplir tous les champs.';
$lang['reguexists'] = 'Désolé, ce nom d\'utilisateur appartient déjà à un autre utilisateur.';
$lang['regsuccess'] = 'L\'utilisateur a été créé. Le mot de passe a été expédié par courriel.';
$lang['regsuccess2']= 'L\'utilisateur a été créé';
$lang['regmailfail'] = 'Il semble y avoir un problème à l\'envoi du courriel. Contactez l\'administrateur.';
$lang['regbadmail']  = 'L\'adresse mail semble incorrecte - Si vous pensez que c\'est une erreur, contactez l\'administrateur.';
$lang['regbadpass'] = 'Les deux mots de passe donnés sont différents, recommencez SVP';
$lang['regpwmail']   = 'Votre mot de passe DokuWiki';
$lang['reghere']     = 'Vous n\'avez pas encore de compte ? Enregistrez-vous ici';

$lang['profna']       = 'Ce wiki ne permet pas de modifier les profils';
$lang['profnochange'] = 'Pas de changement, rien à faire.';
$lang['profnoempty']  = 'Un nom ou une adresse de courriel vide n\'est pas permis.';
$lang['profchanged']  = 'Mise à jour du profil réussie.';

$lang['pwdforget'] = 'Mot de passe oublié ? Faites-vous envoyer votre mot de passe';
$lang['resendna']  = 'Ce wiki ne permet pas le renvoi de mot de passe.';
$lang['resendpwd'] = 'Renvoyer le mot de passe de';
$lang['resendpwdmissing'] = 'Désolé, vous devez remplir tous les champs.';
$lang['resendpwdnouser']  = 'Désolé, cet utilisateur est introuvable dans notre base.';
$lang['resendpwdbadauth'] = 'Désolé, ce code d\'authentification est invalide. Assurez vous d\'avoir utilisé le lien de confirmation.';
$lang['resendpwdconfirm'] = 'Un lien de confirmation vous a été envoyé par courriel.';
$lang['resendpwdsuccess'] = 'Votre nouveau mot de passe vous a été expédié par courriel.';

$lang['txt_upload'] = 'Sélectionnez un fichier à envoyer ';
$lang['txt_filename'] = 'Donnez un "wikiname" (optionnel) ';
$lang['txt_overwrt']  = 'Écraser le fichier cible';
$lang['lockedby']     = 'Actuellement bloqué par';
$lang['lockexpire']   = 'Le blocage expire à';
$lang['willexpire']   = 'Votre blocage pour modifier cette page expire dans une minute.\nPour éviter les conflits, utiliser le bouton Aperçu pour réinitialiser le minuteur.';

$lang['notsavedyet'] = 'Les changements non enregistrés seront perdus.\nVoulez-vous vraiment continuer ?';
$lang['rssfailed']   = 'Une erreur s\'est produite en cherchant ce champ : ';
$lang['nothingfound']= 'Pas de réponse.';

$lang['mediaselect'] = 'Sélection de fichier';
$lang['fileupload']  = 'Envoi de fichier';
$lang['uploadsucc']  = 'Envoi réussi.';
$lang['uploadfail']  = 'L\'envoi n\'a pas réussi. Veuillez contacter l\'administrateur';
$lang['uploadwrong'] = 'Envoi refusé. Cette extension de fichier est interdite';
$lang['uploadexist'] = 'Le fichier existe. Rien n\'est fait';
$lang['deletesucc']  = 'Le fichier "%s" a été effacé';
$lang['deletefail']  = 'Le fichier "%s" n\'a pu être effacé - vérifier les permissions';
$lang['mediainuse']  = 'Le fichier "%s" n\'a pas été effacé - il est en cours d\'utilisation';
$lang['namespaces']  = 'Catégories';
$lang['mediafiles']  = 'Fichiers disponibles dans';

$lang['js']['keepopen']    = 'Gardez la fenêtre ouverte pendant la sélection';
$lang['js']['hidedetails'] = 'Masquer détails';
$lang['mediausage']  = 'Utilisez la syntaxe suivante pour faire référence à ce fichier :';
$lang['mediaview']   = 'Voir fichier original';
$lang['mediaroot']   = 'root';
$lang['mediaupload'] = 'Envoyer un fichier dans la catégorie courante ici. Pour créer des sous-catégories, préfixez le nom du fichier par le nom de la sous-catégorie séparée par un double point.';
$lang['mediaextchange'] = 'Extension du fichier changée de .%s en .%s!';

$lang['reference']   = 'Références pour';
$lang['ref_inuse']   = 'Le fichier ne peut être effacé, il est toujours utilisé par les pages suivantes:';
$lang['ref_hidden']  = 'Quelques références sont sur des pages que vous n\'avez pas la permission de lire';

$lang['hits']       = 'occurrences trouvées';
$lang['quickhits']  = 'Pages trouvées ';
$lang['toc']        = 'Table des matières';
$lang['current']    = 'version actuelle';
$lang['yours']      = 'votre version';
$lang['diff']       = 'différences avec la version actuelle';
$lang['line']       = 'Ligne';
$lang['breadcrumb'] = 'Piste';
$lang['youarehere'] = 'Vous êtes ici';
$lang['lastmod']    = 'Dernière modification';
$lang['by']         = 'par';
$lang['deleted']    = 'effacée';
$lang['created']    = 'créée';
$lang['restored']   = 'ancienne révision restaurée';
$lang['summary']    = 'Résumé';

$lang['mail_newpage'] = 'page ajoutée :';
$lang['mail_changed'] = 'page changée :';
$lang['mail_new_user'] = 'Nouvel utilisateur :';

$lang['nosmblinks'] = 'Les liens vers les partages Windows ne fonctionnent qu\'avec Microsoft Internet Explorer.\nVous pouvez toujours faire un copier/coller du lien.';

$lang['qb_alert']   = 'SVP, entrez le texte que vous souhaitez formater.\nIl sera ajouté à la fin du document.';
$lang['qb_bold']    = 'Gras';
$lang['qb_italic']  = 'Italique';
$lang['qb_underl']  = 'Souligné';
$lang['qb_code']    = 'Code';
$lang['qb_strike']  = 'Texte barré';
$lang['qb_h1']      = 'En-tête 1';
$lang['qb_h2']      = 'En-tête 2';
$lang['qb_h3']      = 'En-tête 3';
$lang['qb_h4']      = 'En-tête 4';
$lang['qb_h5']      = 'En-tête 5';
$lang['qb_link']    = 'Lien interne';
$lang['qb_extlink'] = 'Lien externe';
$lang['qb_hr']      = 'Ligne horizontale';
$lang['qb_ol']      = 'Liste numérotée';
$lang['qb_ul']      = 'Liste à puce';
$lang['qb_media']   = 'Ajouter des images et autres fichiers';
$lang['qb_sig']     = 'Insérer une signature';
$lang['qb_smileys'] = 'Émoticons';
$lang['qb_chars']   = 'Caractères spéciaux';

$lang['del_confirm']= 'Effacer cette entrée ?';
$lang['admin_register']= 'Ajouter un nouvel utilisateur';

$lang['spell_start'] = 'Vérifier l\'orthographe';
$lang['spell_stop']  = 'Reprendre l\'édition';
$lang['spell_wait']  = 'Patientez SVP...';
$lang['spell_noerr'] = 'Aucune erreur trouvée';
$lang['spell_nosug'] = 'Pas de suggestion';
$lang['spell_change']= 'Changer';

$lang['metaedit']    = 'Éditer les metadonnées';
$lang['metasaveerr'] = 'Erreur à l\'écriture des metadonnées';
$lang['metasaveok']  = 'Metadonnées enregistrées';
$lang['img_backto']  = 'Retour à';
$lang['img_title']   = 'Titre';
$lang['img_caption'] = 'Légende';
$lang['img_date']    = 'Date';
$lang['img_fname']   = 'Nom de fichier';
$lang['img_fsize']   = 'Taille';
$lang['img_artist']  = 'Auteur';
$lang['img_copyr']   = 'Copyright';
$lang['img_format']  = 'Format';
$lang['img_camera']  = 'Appareil photo';
$lang['img_keywords']= 'Mots clef';

$lang['subscribe_success']  = 'Ajout de %s à la liste d\'abonnés de %s';
$lang['subscribe_error']    = 'Erreur à l\'ajout de %s à la liste d\'abonnés de %s';
$lang['subscribe_noaddress']= 'Aucune adresse associée à votre nom d\'utilisateur, impossible de vous ajouter à la liste d\'abonnés';
$lang['unsubscribe_success']= 'Suppression de %s de la liste d\'abonnés de %s';
$lang['unsubscribe_error']  = 'Erreur à la suppression de %s de la liste d\'abonnés de %s';

/* auth.class language support */
$lang['authmodfailed']   = 'Mauvais paramétrage de l\'authentification. Merci d\'informer l\'administrateur du Wiki.';
$lang['authtempfail']    = 'L\'authentification est temporairement indisponible. Si cela perdure, merci d\'informer l\'administrateur du Wiki.';

/* installer strings */
$lang['i_chooselang'] = 'Choisissez votre langue';
$lang['i_installer']  = 'DokuWiki Installeur';
$lang['i_wikiname']   = 'Nom du Wiki';
$lang['i_enableacl']  = 'Activer ACL (recommandé)';
$lang['i_superuser']  = 'Super-utilisateur';
$lang['i_problems']   = 'The installer found some problems, indicated below. You can not continue until you have fixed them.';
$lang['i_modified']   = 'Pour des raisons de sécurité ce script ne fonctionne qu\'avec une installation neuve et non modifiée de Dokuwiki.
                         Vous devriez soit ré-extraire les fichiers depuis le paquet téléchargé soit consulter les
                         <a href="http://wiki.splitbrain.org/wiki:install">instructions d\'installation de Dokuwiki</a>';
$lang['i_funcna']     = 'La fonction PHP <code>%s</code> n\'est pas disponible. Peut-être que votre hébergeur l\'a désactivée ?';
$lang['i_phpver']     = 'Votre version de PHP (<code>%s</code>) est antérieure à la version requise (<code>%s</code>. Vous devez mettre à jour votre installation de PHP.';
$lang['i_permfail']   = '<code>%s</code> n\'est pas accessible en écriture DokuWiki. Vous devez corriger les permissions de ce répertoire !';
$lang['i_confexists'] = '<code>%s</code> existe déjà';
$lang['i_writeerr']   = 'Impossible de créer <code>%s</code>. Vous devez vérifier les permissions des répertoires/fichiers et créer le fichier manuellement.';
$lang['i_badhash']    = 'dokuwiki.php non reconnu ou modifié (hash=<code>%s</code>)';
$lang['i_badval']     = '<code>%s</code> - valeur illégale ou vide';
$lang['i_success']    = 'L\'installation s\'est terminée avec succès. Vous pouvez maintenant supprimer le fichier install.php. Continuer avec
                        <a href="doku.php">votre nouveau DokuWiki</a>.';
$lang['i_failure']    = 'Des erreurs sont survenues lors de l\'écriture des fichiers de configuration. Il vous faudra les corriger manuellement avant 
                         de pouvoir utiliser <a href="doku.php">votre nouveau DokuWiki</a>.';
$lang['i_policy']     = 'Politique d\'ACL initiale';
$lang['i_pol0']       = 'Wiki ouvert (lecture, écriture, envoi de fichiers pour tout le monde)';
$lang['i_pol1']       = 'Wiki public (lecture pour tout le monde, écriture et envoi de fichiers pour les utilisateurs enregistrés)';
$lang['i_pol2']       = 'Wiki fermé (lecture, écriture, envoi de fichiers pour les utilisateurs enregistrés uniquement)';

$lang['i_retry']      = 'Réessayer';

//Setup VIM: ex: et ts=2 enc=utf-8 :
