<?php
global $dbPath;
include __DIR__."/../../".$dbPath."config/dashboard.php";

$string["homeNavbar"] = "Casa";
$string["welcome"] = "Benvenuto a ".$gdps.'!';
$string["didntInstall"] = "<div style='color:#47a0ff'><b>Attenzione!</b> Non hai installato completamente la dashboard! Fare clic sul testo per farlo.</div>";
$string["levelsWeek"] = "Livelli caricati in una settimana";
$string["levels3Months"] = "Livelli caricati in 3 mesi";
$string["footer"] = $gdps.", ".date('Y', time());
$string["tipsAfterInstalling"] = "Benvenuto su Dashboard! Ti diamo alcuni suggerimenti dopo l'installazione:<br>
1. Sembra che siano apparsi nuovi permessi in SQL nella tabella "ruoli"! Si dovrebbe controllare...<br>
2. Se inserisci 'icon.png' nella cartella 'dashboard', l'icona del tuo GDPS apparirà in alto a sinistra!<br>
3. Dovresti configurare config/dashboard.php!";
$string["wwygdt"] = "Che farai oggi?";
$string["game"] = "Gioco";
$string["guest"] = "ospite";
$string["account"] = "Account";
$string["levelsOptDesc"] = "Visualizza l'elenco dei livelli";
$string["songsOptDesc"] = "Visualizza l'elenco dei brani";
$string["yourClanOptDesc"] = "Visualizza i clan \"%s\"";
$string["clanOptDesc"] = "Visualizza l'elenco dei clan";
$string["yourProfile"] = "Il tuo profilo";
$string["profileOptDesc"] = "Visualizza il tuo profilo";
$string["messengerOptDesc"] ="Apri i messaggi";
$string["addSongOptDesc"] = "Aggiungi brano al server";
$string["loginOptDesc"] = "Accedi all'account";
$string["createAcc"] = "Crea un account";
$string["registerOptDesc"] = "Registrati su %s";
$string["downloadOptDesc"] = "Scarica %s";

$string["tryCron"] = "Esegui Cron";
$string["cronSuccess"] = "Eseguito con successo!";
$string["cronError"] = "Errore!";

$string["profile"] = "Profilo";
$string["empty"] = "Vuoto...";
$string["writeSomething"] = "Scrivi qualcosa!";  
$string["replies"] = "Risposte";
$string["replyToComment"] = "Rispondi a un commento";
$string["settings"] = "Impostazioni";
$string["allowMessagesFrom"] = "Consenti messaggi da...";
$string["allowFriendReqsFrom"] = "Consenti richieste di amicizia da...";
$string["showCommentHistory"] = "Mostra la cronologia dei commenti...";
$string["timezoneChoose"] = "Scegli il fuso orario";
$string["yourYouTube"] = "Il tuo canale YouTube";
$string["yourVK"] = "La tua pagina su VK";
$string["yourTwitter"] = "La tua pagina su Twitter";
$string["yourTwitch"] = "Il tuo canale Twitch";
$string["saveSettings"] = "Salva le impostazioni";
$string["all"] = "Tutto";
$string["friends"] = "Amici";
$string["none"] = "Nessuno";
$string["youBlocked"] = "Questo giocatore ti ha bloccato!";
$string["cantMessage"] = "Non puoi inviare messaggi a questo giocatore!";
  
$string["accountManagement"] = "Gestione account";
$string["changePassword"] = "Cambia la parola d'ordine";
$string["changeUsername"] = "Cambia nome utente";
$string["unlistedLevels"] = "I tuoi livelli non elencati";

$string["manageSongs"] = "Gestisci i brani";
$string["gauntletManage"] = "Gestisci i guanti";
$string["suggestLevels"] = "Livelli suggeriti";

$string["modTools"] = "Strumenti di moderazione";
$string["leaderboardBan"] = "Banna un utente";
$string["unlistedMod"] = "Livelli non elencati";

$string["reuploadSection"] = "Ricarica";
$string["songAdd"] = "Aggiungi un brano";
$string["songLink"] = "Aggiungi un brano tramite link";
$string["packManage"] = "Gestisci i pacchetti di mappe";

