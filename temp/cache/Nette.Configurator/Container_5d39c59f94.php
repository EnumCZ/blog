<?php
// source: /home/radek/MEGA/projects/blog/tests/../app/config/config.neon 
// source: /home/radek/MEGA/projects/blog/tests/../app/config/config.local.neon 

class Container_5d39c59f94 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'IteratorAggregate' => [1 => ['console.helperSet', 'routing.router']],
			'Traversable' => [1 => ['console.helperSet', 'routing.router']],
			'Symfony\Component\Console\Helper\HelperSet' => [1 => ['console.helperSet']],
			'Symfony\Component\Console\Application' => [1 => ['console.application']],
			'Kdyby\Console\Application' => [1 => ['console.application']],
			'Nette\Object' => [
				[
					'console.router',
					'doctrine.default.repositoryFactory',
					'doctrine.default.diagnosticsPanel',
				],
				[
					'doctrine.default.cacheCleaner',
					'68_App_Model_Repository_Categories',
					'69_App_Model_Repository_Comments',
					'70_App_Model_Repository_Posts',
					'71_App_Model_Repository_Users',
				],
			],
			'Nette\Application\IRouter' => [['console.router', 'console.originalRouter'], ['routing.router']],
			'Kdyby\Console\CliRouter' => [['console.router']],
			'Kdyby\Events\EventManager' => [1 => ['events.manager'], 0 => ['doctrine.default.evm']],
			'Doctrine\Common\EventManager' => [1 => ['events.manager'], 0 => ['doctrine.default.evm']],
			'Kdyby\Events\LazyEventManager' => [1 => ['events.manager']],
			'Doctrine\Common\Annotations\Reader' => [['annotations.reflectionReader'], ['annotations.reader']],
			'Doctrine\Common\Annotations\AnnotationReader' => [['annotations.reflectionReader']],
			'Doctrine\Common\Cache\Cache' => [
				[
					'annotations.cache.annotations',
					'doctrine.cache.default.metadata',
					'doctrine.cache.default.query',
					'doctrine.cache.default.ormResult',
					'doctrine.cache.default.hydration',
					'doctrine.cache.default.dbalResult',
				],
			],
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver' => [
				[
					'doctrine.default.metadataDriver',
					'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl',
				],
			],
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain' => [['doctrine.default.metadataDriver']],
			'Doctrine\ORM\Repository\RepositoryFactory' => [['doctrine.default.repositoryFactory']],
			'Kdyby\Doctrine\RepositoryFactory' => [['doctrine.default.repositoryFactory']],
			'Doctrine\ORM\Configuration' => [['doctrine.default.ormConfiguration']],
			'Doctrine\DBAL\Configuration' => [
				[
					'doctrine.default.ormConfiguration',
					'doctrine.default.dbalConfiguration',
				],
			],
			'Kdyby\Doctrine\Configuration' => [['doctrine.default.ormConfiguration']],
			'Kdyby\Events\NamespacedEventManager' => [['doctrine.default.evm']],
			'Doctrine\ORM\EntityManager' => [1 => ['doctrine.default.entityManager']],
			'Doctrine\Common\Persistence\ObjectManager' => [1 => ['doctrine.default.entityManager']],
			'Doctrine\ORM\EntityManagerInterface' => [1 => ['doctrine.default.entityManager']],
			'Kdyby\Persistence\QueryExecutor' => [1 => ['doctrine.default.entityManager', 'doctrine.dao']],
			'Kdyby\Persistence\Queryable' => [1 => ['doctrine.default.entityManager', 'doctrine.dao']],
			'Kdyby\Doctrine\EntityManager' => [1 => ['doctrine.default.entityManager']],
			'Tracy\IBarPanel' => [['doctrine.default.diagnosticsPanel']],
			'Doctrine\DBAL\Logging\SQLLogger' => [['doctrine.default.diagnosticsPanel']],
			'Kdyby\Doctrine\Diagnostics\Panel' => [['doctrine.default.diagnosticsPanel']],
			'Doctrine\DBAL\Connection' => [1 => ['doctrine.default.connection']],
			'Doctrine\DBAL\Driver\Connection' => [1 => ['doctrine.default.connection']],
			'Kdyby\Doctrine\Connection' => [1 => ['doctrine.default.connection']],
			'Kdyby\Doctrine\EntityRepository' => [1 => ['doctrine.dao']],
			'Doctrine\ORM\EntityRepository' => [1 => ['doctrine.dao']],
			'Doctrine\Common\Persistence\ObjectRepository' => [1 => ['doctrine.dao']],
			'Doctrine\Common\Collections\Selectable' => [1 => ['doctrine.dao']],
			'Kdyby\Persistence\ObjectDao' => [1 => ['doctrine.dao']],
			'Kdyby\Doctrine\EntityDao' => [1 => ['doctrine.dao']],
			'Kdyby\Doctrine\EntityDaoFactory' => [1 => ['doctrine.daoFactory']],
			'Kdyby\Doctrine\DI\IRepositoryFactory' => [['doctrine.repositoryFactory.default.defaultRepositoryFactory']],
			'Doctrine\ORM\Tools\SchemaValidator' => [1 => ['doctrine.default.schemaValidator']],
			'Doctrine\ORM\Tools\SchemaTool' => [1 => ['doctrine.default.schemaTool']],
			'Kdyby\Doctrine\Tools\CacheCleaner' => [1 => ['doctrine.default.cacheCleaner']],
			'Doctrine\DBAL\Schema\AbstractSchemaManager' => [1 => ['doctrine.default.schemaManager']],
			'Symfony\Component\Console\Helper\Helper' => [1 => ['doctrine.helper.entityManager', 'doctrine.helper.connection']],
			'Symfony\Component\Console\Helper\HelperInterface' => [1 => ['doctrine.helper.entityManager', 'doctrine.helper.connection']],
			'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper' => [1 => ['doctrine.helper.entityManager']],
			'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper' => [1 => ['doctrine.helper.connection']],
			'Symfony\Component\Console\Command\Command' => [
				1 => [
					'doctrine.cli.0',
					'doctrine.cli.1',
					'doctrine.cli.2',
					'doctrine.cli.3',
					'doctrine.cli.4',
					'doctrine.cli.5',
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
					'doctrine.cli.9',
					'doctrine.cli.10',
					'doctrine.cli.11',
				],
			],
			'Doctrine\DBAL\Tools\Console\Command\ImportCommand' => [1 => ['doctrine.cli.0']],
			'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand' => [1 => ['doctrine.cli.1']],
			'Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand' => [1 => ['doctrine.cli.2']],
			'Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand' => [1 => ['doctrine.cli.3']],
			'Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand' => [1 => ['doctrine.cli.4']],
			'Kdyby\Doctrine\Console\ConvertMappingCommand' => [1 => ['doctrine.cli.4']],
			'Doctrine\ORM\Tools\Console\Command\GenerateEntitiesCommand' => [1 => ['doctrine.cli.5']],
			'Kdyby\Doctrine\Console\GenerateEntitiesCommand' => [1 => ['doctrine.cli.5']],
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand' => [1 => ['doctrine.cli.6']],
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\AbstractCommand' => [1 => ['doctrine.cli.6', 'doctrine.cli.7', 'doctrine.cli.8']],
			'Kdyby\Doctrine\Console\SchemaCreateCommand' => [1 => ['doctrine.cli.6']],
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand' => [1 => ['doctrine.cli.7']],
			'Kdyby\Doctrine\Console\SchemaUpdateCommand' => [1 => ['doctrine.cli.7']],
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand' => [1 => ['doctrine.cli.8']],
			'Kdyby\Doctrine\Console\SchemaDropCommand' => [1 => ['doctrine.cli.8']],
			'Doctrine\ORM\Tools\Console\Command\GenerateProxiesCommand' => [1 => ['doctrine.cli.9']],
			'Kdyby\Doctrine\Console\GenerateProxiesCommand' => [1 => ['doctrine.cli.9']],
			'Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand' => [1 => ['doctrine.cli.10']],
			'Kdyby\Doctrine\Console\ValidateSchemaCommand' => [1 => ['doctrine.cli.10']],
			'Doctrine\ORM\Tools\Console\Command\InfoCommand' => [1 => ['doctrine.cli.11']],
			'Kdyby\Doctrine\Console\InfoCommand' => [1 => ['doctrine.cli.11']],
			'Doctrine\Common\Persistence\AbstractManagerRegistry' => [1 => ['doctrine.registry']],
			'Doctrine\Common\Persistence\ConnectionRegistry' => [1 => ['doctrine.registry']],
			'Doctrine\Common\Persistence\ManagerRegistry' => [1 => ['doctrine.registry']],
			'Kdyby\Doctrine\Registry' => [1 => ['doctrine.registry']],
			'App\AdminModule\Presenters\BasePresenter' => [1 => ['67_App_AdminModule_Presenters_AdminPresenter']],
			'App\Presenters\BasePresenter' => [1 => ['67_App_AdminModule_Presenters_AdminPresenter']],
			'Nette\Application\UI\Presenter' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\Application\UI\Control' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\Application\UI\Component' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\ComponentModel\Container' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\ComponentModel\Component' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\Application\IPresenter' => [
				[
					'67_App_AdminModule_Presenters_AdminPresenter',
					'application.1',
					'application.2',
					'application.3',
				],
			],
			'ArrayAccess' => [
				[
					'67_App_AdminModule_Presenters_AdminPresenter',
					'application.1',
					'routing.router',
				],
			],
			'Nette\Application\UI\IStatePersistent' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\Application\UI\ISignalReceiver' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\ComponentModel\IComponent' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\ComponentModel\IContainer' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'Nette\Application\UI\IRenderable' => [['67_App_AdminModule_Presenters_AdminPresenter', 'application.1']],
			'App\AdminModule\Presenters\AdminPresenter' => [1 => ['67_App_AdminModule_Presenters_AdminPresenter']],
			'App\Model\Repository\Categories' => [1 => ['68_App_Model_Repository_Categories']],
			'App\Model\Repository\Comments' => [1 => ['69_App_Model_Repository_Comments']],
			'App\Model\Repository\Posts' => [1 => ['70_App_Model_Repository_Posts']],
			'App\Model\Repository\Users' => [1 => ['71_App_Model_Repository_Users']],
			'Component\ICategoryFormFactory' => [1 => ['72_Component_ICategoryFormFactory']],
			'Component\ICommentFormFactory' => [1 => ['73_Component_ICommentFormFactory']],
			'Component\ILoginFormFactory' => [1 => ['74_Component_ILoginFormFactory']],
			'Component\IPasswordChangeFormFactory' => [1 => ['75_Component_IPasswordChangeFormFactory']],
			'Component\IPostFormFactory' => [1 => ['76_Component_IPostFormFactory']],
			'Component\IRegisterFormFactory' => [1 => ['77_Component_IRegisterFormFactory']],
			'Nette\DI\CompilerExtension' => [1 => ['visualPaginator']],
			'IPub\VisualPaginator\DI\VisualPaginatorExtension' => [1 => ['visualPaginator']],
			'Nette\Security\IAuthenticator' => [1 => ['Authenticator']],
			'Model\Authenticator' => [1 => ['Authenticator']],
			'Nette\Security\IAuthorizator' => [1 => ['Authorizator']],
			'Model\Authorizator' => [1 => ['Authorizator']],
			'KdybyModule\CliPresenter' => [1 => ['application.1']],
			'NetteModule\ErrorPresenter' => [1 => ['application.2']],
			'NetteModule\MicroPresenter' => [1 => ['application.3']],
			'Nette\Utils\ArrayList' => [1 => ['routing.router']],
			'Countable' => [1 => ['routing.router']],
			'Nette\Application\Routers\RouteList' => [1 => ['routing.router']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'67_App_AdminModule_Presenters_AdminPresenter' => 'App\AdminModule\Presenters\AdminPresenter',
			'68_App_Model_Repository_Categories' => 'App\Model\Repository\Categories',
			'69_App_Model_Repository_Comments' => 'App\Model\Repository\Comments',
			'70_App_Model_Repository_Posts' => 'App\Model\Repository\Posts',
			'71_App_Model_Repository_Users' => 'App\Model\Repository\Users',
			'72_Component_ICategoryFormFactory' => 'Component\CategoryForm',
			'73_Component_ICommentFormFactory' => 'Component\CommentForm',
			'74_Component_ILoginFormFactory' => 'Component\LoginForm',
			'75_Component_IPasswordChangeFormFactory' => 'Component\PasswordChangeForm',
			'76_Component_IPostFormFactory' => 'Component\PostForm',
			'77_Component_IRegisterFormFactory' => 'Component\RegisterForm',
			'Authenticator' => 'Model\Authenticator',
			'Authorizator' => 'Model\Authorizator',
			'annotations.cache.annotations' => 'Doctrine\Common\Cache\Cache',
			'annotations.reader' => 'Doctrine\Common\Annotations\Reader',
			'annotations.reflectionReader' => 'Doctrine\Common\Annotations\AnnotationReader',
			'application.1' => 'KdybyModule\CliPresenter',
			'application.2' => 'NetteModule\ErrorPresenter',
			'application.3' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'console.application' => 'Kdyby\Console\Application',
			'console.helperSet' => 'Symfony\Component\Console\Helper\HelperSet',
			'console.originalRouter' => 'Nette\Application\IRouter',
			'console.router' => 'Kdyby\Console\CliRouter',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'doctrine.cache.default.dbalResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.hydration' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.metadata' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.ormResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.query' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cli.0' => 'Doctrine\DBAL\Tools\Console\Command\ImportCommand',
			'doctrine.cli.1' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand',
			'doctrine.cli.10' => 'Kdyby\Doctrine\Console\ValidateSchemaCommand',
			'doctrine.cli.11' => 'Kdyby\Doctrine\Console\InfoCommand',
			'doctrine.cli.2' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand',
			'doctrine.cli.3' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand',
			'doctrine.cli.4' => 'Kdyby\Doctrine\Console\ConvertMappingCommand',
			'doctrine.cli.5' => 'Kdyby\Doctrine\Console\GenerateEntitiesCommand',
			'doctrine.cli.6' => 'Kdyby\Doctrine\Console\SchemaCreateCommand',
			'doctrine.cli.7' => 'Kdyby\Doctrine\Console\SchemaUpdateCommand',
			'doctrine.cli.8' => 'Kdyby\Doctrine\Console\SchemaDropCommand',
			'doctrine.cli.9' => 'Kdyby\Doctrine\Console\GenerateProxiesCommand',
			'doctrine.dao' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.daoFactory' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.default.cacheCleaner' => 'Kdyby\Doctrine\Tools\CacheCleaner',
			'doctrine.default.connection' => 'Kdyby\Doctrine\Connection',
			'doctrine.default.dbalConfiguration' => 'Doctrine\DBAL\Configuration',
			'doctrine.default.diagnosticsPanel' => 'Kdyby\Doctrine\Diagnostics\Panel',
			'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.entityManager' => 'Kdyby\Doctrine\EntityManager',
			'doctrine.default.evm' => 'Kdyby\Events\NamespacedEventManager',
			'doctrine.default.metadataDriver' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain',
			'doctrine.default.ormConfiguration' => 'Kdyby\Doctrine\Configuration',
			'doctrine.default.repositoryFactory' => 'Kdyby\Doctrine\RepositoryFactory',
			'doctrine.default.schemaManager' => 'Doctrine\DBAL\Schema\AbstractSchemaManager',
			'doctrine.default.schemaTool' => 'Doctrine\ORM\Tools\SchemaTool',
			'doctrine.default.schemaValidator' => 'Doctrine\ORM\Tools\SchemaValidator',
			'doctrine.helper.connection' => 'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper',
			'doctrine.helper.entityManager' => 'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper',
			'doctrine.registry' => 'Kdyby\Doctrine\Registry',
			'doctrine.repositoryFactory.default.defaultRepositoryFactory' => 'Kdyby\Doctrine\EntityDao',
			'events.manager' => 'Kdyby\Events\LazyEventManager',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\Routers\RouteList',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
			'visualPaginator' => 'IPub\VisualPaginator\DI\VisualPaginatorExtension',
		],
		'tags' => [
			'inject' => [
				'67_App_AdminModule_Presenters_AdminPresenter' => TRUE,
				'annotations.cache.annotations' => FALSE,
				'application.1' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'console.application' => FALSE,
				'console.helperSet' => FALSE,
				'console.router' => FALSE,
				'doctrine.cache.default.dbalResult' => FALSE,
				'doctrine.cache.default.hydration' => FALSE,
				'doctrine.cache.default.metadata' => FALSE,
				'doctrine.cache.default.ormResult' => FALSE,
				'doctrine.cache.default.query' => FALSE,
				'doctrine.cli.0' => FALSE,
				'doctrine.cli.1' => FALSE,
				'doctrine.cli.10' => FALSE,
				'doctrine.cli.11' => FALSE,
				'doctrine.cli.2' => FALSE,
				'doctrine.cli.3' => FALSE,
				'doctrine.cli.4' => FALSE,
				'doctrine.cli.5' => FALSE,
				'doctrine.cli.6' => FALSE,
				'doctrine.cli.7' => FALSE,
				'doctrine.cli.8' => FALSE,
				'doctrine.cli.9' => FALSE,
				'doctrine.dao' => FALSE,
				'doctrine.daoFactory' => FALSE,
				'doctrine.default.connection' => FALSE,
				'doctrine.default.dbalConfiguration' => FALSE,
				'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => FALSE,
				'doctrine.default.entityManager' => FALSE,
				'doctrine.default.metadataDriver' => FALSE,
				'doctrine.default.ormConfiguration' => FALSE,
			],
			'nette.presenter' => [
				'67_App_AdminModule_Presenters_AdminPresenter' => 'App\AdminModule\Presenters\AdminPresenter',
				'application.1' => 'KdybyModule\CliPresenter',
				'application.2' => 'NetteModule\ErrorPresenter',
				'application.3' => 'NetteModule\MicroPresenter',
			],
			'kdyby.console.command' => [
				'doctrine.cli.0' => TRUE,
				'doctrine.cli.1' => TRUE,
				'doctrine.cli.10' => TRUE,
				'doctrine.cli.11' => TRUE,
				'doctrine.cli.2' => TRUE,
				'doctrine.cli.3' => TRUE,
				'doctrine.cli.4' => TRUE,
				'doctrine.cli.5' => TRUE,
				'doctrine.cli.6' => TRUE,
				'doctrine.cli.7' => TRUE,
				'doctrine.cli.8' => TRUE,
				'doctrine.cli.9' => TRUE,
			],
			'doctrine.connection' => ['doctrine.default.connection' => TRUE],
			'kdyby.doctrine.connection' => ['doctrine.default.connection' => TRUE],
			'doctrine.entityManager' => ['doctrine.default.entityManager' => TRUE],
			'kdyby.doctrine.entityManager' => ['doctrine.default.entityManager' => TRUE],
			'kdyby.console.helper' => [
				'doctrine.helper.connection' => 'db',
				'doctrine.helper.entityManager' => 'em',
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'doctrine.cacheCleaner' => 'doctrine.default.cacheCleaner',
			'doctrine.schemaManager' => 'doctrine.default.schemaManager',
			'doctrine.schemaTool' => 'doctrine.default.schemaTool',
			'doctrine.schemaValidator' => 'doctrine.default.schemaValidator',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct()
	{
		parent::__construct([
			'appDir' => '/home/radek/MEGA/projects/blog/tests',
			'wwwDir' => '/home/radek/MEGA/projects/blog/tests',
			'debugMode' => FALSE,
			'productionMode' => TRUE,
			'consoleMode' => TRUE,
			'tempDir' => '/home/radek/MEGA/projects/blog/tests/../temp',
			'doctrine.debug' => FALSE,
			'doctrine' => [
				'orm' => ['defaultEntityManager' => 'default'],
				'dbal' => ['defaultConnection' => 'default'],
			],
		]);
	}


	/**
	 * @return App\AdminModule\Presenters\AdminPresenter
	 */
	public function createService__67_App_AdminModule_Presenters_AdminPresenter()
	{
		$service = new App\AdminModule\Presenters\AdminPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->users = $this->getService('71_App_Model_Repository_Users');
		$service->registerForm = $this->getService('77_Component_IRegisterFormFactory');
		$service->posts = $this->getService('70_App_Model_Repository_Posts');
		$service->postForm = $this->getService('76_Component_IPostFormFactory');
		$service->passwordChangeForm = $this->getService('75_Component_IPasswordChangeFormFactory');
		$service->em = $this->getService('doctrine.default.entityManager');
		$service->comments = $this->getService('69_App_Model_Repository_Comments');
		$service->categoryForm = $this->getService('72_Component_ICategoryFormFactory');
		$service->categories = $this->getService('68_App_Model_Repository_Categories');
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\AdminModule\Presenters\AdminPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\AdminModule\Presenters\AdminPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	/**
	 * @return App\Model\Repository\Categories
	 */
	public function createService__68_App_Model_Repository_Categories()
	{
		$service = new App\Model\Repository\Categories($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return App\Model\Repository\Comments
	 */
	public function createService__69_App_Model_Repository_Comments()
	{
		$service = new App\Model\Repository\Comments($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return App\Model\Repository\Posts
	 */
	public function createService__70_App_Model_Repository_Posts()
	{
		$service = new App\Model\Repository\Posts($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return App\Model\Repository\Users
	 */
	public function createService__71_App_Model_Repository_Users()
	{
		$service = new App\Model\Repository\Users($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Component\ICategoryFormFactory
	 */
	public function createService__72_Component_ICategoryFormFactory()
	{
		return new Container_5d39c59f94_Component_ICategoryFormFactoryImpl_72_Component_ICategoryFormFactory($this);
	}


	/**
	 * @return Component\ICommentFormFactory
	 */
	public function createService__73_Component_ICommentFormFactory()
	{
		return new Container_5d39c59f94_Component_ICommentFormFactoryImpl_73_Component_ICommentFormFactory($this);
	}


	/**
	 * @return Component\ILoginFormFactory
	 */
	public function createService__74_Component_ILoginFormFactory()
	{
		return new Container_5d39c59f94_Component_ILoginFormFactoryImpl_74_Component_ILoginFormFactory($this);
	}


	/**
	 * @return Component\IPasswordChangeFormFactory
	 */
	public function createService__75_Component_IPasswordChangeFormFactory()
	{
		return new Container_5d39c59f94_Component_IPasswordChangeFormFactoryImpl_75_Component_IPasswordChangeFormFactory($this);
	}


	/**
	 * @return Component\IPostFormFactory
	 */
	public function createService__76_Component_IPostFormFactory()
	{
		return new Container_5d39c59f94_Component_IPostFormFactoryImpl_76_Component_IPostFormFactory($this);
	}


	/**
	 * @return Component\IRegisterFormFactory
	 */
	public function createService__77_Component_IRegisterFormFactory()
	{
		return new Container_5d39c59f94_Component_IRegisterFormFactoryImpl_77_Component_IRegisterFormFactory($this);
	}


	/**
	 * @return Model\Authenticator
	 */
	public function createService__Authenticator()
	{
		$service = new Model\Authenticator($this->getService('71_App_Model_Repository_Users'));
		return $service;
	}


	/**
	 * @return Model\Authorizator
	 */
	public function createService__Authorizator()
	{
		$service = new Model\Authorizator;
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceAnnotations__cache__annotations()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Annotations',
			FALSE);
		$service->setNamespace('Kdyby_annotations.cache.annotations_4e3e7c05');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Annotations\Reader
	 */
	public function createServiceAnnotations__reader()
	{
		$service = new Doctrine\Common\Annotations\CachedReader($this->getService('annotations.reflectionReader'),
			$this->getService('annotations.cache.annotations'), FALSE);
		return $service;
	}


	/**
	 * @return Doctrine\Common\Annotations\AnnotationReader
	 */
	public function createServiceAnnotations__reflectionReader()
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('persistent');
		$service->addGlobalIgnoredName('serializationVersion');
		return $service;
	}


	/**
	 * @return KdybyModule\CliPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new KdybyModule\CliPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectConsole($this->getService('console.application'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['KdybyModule\CliPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['KdybyModule\CliPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = TRUE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$self = $this; $service->onError[] = function ($app, $e) use ($self) {
			$app->errorPresenter = FALSE;
			$app->onShutdown[] = function () { exit(254); };
			$self->getService('console.application')->handleException($e);
		};
		$service->onStartup = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onStartup'],
			$service->onStartup, NULL, FALSE);
		$service->onShutdown = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onRequest = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onRequest'],
			$service->onRequest, NULL, FALSE);
		$service->onPresenter = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onPresenter'],
			$service->onPresenter, NULL, FALSE);
		$service->onResponse = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onResponse'],
			$service->onResponse, NULL, FALSE);
		$service->onError = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onError'],
			$service->onError, NULL, FALSE);
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, NULL));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		if (method_exists($service, 'setMapping')) { $service->setMapping(['Kdyby' => 'KdybyModule\*\*Presenter']); } elseif (property_exists($service, 'mapping')) { $service->mapping['Kdyby'] = 'KdybyModule\*\*Presenter'; };
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('/home/radek/MEGA/projects/blog/tests/../temp/cache/journal.s3db');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('/home/radek/MEGA/projects/blog/tests/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Kdyby\Console\Application
	 */
	public function createServiceConsole__application()
	{
		$service = new Kdyby\Console\Application('Nette Framework', 'unknown');
		$service->setHelperSet($this->getService('console.helperSet'));
		$service->injectServiceLocator($this);
		$service->add($this->getService('doctrine.cli.0'));
		$service->add($this->getService('doctrine.cli.1'));
		$service->add($this->getService('doctrine.cli.2'));
		$service->add($this->getService('doctrine.cli.3'));
		$service->add($this->getService('doctrine.cli.4'));
		$service->add($this->getService('doctrine.cli.5'));
		$service->add($this->getService('doctrine.cli.6'));
		$service->add($this->getService('doctrine.cli.7'));
		$service->add($this->getService('doctrine.cli.8'));
		$service->add($this->getService('doctrine.cli.9'));
		$service->add($this->getService('doctrine.cli.10'));
		$service->add($this->getService('doctrine.cli.11'));
		return $service;
	}


	/**
	 * @return Symfony\Component\Console\Helper\HelperSet
	 */
	public function createServiceConsole__helperSet()
	{
		$service = new Symfony\Component\Console\Helper\HelperSet;
		$service->set(new Symfony\Component\Console\Helper\ProcessHelper);
		$service->set(new Symfony\Component\Console\Helper\DescriptorHelper);
		$service->set(new Symfony\Component\Console\Helper\FormatterHelper);
		$service->set(new Symfony\Component\Console\Helper\QuestionHelper);
		$service->set(new Symfony\Component\Console\Helper\DebugFormatterHelper);
		$service->set(new Kdyby\Console\Helpers\PresenterHelper($this->getService('application.application')));
		$service->set(new Kdyby\Console\ContainerHelper($this), 'dic');
		$service->set($this->getService('doctrine.helper.entityManager'), 'em');
		$service->set($this->getService('doctrine.helper.connection'), 'db');
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceConsole__originalRouter()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'console.originalRouter\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Console\CliRouter
	 */
	public function createServiceConsole__router()
	{
		$service = new Kdyby\Console\CliRouter($this);
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=test', NULL, NULL,
			['lazy' => TRUE]);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		$service->onConnect = $this->getService('events.manager')->createEvent(['Nette\Database\Connection', 'onConnect'],
			$service->onConnect, NULL, FALSE);
		$service->onQuery = $this->getService('events.manager')->createEvent(['Nette\Database\Connection', 'onQuery'],
			$service->onQuery, NULL, FALSE);
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'),
			$this->getService('database.default.structure'), $this->getService('database.default.conventions'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__dbalResult()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.dbalResult',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.dbalResult_4e3e7c05');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__hydration()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.hydration',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.hydration_4e3e7c05');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__metadata()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.metadata',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.metadata_4e3e7c05');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__ormResult()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.ormResult',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.ormResult_4e3e7c05');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__query()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.query',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.query_4e3e7c05');
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Tools\Console\Command\ImportCommand
	 */
	public function createServiceDoctrine__cli__0()
	{
		$service = new Doctrine\DBAL\Tools\Console\Command\ImportCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand
	 */
	public function createServiceDoctrine__cli__1()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\ValidateSchemaCommand
	 */
	public function createServiceDoctrine__cli__10()
	{
		$service = new Kdyby\Doctrine\Console\ValidateSchemaCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\InfoCommand
	 */
	public function createServiceDoctrine__cli__11()
	{
		$service = new Kdyby\Doctrine\Console\InfoCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand
	 */
	public function createServiceDoctrine__cli__2()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand;
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand
	 */
	public function createServiceDoctrine__cli__3()
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\ConvertMappingCommand
	 */
	public function createServiceDoctrine__cli__4()
	{
		$service = new Kdyby\Doctrine\Console\ConvertMappingCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\GenerateEntitiesCommand
	 */
	public function createServiceDoctrine__cli__5()
	{
		$service = new Kdyby\Doctrine\Console\GenerateEntitiesCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaCreateCommand
	 */
	public function createServiceDoctrine__cli__6()
	{
		$service = new Kdyby\Doctrine\Console\SchemaCreateCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaUpdateCommand
	 */
	public function createServiceDoctrine__cli__7()
	{
		$service = new Kdyby\Doctrine\Console\SchemaUpdateCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\SchemaDropCommand
	 */
	public function createServiceDoctrine__cli__8()
	{
		$service = new Kdyby\Doctrine\Console\SchemaDropCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\GenerateProxiesCommand
	 */
	public function createServiceDoctrine__cli__9()
	{
		$service = new Kdyby\Doctrine\Console\GenerateProxiesCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityDao
	 */
	public function createServiceDoctrine__dao($entityName)
	{
		$service = $this->getService('doctrine.default.entityManager')->getDao($entityName);
		if (!$service instanceof Kdyby\Doctrine\EntityDao) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.dao\', value returned by factory is not Kdyby\Doctrine\EntityDao type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityDaoFactory
	 */
	public function createServiceDoctrine__daoFactory()
	{
		return new Container_5d39c59f94_Kdyby_Doctrine_EntityDaoFactoryImpl_doctrine_daoFactory($this);
	}


	/**
	 * @return Kdyby\Doctrine\Tools\CacheCleaner
	 */
	public function createServiceDoctrine__default__cacheCleaner()
	{
		$service = new Kdyby\Doctrine\Tools\CacheCleaner($this->getService('doctrine.default.entityManager'));
		$service->addCacheStorage($this->getService('annotations.cache.annotations'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Connection
	 */
	public function createServiceDoctrine__default__connection()
	{
		$service = Kdyby\Doctrine\Connection::create([
			'dbname' => 'blog',
			'host' => '127.0.0.1',
			'port' => NULL,
			'user' => 'root',
			'password' => '0Fx4fbvuv',
			'charset' => 'UTF8',
			'driver' => 'pdo_mysql',
			'driverClass' => NULL,
			'options' => NULL,
			'path' => NULL,
			'memory' => NULL,
			'unix_socket' => NULL,
			'platformService' => NULL,
			'defaultTableOptions' => [],
			'schemaFilter' => NULL,
			'debug' => FALSE,
		], $this->getService('doctrine.default.dbalConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\Connection) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.connection\', value returned by factory is not Kdyby\Doctrine\Connection type.');
		}
		$service->setSchemaTypes([
			'enum' => 'enum',
			'point' => 'point',
			'lineString' => 'lineString',
			'multiLineString' => 'multiLineString',
			'polygon' => 'polygon',
			'multiPolygon' => 'multiPolygon',
			'geometryCollection' => 'geometryCollection',
		]);
		$service->setDbalTypes([
			'enum' => 'Kdyby\Doctrine\Types\Enum',
			'point' => 'Kdyby\Doctrine\Types\Point',
			'lineString' => 'Kdyby\Doctrine\Types\LineString',
			'multiLineString' => 'Kdyby\Doctrine\Types\MultiLineString',
			'polygon' => 'Kdyby\Doctrine\Types\Polygon',
			'multiPolygon' => 'Kdyby\Doctrine\Types\MultiPolygon',
			'geometryCollection' => 'Kdyby\Doctrine\Types\GeometryCollection',
		]);
		$panel = $this->getService('doctrine.default.diagnosticsPanel')->bindConnection($service);
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Configuration
	 */
	public function createServiceDoctrine__default__dbalConfiguration()
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.dbalResult'));
		$service->setSQLLogger(new Doctrine\DBAL\Logging\LoggerChain);
		$service->setFilterSchemaAssetsExpression(NULL);
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Diagnostics\Panel
	 */
	public function createServiceDoctrine__default__diagnosticsPanel()
	{
		$service = new Kdyby\Doctrine\Diagnostics\Panel;
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	 */
	public function createServiceDoctrine__default__driver__Kdyby_Doctrine__annotationsImpl()
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver([
			'/home/radek/MEGA/projects/blog/vendor/kdyby/doctrine/src/Kdyby/Doctrine/DI/../Entities',
		], $this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityManager
	 */
	public function createServiceDoctrine__default__entityManager()
	{
		$service = Kdyby\Doctrine\EntityManager::create($this->getService('doctrine.default.connection'),
			$this->getService('doctrine.default.ormConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\EntityManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.entityManager\', value returned by factory is not Kdyby\Doctrine\EntityManager type.');
		}
		$this->getService('doctrine.default.diagnosticsPanel')->bindEntityManager($service);
		$service->onDaoCreate = $this->getService('events.manager')->createEvent(['Kdyby\Doctrine\EntityManager', 'onDaoCreate'],
			$service->onDaoCreate, NULL, FALSE);
		return $service;
	}


	/**
	 * @return Kdyby\Events\NamespacedEventManager
	 */
	public function createServiceDoctrine__default__evm()
	{
		$service = new Kdyby\Events\NamespacedEventManager('Doctrine\ORM\Event::', $this->getService('events.manager'));
		$service->dispatchGlobalEvents = TRUE;
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain
	 */
	public function createServiceDoctrine__default__metadataDriver()
	{
		$service = new Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('doctrine.default.driver.Kdyby_Doctrine.annotationsImpl'),
			'Kdyby\Doctrine');
		$service->setDefaultDriver(new Kdyby\Doctrine\Mapping\AnnotationDriver(['/home/radek/MEGA/projects/blog/tests'],
			$this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata')));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Configuration
	 */
	public function createServiceDoctrine__default__ormConfiguration()
	{
		$service = new Kdyby\Doctrine\Configuration;
		$service->setMetadataCacheImpl($this->getService('doctrine.cache.default.metadata'));
		$service->setQueryCacheImpl($this->getService('doctrine.cache.default.query'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.ormResult'));
		$service->setHydrationCacheImpl($this->getService('doctrine.cache.default.hydration'));
		$service->setMetadataDriverImpl($this->getService('doctrine.default.metadataDriver'));
		$service->setClassMetadataFactoryName('Kdyby\Doctrine\Mapping\ClassMetadataFactory');
		$service->setDefaultRepositoryClassName('Kdyby\Doctrine\EntityDao');
		$service->setQueryBuilderClassName('Kdyby\Doctrine\QueryBuilder');
		$service->setRepositoryFactory($this->getService('doctrine.default.repositoryFactory'));
		$service->setProxyDir('/home/radek/MEGA/projects/blog/tests/../temp/proxies');
		$service->setProxyNamespace('Kdyby\GeneratedProxy');
		$service->setAutoGenerateProxyClasses(2);
		$service->setEntityNamespaces([]);
		$service->setCustomHydrationModes([]);
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([]);
		$service->setDefaultQueryHints([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setQuoteStrategy(new Doctrine\ORM\Mapping\DefaultQuoteStrategy);
		$service->setEntityListenerResolver(new Kdyby\Doctrine\Mapping\EntityListenerResolver($this));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\RepositoryFactory
	 */
	public function createServiceDoctrine__default__repositoryFactory()
	{
		$service = new Kdyby\Doctrine\RepositoryFactory($this);
		$service->setServiceIdsMap([], 'doctrine.repositoryFactory.default.defaultRepositoryFactory');
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Schema\AbstractSchemaManager
	 */
	public function createServiceDoctrine__default__schemaManager()
	{
		$service = $this->getService('doctrine.default.connection')->getSchemaManager();
		if (!$service instanceof Doctrine\DBAL\Schema\AbstractSchemaManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.schemaManager\', value returned by factory is not Doctrine\DBAL\Schema\AbstractSchemaManager type.');
		}
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\SchemaTool
	 */
	public function createServiceDoctrine__default__schemaTool()
	{
		$service = new Doctrine\ORM\Tools\SchemaTool($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\SchemaValidator
	 */
	public function createServiceDoctrine__default__schemaValidator()
	{
		$service = new Doctrine\ORM\Tools\SchemaValidator($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper
	 */
	public function createServiceDoctrine__helper__connection()
	{
		$service = new Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($this->getService('doctrine.default.connection'));
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper
	 */
	public function createServiceDoctrine__helper__entityManager()
	{
		$service = new Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Registry
	 */
	public function createServiceDoctrine__registry()
	{
		$service = new Kdyby\Doctrine\Registry(['default' => 'doctrine.default.connection'],
			['default' => 'doctrine.default.entityManager'], 'default', 'default',
			$this);
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\DI\IRepositoryFactory
	 */
	public function createServiceDoctrine__repositoryFactory__default__defaultRepositoryFactory()
	{
		return new Container_5d39c59f94_Kdyby_Doctrine_DI_IRepositoryFactoryImpl_doctrine_repositoryFactory_default_defaultRepositoryFactory($this);
	}


	/**
	 * @return Kdyby\Events\LazyEventManager
	 */
	public function createServiceEvents__manager()
	{
		$service = new Kdyby\Events\LazyEventManager([], $this);
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_5d39c59f94_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\Routers\RouteList
	 */
	public function createServiceRouting__router()
	{
		$service = new Nette\Application\Routers\RouteList;
		$service->offsetSet(NULL, $this->getService('console.router'));
		$service->offsetSet(NULL, $this->getService('console.originalRouter'));
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('Authenticator'),
			$this->getService('Authorizator'));
		$service->onLoggedIn = $this->getService('events.manager')->createEvent(['Nette\Security\User', 'onLoggedIn'],
			$service->onLoggedIn, NULL, FALSE);
		$service->onLoggedOut = $this->getService('events.manager')->createEvent(['Nette\Security\User', 'onLoggedOut'],
			$service->onLoggedOut, NULL, FALSE);
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	/**
	 * @return IPub\VisualPaginator\DI\VisualPaginatorExtension
	 */
	public function createServiceVisualPaginator()
	{
		$service = new IPub\VisualPaginator\DI\VisualPaginatorExtension;
		return $service;
	}


	public function initialize()
	{
		Kdyby\Doctrine\Proxy\ProxyAutoloader::create('/home/radek/MEGA/projects/blog/tests/../temp/proxies', 'Kdyby\GeneratedProxy')->register();Doctrine\Common\Annotations\AnnotationRegistry::registerLoader("class_exists");
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));;
		$this->getService('events.manager')->createEvent(['Nette\DI\Container', 'onInitialize'])->dispatch($this);

		Kdyby\Doctrine\Diagnostics\Panel::registerBluescreen($this);
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/radek/MEGA/projects/blog/vendor/kdyby/doctrine/src/Kdyby/Doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/radek/MEGA/projects/blog/vendor/doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/radek/MEGA/projects/blog/tests/../temp/proxies';
	}

}



final class Container_5d39c59f94_Component_ICategoryFormFactoryImpl_72_Component_ICategoryFormFactory implements Component\ICategoryFormFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create(): Component\CategoryForm
	{
		$service = new Component\CategoryForm($this->container->getService('doctrine.default.entityManager'));
		$service->onAnchor = $this->container->getService('events.manager')->createEvent(['Component\CategoryForm', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}

}



final class Container_5d39c59f94_Component_ICommentFormFactoryImpl_73_Component_ICommentFormFactory implements Component\ICommentFormFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create(): Component\CommentForm
	{
		$service = new Component\CommentForm($this->container->getService('doctrine.default.entityManager'));
		$service->onComment = $this->container->getService('events.manager')->createEvent(['Component\CommentForm', 'onComment'],
			$service->onComment, NULL, FALSE);
		$service->onAnchor = $this->container->getService('events.manager')->createEvent(['Component\CommentForm', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}

}



final class Container_5d39c59f94_Component_ILoginFormFactoryImpl_74_Component_ILoginFormFactory implements Component\ILoginFormFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create(): Component\LoginForm
	{
		$service = new Component\LoginForm($this->container->getService('security.user'));
		$service->onLogin = $this->container->getService('events.manager')->createEvent(['Component\LoginForm', 'onLogin'],
			$service->onLogin, NULL, FALSE);
		$service->onAnchor = $this->container->getService('events.manager')->createEvent(['Component\LoginForm', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}

}



final class Container_5d39c59f94_Component_IPasswordChangeFormFactoryImpl_75_Component_IPasswordChangeFormFactory implements Component\IPasswordChangeFormFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create(): Component\PasswordChangeForm
	{
		$service = new Component\PasswordChangeForm($this->container->getService('doctrine.default.entityManager'));
		$service->onAnchor = $this->container->getService('events.manager')->createEvent(['Component\PasswordChangeForm', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}

}



final class Container_5d39c59f94_Component_IPostFormFactoryImpl_76_Component_IPostFormFactory implements Component\IPostFormFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create(): Component\PostForm
	{
		$service = new Component\PostForm($this->container->getService('doctrine.default.entityManager'),
			$this->container->getService('68_App_Model_Repository_Categories'));
		$service->onCreate = $this->container->getService('events.manager')->createEvent(['Component\PostForm', 'onCreate'],
			$service->onCreate, NULL, FALSE);
		$service->onAnchor = $this->container->getService('events.manager')->createEvent(['Component\PostForm', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}

}



final class Container_5d39c59f94_Component_IRegisterFormFactoryImpl_77_Component_IRegisterFormFactory implements Component\IRegisterFormFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create(): Component\RegisterForm
	{
		$service = new Component\RegisterForm($this->container->getService('doctrine.default.entityManager'));
		$service->onAnchor = $this->container->getService('events.manager')->createEvent(['Component\RegisterForm', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}

}



final class Container_5d39c59f94_Kdyby_Doctrine_EntityDaoFactoryImpl_doctrine_daoFactory implements Kdyby\Doctrine\EntityDaoFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create($entityName): Kdyby\Doctrine\EntityDao
	{
		$service = $this->container->getService('doctrine.default.entityManager')->getDao($entityName);
		if (!$service instanceof Kdyby\Doctrine\EntityDao) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.daoFactory\', value returned by factory is not Kdyby\Doctrine\EntityDao type.');
		}
		return $service;
	}

}



final class Container_5d39c59f94_Kdyby_Doctrine_DI_IRepositoryFactoryImpl_doctrine_repositoryFactory_default_defaultRepositoryFactory implements Kdyby\Doctrine\DI\IRepositoryFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create(Doctrine\ORM\EntityManagerInterface $entityManager, Doctrine\ORM\Mapping\ClassMetadata $classMetadata): Kdyby\Doctrine\EntityDao
	{
		$service = new Kdyby\Doctrine\EntityDao($entityManager, $classMetadata);
		return $service;
	}

}



final class Container_5d39c59f94_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_5d39c59f94 $container)
	{
		$this->container = $container;
	}


	public function create(): Latte\Engine
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('/home/radek/MEGA/projects/blog/tests/../temp/cache/latte');
		$service->setAutoRefresh(FALSE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->addFilter('texy', [new \Texy, 'process']);
		$service->onCompile = $this->container->getService('events.manager')->createEvent(['Latte\Engine', 'onCompile'],
			$service->onCompile, NULL, FALSE);
		return $service;
	}

}
