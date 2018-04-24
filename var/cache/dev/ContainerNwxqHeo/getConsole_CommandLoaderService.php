<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command_loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('console.command.about' => function (): \Symfony\Bundle\FrameworkBundle\Command\AboutCommand {
    return ($this->privates['console.command.about'] ?? $this->load('getConsole_Command_AboutService.php'));
}, 'console.command.assets_install' => function (): \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand {
    return ($this->privates['console.command.assets_install'] ?? $this->load('getConsole_Command_AssetsInstallService.php'));
}, 'console.command.cache_clear' => function (): \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand {
    return ($this->privates['console.command.cache_clear'] ?? $this->load('getConsole_Command_CacheClearService.php'));
}, 'console.command.cache_pool_clear' => function (): \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand {
    return ($this->privates['console.command.cache_pool_clear'] ?? $this->load('getConsole_Command_CachePoolClearService.php'));
}, 'console.command.cache_pool_prune' => function (): \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand {
    return ($this->privates['console.command.cache_pool_prune'] ?? $this->load('getConsole_Command_CachePoolPruneService.php'));
}, 'console.command.cache_warmup' => function (): \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand {
    return ($this->privates['console.command.cache_warmup'] ?? $this->load('getConsole_Command_CacheWarmupService.php'));
}, 'console.command.config_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand {
    return ($this->privates['console.command.config_debug'] ?? $this->load('getConsole_Command_ConfigDebugService.php'));
}, 'console.command.config_dump_reference' => function (): \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand {
    return ($this->privates['console.command.config_dump_reference'] ?? $this->load('getConsole_Command_ConfigDumpReferenceService.php'));
}, 'console.command.container_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand {
    return ($this->privates['console.command.container_debug'] ?? $this->load('getConsole_Command_ContainerDebugService.php'));
}, 'console.command.debug_autowiring' => function (): \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand {
    return ($this->privates['console.command.debug_autowiring'] ?? $this->load('getConsole_Command_DebugAutowiringService.php'));
}, 'console.command.event_dispatcher_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand {
    return ($this->privates['console.command.event_dispatcher_debug'] ?? $this->load('getConsole_Command_EventDispatcherDebugService.php'));
}, 'console.command.router_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand {
    return ($this->privates['console.command.router_debug'] ?? $this->load('getConsole_Command_RouterDebugService.php'));
}, 'console.command.router_match' => function (): \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand {
    return ($this->privates['console.command.router_match'] ?? $this->load('getConsole_Command_RouterMatchService.php'));
}, 'console.command.yaml_lint' => function (): \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand {
    return ($this->privates['console.command.yaml_lint'] ?? $this->load('getConsole_Command_YamlLintService.php'));
}, 'security.command.user_password_encoder' => function (): \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand {
    return ($this->privates['security.command.user_password_encoder'] ?? $this->load('getSecurity_Command_UserPasswordEncoderService.php'));
}, 'twig.command.debug' => function (): \Symfony\Bridge\Twig\Command\DebugCommand {
    return ($this->privates['twig.command.debug'] ?? $this->load('getTwig_Command_DebugService.php'));
}, 'twig.command.lint' => function (): \Symfony\Bundle\TwigBundle\Command\LintCommand {
    return ($this->privates['twig.command.lint'] ?? $this->load('getTwig_Command_LintService.php'));
}, 'web_server.command.server_log' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerLogCommand {
    return ($this->privates['web_server.command.server_log'] ?? $this->load('getWebServer_Command_ServerLogService.php'));
}, 'web_server.command.server_run' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand {
    return ($this->privates['web_server.command.server_run'] ?? $this->load('getWebServer_Command_ServerRunService.php'));
}, 'web_server.command.server_start' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand {
    return ($this->privates['web_server.command.server_start'] ?? $this->load('getWebServer_Command_ServerStartService.php'));
}, 'web_server.command.server_status' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand {
    return ($this->privates['web_server.command.server_status'] ?? $this->load('getWebServer_Command_ServerStatusService.php'));
}, 'web_server.command.server_stop' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand {
    return ($this->privates['web_server.command.server_stop'] ?? $this->load('getWebServer_Command_ServerStopService.php'));
})), array('about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'server:run' => 'web_server.command.server_run', 'server:start' => 'web_server.command.server_start', 'server:stop' => 'web_server.command.server_stop', 'server:status' => 'web_server.command.server_status', 'server:log' => 'web_server.command.server_log', 'security:encode-password' => 'security.command.user_password_encoder', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint'));