$string["browse"] = "Naviga";
$string["statsSection"] = "Statistiche";
$string["dailyTable"] = "Livelli giornalieri";
$string["modActionsList"] = "Azioni mod";
$string["modActions"] = "Moderatori del server";
$string["gauntletTable"] = "Elenco dei guanti";
$string["packTable"] = "Elenco dei pacchetti mappe";
$string["leaderboardTime"] = "Avanzamento delle classifiche";

$string["download"] = "Scarica";
$string["forwindows"] = "Per Windows";
$string["forandroid"] = "Per Android";
$string["formac"] = "Per Mac";
$string["forios"] = "Per iOS";
$string["third-party"] = "Terze parti";
$string["thanks"] = "Grazie a queste persone!";
$string["language"] = "Lingua";

$string["loginHeader"] = "Benvenuto/a, %s!";
$string["logout"] = "Disconnettiti";
$string["login"] = "Accedi";
$string["wrongNickOrPass"] = "Nome utente o password errati!";
$string["invalidid"] = "ID non valido!";
$string["loginBox"] = "Accedi all'account";
$string["loginSuccess"] = "Hai effettuato correttamente l'accesso al tuo account!";
$string["loginAlready"] = "Hai già effettuato l'accesso!";
$string["clickHere"] = "Pannello di controllo";
$string["enterUsername"] = "Inserisci nome utente";
$string["enterPassword"] = "Inserisci la password";
$string["loginDesc"] = "Qui puoi accedere al tuo account!";

$string["register"] = "Registrati";
$string["registerAcc"] = "Registrazione dell'account";
$string["registerDesc"] = "Registra il tuo account!";
$string["repeatpassword"] = "Ripeti la password";
$string["email"] = "Email";
$string["repeatemail"] = "Conferma email";
$string["smallNick"] = "Il nome utente è troppo piccolo!";
$string["smallPass"] = "La password è troppo piccola!";
$string["passDontMatch"] = "Le password non corrispondono!";
$string["emailDontMatch"] = "Le email non corrispondono";
$string["registered"] = "Hai registrato con successo un account!";
$string["bigNick"] = "Il nome utente è troppo lungo!";
$string["mailExists"] = "C'è un account registrato che utilizza questa email!";
$string["badUsername"] = "Scegli un altro nome utente.";

$string["changePassTitle"] = "Cambia la password";
$string["changedPass"] = "Password cambiata con successo! Devi accedere nuovamente al tuo account.";
$string["wrongPass"] = "Password errata!";
$string["samePass"] = "Le password che hai inserito sono le stesse!";
$string["changePassDesc"] = "Qui puoi cambiare la tua password!";
$string["oldPassword"] = "Vecchia password";
$string["newPassword"] = "Nuova password";
$string["confirmNew"] = "Conferma password";

$string["forcePassword"] = "Forza la modifica della password";
$string["forcePasswordDesc"] = "Qui puoi forzare la modifica della password del giocatore!";
$string["forceNick"] = "Forza il cambio nome utente";
$string["forceNickDesc"] = "Qui puoi forzare il cambio del nome utente del giocatore!";
$string["forceChangedPass"] = "La password di <b>%s</b> è stata modificata con successo!";
$string["forceChangedNick"] = "Il nome utente di <b>%s</b> è stato modificato con successo!";
$string["changePassOrNick"] = "Cambia il nome utente o la password del giocatore";

$string["changeNickTitle"] = "Cambia nome utente";
$string["changedNick"] = "Nome utente modificato con successo! Devi accedere nuovamente al tuo account.";
$string["wrongNick"] = "Nome utente sbagliato!";
$string["sameNick"] = "I nomi utente che hai inserito sono gli stessi!";
$string["alreadyUsedNick"] = "Il nome utente che hai inserito è già occupato!";
$string["changeNickDesc"] = "Qui puoi cambiare il tuo nome utente!";
$string["oldNick"] = "Vecchio nome utente";
$string["newNick"] = "Nuovo nome utente";
$string["password"] = "Password";

