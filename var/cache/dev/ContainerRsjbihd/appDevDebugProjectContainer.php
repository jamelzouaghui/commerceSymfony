<?php

namespace ContainerRsjbihd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'appbundle\\controller\\api\\postcontroller' => 'AppBundle\\Controller\\Api\\PostController',
            'appbundle\\controller\\defaultcontroller' => 'AppBundle\\Controller\\DefaultController',
            'fos\\restbundle\\request\\paramfetcherinterface' => 'FOS\\RestBundle\\Request\\ParamFetcherInterface',
            'fos\\restbundle\\view\\viewhandlerinterface' => 'FOS\\RestBundle\\View\\ViewHandlerInterface',
            'lexik\\bundle\\jwtauthenticationbundle\\encoder\\jwtencoderinterface' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Encoder\\JWTEncoderInterface',
            'lexik\\bundle\\jwtauthenticationbundle\\security\\http\\authentication\\authenticationfailurehandler' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationFailureHandler',
            'lexik\\bundle\\jwtauthenticationbundle\\security\\http\\authentication\\authenticationsuccesshandler' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationSuccessHandler',
            'lexik\\bundle\\jwtauthenticationbundle\\services\\jwsprovider\\jwsproviderinterface' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWSProvider\\JWSProviderInterface',
            'lexik\\bundle\\jwtauthenticationbundle\\services\\jwttokeninterface' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenInterface',
            'lexik\\bundle\\jwtauthenticationbundle\\services\\jwttokenmanagerinterface' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface',
            'lexik\\bundle\\jwtauthenticationbundle\\tokenextractor\\tokenextractorinterface' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\TokenExtractor\\TokenExtractorInterface',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        );
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_metadata_factory' => 'getArgumentMetadataFactoryService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'file_locator' => 'getFileLocatorService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'framework_extra_bundle.argument_name_convertor' => 'getFrameworkExtraBundle_ArgumentNameConvertorService',
            'framework_extra_bundle.event.is_granted' => 'getFrameworkExtraBundle_Event_IsGrantedService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer.metadata_factory' => 'getJmsSerializer_MetadataFactoryService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.server_log' => 'getMonolog_Handler_ServerLogService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'nelmio_api_doc.doc_comment_extractor' => 'getNelmioApiDoc_DocCommentExtractorService',
            'nelmio_api_doc.event_listener.request' => 'getNelmioApiDoc_EventListener_RequestService',
            'nelmio_api_doc.extractor.api_doc_extractor' => 'getNelmioApiDoc_Extractor_ApiDocExtractorService',
            'nelmio_api_doc.formatter.html_formatter' => 'getNelmioApiDoc_Formatter_HtmlFormatterService',
            'nelmio_api_doc.parser.collection_parser' => 'getNelmioApiDoc_Parser_CollectionParserService',
            'nelmio_api_doc.parser.form_errors_parser' => 'getNelmioApiDoc_Parser_FormErrorsParserService',
            'nelmio_api_doc.parser.form_type_parser' => 'getNelmioApiDoc_Parser_FormTypeParserService',
            'nelmio_api_doc.parser.jms_metadata_parser' => 'getNelmioApiDoc_Parser_JmsMetadataParserService',
            'nelmio_api_doc.parser.json_serializable_parser' => 'getNelmioApiDoc_Parser_JsonSerializableParserService',
            'nelmio_api_doc.parser.validation_parser' => 'getNelmioApiDoc_Parser_ValidationParserService',
            'nelmio_api_doc.twig.extension.extra_markdown' => 'getNelmioApiDoc_Twig_Extension_ExtraMarkdownService',
            'nelmio_cors.cors_listener' => 'getNelmioCors_CorsListenerService',
            'nelmio_cors.options_provider.config' => 'getNelmioCors_OptionsProvider_ConfigService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating' => 'getTemplatingService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->fileMap = array(
            'AppBundle\\Controller\\Api\\PostController' => 'getPostControllerService.php',
            'AppBundle\\Controller\\DefaultController' => 'getDefaultControllerService.php',
            'FOS\\RestBundle\\View\\ViewHandlerInterface' => 'getViewHandlerInterfaceService.php',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWSProvider\\JWSProviderInterface' => 'getJWSProviderInterfaceService.php',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\TokenExtractor\\TokenExtractorInterface' => 'getTokenExtractorInterfaceService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'config.resource.self_checking_resource_checker' => 'getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => 'getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'debug.dump_listener' => 'getDebug_DumpListenerService.php',
            'debug.file_link_formatter.url_format' => 'getDebug_FileLinkFormatter_UrlFormatService.php',
            'dependency_injection.config.container_parameters_resource_checker' => 'getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService.php',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService.php',
            'doctrine.orm.proxy_cache_warmer' => 'getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.server_params' => 'getForm_ServerParamsService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.choice' => 'getForm_Type_ChoiceService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.entity' => 'getForm_Type_EntityService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.form' => 'getForm_Type_FormService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService.php',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService.php',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService.php',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService.php',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService.php',
            'fos_rest.inflector' => 'getFosRest_InflectorService.php',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService.php',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService.php',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService.php',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService.php',
            'fos_rest.serializer' => 'getFosRest_SerializerService.php',
            'fos_rest.serializer.form_error_handler' => 'getFosRest_Serializer_FormErrorHandlerService.php',
            'fos_rest.serializer.jms_handler_registry.inner' => 'getFosRest_Serializer_JmsHandlerRegistry_InnerService.php',
            'fos_rest.view_response_listener' => 'getFosRest_ViewResponseListenerService.php',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService.php',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService.php',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService.php',
            'fos_user.command.activate_user' => 'getFosUser_Command_ActivateUserService.php',
            'fos_user.command.change_password' => 'getFosUser_Command_ChangePasswordService.php',
            'fos_user.command.create_user' => 'getFosUser_Command_CreateUserService.php',
            'fos_user.command.deactivate_user' => 'getFosUser_Command_DeactivateUserService.php',
            'fos_user.command.demote_user' => 'getFosUser_Command_DemoteUserService.php',
            'fos_user.command.promote_user' => 'getFosUser_Command_PromoteUserService.php',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService.php',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService.php',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService.php',
            'fos_user.mailer' => 'getFosUser_MailerService.php',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService.php',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService.php',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService.php',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService.php',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService.php',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService.php',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService.php',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService.php',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService.php',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService.php',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService.php',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService.php',
            'fos_user.user_manager' => 'getFosUser_UserManagerService.php',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService.php',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService.php',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService.php',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService.php',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.accessor_strategy' => 'getJmsSerializer_AccessorStrategyService.php',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService.php',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService.php',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService.php',
            'jms_serializer.expression_evaluator' => 'getJmsSerializer_ExpressionEvaluatorService.php',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService.php',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService.php',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService.php',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService.php',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService.php',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService.php',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'lexik_jwt_authentication.check_config_command' => 'getLexikJwtAuthentication_CheckConfigCommandService.php',
            'lexik_jwt_authentication.encoder.default' => 'getLexikJwtAuthentication_Encoder_DefaultService.php',
            'lexik_jwt_authentication.encoder.lcobucci' => 'getLexikJwtAuthentication_Encoder_LcobucciService.php',
            'lexik_jwt_authentication.extractor.authorization_header_extractor' => 'getLexikJwtAuthentication_Extractor_AuthorizationHeaderExtractorService.php',
            'lexik_jwt_authentication.extractor.cookie_extractor' => 'getLexikJwtAuthentication_Extractor_CookieExtractorService.php',
            'lexik_jwt_authentication.extractor.query_parameter_extractor' => 'getLexikJwtAuthentication_Extractor_QueryParameterExtractorService.php',
            'lexik_jwt_authentication.generate_token_command' => 'getLexikJwtAuthentication_GenerateTokenCommandService.php',
            'lexik_jwt_authentication.handler.authentication_failure' => 'getLexikJwtAuthentication_Handler_AuthenticationFailureService.php',
            'lexik_jwt_authentication.handler.authentication_success' => 'getLexikJwtAuthentication_Handler_AuthenticationSuccessService.php',
            'lexik_jwt_authentication.jws_provider.default' => 'getLexikJwtAuthentication_JwsProvider_DefaultService.php',
            'lexik_jwt_authentication.jwt_manager' => 'getLexikJwtAuthentication_JwtManagerService.php',
            'lexik_jwt_authentication.key_loader' => 'getLexikJwtAuthentication_KeyLoaderService.php',
            'lexik_jwt_authentication.security.guard.jwt_token_authenticator' => 'getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService.php',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService.php',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService.php',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService.php',
            'nelmio_api_doc.form.extension.description_form_type_extension' => 'getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService.php',
            'nelmio_api_doc.formatter.markdown_formatter' => 'getNelmioApiDoc_Formatter_MarkdownFormatterService.php',
            'nelmio_api_doc.formatter.simple_formatter' => 'getNelmioApiDoc_Formatter_SimpleFormatterService.php',
            'nelmio_api_doc.formatter.swagger_formatter' => 'getNelmioApiDoc_Formatter_SwaggerFormatterService.php',
            'property_accessor' => 'getPropertyAccessorService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService.php',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService.php',
            'security.access_listener' => 'getSecurity_AccessListenerService.php',
            'security.access_map' => 'getSecurity_AccessMapService.php',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.login' => 'getSecurity_Authentication_Listener_Anonymous_LoginService.php',
            'security.authentication.listener.anonymous.main' => 'getSecurity_Authentication_Listener_Anonymous_MainService.php',
            'security.authentication.listener.form.login' => 'getSecurity_Authentication_Listener_Form_LoginService.php',
            'security.authentication.listener.guard.api' => 'getSecurity_Authentication_Listener_Guard_ApiService.php',
            'security.authentication.provider.anonymous.login' => 'getSecurity_Authentication_Provider_Anonymous_LoginService.php',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService.php',
            'security.authentication.provider.dao.login' => 'getSecurity_Authentication_Provider_Dao_LoginService.php',
            'security.authentication.provider.guard.api' => 'getSecurity_Authentication_Provider_Guard_ApiService.php',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService.php',
            'security.authentication.session_strategy.login' => 'getSecurity_Authentication_SessionStrategy_LoginService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => 'getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => 'getSecurity_Command_UserPasswordEncoderService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.api' => 'getSecurity_Firewall_Map_Context_ApiService.php',
            'security.firewall.map.context.api_doc' => 'getSecurity_Firewall_Map_Context_ApiDocService.php',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.login' => 'getSecurity_Firewall_Map_Context_LoginService.php',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService.php',
            'security.http_utils' => 'getSecurity_HttpUtilsService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'security.request_matcher.00qf1z7' => 'getSecurity_RequestMatcher_00qf1z7Service.php',
            'security.request_matcher.b.bekep' => 'getSecurity_RequestMatcher_B_BekepService.php',
            'security.request_matcher.puajboz' => 'getSecurity_RequestMatcher_PuajbozService.php',
            'security.request_matcher.x1icpav' => 'getSecurity_RequestMatcher_X1icpavService.php',
            'security.request_matcher.y.peoiw' => 'getSecurity_RequestMatcher_Y_PeoiwService.php',
            'security.user_checker' => 'getSecurity_UserCheckerService.php',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService.php',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService.php',
            'serializer' => 'getSerializerService.php',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService.php',
            'serializer.mapping.cache_warmer' => 'getSerializer_Mapping_CacheWarmerService.php',
            'service_locator.sr6ctxe' => 'getServiceLocator_Sr6ctxeService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'session.handler' => 'getSession_HandlerService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService.php',
            'session.storage.native' => 'getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => 'getTemplating_FilenameParserService.php',
            'templating.finder' => 'getTemplating_FinderService.php',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.cache_warmer' => 'getTwig_CacheWarmerService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => 'getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'validator.email' => 'getValidator_EmailService.php',
            'validator.expression' => 'getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => 'getValidator_Mapping_CacheWarmerService.php',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
            'web_server.command.server_log' => 'getWebServer_Command_ServerLogService.php',
            'web_server.command.server_run' => 'getWebServer_Command_ServerRunService.php',
            'web_server.command.server_start' => 'getWebServer_Command_ServerStartService.php',
            'web_server.command.server_status' => 'getWebServer_Command_ServerStatusService.php',
            'web_server.command.server_stop' => 'getWebServer_Command_ServerStopService.php',
        );
        $this->privates = array(
            'FOS\\RestBundle\\Request\\ParamFetcherInterface' => true,
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Encoder\\JWTEncoderInterface' => true,
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationFailureHandler' => true,
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationSuccessHandler' => true,
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenInterface' => true,
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface' => true,
            'fos_rest.router' => true,
            'fos_rest.templating' => true,
            'fos_user.util.username_canonicalizer' => true,
            'lexik_jwt_authentication.jwt_token_authenticator' => true,
            'security.authentication.session_strategy.api' => true,
            'security.authentication.session_strategy.main' => true,
            'session.storage' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport' => true,
            'swiftmailer.transport.real' => true,
            'FOS\\RestBundle\\View\\ViewHandlerInterface' => true,
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWSProvider\\JWSProviderInterface' => true,
            'Lexik\\Bundle\\JWTAuthenticationBundle\\TokenExtractor\\TokenExtractorInterface' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_metadata_factory' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'data_collector.form' => true,
            'data_collector.form.extractor' => true,
            'data_collector.request' => true,
            'data_collector.router' => true,
            'data_collector.translation' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.dump_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.file_link_formatter.url_format' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.entity' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.doctrine' => true,
            'form.type_guesser.validator' => true,
            'fos_rest.body_listener' => true,
            'fos_rest.decoder.json' => true,
            'fos_rest.decoder.jsontoform' => true,
            'fos_rest.decoder.xml' => true,
            'fos_rest.decoder_provider' => true,
            'fos_rest.inflector' => true,
            'fos_rest.normalizer.camel_keys' => true,
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => true,
            'fos_rest.request.param_fetcher' => true,
            'fos_rest.request.param_fetcher.reader' => true,
            'fos_rest.serializer' => true,
            'fos_rest.serializer.form_error_handler' => true,
            'fos_rest.serializer.jms_handler_registry.inner' => true,
            'fos_rest.view_response_listener' => true,
            'fos_user.change_password.form.factory' => true,
            'fos_user.change_password.form.type' => true,
            'fos_user.command.activate_user' => true,
            'fos_user.command.change_password' => true,
            'fos_user.command.create_user' => true,
            'fos_user.command.deactivate_user' => true,
            'fos_user.command.demote_user' => true,
            'fos_user.command.promote_user' => true,
            'fos_user.listener.authentication' => true,
            'fos_user.listener.flash' => true,
            'fos_user.listener.resetting' => true,
            'fos_user.mailer' => true,
            'fos_user.profile.form.factory' => true,
            'fos_user.profile.form.type' => true,
            'fos_user.registration.form.factory' => true,
            'fos_user.registration.form.type' => true,
            'fos_user.resetting.form.factory' => true,
            'fos_user.resetting.form.type' => true,
            'fos_user.security.interactive_login_listener' => true,
            'fos_user.security.login_manager' => true,
            'fos_user.user_provider.username' => true,
            'fos_user.username_form_type' => true,
            'fos_user.util.canonical_fields_updater' => true,
            'fos_user.util.email_canonicalizer' => true,
            'fos_user.util.password_updater' => true,
            'fos_user.util.token_generator' => true,
            'fos_user.util.user_manipulator' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'framework_extra_bundle.argument_name_convertor' => true,
            'framework_extra_bundle.event.is_granted' => true,
            'jms_serializer.accessor_strategy' => true,
            'jms_serializer.expression_evaluator' => true,
            'jms_serializer.handler_registry' => true,
            'jms_serializer.metadata_factory' => true,
            'jms_serializer.naming_strategy' => true,
            'jms_serializer.templating.helper.serializer' => true,
            'jms_serializer.unserialize_object_constructor' => true,
            'kernel.class_cache.cache_warmer' => true,
            'lexik_jwt_authentication.encoder.default' => true,
            'lexik_jwt_authentication.encoder.lcobucci' => true,
            'lexik_jwt_authentication.extractor.authorization_header_extractor' => true,
            'lexik_jwt_authentication.extractor.cookie_extractor' => true,
            'lexik_jwt_authentication.extractor.query_parameter_extractor' => true,
            'lexik_jwt_authentication.handler.authentication_failure' => true,
            'lexik_jwt_authentication.handler.authentication_success' => true,
            'lexik_jwt_authentication.jws_provider.default' => true,
            'lexik_jwt_authentication.security.guard.jwt_token_authenticator' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.handler.console' => true,
            'monolog.handler.main' => true,
            'monolog.handler.null_internal' => true,
            'monolog.handler.server_log' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.profiler' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.logger.templating' => true,
            'monolog.logger.translation' => true,
            'nelmio_api_doc.doc_comment_extractor' => true,
            'nelmio_api_doc.event_listener.request' => true,
            'nelmio_api_doc.form.extension.description_form_type_extension' => true,
            'nelmio_api_doc.formatter.markdown_formatter' => true,
            'nelmio_api_doc.formatter.simple_formatter' => true,
            'nelmio_api_doc.parser.collection_parser' => true,
            'nelmio_api_doc.parser.form_errors_parser' => true,
            'nelmio_api_doc.parser.form_type_parser' => true,
            'nelmio_api_doc.parser.jms_metadata_parser' => true,
            'nelmio_api_doc.parser.json_serializable_parser' => true,
            'nelmio_api_doc.parser.validation_parser' => true,
            'nelmio_api_doc.twig.extension.extra_markdown' => true,
            'nelmio_cors.cors_listener' => true,
            'nelmio_cors.options_provider.config' => true,
            'profiler_listener' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.login' => true,
            'security.authentication.listener.anonymous.main' => true,
            'security.authentication.listener.form.login' => true,
            'security.authentication.listener.guard.api' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.login' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.dao.login' => true,
            'security.authentication.provider.guard.api' => true,
            'security.authentication.session_strategy' => true,
            'security.authentication.session_strategy.login' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.csrf.token_storage' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.api' => true,
            'security.firewall.map.context.api_doc' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.login' => true,
            'security.firewall.map.context.main' => true,
            'security.http_utils' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.00qf1z7' => true,
            'security.request_matcher.b.bekep' => true,
            'security.request_matcher.puajboz' => true,
            'security.request_matcher.x1icpav' => true,
            'security.request_matcher.y.peoiw' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'serializer.mapping.cache.symfony' => true,
            'serializer.mapping.cache_warmer' => true,
            'service_locator.sr6ctxe' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.finder' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'var_dumper.cli_dumper' => true,
            'web_profiler.csp.handler' => true,
            'web_profiler.debug_toolbar' => true,
            'web_server.command.server_log' => true,
            'web_server.command.server_run' => true,
            'web_server.command.server_start' => true,
            'web_server.command.server_status' => true,
            'web_server.command.server_stop' => true,
        );
        $this->aliases = array(
            'FOS\\RestBundle\\Request\\ParamFetcherInterface' => 'fos_rest.request.param_fetcher',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Encoder\\JWTEncoderInterface' => 'lexik_jwt_authentication.encoder.lcobucci',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationFailureHandler' => 'lexik_jwt_authentication.handler.authentication_failure',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\Http\\Authentication\\AuthenticationSuccessHandler' => 'lexik_jwt_authentication.handler.authentication_success',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenInterface' => 'lexik_jwt_authentication.jwt_manager',
            'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface' => 'lexik_jwt_authentication.jwt_manager',
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_rest.router' => 'router',
            'fos_rest.serializer.jms_handler_registry' => 'jms_serializer.handler_registry',
            'fos_rest.templating' => 'templating',
            'fos_rest.view_handler' => 'FOS\\RestBundle\\View\\ViewHandlerInterface',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'jms_serializer.form_error_handler' => 'fos_rest.serializer.form_error_handler',
            'lexik_jwt_authentication.encoder' => 'lexik_jwt_authentication.encoder.lcobucci',
            'lexik_jwt_authentication.jwt_token_authenticator' => 'lexik_jwt_authentication.security.guard.jwt_token_authenticator',
            'mailer' => 'swiftmailer.mailer.default',
            'security.authentication.session_strategy.api' => 'security.authentication.session_strategy.login',
            'security.authentication.session_strategy.main' => 'security.authentication.session_strategy.login',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/HttpKernelInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/TerminableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/HttpKernel.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/FileLocatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Config/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/UriSigner.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/AbstractTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/AbstractAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/PruneableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/FilesystemCommonTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/FilesystemTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/FilesystemAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/TraceableAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ServiceLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/SaveSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/ResolvedFormTypeFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/ResolvedFormTypeFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DependencyInjection/DependencyInjectionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormRegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/VersionStrategy/VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/VersionStrategy/EmptyVersionStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/PackageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Package.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/PathPackage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Packages.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Context/ContextInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Context/RequestStackContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/TemplateNameParserInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/TemplateNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Templating/TemplateNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Templating/Loader/TemplateLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ContainerConstraintValidatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ObjectInitializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Validator/Initializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Validation.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/FragmentListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/MessageSelector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Formatter/MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Formatter/MessageFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/TranslatorListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Profiler/ProfilerStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Profiler/FileProfilerStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/DataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/DataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/LateDataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/TimeDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/MemoryDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/DataCollector/ValidatorDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/AjaxDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/ExceptionDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/LoggerDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/EventDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/DataCollector/CacheDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/DataCollector/SecurityDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/DataCollector/TwigDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/ConfigDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Profiler/Profiler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/ProfilerListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/RequestDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/DataCollector/RequestDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/FormDataExtractor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/FormDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/DataCollector/TranslationDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Stopwatch/Stopwatch.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/EventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/ContainerAwareEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/TraceableControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/TraceableArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Log/DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Monolog/Processor/DebugProcessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/RequestContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/AuthorizationChecker.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Token/Storage/TokenStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Role/RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Role/RoleHierarchy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Security/FirewallMap.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/FirewallMapInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Logout/LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/RememberMe/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/AccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/TraceableAccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/LogoutUrlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/SecurityExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Profiler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/ProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/TranslationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/AssetExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/CodeExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/RoutingExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/YamlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/StopwatchExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/ExpressionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/HttpKernelExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/InitRuntimeInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/FormExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Dumper/DataDumperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Cloner/DumperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Dumper/AbstractDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Dumper/CliDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Dumper/HtmlDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/DumpExtension.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Twig/SerializerRuntimeExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Twig/WebProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/AppVariable.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Profiler/Profile.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Monolog/Handler/ConsoleHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Monolog/Handler/ServerLogHandler.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/RegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/Validator/DoctrineInitializer.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ControllerListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ParamConverterListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/ExpressionLanguage/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DoctrineParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DateTimeParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterManager.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Templating/TemplateGuesser.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/TemplateListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/HttpCacheListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Security/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/SecurityListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/IsGrantedListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentNameConverter.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/CanonicalFieldsUpdater.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Decoder/ContainerDecoderProvider.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/EventListener/BodyListener.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/DriverInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/LazyLoadingDriver.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Cache/FileCache.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/AdvancedMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/MetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Formatter/FormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Formatter/AbstractFormatter.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Formatter/HtmlFormatter.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Util/DocCommentExtractor.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Extractor/HandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Extractor/Handler/FosRestHandler.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Extractor/Handler/JmsSecurityExtraHandler.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Extractor/Handler/SensioFrameworkExtraHandler.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Extractor/Handler/PhpDocHandler.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Extractor/ApiDocExtractor.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Twig/Extension/MarkdownExtension.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Parser/ParserInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Parser/PostParserInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Parser/CollectionParser.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Parser/FormErrorsParser.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Parser/JsonSerializableParser.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/EventListener/RequestListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/DumpDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Cloner/ClonerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Cloner/AbstractCloner.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Cloner/VarCloner.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Csp/NonceGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Csp/ContentSecurityPolicyHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/EventListener/WebDebugToolbarListener.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Monolog/Logger.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Parser/FormTypeParser.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Parser/ValidationParser.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Parser/JmsMetadataParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/EngineInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/StreamingEngineInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/TwigEngine.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Templating/EngineInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/TwigEngine.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/LoggingTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/DataCollectorTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/RouterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/EventListener/FirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Debug/TraceableFirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/CanonicalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/Canonicalizer.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Naming/PropertyNamingStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Naming/CamelCaseNamingStrategy.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Naming/SerializedNameAnnotationStrategy.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Naming/CacheNamingStrategy.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Loader/FilesystemLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Validator/ValidatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Validator/TraceableValidator.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('01RBiNtJGy', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('O2S3BFvYlu', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->getForm_RegistryService()) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->getForm_ResolvedTypeFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_api_doc.extractor.api_doc_extractor' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor
     */
    protected function getNelmioApiDoc_Extractor_ApiDocExtractorService()
    {
        $a = ${($_ = isset($this->services['nelmio_api_doc.doc_comment_extractor']) ? $this->services['nelmio_api_doc.doc_comment_extractor'] : $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor()) && false ?: '_'};

        $this->services['nelmio_api_doc.extractor.api_doc_extractor'] = $instance = new \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor($this, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, $a, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}), array(0 => new \Nelmio\ApiDocBundle\Extractor\Handler\FosRestHandler(), 1 => new \Nelmio\ApiDocBundle\Extractor\Handler\JmsSecurityExtraHandler(), 2 => new \Nelmio\ApiDocBundle\Extractor\Handler\SensioFrameworkExtraHandler(), 3 => new \Nelmio\ApiDocBundle\Extractor\Handler\PhpDocHandler($a)), array());

        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.json_serializable_parser']) ? $this->services['nelmio_api_doc.parser.json_serializable_parser'] : $this->services['nelmio_api_doc.parser.json_serializable_parser'] = new \Nelmio\ApiDocBundle\Parser\JsonSerializableParser()) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.collection_parser']) ? $this->services['nelmio_api_doc.parser.collection_parser'] : $this->services['nelmio_api_doc.parser.collection_parser'] = new \Nelmio\ApiDocBundle\Parser\CollectionParser()) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.form_errors_parser']) ? $this->services['nelmio_api_doc.parser.form_errors_parser'] : $this->services['nelmio_api_doc.parser.form_errors_parser'] = new \Nelmio\ApiDocBundle\Parser\FormErrorsParser()) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.form_type_parser']) ? $this->services['nelmio_api_doc.parser.form_type_parser'] : $this->getNelmioApiDoc_Parser_FormTypeParserService()) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.validation_parser']) ? $this->services['nelmio_api_doc.parser.validation_parser'] : $this->getNelmioApiDoc_Parser_ValidationParserService()) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.jms_metadata_parser']) ? $this->services['nelmio_api_doc.parser.jms_metadata_parser'] : $this->getNelmioApiDoc_Parser_JmsMetadataParserService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'nelmio_api_doc.formatter.html_formatter' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\HtmlFormatter
     */
    protected function getNelmioApiDoc_Formatter_HtmlFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.html_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\HtmlFormatter();

        $instance->setTemplatingEngine(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'});
        $instance->setMotdTemplate('NelmioApiDocBundle::Components/motd.html.twig');
        $instance->setApiName('API documentation');
        $instance->setEnableSandbox(true);
        $instance->setEndpoint(NULL);
        $instance->setRequestFormatMethod('format_param');
        $instance->setRequestFormats($this->parameters['nelmio_api_doc.sandbox.request_format.formats']);
        $instance->setDefaultRequestFormat('json');
        $instance->setAcceptType(NULL);
        $instance->setBodyFormats($this->parameters['nelmio_api_doc.sandbox.body_format.formats']);
        $instance->setDefaultBodyFormat('form');
        $instance->setAuthentication(NULL);
        $instance->setDefaultSectionsOpened(true);

        return $instance;
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->getMonolog_Logger_ProfilerService()) && false ?: '_'};

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'});
        $instance->add($c);
        $instance->add(${($_ = isset($this->services['data_collector.translation']) ? $this->services['data_collector.translation'] : $this->getDataCollector_TranslationService()) && false ?: '_'});
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->getDataCollector_DumpService()) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing_dev.yml'), array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->getMonolog_Logger_TranslationService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};

        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(array('fileLinkFormat' => $b));

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->getVarDumper_ClonerService()) && false ?: '_'}, $d));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(${($_ = isset($this->services['nelmio_api_doc.twig.extension.extra_markdown']) ? $this->services['nelmio_api_doc.twig.extension.extra_markdown'] : $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension()) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => function () {
            return ${($_ = isset($this->services['jms_serializer.twig_extension.serializer_runtime_helper']) ? $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] : $this->load('getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->getValidator_BuilderService()) && false ?: '_'}->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load('getAnnotations_CacheService.php')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), array());
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('NUTBvMMI+0', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('FX8FtkrBo3', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('gLvBGJaaBm', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : $this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : $this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor()) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'}, new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load('getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.body_listener']) ? $this->services['fos_rest.body_listener'] : $this->getFosRest_BodyListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['nelmio_cors.cors_listener']) ? $this->services['nelmio_cors.cors_listener'] : $this->getNelmioCors_CorsListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 250);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['nelmio_api_doc.event_listener.request']) ? $this->services['nelmio_api_doc.event_listener.request'] : $this->getNelmioApiDoc_EventListener_RequestService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), -64);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ${($_ = isset($this->services['framework_extra_bundle.event.is_granted']) ? $this->services['framework_extra_bundle.event.is_granted'] : $this->getFrameworkExtraBundle_Event_IsGrantedService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('fos_user.security.implicit_login', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->load('getFosUser_Security_InteractiveLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onImplicitLogin'), 0);
        $instance->addListener('security.interactive_login', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->load('getFosUser_Security_InteractiveLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListener('fos_user.registration.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.registration.confirmed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.resetting.reset.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'), 0);
        $instance->addListener('fos_user.change_password.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.create.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.delete.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.group.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.profile.edit.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.registration.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.resetting.reset.completed', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'), 0);
        $instance->addListener('fos_user.resetting.reset.initialize', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetInitialize'), 0);
        $instance->addListener('fos_user.resetting.reset.success', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetSuccess'), 0);
        $instance->addListener('fos_user.resetting.reset.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetRequest'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.view_response_listener']) ? $this->services['fos_rest.view_response_listener'] : $this->load('getFosRest_ViewResponseListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelView'), 30);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->load('getDebug_DumpListenerService.php')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->getWebProfiler_DebugToolbarService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, $this->targetDirs[3], function () {
            return ${($_ = isset($this->services['debug.file_link_formatter.url_format']) ? $this->services['debug.file_link_formatter.url_format'] : $this->load('getDebug_FileLinkFormatter_UrlFormatService.php')) && false ?: '_'};
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load('getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->load('getSecurity_Access_RoleHierarchyVoterService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load('getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => function () {
            return ${($_ = isset($this->services['fos_user.change_password.form.type']) ? $this->services['fos_user.change_password.form.type'] : $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('UserBundle\\Entity\\User')) && false ?: '_'};
        }, 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => function () {
            return ${($_ = isset($this->services['fos_user.profile.form.type']) ? $this->services['fos_user.profile.form.type'] : $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('UserBundle\\Entity\\User')) && false ?: '_'};
        }, 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => function () {
            return ${($_ = isset($this->services['fos_user.registration.form.type']) ? $this->services['fos_user.registration.form.type'] : $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('UserBundle\\Entity\\User')) && false ?: '_'};
        }, 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => function () {
            return ${($_ = isset($this->services['fos_user.resetting.form.type']) ? $this->services['fos_user.resetting.form.type'] : $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('UserBundle\\Entity\\User')) && false ?: '_'};
        }, 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => function () {
            return ${($_ = isset($this->services['fos_user.username_form_type']) ? $this->services['fos_user.username_form_type'] : $this->load('getFosUser_UsernameFormTypeService.php')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->load('getForm_Type_EntityService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->load('getForm_Type_ChoiceService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->load('getForm_Type_FormService.php')) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->load('getForm_TypeExtension_Form_HttpFoundationService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->load('getForm_TypeExtension_Form_ValidatorService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->load('getForm_TypeExtension_Upload_ValidatorService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->load('getForm_TypeExtension_CsrfService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->load('getForm_TypeExtension_Form_DataCollectorService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['nelmio_api_doc.form.extension.description_form_type_extension']) ? $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] : $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension()) && false ?: '_'};
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->load('getForm_TypeGuesser_ValidatorService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->load('getForm_TypeGuesser_DoctrineService.php')) && false ?: '_'};
        }, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->getForm_ResolvedTypeFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(${($_ = isset($this->services['fos_rest.decoder_provider']) ? $this->services['fos_rest.decoder_provider'] : $this->getFosRest_DecoderProviderService()) && false ?: '_'}, false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the private 'fos_rest.decoder_provider' shared service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->services['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(array('fos_rest.decoder.json' => function () {
            return ${($_ = isset($this->services['fos_rest.decoder.json']) ? $this->services['fos_rest.decoder.json'] : $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder()) && false ?: '_'};
        }, 'fos_rest.decoder.xml' => function () {
            return ${($_ = isset($this->services['fos_rest.decoder.xml']) ? $this->services['fos_rest.decoder.xml'] : $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder()) && false ?: '_'};
        })), array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = ${($_ = isset($this->services['fos_user.util.email_canonicalizer']) ? $this->services['fos_user.util.email_canonicalizer'] : $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer()) && false ?: '_'};

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'fos_user.util.email_canonicalizer' shared service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->services['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'});
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->services['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'jms_serializer.metadata_factory' shared service.
     *
     * @return \Metadata\MetadataFactory
     */
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->services['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/jms_serializer')));

        return $instance;
    }

    /**
     * Gets the private 'jms_serializer.naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ServerLogHandler
     */
    protected function getMonolog_Handler_ServerLogService()
    {
        return $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true);
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'nelmio_api_doc.doc_comment_extractor' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Util\DocCommentExtractor
     */
    protected function getNelmioApiDoc_DocCommentExtractorService()
    {
        return $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor();
    }

    /**
     * Gets the private 'nelmio_api_doc.event_listener.request' shared service.
     *
     * @return \Nelmio\ApiDocBundle\EventListener\RequestListener
     */
    protected function getNelmioApiDoc_EventListener_RequestService()
    {
        return $this->services['nelmio_api_doc.event_listener.request'] = new \Nelmio\ApiDocBundle\EventListener\RequestListener(${($_ = isset($this->services['nelmio_api_doc.extractor.api_doc_extractor']) ? $this->services['nelmio_api_doc.extractor.api_doc_extractor'] : $this->getNelmioApiDoc_Extractor_ApiDocExtractorService()) && false ?: '_'}, ${($_ = isset($this->services['nelmio_api_doc.formatter.html_formatter']) ? $this->services['nelmio_api_doc.formatter.html_formatter'] : $this->getNelmioApiDoc_Formatter_HtmlFormatterService()) && false ?: '_'}, '_doc');
    }

    /**
     * Gets the private 'nelmio_api_doc.parser.collection_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\CollectionParser
     */
    protected function getNelmioApiDoc_Parser_CollectionParserService()
    {
        return $this->services['nelmio_api_doc.parser.collection_parser'] = new \Nelmio\ApiDocBundle\Parser\CollectionParser();
    }

    /**
     * Gets the private 'nelmio_api_doc.parser.form_errors_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormErrorsParser
     */
    protected function getNelmioApiDoc_Parser_FormErrorsParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_errors_parser'] = new \Nelmio\ApiDocBundle\Parser\FormErrorsParser();
    }

    /**
     * Gets the private 'nelmio_api_doc.parser.form_type_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormTypeParser
     */
    protected function getNelmioApiDoc_Parser_FormTypeParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_type_parser'] = new \Nelmio\ApiDocBundle\Parser\FormTypeParser(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->getForm_FactoryService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'nelmio_api_doc.parser.jms_metadata_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\JmsMetadataParser
     */
    protected function getNelmioApiDoc_Parser_JmsMetadataParserService()
    {
        return $this->services['nelmio_api_doc.parser.jms_metadata_parser'] = new \Nelmio\ApiDocBundle\Parser\JmsMetadataParser(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.naming_strategy']) ? $this->services['jms_serializer.naming_strategy'] : $this->getJmsSerializer_NamingStrategyService()) && false ?: '_'}, ${($_ = isset($this->services['nelmio_api_doc.doc_comment_extractor']) ? $this->services['nelmio_api_doc.doc_comment_extractor'] : $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor()) && false ?: '_'});
    }

    /**
     * Gets the private 'nelmio_api_doc.parser.json_serializable_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\JsonSerializableParser
     */
    protected function getNelmioApiDoc_Parser_JsonSerializableParserService()
    {
        return $this->services['nelmio_api_doc.parser.json_serializable_parser'] = new \Nelmio\ApiDocBundle\Parser\JsonSerializableParser();
    }

    /**
     * Gets the private 'nelmio_api_doc.parser.validation_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\ValidationParser
     */
    protected function getNelmioApiDoc_Parser_ValidationParserService()
    {
        return $this->services['nelmio_api_doc.parser.validation_parser'] = new \Nelmio\ApiDocBundle\Parser\ValidationParser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'nelmio_api_doc.twig.extension.extra_markdown' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension
     */
    protected function getNelmioApiDoc_Twig_Extension_ExtraMarkdownService()
    {
        return $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension();
    }

    /**
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->services['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, new \Nelmio\CorsBundle\Options\Resolver(array(0 => ${($_ = isset($this->services['nelmio_cors.options_provider.config']) ? $this->services['nelmio_cors.options_provider.config'] : $this->getNelmioCors_OptionsProvider_ConfigService()) && false ?: '_'})));
    }

    /**
     * Gets the private 'nelmio_cors.options_provider.config' shared service.
     *
     * @return \Nelmio\CorsBundle\Options\ConfigProvider
     */
    protected function getNelmioCors_OptionsProvider_ConfigService()
    {
        return $this->services['nelmio_cors.options_provider.config'] = new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->parameters['nelmio_cors.defaults']);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'})) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.login']) ? $this->services['security.authentication.provider.dao.login'] : $this->load('getSecurity_Authentication_Provider_Dao_LoginService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.login']) ? $this->services['security.authentication.provider.anonymous.login'] : $this->services['security.authentication.provider.anonymous.login'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.authentication.provider.guard.api']) ? $this->services['security.authentication.provider.guard.api'] : $this->load('getSecurity_Authentication_Provider_Guard_ApiService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))) && false ?: '_'};
        }, 4), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.api' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.api']) ? $this->services['security.firewall.map.context.api'] : $this->load('getSecurity_Firewall_Map_Context_ApiService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.api_doc' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.api_doc']) ? $this->services['security.firewall.map.context.api_doc'] : $this->load('getSecurity_Firewall_Map_Context_ApiDocService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load('getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.login' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.login']) ? $this->services['security.firewall.map.context.login'] : $this->load('getSecurity_Firewall_Map_Context_LoginService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->load('getSecurity_Firewall_Map_Context_MainService.php')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.y.peoiw']) ? $this->services['security.request_matcher.y.peoiw'] : $this->services['security.request_matcher.y.peoiw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt|error)|css|images|js)/')) && false ?: '_'};
            yield 'security.firewall.map.context.api_doc' => ${($_ = isset($this->services['security.request_matcher.b.bekep']) ? $this->services['security.request_matcher.b.bekep'] : $this->services['security.request_matcher.b.bekep'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/doc')) && false ?: '_'};
            yield 'security.firewall.map.context.login' => ${($_ = isset($this->services['security.request_matcher.puajboz']) ? $this->services['security.request_matcher.puajboz'] : $this->services['security.request_matcher.puajboz'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/login_check')) && false ?: '_'};
            yield 'security.firewall.map.context.api' => ${($_ = isset($this->services['security.request_matcher.x1icpav']) ? $this->services['security.request_matcher.x1icpav'] : $this->services['security.request_matcher.x1icpav'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api')) && false ?: '_'};
            yield 'security.firewall.map.context.main' => ${($_ = isset($this->services['security.request_matcher.00qf1z7']) ? $this->services['security.request_matcher.00qf1z7'] : $this->services['security.request_matcher.00qf1z7'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')) && false ?: '_'};
        }, 5));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader()) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader()) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader()) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader()) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader()) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader()) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader()) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader()) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader()) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()) && false ?: '_'};
        })), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')), 'tl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'bn' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml')), 'bn_BD' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml')), 'eo' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml')))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'})) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'/src/UserBundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '!FOSUser');
        $instance->addPath(($this->targetDirs[3].'/src/UserBundle/Resources/views'), 'User');
        $instance->addPath(($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), 'NelmioApiDoc');
        $instance->addPath(($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), '!NelmioApiDoc');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '!Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '!WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false)) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->getDoctrine_Orm_ValidatorInitializerService()) && false ?: '_'}, 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'})));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'router.resource' => false,
        'serializer.mapping.cache.file' => false,
        'twig.default_path' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'doctrine.orm.proxy_dir' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'UserBundle' => array(
                    'parent' => 'FOSUserBundle',
                    'path' => ($this->targetDirs[3].'/src/UserBundle'),
                    'namespace' => 'UserBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'NelmioCorsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ),
                'LexikJWTAuthenticationBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle'),
                    'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle',
                ),
                'JMSSerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'NelmioApiDocBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle'),
                    'namespace' => 'Nelmio\\ApiDocBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'WebServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[2].'/sessions/dev'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/appDevDebugProjectContainer.xml'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing_dev.yml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'UserBundle' => 'UserBundle\\UserBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'db_commercial',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => 'jamel.arya@gmail.com',
            'mailer_password' => 'esperance',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'jwt_key_pass_phrase' => 'esperance',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.server_log' => NULL,
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => 'jamel.arya@gmail.com',
            'swiftmailer.mailer.default.transport.smtp.password' => 'esperance',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'UserBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'jamel.arya@gmail.com' => 'jamel.arya@gmail.com',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'jamel.arya@gmail.com' => 'jamel.arya@gmail.com',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'nelmio_cors.map' => array(
                '^/api/' => array(
                    'allow_origin' => true,
                    'allow_headers' => true,
                    'allow_methods' => array(
                        0 => 'POST',
                        1 => 'PUT',
                        2 => 'GET',
                        3 => 'DELETE',
                    ),
                    'max_age' => 3600,
                ),
            ),
            'nelmio_cors.defaults' => array(
                'allow_origin' => array(

                ),
                'allow_credentials' => false,
                'allow_headers' => array(

                ),
                'expose_headers' => array(

                ),
                'allow_methods' => array(

                ),
                'max_age' => 0,
                'hosts' => array(

                ),
                'origin_regex' => false,
                'forced_allow_origin_value' => NULL,
            ),
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'lexik_jwt_authentication.pass_phrase' => 'esperance',
            'lexik_jwt_authentication.token_ttl' => 3600,
            'lexik_jwt_authentication.clock_skew' => 0,
            'lexik_jwt_authentication.user_identity_field' => 'username',
            'lexik_jwt_authentication.encoder.signature_algorithm' => 'RS256',
            'lexik_jwt_authentication.encoder.crypto_engine' => 'openssl',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'jms_serializer.cache.cache_warmer.class' => 'JMS\\SerializerBundle\\Cache\\CacheWarmer',
            'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig',
            'nelmio_api_doc.exclude_sections' => array(

            ),
            'nelmio_api_doc.default_sections_opened' => true,
            'nelmio_api_doc.api_name' => 'API documentation',
            'nelmio_api_doc.sandbox.enabled' => true,
            'nelmio_api_doc.sandbox.endpoint' => NULL,
            'nelmio_api_doc.sandbox.accept_type' => NULL,
            'nelmio_api_doc.sandbox.body_format.formats' => array(
                0 => 'form',
                1 => 'json',
            ),
            'nelmio_api_doc.sandbox.body_format.default_format' => 'form',
            'nelmio_api_doc.sandbox.request_format.method' => 'format_param',
            'nelmio_api_doc.sandbox.request_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.formats' => array(
                'json' => 'application/json',
                'xml' => 'application/xml',
            ),
            'nelmio_api_doc.sandbox.entity_to_choice' => true,
            'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter',
            'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter',
            'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter',
            'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter',
            'nelmio_api_doc.formatter.swagger_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SwaggerFormatter',
            'nelmio_api_doc.sandbox.authentication' => NULL,
            'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor',
            'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension',
            'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension',
            'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor',
            'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler',
            'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler',
            'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler',
            'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler',
            'nelmio_api_doc.parser.collection_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\CollectionParser',
            'nelmio_api_doc.parser.form_errors_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormErrorsParser',
            'nelmio_api_doc.parser.json_serializable_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JsonSerializableParser',
            'nelmio_api_doc.request_listener.parameter' => '_doc',
            'nelmio_api_doc.event_listener.request.class' => 'Nelmio\\ApiDocBundle\\EventListener\\RequestListener',
            'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParser',
            'nelmio_api_doc.swagger.base_path' => '/api',
            'nelmio_api_doc.swagger.swagger_version' => '1.2',
            'nelmio_api_doc.swagger.api_version' => '0.1',
            'nelmio_api_doc.swagger.info' => array(
                'title' => 'Symfony2',
                'description' => 'My awesome Symfony2 app!',
                'TermsOfServiceUrl' => NULL,
                'contact' => NULL,
                'license' => NULL,
                'licenseUrl' => NULL,
            ),
            'nelmio_api_doc.swagger.model_naming_strategy' => 'dot_notation',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.validator' => array(
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'nelmio_api_doc.parser.form_type_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormTypeParser',
            'nelmio_api_doc.parser.jms_metadata_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JmsMetadataParser',
            'console.command.ids' => array(
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.fos_userbundle_command_activateusercommand' => 'fos_user.command.activate_user',
                'console.command.fos_userbundle_command_changepasswordcommand' => 'fos_user.command.change_password',
                'console.command.fos_userbundle_command_createusercommand' => 'fos_user.command.create_user',
                'console.command.fos_userbundle_command_deactivateusercommand' => 'fos_user.command.deactivate_user',
                'console.command.fos_userbundle_command_demoteusercommand' => 'fos_user.command.demote_user',
                'console.command.fos_userbundle_command_promoteusercommand' => 'fos_user.command.promote_user',
                'console.command.lexik_bundle_jwtauthenticationbundle_command_checkconfigcommand' => 'lexik_jwt_authentication.check_config_command',
                'console.command.lexik_bundle_jwtauthenticationbundle_command_generatetokencommand' => 'lexik_jwt_authentication.generate_token_command',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'fos_user.command.activate_user' => true,
                'fos_user.command.change_password' => true,
                'fos_user.command.create_user' => true,
                'fos_user.command.deactivate_user' => true,
                'fos_user.command.demote_user' => true,
                'fos_user.command.promote_user' => true,
                'lexik_jwt_authentication.check_config_command' => true,
                'lexik_jwt_authentication.generate_token_command' => true,
                'sensio_distribution.security_checker.command' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
            ),
        );
    }
}
