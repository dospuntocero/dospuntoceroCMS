<?php

/**
 * Spanish (Spain) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['en_US'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['en_US'];
}

$lang['es_ES']['Paginate']['NEXT'] = 'Siguiente';
$lang['es_ES']['Paginate']['PREVIOUS'] = 'Previo';
$lang['es_ES']['AssetAdmin_left.ss']['GO'] = 'Crear';
$lang['es_ES']['CMSLeft.ss']['GO'] = 'Crear';
$lang['es_ES']['CMSMain']['GO'] = 'Crear';
// Output for class or file: Page
$lang['es_ES']['Page']['CATEGORYHOWMANY'] = '¿Cuántos hijos se mostrarán al mismo tiempo?';
$lang['es_ES']['Page']['SELECTHOWMANY'] = '= Seleccionar cuantos =';
$lang['es_ES']['Page']['FILESTAB'] = 'Archivos';
$lang['es_ES']['Page']['LAYOUTTAB'] = 'Estructura';
$lang['es_ES']['Page']['SHOWINHEADERMENU'] = '¿Mostrar en el menú de la cabecera?';
$lang['es_ES']['Page']['SHOWINFOOTERMENU'] = '¿Mostrar en el menú del pié de página?';
$lang['es_ES']['Page']['SHOWCHILDREN'] = '¿Mostrar hijos?';
$lang['es_ES']['Page']['PROMOTEHOME'] = 'Promover al inicio';
$lang['es_ES']['Page']['FORHOMEPhoto'] = 'Foto para páginas mostradas en el inicio';


// Output for class or file: PageHolderLayouts
$lang['es_ES']['PageHolderLayouts']['LAYOUTPROPERTIES'] = 'Propiedades de retícula';

// Output for class or file: HomePage
$lang['es_ES']['DospuntoceroCMSCore']['CONTACTDETAILSTAB'] = 'InformacionDeContacto';
$lang['es_ES']['DospuntoceroCMSCore']['CONTACTDETAILSINFO'] = 'Esta información aparecerá en todas las páginas';
$lang['es_ES']['DospuntoceroCMSCore']['CONTACTINFO'] = 'Información de contacto';
// ====

// Output for class or file: Maintenance
$lang['es_ES']['Maintenance']['MAINTENANCE'] = '¿Poner el sitio en modo mantenimiento?';
$lang['es_ES']['Maintenance']['MESSAGE'] = 'Sitio en modo mantenimiento';

// Output for class or file: WidgetAreaDecorator
$lang['es_ES']['WidgetAreaDecorator']['INTERACTIONCOLUMN'] = 'Widgets';

// Output for class or file: AddContent
$lang['es_ES']['AddContent']['DELETEEXISTING'] = '¿Eliminar todo el contenido existente?';
$lang['es_ES']['AddContent']['PUBLISHALL'] = '¿Publicar todo después de importar?';
$lang['es_ES']['AddContent']['BULKIMPORT'] = 'Importar páginas';
$lang['es_ES']['AddContent']['SITEIMPORTED'] = '<p>¡Gracias! el sitio ha sido importado.</p>';

// Output for class or file: NCSimpleTreeDropdownField
$lang['es_ES']['NCSimpleTreeDropdownField']['UNTITLED'] = 'Sin título';

// Output for class or file: CMSNavigator
$lang['es_ES']['CMSNavigator']['DRAFTSITE'] = 'Borrador';
$lang['es_ES']['CMSNavigator']['PUBLISHEDSITE'] = 'Publicado';
$lang['es_ES']['CMSNavigator']['ARCHIVEDSITE'] = 'Archivado';
$lang['es_ES']['CMSNavigator']['ADMINAREA'] = 'CMS';
$lang['es_ES']['CMSNavigator']['EDITTHISPAGE'] = 'Editar esta página';
$lang['es_ES']['CMSNavigator']['VIEWPUBLISHEDSITE'] = 'Ver sitio publicado';
$lang['es_ES']['CMSNavigator']['VIEWDRAFTSITE'] = 'Ver borrador';
$lang['es_ES']['CMSNavigator']['FLUSHCACHE'] = 'Borrar caché';
$lang['es_ES']['CMSNavigator']['REBUILDSITE'] = 'Reconstruir sitio';
$lang['es_ES']['CMSNavigator']['ADDCONTENTUSINGTXTFILE'] = 'Agregar contenido usando un .txt';
$lang['es_ES']['CMSNavigator']['LOGGEDINAS'] = 'Logeado como ';
$lang['es_ES']['CMSNavigator']['LOGOUT'] = 'Salir';
$lang['es_ES']['CMSNavigator']['NOTLOGGEDIN'] = 'No logeado';
$lang['es_ES']['CMSNavigator']['LOGIN'] = 'Ingresar';

// Output for class or file: Paginate
$lang['es_ES']['Paginate']['PREVIOUS'] = 'Previo';
$lang['es_ES']['Paginate']['NEXT'] = 'Siguiente';

// Output for class or file: dospuntoceroCMS
$lang['es_ES']['dospuntoceroCMS']['site under maintenance'] = 'Sitio en modo mantenimiento';

$lang['es_ES']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Versiones de la página';
$lang['es_ES']['CMSMain_left.ss']['COMPAREMODE'] = 'Comparar (seleccione 2 versiones)';
$lang['es_ES']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = "Permite reordenar arrastrando";




$lang['es_ES']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = "Permite reordenar arrastrando";
$lang['es_ES']['SecurityAdmin']['ACCESS_HELP'] = 'Permite ver, agregar y editar usuarios, así como asignar permisos y roles a ellos.';
$lang['es_ES']['SecurityAdmin']['ADDMEMBER'] = 'Agregar Miembro';
$lang['es_ES']['SecurityAdmin']['APPLY_ROLES'] = 'Aplicar roles a grupos';
$lang['es_ES']['SecurityAdmin']['APPLY_ROLES_HELP'] = 'Habilidad de editar roles asignados a un grupo. Requiere permisos de acceso a la sección "\'Seguridad\'"';
$lang['es_ES']['SecurityAdmin']['EDITPERMISSIONS'] = 'Manejar permisos para grupos';
$lang['es_ES']['SecurityAdmin']['EDITPERMISSIONS_HELP'] = 'Habilidad de editar permisos y direcciones IP para un grupo. Requiere permisos de acceso a la sección "\'Seguridad\'"';
$lang['es_ES']['SecurityAdmin']['MENUTITLE'] = array(
	'Seguridad',
	100,
	'Menu title'
);
$lang['es_ES']['SecurityAdmin']['MemberListCaution'] = 'Caution: Removing members from this list will remove them from all groups and the database';
$lang['es_ES']['SecurityAdmin']['NEWGROUP'] = 'Nuevo Grupo';
$lang['es_ES']['SecurityAdmin']['SAVE'] = 'Guardar';
$lang['es_ES']['SecurityAdmin']['SGROUPS'] = 'Grupos de Seguridad';
$lang['es_ES']['SecurityAdmin']['TABIMPORT'] = 'Importar';
$lang['es_ES']['SecurityAdmin']['TABROLES'] = 'Roles';
$lang['es_ES']['SecurityAdmin_MemberImportForm']['BtnImport'] = 'Importar';
$lang['es_ES']['SecurityAdmin_MemberImportForm']['FileFieldLabel'] = 'Archivo CSV <small>(extensión: *.csv)</small>';
$lang['es_ES']['SecurityAdmin_left.ss']['CREATE'] = 'Crear';
$lang['es_ES']['SecurityAdmin_left.ss']['DEL'] = 'Borrar';
$lang['es_ES']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Borrar los grupos seleccionados';
$lang['es_ES']['SecurityAdmin_left.ss']['GO'] = 'Crear';
$lang['es_ES']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Grupos de Seguridad';
$lang['es_ES']['SecurityAdmin_left.ss']['SELECT'] = 'Seleccionar las páginas que quieres eliminiar y luego presionar el botón a continuación';
$lang['es_ES']['SecurityAdmin_left.ss']['TOREORG'] = 'Para reorganizar tu sitio, arrastra las páginas y re ordénalas.';
$lang['es_ES']['SecurityAdmin_right.ss']['WELCOME1'] = array(
	'Bienvenido a la',
	50,
	'Followed by application name'
);
$lang['es_ES']['SecurityAdmin_right.ss']['WELCOME2'] = array(
	'Sección de administración de seguridad. Selecciona un grupo desde la izquierda.',
	50
);

$lang['es_ES']['SiteTree']['VIEW_ALL_DESCRIPTION'] = 'Ver cualquier página';
$lang['es_ES']['SiteTree']['VIEW_DRAFT_CONTENT'] = 'ver contenido de borrador';
$lang['es_ES']['SiteTree']['EDIT_ALL_DESCRIPTION'] = 'Editar cualquier página';
$lang['es_ES']['SiteTree']['REORGANISE_DESCRIPTION'] = 'Cambiar la estructura del sitio';



// uploadify
$lang['es_ES']['Uploadify']['SUCCESSFULADDSINGLE'] = '"%s" ha sido agregado.';
$lang['es_ES']['Uploadify']['SUCCESSFULADDMULTI'] = 'Todos los archivos han sido agregados.';
$lang['es_ES']['Uploadify']['BUTTONTEXT'] = 'Subir';
$lang['es_ES']['Uploadify']['CHANGEFOLDERACTION'] = 'Cambiar de carpeta';
$lang['es_ES']['Uploadify']['CHOOSEIMPORTFOLDER'] = 'Seleccionar carpeta para importar';
$lang['es_ES']['Uploadify']['PLEASESELECT'] = 'Por favor, seleccione';
$lang['es_ES']['Uploadify']['IMAGES'] = 'Imágenes';
$lang['es_ES']['Uploadify']['ATTACHEDFILES'] = 'Archivos Adjuntos';
$lang['es_ES']['Uploadify']['REMOVE'] = 'Remover';
$lang['es_ES']['Uploadify']['REMOVEANDDELETE'] = 'Remover y eliminar';
$lang['es_ES']['Uploadify']['NOFILES'] = 'No hay archivos';
$lang['es_ES']['Uploadify']['NOFILE'] = 'No hay archivo';
$lang['es_ES']['Uploadify']['CHOOSEUPLOADFOLDER'] = 'Seleccionar carpeta de subida';
$lang['es_ES']['Uploadify']['NOFILESFOUND'] = 'No se encontraron archivos';
$lang['es_ES']['Uploadify']['CHOOSEEXISTING'] = 'Seleccionar existente';
$lang['es_ES']['Uploadify']['UPLOADNEW'] = 'Subir';
$lang['es_ES']['Uploadify']['DOIMPORT'] = 'Importar';


// DOM
$lang['es_ES']['DataObjectManager']['ADD'] = 'Agregar';
$lang['es_ES']['DataObjectManager']['ADDEDNEW'] = '%s nuevos registros agregados';
$lang['es_ES']['DataObjectManager']['ADDITEM'] = array(
	'Agregar %s',
	PR_MEDIUM,
	'Agregar [nombre]'
);
$lang['es_ES']['DataObjectManager']['ALLOWEDFILETYPES'] = 'Solo son permitidos archivos de tipo %s';
$lang['es_ES']['DataObjectManager']['DELETE'] = 'Borrar';
$lang['es_ES']['DataObjectManager']['DISPLAYING'] = 'Mostrando';
$lang['es_ES']['DataObjectManager']['DRAGDROP'] = 'Permiter reordenar con arrastrar y soltar';
$lang['es_ES']['DataObjectManager']['ERROR'] = 'Error';
$lang['es_ES']['DataObjectManager']['IMPORTFROMFOLDER'] = 'Importar de un directorio existente';
$lang['es_ES']['DataObjectManager']['NOFILTER'] = 'Sin filtro';
$lang['es_ES']['DataObjectManager']['NOITEMSFOUND'] = '%s no encontrados';
$lang['es_ES']['DataObjectManager']['OF'] = 'de';
$lang['es_ES']['DataObjectManager']['PERPAGERESULTS'] = 'Resultados por pagina';
$lang['es_ES']['DataObjectManager']['PERPAGESHOW'] = 'Mostrar';
$lang['es_ES']['DataObjectManager']['REFRESH'] = 'refrescar';
$lang['es_ES']['DataObjectManager']['SAVE'] = 'Grabar';
$lang['es_ES']['DataObjectManager']['SAVEANDADD'] = 'Grabar y Agregar %s';
$lang['es_ES']['DataObjectManager']['SAVED'] = '%s Grabados exitosamente';
$lang['es_ES']['DataObjectManager']['SEARCH'] = 'Buscar';
$lang['es_ES']['DataObjectManager']['SELECTFOLDER'] = 'Seleccionar un directorio';
$lang['es_ES']['DataObjectManager']['SILVERSTRIPEVERSION'] = 'DataObjectManager requiere Silverstripe versión 2.3 o superior.';
$lang['es_ES']['DataObjectManager']['TO'] = 'a';
$lang['es_ES']['DataObjectManager']['TOTALNOT100'] = 'El ancho de las columnas debe ser en total 100 y no %s';
$lang['es_ES']['DataObjectManager']['UPLOADFROMPC'] = 'Subir desde mi equipo';
$lang['es_ES']['DataObjectManager']['VIEWFIRST'] = 'Ver primero';
$lang['es_ES']['DataObjectManager']['VIEWLAST'] = 'Ver último';
$lang['es_ES']['DataObjectManager']['VIEWNEXT'] = 'Ver siguiente';
$lang['es_ES']['DataObjectManager']['VIEWPREVIOUS'] = 'Ver anterior';
$lang['es_ES']['DataObjectManager_popup.ss']['NEXT'] = 'Próximo';
$lang['es_ES']['DataObjectManager_popup.ss']['PREVIOUS'] = 'Anterior';
$lang['es_ES']['FileDataObjectManager']['GRIDVIEW'] = 'Vista de grilla';
$lang['es_ES']['FileDataObjectManager']['LISTVIEW'] = 'Vista en lista';
$lang['es_ES']['FileDataObjectManager']['SWFUPLOAD'] = 'DataObjectManager requiere el modulo SWFUpload.';
$lang['es_ES']['AssetManager']['ADDFILESTO'] = 'Archivos a "%s"';


$lang['es_ES']['SiteTree']['PARENTTYPE_ROOT'] = 'Página de nivel superior';
$lang['es_ES']['SiteTree']['PARENTTYPE_SUBPAGE'] = 'Sub página bajo el siguiente hijo (seleccionar de la lista a continuación)';
$lang['es_ES']['ContentController']['PUBLISHEDSITE'] = 'Sitio Publicado';
$lang['es_ES']['ContentController']['DRAFTSITE'] = 'Sitio Borrador';
$lang['es_ES']['AssetAdmin_left.ss']['FILESYSTEMSYNC'] = 'Buscar archivos';
$lang['es_ES']['LeftAndMain.ss']['SSWEB'] = 'Sitio web de dospuntocero';

$lang['es_ES']['PageExtension']['MAINPHOTO'] = 'Foto principal';
$lang['es_ES']['PageExtension']['EXTRAPHOTOS'] = 'Fotos adicionales. (Se generará una mini galería con estas fotos)';

$lang['es_ES']['DospuntoceroCMSCore']['GMAPSAPIKEYTITLE'] = 'Llave de acceso a google maps';
$lang['es_ES']['DospuntoceroCMSCore']['GMAPSAPIKEY'] = 'La llave de acceso a google maps es requerida si tu sitio utiliza mapas. <a target=\'_blank\' href=\'http:\/\/code.google.com/intl/es/apis/maps/signup.html\'>obtén la tuya acá</a>';
$lang['es_ES']['DospuntoceroCMSCore']['GANALITYCSAPIKEYTITLE'] = 'Llave de acceso a google analitycs';
$lang['es_ES']['DospuntoceroCMSCore']['GANALITYCSAPIKEY'] = 'La llave de acceso a google analitycs es requerida para tener información de quien ingresa al sitio';


$lang['es_ES']['VCard']['CELLPHONE'] = 'Teléfono';
$lang['es_ES']['VCard']['EMAIL'] = 'Email';
$lang['es_ES']['VCard']['PHONEWORK'] = 'Teléfono';
$lang['es_ES']['VCard']['WORK'] = 'Dirección';