$string["packCreate"] = "Crea un pacchetto di mappe";
$string["packCreateTitle"] = "Crea un pacchetto di mappe";
$string["packCreateDesc"] = "Qui puoi creare un pacchetto mappe!";
$string["packCreateSuccess"] = "Hai creato con successo un pacchetto di mappe chiamato";
$string["packCreateOneMore"] = "Un altro pacchetto mappe?";
$string["packName"] = "Nome del pacchetto mappe";
$string["color"] = "Colore";
$string["sameLevels"] = "Hai scelto gli stessi livelli!";
$string["show"] = "Mostra";
$string["packChange"] = "Cambia pacchetto mappa";
$string["createNewPack"] = "Crea un nuovo pacchetto mappe!"; // Translate word "create" like its call to action

$string["gauntletCreate"] = "Crea guanto di sfida";
$string["gauntletCreateTitle"] = "Crea guanto di sfida";
$string["gauntletCreateDesc"] = "Qui puoi creare un guanto di sfida!";
$string["gauntletCreateSuccess"] = "Hai creato con successo un guanto di sfida!";
$string["gauntletCreateOneMore"] = "Un altro guanto di sfida?";
$string["chooseLevels"] = "Scegli i livelli!";
$string["checkbox"] = "Conferma";
$string["level1"] = "Primo livello";
$string["level2"] = "Secondo livello";
$string["level3"] = "Terzo livello";
$string["level4"] = "Quarto livello";
$string["level5"] = "Quinto livello";
$string["gauntletChange"] = "Cambia guanto di sfida";
$string["createNewGauntlet"] = "Crea un nuovo guanto di sfida!"; // Translate word "create" like its call to action
$string["gauntletCreateSuccessNew"] = 'Hai creato <b>%1$s</b> con successo!';
$string["gauntletSelectAutomatic"] = "Scegli Gauntlet automaticamente";

$string["addQuest"] = "Aggiungi missione";
$string["addQuestDesc"] = "Qui puoi creare una missione!";
$string["questName"] = "Nome della missione";
$string["questAmount"] = "Importo richiesto";
$string["questReward"] = "Ricompensa";
$string["questCreate"] = "Crea una missione";
$string["questsSuccess"] = "Hai creato con successo una missione";
$string["invalidPost"] = "Dati non validi!";
$string["fewMoreQuests"] = "Si consiglia di creare qualche missione in più.";
$string["oneMoreQuest?"] = "Un'altra missione?";
$string["changeQuest"] = "Cambia missione";
$string["createNewQuest"] = "Crea una nuova missione!"; // like gauntlets and mappacks above

$string["levelReupload"] = "Ricarica il livello";
$string["levelReuploadDesc"] = "Qui puoi ricaricare un livello da qualsiasi server!";
$string["advanced"] = "Opzioni avanzate";
$string["errorConnection"] = "Errore di connessione!";
$string["levelNotFound"] = "Questo livello non esiste!";
$string["robtopLol"] = "A RobTop non piaci :c";
$string["sameServers"] = "Il server host e il server di destinazione sono gli stessi!";
$string["levelReuploaded"] = "Livello ricaricato! ID livello:";
$string["oneMoreLevel?"] = "Vuoi ricaricare un livello in più?";
$string["levelAlreadyReuploaded"] = "Livello già ricaricato!";
$string["server"] = "Server";
$string["levelID"] = "ID del livello";
$string["pageDisabled"] = "Questa pagina è disabilitata!";
$string["levelUploadBanned"] = "Ti è stato vietato caricare livelli!";

$string["activateAccount"] = "Attivazione dell'account";
$string["activateDesc"] = "Attiva il tuo account!";
$string["activated"] = "Il tuo account è stato attivato con successo!";
$string["alreadyActivated"] = "Il tuo account è già attivato";
$string["maybeActivate"] = "Forse non hai ancora attivato il tuo account.";
$string["activate"] = "Attiva";
$string["activateDisabled"] = "L'attivazione dell'account è disabilitata!";

