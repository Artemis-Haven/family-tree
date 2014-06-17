Symfony
=======

* help
* list

**assetic:**

* assetic:dump

**assets:**

* assets:install

**cache:**

* cache:clear
* cache:warmup

**config:**

* config:debug
* config:dump-reference

**container:**

* container:debug

**doctrine:**

* doctrine:cache:clear-metadata
* doctrine:cache:clear-query
* doctrine:cache:clear-result
* doctrine:database:create
* doctrine:database:drop
* doctrine:ensure-production-settings
* doctrine:generate:crud
* doctrine:generate:entities
* doctrine:generate:entity
* doctrine:generate:form
* doctrine:mapping:convert
* doctrine:mapping:import
* doctrine:mapping:info
* doctrine:query:dql
* doctrine:query:sql
* doctrine:schema:create
* doctrine:schema:drop
* doctrine:schema:update
* doctrine:schema:validate

**generate:**

* generate:bundle
* generate:controller
* generate:doctrine:crud
* generate:doctrine:entities
* generate:doctrine:entity
* generate:doctrine:form

**init:**

* init:acl

**orm:**

* orm:convert:mapping

**router:**

* router:debug
* router:dump-apache
* router:match

**swiftmailer:**

* swiftmailer:debug
* swiftmailer:email:send
* swiftmailer:spool:send

**translation:**

* translation:debug
* translation:update

**twig:**

* twig:debug
* twig:lint

**yaml:**

* yaml:lint

help
----

* Description: Displays help for a command
* Usage: `help [--xml] [--format="..."] [--raw] [command_name]`
* Aliases: <none>

The <info>help</info> command displays help for a given command:

  <info>php ./app/console help list</info>

You can also output the help in other formats by using the <comment>--format</comment> option:

  <info>php ./app/console help --format=xml list</info>

To display the list of available commands, please use the <info>list</info> command.

### Arguments:

**command_name:**

* Name: command_name
* Is required: no
* Is array: no
* Description: The command name
* Default: `'help'`

### Options:

**xml:**

* Name: `--xml`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: To output help as XML
* Default: `false`

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: To output help in other formats
* Default: `'txt'`

**raw:**

* Name: `--raw`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: To output raw command help
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

list
----

* Description: Lists commands
* Usage: `list [--xml] [--raw] [--format="..."] [namespace]`
* Aliases: <none>

The <info>list</info> command lists all commands:

  <info>php ./app/console list</info>

You can also display the commands for a specific namespace:

  <info>php ./app/console list test</info>

You can also output the information in other formats by using the <comment>--format</comment> option:

  <info>php ./app/console list --format=xml</info>

It's also possible to get raw list of commands (useful for embedding command runner):

  <info>php ./app/console list --raw</info>

### Arguments:

**namespace:**

* Name: namespace
* Is required: no
* Is array: no
* Description: The namespace name
* Default: `NULL`

### Options:

**xml:**

* Name: `--xml`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: To output list as XML
* Default: `false`

**raw:**

* Name: `--raw`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: To output raw command list
* Default: `false`

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: To output list in other formats
* Default: `'txt'`

assetic:dump
------------

* Description: Dumps all assets to the filesystem
* Usage: `assetic:dump [--watch] [--force] [--period="..."] [write_to]`
* Aliases: <none>

### Arguments:

**write_to:**

* Name: write_to
* Is required: no
* Is array: no
* Description: Override the configured asset root
* Default: `NULL`

### Options:

**watch:**

* Name: `--watch`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Check for changes every second, debug mode only
* Default: `false`

**force:**

* Name: `--force`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force an initial generation of all assets (used with --watch)
* Default: `false`

**period:**

* Name: `--period`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Set the polling period in seconds (used with --watch)
* Default: `1`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

assets:install
--------------

* Description: Installs bundles web assets under a public web directory
* Usage: `assets:install [--symlink] [--relative] [target]`
* Aliases: <none>

The <info>assets:install</info> command installs bundle assets into a given
directory (e.g. the web directory).

<info>php ./app/console assets:install web</info>

A "bundles" directory will be created inside the target directory, and the
"Resources/public" directory of each bundle will be copied into it.

To create a symlink to each bundle instead of copying its assets, use the
<info>--symlink</info> option:

<info>php ./app/console assets:install web --symlink</info>

To make symlink relative, add the <info>--relative</info> option:

<info>php ./app/console assets:install web --symlink --relative</info>


### Arguments:

**target:**

* Name: target
* Is required: no
* Is array: no
* Description: The target directory
* Default: `'web'`

### Options:

**symlink:**

* Name: `--symlink`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Symlinks the assets instead of copying it
* Default: `false`

**relative:**

* Name: `--relative`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Make relative symlinks
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

cache:clear
-----------

* Description: Clears the cache
* Usage: `cache:clear [--no-warmup] [--no-optional-warmers]`
* Aliases: <none>

The <info>cache:clear</info> command clears the application cache for a given environment
and debug mode:

<info>php ./app/console cache:clear --env=dev</info>
<info>php ./app/console cache:clear --env=prod --no-debug</info>


### Options:

**no-warmup:**

* Name: `--no-warmup`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not warm up the cache
* Default: `false`

**no-optional-warmers:**

* Name: `--no-optional-warmers`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Skip optional cache warmers (faster)
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

cache:warmup
------------

* Description: Warms up an empty cache
* Usage: `cache:warmup [--no-optional-warmers]`
* Aliases: <none>

The <info>cache:warmup</info> command warms up the cache.

Before running this command, the cache must be empty.

This command does not generate the classes cache (as when executing this
command, too many classes that should be part of the cache are already loaded
in memory). Use <comment>curl</comment> or any other similar tool to warm up
the classes cache if you want.


### Options:

**no-optional-warmers:**

* Name: `--no-optional-warmers`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Skip optional cache warmers (faster)
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

config:debug
------------

* Description: Dumps the current configuration for an extension
* Usage: `config:debug [name]`
* Aliases: <none>


The <info>config:debug</info> command dumps the current configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  <info>php ./app/console config:debug framework</info>
  <info>php ./app/console config:debug FrameworkBundle</info>


### Arguments:

**name:**

* Name: name
* Is required: no
* Is array: no
* Description: The Bundle name or the extension alias
* Default: `NULL`

### Options:

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

config:dump-reference
---------------------

* Description: Dumps the default configuration for an extension
* Usage: `config:dump-reference [--format="..."] [name]`
* Aliases: <none>

The <info>config:dump-reference</info> command dumps the default configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  <info>php ./app/console config:dump-reference framework</info>
  <info>php ./app/console config:dump-reference FrameworkBundle</info>

With the <info>format</info> option specifies the format of the configuration,
this is either <comment>yaml</comment> or <comment>xml</comment>.
When the option is not provided, <comment>yaml</comment> is used.

  <info>php ./app/console config:dump-reference FrameworkBundle --format=xml</info>


### Arguments:

**name:**

* Name: name
* Is required: no
* Is array: no
* Description: The Bundle name or the extension alias
* Default: `NULL`

### Options:

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The format, either yaml or xml
* Default: `'yaml'`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

container:debug
---------------

* Description: Displays current services for an application
* Usage: `container:debug [--show-private] [--tag="..."] [--tags] [--parameter="..."] [--parameters] [--format="..."] [--raw] [name]`
* Aliases: <none>

The <info>container:debug</info> command displays all configured <comment>public</comment> services:

  <info>php ./app/console container:debug</info>

To get specific information about a service, specify its name:

  <info>php ./app/console container:debug validator</info>

By default, private services are hidden. You can display all services by
using the --show-private flag:

  <info>php ./app/console container:debug --show-private</info>

Use the --tags option to display tagged <comment>public</comment> services grouped by tag:

  <info>php ./app/console container:debug --tags</info>

Find all services with a specific tag by specifying the tag name with the --tag option:

  <info>php ./app/console container:debug --tag=form.type</info>

Use the --parameters option to display all parameters:

  <info>php ./app/console container:debug --parameters</info>

Display a specific parameter by specifying his name with the --parameter option:

  <info>php ./app/console container:debug --parameter=kernel.debug</info>


### Arguments:

**name:**

