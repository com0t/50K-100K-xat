<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3fdbdc9a6d7ece90487f43492ad1f81
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebpConverter\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebpConverter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WebpConverter\\Action\\ConvertAttachment' => __DIR__ . '/../..' . '/src/Action/ConvertAttachment.php',
        'WebpConverter\\Action\\ConvertDir' => __DIR__ . '/../..' . '/src/Action/ConvertDir.php',
        'WebpConverter\\Action\\ConvertPaths' => __DIR__ . '/../..' . '/src/Action/ConvertPaths.php',
        'WebpConverter\\Action\\DeletePaths' => __DIR__ . '/../..' . '/src/Action/DeletePaths.php',
        'WebpConverter\\Action\\RegenerateAll' => __DIR__ . '/../..' . '/src/Action/RegenerateAll.php',
        'WebpConverter\\Conversion\\Cron\\Event' => __DIR__ . '/../..' . '/src/Conversion/Cron/Event.php',
        'WebpConverter\\Conversion\\Cron\\Schedules' => __DIR__ . '/../..' . '/src/Conversion/Cron/Schedules.php',
        'WebpConverter\\Conversion\\Directories' => __DIR__ . '/../..' . '/src/Conversion/Directories.php',
        'WebpConverter\\Conversion\\DirectoryFiles' => __DIR__ . '/../..' . '/src/Conversion/DirectoryFiles.php',
        'WebpConverter\\Conversion\\Directory\\DirectoriesIntegration' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoriesIntegration.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryAbstract' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryAbstract.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryInterface' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryInterface.php',
        'WebpConverter\\Conversion\\Directory\\GalleryDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/GalleryDirectory.php',
        'WebpConverter\\Conversion\\Directory\\PluginsDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/PluginsDirectory.php',
        'WebpConverter\\Conversion\\Directory\\ThemesDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/ThemesDirectory.php',
        'WebpConverter\\Conversion\\Directory\\UploadsDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/UploadsDirectory.php',
        'WebpConverter\\Conversion\\Directory\\UploadsWebpcDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/UploadsWebpcDirectory.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointAbstract' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointAbstract.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointIntegration' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointIntegration.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointInterface' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointInterface.php',
        'WebpConverter\\Conversion\\Endpoint\\PathsEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/PathsEndpoint.php',
        'WebpConverter\\Conversion\\Endpoint\\RegenerateEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/RegenerateEndpoint.php',
        'WebpConverter\\Conversion\\Endpoints' => __DIR__ . '/../..' . '/src/Conversion/Endpoints.php',
        'WebpConverter\\Conversion\\Exception\\ConversionErrorException' => __DIR__ . '/../..' . '/src/Conversion/Exception/ConversionErrorException.php',
        'WebpConverter\\Conversion\\Exception\\ExceptionAbstract' => __DIR__ . '/../..' . '/src/Conversion/Exception/ExceptionAbstract.php',
        'WebpConverter\\Conversion\\Exception\\ExceptionInterface' => __DIR__ . '/../..' . '/src/Conversion/Exception/ExceptionInterface.php',
        'WebpConverter\\Conversion\\Exception\\ExtensionUnsupportedException' => __DIR__ . '/../..' . '/src/Conversion/Exception/ExtensionUnsupportedException.php',
        'WebpConverter\\Conversion\\Exception\\FunctionUnavailableException' => __DIR__ . '/../..' . '/src/Conversion/Exception/FunctionUnavailableException.php',
        'WebpConverter\\Conversion\\Exception\\ImageInvalidException' => __DIR__ . '/../..' . '/src/Conversion/Exception/ImageInvalidException.php',
        'WebpConverter\\Conversion\\Exception\\ImagickNotSupportWebpException' => __DIR__ . '/../..' . '/src/Conversion/Exception/ImagickNotSupportWebpException.php',
        'WebpConverter\\Conversion\\Exception\\ImagickUnavailableException' => __DIR__ . '/../..' . '/src/Conversion/Exception/ImagickUnavailableException.php',
        'WebpConverter\\Conversion\\Exception\\LargerThanOriginalException' => __DIR__ . '/../..' . '/src/Conversion/Exception/LargerThanOriginalException.php',
        'WebpConverter\\Conversion\\Exception\\OutputPathException' => __DIR__ . '/../..' . '/src/Conversion/Exception/OutputPathException.php',
        'WebpConverter\\Conversion\\Exception\\ResolutionOversizeException' => __DIR__ . '/../..' . '/src/Conversion/Exception/ResolutionOversizeException.php',
        'WebpConverter\\Conversion\\Exception\\ServerConfigurationException' => __DIR__ . '/../..' . '/src/Conversion/Exception/ServerConfigurationException.php',
        'WebpConverter\\Conversion\\Exception\\SourcePathException' => __DIR__ . '/../..' . '/src/Conversion/Exception/SourcePathException.php',
        'WebpConverter\\Conversion\\Format\\AvifFormat' => __DIR__ . '/../..' . '/src/Conversion/Format/AvifFormat.php',
        'WebpConverter\\Conversion\\Format\\FormatAbstract' => __DIR__ . '/../..' . '/src/Conversion/Format/FormatAbstract.php',
        'WebpConverter\\Conversion\\Format\\FormatInterface' => __DIR__ . '/../..' . '/src/Conversion/Format/FormatInterface.php',
        'WebpConverter\\Conversion\\Format\\WebpFormat' => __DIR__ . '/../..' . '/src/Conversion/Format/WebpFormat.php',
        'WebpConverter\\Conversion\\Formats' => __DIR__ . '/../..' . '/src/Conversion/Formats.php',
        'WebpConverter\\Conversion\\Media\\Attachment' => __DIR__ . '/../..' . '/src/Conversion/Media/Attachment.php',
        'WebpConverter\\Conversion\\Media\\Delete' => __DIR__ . '/../..' . '/src/Conversion/Media/Delete.php',
        'WebpConverter\\Conversion\\Media\\Upload' => __DIR__ . '/../..' . '/src/Conversion/Media/Upload.php',
        'WebpConverter\\Conversion\\Method\\GdMethod' => __DIR__ . '/../..' . '/src/Conversion/Method/GdMethod.php',
        'WebpConverter\\Conversion\\Method\\ImagickMethod' => __DIR__ . '/../..' . '/src/Conversion/Method/ImagickMethod.php',
        'WebpConverter\\Conversion\\Method\\MethodAbstract' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodAbstract.php',
        'WebpConverter\\Conversion\\Method\\MethodIntegrator' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodIntegrator.php',
        'WebpConverter\\Conversion\\Method\\MethodInterface' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodInterface.php',
        'WebpConverter\\Conversion\\Methods' => __DIR__ . '/../..' . '/src/Conversion/Methods.php',
        'WebpConverter\\Conversion\\OutputPath' => __DIR__ . '/../..' . '/src/Conversion/OutputPath.php',
        'WebpConverter\\Conversion\\SkipExists' => __DIR__ . '/../..' . '/src/Conversion/SkipExists.php',
        'WebpConverter\\Conversion\\SkipLarger' => __DIR__ . '/../..' . '/src/Conversion/SkipLarger.php',
        'WebpConverter\\Error\\ErrorAbstract' => __DIR__ . '/../..' . '/src/Error/ErrorAbstract.php',
        'WebpConverter\\Error\\ErrorInterface' => __DIR__ . '/../..' . '/src/Error/ErrorInterface.php',
        'WebpConverter\\Error\\Errors' => __DIR__ . '/../..' . '/src/Error/Errors.php',
        'WebpConverter\\Error\\LibsInstalledError' => __DIR__ . '/../..' . '/src/Error/LibsInstalledError.php',
        'WebpConverter\\Error\\LibsSupportAvifError' => __DIR__ . '/../..' . '/src/Error/LibsSupportAvifError.php',
        'WebpConverter\\Error\\LibsSupportWebpError' => __DIR__ . '/../..' . '/src/Error/LibsSupportWebpError.php',
        'WebpConverter\\Error\\PassthruError' => __DIR__ . '/../..' . '/src/Error/PassthruError.php',
        'WebpConverter\\Error\\PathsError' => __DIR__ . '/../..' . '/src/Error/PathsError.php',
        'WebpConverter\\Error\\RestapiError' => __DIR__ . '/../..' . '/src/Error/RestapiError.php',
        'WebpConverter\\Error\\RewritesError' => __DIR__ . '/../..' . '/src/Error/RewritesError.php',
        'WebpConverter\\Error\\SettingsError' => __DIR__ . '/../..' . '/src/Error/SettingsError.php',
        'WebpConverter\\Helper\\FileLoader' => __DIR__ . '/../..' . '/src/Helper/FileLoader.php',
        'WebpConverter\\Helper\\ViewLoader' => __DIR__ . '/../..' . '/src/Helper/ViewLoader.php',
        'WebpConverter\\HookableInterface' => __DIR__ . '/../..' . '/src/HookableInterface.php',
        'WebpConverter\\Loader\\HtaccessLoader' => __DIR__ . '/../..' . '/src/Loader/HtaccessLoader.php',
        'WebpConverter\\Loader\\LoaderAbstract' => __DIR__ . '/../..' . '/src/Loader/LoaderAbstract.php',
        'WebpConverter\\Loader\\LoaderIntegration' => __DIR__ . '/../..' . '/src/Loader/LoaderIntegration.php',
        'WebpConverter\\Loader\\LoaderInterface' => __DIR__ . '/../..' . '/src/Loader/LoaderInterface.php',
        'WebpConverter\\Loader\\Loaders' => __DIR__ . '/../..' . '/src/Loader/Loaders.php',
        'WebpConverter\\Loader\\PassthruLoader' => __DIR__ . '/../..' . '/src/Loader/PassthruLoader.php',
        'WebpConverter\\Notice\\NoticeAbstract' => __DIR__ . '/../..' . '/src/Notice/NoticeAbstract.php',
        'WebpConverter\\Notice\\NoticeIntegration' => __DIR__ . '/../..' . '/src/Notice/NoticeIntegration.php',
        'WebpConverter\\Notice\\NoticeInterface' => __DIR__ . '/../..' . '/src/Notice/NoticeInterface.php',
        'WebpConverter\\Notice\\Notices' => __DIR__ . '/../..' . '/src/Notice/Notices.php',
        'WebpConverter\\Notice\\ThanksNotice' => __DIR__ . '/../..' . '/src/Notice/ThanksNotice.php',
        'WebpConverter\\Notice\\WelcomeNotice' => __DIR__ . '/../..' . '/src/Notice/WelcomeNotice.php',
        'WebpConverter\\PluginAccessAbstract' => __DIR__ . '/../..' . '/src/PluginAccessAbstract.php',
        'WebpConverter\\PluginAccessInterface' => __DIR__ . '/../..' . '/src/PluginAccessInterface.php',
        'WebpConverter\\Plugin\\Activation' => __DIR__ . '/../..' . '/src/Plugin/Activation.php',
        'WebpConverter\\Plugin\\Activation\\DefaultSettings' => __DIR__ . '/../..' . '/src/Plugin/Activation/DefaultSettings.php',
        'WebpConverter\\Plugin\\Activation\\RefreshLoader' => __DIR__ . '/../..' . '/src/Plugin/Activation/RefreshLoader.php',
        'WebpConverter\\Plugin\\Activation\\WebpDirectory' => __DIR__ . '/../..' . '/src/Plugin/Activation/WebpDirectory.php',
        'WebpConverter\\Plugin\\Deactivation' => __DIR__ . '/../..' . '/src/Plugin/Deactivation.php',
        'WebpConverter\\Plugin\\Deactivation\\CronReset' => __DIR__ . '/../..' . '/src/Plugin/Deactivation/CronReset.php',
        'WebpConverter\\Plugin\\Deactivation\\Modal' => __DIR__ . '/../..' . '/src/Plugin/Deactivation/Modal.php',
        'WebpConverter\\Plugin\\Deactivation\\RefreshLoader' => __DIR__ . '/../..' . '/src/Plugin/Deactivation/RefreshLoader.php',
        'WebpConverter\\Plugin\\Links' => __DIR__ . '/../..' . '/src/Plugin/Links.php',
        'WebpConverter\\Plugin\\Uninstall' => __DIR__ . '/../..' . '/src/Plugin/Uninstall.php',
        'WebpConverter\\Plugin\\Uninstall\\DebugFiles' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/DebugFiles.php',
        'WebpConverter\\Plugin\\Uninstall\\HtaccessFile' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/HtaccessFile.php',
        'WebpConverter\\Plugin\\Uninstall\\PluginSettings' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/PluginSettings.php',
        'WebpConverter\\Plugin\\Uninstall\\WebpFiles' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/WebpFiles.php',
        'WebpConverter\\Plugin\\Update' => __DIR__ . '/../..' . '/src/Plugin/Update.php',
        'WebpConverter\\Settings\\AdminAssets' => __DIR__ . '/../..' . '/src/Settings/AdminAssets.php',
        'WebpConverter\\Settings\\Option\\ConversionMethodOption' => __DIR__ . '/../..' . '/src/Settings/Option/ConversionMethodOption.php',
        'WebpConverter\\Settings\\Option\\ExtraFeaturesOption' => __DIR__ . '/../..' . '/src/Settings/Option/ExtraFeaturesOption.php',
        'WebpConverter\\Settings\\Option\\ImagesQualityOption' => __DIR__ . '/../..' . '/src/Settings/Option/ImagesQualityOption.php',
        'WebpConverter\\Settings\\Option\\LoaderTypeOption' => __DIR__ . '/../..' . '/src/Settings/Option/LoaderTypeOption.php',
        'WebpConverter\\Settings\\Option\\OptionAbstract' => __DIR__ . '/../..' . '/src/Settings/Option/OptionAbstract.php',
        'WebpConverter\\Settings\\Option\\OptionIntegration' => __DIR__ . '/../..' . '/src/Settings/Option/OptionIntegration.php',
        'WebpConverter\\Settings\\Option\\OptionInterface' => __DIR__ . '/../..' . '/src/Settings/Option/OptionInterface.php',
        'WebpConverter\\Settings\\Option\\OutputFormatsOption' => __DIR__ . '/../..' . '/src/Settings/Option/OutputFormatsOption.php',
        'WebpConverter\\Settings\\Option\\SupportedDirectoriesOption' => __DIR__ . '/../..' . '/src/Settings/Option/SupportedDirectoriesOption.php',
        'WebpConverter\\Settings\\Option\\SupportedExtensionsOption' => __DIR__ . '/../..' . '/src/Settings/Option/SupportedExtensionsOption.php',
        'WebpConverter\\Settings\\Options' => __DIR__ . '/../..' . '/src/Settings/Options.php',
        'WebpConverter\\Settings\\Page\\DebugPage' => __DIR__ . '/../..' . '/src/Settings/Page/DebugPage.php',
        'WebpConverter\\Settings\\Page\\PageAbstract' => __DIR__ . '/../..' . '/src/Settings/Page/PageAbstract.php',
        'WebpConverter\\Settings\\Page\\PageInterface' => __DIR__ . '/../..' . '/src/Settings/Page/PageInterface.php',
        'WebpConverter\\Settings\\Page\\SettingsPage' => __DIR__ . '/../..' . '/src/Settings/Page/SettingsPage.php',
        'WebpConverter\\Settings\\Pages' => __DIR__ . '/../..' . '/src/Settings/Pages.php',
        'WebpConverter\\Settings\\SettingsSave' => __DIR__ . '/../..' . '/src/Settings/SettingsSave.php',
        'WebpConverter\\WebpConverter' => __DIR__ . '/../..' . '/src/WebpConverter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3fdbdc9a6d7ece90487f43492ad1f81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3fdbdc9a6d7ece90487f43492ad1f81::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3fdbdc9a6d7ece90487f43492ad1f81::$classMap;

        }, null, ClassLoader::class);
    }
}