$string["addMod"] = "Aggiungi moderatore";
$string["addModDesc"] = "Qui puoi promuovere qualcuno a Moderatore!";
$string["modYourself"] = "Non puoi concederti il ruolo di Moderatore!";
$string["alreadyMod"] = "Questo giocatore è già un moderatore!";
$string["addedMod"] = "Hai concesso con successo il ruolo di moderatore a un giocatore";
$string["addModOneMore"] = "Un moderatore in più?";
$string["modAboveYourRole"] = "Stai cercando di dare un ruolo superiore al tuo!";
$string["makeNewMod"] = "Rendi qualcuno moderatore!";
$string["reassignMod"] = "Riassegnare il moderatore";
$string["reassign"] = "Riassegna";
$string['demotePlayer'] = "Retrocedere il giocatore";
$string['demotedPlayer'] = "Hai retrocesso con successo <b>%s</b>!";
$string['addedModNew'] = "Hai promosso con successo <b>%s</b> a moderatore!";
$string['demoted'] = 'Retrocesso';

$string["shareCPTitle"] = "Condividi punti creatore";
$string["shareCPDesc"] = "Qui puoi condividere i punti creatore con il giocatore!";
$string["shareCP"] = "Condividi";
$string["alreadyShared"] = "Questo livello ha già condiviso CP con questo giocatore!";
$string["shareToAuthor"] = "Hai provato a condividere CP con l'autore del livello!";
$string["userIsBanned"] = "Questo giocatore è bannato!";
$string["shareCPSuccess"] = "Hai condiviso con successo i punti Creatore del livello";
$string["shareCPSuccess2"] = "a giocatore";
$string["updateCron"] = "Forse dovresti aggiornare i Punti Creatore.";
$string["shareCPOneMore"] = "Un'altra condivisione?";
$string['shareCPSuccessNew'] = 'Hai condiviso con successo i punti creatore del livello <b>%1$s</b> con il giocatore <b>%2$s</b>!';

$string["messenger"] = "Messaggi";
$string["write"] = "Scrivi";
$string["send"] = "Invia";
$string["noMsgs"] = "Inizia il dialogo!";
$string["subject"] = "Soggetto";
$string["msg"] = "Messaggio";
$string["tooFast"] = "Stai digitando troppo velocemente!";

$string["levelToGD"] = "Ricarica il livello sul server di destinazione";
$string["levelToGDDesc"] = "Qui puoi ricaricare il tuo livello sul server di destinazione!";
$string["usernameTarget"] = "Nome utente per il server di destinazione";
$string["passwordTarget"] = "Password per il server di destinazione";
$string["notYourLevel"] = "Questo non è il tuo livello!";
$string["reuploadFailed"] = "Errore di ricaricamento del livello!";

$string["search"] = "Ricerca...";
$string["searchCancel"] = "Annulla la ricerca";
$string["emptySearch"] = "Non abbiamo trovato nulla!";