* Name: name
* Is required: no
* Is array: no
* Description: A service name (foo)
* Default: `NULL`

### Options:

**show-private:**

* Name: `--show-private`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Used to show public *and* private services
* Default: `false`

**tag:**

* Name: `--tag`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Shows all services with a specific tag
* Default: `NULL`

**tags:**

* Name: `--tags`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Displays tagged services for an application
* Default: `false`

**parameter:**

* Name: `--parameter`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Displays a specific parameter for an application
* Default: `NULL`

**parameters:**

* Name: `--parameters`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Displays parameters for an application
* Default: `false`

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: To output description in other formats
* Default: `'txt'`

**raw:**

* Name: `--raw`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: To output raw description
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:cache:clear-metadata
-----------------------------

* Description: Clears all metadata cache for an entity manager
* Usage: `doctrine:cache:clear-metadata [--flush] [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:cache:clear-metadata</info> command clears all metadata
cache for the default entity manager:

<info>php app/console doctrine:cache:clear-metadata</info>

You can also optionally specify the <comment>--em</comment> option to specify
which entity manager to clear the cache for:

<info>php app/console doctrine:cache:clear-metadata --em=default</info>

### Options:

**flush:**

* Name: `--flush`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: If defined, cache entries will be flushed instead of deleted/invalidated.
* Default: `false`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:cache:clear-query
--------------------------

* Description: Clears all query cache for an entity manager
* Usage: `doctrine:cache:clear-query [--flush] [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:cache:clear-query</info> command clears all query cache for
the default entity manager:

<info>php app/console doctrine:cache:clear-query</info>

You can also optionally specify the <comment>--em</comment> option to specify
which entity manager to clear the cache for:

<info>php app/console doctrine:cache:clear-query --em=default</info>

### Options:

**flush:**

* Name: `--flush`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: If defined, cache entries will be flushed instead of deleted/invalidated.
* Default: `false`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:cache:clear-result
---------------------------

* Description: Clears result cache for an entity manager
* Usage: `doctrine:cache:clear-result [--flush] [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:cache:clear-result</info> command clears all result cache
for the default entity manager:

<info>php app/console doctrine:cache:clear-result</info>

You can also optionally specify the <comment>--em</comment> option to specify
which entity manager to clear the cache for:

<info>php app/console doctrine:cache:clear-result --em=default</info>

### Options:

**flush:**

* Name: `--flush`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: If defined, cache entries will be flushed instead of deleted/invalidated.
* Default: `false`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:database:create
------------------------

* Description: Creates the configured databases
* Usage: `doctrine:database:create [--connection[="..."]]`
* Aliases: <none>

The <info>doctrine:database:create</info> command creates the default
connections database:

<info>php app/console doctrine:database:create</info>

You can also optionally specify the name of a connection to create the
database for:

<info>php app/console doctrine:database:create --connection=default</info>

### Options:

**connection:**

* Name: `--connection`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The connection to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:database:drop
----------------------

* Description: Drops the configured databases
* Usage: `doctrine:database:drop [--connection[="..."]] [--force]`
* Aliases: <none>

The <info>doctrine:database:drop</info> command drops the default connections
database:

<info>php app/console doctrine:database:drop</info>

The --force parameter has to be used to actually drop the database.

You can also optionally specify the name of a connection to drop the database
for:

<info>php app/console doctrine:database:drop --connection=default</info>

<error>Be careful: All data in a given database will be lost when executing
this command.</error>

### Options:

**connection:**

* Name: `--connection`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The connection to use for this command
* Default: `NULL`

**force:**

* Name: `--force`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Set this parameter to execute this action
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:ensure-production-settings
-----------------------------------

* Description: Verify that Doctrine is properly configured for a production environment.
* Usage: `doctrine:ensure-production-settings [--complete] [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:ensure-production-settings</info> command ensures that
Doctrine is properly configured for a production environment.:

<info>php app/console doctrine:ensure-production-settings</info>

You can also optionally specify the <comment>--em</comment> option to specify
which entity manager to use:

<info>php app/console doctrine:ensure-production-settings --em=default</info>

### Options:

**complete:**

* Name: `--complete`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Flag to also inspect database connection existence.
* Default: `false`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:generate:crud
----------------------

* Description: Generates a CRUD based on a Doctrine entity
* Usage: `doctrine:generate:crud [--entity="..."] [--route-prefix="..."] [--with-write] [--format="..."] [--overwrite]`
* Aliases: `generate:doctrine:crud`

The <info>doctrine:generate:crud</info> command generates a CRUD based on a Doctrine entity.

The default command only generates the list and show actions.

<info>php app/console doctrine:generate:crud --entity=AcmeBlogBundle:Post --route-prefix=post_admin</info>

Using the --with-write option allows to generate the new, edit and delete actions.

<info>php app/console doctrine:generate:crud --entity=AcmeBlogBundle:Post --route-prefix=post_admin --with-write</info>

Every generated file is based on a template. There are default templates but they can be overriden by placing custom templates in one of the following locations, by order of priority:

<info>BUNDLE_PATH/Resources/SensioGeneratorBundle/skeleton/crud
APP_PATH/Resources/SensioGeneratorBundle/skeleton/crud</info>

And

<info>__bundle_path__/Resources/SensioGeneratorBundle/skeleton/form
__project_root__/app/Resources/SensioGeneratorBundle/skeleton/form</info>

You can check https://github.com/sensio/SensioGeneratorBundle/tree/master/Resources/skeleton
in order to know the file structure of the skeleton

### Options:

**entity:**

* Name: `--entity`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The entity class name to initialize (shortcut notation)
* Default: `NULL`

**route-prefix:**

* Name: `--route-prefix`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The route prefix
* Default: `NULL`

**with-write:**

* Name: `--with-write`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Whether or not to generate create, new and delete actions
* Default: `false`

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Use the format for configuration files (php, xml, yml, or annotation)
* Default: `'annotation'`

**overwrite:**

* Name: `--overwrite`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not stop the generation if crud controller already exist, thus overwriting all generated files
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:generate:entities
--------------------------

* Description: Generates entity classes and method stubs from your mapping information
* Usage: `doctrine:generate:entities [--path="..."] [--no-backup] name`
* Aliases: `generate:doctrine:entities`

The <info>doctrine:generate:entities</info> command generates entity classes
and method stubs from your mapping information:

You have to limit generation of entities:

* To a bundle:

  <info>php app/console doctrine:generate:entities MyCustomBundle</info>

* To a single entity:

  <info>php app/console doctrine:generate:entities MyCustomBundle:User</info>
  <info>php app/console doctrine:generate:entities MyCustomBundle/Entity/User</info>

* To a namespace

  <info>php app/console doctrine:generate:entities MyCustomBundle/Entity</info>

If the entities are not stored in a bundle, and if the classes do not exist,
the command has no way to guess where they should be generated. In this case,
you must provide the <comment>--path</comment> option:

  <info>php app/console doctrine:generate:entities Blog/Entity --path=src/</info>

By default, the unmodified version of each entity is backed up and saved
(e.g. Product.php~). To prevent this task from creating the backup file,
pass the <comment>--no-backup</comment> option:

  <info>php app/console doctrine:generate:entities Blog/Entity --no-backup</info>

<error>Important:</error> Even if you specified Inheritance options in your
XML or YAML Mapping files the generator cannot generate the base and
child classes for you correctly, because it doesn't know which
class is supposed to extend which. You have to adjust the entity
code manually for inheritance to work!


### Arguments:

**name:**

* Name: name
* Is required: yes
* Is array: no
* Description: A bundle name, a namespace, or a class name
* Default: `NULL`

### Options:

**path:**

* Name: `--path`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The path where to generate entities when it cannot be guessed
* Default: `NULL`

**no-backup:**

* Name: `--no-backup`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not backup existing entities files.
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:generate:entity
------------------------

* Description: Generates a new Doctrine entity inside a bundle
* Usage: `doctrine:generate:entity [--entity="..."] [--fields="..."] [--format="..."] [--with-repository]`
* Aliases: `generate:doctrine:entity`

The <info>doctrine:generate:entity</info> task generates a new Doctrine
entity inside a bundle:

<info>php app/console doctrine:generate:entity --entity=AcmeBlogBundle:Blog/Post</info>

The above command would initialize a new entity in the following entity
namespace <info>Acme\BlogBundle\Entity\Blog\Post</info>.

You can also optionally specify the fields you want to generate in the new
entity:

<info>php app/console doctrine:generate:entity --entity=AcmeBlogBundle:Blog/Post --fields="title:string(255) body:text"</info>

The command can also generate the corresponding entity repository class with the
<comment>--with-repository</comment> option:

<info>php app/console doctrine:generate:entity --entity=AcmeBlogBundle:Blog/Post --with-repository</info>

By default, the command uses annotations for the mapping information; change it
with <comment>--format</comment>:

<info>php app/console doctrine:generate:entity --entity=AcmeBlogBundle:Blog/Post --format=yml</info>

To deactivate the interaction mode, simply use the `--no-interaction` option
without forgetting to pass all needed options:

<info>php app/console doctrine:generate:entity --entity=AcmeBlogBundle:Blog/Post --format=annotation --fields="title:string(255) body:text" --with-repository --no-interaction</info>

### Options:

**entity:**

* Name: `--entity`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The entity class name to initialize (shortcut notation)
* Default: `NULL`

**fields:**

* Name: `--fields`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The fields to create with the new entity
* Default: `NULL`

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Use the format for configuration files (php, xml, yml, or annotation)
* Default: `'annotation'`

**with-repository:**

* Name: `--with-repository`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Whether to generate the entity repository or not
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:generate:form
----------------------

* Description: Generates a form type class based on a Doctrine entity
* Usage: `doctrine:generate:form entity`
* Aliases: `generate:doctrine:form`

The <info>doctrine:generate:form</info> command generates a form class based on a Doctrine entity.

<info>php app/console doctrine:generate:form AcmeBlogBundle:Post</info>

Every generated file is based on a template. There are default templates but they can be overriden by placing custom templates in one of the following locations, by order of priority:

<info>BUNDLE_PATH/Resources/SensioGeneratorBundle/skeleton/form
APP_PATH/Resources/SensioGeneratorBundle/skeleton/form</info>

You can check https://github.com/sensio/SensioGeneratorBundle/tree/master/Resources/skeleton
in order to know the file structure of the skeleton

### Arguments:

**entity:**

* Name: entity
* Is required: yes
* Is array: no
* Description: The entity class name to initialize (shortcut notation)
* Default: `NULL`

### Options:

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:mapping:convert
------------------------

* Description: Convert mapping information between supported formats.
* Usage: `doctrine:mapping:convert [--filter="..."] [--force] [--from-database] [--extend[="..."]] [--num-spaces[="..."]] [--namespace[="..."]] [--em[="..."]] to-type dest-path`
* Aliases: `orm:convert:mapping`

The <info>doctrine:mapping:convert</info> command converts mapping information
between supported formats:

<info>php app/console doctrine:mapping:convert xml /path/to/output</info>

### Arguments:

**to-type:**

* Name: to-type
* Is required: yes
* Is array: no
* Description: The mapping type to be converted.
* Default: `NULL`

**dest-path:**

* Name: dest-path
* Is required: yes
* Is array: no
* Description: The path to generate your entities classes.
* Default: `NULL`

### Options:

**filter:**

* Name: `--filter`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Description: A string pattern used to match entities that should be processed.
* Default: `array ()`

**force:**

* Name: `--force`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force to overwrite existing mapping files.
* Default: `false`

**from-database:**

* Name: `--from-database`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Whether or not to convert mapping information from existing database.
* Default: `false`

**extend:**

* Name: `--extend`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: Defines a base class to be extended by generated entity classes.
* Default: `NULL`

**num-spaces:**

* Name: `--num-spaces`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: Defines the number of indentation spaces
* Default: `4`

**namespace:**

* Name: `--namespace`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: Defines a namespace for the generated entity classes, if converted from database.
* Default: `NULL`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:mapping:import
-----------------------

* Description: Imports mapping information from an existing database
* Usage: `doctrine:mapping:import [--em[="..."]] [--filter="..."] [--force] bundle [mapping-type]`
* Aliases: <none>

The <info>doctrine:mapping:import</info> command imports mapping information
from an existing database:

<info>php app/console doctrine:mapping:import "MyCustomBundle" xml</info>

You can also optionally specify which entity manager to import from with the
<info>--em</info> option:

<info>php app/console doctrine:mapping:import "MyCustomBundle" xml --em=default</info>

If you don't want to map every entity that can be found in the database, use the
<info>--filter</info> option. It will try to match the targeted mapped entity with the
provided pattern string.

<info>php app/console doctrine:mapping:import "MyCustomBundle" xml --filter=MyMatchedEntity</info>

Use the <info>--force</info> option, if you want to override existing mapping files:

<info>php app/console doctrine:mapping:import "MyCustomBundle" xml --force</info>

### Arguments:

**bundle:**

* Name: bundle
* Is required: yes
* Is array: no
* Description: The bundle to import the mapping information to
* Default: `NULL`

**mapping-type:**

* Name: mapping-type
* Is required: no
* Is array: no
* Description: The mapping type to export the imported mapping information to
* Default: `NULL`

### Options:

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**filter:**

* Name: `--filter`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Description: A string pattern used to match entities that should be mapped.
* Default: `array ()`

**force:**

* Name: `--force`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force to overwrite existing mapping files.
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:mapping:info
---------------------

* Description: Shows basic information about all mapped entities
* Usage: `doctrine:mapping:info [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:mapping:info</info> shows basic information about which
entities exist and possibly if their mapping information contains errors or
not.

<info>php app/console doctrine:mapping:info</info>

If you are using multiple entity managers you can pick your choice with the
<info>--em</info> option:

<info>php app/console doctrine:mapping:info --em=default</info>

### Options:

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:query:dql
------------------

* Description: Executes arbitrary DQL directly from the command line.
* Usage: `doctrine:query:dql [--hydrate="..."] [--first-result="..."] [--max-result="..."] [--depth="..."] [--em[="..."]] dql`
* Aliases: <none>

The <info>doctrine:query:dql</info> command executes the given DQL query and
outputs the results:

<info>php app/console doctrine:query:dql "SELECT u FROM UserBundle:User u"</info>

You can also optional specify some additional options like what type of
hydration to use when executing the query:

<info>php app/console doctrine:query:dql "SELECT u FROM UserBundle:User u" --hydrate=array</info>

Additionally you can specify the first result and maximum amount of results to
show:

<info>php app/console doctrine:query:dql "SELECT u FROM UserBundle:User u" --first-result=0 --max-result=30</info>

### Arguments:

**dql:**

* Name: dql
* Is required: yes
* Is array: no
* Description: The DQL to execute.
* Default: `NULL`

### Options:

**hydrate:**

* Name: `--hydrate`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Hydration mode of result set. Should be either: object, array, scalar or single-scalar.
* Default: `'object'`

**first-result:**

* Name: `--first-result`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The first result in the result set.
* Default: `NULL`

**max-result:**

* Name: `--max-result`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The maximum number of results in the result set.
* Default: `NULL`

**depth:**

* Name: `--depth`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Dumping depth of Entity graph.
* Default: `7`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:query:sql
------------------

* Description: Executes arbitrary SQL directly from the command line.
* Usage: `doctrine:query:sql [--depth="..."] [--connection[="..."]] sql`
* Aliases: <none>

The <info>doctrine:query:sql</info> command executes the given SQL query and
outputs the results:

<info>php app/console doctrine:query:sql "SELECT * from user"</info>

### Arguments:

**sql:**

* Name: sql
* Is required: yes
* Is array: no
* Description: The SQL statement to execute.
* Default: `NULL`

### Options:

**depth:**

* Name: `--depth`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Dumping depth of result set.
* Default: `7`

**connection:**

* Name: `--connection`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The connection to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:schema:create
----------------------

* Description: Executes (or dumps) the SQL needed to generate the database schema
* Usage: `doctrine:schema:create [--dump-sql] [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:schema:create</info> command executes the SQL needed to
generate the database schema for the default entity manager:

<info>php app/console doctrine:schema:create</info>

You can also generate the database schema for a specific entity manager:

<info>php app/console doctrine:schema:create --em=default</info>

Finally, instead of executing the SQL, you can output the SQL:

<info>php app/console doctrine:schema:create --dump-sql</info>

### Options:

**dump-sql:**

* Name: `--dump-sql`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Instead of try to apply generated SQLs into EntityManager Storage Connection, output them.
* Default: `false`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:schema:drop
--------------------

* Description: Executes (or dumps) the SQL needed to drop the current database schema
* Usage: `doctrine:schema:drop [--dump-sql] [--force] [--full-database] [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:schema:drop</info> command generates the SQL needed to
drop the database schema of the default entity manager:

<info>php app/console doctrine:schema:drop --dump-sql</info>

Alternatively, you can execute the generated queries:

<info>php app/console doctrine:schema:drop --force</info>

You can also optionally specify the name of a entity manager to drop the
schema for:

<info>php app/console doctrine:schema:drop --em=default</info>

### Options:

**dump-sql:**

* Name: `--dump-sql`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Instead of try to apply generated SQLs into EntityManager Storage Connection, output them.
* Default: `false`

**force:**

* Name: `--force`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Don't ask for the deletion of the database, but force the operation to run.
* Default: `false`

**full-database:**

* Name: `--full-database`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Instead of using the Class Metadata to detect the database table schema, drop ALL assets that the database contains.
* Default: `false`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:schema:update
----------------------

* Description: Executes (or dumps) the SQL needed to update the database schema to match the current mapping metadata
* Usage: `doctrine:schema:update [--complete] [--dump-sql] [--force] [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:schema:update</info> command generates the SQL needed to
synchronize the database schema with the current mapping metadata of the
default entity manager.

For example, if you add metadata for a new column to an entity, this command
would generate and output the SQL needed to add the new column to the database:

<info>php app/console doctrine:schema:update --dump-sql</info>

Alternatively, you can execute the generated queries:

<info>php app/console doctrine:schema:update --force</info>

You can also update the database schema for a specific entity manager:

<info>php app/console doctrine:schema:update --em=default</info>

### Options:

**complete:**

* Name: `--complete`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: If defined, all assets of the database which are not relevant to the current metadata will be dropped.
* Default: `false`

**dump-sql:**

* Name: `--dump-sql`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Dumps the generated SQL statements to the screen (does not execute them).
* Default: `false`

**force:**

* Name: `--force`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Causes the generated SQL statements to be physically executed against your database.
* Default: `false`

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

doctrine:schema:validate
------------------------

* Description: Validates the doctrine mapping files
* Usage: `doctrine:schema:validate [--em[="..."]]`
* Aliases: <none>

The <info>doctrine:schema:validate</info> checks the current mappings
for valid forward and reverse mappings.

<info>php app/console doctrine:schema:validate</info>

You can also optionally specify the <comment>--em</comment> option to specify
which entity manager use for the validation.

<info>php app/console doctrine:schema:validate --em=default</info>

### Options:

**em:**

* Name: `--em`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The entity manager to use for this command
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

generate:bundle
---------------

* Description: Generates a bundle
* Usage: `generate:bundle [--namespace="..."] [--dir="..."] [--bundle-name="..."] [--format="..."] [--structure]`
* Aliases: <none>

The <info>generate:bundle</info> command helps you generates new bundles.

By default, the command interacts with the developer to tweak the generation.
Any passed option will be used as a default value for the interaction
(<comment>--namespace</comment> is the only one needed if you follow the
conventions):

<info>php app/console generate:bundle --namespace=Acme/BlogBundle</info>

Note that you can use <comment>/</comment> instead of <comment>\ </comment>for the namespace delimiter to avoid any
problem.

If you want to disable any user interaction, use <comment>--no-interaction</comment> but don't forget to pass all needed options:

<info>php app/console generate:bundle --namespace=Acme/BlogBundle --dir=src [--bundle-name=...] --no-interaction</info>

Note that the bundle namespace must end with "Bundle".

### Options:

**namespace:**

* Name: `--namespace`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The namespace of the bundle to create
* Default: `NULL`

**dir:**

* Name: `--dir`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The directory where to create the bundle
* Default: `NULL`

**bundle-name:**

* Name: `--bundle-name`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The optional bundle name
* Default: `NULL`

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Use the format for configuration files (php, xml, yml, or annotation)
* Default: `NULL`

**structure:**

* Name: `--structure`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Whether to generate the whole directory structure
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

generate:controller
-------------------

* Description: Generates a controller
* Usage: `generate:controller [--controller="..."] [--route-format="..."] [--template-format="..."] [--actions="..."]`
* Aliases: <none>

The <info>generate:controller</info> command helps you generates new controllers
inside bundles.

By default, the command interacts with the developer to tweak the generation.
Any passed option will be used as a default value for the interaction
(<comment>--bundle</comment> and <comment>--controller</comment> are the only
ones needed if you follow the conventions):

<info>php app/console generate:controller --controller=AcmeBlogBundle:Post</info>

If you want to disable any user interaction, use <comment>--no-interaction</comment>
but don't forget to pass all needed options:

<info>php app/console generate:controller --controller=AcmeBlogBundle:Post --no-interaction</info>

Every generated file is based on a template. There are default templates but they can
be overriden by placing custom templates in one of the following locations, by order of priority:

<info>BUNDLE_PATH/Resources/SensioGeneratorBundle/skeleton/controller
APP_PATH/Resources/SensioGeneratorBundle/skeleton/controller</info>

You can check https://github.com/sensio/SensioGeneratorBundle/tree/master/Resources/skeleton
in order to know the file structure of the skeleton

### Options:

**controller:**

* Name: `--controller`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The name of the controller to create
* Default: `NULL`

**route-format:**

* Name: `--route-format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The format that is used for the routing (yml, xml, php, annotation)
* Default: `'annotation'`

**template-format:**

* Name: `--template-format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The format that is used for templating (twig, php)
* Default: `'twig'`

**actions:**

* Name: `--actions`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: yes
* Description: The actions in the controller
* Default: `array ()`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

init:acl
--------

* Description: Mounts ACL tables in the database
* Usage: `init:acl`
* Aliases: <none>

The <info>init:acl</info> command mounts ACL tables in the database.

<info>php ./app/console init:acl</info>

The name of the DBAL connection must be configured in your <info>app/config/security.yml</info> configuration file in the <info>security.acl.connection</info> variable.

<info>security:
    acl:
        connection: default</info>

### Options:

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

router:debug
------------

* Description: Displays current routes for an application
* Usage: `router:debug [--show-controllers] [--format="..."] [--raw] [name]`
* Aliases: <none>

The <info>router:debug</info> displays the configured routes:

  <info>php ./app/console router:debug</info>


### Arguments:

**name:**

* Name: name
* Is required: no
* Is array: no
* Description: A route name
* Default: `NULL`

### Options:

**show-controllers:**

* Name: `--show-controllers`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Show assigned controllers in overview
* Default: `false`

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: To output route(s) in other formats
* Default: `'txt'`

**raw:**

* Name: `--raw`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: To output raw route(s)
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

router:dump-apache
------------------

* Description: Dumps all routes as Apache rewrite rules
* Usage: `router:dump-apache [--base-uri="..."] [script_name]`
* Aliases: <none>

The <info>router:dump-apache</info> dumps all routes as Apache rewrite rules.
These can then be used with the ApacheUrlMatcher to use Apache for route
matching.

  <info>php ./app/console router:dump-apache</info>


### Arguments:

**script_name:**

* Name: script_name
* Is required: no
* Is array: no
* Description: The script name of the application's front controller.
* Default: `NULL`

### Options:

**base-uri:**

* Name: `--base-uri`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The base URI
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

router:match
------------

* Description: Helps debug routes by simulating a path info match
* Usage: `router:match [--method="..."] [--scheme="..."] [--host="..."] path_info`
* Aliases: <none>

The <info>router:match</info> shows which routes match a given request and which don't and for what reason:

  <info>php ./app/console router:match /foo</info>
  or
  <info>php ./app/console router:match /foo --method POST --scheme https --host symfony.com --verbose</info>


### Arguments:

**path_info:**

* Name: path_info
* Is required: yes
* Is array: no
* Description: A path info
* Default: `NULL`

### Options:

**method:**

* Name: `--method`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Sets the HTTP method
* Default: `NULL`

**scheme:**

* Name: `--scheme`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Sets the URI scheme (usually http or https)
* Default: `NULL`

**host:**

* Name: `--host`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Sets the URI host
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

swiftmailer:debug
-----------------

* Description: Displays current mailers for an application
* Usage: `swiftmailer:debug [name]`
* Aliases: <none>

The <info>swiftmailer:debug</info> displays the configured mailers:

  <info>php ./app/console swiftmailer:debug mailer-name</info>

### Arguments:

**name:**

* Name: name
* Is required: no
* Is array: no
* Description: A mailer name
* Default: `NULL`

### Options:

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

swiftmailer:email:send
----------------------

* Description: Send simple email message
* Usage: `swiftmailer:email:send [--from="..."] [--to="..."] [--subject="..."] [--body="..."] [--mailer="..."] [--content-type="..."] [--charset="..."] [--body-source="..."]`
* Aliases: <none>

The <info>swiftmailer:email:send</info> command creates and send simple email message.

<info>php ./app/console swiftmailer:email:send --mailer=custom_mailer --content-type=text/xml</info>

You can get body of message from file:
<info>php ./app/console swiftmailer:email:send --body-source=file --body=/path/to/file</info>


### Options:

**from:**

* Name: `--from`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The from address of the message
* Default: `NULL`

**to:**

* Name: `--to`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The to address of the message
* Default: `NULL`

**subject:**

* Name: `--subject`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The subject of the message
* Default: `NULL`

**body:**

* Name: `--body`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The body of the message
* Default: `NULL`

**mailer:**

* Name: `--mailer`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The mailer name
* Default: `'default'`

**content-type:**

* Name: `--content-type`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The body content type of the message
* Default: `'text/html'`

**charset:**

* Name: `--charset`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The body charset of the message
* Default: `'UTF8'`

**body-source:**

* Name: `--body-source`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The source where body come from [stdin|file]
* Default: `'stdin'`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

swiftmailer:spool:send
----------------------

* Description: Sends emails from the spool
* Usage: `swiftmailer:spool:send [--message-limit[="..."]] [--time-limit[="..."]] [--recover-timeout[="..."]] [--mailer[="..."]]`
* Aliases: <none>

The <info>swiftmailer:spool:send</info> command sends all emails from the spool.

<info>php app/console swiftmailer:spool:send --message-limit=10 --time-limit=10 --recover-timeout=900 --mailer=default</info>


### Options:

**message-limit:**

* Name: `--message-limit`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The maximum number of messages to send.
* Default: `NULL`

**time-limit:**

* Name: `--time-limit`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The time limit for sending messages (in seconds).
* Default: `NULL`

**recover-timeout:**

* Name: `--recover-timeout`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The timeout for recovering messages that have taken too long to send (in seconds).
* Default: `NULL`

**mailer:**

* Name: `--mailer`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The mailer name.
* Default: `NULL`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

translation:debug
-----------------

* Description: Displays translation messages informations
* Usage: `translation:debug [--domain[="..."]] [--only-missing] [--only-unused] locale bundle`
* Aliases: <none>

The <info>translation:debug</info> command helps finding unused or missing translation
messages and comparing them with the fallback ones by inspecting the
templates and translation files of a given bundle.

You can display information about bundle translations in a specific locale:

<info>php ./app/console translation:debug en AcmeDemoBundle</info>

You can also specify a translation domain for the search:

<info>php ./app/console translation:debug --domain=messages en AcmeDemoBundle</info>

You can only display missing messages:

<info>php ./app/console translation:debug --only-missing en AcmeDemoBundle</info>

You can only display unused messages:

<info>php ./app/console translation:debug --only-unused en AcmeDemoBundle</info>


### Arguments:

**locale:**

* Name: locale
* Is required: yes
* Is array: no
* Description: The locale
* Default: `NULL`

**bundle:**

* Name: bundle
* Is required: yes
* Is array: no
* Description: The bundle name
* Default: `NULL`

### Options:

**domain:**

* Name: `--domain`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: The messages domain
* Default: `NULL`

**only-missing:**

* Name: `--only-missing`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Displays only missing messages
* Default: `false`

**only-unused:**

* Name: `--only-unused`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Displays only unused messages
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

translation:update
------------------

* Description: Updates the translation file
* Usage: `translation:update [--prefix[="..."]] [--output-format[="..."]] [--dump-messages] [--force] [--no-backup] [--clean] locale bundle`
* Aliases: <none>

The <info>translation:update</info> command extract translation strings from templates
of a given bundle. It can display them or merge the new ones into the translation files.
When new translation strings are found it can automatically add a prefix to the translation
message.

<info>php ./app/console translation:update --dump-messages en AcmeBundle</info>
<info>php ./app/console translation:update --force --prefix="new_" fr AcmeBundle</info>


### Arguments:

**locale:**

* Name: locale
* Is required: yes
* Is array: no
* Description: The locale
* Default: `NULL`

**bundle:**

* Name: bundle
* Is required: yes
* Is array: no
* Description: The bundle where to load the messages
* Default: `NULL`

### Options:

**prefix:**

* Name: `--prefix`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: Override the default prefix
* Default: `'__'`

**output-format:**

* Name: `--output-format`
* Shortcut: <none>
* Accept value: yes
* Is value required: no
* Is multiple: no
* Description: Override the default output format
* Default: `'yml'`

**dump-messages:**

* Name: `--dump-messages`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Should the messages be dumped in the console
* Default: `false`

**force:**

* Name: `--force`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Should the update be done
* Default: `false`

**no-backup:**

* Name: `--no-backup`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Should backup be disabled
* Default: `false`

**clean:**

* Name: `--clean`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Should clean not found messages
* Default: `false`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

twig:debug
----------

* Description: Shows a list of twig functions, filters, globals and tests
* Usage: `twig:debug [--format="..."] [filter]`
* Aliases: <none>

The <info>twig:debug</info> command outputs a list of twig functions,
filters, globals and tests. Output can be filtered with an optional argument.

<info>php ./app/console twig:debug</info>

The command lists all functions, filters, etc.

<info>php ./app/console twig:debug date</info>

The command lists everything that contains the word date.

<info>php ./app/console twig:debug --format=json</info>

The command lists everything in a machine readable json format.

### Arguments:

**filter:**

* Name: filter
* Is required: no
* Is array: no
* Description: Show details for all entries matching this filter
* Default: `NULL`

### Options:

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: Output format: text or json
* Default: `'text'`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

twig:lint
---------

* Description: Lints a template and outputs encountered errors
* Usage: `twig:lint [--format="..."] [filename]`
* Aliases: <none>

The <info>twig:lint</info> command lints a template and outputs to STDOUT
the first encountered syntax error.

You can validate the syntax of a file:

<info>php ./app/console twig:lint filename</info>

Or of a whole directory:

<info>php ./app/console twig:lint dirname</info>
<info>php ./app/console twig:lint dirname --format=json</info>

You can also pass the template contents from STDIN:

<info>cat filename | php ./app/console twig:lint</info>

Or all template files in a bundle:

<info>php ./app/console twig:lint @AcmeDemoBundle</info>

### Arguments:

**filename:**

* Name: filename
* Is required: no
* Is array: no
* Description: <none>
* Default: `NULL`

### Options:

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The output format
* Default: `'txt'`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`

yaml:lint
---------

* Description: Lints a file and outputs encountered errors
* Usage: `yaml:lint [--format="..."] [filename]`
* Aliases: <none>

The <info>yaml:lint</info> command lints a YAML file and outputs to STDOUT
the first encountered syntax error.

You can validate the syntax of a file:

<info>php ./app/console yaml:lint filename</info>

Or of a whole directory:

<info>php ./app/console yaml:lint dirname</info>
<info>php ./app/console yaml:lint dirname --format=json</info>

Or all YAML files in a bundle:

<info>php ./app/console yaml:lint @AcmeDemoBundle</info>

You can also pass the YAML contents from STDIN:

<info>cat filename | php ./app/console yaml:lint</info>


### Arguments:

**filename:**

* Name: filename
* Is required: no
* Is array: no
* Description: A file or a directory or STDIN
* Default: `NULL`

### Options:

**format:**

* Name: `--format`
* Shortcut: <none>
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The output format
* Default: `'txt'`

**help:**

* Name: `--help`
* Shortcut: `-h`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this help message.
* Default: `false`

**quiet:**

* Name: `--quiet`
* Shortcut: `-q`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not output any message.
* Default: `false`

**verbose:**

* Name: `--verbose`
* Shortcut: `-v|-vv|-vvv`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
* Default: `false`

**version:**

* Name: `--version`
* Shortcut: `-V`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Display this application version.
* Default: `false`

**ansi:**

* Name: `--ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Force ANSI output.
* Default: `false`

**no-ansi:**

* Name: `--no-ansi`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Disable ANSI output.
* Default: `false`

**no-interaction:**

* Name: `--no-interaction`
* Shortcut: `-n`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Do not ask any interactive question.
* Default: `false`

**shell:**

* Name: `--shell`
* Shortcut: `-s`
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch the shell.
* Default: `false`

**process-isolation:**

* Name: `--process-isolation`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Launch commands from shell as a separate process.
* Default: `false`

**env:**

* Name: `--env`
* Shortcut: `-e`
* Accept value: yes
* Is value required: yes
* Is multiple: no
* Description: The Environment name.
* Default: `'dev'`

**no-debug:**

* Name: `--no-debug`
* Shortcut: <none>
* Accept value: no
* Is value required: no
* Is multiple: no
* Description: Switches off debug mode.
* Default: `false`Public services
===============

Definitions
-----------

2f7ab42f2db0de1e31f44eb22f3ab0b6f074dceec0cb513121153c45d72718d4_1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Transport_Esmtp_Auth_CramMd5Authenticator`
- Scope: `container`
- Public: yes
- Synthetic: no

2f7ab42f2db0de1e31f44eb22f3ab0b6f074dceec0cb513121153c45d72718d4_2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Transport_Esmtp_Auth_LoginAuthenticator`
- Scope: `container`
- Public: yes
- Synthetic: no

2f7ab42f2db0de1e31f44eb22f3ab0b6f074dceec0cb513121153c45d72718d4_3
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Transport_Esmtp_Auth_PlainAuthenticator`
- Scope: `container`
- Public: yes
- Synthetic: no

86052847d7227149a9e36288e549539d8f948a7007ebb6a4b6fc394dcac69b50_1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\ResolvedFormTypeFactory`
- Scope: `container`
- Public: yes
- Synthetic: no

annotation_reader
~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Common\Annotations\FileCacheReader`
- Scope: `container`
- Public: yes
- Synthetic: no

assetic.asset_manager
~~~~~~~~~~~~~~~~~~~~~

- Class: `Assetic\Factory\LazyAssetManager`
- Scope: `container`
- Public: yes
- Synthetic: no

assetic.controller
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\AsseticBundle\Controller\AsseticController`
- Scope: `prototype`
- Public: yes
- Synthetic: no

assetic.filter.cssrewrite
~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Assetic\Filter\CssRewriteFilter`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `assetic.filter`
    - Alias: cssrewrite

assetic.filter_manager
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\AsseticBundle\FilterManager`
- Scope: `container`
- Public: yes
- Synthetic: no

assetic.request_listener
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\AsseticBundle\EventListener\RequestListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_listener`
    - Event: kernel.request
    - Method: onKernelRequest

cache_clearer
~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer`
- Scope: `container`
- Public: yes
- Synthetic: no

cache_warmer
~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate`
- Scope: `container`
- Public: yes
- Synthetic: no

data_collector.form
~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\DataCollector\FormDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/form.html.twig
    - Id: form
    - Priority: 255

data_collector.form.extractor
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\DataCollector\FormDataExtractor`
- Scope: `container`
- Public: yes
- Synthetic: no

data_collector.request
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\DataCollector\RequestDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/request.html.twig
    - Id: request
    - Priority: 255

data_collector.router
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_listener`
    - Event: kernel.controller
    - Method: onKernelController
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/router.html.twig
    - Id: router
    - Priority: 255

debug.controller_resolver
~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\Controller\TraceableControllerResolver`
- Scope: `container`
- Public: yes
- Synthetic: no

debug.debug_handlers_listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\DebugHandlersListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

debug.deprecation_logger_listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`
- Tag: `monolog.logger`
    - Channel: deprecation

debug.emergency_logger_listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`
- Tag: `monolog.logger`
    - Channel: emergency

debug.event_dispatcher
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: event

debug.scream_logger_listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`
- Tag: `monolog.logger`
    - Channel: scream

debug.stopwatch
~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Stopwatch\Stopwatch`
- Scope: `container`
- Public: yes
- Synthetic: no

debug.templating.engine.php
~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.cache_warmer`
    - Priority: 20

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_10
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_11
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpFoundation\Session\Flash\FlashBag`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_12
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_13
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_14
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_15
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_16
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage`
- Scope: `request`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_17
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\FormRenderer`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_18
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_19
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_20
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\Profiler\FileProfilerStorage`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_21
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/config.html.twig
    - Id: config
    - Priority: 255

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_22
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/exception.html.twig
    - Id: exception
    - Priority: 255

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_23
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\DataCollector\EventDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/events.html.twig
    - Id: events
    - Priority: 255

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_24
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/logger.html.twig
    - Id: logger
    - Priority: 255
- Tag: `monolog.logger`
    - Channel: profiler

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_25
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\DataCollector\TimeDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/time.html.twig
    - Id: time
    - Priority: 255

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_26
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @WebProfiler/Collector/memory.html.twig
    - Id: memory
    - Priority: 255

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_27
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @Security/Collector/security.html.twig
    - Id: security

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_28
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: @Swiftmailer/Collector/swiftmailer.html.twig
    - Id: swiftmailer

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_29
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `data_collector`
    - Template: DoctrineBundle:Collector:db
    - Id: db

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_3
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.cache_warmer`
    - Priority: 10

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_30
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Config\Loader\LoaderResolver`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_31
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Routing\Loader\XmlFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_32
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Routing\Loader\YamlFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_33
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Routing\Loader\PhpFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_34
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\AsseticBundle\Routing\AsseticLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_35
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Routing\Loader\AnnotationDirectoryLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_36
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_37
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Routing\Loader\AnnotationFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_38
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_39
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `routing.loader`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_4
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.cache_warmer`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_40
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_41
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `security.voter`
    - Priority: 245

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_42
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `security.voter`
    - Priority: 245

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_43
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\Authorization\ExpressionLanguage`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_44
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `security.voter`
    - Priority: 250

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_45
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SecurityBundle\Security\FirewallMap`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_46
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpFoundation\RequestMatcher`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_47
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\Firewall\ChannelListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: security

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_48
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\AccessMap`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_49
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_5
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.cache_warmer`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_50
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\Firewall\ContextListener`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_51
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\User\InMemoryUserProvider`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_52
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_53
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\Firewall\AccessListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: security

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_54
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\AccessMap`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_55
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\Firewall\ExceptionListener`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_56
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\HttpUtils`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_57
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_58
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\SecurityExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_59
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\TranslationExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_6
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_60
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\TwigBundle\Extension\AssetsExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_61
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\TwigBundle\Extension\ActionsExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_62
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\CodeExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_63
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\RoutingExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_64
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\YamlExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_65
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\StopwatchExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_66
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\ExpressionExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_67
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\HttpKernelExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_68
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Extension\FormExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_69
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Form\TwigRenderer`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_7
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.cache_warmer`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_70
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Form\TwigRendererEngine`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_71
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Twig_Extension_Debug`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_72
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\AsseticBundle\Twig\AsseticExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`
- Tag: `assetic.templating.twig`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_73
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_74
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.extension`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_75
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Assetic\Factory\Loader\CachedFormulaLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `assetic.formula_loader`
    - Alias: twig
- Tag: `assetic.templating.twig`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_76
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Assetic\Extension\Twig\TwigFormulaLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `assetic.templating.twig`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_77
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Assetic\Cache\ConfigCache`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_78
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `assetic.templating.twig`
- Tag: `assetic.formula_resource`
    - Loader: twig

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_79
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\DependencyInjection\ParameterBag\ParameterBag`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_8
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_80
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `assetic.factory_worker`

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_81
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\DBAL\Configuration`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_82
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\DBAL\Logging\LoggerChain`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_83
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Doctrine\Logger\DbalLogger`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: doctrine

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_84
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Doctrine\ContainerAwareEventManager`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_85
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\ORM\Configuration`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_86
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Common\Cache\ArrayCache`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_87
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Common\Cache\ArrayCache`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_88
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Common\Cache\ArrayCache`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_89
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\ORM\Mapping\Driver\DriverChain`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_9
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: request

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_90
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\ORM\Mapping\Driver\AnnotationDriver`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_91
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\ORM\Mapping\DefaultNamingStrategy`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_92
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_93
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Common\Annotations\AnnotationReader`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_94
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Transport_StreamBuffer`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_95
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_StreamFilters_StringReplacementFilterFactory`
- Scope: `container`
- Public: yes
- Synthetic: no

df162dc54538f344081718b0ddc00f008958f221347f06fd79eb6a368e1fd035_96
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Transport_Esmtp_AuthHandler`
- Scope: `container`
- Public: yes
- Synthetic: no

doctrine
~~~~~~~~

- Class: `Doctrine\Bundle\DoctrineBundle\Registry`
- Scope: `container`
- Public: yes
- Synthetic: no

doctrine.dbal.connection_factory
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Bundle\DoctrineBundle\ConnectionFactory`
- Scope: `container`
- Public: yes
- Synthetic: no

doctrine.dbal.default_connection
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `stdClass`
- Scope: `container`
- Public: yes
- Synthetic: no

doctrine.orm.default_entity_manager
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\ORM\EntityManager`
- Scope: `container`
- Public: yes
- Synthetic: no

doctrine.orm.default_manager_configurator
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Doctrine\Bundle\DoctrineBundle\ManagerConfigurator`
- Scope: `container`
- Public: yes
- Synthetic: no

doctrine.orm.validator.unique
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `validator.constraint_validator`
    - Alias: doctrine.orm.validator.unique

doctrine.orm.validator_initializer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Doctrine\Validator\DoctrineInitializer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `validator.initializer`

file_locator
~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\Config\FileLocator`
- Scope: `container`
- Public: yes
- Synthetic: no

filesystem
~~~~~~~~~~

- Class: `Symfony\Component\Filesystem\Filesystem`
- Scope: `container`
- Public: yes
- Synthetic: no

form.csrf_provider
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter`
- Scope: `container`
- Public: yes
- Synthetic: no

form.factory
~~~~~~~~~~~~

- Class: `Symfony\Component\Form\FormFactory`
- Scope: `container`
- Public: yes
- Synthetic: no

form.registry
~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\FormRegistry`
- Scope: `container`
- Public: yes
- Synthetic: no

form.resolved_type_factory
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy`
- Scope: `container`
- Public: yes
- Synthetic: no

form.type.birthday
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\BirthdayType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: birthday

form.type.button
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\ButtonType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: button

form.type.checkbox
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\CheckboxType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: checkbox

form.type.choice
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\ChoiceType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: choice

form.type.collection
~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\CollectionType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: collection

form.type.country
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\CountryType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: country

form.type.currency
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\CurrencyType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: currency

form.type.date
~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\DateType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: date

form.type.datetime
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\DateTimeType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: datetime

form.type.email
~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\EmailType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: email

form.type.entity
~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Doctrine\Form\Type\EntityType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: entity

form.type.file
~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\FileType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: file

form.type.form
~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\FormType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: form

form.type.hidden
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\HiddenType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: hidden

form.type.integer
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\IntegerType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: integer

form.type.language
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\LanguageType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: language

form.type.locale
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\LocaleType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: locale

form.type.money
~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\MoneyType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: money

form.type.number
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\NumberType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: number

form.type.password
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\PasswordType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: password

form.type.percent
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\PercentType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: percent

form.type.radio
~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\RadioType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: radio

form.type.repeated
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\RepeatedType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: repeated

form.type.reset
~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\ResetType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: reset

form.type.search
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\SearchType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: search

form.type.submit
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\SubmitType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: submit

form.type.text
~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\TextType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: text

form.type.textarea
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\TextareaType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: textarea

form.type.time
~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\TimeType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: time

form.type.timezone
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\TimezoneType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: timezone

form.type.url
~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Core\Type\UrlType`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type`
    - Alias: url

form.type_extension.csrf
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type_extension`
    - Alias: form

form.type_extension.form.data_collector
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type_extension`
    - Alias: form

form.type_extension.form.http_foundation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type_extension`
    - Alias: form

form.type_extension.form.validator
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type_extension`
    - Alias: form

form.type_extension.repeated.validator
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type_extension`
    - Alias: repeated

form.type_extension.submit.validator
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type_extension`
    - Alias: submit

form.type_guesser.doctrine
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type_guesser`

form.type_guesser.validator
~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `form.type_guesser`

fragment.handler
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\Fragment\FragmentHandler`
- Scope: `container`
- Public: yes
- Synthetic: no

fragment.listener
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\FragmentListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

fragment.renderer.esi
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.fragment_renderer`

fragment.renderer.hinclude
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.fragment_renderer`

fragment.renderer.inline
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.fragment_renderer`

http_kernel
~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel`
- Scope: `container`
- Public: yes
- Synthetic: no

kernel
~~~~~~

- Class: ``
- Scope: `container`
- Public: yes
- Synthetic: yes

locale_listener
~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\LocaleListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

logger
~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.handler.console
~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Handler\ConsoleHandler`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

monolog.handler.debug
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Handler\DebugHandler`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.handler.main
~~~~~~~~~~~~~~~~~~~~

- Class: `Monolog\Handler\StreamHandler`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.deprecation
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.doctrine
~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.emergency
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.event
~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.profiler
~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.request
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.router
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.scream
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.security
~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

monolog.logger.templating
~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Monolog\Logger`
- Scope: `container`
- Public: yes
- Synthetic: no

profiler
~~~~~~~~

- Class: `Symfony\Component\HttpKernel\Profiler\Profiler`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: profiler

profiler_listener
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\ProfilerListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

property_accessor
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\PropertyAccess\PropertyAccessor`
- Scope: `container`
- Public: yes
- Synthetic: no

request
~~~~~~~

- Class: ``
- Scope: `request`
- Public: yes
- Synthetic: yes

request_stack
~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpFoundation\RequestStack`
- Scope: `container`
- Public: yes
- Synthetic: no

response_listener
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\ResponseListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

router
~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Routing\Router`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: router

router_listener
~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\RouterListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`
- Tag: `monolog.logger`
    - Channel: request

routing.loader
~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: router

security.context
~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\SecurityContext`
- Scope: `container`
- Public: yes
- Synthetic: no

security.csrf.token_manager
~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Csrf\CsrfTokenManager`
- Scope: `container`
- Public: yes
- Synthetic: no

security.encoder_factory
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\Encoder\EncoderFactory`
- Scope: `container`
- Public: yes
- Synthetic: no

security.firewall
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\Firewall`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

security.firewall.map.context.default
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SecurityBundle\Security\FirewallContext`
- Scope: `container`
- Public: yes
- Synthetic: no

security.firewall.map.context.dev
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SecurityBundle\Security\FirewallContext`
- Scope: `container`
- Public: yes
- Synthetic: no

security.rememberme.response_listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Http\RememberMe\ResponseListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

security.secure_random
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\Util\SecureRandom`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `monolog.logger`
    - Channel: security

security.validator.user_password
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `validator.constraint_validator`
    - Alias: security.validator.user_password

sensio_distribution.webconfigurator
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\DistributionBundle\Configurator\Configurator`
- Scope: `container`
- Public: yes
- Synthetic: no

sensio_framework_extra.cache.listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

sensio_framework_extra.controller.listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

sensio_framework_extra.converter.datetime
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `request.param_converter`
    - Converter: datetime

sensio_framework_extra.converter.doctrine.orm
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `request.param_converter`
    - Converter: doctrine.orm

sensio_framework_extra.converter.listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

sensio_framework_extra.converter.manager
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager`
- Scope: `container`
- Public: yes
- Synthetic: no

sensio_framework_extra.security.listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

sensio_framework_extra.view.guesser
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser`
- Scope: `container`
- Public: yes
- Synthetic: no

sensio_framework_extra.view.listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

service_container
~~~~~~~~~~~~~~~~~

- Class: ``
- Scope: `container`
- Public: yes
- Synthetic: yes

session
~~~~~~~

- Class: `Symfony\Component\HttpFoundation\Session\Session`
- Scope: `container`
- Public: yes
- Synthetic: no

session.storage.filesystem
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage`
- Scope: `container`
- Public: yes
- Synthetic: no

session.storage.native
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage`
- Scope: `container`
- Public: yes
- Synthetic: no

session.storage.php_bridge
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage`
- Scope: `container`
- Public: yes
- Synthetic: no

session_listener
~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\EventListener\SessionListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

streamed_response_listener
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\StreamedResponseListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

swiftmailer.email_sender.listener
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`

swiftmailer.mailer.default
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Mailer`
- Scope: `container`
- Public: yes
- Synthetic: no

swiftmailer.mailer.default.plugin.messagelogger
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Plugins_MessageLogger`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `swiftmailer.default.plugin`

swiftmailer.mailer.default.spool
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_MemorySpool`
- Scope: `container`
- Public: yes
- Synthetic: no

swiftmailer.mailer.default.transport
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Transport_SpoolTransport`
- Scope: `container`
- Public: yes
- Synthetic: no

swiftmailer.mailer.default.transport.real
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Swift_Transport_EsmtpTransport`
- Scope: `container`
- Public: yes
- Synthetic: no

templating
~~~~~~~~~~

- Class: `Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine`
- Scope: `container`
- Public: yes
- Synthetic: no

templating.asset.package_factory
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory`
- Scope: `container`
- Public: yes
- Synthetic: no

templating.filename_parser
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser`
- Scope: `container`
- Public: yes
- Synthetic: no

templating.globals
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables`
- Scope: `container`
- Public: yes
- Synthetic: no

templating.helper.actions
~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: actions

templating.helper.assets
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Templating\Helper\CoreAssetsHelper`
- Scope: `request`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: assets

templating.helper.code
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: code

templating.helper.form
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: form

templating.helper.logout_url
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: logout_url

templating.helper.request
~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: request

templating.helper.router
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: router

templating.helper.security
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: security

templating.helper.session
~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: session

templating.helper.slots
~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Templating\Helper\SlotsHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: slots

templating.helper.stopwatch
~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: stopwatch

templating.helper.translator
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `templating.helper`
    - Alias: translator

templating.loader
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader`
- Scope: `container`
- Public: yes
- Synthetic: no

templating.name_parser
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser`
- Scope: `container`
- Public: yes
- Synthetic: no

translation.dumper.csv
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\CsvFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: csv

translation.dumper.ini
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\IniFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: ini

translation.dumper.json
~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\JsonFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: json

translation.dumper.mo
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\MoFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: mo

translation.dumper.php
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\PhpFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: php

translation.dumper.po
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\PoFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: po

translation.dumper.qt
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\QtFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: ts

translation.dumper.res
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\IcuResFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: res

translation.dumper.xliff
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\XliffFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: xlf

translation.dumper.yml
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Dumper\YamlFileDumper`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.dumper`
    - Alias: yml

translation.extractor
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Extractor\ChainExtractor`
- Scope: `container`
- Public: yes
- Synthetic: no

translation.extractor.php
~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.extractor`
    - Alias: php

translation.loader
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader`
- Scope: `container`
- Public: yes
- Synthetic: no

translation.loader.csv
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\CsvFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: csv

translation.loader.dat
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\IcuDatFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: dat

translation.loader.ini
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\IniFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: ini

translation.loader.json
~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\JsonFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: json

translation.loader.mo
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\MoFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: mo

translation.loader.php
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\PhpFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: php

translation.loader.po
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\PoFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: po

translation.loader.qt
~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\QtFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: ts

translation.loader.res
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\IcuResFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: res

translation.loader.xliff
~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\XliffFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: xlf
    - Legacy_alias: xliff
    - Legacy-alias: xliff

translation.loader.yml
~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Loader\YamlFileLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.loader`
    - Alias: yml

translation.writer
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Translation\Writer\TranslationWriter`
- Scope: `container`
- Public: yes
- Synthetic: no

translator
~~~~~~~~~~

- Class: `Symfony\Component\Translation\IdentityTranslator`
- Scope: `container`
- Public: yes
- Synthetic: no

translator.default
~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\FrameworkBundle\Translation\Translator`
- Scope: `container`
- Public: yes
- Synthetic: no

twig
~~~~

- Class: `Twig_Environment`
- Scope: `container`
- Public: yes
- Synthetic: no

twig.controller.exception
~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\TwigBundle\Controller\ExceptionController`
- Scope: `container`
- Public: yes
- Synthetic: no

twig.exception_listener
~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\EventListener\ExceptionListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`
- Tag: `monolog.logger`
    - Channel: request

twig.loader
~~~~~~~~~~~

- Class: `Symfony\Bundle\TwigBundle\Loader\FilesystemLoader`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `twig.loader`

twig.translation.extractor
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bridge\Twig\Translation\TwigExtractor`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `translation.extractor`
    - Alias: twig

uri_signer
~~~~~~~~~~

- Class: `Symfony\Component\HttpKernel\UriSigner`
- Scope: `container`
- Public: yes
- Synthetic: no

validator
~~~~~~~~~

- Class: `Symfony\Component\Validator\ValidatorInterface`
- Scope: `container`
- Public: yes
- Synthetic: no

validator.builder
~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Validator\ValidatorBuilderInterface`
- Scope: `container`
- Public: yes
- Synthetic: no

validator.email
~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Validator\Constraints\EmailValidator`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `validator.constraint_validator`
    - Alias: Symfony\Component\Validator\Constraints\EmailValidator

validator.expression
~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Component\Validator\Constraints\ExpressionValidator`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `validator.constraint_validator`
    - Alias: validator.expression

web_profiler.controller.exception
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController`
- Scope: `container`
- Public: yes
- Synthetic: no

web_profiler.controller.profiler
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController`
- Scope: `container`
- Public: yes
- Synthetic: no

web_profiler.controller.router
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\WebProfilerBundle\Controller\RouterController`
- Scope: `container`
- Public: yes
- Synthetic: no

web_profiler.debug_toolbar
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Class: `Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener`
- Scope: `container`
- Public: yes
- Synthetic: no
- Tag: `kernel.event_subscriber`


Aliases
-------

database_connection
~~~~~~~~~~~~~~~~~~~

- Service: `doctrine.dbal.default_connection`
- Public: yes

debug.templating.engine.twig
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Service: `templating`
- Public: yes

doctrine.orm.entity_manager
~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Service: `doctrine.orm.default_entity_manager`
- Public: yes

event_dispatcher
~~~~~~~~~~~~~~~~

- Service: `debug.event_dispatcher`
- Public: yes

mailer
~~~~~~

- Service: `swiftmailer.mailer.default`
- Public: yes

sensio.distribution.webconfigurator
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Service: `sensio_distribution.webconfigurator`
- Public: yes

session.storage
~~~~~~~~~~~~~~~

- Service: `session.storage.native`
- Public: yes

swiftmailer.mailer
~~~~~~~~~~~~~~~~~~

- Service: `swiftmailer.mailer.default`
- Public: yes

swiftmailer.plugin.messagelogger
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

- Service: `swiftmailer.mailer.default.plugin.messagelogger`
- Public: yes

swiftmailer.spool
~~~~~~~~~~~~~~~~~

- Service: `swiftmailer.mailer.default.spool`
- Public: yes

swiftmailer.transport
~~~~~~~~~~~~~~~~~~~~~

- Service: `swiftmailer.mailer.default.transport`
- Public: yes

swiftmailer.transport.real
~~~~~~~~~~~~~~~~~~~~~~~~~~

- Service: `swiftmailer.mailer.default.transport.real`
- Public: yes
