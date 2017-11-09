name 'development'
description 'Local development environment'

default_attributes(
    'mysql' => {
        'change_root' => true,
        'root_password' => 'fmk4B4SG5hHERl8lafbfjY^',
        'users' => {
            'golfpod' => {
                'databases' => %w(golfpod),
                'grants' => %w(all),
                'host' => '%',
                'password' => 'jj4V57J2xq902KwH85h88Ebms'
            }
        },
        'databases' => %w(
            golfpod
        )
    },
    'nginx' => {
        'sendfile' => 'off',
        'user' => 'vagrant'
    },
    composer: {
        composer_home: '/home/vagrant/.composer'
    },
    tls: {
        cert_path: '/vagrant',
        key_path: '/vagrant',
        dhparams: {
            bits: 512
        },
        snakeoil: {
            certs: {
                'dev.golfpod.org' => {
                    bits: 1024,
                    days: 1024,
                    country: 'US',
                    state: 'Oregon',
                    city: 'Portland',
                    company: 'Craft',
                    section: 'Development',
                    hostname: 'dev.golfpod.org',
                    contact: ''
                }
            }
        }
    },
    craft: {
       user: 'vagrant',
       group: 'vagrant',
       vhosts: {
           'dev.golfpod.org' => {
               force_www: true,
               domain:  'dev.golfpod.org',
               docroot: '/vagrant/web',
               cert:    '/vagrant/dev.golfpod.org.crt',
               key:     '/vagrant/dev.golfpod.org.key'
           }
       },
       envs: {
           '/vagrant/.env' => {
               CRAFT_APP_ID:               'golfpod',
               CRAFT_APP_PATH:             '/vagrant/vendor/craftcms/cms/src/',
               CRAFT_BASE_PATH:            '/vagrant/',
               CRAFT_CONFIG_PATH:          '/vagrant/config/',
               CRAFT_CP_TRIGGER:           'admin',
               CRAFT_ENVIRONMENT:          'development',
               CRAFT_FRAMEWORK_PATH:       '/vagrant/vendor/yiisoft/yii2/',
               CRAFT_PLUGINS_PATH:         '/vagrant/plugins/',
               CRAFT_STORAGE_PATH:         '/vagrant/storage/',
               CRAFT_TEMPLATES_PATH:       '/vagrant/templates/',
               CRAFT_TRANSLATIONS_PATH:    '/vagrant/translations/',
               CRAFT_SITE_URL:             'https://dev.golfpod.org/',
               CRAFT_SITENAME:             'GolfPOD',
               CRAFT_VENDOR_PATH:          '/vagrant/vendor/',
               CRAFT_SECURITY_KEY:         'DfHVm1svvFiY3NAMOdgaVh4hz4xEodT9',
               DB_SERVER:                  '192.168.55.20',
               DB_PORT:                    3306,
               DB_DATABASE:                'golfpod',
               DB_USER:                    'golfpod',
               DB_PASSWORD:                'jj4V57J2xq902KwH85h88Ebms',
               CACHE_HOST:                 '192.168.55.20',
               CACHE_PORT:                 6379
           }
       }
   },
    'php' => {
        'ext' => {
            'xdebug' => {
                'enable' => true
            }
        },
        'sapi' => {
            'fpm' => {
                'ini' => {
                    # Disable Functions: Removed from default list: rename, putenv
                    'disable_functions' => '"dl, exec, gc_collect_cycles, gc_disable,
                        gc_enable, gc_enabled, get_cfg_var, get_current_user, getlastmod,
                        getmygid, getmyinode, getmypid, getmyuid, lchgrp, lchown, link, passthru,
                        pclose, pcntl_alarm, pcntl_exec, pcntl_fork, pcntl_get_last_error,
                        pcntl_getpriority, pcntl_setpriority, pcntl_signal, pcntl_signal_dispatch,
                        pcntl_sigprocmask, pcntl_sigtimedwait, pcntl_sigwaitinfo, pcntl_strerror,
                        pcntl_wait, pcntl_waitpid, pcntl_wexitstatus, pcntl_wifexited,
                        pcntl_wifsignaled, pcntl_wifstopped, pcntl_wstopsig, pcntl_wtermsig, php_uname,
                        phpinfo, popen, posix_getlogin, posix_mkfifo, posix_ttyname, proc_close,
                        proc_get_status, proc_nice, proc_open, proc_terminate, prog_get_status,
                        set_time_limit, shell_exec, show_source, system"'
                },
                'opcache' => {
                    'ini' => {
                        'opcache_enable' => 0
                    }
                },
                'conf' => {
                    'pools' => {
                        'www' => {
                            'user' => 'vagrant',
                            'group' => 'vagrant',
                            'listen_user' => 'vagrant',
                            'listen_group' => 'vagrant',
                        }
                    }
                }
            },
            'cli' => {
                'ini' => {
                    'allow_url_fopen' => 'On' # For composer
                }
            }
        }
    },
    'composer' => {
        'auth' => {}
    }
)