$string["demonlist"] = 'Demonlist';
$string["demonlistRecord"] = 'Il record di <b>%s</b>';
$string["alreadyApproved"] = 'Già approvato!';
$string["alreadyDenied"] = 'Già negato!';
$string["approveSuccess"] = 'Hai approvato con successo il record di <b>%s</b>!';
$string["denySuccess"] = 'Hai negato con successo il record di <b>%s</b>!';
$string["recordParameters"] = '<b>%s</b> ha battuto <b>%s</b> in <b>%d</b> tentativi';
$string["approve"] = 'Approva';
$string["deny"] = 'Nega';
$string["submitRecord"] = 'Invia record';
$string["submitRecordForLevel"] = 'Invia record per <b>%s</b>';
$string["alreadySubmitted"] = 'Hai già inviato un record per <b>%s</b>!';
$string["submitSuccess"] = 'Hai inviato con successo un record per <b>%s</b>!';
$string["submitRecordDesc"] = 'Invia i record solo se hai superato il livello!';
$string["atts"] = 'Tentativi';
$string["ytlink"] = 'ID video di YouTube (dQw4w9WgXcQ)';
$string["submit"] = 'Invia';
$string["addDemonTitle"] = 'Aggiungi demone';
$string["addDemon"] = 'Aggiungi demone alla lista dei demoni';
$string["addedDemon"] = 'Sei stato aggiunto <b>%s</b> al posto <b>%d</b>!';
$string["addDemonDesc"] = 'Qui puoi aggiungere un demone alla lista dei demoni!';
$string["place"] = 'Posto';
$string["giveablePoints"] = 'Punti cedibili';
$string["add"] = 'Aggiungi';
$string["recordApproved"] = 'Registrazione approvata!';
$string["recordDenied"] = 'Registrazione negata!';
$string["recordSubmitted"] = 'Registrazione inviata!';
$string["nooneBeat"] = 'nessuno ha battuto'; //let it be lowercase
$string["oneBeat"] = '1 giocatore ha battuto'; 
$string["lower5Beat"] = '%d giocatori hanno battuto'; // russian syntax, sorry
$string["above5Beat"] = '%d giocatori hanno battuto'; 
$string["demonlistLevel"] = '%s <text class="dltext">di <button type="button" onclick="a(\'profile/%3$s\', true, true)" style="font-size:25px" class="accbtn" name="accountID" value="%d">%s</button></text>';
$string["noDemons"] = 'Sembra che la tua lista dei demoni non abbia demoni...';
$string["addSomeDemons"] = 'Aggiungi alcuni demoni per riempire la lista dei demoni!';
$string["askForDemons"] = 'Chiedi all\'amministratore del server di aggiungerne alcuni!';
$string["recordList"] = 'Elenco dei record';
$string["status"] = 'Statistiche';
$string["checkRecord"] = 'Controlla il registro';
$string["record"] = 'Record';
$string["recordDeleted"] = 'La registrazione è stata cancellata!';
$string["changeDemon"] = 'Cambia demone';
$string["demonDeleted"] = 'Il demone è stato eliminato!';
$string["changedDemon"] = 'Hai sostituito <b>%s</b> con <b>%d</b> luogo!';
$string["changeDemonDesc"] = 'Qui puoi cambiare un demone!<br>
Se vuoi eliminare il demone, imposta place su 0.';

$string["didntActivatedEmail"] = 'Non hai attivato il tuo account tramite email!';
$string["checkMail"] = 'Dovresti controllare la tua email...';

$string["likeSong"] = "Aggiungi il brano ai preferiti";
$string["dislikeSong"] = "Rimuovi il brano dai preferiti";
$string["favouriteSongs"] = "Brani preferiti";
$string["howMuchLiked"] = "Quanto è piaciuto?";
$string["nooneLiked"] = "A nessuno è piaciuto";

$string["clan"] = "Clan";
$string["joinedAt"] = "Unito al clan a: <b>%s</b>";
$string["createdAt"] = "Clan creato a: <b>%s</b>";
$string["clanMembers"] = "Membri del clan";
$string["noMembers"] = "Nessun membro";
$string["clanOwner"] = "Proprietario del clan";
$string["noClanDesc"] = "<i>Nessuna descrizione</i>";
$string["noClan"] = "Questo clan non esiste!";
$string["clanName"] = "Nome del clan";
$string["clanTag"] = "Tag del clan (3-5 caratteri)";
$string["clanDesc"] = "Descrizione del clan";
$string["clanColor"] = "Colore del clan";
$string["dangerZone"] = "Zona pericolosa";
$string["giveClan"] = "Dai clan";
$string["deleteClan"] = "Elimina clan";
$string["goBack"] = "Torna indietro";
$string["areYouSure"] = "Sei sicuro?";
$string["giveClanDesc"] = "Qui puoi dare il tuo clan a un giocatore.";
$string["notInYourClan"] = "Questo giocatore non è nel tuo clan!";
$string["givedClan"] = "Hai ceduto con successo il tuo clan a <b>%s</b>!";
$string["deletedClan"] = "Hai eliminato il clan <b>%s</b>.";
$string["deleteClanDesc"] = "Qui puoi eliminare il tuo clan.";
$string["yourClan"] = "Il tuo clan";
$string["members0"] = "<b>1</b> membro";
$string["members1"] = "<b>%d</b> membri"; 
$string["members2"] = "<b>%d</b> membri"; 
$string["noRequests"] = "Non ci sono richieste. Freddo!";
$string["pendingRequests"] = "Richieste del clan";
$string["closedClan"] = "Clan chiuso";
$string["kickMember"] = "Calcia un membro";
$string["leaveFromClan"] = "Abbandona il clan";
$string["askToJoin"] = "Invia richiesta di adesione";
$string["removeClanRequest"] = "Elimina la richiesta di adesione";
$string["joinClan"] = "Unisciti al clan";
$string["noClans"] = "Non ci sono clan";
$string["clans"] = "Clans";
$string["alreadyInClan"] = "Sei già nel clan!";
$string["createClan"] = "Crea clan";
$string["createdClan"] = "Hai creato con successo il clan <span style='font-weight:700;color:#%s'>%s</span>!";
$string["createClanDesc"] = "Qui puoi creare un clan!";
$string["create"] = "Crea";
$string["mainSettings"] = "Impostazioni principali";
$string["takenClanName"] = "Il nome di questo clan è già stato preso!";
$string["takenClanTag"] = "Questo tag clan è già stato preso!";

