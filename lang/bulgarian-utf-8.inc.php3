<?php
/* $Id$ */

/**
 * Translated by Stanislav Yordanov <stan at stud.ru.acad.bg>
 * Based on translation made by Georgi Georgiev <chutz at chubaka.homeip.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('байта', 'КБ', 'МБ', 'ГБ', 'ТБ', 'ПБ', 'ЕБ');

$day_of_week = array('нед', 'пон', 'вт', 'ср', 'чет', 'пет', 'съб');
$month = array('Януари', 'Февруари', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Окомври', 'Ноември', 'Декември');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y в %H:%M';

$timespanfmt = '%s дена, %s часа, %s минути и %s секунди';

$strAPrimaryKey = 'Бeшe добавен първичен ключ към ';
$strAbortedClients = 'Прекъснати';
$strAbsolutePathToDocSqlDir = 'Моля въведете абсолютния път на уеб сървъра до docSQL директорията';
$strAccessDenied = 'Отказан достъп';
$strAction = 'Действие';
$strAddDeleteColumn = 'Добави/изтрий колона по критерий';
$strAddDeleteRow = 'Добави/изтрий ред по критерий';
$strAddNewField = 'Добави ново поле';
$strAddPriv = 'Добавяне на нова привилегия';
$strAddPrivMessage = 'Вие добавихте нова привилегия.';
$strAddPrivilegesOnDb = 'Добави привилегии към следната база данни'; 
$strAddPrivilegesOnTbl = 'Добави привилегии към следната таблица';
$strAddSearchConditions = 'Добави условие за търсене (тяло за "where" условие):';
$strAddToIndex = ' &nbsp;%s&nbsp;колона(и) беше(яха)добавени към индекса ';
$strAddUser = 'Добавяне на нов потребител.';
$strAddUserMessage = 'Вие добавихте нов потребител.';
$strAddedColumnComment = 'Добавен коментар към колона';
$strAddedColumnRelation = 'Добавена релациа към колона';
$strAdministration = 'Администрация';
$strAffectedRows = 'Засегнати реда:';
$strAfter = 'След %s';
$strAfterInsertBack = 'се върни';
$strAfterInsertNewInsert = 'вмъкни нов запис';
$strAll = 'всички';
$strAllTableSameWidth = 'показване на всички Таблици с една и съща ширина?';
$strAlterOrderBy = 'Подреди таблицата по';
$strAnIndex = 'Беше добавен индекс на %s';
$strAnalyzeTable = 'Анализиране на таблицата';
$strAnd = 'и';
$strAny = 'всеки';
$strAnyColumn = 'Всяка колона';
$strAnyDatabase = 'Всяка база данни';
$strAnyHost = 'Всеки хост';
$strAnyTable = 'Всяка таблица';
$strAnyUser = 'Всеки потребител';
$strAscending = 'Възходящо';
$strAtBeginningOfTable = 'в началото на таблицата';
$strAtEndOfTable = 'в края на таблицата';
$strAttr = 'Атрибути';

$strBack = 'Назад';
$strBinary = ' Двоично ';
$strBinaryDoNotEdit = ' Двоично - не се редактира ';
$strBookmarkDeleted = 'Bookmark беше изтрит.';
$strBookmarkLabel = 'Етикет';
$strBookmarkQuery = 'Запазваме на SQL-запитване';
$strBookmarkThis = 'Запази това SQL-запитване';
$strBookmarkView = 'Само показване';
$strBrowse = 'Прелисти';
$strBzError = 'phpMyAdmin не може да компресира схемата(dump) заради грешка в Bz2 разширението в тази версия на PHP. Горещо се препоръчва да установите стойността на <code>$cfg[\'BZipDump\']</code> директивата в конкугурационния файл на вашия phpMyAdmin на <code>FALSE</code>. Ако искате да се използвате възможностите на Bz2 компресията, ще трябва да ъпгрейтнете до по-нова версия на PHP. Вижте съобщение %s за повече информация.';
$strBzip = '"bzip-нато"';

$strCannotLogin = 'Не мога да се логна към MySQL сървъра';
$strCantLoad = 'не мога да заредя разширението %s,<br />моля проверете конфигурацията на PHP';
$strCantLoadMySQL = 'Не мога да заредя MySQL разширенията,<br />моля проверете конфигурацията на PHP.';
$strCantLoadRecodeIconv = 'Не може да се заредят iconv или recode разширенията необходими за конвертиране на набора от символи(charset), конфигурурайте PHP така, че да позволява използване на тези разширения или отменете конвертирането на набора от символи(charset) в phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Не мога да преименувам индекса на PRIMARY!';
$strCantUseRecodeIconv = 'Не може да се използва нито iconv нито libiconv нито recode_string функцията докато протолколите за разширенията са заредени. Проверете конфигурацията на PHP.';
$strCardinality = 'надеждност';
$strCarriage = 'Символ за край на ред: \\r';
$strChange = 'Промени';
$strChangeCopyMode = 'Създай нов потребител със същите привилегии и ...';
$strChangeCopyModeCopy = '... запази стария.';
$strChangeCopyModeDeleteAndReload = ' ... изтрий стария от таблицата на потрбителите и след това презареди привилегиите.';
$strChangeCopyModeJustDelete = ' ... изтрий стария от таблицата на потребителите.';
$strChangeCopyModeRevoke = ' ... отмени всички активни привилегии от стария и след това го изтрий.';
$strChangeCopyUser = 'Промяна на логин информацията / Копиране на потребител';
$strChangeDisplay = 'Изберете Полета за показване';
$strChangePassword = 'Смяна на паролата';
$strCharsetOfFile = 'Набор от символи(Charset) на файла:';
$strCheckAll = 'Маркирай всичко';
$strCheckDbPriv = 'Провери привилегиите на БД';
$strCheckPrivs = 'Проверка на привилегиите';
$strCheckPrivsLong = 'Провери привилегиите за база данни &quot;%s&quot;.';
$strCheckTable = 'Проверка на таблицата';
$strChoosePage = 'Моля изберете страница за редактиране';
$strColComFeat = 'Показване на коментари към Колоните';
$strColumn = 'Колона';
$strColumnNames = 'Име на колона';
$strColumnPrivileges = 'Привилегии специфични за колоната';
$strCommand = 'Команда';
$strComments = 'Коментари';
$strCompleteInserts = 'Пълни INSERT-и';
$strCompression = 'Компресия'; 
$strConfigFileError = 'phpMyAdmin не може да прочете конфигурационният Ви файл!<br />Това може да се случи ако PHP открие синтактична грешка в него или не може да открие файла.<br />Моля извикайте конфигурационния файл директно като използвате линка по-долу и прочетете съобщението за грешка което PHP връща. В по-голяма част от случаите, някъде липсват кавички или точка и запетая.<br />Ако се изведе празна страница, всички е наред.';
$strConfigureTableCoord = 'Моля конфигурирайте координатите за таблица %s';
$strConfirm = 'Действително ли желаете да го направите?';
$strConnections = 'Конекции';
$strCookiesRequired = 'Оттук нататък са необходими "Cookies".';
$strCopyTable = 'Копиране на таблица (база от данни<b>.</b>таблица):';
$strCopyTableOK = 'Таблица %s беше копирана в %s.';
$strCouldNotKill = 'phpMyAdmin не можа да отстрани нишката %s. Вероятно вече е била затворена.';
$strCreate = 'Създай';
$strCreateIndex = 'Създай индекс върху &nbsp;%s&nbsp;колони';
$strCreateIndexTopic = 'Създай нов индекс';
$strCreateNewDatabase = 'Създай нова БД';
$strCreateNewTable = 'Създай нова таблица в БД %s';
$strCreatePage = 'Създай нова Страница';
$strCreatePdfFeat = 'Създаване на PDF-и';
$strCriteria = 'Критерий';

$strDBGContext = 'Контекст';
$strDBGContextID = 'Контекстно ID';  
$strDBGHits = 'Попадения';
$strDBGLine = 'Линия';
$strDBGMaxTimeMs = 'Макс. време, ms';  
$strDBGMinTimeMs = 'Мин. време, ms'; 
$strDBGModule = 'Модул';
$strDBGTimePerHitMs = 'Време/Попадение, ms';
$strDBGTotalTimeMs = 'Общо време, ms';
$strData = 'Данни';
$strDataDict = 'Речник на данните';
$strDataOnly = 'Само данни';
$strDatabase = 'БД';
$strDatabaseHasBeenDropped = 'Базата данни %s беше изтрита.';
$strDatabaseWildcard = 'База данни (може и с wildcard):';
$strDatabases = 'Бази от Данни';
$strDatabasesDropped = '%s бази данни бяха изтрити успешно.';
$strDatabasesStats = ' Статистика за базите данни';
$strDatabasesStatsDisable = 'Забрани статистика';
$strDatabasesStatsEnable = 'Разреши статистика';
$strDatabasesStatsHeavyTraffic = 'Забележка: Разрешаването на статистика на базата данни може да коства много голям трафик между уеб сървъра и MySQL сървъра.';
$strDbPrivileges = 'Привилегии специфични за базата данни';
$strDbSpecific = 'специфични за базата данни';
$strDefault = 'По подразбиране';
$strDefaultValueHelp = 'За стойностите по подразбиране, моля въведете само една стойност, без обратни черти или апостроф, използвайки следния формат: a';
$strDelete = 'Изтрий';
$strDeleteAndFlush = 'Изтрийте потребителите и след това презаредете привилегиите.';
$strDeleteAndFlushDescr = 'Това е най-чистия начин, но презареждането на привилегиите може да отнеме известно време.';
$strDeleteFailed = 'Неуспешно изтриване!';
$strDeleteUserMessage = 'Вие изтрихте потребител %s.';
$strDeleted = 'Редът беше изтрит';
$strDeletedRows = 'Изтрити редове:';
$strDeleting = 'Изтриване на %s';
$strDescending = 'Низходящо';
$strDisabled = 'Забранено';
$strDisplay = 'Покажи';
$strDisplayFeat = 'Покажи възможностите';
$strDisplayOrder = 'Покажи подредба:';
$strDisplayPDF = 'Покажи PDF схема';
$strDoAQuery = 'Изпълни "запитване по заявка" (символ за  заместване: "%")';
$strDoYouReally = 'Действително ли желаете да изпълните заявката';
$strDocu = 'Документация';
$strDrop = 'Унищожи';
$strDropDB = 'Унищожи БД %s';
$strDropSelectedDatabases = 'Изтрий избраните бази данни';
$strDropTable = 'Изтрий таблицата';
$strDropUsersDb = 'Изтрий базаите данни които имат имена като тези на потребителите.';
$strDumpXRows = 'Дъмп-ни %s реда като започнеш от %s.';
$strDumpingData = 'Дъмп (схема) на данните в таблицата';
$strDynamic = 'динамичен';

$strEdit = 'Редактиране';
$strEditPDFPages = 'Редактиране на PDF Страници';
$strEditPrivileges = 'Редактиране на привилегиите';
$strEffective = 'Ефективни';
$strEmpty = 'Изпразни';
$strEmptyResultSet = 'MySQL върна празен резултат (т.е. нула редове).';
$strEnabled = 'Позволено';
$strEnd = 'Край';
$strEnglishPrivileges = ' Забележка: Имената на привилегиите на MySQL са показани на английски. ';
$strError = 'Грешка';
$strExplain = 'Explain SQL';
$strExport = 'Експортиране';
$strExportToXML = 'Експортиране в XML формат';
$strExtendedInserts = 'Разширени INSERT-и';
$strExtra = 'Допълнително';

$strFailedAttempts = 'Провалили се опити';
$strField = 'Поле';
$strFieldHasBeenDropped = 'Полето %s беше изтрито';
$strFields = 'Полета';
$strFieldsEmpty = ' Брояча на полетата е празен! ';
$strFieldsEnclosedBy = 'Полетата са оградени със';
$strFieldsEscapedBy = 'Представка на специалните символи';
$strFieldsTerminatedBy = 'Полетата завършват със';
$strFileCouldNotBeRead = 'Файлът не може да бъде прочетен';
$strFixed = 'Фиксиран';
$strFlushPrivilegesNote = 'Забележка: phpMyAdmin взема потребителските привилегии директно от таблицата на привилегиите на MySQL. Съдържанието на тази таблица може да се различава от привилегиите които използва сървъра ако към него са направени промени на ръка. В този случай, трябва да %sпрезаредите привилегиите%s преди да продължите.';
$strFlushTable = 'Изпразни кеша на таблицата ("FLUSH")';
$strFormEmpty = 'Липсва стойност във полето на формата!';
$strFormat = 'Формат';
$strFullText = 'Пълни текстове';
$strFunction = 'Функция';

$strGenBy = 'Генерирано от';
$strGenTime = 'Време на генериране';
$strGeneralRelationFeat = 'Общи възможности на релациите';
$strGlobal = 'глобален';
$strGlobalPrivileges = 'Глобални привилегии';
$strGlobalValue = 'Глобална стойност';
$strGo = 'Изпълни';
$strGrantOption = 'Дадени';
$strGrants = 'Дадени&nbsp;прив.';
$strGzip = '"gzip-нато"';

$strHasBeenAltered = 'беше променена.';
$strHasBeenCreated = 'беше създадена.';
$strHaveToShow = 'Трябва да изберете поне една Колона за показване';
$strHome = 'Начало';
$strHomepageOfficial = 'Официална phpMyAdmin уеб страница';
$strHomepageSourceforge = 'phpMyAdmin страница на Sourceforge';
$strHost = 'Хост';
$strHostEmpty = 'Името на хоста е празно!';

$strId = 'ID'; 
$strIdxFulltext = 'Пълнотекстово';
$strIfYouWish = 'Ако желаете да заредите само някои колони от таблицата, укажете списък на полетата разделени със запетаи.';
$strIgnore = 'Игнорирай';
$strIgnoringFile = 'Игнориране на файл %s';
$strImportDocSQL = 'Импортирай docSQL файловете';
$strImportFiles = 'Импортиране на файлове';
$strImportFinished = 'Импортирането завърши';
$strInUse = 'Заето';
$strIndex = 'Индекс';
$strIndexHasBeenDropped = 'Индекса %s беше изтрит';
$strIndexName = 'Име на индекса&nbsp;:';
$strIndexType = 'Тип на индекса&nbsp;:';
$strIndexes = 'Индекси';
$strInsecureMySQL = 'Вашият конфигурационен файл съдържа настройки (root без парола), които съответстват на привилигирования акаунт на MySQL по подразбиране. Вашият MySQL сървър е стартиран с това по подразбиране и може да бъде лесно хакнат. Tрябва да оправите тази дупка в сигурността.';
$strInsert = 'Вмъкни';
$strInsertAsNewRow = 'Вмъкни като нов ред';
$strInsertNewRow = 'Вмъкни нов ред';
$strInsertTextfiles = 'Вмъкни текстови файлове в таблицата';
$strInsertedRows = 'Вмъкнати реда:';
$strInstructions = 'Инструкции';
$strInvalidName = '"%s" е запазана дума и вие не можете да я използвате за име на база от данни,таблица или поле. ';

$strJumpToDB = 'Скочи към база данни &quot;%s&quot;.';
$strJustDelete = 'Изтрий потребителите от таблицата с привилегиите.';
$strJustDeleteDescr = '&quot;Изтритите&quot; потребители ще имат достъп до сървъра както обикновено, докато не се презаредят привилегиите.';

$strKeepPass = 'Да не се сменя паролата';
$strKeyname = 'Име на ключа';
$strKill = 'СТОП';

$strLaTeX = 'LaTeX';
$strLandscape = 'Пейзажно';
$strLength = 'Дължина';
$strLengthSet = 'Дължина/Стойност*';
$strLimitNumRows = 'реда на страница';
$strLineFeed = 'Символ за край на ред: \\n';
$strLines = 'Редове';
$strLinesTerminatedBy = 'Редовете завършват с';
$strLinkNotFound = 'Връзките не са намерени';
$strLinksTo = 'Сочи към';
$strLocalhost = 'Локален';
$strLocationTextfile = 'Местоположение на текстовия файл';
$strLogPassword = 'Парола:';
$strLogUsername = 'Име:';
$strLogin = 'Вход';
$strLoginInformation = 'Информация за логване';
$strLogout = 'Изход от системата';

$strMissingBracket = 'Липсва скоба';
$strModifications = 'Промените бяха съхранени';
$strModify = 'Промени';
$strModifyIndexTopic = 'Промяна на индекс';
$strMoreStatusVars = 'Други променливи на състоянието';
$strMoveTable = 'Преместване на таблица към (база от данни<b>.</b>таблица):';
$strMoveTableOK = 'Таблицата %s беше преместена към %s.';
$strMySQLCharset = 'MySQL набор от символи';
$strMySQLReloaded = 'MySQL е презареден.';
$strMySQLSaid = 'MySQL отговори: ';
$strMySQLServerProcess = 'MySQL %pma_s1% е стартиран на %pma_s2% като %pma_s3%';
$strMySQLShowProcess = 'Покажи процесите';
$strMySQLShowStatus = 'Покажи информация за състоянието на MySQL';
$strMySQLShowVars = 'Покажи системните променливи на MySQL';

$strName = 'Име';
$strNext = 'Следващ';
$strNo = 'не';
$strNoDatabases = 'Няма бази от данни';
$strNoDatabasesSelected = 'Няма избрани бази данни.';
$strNoDescription = 'няма Описание';
$strNoDropDatabases = '"DROP DATABASE" зявката е забранена.';
$strNoExplain = 'Пропусни Explain SQL';
$strNoFrames = 'phpMyAdmin е по дружелюбен ако използвате браузър, който поддържа <b>frames</b>.';
$strNoIndex = 'Не е дефиниран индекс!';
$strNoIndexPartsDefined = 'Не са дефинирани части на индекс!';
$strNoModification = 'Няма промяна';
$strNoPassword = 'Няма парола';
$strNoPhp = 'без PHP код';
$strNoPrivileges = 'Няма привилегии';
$strNoQuery = 'Няма SQL заявка!';
$strNoRights = 'В момента не разполагате с достатъчно права за да се намирате тук!';
$strNoTablesFound = 'В базата данни няма таблици.';
$strNoUsersFound = 'Няма потребител(и).';
$strNoUsersSelected = 'Не за избрани потребители.';
$strNoValidateSQL = 'Пропусни Validate SQL';
$strNone = 'Няма';
$strNotNumber = 'Това не е число!';
$strNotOK = 'не е OK';
$strNotSet = 'таблица  <b>%s</b> не е намерена или не е установена в %s';
$strNotValidNumber = ' не е валиден номер на ред!';
$strNull = 'Празно';
$strNumSearchResultsInTable = '%s съвпадение(я) в таблица <i>%s</i>';
$strNumSearchResultsTotal = '<b>Общо:</b> <i>%s</i> съвпадение(я)';
$strNumTables = 'Таблици'; 

$strOK = 'OK';
$strOftenQuotation = 'Обикновено кавички. ПО ИЗБОР означава, че само полета char и varchar се заграждат в кавички.';
$strOperations = 'Операции';
$strOptimizeTable = 'Оптимизиране на таблицата';
$strOptionalControls = 'По избор. Контролира как да се четат или пишат специални символи.';
$strOptionally = 'ПО ИЗБОР';
$strOptions = 'Опции';
$strOr = 'или';
$strOverhead = 'Загубено място';

$strPHP40203 = 'Вие използвате PHP 4.2.3, който има сериозен бъг с много-байтови стрингове (mbstring). Вижте сведението за PHP бъга 19404. Не е препоръчително да използвате тази версия на PHP с phpMyAdmin.';
$strPHPVersion = 'Версия на PHP';
$strPageNumber = 'Номер на страницата:';
$strPartialText = 'Частични текстове';
$strPassword = 'Парола';
$strPasswordChanged = 'Паролата на %s беше променена успешно.';
$strPasswordEmpty = 'Паролата е празна!';
$strPasswordNotSame = 'Паролата не е същата!';
$strPdfDbSchema = 'Схемата на база данни "%s" - Страница %s';
$strPdfInvalidPageNum = 'Недефиниран номер на PDFстраницата!';
$strPdfInvalidTblName = 'Таблица "%s" не съществува!';
$strPdfNoTables = 'Няма таблици';
$strPerHour = 'на час';
$strPhp = 'Създай PHP код';  
$strPmaDocumentation = 'phpMyAdmin документация';
$strPmaUriError = 'На <tt>$cfg[\'PmaAbsoluteUri\']</tt> ТРЯБВА да се зададе стойност в конфигурационния файл!';
$strPortrait = 'Потртетно';
$strPos1 = 'Начало';
$strPrevious = 'Предишен';
$strPrimary = 'PRIMARY';
$strPrimaryKey = 'Главен ключ';
$strPrimaryKeyHasBeenDropped = ' Главния ключ беше изтрит.';
$strPrimaryKeyName = 'Името на главния ключ трябва да е... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>трябва</b> да е името на <b>и единствено на</b> главния ключ!)';
$strPrint = 'Изпечатай';
$strPrintView = 'Изглед за печат';
$strPrivDescAllPrivileges = 'Включва всички привилегии освен GRANT.';
$strPrivDescAlter = 'Позволява променяне на структурата на съществуващи таблици.';
$strPrivDescCreateDb = 'Позволява създаване на нови бази данни и таблици.';
$strPrivDescCreateTbl = 'Позволява създаване на нови таблици.';
$strPrivDescCreateTmpTable = 'Позволява създаването на временни таблици.';
$strPrivDescDelete = 'Позволява изтриване на данни.';
$strPrivDescDropDb = 'Позволява изтриване на бази данни и таблици.';
$strPrivDescDropTbl = 'Позволява изтриване на таблици.';
$strPrivDescExecute = 'Позволява стартирането на съхранени процедури; Няма ефект в тази версия на MySQL.';
$strPrivDescFile = 'Позволява импортиране на данни от и експортиране на данни във файлове.';
$strPrivDescGrant = 'Позволява добавяне на потребители и привилегии без презареждане на таблицата с привилегиите.';
$strPrivDescIndex = 'Позволява създаване и премахване на индекси.';
$strPrivDescInsert = 'Позволява вмъкване и заменяне на данни.';
$strPrivDescLockTables = 'Позволява заключване на таблици за текущата нишка.';
$strPrivDescMaxConnections = 'Ограничава броя на новите конекции, които потребителя може да отвори на час.';
$strPrivDescMaxQuestions = 'Ограничава броя на заявките, които потребителя може да изпрати към сървъра на час.';
$strPrivDescMaxUpdates = 'Органичава броя на командите, които променят някоя таблица или база данни, които даден потребител може да стартира за час.';
$strPrivDescProcess3 = 'Позволява спирането на процеси на други потребители.';
$strPrivDescProcess4 = 'Позволява преглед на целите заявки в списъка с процесите.';
$strPrivDescReferences = 'Няма ефект в тази версия на MySQL.';
$strPrivDescReload = 'Позволява презареждане на сървърните настройки и изчистване(flashing) на кеша на сървъра.'; 
$strPrivDescReplClient = 'Дава правото на потребител да знае къде са slaves / masters.';
$strPrivDescReplSlave = 'Нужно за replication slaves.';
$strPrivDescSelect = 'Позволява четене на данни.';
$strPrivDescShowDb = 'Дава достъп до пълния списък на базите данни.';
$strPrivDescShutdown = 'Позволява спиране на сървъра.';
$strPrivDescSuper = 'Позвалява конектвне, дори ако е достигнат максималния брой на конекциите; Изисква се за повечето административни операции, като установяване на глобални променливи или спиране на нишка на други потребители.';
$strPrivDescUpdate = 'Позволява промяна на данни.';
$strPrivDescUsage = 'Няма привилегии.';
$strPrivileges = 'Привилегии';
$strPrivilegesReloaded = 'Привилегиите бяха презаредени успешно.';
$strProcesslist = 'Списък на процесите';
$strProperties = 'Свойства';
$strPutColNames = 'Постави имената на полетата на първия ред';

$strQBE = 'Запитване по пример';
$strQBEDel = 'Изтрий';
$strQBEIns = 'Вмъкни';
$strQueryOnDb = 'SQL-заявка към базата от данни <b>%s</b>:';
$strQueryStatistics = '<b>Статистика на заявките</b>: От както е стартиран, %s заявки за изпратени към сървъра.';
$strQueryType = 'Тип на заявката';

$strReType = 'Отново';
$strReceived = 'Получени';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Проверка на интегритета на връзките';
$strRelationNotWorking = 'Допълнителните възможности за работа със свързани (linked) таблици са деактивирани. За да разберете защо кликнете %sтук%s.';
$strRelationView = 'Изглед на релациите';
$strRelationalSchema = 'Релационна схема';
$strReloadFailed = 'Неуспешен опит за презареждане на MySQL.';
$strReloadMySQL = 'Презареди MySQL';
$strReloadingThePrivileges = 'Презареждане на привилегиите';
$strRememberReload = 'Не забравяйте да презаредите сървъра.';
$strRemoveSelectedUsers = 'Отстраняване на избраните потребители';
$strRenameTable = 'Преименувай таблицата на';
$strRenameTableOK = 'Таблица %s беше преименувана на %s';
$strRepairTable = 'Поправяне на таблицата';
$strReplace = 'Замести';
$strReplaceTable = 'Замести данните от таблицата с данните от файла';
$strReset = 'Изчисти';
$strResourceLimits = 'Ресурсни ограничения';
$strRevoke = 'Отмени';
$strRevokeAndDelete = 'Отмени висички активни привилегии от потребителите и след това ги изтрий.';
$strRevokeAndDeleteDescr = 'Потребителите все още ще имат USAGE привилегия докато не се презаредят привилегиите.';
$strRevokeGrant = 'Отнемане на Дадени&nbsp;прив.';
$strRevokeGrantMessage = 'Вие премахнахте Дадените привилегии за %s';
$strRevokeMessage = 'Вие отменихте привилегиите за %s';
$strRevokePriv = 'Отмяна на привилегии';
$strRowLength = 'Дължина на реда';
$strRowSize = ' Размер на ред ';
$strRows = 'Редове';
$strRowsFrom = 'реда започвайки от';
$strRowsModeHorizontal = 'хоризонтален';
$strRowsModeOptions = 'в %s вид и повтаряй имената на колоните през всеки %s<br />';
$strRowsModeVertical = 'вертикален';
$strRowsStatistic = 'Статистика за редовете';
$strRunQuery = 'Изпълни заявката';
$strRunSQLQuery = 'Стартиране SQL заявка/заявки към база от данни %s';
$strRunning = 'работи на %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Има известна вероятност да сте намерили бъг в SQL парсера. Моля проучете по-добре, и проверете коректността на кавичките. Друга вероятна причина за грепката може да бъде, че ъплоудвате файл с изпълним код извън областта заградена с кавички. Можете също када да се опитате да изпълните заявката чрез инртерфейса за команден ред на MySQL. Грешката генерирана от MySQL сървъра по-долу, ако има такава, може също да ви помогне при откриването на проблема. Ако все още имате проблеми или парсера дава грешка там където интерфейса на командния ред не връща такава, моля ограничете вашите SQL заявки само до проблемната заявка, и изпратете съобщение за бъг с парчето от данните в CUT секцията по-долу:';
$strSQLParserUserError = 'Изглжда, че има грешка в SQL заявката ви. Грешката върната от MySQL сървъра по долу, ако има такава, би могала да ви помогне в диагностирането на проблема';
$strSQLQuery = 'SQL-запитване';
$strSQLResult = 'SQL резултат';
$strSQPBugInvalidIdentifer = 'Невалиден идентификатор';
$strSQPBugUnclosedQuote = 'Незатворени кавички'; 
$strSQPBugUnknownPunctuation = 'Непозната пунктоация на стринг';
$strSave = 'Запиши';
$strScaleFactorSmall = 'Мащаба е твърде малък за да се събере схемата на една страница';
$strSearch = 'Търсене';
$strSearchFormTitle = 'Търсене в базата данни';
$strSearchInTables = 'В таблицата(ите):';
$strSearchNeedle = 'Дума(и) или стойност(и) за търсене (символ за заместване: "%"):';
$strSearchOption1 = 'поне една от думите';
$strSearchOption2 = 'всички думи';
$strSearchOption3 = 'точната фраза';
$strSearchOption4 = 'като регулярен израз';
$strSearchResultsFor = 'Резултати от търсенето на "<i>%s</i>" %s:';
$strSearchType = 'Намери:';
$strSelect = 'Избери';
$strSelectADb = 'Моля изберете база данни';
$strSelectAll = 'Селектирай всичко';
$strSelectFields = 'Избери поле (минимум едно):';
$strSelectNumRows = 'в запитването';
$strSelectTables = 'Избери таблици';  
$strSend = 'Изпрати';
$strSent = 'Изпратени';
$strServer = 'Сървър %s';
$strServerChoice = 'Избор на сървър';
$strServerStatus = 'Информация за състоянието';
$strServerStatusUptime = 'Този MySQL сървър е работи от %s. Стартиран е на %s.';
$strServerTabProcesslist = 'Процеси';
$strServerTabVariables = 'Променливи';
$strServerTrafficNotes = '<b>Трафик на сървъра</b>: Тези таблици показват статистика за мрежовия трафик на MySQL сървъра от както е стартиран.';
$strServerVars = 'Сървърни променливи и настройки';
$strServerVersion = 'Версия на сървъра';
$strSessionValue = 'Стойност на сесията';
$strSetEnumVal = 'Ако типа на полето е "enum" или "set", моля въведете стойностите използвайки този формат: \'a\',\'b\',\'c\'...<br />Ако е необходимо да сложите обратна черта ("\") или апостроф ("\'") между тези стойности, сложите обратна черта пред тях (например:  \'\\\\xyz\' или \'a\\\'b\').';
$strShow = 'Покажи';
$strShowAll = 'Покажи всички';
$strShowColor = 'Покажи цвят';
$strShowCols = 'Покажи колоните';
$strShowDatadictAs = 'Формат на речника на данните';
$strShowGrid = 'Покажи мрежа';
$strShowPHPInfo = 'Покажи информация за PHP ';
$strShowTableDimension = 'Покажи размерността на таблиците';  
$strShowTables = 'Покажи таблиците';
$strShowThisQuery = ' Покажи тази заявка отново ';
$strShowingRecords = 'Показва записи ';
$strSingly = '(еднократно)';
$strSize = 'Размер';
$strSort = 'Сортиране';
$strSpaceUsage = 'Използвано място';
$strSplitWordsWithSpace = 'Думите трябва да се разделят с интервал (" ").';
$strStatement = 'Заявление';
$strStatus = 'Състоние';
$strStrucCSV = 'CSV данни';
$strStrucData = 'Структурата и данните';
$strStrucDrop = 'Добави \'изтрий таблицата\'';
$strStrucExcelCSV = 'CSV за Ms Excel данни';
$strStrucOnly = 'Само структурата';
$strStructPropose = 'Предложи структура на таблицата';
$strStructure = 'Структура';
$strSubmit = 'Изпълни';
$strSuccess = 'Вашето SQL-запитване беше изпълнено успешно';
$strSum = 'Сума';

$strTable = 'Таблица ';
$strTableComments = 'Коментари към таблицата';
$strTableEmpty = 'Името на таблицата е празно!';
$strTableHasBeenDropped = 'Таблицата %s беше изтрита';
$strTableHasBeenEmptied = 'Таблицата %s беше изпразнена';
$strTableHasBeenFlushed = 'Кеша на таблица %s беше изпразнен';
$strTableMaintenance = 'Поддръжка на таблицата';
$strTableOfContents = 'Съдържание';
$strTableStructure = 'Структура на таблица';
$strTableType = 'Тип на таблицата';
$strTables = '%s таблица(и)';
$strTblPrivileges = 'Специфични за таблицата привилегии';
$strTextAreaLength = ' Поради дължината си,<br /> това поле може да не е редактируемо ';
$strTheContent = 'Съдържанието на файла беше импортирано.';
$strTheContents = 'Съдържанието на файла замества съдържанието на таблицата за редове с идентични първични или уникални ключове.';
$strTheTerminator = 'Символ за край на поле.';
$strThisHost = 'Този Хост';
$strThisNotDirectory = 'Това не беше директория';
$strThreadSuccessfullyKilled = 'Нишка %s беше успешно отстранена.';
$strTime = 'Време'; 
$strTotal = 'Общо';
$strTotalUC = 'Общо';
$strTraffic = 'Трафик';
$strType = 'Тип';

$strUncheckAll = 'Размаркирай всичко';
$strUnique = 'Уникално';
$strUnselectAll = 'Деселектирай всичко';
$strUpdatePrivMessage = 'Вие променихте привилегиите за %s.';
$strUpdateProfile = 'Обновяване на профил:';
$strUpdateProfileMessage = 'Профила беше обновен.';
$strUpdateQuery = 'Допълни Запитването';
$strUsage = 'Използвани';
$strUseBackquotes = 'Използвай обратни кавички около имена на таблици и полета';
$strUseTables = 'Използвай таблицата';
$strUseTextField = 'Използвай текстовото поле';
$strUser = 'Потребител';
$strUserAlreadyExists = 'Потребител %s вече съществува!';
$strUserEmpty = 'Потребителското име е празно!';
$strUserName = 'Потребителско име';
$strUserNotFound = 'Избрания потребител не беше открит в таблицата с привилегиите.';
$strUserOverview = 'Преглед на потребителите';
$strUsers = 'Потребители';
$strUsersDeleted = 'Избраните потребители бяха изтрити успешно.';
$strUsersHavingAccessToDb = 'Потребители които имат достъп до &quot;%s&quot;';

$strValidateSQL = 'Валидирай SQL-а';
$strValidatorError = 'SQL валидатора не може да бъде инициализиран. Моля проверете дали сте инсталирали необходимите PHP разширения, така както е описано в %sдокументацията%s.';
$strValue = 'Стойност';
$strVar = 'Променлива'; 
$strViewDump = 'Покажи дъмп (схема) на таблицата';
$strViewDumpDB = 'Покажи дъмп (схема) на БД';

$strWebServerUploadDirectory = 'директорията за upload на уеб сървъра';
$strWebServerUploadDirectoryError = 'Директорията която сте указали за upload не може да бъде достигната';
$strWelcome = 'Добре дошли в %s';
$strWildcard = 'символ за заместване';
$strWithChecked = 'Когато има отметка:';
$strWritingCommentNotPossible = 'Записа на коментар не е възможен';
$strWritingRelationNotPossible = 'Записа на релацията не е възможен';
$strWrongUser = 'Грешно име/парола. Отказан достъп.';

$strYes = 'да';

$strZeroRemovesTheLimit = 'Забележка: Установяването на тези опции с 0 (нула) премахва ограничението.';
$strZip = '"zip-нато"';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate

$strAutodetect = 'Autodetect';  //to translate
$strAutomaticLayout = 'Automatic layout';  //to translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCSVOptions = 'CSV options';//to translate

$strDBComment = 'Database comment: ';//to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate

$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate 

$strInnodbStat = 'InnoDB Status';  //to translate

$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_file = 'Filename';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate

$strNoOptions = 'This format has no options';//to translate

$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate

$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate

$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate

$strSQLOptions = 'SQL options';//to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strStatCheckTime = 'Last check';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate

$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate

$strUseHostTable = 'Use Host Table';  //to translate

$strXML = 'XML';//to translate

$strSwitchToTable = 'Switch to copied table';  //to translate
?>