$string["suggestedName"] = '<button type="button" onclick="a(\'profile/%1$s\', true, true)" class="accbtn" name="accountID">%1$s</button><text class="dltext"> suggerito <b>%4$s%3$s</b> per</text><text class="levelname">%2$s</text>'; // %1$s - Mod username, %2$s - level name, %3$s - x stars, %4$s - Featured/Epic (%4$s%3$s - Featured, x stars)
$string["reportedName"] = '%1$s<text class="dltext"> è stato riportato</text><text class="levelname">%2$s</text>';

$string['listTable'] = "Liste";
$string['listTableMod'] = "Liste non elencate";
$string['listTableYour'] = "Le tue liste non elencate";

$string['forgotPasswordChangeTitle'] = "Cambia la password";
$string["successfullyChangedPass"] = "La password è stata modificata con successo!";
$string['forgotPasswordTitle'] = "Hai dimenticato la password?";
$string['maybeSentAMessage'] = "Ti invieremo un messaggio se questo account esiste.";
$string['forgotPasswordDesc'] = "Qui puoi richiedere il link per cambiare la password se l'hai dimenticata!";
$string['forgotPasswordButton'] = "Richiedi collegamento";

$string['sfxAdd'] = "Aggiungi effetti sonori";
$string["sfxAddError-5"] = "La dimensione di SFX è superiore ai megabyte di $sfxSize!";
$string["sfxAddError-6"] = "Qualcosa è andato storto durante il caricamento degli SFX!";
$string["sfxAddError-7"] = "Puoi caricare solo audio!";
$string['sfxAdded'] = 'Aggiunti effetti sonori';
$string['yourNewSFX'] = "Dai un'occhiata ai tuoi nuovi effetti sonori!";
$string["sfxAddAnotherBTN"] = "Un altro effetto sonoro?";
$string["sfxAddDesc"] = "Qui puoi aggiungere i tuoi effetti sonori!";
$string["chooseSFX"] = "Scegli effetti sonori";
$string["sfxAddNameFieldPlaceholder"] = "Nome";
$string['sfxs'] = 'Effetti sonori';
$string['sfxID'] = 'ID effetto sonoro';
$string['manageSFX'] = 'Gestisci gli effetti sonori';

$string['featureLevel'] = 'Livelli in primo piano';

$string['banList'] = 'Elenco delle persone vietate';
$string['expires'] = 'Scade';
$string['unbanPerson'] = 'Sbanna';
$string['IP'] = 'Indirizzo IP';
$string['noBanInPast'] = 'Non puoi bannare fino a quando non sarà passato!';
$string['banSuccess'] = 'Hai bannato con successo <b>%1$s</b> fino al <b>%3$s</b> a «<b>%2$s</b>»!';
$string['person'] = 'Persona';
$string['youAreBanned'] = 'Sei stato bannato fino al <b>%2$s</b> per il motivo:<br><b>%1$s</b>';
$string['banChange'] = 'Modifica';
$string['system'] = 'Sistema';

/*
	REUPLOAD
*/

$string["reuploadBTN"] = "Upload";
$string["errorGeneric"] = "Error appeared!";
$string["smthWentWrong"] = "Something went wrong!";
$string["tryAgainBTN"] = "Try again";
//songAdd.php
$string["songAddDesc"] = "Here you can add your song!";
$string["songAddUrlFieldLabel"] = "Song URL: (Direct or Dropbox links only)";
$string["songAddUrlFieldPlaceholder"] = "Song URL";
$string["songAddNameFieldPlaceholder"] = "Name";
$string["songAddAuthorFieldPlaceholder"] = "Author";
$string["songAddButton"] = "Choose song";
$string["songAddAnotherBTN"] = "Another Song?";
$string["songAdded"] = "Song added";
$string["deletedSong"] = "You successfully deleted song";
$string["renamedSong"] = "You successfully renamed song to";
$string["songID"] = "Song ID: ";
$string["songIDw"] = "Song ID";
$string["songAuthor"] = "Author";
$string["size"] = "Size";
$string["delete"] = "Delete";
$string["change"] = "Change";
$string["chooseFile"] = "Choose a song";
$string['yourNewSong'] = "Take a look at your new song!";
///errors
$string["songAddError-2"] = "Invalid URL";
$string["songAddError-3"] = "This song has been reuploaded already with ID:";
$string["songAddError-4"] = "This song isn't reuploadable";
$string["songAddError-5"] = "Song size is higher than $songSize megabytes";
$string["songAddError-6"] = "Something went wrong while uploading a song!";
$string["songAddError-7"] = "You can only upload audio!";

$string[400] = "Bad request!";
$string["400!"] = "Check drivers of your network hardware.";
$string[403] = "Forbidden!";
$string["403!"] = "You don't have access to this page!";
$string[404] = "Page not found!";
$string["404!"] = "Are you sure you typed address correctly?";
$string[500] = "Internal server error!";
$string["500!"] = "Coder made an mistake in the code,</br>
please say about this problem here:</br>
https://github.com/Cvolton/GMDprivateServer/pull/883";
$string[502] = "Server is down!";
$string["502!"] = "Load on the server is too big.</br>
Come back later within several hours!";

$string["invalidCaptcha"] = "Invalid captcha response!";
$string["page"] = "Page";
$string["emptyPage"] = "This page is empty!";

/*
	STATS
*/
$string["ID"] = "ID";
$string["orbs"] = "Orbs";
$string["stars"] = "Stars";
$string["coins"] = "Coins";
$string["accounts"] = "Accounts";
$string["levels"] = "Levels";
$string["songs"] = "Songs";
$string["author"] = "Creator";
$string["name"] = "Name";
$string["date"] = "Date";
$string["type"] = "Type";
$string["reportCount"] = "Report count";
$string["reportMod"] = "Reports";
$string["username"] = "Username";
$string["accountID"] = "Account ID";
$string["registerDate"] = "Register date";
$string["levelAuthor"] = "Level author";
$string["isAdmin"] = "Role on server";
$string["isAdminYes"] = "Yes";
$string["isAdminNo"] = "No";
$string["userCoins"] = "User Coins";
$string["time"] = "Time";
$string["deletedLevel"] = "Deleted Level";
$string["mod"] = "Moderator";
$string["count"] = "Amount of actions";
$string["ratedLevels"] = "Rated Levels";
$string["lastSeen"] = "Last Time Online";
$string["level"] = "Level";
$string["pageInfo"] = "Showing page %s of %s";
$string["first"] = "First";
$string["previous"] = "Previous";
$string["next"] = "Next";
$string["never"] = "Never";
$string["last"] = "Last";
$string["go"] = "Go";
$string["levelid"] = "Level ID";
$string["levelname"] = "Level name";
$string["leveldesc"] = "Level description";
$string["noDesc"] = "No description";
$string["levelpass"] = "Password";
$string["nopass"] = "No password";
$string["unrated"] = "Unrated";
$string["rate"] = "Rate";
$string["stats"] = "Stats";
$string["suggestFeatured"] = "Featured?";
$string["whoAdded"] = "Who added?";
$string["moons"] = "Moons";
//modActionsList
$string["banDesc"] = "Here you can ban a player!";
$string["playerTop"] = 'Top of players';
$string["creatorTop"] = 'Top of creators';
$string["levelUploading"] = 'Uploading levels';
$string["successfullyBanned"] = 'Player <b>%1$s</b> with account ID <b>%2$s</b> was successfully banned!';
$string["successfullyUnbanned"] = 'Player <b>%1$s</b> with account ID <b>%2$s</b> was successfully unbanned!';
$string["commentBan"] = 'Commenting';

$string["admin"] = "Administrator";
$string["elder"] = "Elder moderator";
$string["moder"] = "Moderator";
$string["player"] = "Player";

$string["starsLevel2"] = "stars";
$string["starsLevel1"] = "stars";
$string["starsLevel0"] = "star";
$string["coins2"] = "coins";
$string["coins1"] = "coins";
$string["coins0"] = "coin";
$string["time0"] = "time";
$string["time1"] = "times";
$string["times"] = "times";
$string["action0"] = "action";
$string["action1"] = "actions";
$string["action2"] = "actions";
$string["lvl0"] = "level";
$string["lvl1"] = "levels";
$string["lvl2"] = "levels";
$string["player0"] = "player";
$string["player1"] = "players";
$string["player2"] = "players";
$string["unban"] = "Unban";
$string["isBan"] = "Ban";

$string["noCoins"] = "Without coins";
$string["noReason"] = "No reason";
$string["noActions"] = "No actions";
$string["noRates"] = "No rates";

$string["future"] = "Future";

$string["spoiler"] = "Spoiler";
$string["accid"] = "with account ID";
$string["banned"] = "was successfully banned!";
$string["unbanned"] = "was successfully unbanned!";
$string["ban"] = "Ban";
$string["nothingFound"] = "This player doesn't exist!";
$string["banUserID"] = "Username or account ID";
$string["banUserPlace"] = "Ban a user";
$string["banYourself"] = "You can't ban yourself!"; 
$string["banYourSelfBtn!"] = "Ban someone else";
$string["banReason"] = "Ban reason";
$string["action"] = "Action";
$string["value"] = "1st value";
$string["value2"] = "2nd value";
$string["value3"] = "3rd value";
$string["modAction1"] = "Rated a level";
$string["modAction2"] = "Un/featured a level";
$string["modAction3"] = "Un/verified coins";
$string["modAction4"] = "Un/epiced a level";
$string["modAction5"] = "Set as daily feature";
$string["modAction6"] = "Deleted a level";
$string["modAction7"] = "Creator change";
$string["modAction8"] = "Renamed a level";
$string["modAction9"] = "Changed level password";
$string["modAction10"] = "Changed demon difficulty";
$string["modAction11"] = "Shared CP";
$string["modAction12"] = "Un/published level";
$string["modAction13"] = "Changed level description";
$string["modAction14"] = "Enabled/disabled LDM";
$string["modAction15"] = "Leaderboard un/banned";
$string["modAction16"] = "Song ID change";
$string["modAction17"] = "Created a Map Pack";
$string["modAction18"] = "Created a Gauntlet";
$string["modAction19"] = "Changed song";
$string["modAction20"] = "Granted a moderator to player";
$string["modAction21"] = "Changed Map Pack";
$string["modAction22"] = "Changed Gauntlet";
$string["modAction23"] = "Changed quest";
$string["modAction24"] = "Reassigned a player";
$string["modAction25"] = "Created a quest";
$string["modAction26"] = "Changed player's username/password";
$string["modAction27"] = "Changed SFX";
$string["modAction28"] = "Banned person";
$string["modAction30"] = "Rated list";
$string["modAction31"] = "Sent list";
$string["modAction32"] = "Un/featured list";
$string["modAction33"] = "Un/published list";
$string["modAction34"] = "Deleted list";
$string["modAction35"] = "Changed list's creator";
$string["modAction36"] = "Changed list's name";
$string["modAction37"] = "Changed list's description";
$string["everyActions"] = "Any actions";
$string["everyMod"] = "All moderators";
$string["Kish!"] = "Go away!";
$string["noPermission"] = "You don't have permission!";
$string["noLogin?"] = "You are not logged into your account!";
$string["LoginBtn"] = "Login into account";
$string["dashboard"] = "Dashboard";
$string["userID"] = 'User ID';
//errors
$string["errorNoAccWithPerm"] = "Error: No accounts with the '%s' permission have been found";
